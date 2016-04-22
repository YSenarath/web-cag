<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/17/2016
 * Time: 6:44 PM
 */

namespace AppBundle\Model\Helper;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

class FileManager
{
    private $source_destination;

    /**
     * SourceFileManager constructor.
     * @param string $sourceLocation
     * @throws \Exception
     */
    public function __construct(string $sourceLocation)
    {
        $this->source_destination = $sourceLocation;
        if (!$this->createTempFolderIfNotExist()) {
            throw new \Exception("Error: Unable to create temp folder");
        }
    }

    /**
     * Create the file in the server
     * @param string $filename
     * @param string $content
     * @throws \Exception
     */
    public function createFile(string $filename, string $content)
    {
        // Create the file in the server - Open and write finally close
        $file_name = $this->source_destination . "\\" . $filename;
        $fileHandle = fopen($file_name, "w");
        if (fwrite($fileHandle, $content) === FALSE) {
            throw new Exception("Error: Unable to create files.");
        }
        fclose($fileHandle);
    }

    /**
     * @return boolean Path to temp folder create one if not exist
     */
    private function createTempFolderIfNotExist()
    {
        if (!file_exists($this->source_destination)) {
            $success = mkdir($this->source_destination, null, true);
            return $success;
        }
        return true;
    }

    /**
     * @return string
     */
    public function getSourceDestination()
    {
        return $this->source_destination;
    }

    public function readFile($filename) {
        $file = $this->source_destination . "\\" . $filename;
        if (file_exists($file)) {
            return file_get_contents($file);
        }else {
            throw new FileNotFoundException("Error: " . $filename . " not found.");
        }
    }

    /**
     * @param string $templateName
     * @return string
     */
    public static function readTemplate(string $templateName) {
        $file_dir = __DIR__ . '\\..\\..\\Resources\\templates\\';
        $file_path = $file_dir . $templateName;
        if (file_exists($file_path)) {
            return file_get_contents($file_path);
        }else {
            throw new FileNotFoundException("Error: template " . $templateName . " not found.");
        }
    }
}