<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/30/2016
 * Time: 11:37 AM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Model\Institute\Assignment;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAssignmentData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $assignment = new Assignment();
        // change object attributes
        $assignment->setTitle('Say HelloWorld:');
        $assignment->setDescription('This assignment contains only one question.');
        $question = $this->getReference('quiz1');
        $assignment->addQuestion($question);
        // Add the values to the database
        $manager->persist($assignment);
        $manager->flush();
        $this->addReference('assign-1', $assignment);
    }

    public function getOrder()
    {
        return 6;
    }
}