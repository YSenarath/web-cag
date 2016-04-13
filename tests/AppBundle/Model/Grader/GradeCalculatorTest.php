<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/13/2016
 * Time: 12:14 PM
 */

namespace Tests\AppBundle\Model\Grader;


use AppBundle\Model\Grader\GradeCalculator;

class GradeCalculatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testRunPython()
    {
        $g = new GradeCalculator();
        $output = $g->runPython();
        $this->assertContains("yasas", $output);
    }

    /**
     *
     */
    public function testRunSafty()
    {
        $g = new GradeCalculator();
        $this->assertEquals(1, 1);
    }

    /**
     *
     */
    public function testRunPyPy()
    {
        $g = new GradeCalculator();
        $this->assertEquals(1, 1);
    }
}
