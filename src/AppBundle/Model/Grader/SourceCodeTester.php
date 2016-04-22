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
     * @param string $script
     * @param string $test
     * @return float
     */
    public abstract function gradeScripOnTestCases(string $script, string $test);
}