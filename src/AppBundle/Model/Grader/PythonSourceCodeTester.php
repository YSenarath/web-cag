<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/17/2016
 * Time: 6:05 PM
 */

namespace AppBundle\Model\Grader;

use AppBundle\Model\Exceptions\ParseException;
use AppBundle\Model\Helper\FileManager;
use AppBundle\Model\Helper\Parameters;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\ProcessBuilder;

class PythonSourceCodeTester extends SourceCodeTester
{

    /**
     * PythonSourceCodeTester constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param string $script
     * @param string $test
     * @return float|void
     */
    public function gradeScripOnTestCases(string $script, string $test)
    {
        $testOutput = $this->runTests($script, $test)['out'];
        $testErr = $this->runTests($script, $test)['err'];
        if ($testOutput == "") {
            return 0;
        }
        try {
            $parsedTestOutput = $this->parseTestOutput($testOutput);
            $testCount = $parsedTestOutput['total'];
            $sumOfResults = $parsedTestOutput['errors'] * 10 + $parsedTestOutput['failures'] * 7 + $parsedTestOutput['skipped'] * 5;
            return ($testCount * 10 - $sumOfResults) * 100 / ($testCount * 10);
        } catch (ParseException $e) {
            return 0;
        }
    }

    /**
     * Run tests on script
     * @param $script string python Script to be tested
     * @param $test string test script
     * @return array
     */
    public function runTests(string $script, string $test)
    {

        $base_dir = Parameters::readValue('base_dir');
        // Create the file in the server - Open and write finally close
        $fm = new FileManager($base_dir);
        // Make text python compatible
        $script = $this->pythonCompatibleText($script);
        $fm->createFile("source1.py", $script);
        // create the test file content using the test file template
        $test = $this->createTestString($test);
        $fm->createFile("test1.py", $test);
        // Execute python script in the server and get output ane error
        // $command = "python " . $base_dir . "\\test1.py";
        // $process = new Process($command);
        $builder = new ProcessBuilder();
        $process = $builder->setPrefix('python')
            ->setArguments(array($base_dir . "\\test1.py"))
            ->setTimeout(10)
            ->getProcess();
        try {
            $process->mustRun();
            return ['out' => $process->getOutput(), 'err' => $process->getErrorOutput()];
        } catch (ProcessFailedException $e) {
            return ['out' => $process->getOutput(), 'err' => $process->getErrorOutput()];
        }
    }

    /**
     * parse json like test output
     * @param string $testOutput
     * @return array
     */
    public static function parseTestOutput(string $testOutput)
    {
        if ($testOutput == '') throw new ParseException();
        $testOutput = explode("#testResults ", $testOutput);
        $results = explode(";", end($testOutput));
        $output = Array();
        for ($i = 0; $i < count($results); $i++) {
            $property = explode(":", $results[$i]);
            if (count($property) != 2) throw new ParseException();
            $output[$property[0]] = $property[1];
        }
        return $output;
    }

    /**
     * Combines test cases with the unit test template
     * @param string $text
     * @return string
     */
    private function createTestString(string $text)
    {
        $template = FileManager::readTemplate('python_test_template.txt');
        $text = str_replace("\n", "\n\t", $text);
        $testClass = str_replace('#Tests', $text, $template);
        $testClass = $this->pythonCompatibleText($testClass);
        return $testClass;
    }

    /**
     * Changes encoding style manually replacing /r/n with /n
     * Improves compatibility with python interpreter
     * @param string $text
     * @return string
     */
    private function pythonCompatibleText(string $text)
    {
        $text = str_replace("\t", "    ", $text);
        $text = str_replace("\r\n", "\n", $text);
        $text = str_replace("\n", "\r\n", $text);
        $text = mb_convert_encoding($text, 'ascii');
        return $text;
    }
}