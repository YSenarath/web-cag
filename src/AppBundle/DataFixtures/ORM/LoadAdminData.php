<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/30/2016
 * Time: 11:37 AM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Model\Institute\Administrator;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAdminData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $teacher = new Administrator();
        // change object attributes
        $teacher->setUsername('admin');
        $teacher->setEmail('wayasas.13@cse.mrt.ac.lk');
        $teacher->setFirstName('Yasas');
        $teacher->setLastName('Senarath');
        $teacher->setPassword('admin');
        $teacher->setIsActive(true);
        // Add the values to the database
        $manager->persist($teacher);
        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}