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
            
            $user = new Application_Model_User();
            $user->setUserName($data["username"]);
            $user->setPassword($data["password"]);
            $typeUser = new Application_Model_TypeUser();
            $typeUser->setId(Application_Model_TypeUser::$typeUserArray['CLIENT']);
            $typeUser->setName(Application_Model_TypeUser::$typeUserNameArray['CLIENT']);
            $user->setTypeUser($typeUser);
            
            $serviceLogin = new Application_Service_Login();
            
            if($serviceLogin->validateUser($user)){
                $clientService = new Application_Service_Client();
                $session = new Zend_Session_Namespace('cubilaundry');
                $session->client = $clientService->getClientByUserName($data["username"]);
                
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
