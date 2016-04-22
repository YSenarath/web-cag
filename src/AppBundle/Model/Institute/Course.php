<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/CourseQuestion.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Institute.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class Course {
	private $_courseID;
	private $_title;
	/**
	 * @AssociationType Default.CourseQuestion
	 * @AssociationMultiplicity 0..*
	 * @AssociationKind Aggregation
	 */
	public $_contains = array();
	/**
	 * @AssociationType Default.Institute
	 */
	public $_create;

	/**
	 * @access public
	 */
	public function getCourseID() {
		return $this->_courseID;
	}

	/**
	 * @access public
	 * @param aCourseID
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setCourseID($aCourseID) {
		$this->_courseID = $aCourseID;
	}

	/**
	 * @access public
	 */
	public function getTitle() {
		return $this->_title;
	}

	/**
	 * @access public
	 * @param aTitle
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setTitle($aTitle) {
		$this->_title = $aTitle;
	}

	/**
	 * @access public
	 * @param aCourseID
	 */
	public function Course($aCourseID) {
		// Not yet implemented
	}
}
?>