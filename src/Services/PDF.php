<?php

namespace App\Services;
use FPDF;


class PDF extends FPDF{

    public function __construct($orientation='L',$unit='mm',$size='A4'){
        parent::__construct($orientation,$unit,$size);
    }

    public function TransactionTable($header,$data)
    {
        $w = ['55','40','20','30','28','15'];
        //header
        for($i=0;$i<count($header); $i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C');
        $this->Ln();

        //Data
        foreach($data as $row)
        {
            $c = array_combine($row,$w);
            foreach($c as $k=>$v)
                if(empty($k)) 
                    $this->Cell($v,7,"null",1,0);
                else
                    $this->Cell($v,7,$k,1,0);
            $this->Ln();
        }
       
    }
    public function InboxTable($header, $data)
    {
        $w = ['17','22','40','40','25','20','15','15','55'];
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C');
        $this->Ln();

        foreach($data as $row){
            $c = array_combine($row,$w);
            foreach($c as $k=>$v)
                $this->Cell($v,7,$k,1,0);
            $this->Ln();
        }
    }

    private static function array_combine_($keys, $values){
        $result = array();
    
        foreach ($keys as $i => $k) {
         $result[$k][] = $values[$i];
         }
    
        array_walk($result, function(&$v){
         $v = (count($v) == 1) ? array_pop($v): $v;
         });
    
        return $result;
    }
}