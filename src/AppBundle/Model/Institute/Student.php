<?php

namespace AppBundle\Model\Institute;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="student")
 */
class Student extends Person {
	/**
	 * @var string
	 *
	 * @ORM\Column(name="student_id", type="string", length=20, unique=true, nullable=false)
	 */
	private $studentId;

	/**
	 * @ORM\ManyToMany(targetEntity="section")
	 * @ORM\JoinTable(name="enrollment",
	 *      joinColumns={@ORM\JoinColumn(name="index_no", referencedColumnName="username")},
	 *      inverseJoinColumns={@ORM\JoinColumn(name="section_id", referencedColumnName="section_id")}
	 *      )
	 */
	private $sections;

	/**
	 * Returns the roles granted to the user.
	 * @return array (Role|string)[] The user roles
	 */
	public function getRole()
	{
		return ['ROLE_STUDENT'];
	}

    /**
     * Add section
     *
     * @param \AppBundle\Model\Institute\Section $section
     *
     * @return Student
     */
    public function addSection(Section $section)
    {
        $this->sections[] = $section;

        return $this;
    }

    /**
     * Remove section
     *
     * @param \AppBundle\Model\Institute\Section $section
     */
    public function removeSection(Section $section)
    {
        $this->sections->removeElement($section);
    }

    /**
     * Get sections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Set studentId
     *
     * @param string $studentId
     *
     * @return Student
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return string
     */
    public function getStudentId()
    {
        return $this->studentId;
    }
}
