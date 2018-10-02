<?php

namespace App\Console\Commands;

use GuzzleHttp\Exception\GuzzleException;
use App\Services\HealthcheckService;
use Illuminate\Console\Command;
use Log;


class Healthcheck extends Command
{

    /**
     * @var HealthcheckService
     */
    private $healthcheckService;

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
     * @param $healthcheckService HealthcheckService
     * @return void
     */
    public function __construct(HealthcheckService $healthcheckService)
    {
        $this->healthcheckService = $healthcheckService;
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
        $statusCode = $this->healthcheckService->getStatusCodeByURL($url);

        Log::info($statusCode);
//        dd($statusCode);
    }
}
