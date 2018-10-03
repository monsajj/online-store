<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 03.10.18
 * Time: 11:06
 */

namespace App\Contracts;


interface HttpServiceInterface
{
    public function getStatusCodeByURL($url);
}