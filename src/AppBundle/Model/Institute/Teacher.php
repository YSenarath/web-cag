<?php
namespace AppBundle\Model\Institute;

/**
 * @access public
 * @author Yasas
 */
class Teacher extends Person {
	/**
	 * @AttributeType String
	 */
	private $_academicRank;
	/**
	 * @AttributeType boolean
	 */
	private $_active;
	/**
	 * @AssociationType Default.Institute
	 * @AssociationMultiplicity 1
	 */
	public $_unnamed_Institute_;
	/**
	 * @AssociationType Default.Section
	 * @AssociationMultiplicity 0..*
	 */
	public $_unnamed_Section_ = array();
	/**
	 * @AssociationType Default.CourseQuestion
	 */
	public $_create;
	/**
	 * @AssociationType Default.AssignmentQuestion
	 */
	public $_assign;

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getAcademicRank() {
		return $this->_academicRank;
	}

	/**
	 * @access public
	 * @param String aAcademicRank
	 * @return void
	 * @ParamType aAcademicRank String
	 * @ReturnType void
	 */
	public function setAcademicRank($aAcademicRank) {
		$this->_academicRank = $aAcademicRank;
	}

	/**
	 * @access public
	 * @param string aTitle
	 * @ParamType aTitle string
	 */
	public function CreateAssignment($aTitle) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Default_1.Course aCourse
	 * @ParamType aCourse Default.Course
	 */
	public function addQuestion(Course $aCourse) {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Teacher() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function getActive() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aActive
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setActive($aActive) {
		// Not yet implemented
	}
}
?>