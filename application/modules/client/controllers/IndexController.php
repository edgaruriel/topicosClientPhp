<?php
class Client_IndexController extends Zend_Controller_Action {

    public function preDispatch(){

    }
    
	public function indexAction(){
	  
	}
	
	public function profileAction(){
	    
	    if($this->getRequest()->isPost()){
	    	 
	    }else{
		 $client = new Application_Model_Client();
		 $client->setId(1);
		 $client->setName("E");
		 $client->setLastName("R");
		 $client->setEmail("a@a.com");
		 
		 $user = new Application_Model_User();
		 $user->setId(1);
		 $user->setUserName("E");
		 
		 $client->setUser($user);
		 $this->view->client = $client;
	    }
	}

}