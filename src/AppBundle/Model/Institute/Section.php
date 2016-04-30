<?php

namespace AppBundle\Model\Institute;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity
 */
class Section {
	/**
	 * @var int
	 *
	 * @ORM\Column(name="section_id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $sectionId;

	/**
	 * @var string
	 *
	 * @ORM\ManyToOne(targetEntity="course")
	 * @ORM\JoinColumn(name="course_id", referencedColumnName="course_id", nullable=false)
	 */
	private $course;

	/**
	 * @var int
	 *
	 * @ORM\Column(name="year", type="integer")
	 */
	private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="batch_id", type="string", length=20)
     */
    private $batch;

	/**
	 * @ORM\OneToOne(targetEntity="teacher")
	 * @ORM\JoinColumn(name="teacher_id", referencedColumnName="username")
	 */
	private $teacher;

    /**
     * Get sectionId
     *
     * @return integer
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Section
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set batch
     *
     * @param string $batch
     *
     * @return Section
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * Get batch
     *
     * @return string
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Set courseId
     *
     * @param \AppBundle\Model\Institute\course $course
     *
     * @return Section
     */
    public function setCourse(Course $course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return \AppBundle\Model\Institute\course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set teacher
     *
     * @param \AppBundle\Model\Institute\teacher $teacher
     *
     * @return Section
     */
    public function setTeacher(Teacher $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \AppBundle\Model\Institute\teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }
}
