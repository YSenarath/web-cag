<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/CourseQuestion.php');

/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class QuestionDAO {

	/**
	 * @access public
	 * @param int aQuestionId
	 * @ParamType aQuestionId int
	 */
	public function getQuestion($aQuestionId) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Default_1.CourseQuestion aQ
	 * @ParamType aQ Default.CourseQuestion
	 */
	public function addQuestion(CourseQuestion $aQ) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aQId
	 * @ParamType aQId int
	 */
	public function removeQuestion($aQId) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aQid
	 * @param Default_1.CourseQuestion aQ
	 * @ParamType aQid int
	 * @ParamType aQ Default.CourseQuestion
	 */
	public function updateQuestion($aQid, CourseQuestion $aQ) {
		// Not yet implemented
	}
}
?>