<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/13/2016
 * Time: 7:08 PM
 */

namespace AppBundle\Model\Grader;


abstract class SourceCodeQualityChecker
{
    /**
     * @param $script
     * @param $test
     * @return float
     */
    public abstract function gradeCodeQuality($script, $test);
}