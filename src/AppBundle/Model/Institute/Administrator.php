<?php

namespace AppBundle\Model\Institute;

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