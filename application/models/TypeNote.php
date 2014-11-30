<?php

class Application_Model_TypeNote extends Application_Model_Abstract
{
    public $id;
    public $name;
    public static $typeNoteArray = array("ACADEMICA"=>1,"TRABAJO"=>2,"OTRO"=>3);
    public static $typeNoteNameArray = array("ACADEMICA"=>Academica,"TRABAJO"=>Trabajo,"OTRO"=>Otro);

	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}
}

?>