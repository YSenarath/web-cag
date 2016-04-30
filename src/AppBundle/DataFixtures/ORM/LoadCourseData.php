<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/30/2016
 * Time: 10:52 AM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Model\Institute\Course;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCourseData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $courses = ['CE1032' => ['Programming Fundamentals', 1],
            'CS2022' => ['Data Structures and Algorithms', 2],
            'CS2062' => ['Object Oriented Software Development', 4],
            'CS3052' => ['Computer Security', 5],
            'CS3512' => ['Programming Languages', 5],
            'CS2012' => ['Principles of Object Oriented Programming', 3],
            'CS3202' => ['Software Engineering Project', 5]
        ];

        // Creates set of courses
        foreach ($courses as $key => $value) {
            $course = new Course();
            // change object attributes
            $course->setCourseId($key);
            $course->setTitle($value[0]);
            $course->setSemester($value[1]);
            // Add the values to the database
            $manager->persist($course);
            $manager->flush();
            $this->addReference($key, $course);
        }
    }

    public function getOrder()
    {
        return 1;
    }
}