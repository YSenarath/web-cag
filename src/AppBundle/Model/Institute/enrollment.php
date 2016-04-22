<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Student.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Section.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class enrollment {
	private $_attribute;
	/**
	 * @AssociationType Default.Student
	 */
	public $_unnamed_Student_;
	/**
	 * @AssociationType Default.Section
	 */
	public $_unnamed_Section_;

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
	public function enrollment() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Default_1.Student aUnnamed_Student_
	 * @return void
	 * @ParamType aUnnamed_Student_ Default.Student
	 * @ReturnType void
	 */
	public function setUnnamed_Student_(Student $aUnnamed_Student_) {
		$this->_unnamed_Student_ = $aUnnamed_Student_;
	}

	/**
	 * @access public
	 * @return Default_1.Student
	 * @ReturnType Default.Student
	 */
	public function getUnnamed_Student_() {
		return $this->_unnamed_Student_;
	}

	/**
	 * @access public
	 * @param Default_1.Section aUnnamed_Section_
	 * @return void
	 * @ParamType aUnnamed_Section_ Default.Section
	 * @ReturnType void
	 */
	public function setUnnamed_Section_(Section $aUnnamed_Section_) {
		$this->_unnamed_Section_ = $aUnnamed_Section_;
	}

	/**
	 * @access public
	 * @return Default_1.Section
	 * @ReturnType Default.Section
	 */
	public function getUnnamed_Section_() {
		return $this->_unnamed_Section_;
	}
}
?>