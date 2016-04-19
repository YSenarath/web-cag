<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/13/2016
 * Time: 7:07 PM
 */

namespace AppBundle\Model\Grader;


abstract class SourceCodeTester
{
    /**
     * @param $script
     * @param $test
     * @return float
     */
    public abstract function gradeTestCases($script, $test);
}