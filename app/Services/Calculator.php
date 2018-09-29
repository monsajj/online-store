<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 29.09.2018
 * Time: 10:47
 */

namespace App\Services;


use App\Contracts\CalculatorInterface;

class Calculator implements CalculatorInterface
{

    public function add($first, $second)
    {
        return $first+$second;
    }
}