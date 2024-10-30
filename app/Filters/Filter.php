<?php

namespace App\Filters;

use DeepCopy\Exception\PropertyException;
use Request;

abstract class Filter{
    // protected array $translateOperatorsFields = [
    //     'gt' => '>',
    //     'gte' => '>=',
    //     'lt' => '<',
    //     'lte' => '<=',
    //     'eq' => '=',
    //     'ne' => '!=',
    //     'in' => 'in'
    // ];

    // protected array $allowedOperatorsFields = [];

    // public function filter(Request $request) {
    //     $where = [];
    //     $whereIn = [];

    //     if(empty($this->allowedOperatorsFields)){
    //         throw new PropertyException('Property allowedOperatorsfields is empty');
    //     }

    //     foreach($this->allowedOperatorsFields as $param => $operator){
    //         $queryOperator = $request->query('paid');

    //         var_dump($queryOperator);
    //     }
    // }
}