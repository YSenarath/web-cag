<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Institute.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/enrollment.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Attempt.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Answer.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Person.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class Student extends Person {
	/**
	 * @AttributeType String
	 */
	private $_batchID;
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
	 * @AssociationType Default.enrollment
	 */
	public $_unnamed_enrollment_;
	/**
	 * @AssociationType Default.Attempt
	 * @AssociationMultiplicity 0..*
	 * @AssociationKind Aggregation
	 */
	public $_unnamed_Attempt_ = array();
	/**
	 * @AssociationType Default.Answer
	 */
	public $_write;

	/**
	 * @access public
	 */
	public function getAttribute() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aAttribute
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setAttribute($aAttribute) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aAttempt
	 */
	public function submit($aAttempt) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aAssignment
	 */
	public function attempt($aAssignment) {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Student() {
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