<?php


use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


/*
   |--------------------------------------------------------------------------
   | Global Helper Functions
   |--------------------------------------------------------------------------
   |
   |
   | These are the functions for performing mundane process like
   | debugging, full pathfinder and more. Place them here and they
   | are accessible globally without need to include or require
   |
   |
   |
   */

if (!function_exists('env')) {
    function env($key, $default = false)
    {
        $value = getenv($key);

        throw_when(
            !$value and !$default,
            "{$key} is not a define .env variable and has no default value"
        );

        return $value or $default;
    }

}

if (!function_exists('base_path')) {
    function base_path($path = '')
    {
        return __DIR__ . "/../{$path}";
    }
}

if (!function_exists('config_path')) {
    function config_path($path = '')
    {
        return base_path("config/{$path}");
    }
}

if (!function_exists('database_path')) {
    function database_path($path = '')
    {
        return base_path("database/{$path}");
    }
}

if (!function_exists('storage_path')) {
    function storage_path($path = '')
    {
        return base_path("storage/{$path}");
    }
}

if (!function_exists('public_path')) {
    function public_path($path = '')
    {
        return base_path("public/{$path}");
    }
}

if (!function_exists('resources_path')) {
    function resources_path($path = '')
    {
        return base_path("resources/{$path}");
    }
}

if (!function_exists('routes_path')) {
    function routes_path($path = '')
    {
        return base_path("routes/{$path}");
    }
}

if (!function_exists('app_path')) {
    function app_path($path = '')
    {
        return base_path("app/{$path}");
    }
}

if (!function_exists('bootstrap_path')) {
    function bootstrap_path($path = '')
    {
        return base_path("bootstrap/{$path}");
    }
}

if (!function_exists('dd')) {
    function dd()
    {
        array_map(function ($content) {
            echo "<pre>";
            var_dump($content);
            echo "</pre>";
            echo "<hr>";
        }, func_get_args());

        die;
    }
}

if (!function_exists('throw_when')) {
    function throw_when(bool $fails, string $message, string $exception = Exception::class)
    {
        if (!$fails) return;

        throw new $exception($message);
    }
}

if (!function_exists('class_basename')) {
    function class_basename($class)
    {
        $class = is_object($class) ? get_class($class) : $class;

        return basename(str_replace('\\', '/', $class));
    }
}

if (!function_exists('config')) {
    function config($path = null)
    {
        $config = [];
        $folder = scandir(config_path());
        $config_files = array_slice($folder, 2, count($folder));

        foreach ($config_files as $file) {
            throw_when(
                Str::after($file, '.') !== 'php',
                'Config files must be .php files'
            );


            data_set($config, Str::before($file, '.php'), require config_path($file));
        }

        return data_get($config, $path);
    }
}

if (!function_exists('data_get')) {
    /**
     * Get an item from an array or object using "dot" notation.
     *
     * @param mixed $target
     * @param string|array|int|null $key
     * @param mixed $default
     * @return mixed
     */
    function data_get($target, $key, $default = null)
    {
        if (is_null($key)) {
            return $target;
        }

        $key = is_array($key) ? $key : explode('.', $key);

        while (!is_null($segment = array_shift($key))) {
            if ($segment === '*') {
                if ($target instanceof Collection) {
                    $target = $target->all();
                } elseif (!is_array($target)) {
                    return value($default);
                }

                $result = [];

                foreach ($target as $item) {
                    $result[] = data_get($item, $key);
                }

                return in_array('*', $key) ? Arr::collapse($result) : $result;
            }

            if (Arr::accessible($target) && Arr::exists($target, $segment)) {
                $target = $target[$segment];
            } elseif (is_object($target) && isset($target->{$segment})) {
                $target = $target->{$segment};
            } else {
                return value($default);
            }
        }

        return $target;
    }
}

if (!function_exists('data_set')) {
    /**
     * Set an item on an array or object using dot notation.
     *
     * @param mixed $target
     * @param string|array $key
     * @param mixed $value
     * @param bool $overwrite
     * @return mixed
     */
    function data_set(&$target, $key, $value, $overwrite = true)
    {
        $segments = is_array($key) ? $key : explode('.', $key);

        if (($segment = array_shift($segments)) === '*') {
            if (!Arr::accessible($target)) {
                $target = [];
            }

            if ($segments) {
                foreach ($target as &$inner) {
                    data_set($inner, $segments, $value, $overwrite);
                }
            } elseif ($overwrite) {
                foreach ($target as &$inner) {
                    $inner = $value;
                }
            }
        } elseif (Arr::accessible($target)) {
            if ($segments) {
                if (!Arr::exists($target, $segment)) {
                    $target[$segment] = [];
                }

                data_set($target[$segment], $segments, $value, $overwrite);
            } elseif ($overwrite || !Arr::exists($target, $segment)) {
                $target[$segment] = $value;
            }
        } elseif (is_object($target)) {
            if ($segments) {
                if (!isset($target->{$segment})) {
                    $target->{$segment} = [];
                }

                data_set($target->{$segment}, $segments, $value, $overwrite);
            } elseif ($overwrite || !isset($target->{$segment})) {
                $target->{$segment} = $value;
            }
        } else {
            $target = [];

            if ($segments) {
                data_set($target[$segment], $segments, $value, $overwrite);
            } elseif ($overwrite) {
                $target[$segment] = $value;
            }
        }

        return $target;
    }
}

