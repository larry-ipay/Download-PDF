<?php

namespace App\Middleware\Support;

class Pagination
{
    public $page;
    public $limit;

    public function __construct()
    {
    }

    public function page($page = 1)
    {
        $this->page = $page;

        return $this;
    }

    public function limit($limit = 10)
    {
        $this->limit = $limit;

        return $this;
    }

    public function data($object,  array $conditions = [], array $columns = [])
    {
        $offset = (--$this->page) * $this->limit;

        if (empty($conditions) && empty($columns)){
            $countQuery = $object::count();
            $dataQuery = $object::orderByDesc('id')->limit($this->limit)->offset($offset)->get();
        }else if (!empty($conditions) && !empty($columns)){
            $countQuery = $object::where($conditions)->count(); 
            $dataQuery = $object::where($conditions)->orderByDesc('id')->limit($this->limit)->offset($offset)->get($columns);
        } else if (empty($conditions) && !empty($columns)){
            $countQuery = $object::count();
            $dataQuery = $object::orderByDesc('id')->limit($this->limit)->offset($offset)->get($columns);
        }
        else if(!empty($conditions) && empty($columns)){
            $countQuery = $object::where($conditions)->count();
            $dataQuery = $object::where($conditions)->orderByDesc('id')->limit($this->limit)->offset($offset)->get();
        }

        return [
            'data' => $dataQuery,
            'total' => $countQuery,
            'current_page' => $this->page,
            'limit' => $this->limit
        ];

    }

}