<?php

namespace AppBundle\Model\Institute;

/**
 * @access public
 * @author Yasas
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
	 * @AssociationType Section
	 * @AssociationMultiplicity 1
	 */
	public $_has;

	/**
	 * @AssociationType Teacher
	 */
	public $_create;

	/**
	 * @AssociationType AssignmentQuestion
	 * @AssociationMultiplicity 1..*
	 * @AssociationKind Composition
	 */
	public $_contains = array();

	/**
	 * @AssociationType Attempt
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
	 * @param String $aDescription
	 * @internal param String $aDescription
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