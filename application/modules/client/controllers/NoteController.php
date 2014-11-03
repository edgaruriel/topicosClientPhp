<?php
class Client_NoteController extends Zend_Controller_Action {

    public function preDispatch(){

    }
    
    public function init(){
    	$this->view->controller = $this->getRequest()->getControllerName();
    	$this->view->action = $this->getRequest()->getActionName();
    }
    
	public function newAction(){
	  
	}

}