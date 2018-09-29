<?php

namespace App\Console\Commands;

use App\Contracts\FileStorageInterface;
use App\Services\FileStorage\S3FileStorage;
use Illuminate\Console\Command;
use Calculator;

class Lesson extends Command
{


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lesson';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Lesson constructor.
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
        dd(Calculator::add(1,2));
    }
}
