<?php
class Application_Service_Client {
    public static $WSDL = 'http://localhost:8080/WStopicosClient/services/ClientService?wsdl';
    
    public function getClientByUserName($userName){
        $cliente = new nusoap_client(Application_Service_Client::$WSDL, true);
        $result = $cliente->call("getClientByUserName", array("userName"=>$userName));
        
        $client = new Application_Model_Client();
        $user = new Application_Model_User();
        $typeUser = new Application_Model_TypeUser();
        
        $client->createFromArray($result['getClientByUserNameReturn']);
        $auxClient = $result['getClientByUserNameReturn'];
        $user->createFromArray($auxClient['user']);
        
        $auxUser = $auxClient['user'];
        $typeUser->createFromArray($auxUser['typeUser']);
        $user->setTypeUser($typeUser);
        
        $client->setUser($user);
    }
    
}