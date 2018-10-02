<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 02.10.18
 * Time: 18:14
 */

namespace App\Contracts;


interface HealthcheckServiceInterface
{

    /**
     * Get Status Code of the url
     *
     * @param $url
     * @return mixed
     */
    public function getStatusCodeByURL($url);

}