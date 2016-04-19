<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/12/2016
 * Time: 7:14 PM
 */

namespace AppBundle\Model\Grader;


class ExecutePython
{

    /**
     * Runs python script
     * @param $script string Script you want to run
     * @param $path string Path to file including file name
     * @return array
     */
    public function runPython(string $script, string $path)
    {
        // Create the file in the server - Open and write finally close
        $file = fopen($path, "w");
        fwrite($file, $script);
        fclose($file);
        // Execute python script in the server and get output ane error
        $out = exec("python " . $path);
        $err = exec("python " . $path . " 3>&1 1>&2 2>&3 ");
        return ['out'=>$out, 'err'=>$err];
    }
}