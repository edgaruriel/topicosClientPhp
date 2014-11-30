var idNote;
function confirmDeleteNote(id, name){
	idNote = id;
	$("#idDelete").val(idNote);
	$("#nameNote").text(name);
	$("#dialog-delete").modal('show');
}
