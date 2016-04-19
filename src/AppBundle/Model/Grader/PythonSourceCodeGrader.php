<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/13/2016
 * Time: 7:04 PM
 */

namespace AppBundle\Model\Grader;

class PythonSourceCodeGrader implements ISourceCodeGrader
{
    private $tester;

    private $qualityChecker;

    /**
     * PythonSourceCodeGrader constructor.
     */
    public function __construct()
    {
        $this->qualityChecker = new PythonSourceCodeQualityChecker();
        $this->tester = new PythonSourceCodeTester();
    }


    /**
     * @param $script string
     * @param $test string
     * @return string
     */
    public function gradeCode(string $script, string $test)
    {
        $funcGrade = $this->tester->gradeTestCases($script, $test);
        $qualityGrade = $this->qualityChecker->gradeCodeQuality($script, $test);
        return ($funcGrade * 70 + $qualityGrade * 30) / 100;
    }
}