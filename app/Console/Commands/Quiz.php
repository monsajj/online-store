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
     * Quiz constructor.
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

        $answers = $this->getAnswers($questions);

        $this->echoAll($questions, $answers);
    }

    /**
     * Get questions from config
     *
     * @return \Illuminate\Config\Repository|mixed
     */
    private function getQuestions()
    {

        return config('app.questions');
    }

    /**
     * Get answers on questions
     *
     * @param $questions
     * @return array
     */
    private function getAnswers($questions)
    {
        $answers = [];

        for($i = 0; $i < count($questions); $i++)
        {
            $answers[$i] = $this->ask($questions[$i]);
        }

        return $answers;
    }

    /**
     * Echo questions with answers
     *
     * @param $questions
     * @param $answers
     * @return mixed
     */
    private function echoAll($questions, $answers)
    {

        for($i = 0; $i < count($questions); $i++)
        {
            $this->info("$questions[$i] - $answers[$i]");
        }

        return $answers;
    }
}
