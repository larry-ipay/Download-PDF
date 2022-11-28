<?php
namespace App\Controllers;

use App\Controllers\Utils\CustomResponses;
use App\Controllers\Utils\DbOperation;
use Carbon\Carbon;
use App\Controllers\Utils\FileDownload;
use App\Middleware\Support\Pagination;
use App\Models\Transactions;
use App\Services\PDF;
use App\Services\TPDF;
class TransactionsController{

    private $customResponse;
    private $paginate;

    const outputColumns = ['email','service_id','amount','account','phone','country'];
    public function __construct()
    {
        $this->customResponse = new CustomResponses();
        $this->paginate = new Pagination();
    }

    public function get_transactions($request,$response)
    {
   
        $queryData = $request->getQueryParams();
        $page = isset($queryData['page']) && !empty($queryData['page']) ? $queryData['page'] : 1;
        $limit = isset($queryData['limit']) && !empty($queryData['limit']) ? $queryData['limit'] : 100;
        $trans = new Transactions();
        $data = $this->paginate->page($page)->limit($limit)->data($trans,[],self::outputColumns)['data']->toArray();
        if(empty($data)) return $this->customResponse->is400Response($response, 'NULL');
        $file_name = random_code_generator()."_transactions.pdf";
        $excl_path = storage_path('exports/'.$file_name);
        //feed array into fpdf
        $headr = ['Email','Service','Amount','Account','Phone','Country'];
        $pdf = new PDF();
        $pdf->setFont('Times','',11);
        $pdf->AddPage();
        $data_chunk = array_chunk($data,5000,true);
        foreach($data_chunk as $dc)
            $pdf->TransactionTable($headr,$dc);
        $pdf->output('F',$excl_path);
        $data = $data_chunk = $headr =$pdf = null;
        $response = $response->withBody(new FileDownload($excl_path));
        return $response
                ->withHeader('Content-Type','application/pdf')
                ->withHeader('Content-Disposition',"attachment; filename=$file_name");
        // return $this->customResponse->is200Response($response, "HI");
    }


  
}