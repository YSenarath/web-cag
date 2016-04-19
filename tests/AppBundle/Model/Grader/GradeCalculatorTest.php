<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/13/2016
 * Time: 12:14 PM
 */

namespace Tests\AppBundle\Model\Grader;

use AppBundle\Model\Grader\ExecutePython;

class GradeCalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $g;

    /**
     * GradeCalculatorTest constructor.
     */
    public function __construct()
    {
        global $g;
        $g = new ExecutePython();
    }


    /**
     * Test run python applications.
     */
    public function testRunPython()
    {
        global $g;
        $output = $g->runPython('print "Hello World!!"', 'script.py');
        $this->assertContains("Hello World!!", $output['out']);
    }

    /**
     * Test error output python applications.
     */
    public function testErrorsInRunPython()
    {
        global $g;
        $output = $g->runPython('Print "Hello World!!"', 'script.py');
        $err = $output['err'];
        $this->assertNotEmpty($err);
        $this->assertContains('SyntaxError', $err);
    }
}
