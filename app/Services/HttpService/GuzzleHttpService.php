<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 03.10.18
 * Time: 11:04
 */

namespace App\Services\HttpService;


use App\Contracts\HttpServiceInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class GuzzleHttpService implements HttpServiceInterface
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