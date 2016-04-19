<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/18/2016
 * Time: 9:12 PM
 */

namespace Tests\AppBundle\Model\Grader;

use AppBundle\Model\Grader\PythonSourceCodeTester;

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
        print($results['out']);
        print($results['err']);
        $this->assertNotEmpty($results['out']);
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
        $parsedResults = PythonSourceCodeTester::parseTestOutput($results['out']);
        print($results['out']);
        print($results['err']);
        $this->assertEquals(count($parsedResults), 5);
    }

    /**
     * Data provider for tests
     * @return array
     */
    public function scriptProvider()
    {
        return array(
            array("a=5\nb=7\nc=a+b",
                "def test_a_equals_five(self):\n" .
                "\tself.assertEqual(a, 5)\n" .
                "def test_b_equals_seven(self):\n" .
                "\tself.assertEqual(b, 7)\n" .
                "def test_c_equals_12(self):\n" .
                "\tself.assertEqual(c, 12)\n"),
            array("a=5\nprint(\"hello\")",
                "def test_a_equals_five(self):\n" .
                "\tself.assertEqual(a, 5)\n"),
            array("def sayHelloWorld():\n\treturn \"Hello World!\"",
                "def testSayHelloWorld(self):\n" .
                "\tself.assertEqual(sayHelloWorld(), \"Hello World!\")\n"),
        );
    }
}
