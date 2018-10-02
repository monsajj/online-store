<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 02.10.18
 * Time: 18:15
 */

namespace App\Services;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Contracts\HealthcheckServiceInterface;

class HealthcheckService implements HealthcheckServiceInterface
{

    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get Status Code of the url
     *
     * @param $url
     * @return mixed
     * @throws GuzzleException
     */
    public function getStatusCodeByURL($url)
    {
        return $this->client->request('GET', $url)->getStatusCode();
    }
}