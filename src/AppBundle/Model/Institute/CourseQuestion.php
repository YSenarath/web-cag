<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Course.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Teacher.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Quez.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
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
?>