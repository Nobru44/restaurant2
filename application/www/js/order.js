"use strict";

 $('#meal').on('change', function (){
	var id = $('#meal').val();
	console.log(id);
	var idSave = localStorage.setItem("id", id);
	console.log(idSave);
		



});