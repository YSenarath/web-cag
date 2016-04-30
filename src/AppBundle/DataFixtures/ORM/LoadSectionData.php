<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/30/2016
 * Time: 11:37 AM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Model\Institute\Section;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadSectionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $courses = ['CE1032', 'CS2022', 'CS2062', 'CS3052', 'CS3512', 'CS2012', 'CS3202'];

        // Creates set of courses
        foreach ($courses as $courseId) {
            for ($i = 0; $i < 10; $i++) {
                $section = new Section();
                // change object attributes
                $course = $this->getReference($courseId);
                $section->setCourse($course);
                $section->setBatch(strval(rand(12, 16)));
                $section->setTeacher(null);
                $section->setYear(rand(2005, 2018));
                // Add the values to the database
                $manager->persist($section);
                $manager->flush();
            }
        }
    }

    public function getOrder()
    {
        return 2;
    }
}