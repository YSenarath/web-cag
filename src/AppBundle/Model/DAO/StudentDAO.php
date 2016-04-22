<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Student.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class StudentDAO {

	/**
	 * @access public
	 * @param Default_1.Student aS
	 * @ParamType aS Default.Student
	 */
	public function addStudent(Student $aS) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Default_1.Student aS
	 * @param Boolean aAllow
	 * @ParamType aS Default.Student
	 * @ParamType aAllow Boolean
	 */
	public function reviewStudent(Student $aS, $aAllow) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param student aS
	 * @ParamType aS student
	 */
	public function updateStudent(student $aS) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aStudentIS
	 * @ParamType aStudentIS int
	 */
	public function readStudent($aStudentIS) {
		// Not yet implemented
	}
}
?>