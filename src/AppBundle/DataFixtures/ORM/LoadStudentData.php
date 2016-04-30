<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/30/2016
 * Time: 11:37 AM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Model\Institute\Student;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadStudentData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $student = new Student();
        // change object attributes
        $student->setUsername('student');
        $student->setStudentId('130556L');
        $student->setEmail('wayasas@gmail.com');
        $student->setFirstName('Yasas');
        $student->setLastName('Senarath');
        $student->setPassword('student');
        $student->setIsActive(true);
        // Add the values to the database
        $manager->persist($student);
        $manager->flush();
        $this->addReference('130556L', $student);
    }

    public function getOrder()
    {
        return 7;
    }
}