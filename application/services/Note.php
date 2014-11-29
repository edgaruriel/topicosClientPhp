<?php
class Application_Service_Note {
    public static $WSDL = 'http://localhost:8080/WStopicosClient/services/NoteService?wsdl';
    
    public function createNote(Application_Model_Note $note){
    
    	$cliente = new nusoap_client(Application_Service_Note::$WSDL, true);
    	$result = $cliente->call("createNote", array("note"=>$note));
    
    	if($result['createNoteReturn'] != null){
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
    	$typePriority = new Application_Model_TypePriority();
    	
    	$note->createFromArray($result["getOneByIdNoteReturn"]);
    	$auxNote = $result["getOneByIdNoteReturn"];
    
    	$typeNote->createFromArray($auxNote["typeNote"]);
        $note->setTypeNote($typeNote);
        
        $typePriority->createFromArray($auxNote["priority"]);
        $note->setTypePriority($typePriority);
        
        return $note;
    }
    
    public function getAllByIdClient($idClient){
        $notes = array();
    	$cliente = new nusoap_client(Application_Service_Note::$WSDL, true);
    	$all = $cliente->call("getAllOfClientByIdClient", array("id"=>$idClient));
    
    	foreach ($all as $result){
    	    $note = new Application_Model_Note();
    	    $typeNote = new Application_Model_TypeNote();
    	    $typePriority = new Application_Model_TypePriority();
    	    
    	    $note->createFromArray($result["getOneByIdNoteReturn"]);
    	    $auxNote = $result["getOneByIdNoteReturn"];
    	    
    	    $typeNote->createFromArray($auxNote["typeNote"]);
    	    $note->setTypeNote($typeNote);
    	    
    	    $typePriority->createFromArray($auxNote["priority"]);
    	    $note->setTypePriority($typePriority);
    	    array_push($notes, $note);
    	}

    	return $notes;
    }
    
}