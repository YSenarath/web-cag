<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/12/2016
 * Time: 7:14 PM
 */

namespace AppBundle\Model\Grader;


class GradeCalculator
{
    /**
     * GradeCalculator constructor.
     */
    public function __construct()
    {
    }

    /**
     * runs 
     */
    public function runPython() {
        return exec('whoami');
    }
}