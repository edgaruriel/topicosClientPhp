var idNote;
function confirmDeleteNote(id, name){
	idNote = id;
	$("#nameNote").text(name);
	$("#dialog-delete").modal('show');
}

function deleteNote(){
	location.href = 'client/note/delete?id='+idNote;
}