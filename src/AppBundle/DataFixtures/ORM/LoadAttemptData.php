<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/30/2016
 * Time: 11:37 AM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Model\Institute\Attempt;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAttemptData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $attempt = new Attempt();
        // change object attributes
        $assignment = $this->getReference('assign-1');
        $attempt->setAssignment($assignment);
        // Get total no of attempts by the given student
        $attempts = $manager
            ->getRepository('AppBundle:Attempt')
            ->findBy(['student_id'=>'130556L', 'assignment_id'=>$assignment->getAssignmentId()]);
        $attempt->setAttemptNo(count($attempts) + 1);
        $student = $this->getReference('130556L');
        $attempt->setStudent($student);
        // Add the values to the database
        $manager->persist($attempt);
        $manager->flush();
    }

    public function getOrder()
    {
        return 9;
    }
}