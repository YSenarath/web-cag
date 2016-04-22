<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Institute.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Person.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class Administrator extends Person {
	/**
	 * @AssociationType Default.Institute
	 * @AssociationMultiplicity 1
	 */
	public $_operate;

	/**
	 * @access public
	 */
	public function Administrator() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aSectionID
	 * @ParamType aSectionID int
	 */
	public function assignTeacherToCourse($aSectionID) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aSectionID
	 * @ParamType aSectionID int
	 */
	public function removeTeacherFromCourse($aSectionID) {
		// Not yet implemented
	}
}
?>