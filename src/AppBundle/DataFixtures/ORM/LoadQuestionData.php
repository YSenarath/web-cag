<?php
/**
 * Created by PhpStorm.
 * User: Yasas
 * Date: 4/30/2016
 * Time: 11:37 AM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Model\Institute\Question;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadQuestionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $question = new Question();
        // change object attributes
        $course = $this->getReference('CE1032');
        $question->setCourse($course);
        $question->setDescription('This assignment contains only one question.');
        $question->setTestCases("def testSayHelloWorld(self):\n" .
            "\tself.assertEqual(sayHelloWorld(), \"Hello World\")\n");

        // Add the values to the database
        $manager->persist($question);
        $manager->flush();
        $this->addReference('quiz1', $question);
    }

    public function getOrder()
    {
        return 5;
    }
}