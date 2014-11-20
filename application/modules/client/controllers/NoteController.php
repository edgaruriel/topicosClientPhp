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
	    $data = $this->getRequest()->getParams();
	    //print_r($data);
	}
	
	public function editAction(){
	    $data = $this->getRequest()->getParams();
	    
	    if($this->getRequest()->isPost()){
	        
	    }else{
	        $note = new Application_Model_Note();
	        $note->setId(1);
	        $note->setDate(Date('Y-m-d'));
	        $note->setComment("juasjuas");
	        $note->setTitle("hola");
	        $this->view->note = $note;
	    }
	}
	
	public function deleteAction(){
	    $this->_helper->layout()->disableLayout();
	    $this->_helper->viewRenderer->setNoRender(true);
		$data = $this->getRequest()->getParams();
	}

}