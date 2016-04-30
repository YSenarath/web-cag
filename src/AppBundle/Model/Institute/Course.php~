<?php

namespace AppBundle\Model\Institute;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="course")
 * @ORM\Entity
 */
class Course
{
    /**
     * @var string
     *
     * @ORM\Column(name="course_id", type="string", length=7)
     * @ORM\Id
     */
    private $courseId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45)
     */
    private $title;


    /**
     * @var int
     *
     * @ORM\Column(name="semester", type="integer")
     */
    private $semester;

    /**
     * Set courseId
     *
     * @param string $courseId
     *
     * @return Course
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return string
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Course
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set semester
     *
     * @param integer $semester
     *
     * @return Course
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return integer
     */
    public function getSemester()
    {
        return $this->semester;
    }
}
