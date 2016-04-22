<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/enrollment.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Course.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Institute.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Teacher.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Assignment.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class Section {
	/**
	 * @AttributeType String
	 */
	private $_year;
	/**
	 * @AttributeType String
	 */
	private $_semester;
	/**
	 * @AttributeType int
	 */
	private $_sectionID;
	/**
	 * @AssociationType Default.enrollment
	 */
	public $_unnamed_enrollment_;
	/**
	 * @AssociationType Default.Course
	 * @AssociationMultiplicity 1
	 */
	public $_contains;
	/**
	 * @AssociationType Default.Institute
	 * @AssociationMultiplicity 1
	 */
	public $_create;
	/**
	 * @AssociationType Default.Teacher
	 * @AssociationMultiplicity 1
	 */
	public $_unnamed_Teacher_;
	/**
	 * @AssociationType Default.Assignment
	 * @AssociationMultiplicity 0..*
	 * @AssociationKind Aggregation
	 */
	public $_has = array();

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getYear() {
		return $this->_year;
	}

	/**
	 * @access public
	 * @param String aYear
	 * @return void
	 * @ParamType aYear String
	 * @ReturnType void
	 */
	public function setYear($aYear) {
		$this->_year = $aYear;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getSemester() {
		return $this->_semester;
	}

	/**
	 * @access public
	 * @param String aSemester
	 * @return void
	 * @ParamType aSemester String
	 * @ReturnType void
	 */
	public function setSemester($aSemester) {
		$this->_semester = $aSemester;
	}

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getSectionID() {
		return $this->_sectionID;
	}

	/**
	 * @access public
	 * @param int aSectionID
	 * @return void
	 * @ParamType aSectionID int
	 * @ReturnType void
	 */
	public function setSectionID($aSectionID) {
		$this->_sectionID = $aSectionID;
	}

	/**
	 * @access public
	 */
	public function Section() {
		// Not yet implemented
	}
}
?>