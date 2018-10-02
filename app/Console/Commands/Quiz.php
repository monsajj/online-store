<?php

namespace App\Console\Commands;

use App\Services\QuizService;
use Illuminate\Console\Command;

class Quiz extends Command
{
    /**
     * @var QuizService
     */
    protected $quizService;

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
     * @param QuizService $quizService
     */
    public function __construct(QuizService $quizService)
    {

        $this->quizService = $quizService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $questions = $this->quizService->getQuestions();

        for($i = 0; $i < count($questions); $i++)
        {
            $this->quizService->saveAnswer($this->ask($questions[$i]));
        }

        $answers = $this->quizService->getAnswers();

        for($i = 0; $i < count($questions); $i++)
        {
            $this->info("$questions[$i] - $answers[$i]");
        }

    }
}
