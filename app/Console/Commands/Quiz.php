<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Quiz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quiz:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make quiz about user';

    /**
     * Create a new command instance.
     *
     * @return void
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

        $questions = $this->getQuestions();
        $answers = [];
        for($i = 0; $i < count($questions); $i++)
        {
            echo "$questions[$i]\n";
            $answers[$i] = trim(fgets(STDIN));
        }

        for($i = 0; $i < 5; $i++)
        {
            echo "$questions[$i]/$answers[$i]\n";
        }
    }

    private function getQuestions()
    {

        return config('app.questions');
    }
}
