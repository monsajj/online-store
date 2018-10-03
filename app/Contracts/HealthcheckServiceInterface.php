<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 03.10.18
 * Time: 15:36
 */

namespace App\Contracts;


interface HealthcheckServiceInterface
{
    public function getStatusCodeByURL($url);
}