<?php

namespace App\Console\Commands;

use App\Contracts\FileStorageInterface;
use App\Services\FileStorage\S3FileStorage;
use Illuminate\Console\Command;

class Lesson extends Command
{
    /**
     * @var FileStorageInterface
     */
    protected $s3FileStorage;

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
     * @param FileStorageInterface $s3FileStorage
     */
    public function __construct(FileStorageInterface $s3FileStorage)
    {
        $this->s3FileStorage = $s3FileStorage;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo $this->s3FileStorage->upload();
    }
}
