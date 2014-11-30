<?php
class Client_IndexController extends Zend_Controller_Action {

    public function preDispatch(){

    }
    
	public function indexAction(){
	  $serviceNote = new Application_Service_Note();
	  $session = new Zend_Session_Namespace('cubilaundry');
	  $this->view->notes = $serviceNote->getAllByIdClient($session->client->getId());
	}
	
	public function profileAction(){
	    
	    $serviceClient = new Application_Service_Client();
	    $session = new Zend_Session_Namespace('cubilaundry');
	    if($this->getRequest()->isPost()){
	        $data = $this->getRequest()->getParams();
	    	 $client = new Application_Model_Client();
	    	 $client->createFromArray($data);
	    	 $client->setId($data["id_client"]);
	    	 
	    	 
	    	 $user = new Application_Model_User();
	    	 $user->createFromArray($data);
	    	 $user->setId($data["id_user"]);
	    	 
	    	 if($data["newpassword"]!=null||$data["newpassword"]!=""){
	    	 		$user->setPassword($data["newpassword"]);
	    	 }else{
	    	     $user->setPassword("");
	    	 }
	    	 
	    	 $typeUser = new Application_Model_TypeUser();
	    	 $typeUser->setId(Application_Model_TypeUser::$typeUserArray["CLIENT"]);
	    	 $typeUser->setName("");
	    	 
	    	 $user->setTypeUser($typeUser);
	    	 $client->setUser($user);
	    	 
	    	 //print_r($client);
	    	 if($serviceClient->updateClient($client)){
	    	     //$session->client->user->userName = $data["userName"];
	    	     $this->_helper->redirector('index');
	    	 }
	    }else{
	        $this->view->client = $serviceClient->getClientByUserName($session->client->getUser()->getUserName());
	    }
	}

}