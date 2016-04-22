<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Section.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Teacher.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/AssignmentQuestion.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Attempt.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class Assignment {
	/**
	 * @AttributeType int
	 */
	private $_assignmentID;
	/**
	 * @AttributeType String
	 */
	private $_title;
	/**
	 * @AttributeType String
	 */
	private $_description;
	private $_attribute;
	/**
	 * @AssociationType Default.Section
	 * @AssociationMultiplicity 1
	 */
	public $_has;
	/**
	 * @AssociationType Default.Teacher
	 */
	public $_create;
	/**
	 * @AssociationType Default.AssignmentQuestion
	 * @AssociationMultiplicity 1..*
	 * @AssociationKind Composition
	 */
	public $_contains = array();
	/**
	 * @AssociationType Default.Attempt
	 */
	public $_for_7;

	/**
	 * @access public
	 */
	public function getAssignmentID() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aAssignmentID
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setAssignmentID($aAssignmentID) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getTitle() {
		return $this->_title;
	}

	/**
	 * @access public
	 * @param String aTitle
	 * @return void
	 * @ParamType aTitle String
	 * @ReturnType void
	 */
	public function setTitle($aTitle) {
		$this->_title = $aTitle;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getDescription() {
		return $this->_description;
	}

	/**
	 * @access public
	 * @param String aDescription
	 * @return void
	 * @ParamType aDescription String
	 * @ReturnType void
	 */
	public function setDescription($aDescription) {
		$this->_description = $aDescription;
	}

	/**
	 * @access public
	 */
	public function getAttribute() {
		return $this->_attribute;
	}

	/**
	 * @access public
	 * @param aAttribute
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setAttribute($aAttribute) {
		$this->_attribute = $aAttribute;
	}

	/**
	 * @access public
	 */
	public function Assignment() {
		// Not yet implemented
	}
}
?>