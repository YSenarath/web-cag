<?php

namespace AppBundle\Model\Institute;

/**
 * @access public
 * @author Yasas
 */
class Person {
	/**
	 * @AttributeType String
	 */
	private $_firstName;
	/**
	 * @AttributeType String
	 */
	private $_lastName;
	/**
	 * @AttributeType string
	 */
	private $_address;
	/**
	 * @AttributeType String
	 */
	private $_username;
	/**
	 * @AttributeType String
	 */
	private $_hashedPassword;

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getFirstName() {
		return $this->_firstName;
	}

	/**
	 * @access public
	 * @param String aFirstName
	 * @return void
	 * @ParamType aFirstName String
	 * @ReturnType void
	 */
	public function setFirstName($aFirstName) {
		$this->_firstName = $aFirstName;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getLastName() {
		return $this->_lastName;
	}

	/**
	 * @access public
	 * @param String aLastName
	 * @return void
	 * @ParamType aLastName String
	 * @ReturnType void
	 */
	public function setLastName($aLastName) {
		$this->_lastName = $aLastName;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getAddress() {
		return $this->_address;
	}

	/**
	 * @access public
	 * @param string aAddress
	 * @return void
	 * @ParamType aAddress string
	 * @ReturnType void
	 */
	public function setAddress($aAddress) {
		$this->_address = $aAddress;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getUsername() {
		return $this->_username;
	}

	/**
	 * @access public
	 * @param String aUsername
	 * @return void
	 * @ParamType aUsername String
	 * @ReturnType void
	 */
	public function setUsername($aUsername) {
		$this->_username = $aUsername;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getHashedPassword() {
		return $this->_hashedPassword;
	}

	/**
	 * @access public
	 * @param String aHashedPassword
	 * @return void
	 * @ParamType aHashedPassword String
	 * @ReturnType void
	 */
	public function setHashedPassword($aHashedPassword) {
		$this->_hashedPassword = $aHashedPassword;
	}
}
?>