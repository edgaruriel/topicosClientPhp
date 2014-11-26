<?php

class Application_Model_User extends Application_Model_Abstract
{
    public $id = 0;
    public $password;
    public $typeUser;
    public $userName;
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $password
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @return the $typeUser
	 */
	public function getTypeUser() {
		return $this->typeUser;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $password
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * @param field_type $typeUser
	 */
	public function setTypeUser($typeUser) {
		$this->typeUser = $typeUser;
	}
	
	/**
	 * @return the $userName
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * @param field_type $userName
	 */
	public function setUserName($userName) {
		$this->userName = $userName;
	}


    
    
    
    
}

