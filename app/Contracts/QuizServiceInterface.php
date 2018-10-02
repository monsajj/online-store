<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 02.10.2018
 * Time: 17:02
 */

namespace App\Contracts;


interface QuizServiceInterface
{

    /**
     * Get questions from config
     */
    public function getQuestions();

    /**
     * Get answers
     *
     * @return array
     */
    public function getAnswers();

    /**
     * Save answer in array
     *
     * @param $answer
     */
    public function saveAnswer($answer);
}