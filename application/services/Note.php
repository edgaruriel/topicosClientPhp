<?php
require_once '../library/soap/nusoap.php';

class Application_Service_Note {
    public static $WSDL = 'http://localhost:8080/WStopicosNote/services/NoteService?wsdl';
    
    public function createNote(Application_Model_Note $note){
        $session = new Zend_Session_Namespace('cubilaundry');
    	$cliente = new nusoap_client(Application_Service_Note::$WSDL, true);
    	$result = $cliente->call("createNote", array("note"=>$note, "idClient"=>$session->client->getId()));
    
    	if($result['createNoteReturn'] != 'false'){
    		return true;
    	}else{
    		return false;
    	}
    }
    
    public function updateNote(Application_Model_Note $note){
    
    	$cliente = new nusoap_client(Application_Service_Note::$WSDL, true);
    	$result = $cliente->call("updateNote", array("note"=>$note));
    
    	if($result['updateNoteReturn'] != null){
    		return true;
    	}else{
    		return false;
    	}
    }
    
    public function deleteNote($idNote){
    
    	$cliente = new nusoap_client(Application_Service_Note::$WSDL, true);
    	$result = $cliente->call("deleteById", array("id"=>$idNote));
    
    	if($result['deleteByIdReturn'] != 'false'){
    		return true;
    	}else{
    		return false;
    	}
    }
    
    public function getNoteById($idNote){
    	$cliente = new nusoap_client(Application_Service_Note::$WSDL, true);
    	$result = $cliente->call("getOneByIdNote", array("id"=>$idNote));
    
    	$note = new Application_Model_Note();
    	$typeNote = new Application_Model_TypeNote();
    	$typePriority = new Application_Model_Priority();
    	
    	$note->createFromArray($result["getOneByIdNoteReturn"]);
    	$auxNote = $result["getOneByIdNoteReturn"];
    
    	$typeNote->createFromArray($auxNote["typeNote"]);
        $note->setTypeNote($typeNote);
        
        $typePriority->createFromArray($auxNote["priority"]);
        $note->setPriority($typePriority);
        
        return $note;
    }
    
    public function getAllByIdClient($idClient){
        $notes = array();
       
    	$cliente = new nusoap_client(Application_Service_Note::$WSDL, true);
    	$all = $cliente->call("getAllOfClientByIdClient", array("id"=>$idClient));
    	$noteArray = $all["getAllOfClientByIdClientReturn"];
        $flag = false;
    	foreach ($noteArray as $index=>$value){
    		if(is_array($value)){
    			$flag = true;
    		}else{
    			$flag = false;
    		}
    		break;
    	}
    	
    	if(!$flag){
    	    $note = new Application_Model_Note();
    	  
    	    $typeNote = new Application_Model_TypeNote();
    	    $typePriority = new Application_Model_Priority();
    	  
    	    $note->createFromArray($noteArray);
    	    $typeNote->createFromArray($noteArray["typeNote"]);
    	    $note->setTypeNote($typeNote);
    	  
    	    $typePriority->createFromArray($noteArray["priority"]);
     
    	    $note->setPriority($typePriority);
    	    array_push($notes, $note);
    	}else{
    	    foreach ($noteArray as $result){
    	    	$note = new Application_Model_Note();
    	    	$typeNote = new Application_Model_TypeNote();
    	    	$typePriority = new Application_Model_Priority();
    	    	 
    	    	$note->createFromArray($result);
    	    	$typeNote->createFromArray($result["typeNote"]);
    	    	$note->setTypeNote($typeNote);
    	    	 
    	    	$typePriority->createFromArray($result["priority"]);
    	    	 
    	    	$note->setPriority($typePriority);
    	    	array_push($notes, $note);
    	    }
    	}
    	return $notes;
    }
    
}