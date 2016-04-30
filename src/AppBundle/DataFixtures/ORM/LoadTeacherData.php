<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/30/2016
 * Time: 11:37 AM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Model\Institute\Teacher;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTeacherData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $teacher = new Teacher();
        // change object attributes
        $teacher->setUsername('dulanim');
        $teacher->setEmail('dulanim@uom.lk');
        $teacher->setFirstName('Dulani');
        $teacher->setLastName('Meedeniya');
        $teacher->setPassword('c$e@w1Fi');
        $teacher->setIsActive(true);
        // Add the values to the database
        $manager->persist($teacher);
        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}