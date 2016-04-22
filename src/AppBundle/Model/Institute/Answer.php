<?php
namespace AppBundle\Model\Institute;

/**
 * @access public
 * @author Yasas
 */
class Answer {
	/**
	 * @AttributeType String
	 */
	private $_answer;

	/**
	 * @AttributeType float
	 */
	private $_grade;

	/**
	 * @AssociationType Attempt
	 * @AssociationMultiplicity 1
	 */
	public $_unnamed_Attempt_;

	/**
	 * @AssociationType Student
	 */
	public $_write;

	/**
	 * @AssociationType AssignmentQuestion
	 */
	public $_for_8;

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getAnswer() {
		return $this->_answer;
	}

	/**
	 * @access public
	 * @param String aAnswer
	 * @return void
	 * @ParamType aAnswer String
	 * @ReturnType void
	 */
	public function setAnswer($aAnswer) {
		$this->_answer = $aAnswer;
	}

	/**
	 * @access public
	 * @return float
	 * @ReturnType float
	 */
	public function getGrade() {
		return $this->_grade;
	}

	/**
	 * @access public
	 * @param float aGrade
	 * @return void
	 * @ParamType aGrade float
	 * @ReturnType void
	 */
	public function setGrade($aGrade) {
		$this->_grade = $aGrade;
	}

	/**
	 * @access public
	 */
	public function Answer() {
		// Not yet implemented
	}
}