<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/18/2016
 * Time: 8:16 PM
 */

namespace AppBundle\Model\Helper;

use Symfony\Component\Yaml\Yaml;

class Parameters {
    public static function readValue(string $key) {
        $file = __DIR__ . '\..\..\Resources\config\config.yml';
        $params = Yaml::parse(file_get_contents($file));
        return $params['parameters'][$key];
    }
}