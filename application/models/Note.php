<?php

class Application_Model_Note extends Application_Model_Abstract
{
    
    public $id;
    public $title;
    public $comment;
    public $date;
    
    public $typeNote;
    public $typePriority;
    
    
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
	 * @return the $comment
	 */
	public function getComment() {
		return $this->comment;
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
	 * @return the $typePriority
	 */
	public function getTypePriority() {
		return $this->typePriority;
	}

	/**
	 * @param field_type $id
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
	 * @param field_type $comment
	 */
	public function setComment($comment) {
		$this->comment = $comment;
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
	 * @param field_type $typePriority
	 */
	public function setTypePriority($typePriority) {
		$this->typePriority = $typePriority;
	}

    
    

}

