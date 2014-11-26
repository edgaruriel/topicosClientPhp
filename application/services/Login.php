<?php
class Application_Service_Login {
    public static $WSDL = 'http://localhost:8080/WStopicosLogin/services/Login?wsdl';
    
    public function validateUser(Application_Model_User $user){
        
        $cliente = new nusoap_client(Application_Service_Login::$WSDL, true);
        $result = $cliente->call("existUserClient", array("user"=>$user));
        
        if($result['existUserClientReturn'] != 'false'){
        	return true;
        }else{
        	return false;
        }
    }
    
    
}