<?php

/**
 * IndexController
 * 
 * @author
 * @version 
 */

class LoginController extends Zend_Controller_Action
{

    public function indexAction(){
        $this->_helper->layout()->disableLayout();
        if($this->getRequest()->isPost()){
        	$data = $this->getRequest()->getParams();
        	if($data["username"]!=null&&$data["password"]!=null){
        	    $session = new Zend_Session_Namespace('cubilaundry');
        	    $this->_redirect('client');
        	}else{
        	    $this->_redirect('login');
        	}        	
        }
    }
    
    public function logoutAction(){
        	Zend_Session::namespaceUnset('cubilaundry');
        	$this->_redirect('login');
    }
}
