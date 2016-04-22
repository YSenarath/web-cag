<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Answer.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Attempt.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class AnswerDAO {

	/**
	 * @access public
	 * @param Default_1.Answer aA
	 * @ParamType aA Default.Answer
	 */
	public function createAnswer(Answer $aA) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Default_1.Answer aA
	 * @ParamType aA Default.Answer
	 */
	public function UpdateAnswer(Answer $aA) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Default_1.Attempt aA
	 * @param int aId
	 * @ParamType aA Default.Attempt
	 * @ParamType aId int
	 */
	public function getAnswer(Attempt $aA, $aId) {
		// Not yet implemented
	}
}
?>