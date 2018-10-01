<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Log;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Healthcheck extends Command
{

    /**
     * @var Client
     */
    private $client;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'healthcheck {URL}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check URL status code';

    /**
     * Create a new command instance.
     * @param $client Client
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @throws GuzzleException
     */
    public function handle()
    {

        $url = $this->argument('URL');
        $statusCode = $this->getStatusCodeByURL($url);

        Log::info($statusCode);
//        dd($statusCode);
    }

    /**
     * Get Status Code of the url
     *
     * @param $url
     * @return mixed
     * @throws GuzzleException
     */
    private function getStatusCodeByURL($url)
    {

        return $this->client->request('GET', $url)->getStatusCode();
    }
}
