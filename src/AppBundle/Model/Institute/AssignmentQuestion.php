<?php

namespace AppBundle\Model\Institute;

use Quez;
/**
 * @access public
 * @author Yasas
 * @package Default_1
 */
class AssignmentQuestion extends Quez {
	/**
	 * @AssociationType Default.Assignment
	 * @AssociationMultiplicity 1
	 */
	public $_contains;
	/**
	 * @AssociationType Default.Teacher
	 */
	public $_assign;
	/**
	 * @AssociationType Default.Answer
	 */
	public $_for_8;

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getAssignment() {
		// Not yet implemented
	}
}