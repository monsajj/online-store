<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Health;

class Healthcheck extends Command
{

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
    protected $description = 'Check URL status';

    /**
     * Create a new command instance.
     * Healthcheck constructor.
     */
    public function __construct()
    {
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
        $statusCode = Health::getStatusCodeByURL($url);
//        Log::info($statusCode);
        dd($statusCode);
    }
}
