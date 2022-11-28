<?php

namespace App\Services;
use TCPDF;


class TPDF extends TCPDF{

    public function __construct($orientation='P',$unit='mm', $size='A4', $unicode=true,$encoding='UTF-8', $diskcache=false, $pdfa=true){
        parent::__construct($orientation,$unit,$size,$unicode,$encoding,$diskcache,$pdfa);
    }

    public function BasicTable($header,$data)
    {
        //header
        foreach($header as $col)
            $this->Cell(40,7,$col,1);
        $this->Ln();

        //Data
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(40,6,$col,1);
            $this->Ln();
        }
    }
}