<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 02.10.2018
 * Time: 13:25
 */

namespace App\Services;

use App\Contracts\QuizServiceInterface;

class QuizService implements QuizServiceInterface
{

    /**
     * @var array
     */
    protected  $answers = [];

    /**
     * Get questions from config
     */
    public function getQuestions()
    {
        return config('app.questions');
    }

    /**
     * Get answers
     *
     * @return array
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Save answer in array
     *
     * @param $answer
     */
    public function saveAnswer($answer)
    {
        $this->answers = array_add($this->answers, count($this->answers), $answer);
    }
}