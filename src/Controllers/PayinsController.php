<?php

namespace App\Controllers;

use App\Controllers\Utils\CustomResponses;
use App\Controllers\Utils\DbOperation;
use App\Controllers\Utils\FileDownload;
use App\Middleware\Support\Pagination;
use App\Models\Payins;
use App\Services\PDF;
class PayinsController{

    private $customResponse;
    private $paginate;

    const INBOX = "_inbox";
    const outputColumns = ['channeltype','vendorid','fname','lname','sendernumber','txncode','txnamt','curr','email'];
    public function __construct()
    {
        $this->customResponse = new CustomResponses();
        $this->paginate = new Pagination();
    }

    public function get_payins($request,$response)
    {
        $queryData = $request->getQueryParams();
        $page = isset($queryData['page']) && !empty($queryData['page']) ? $queryData['page'] : 1;
        $limit = isset($queryData['limit']) && !empty($queryData['limit']) ? $queryData['limit'] : 100;
        $tble = isset($queryData['table']) && !empty($queryData['table']) ? $queryData['table'] : 'demo';
        $offset = (--$page) * $limit;
        $table_name = $tble.self::INBOX;
        $tb = DbOperation::check_if_table_exist($table_name);
        if($tb == false) return $this->customResponse->is500Response($response, 'Table doesn\'t exist');
        $payins = new Payins;
        $payins->setTable($table_name);
        $data = $payins->limit($limit)->offset($offset)->get(self::outputColumns)->toArray();
        if(empty($data)) return $this->customResponse->is400Response($response, 'NULL');
        $file_name = random_code_generator()."_payins.pdf";
        $excl_path = storage_path('exports/'.$file_name);
        $headr = ['Channel','Vendor','Name','Name','Phone','Code','Amount','Curr','Email'];
        $pdf = new PDF();
        $pdf->setFont('Times','',11);
        $pdf->AddPage();
        $data_chunk = array_chunk($data,5000,true);
        foreach($data_chunk as $dc)
            $pdf->InboxTable($headr,$dc);
        $pdf->output('F',$excl_path);
        $data = $data_chunk = $headr =$pdf = null;
        $response = $response->withBody(new FileDownload($excl_path));
        return $response
                ->withHeader('Content-Type','application/pdf')
                ->withHeader('Content-Disposition',"attachment; filename=$file_name");
    }

    
  
}