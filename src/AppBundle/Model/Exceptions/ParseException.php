<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/21/2016
 * Time: 9:00 AM
 */

namespace AppBundle\Model\Exceptions;

use Symfony\Component\Config\Definition\Exception\Exception;

class ParseException extends Exception
{
    /**
     * EmptyStringArgumentException constructor.
     */
    public function __construct()
    {
        \Exception::__construct();
        $this->message = "Exception: Parse exception.";
    }

}