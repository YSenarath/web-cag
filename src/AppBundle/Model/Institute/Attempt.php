<?php

namespace AppBundle\Model\Institute;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="attempt")
 * @ORM\Entity
 */
class Attempt {
    /**
     * @var int
     *
     * @ORM\Column(name="attempt_id", type="integer", unique=true)
     * @ORM\Id
     */
    private $attemptId;

    /**
     * @ORM\OneToOne(targetEntity="student")
     * @ORM\JoinColumn(name="student_id", referencedColumnName="student_id", nullable=false)
     */
    private $student;


    /**
     * @ORM\OneToOne(targetEntity="assignment")
     * @ORM\JoinColumn(name="assignment_id", referencedColumnName="assignment_id", nullable=false)
     */
    private $assignment;

    /**
     * @var int
     *
     * @ORM\Column(name="attempt_no", type="integer")
     */
    private $attemptNo;

    /**
     * @ORM\ManyToMany(targetEntity="answer")
     * @ORM\JoinTable(name="attempt_answer",
     *      joinColumns={@ORM\JoinColumn(name="attempt_id", referencedColumnName="attempt_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="answer_id", referencedColumnName="answer_id")})
     */
    private $answers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new ArrayCollection();
    }

    /**
     * Set attemptId
     *
     * @param integer $attemptId
     *
     * @return Attempt
     */
    public function setAttemptId($attemptId)
    {
        $this->attemptId = $attemptId;

        return $this;
    }

    /**
     * Get attemptId
     *
     * @return integer
     */
    public function getAttemptId()
    {
        return $this->attemptId;
    }

    /**
     * Set attemptNo
     *
     * @param integer $attemptNo
     *
     * @return Attempt
     */
    public function setAttemptNo($attemptNo)
    {
        $this->attemptNo = $attemptNo;

        return $this;
    }

    /**
     * Get attemptNo
     *
     * @return integer
     */
    public function getAttemptNo()
    {
        return $this->attemptNo;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Model\Institute\Student $student
     *
     * @return Attempt
     */
    public function setStudent(Student $student)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \AppBundle\Model\Institute\student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set assignment
     *
     * @param \AppBundle\Model\Institute\Assignment $assignment
     *
     * @return Attempt
     */
    public function setAssignment(Assignment $assignment)
    {
        $this->assignment = $assignment;

        return $this;
    }

    /**
     * Get assignment
     *
     * @return \AppBundle\Model\Institute\assignment
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Add answer
     *
     * @param \AppBundle\Model\Institute\Answer $answer
     *
     * @return Attempt
     */
    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * Remove answer
     *
     * @param \AppBundle\Model\Institute\Answer $answer
     */
    public function removeAnswer(Answer $answer)
    {
        $this->answers->removeElement($answer);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswers()
    {
        return $this->answers;
    }
}
