<?php

namespace App\Controllers\Utils;

use App\Models\Transactions;
use App\Models\Payins;


use Exception;
// use Illuminate\Support\Facades\DB;
use Illuminate\Database\Capsule\Manager as DB;


class DbOperation
{

    /*
    |--------------------------------------------------------------------------
    | Database Access functions
    |--------------------------------------------------------------------------
    | These functions are wrappers for DB query using the models. This to promote
    | reusable code and making it easy to optimize the query.
    |
    |
    |
    */


    public static function get_transactions(array $conditions, array $columns = [])
    {
        if(empty($columns))
        {
            $trans = Transactions::Where($conditions)->get();
        }else{
            $transa = Transactions::where($conditions)->get($columns);
        }
        return empty($trans) ? [] : $trans;
    }

  

    public static function get_all_transactions(array $tables){
       
        // check if table exists
        $transactions = array_map(function ($table){
            
            $trans= [];
            if(self::check_if_table_exist($table)!== false){
                $payinsTable = new Payins;
                $payinsTable->setTable($table);
                $pyns = $payinsTable->orderByDesc('id')->get()->toArray();
              
            }
            $trans["payins_".$table]= $pyns;
       
            return $trans;
        }, $tables);
        return empty($transactions) ? [] : $transactions;
    }


    public static function get_single_payins($table, $id, array $columns=[])
    {
        $trans = [];
        if(self::check_if_table_exist($table) !== false)
        {
            $payinsTable = new Payins;
            $payinsTable->setTable($table);
            $trans = $payinsTable->where("txncode","=",$id)->first();
        }
        return empty($trans) ? [] : $trans;
    }

    public static function get_id_from_parent($table,$id, array $columns=[])
    {
        $trans = [];
        if(self::check_if_table_exist($table) !== false)
        {
            $ptable = new Payins;
            $ptable->setTable($table);
            $trans = $ptable->where("id","=", $id)->get()->toArray();
        }
        return empty($trans) ? [] : $trans;
    }

 
 

    public static function get_billing_transactions(array $conditions=[], array $columns=[])
    {
        if (!empty($columns)) {
            $transactions = Transactions::where($conditions)->orderByDesc('id')->get($columns)->toArray();
        } else {
            $transactions = Transactions::where($conditions)->orderByDesc('id')->get()->toArray();
        }

        return empty($transactions) ? [] : $transactions;
    }
    
    public static function get_billing_transaction(array $conditions=[], array $columns=[])
    {
        if (!empty($columns)) {
            $transactions = Transactions::where($conditions)->first($columns);
        } else {
            $transactions = Transactions::where($conditions)->first();
        }

        return empty($transactions) ? [] : $transactions;
    }
    
  

   
    




    public static function generate_new_table_column($table, $object, $column_name, $properties)
    {

        if (self::check_if_column_exist($object, $column_name)) return true;
 
        $query = "
            ALTER TABLE $table
            ADD $column_name $properties
            ";

        return DB::connection()->query($query);
        
    }

    public static function check_if_table_exist($table)
    {
         try{
            return  DB::schema()->hasTable($table);
        } catch(Exception $ex)
        {
            return $ex->getMessage();
        }
       
        
    }

    public static function check_if_column_exist($object, $column_name)
    {
        return $object->getConnection()
            ->getSchemaBuilder()
            ->hasColumn($object->getTable(), $column_name);
    }



}