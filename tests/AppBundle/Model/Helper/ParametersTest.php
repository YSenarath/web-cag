<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/18/2016
 * Time: 9:17 PM
 */

namespace Tests\AppBundle\Model\Helper;

use AppBundle\Model\Helper\Parameters;

class ParametersTest extends \PHPUnit_Framework_TestCase
{

    public function testBaseDefaultDir()
    {
        $actual = Parameters::readValue("base_dir");
        $this->assertEquals("D:\\AppData\\WebCag", $actual);
    }
}
