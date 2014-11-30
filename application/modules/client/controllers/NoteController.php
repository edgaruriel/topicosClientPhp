<?php
require_once '../library/soap/nusoap.php';

class Client_NoteController extends Zend_Controller_Action {

    public function preDispatch(){

    }
    
    public function init(){
    	$this->view->controller = $this->getRequest()->getControllerName();
    	$this->view->action = $this->getRequest()->getActionName();
    }
    
	public function newAction(){
	    $serviceNote = new Application_Service_Note();
	   if($this->getRequest()->isPost()){
	       $data = $this->getRequest()->getParams();
	       $note = new Application_Model_Note();
	       $note->createFromArray($data);
	       $note->setDate($data["dateField"]); 
	       
	       $typeNote = new Application_Model_TypeNote();
	       $typeNote->setId($data["id_type"]);
	       $typeNote->setName("");
	        
	       $typePriority = new Application_Model_Priority();
	       $typePriority->setId($data["id_priority"]);
	       $typePriority->setName("");
	        
	       $note->setTypeNote($typeNote);
	       $note->setPriority($typePriority);
	       //print_r($note);
	       
	       if($serviceNote->createNote($note)){
	           $this->_helper->redirector('index','index','client');
	       }
	    }
	}
	
	public function editAction(){
	    $serviceNote = new Application_Service_Note();
	    $data = $this->getRequest()->getParams();
	    
	    if($this->getRequest()->isPost()){
	        $data = $this->getRequest()->getParams();
	        $note = new Application_Model_Note();
	        $note->createFromArray($data);
	        $note->setId($data["idNote"]);
	        $note->setDate($data["dateField"]);
	        
	        $typeNote = new Application_Model_TypeNote();
	        $typeNote->setId($data["id_type"]);
	        $typeNote->setName("");
	         
	        $typePriority = new Application_Model_Priority();
	        $typePriority->setId($data["id_priority"]);
	        $typePriority->setName("");
	         
	        $note->setTypeNote($typeNote);
	        $note->setPriority($typePriority);
	        //print_r($note);
	        
	        if($serviceNote->updateNote($note)){
	        	$this->_helper->redirector('index','index','client');
	        }
	    }else{
	        $this->view->note = $serviceNote->getNoteById($data["id"]);
	    }
	}
	
	public function deleteAction(){
	    $serviceNote = new Application_Service_Note();
		$data = $this->getRequest()->getParams();
		//print_r($data);
		if($serviceNote->deleteNote($data["idDelete"])){
			$this->_helper->redirector('index','index','client');
		}
	}

}