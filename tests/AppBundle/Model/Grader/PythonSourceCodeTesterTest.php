<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/18/2016
 * Time: 9:12 PM
 */

namespace Tests\AppBundle\Model\Grader;

use AppBundle\Model\Exceptions\ParseException;
use AppBundle\Model\Grader\PythonSourceCodeTester;
use Symfony\Component\Config\Definition\Exception\Exception;

class PythonSourceCodeTesterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider scriptProvider
     * @param string $script
     * @param string $test
     */
    public function testRunTests(string $script, string $test)
    {
        $PythonTester = new PythonSourceCodeTester();
        $results = $PythonTester->runTests($script, $test);
        // interface - array
        print($results['out']);
        print($results['err']);
        $this->assertNotEmpty($results);
    }

    /**
     * @dataProvider scriptProvider
     * @param string $script
     * @param string $test
     */
    public function testPythonTestOutputParser(string $script, string $test)
    {
        $PythonTester = new PythonSourceCodeTester();
        $results = $PythonTester->runTests($script, $test);
        try {
            // Parse test - test
            $parsedResults = PythonSourceCodeTester::parseTestOutput($results['out']);
            print($results['out']);
            print($results['err']);
            // Sample test result: total:1;errors:0;failures:0;success:1;skipped:0
            $totalTests = $parsedResults['total'];
            $sumOfResults = $parsedResults['errors'] + $parsedResults['failures'] + $parsedResults['success'] + $parsedResults['skipped'];
            $this->assertEquals($totalTests, $sumOfResults);
        } catch (Exception $e) {
            $this->assertInstanceOf(ParseException::class, $e);
        }
    }

    /**
     * @dataProvider scriptProvider
     * @param string $script
     * @param string $test
     */
    public function testGradeScripOnTestCases(string $script, string $test)
    {
        $PythonTester = new PythonSourceCodeTester();
        $results = $PythonTester->gradeScripOnTestCases($script, $test);
        print($results);
    }

    /**
     * Data provider for tests
     * @return array
     */
    public function scriptProvider()
    {
        return array(
            array("a=5\nb=7\nc=a+b+1",
                "def test_a_equals_five(self):\n" .
                "\tself.assertEqual(a, 5)\n" .
                "def test_b_equals_seven(self):\n" .
                "\tself.assertEqual(b, 7)\n" .
                "def test_c_equals_12(self):\n" .
                "\tself.assertEqual(c, 12)\n"),
            array("a=5\nprint(\"TEST\")",
                "def test_a_equals_five(self):\n" .
                "\tself.assertEqual(a, 5)\n"),
            array("a=5\nprint(\"TEST\")",
                "def test_a_equals_five(self):\n" .
                "\tprint(\"TEST\")\n" .
                "\tself.assertEqual(a, 5)\n" .
                "\tprint(\"TEST\")\n"),
            array("def sayHelloWorld():\n\treturn \"Hello World\"",
                "def testSayHelloWorld(self):\n" .
                "\tself.assertEqual(sayHelloWorld(), \"Hello World\")\n"),
            array("def sayHelloWorld():\n\treturn \"Hello World!\"",
                "def testSayHelloWorld(self):\n" .
                "\tself.assertEqual(sayHelloWorld(), \"Hello World\")\n"),
            array("de sayHelloWorld():\n\treturn \"Hello World!\"",
                "def testSayHelloWorld(self):\n" .
                "\tself.assertEqual(sayHelloWorld(), \"Hello World\")\n"),
        );
    }
}
