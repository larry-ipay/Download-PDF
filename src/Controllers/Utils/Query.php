<?php

namespace App\Controllers\Utils;

use AfricasTalking\SDK\AfricasTalking;
use App\Models\PasswordHistory;
use App\Models\PasswordReset;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\UserHasPermission;
use App\Models\VerificationCode;
use App\Controllers\Utils\DbOperation;
use Deskola\SimpleValidator\InputFilter;
use Exception;
use Illuminate\Support\Facades\DB;

class Query
{

    private $customResponse;

    public function __construct()
    {
        $this->customResponse = new CustomResponses();
    }

    private static function get_countries_from_json()
    {
        return storage_path('extra/countries.json');
    }

    /*
    |--------------------------------------------------------------------------
    | Miscellaneous Resource Endpoints
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    public function get_countries($response)
    {
        $countriesExtraction = json_file_reader('countries');

        return $this->customResponse->is200Response($response, $countriesExtraction);
    }

    public function operational_countries($response)
    {
        $countries = Query::get_operational_countries();

        return $this->customResponse->is200Response($response, $countries);
    }

    public function update_operational_country($request, $response)
    {
        $inputData = json_decode($request->getBody(), true);
        $validationInputs = (new InputFilter())->filter($inputData, [
            'countryIso' => 'String| required| max:2',
            'operational' => 'string| required| max:1'
        ]);

        if (!empty($validationInputs)) {
            return $this->customResponse->is406Response($response, $validationInputs);
        }

        $countriesJsonPath = self::get_countries_from_json();
        $countries = json_decode(file_get_contents($countriesJsonPath), true);
        $newCountries = [];
        $trackLoopState = false;

        foreach ($countries as $country) {
            if ($country['isoName'] === $inputData['countryIso']) {
                $country['operational'] = $inputData['operational'] === "1" ? true : false;
                $trackLoopState = true;
            }
            array_push($newCountries, $country);
        }

        if ($trackLoopState === false) {
            return $this->customResponse->is400Response($response, MESSAGES['record_not_found']);
        }

        return $this->customResponse->is200Response($response, MESSAGES['data_saved']);

    }



    /*
    |--------------------------------------------------------------------------
    | Internal reusable Services Resource Endpoints
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    public static function country_exist($countryIso)
    {
        $countriesExtraction = json_file_reader('countries');

        $isos = array_map(function ($country) {
            return $country['isoName'];
        }, $countriesExtraction);

        if (!in_array($countryIso, $isos)) {
            return false;
        }

        return true;

    }

    public static function get_operational_countries()
    {
        $countriesExtraction = json_file_reader('countries');

        $opCountries = [];
        foreach ($countriesExtraction as $country) {
            if ($country['operational'] === true) {
                array_push($opCountries, [
                    'isoName' => $country['isoName'],
                    'operational' => $country['operational'],
                    'currency' => $country['currencyCode'] === "USD" ? $country['currencyCode'] : [$country['currencyCode'], "USD"],
                    'flag' => stripcslashes($country['flag'])
                ]);
            }
        }
        return $opCountries;
    }


}