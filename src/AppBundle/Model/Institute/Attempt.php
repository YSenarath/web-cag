<?php

namespace AppBundle\Model\Institute;

/**
 * @access public
 * @author Yasas
 */
class Attempt {
	/**
	 * @AttributeType float
	 */
	private $_gradeValue;
	/**
	 * @AttributeType int
	 */
	private $_attemptNo;
	/**
	 * @AssociationType Default.Student
	 * @AssociationMultiplicity 1
	 */
	public $_unnamed_Student_;
	/**
	 * @AssociationType Default.Assignment
	 */
	public $_for_7;
	/**
	 * @AssociationType Default.Answer
	 * @AssociationMultiplicity 0..*
	 * @AssociationKind Aggregation
	 */
	public $_has = array();

	/**
	 * @access public
	 * @return float
	 * @ReturnType float
	 */
	public function getGradeValue() {
		return $this->_gradeValue;
	}

	/**
	 * @access public
	 * @param float aGradeValue
	 * @return void
	 * @ParamType aGradeValue float
	 * @ReturnType void
	 */
	public function setGradeValue($aGradeValue) {
		$this->_gradeValue = $aGradeValue;
	}

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getAttemptNo() {
		return $this->_attemptNo;
	}

	/**
	 * @access public
	 * @param int aAttemptNo
	 * @return void
	 * @ParamType aAttemptNo int
	 * @ReturnType void
	 */
	public function setAttemptNo($aAttemptNo) {
		$this->_attemptNo = $aAttemptNo;
	}

	/**
	 * @access public
	 */
	public function GradeAttempt() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Attempt() {
		// Not yet implemented
	}
}