<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/17/2016
 * Time: 6:05 PM
 */

namespace AppBundle\Model\Grader;

use AppBundle\Model\Helper\FileManager;
use AppBundle\Model\Helper\Parameters;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class PythonSourceCodeTester extends SourceCodeTester
{

    /**
     * PythonSourceCodeTester constructor.
     */
    public function __construct()
    {
    }

    public function gradeTestCases($script, $test)
    {
        return null;
    }

    /**
     * @param $script string python Script to be tested
     * @param $test string test script
     * @return array
     */
    public  function runTests(string $script, string $test) {

        $base_dir = Parameters::readValue('base_dir');
        // Create the file in the server - Open and write finally close
        $fm = new FileManager($base_dir);
        // Make text python compatible
        $script = $this->pythonCompatibleText($script);
        $fm->createFile("source.py", $script);
        // create the test file content using the test file template
        $test = $this->createTestString($test);
        $fm->createFile("test.py", $test);
        // Execute python script in the server and get output ane error
        $command = "python " . $base_dir . "\\test.py";
        $process = new Process($command);
        try {
            $process->mustRun();
            return ['out' => $process->getOutput(), 'err' => $process->getErrorOutput()];
        } catch (ProcessFailedException $e) {
            return ['out' => $process->getOutput(), 'err' => $process->getErrorOutput()];
        }
    }

    /**
     * @param string $testOutput
     * @return array
     */
    public static function parseTestOutput(string $testOutput) {
        $testOutput = explode("#testResults ", $testOutput);
        $results = explode(";", end($testOutput));
        $output = Array();
        for ($i = 0; $i < count($results); $i++) {
            $property = explode(":", $results[$i]);
            $output[$property[0]] = $property[1];
        }
        return $output;
    }

    /**
     * @param string $text
     * @return string
     */
    private function createTestString(string $text) {
        $template = FileManager::readTemplate('python_test_template.txt');
        $text = str_replace("\n", "\n    ", $text);
        $text = $this->pythonCompatibleText($text);
        $testClass = str_replace('#Tests', $text, $template);
        return $testClass;
    }

    /**
     * @param string $text
     * @return string
     */
    private function pythonCompatibleText(string $text) {
        // $text =  str_replace("\t", "    ", $text);
        $text =  str_replace("\r\n", "\n", $text);
        $text =  str_replace("\n", "\r\n", $text);
        return $text;
    }
}