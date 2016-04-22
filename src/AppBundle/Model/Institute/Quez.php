<?php
/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class Quez {
	/**
	 * @AttributeType String
	 */
	private $_textDescription;
	/**
	 * @AttributeType String[]
	 */
	private $_testCases;

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getTextDescription() {
		return $this->_textDescription;
	}

	/**
	 * @access public
	 * @param String aTextDescription
	 * @return void
	 * @ParamType aTextDescription String
	 * @ReturnType void
	 */
	public function setTextDescription($aTextDescription) {
		$this->_textDescription = $aTextDescription;
	}

	/**
	 * @access public
	 * @return String[]
	 * @ReturnType String[]
	 */
	public function getTestCases() {
		return $this->_testCases;
	}

	/**
	 * @access public
	 * @param String aTestCases
	 * @return void
	 * @ParamType aTestCases String
	 * @ReturnType void
	 */
	public function addTestCases($aTestCases) {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Question() {
		// Not yet implemented
	}
}
?>