if (!function_exists('get_ip')) {
    function get_ip()
    {
        //whether ip is from the share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } //whether ip is from the proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } //whether ip is from the remote address
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}

if (!function_exists('generate_uuid_v4')) {
    function generate_uuid_v4($data = null)
    {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}

if (!function_exists('http_request')) {
    /**
     * @param $url
     * @param $payload
     * @param array $headers
     * @param string $requestMethod
     * @return bool|string
     */
    function http_request($url, $payload, $headers = [], $requestMethod = 'GET') 
    {       

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        // curl_setopt($ch, CURLOPT_PROXY, $_ENV['PROXY_PORT']);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $requestMethod);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers ?? ['Content-Type:application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload ?? '');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $result = curl_exec($ch);
        
        if ($result === false) {
            $err = curl_error($ch);
            curl_close($ch);
            // return err_msg($err);
            return false;
        }
        curl_close($ch);

        return $result;
    }
}

if (!function_exists("password_hashing")) {
    function password_hashing($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}

if (!function_exists("json_file_reader")) {
    function json_file_reader($file = '')
    {
        $path = storage_path("json_files") . "/" . $file . ".json";
        return file_exists($path)
            ? json_decode(file_get_contents($path), true)
            : null;
    }
}

if (!function_exists('explode_string_by_pattern')) {
    function explode_string_by_pattern($content)
    {
        if (boolval(preg_match("/^[^\W_]+_[^\W_]+$/", $content)) === true) {
            $strArray = explode("_", $content);
        } else {
            $strArray = explode(".", $content);
        }

        return $strArray;
    }
}

if (!function_exists("multidimensional_array_walk")) {
    function multidimensional_array_walk(array $value): bool
    {
        $empty = true;
        array_walk_recursive($value, function ($leaf) use (&$empty) {
            if ($leaf === [] || $leaf === '') return;

            $empty = false;
        });

        return $empty;
    }
}

if (!function_exists("create_folder")) {
    function create_folder($path): bool
    {
        if (is_dir($path))
            return true;
        $prev_path = substr($path, 0, strrpos($path, '/', -2) + 1);
        $return = create_folder($prev_path);
        return $return && is_writable($prev_path) && mkdir($path);
    }
}

if (!function_exists("upload_single_file")) {
    function upload_single_file($uploadedFile, $companyId, $entity_name)
    {

        $internalError = false;
        $fileExt = explode('.', $uploadedFile->getClientFilename()); 
        $fileActualExt = strtolower(end($fileExt));

        $allowed = ['jpeg', 'jpg', 'png', 'pdf','csv'];
        if (!in_array($fileActualExt, $allowed)) {
            return [
                "status" => $internalError,
                "message" => "File not allowed"
            ];
        }

        if ($uploadedFile->getError() != UPLOAD_ERR_OK) {
            return [
                "status" => $internalError,
                "message" => "File is corrupted"
            ];
        }

        if ($uploadedFile->getSize() >= 1000000) {
            return [
                "status" => $internalError,
                "message" => "File too large"
            ];
        }

        $fileNewName = uniqid('', true) . "." . $fileActualExt;

        //create folder
        $rootDocumentsPath = storage_path("upload");
        if (!file_exists($rootDocumentsPath)) {
            create_folder($rootDocumentsPath);
        }

        $vendorDocumentsPath = $rootDocumentsPath . "/" . $companyId;
        if (!file_exists($vendorDocumentsPath)) {
            create_folder($vendorDocumentsPath);
        }

        $entityDecsDestination = $vendorDocumentsPath . "/" . $entity_name;
        if (!file_exists($entityDecsDestination)) {
            create_folder($entityDecsDestination);
        }

        $fileDestination = $entityDecsDestination . "/" . $fileNewName;
        $uploadedFile->moveTo($fileDestination, $fileNewName);

        $url = $_SERVER['SERVER_NAME'] ."/" . $fileDestination;

        return [
            "status" => true,
            "baseUrl" => $entityDecsDestination,
            "originalName" => $uploadedFile->getClientFilename(),
            "modifiedName" => $fileNewName,
            "filePath" => $url,
            "extension" => $fileActualExt,
        ];
    }
}

if (!function_exists('hash_generation')) {
    function hash_generation( $key, $input = '')
    {
        return hash_hmac('sha1', $input, $key);
    }
}

if (!function_exists('generate_order_id')) {
    function generate_order_id($prefix = '')
    {
        if (empty($prefix)) {
            return time() . mt_rand();
        }
       return  "$prefix".substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',10)),0,15);

    }

}

if (!function_exists('get_uganda_base_url')) {
    function get_uganda_base_url()
    {
        $urls = config('ipay.urls');

        $countryUrls = $urls['UG'] ;

        return $countryUrls['billing_base_url'];

    }
}

if (!function_exists('random_code_generator')) {
    /**
     * @throws Exception
     */
    function random_code_generator(): int
    {
        return random_int(10000, 99999);
    }
}

if (!function_exists("slugger")){

    function slugger($content = '')
    {
        //dd(strpos($content, ' '));
        $new_category_code = strpos($content, ' ') !== false
            ? str_replace(' ', '_', $content)
            : $content;
        return strtolower($new_category_code);
    }
}

if (!function_exists('err_msg')){
    function err_msg($msg = '')
    {
        return ['errCode' => 400, 'msg'=> $msg];
    }
}



