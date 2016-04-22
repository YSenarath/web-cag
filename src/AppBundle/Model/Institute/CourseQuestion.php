<?php

namespace AppBundle\Model\Institute;

/**
 * @access public
 * @author Yasas
 */
class CourseQuestion extends Quez {
	/**
	 * @AssociationType Default.Course
	 * @AssociationMultiplicity 1
	 */
	public $_contains;
	
	/**
	 * @AssociationType Default.Teacher
	 */
	public $_create;

	/**
	 * @access public
	 */
	public function getCourse() {
		// Not yet implemented
	}
}