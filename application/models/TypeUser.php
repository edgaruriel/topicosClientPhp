<?php

class Application_Model_TypeUser extends Application_Model_Abstract
{
    public $id = 0;
    public $name;
    public static $typeUserArray = array("ADMIN"=>1,"CLIENT"=>2);
    public static $typeUserNameArray = array("ADMIN"=>'admin',"CLIENT"=>'client');


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