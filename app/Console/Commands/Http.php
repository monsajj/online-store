<?php

namespace App\Console\Commands;

use App\Contracts\HttpServiceInterface;
use Illuminate\Console\Command;

class Http extends Command
{
    /**
     * @var HttpServiceInterface
     */
    private $httpService;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'http {URL}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Http Services';

    /**
     * Create a new command instance.
     * Http constructor.
     * @param HttpServiceInterface $httpService
     */
    public function __construct(HttpServiceInterface $httpService)
    {
        $this->httpService = $httpService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = $this->argument('URL');
        $statusCode = $this->httpService->getStatusCodeByURL($url);
//        Log::info($statusCode);
        dd($statusCode);
    }
}
