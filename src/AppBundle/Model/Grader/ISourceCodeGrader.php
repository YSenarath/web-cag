<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/13/2016
 * Time: 7:04 PM
 */

namespace AppBundle\Model\Grader;


interface ISourceCodeGrader
{
    /**
     * @param $script string
     * @param $test string
     * @return string
     */
    public function gradeCode(string $script,string $test);
}