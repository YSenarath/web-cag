<?php

namespace AppBundle\Model\Institute;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="question")
 */
class Question {
    /**
     * @var int
     *
     * @ORM\Column(name="question_id", type="integer")
     * @ORM\Id
     */
    private $questionId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="course")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="course_id", nullable=false)
     */
    private $course;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="test_cases", type="text")
     */
    private $testCases;

    /**
     * Set questionId
     *
     * @param integer $questionId
     *
     * @return Question
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Question
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set testCases
     *
     * @param string $testCases
     *
     * @return Question
     */
    public function setTestCases($testCases)
    {
        $this->testCases = $testCases;

        return $this;
    }

    /**
     * Get testCases
     *
     * @return string
     */
    public function getTestCases()
    {
        return $this->testCases;
    }

    /**
     * Set courseId
     *
     * @param \AppBundle\Model\Institute\Course $course
     *
     * @return Question
     */
    public function setCourseId(Course $course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return \AppBundle\Model\Institute\Course
     */
    public function getCourseId()
    {
        return $this->course;
    }

    /**
     * Set course
     *
     * @param \AppBundle\Model\Institute\Course $course
     *
     * @return Question
     */
    public function setCourse(Course $course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \AppBundle\Model\Institute\course
     */
    public function getCourse()
    {
        return $this->course;
    }
}
