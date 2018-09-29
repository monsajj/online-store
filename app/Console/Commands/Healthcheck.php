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
    protected $signature = 'healthcheck';

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
     * @return mixed
     */
    public function handle()
    {

        $uri = $this->getUri();
        $statusCode = $this->client->request('HEAD', $uri)->getStatusCode();
        Log::info($statusCode);
//        dd($statusCode);
    }

    private function getUri()
    {

        return config('app.uri');
    }
}
