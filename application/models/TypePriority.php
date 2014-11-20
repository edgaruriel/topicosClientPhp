<?php

class Application_Model_TypePriority extends Application_Model_Abstract
{
    public $id;
    public $name;
    public static $typePriorityArray = array("ALTA"=>1,"MEDIA"=>2,"BAJA"=>3);


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