<?php
namespace AppBundle\Model\Institute;

/**
 * @access public
 * @author Yasas
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
	 * @return string
	 * @ReturnType String
	 */
	public function getTextDescription() {
		return $this->_textDescription;
	}

	/**
	 * @access public
	 * @param string aTextDescription
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
	 * @param string aTestCases
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