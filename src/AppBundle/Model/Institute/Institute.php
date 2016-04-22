<?php
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Course.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Administrator.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Student.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Teacher.php');
require_once(realpath(dirname(__FILE__)) . '/../Default_1/Section.php');

/**
 * @access public
 * @author Yasas
 */
class Institute {
	/**
	 * @AssociationType Default.Course
	 * @AssociationMultiplicity 0..*
	 */
	public $_create = array();
	
	/**
	 * @AssociationType Default.Administrator
	 * @AssociationMultiplicity 1
	 */
	public $_operate;
	
	/**
	 * @AssociationType Default.Student
	 * @AssociationMultiplicity 0..*
	 * @AssociationKind Composition
	 */
	public $_unnamed_Student_ = array();
	
	/**
	 * @AssociationType Default.Teacher
	 * @AssociationMultiplicity 0..*
	 * @AssociationKind Composition
	 */
	public $_unnamed_Teacher_ = array();

	/**
	 * @access public
	 * @param Teacher aTeacher
	 * @ParamType aTeacher Default.Teacher
	 */
	public function addTeacher(Teacher $aTeacher) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Student aStudent
	 * @ParamType aStudent Default.Student
	 */
	public function addStudent(Student $aStudent) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param course aCourse
	 * @ParamType aCourse course
	 */
	public function createCourse(course $aCourse) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Section aSection
	 * @ParamType aSection Default.Section
	 */
	public function CreateSection(Section $aSection) {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Institute() {
		// Not yet implemented
	}
}
?>