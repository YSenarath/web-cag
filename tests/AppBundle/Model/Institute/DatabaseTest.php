<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/30/2016
 * Time: 10:08 AM
 */

namespace tests\AppBundle\Model\Institute;

use AppBundle\Model\Institute\Course;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DatabaseTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager $em
     */
    private $em;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
    }

    public function testAddCourse()
    {
        $course = new Course();
        $course->setTitle('Test course');
        $course->setSemester(5);
        $course->setCourseId('CS5555');

        print_r('Inserting the entity...');
        try {
            // eventually save the course
            $this->em->persist($course);
            // executes the queries
            $this->em->flush();
        } catch (\Exception $ex) {
            $this->fail('Unable to create entry...');
        }

        try {
            $course_p = $this->em
                ->getRepository('AppBundle:Course')
                ->findOneByCourseId('CS5555');
            $this->assertEquals($course_p, $course);
        } catch (\Exception $ex) {
            $this->fail('Unable to find entity...');
        }

        // Remove item if exist
        try {
            print_r('Removing the entity....');
            $entity = $this->em->merge($course);
            $this->em->remove($entity);
            $this->em->flush();
        } catch (\Exception $ex) {
            $this->fail('Unable to remove entity...');
        }
    }
}
