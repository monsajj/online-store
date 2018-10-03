<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 03.10.18
 * Time: 15:36
 */

namespace App\Services;

use App\Contracts\HealthcheckServiceInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class HealthcheckService implements HealthcheckServiceInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * Get Status Code of the url
     *
     * @param $url
     * @return mixed
     * @throws GuzzleException
     */
    public function getStatusCodeByURL($url)
    {
        $client = new \GuzzleHttp\Client();
        return $client->request('GET', $url)->getStatusCode();
    }
}