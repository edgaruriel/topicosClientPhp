<?php

class Application_Model_Note extends Application_Model_Abstract
{
    
    public $id = 0;
    public $title;
    public $note;
    public $date;
    
    public $typeNote;
    public $priority;
    
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return the $note
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * @return the $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @return the $typeNote
	 */
	public function getTypeNote() {
		return $this->typeNote;
	}

	/**
	 * @return the $priority
	 */
	public function getPriority() {
		return $this->priority;
	}

	/**
	 * @param number $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @param field_type $note
	 */
	public function setNote($note) {
		$this->note = $note;
	}

	/**
	 * @param field_type $date
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * @param field_type $typeNote
	 */
	public function setTypeNote($typeNote) {
		$this->typeNote = $typeNote;
	}

	/**
	 * @param field_type $priority
	 */
	public function setPriority($priority) {
		$this->priority = $priority;
	}

    
	
    

}

