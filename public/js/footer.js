$(document).ready(function() {
	$("#botonContacto").click(function() {
		$("#botonContacto").hide();
		$("#botonContactoQuitar").removeClass("d-none")
		$("#divContacto").removeClass("d-none")
	}) 

	$("#botonContactoQuitar").click(function() {
		$("#botonContacto").show();
		$("#botonContactoQuitar").addClass("d-none")
		$("#divContacto").addClass("d-none")
	}) 

	$("#botonQuien").click(function() {
		$("#botonQuien").hide();
		$("#botonQuienQuitar").removeClass("d-none")
		$("#divQuien").removeClass("d-none")
	}) 

	$("#botonQuienQuitar").click(function() {
		$("#botonQuien").show();
		$("#botonQuienQuitar").addClass("d-none")
		$("#divQuien").addClass("d-none")
	}) 

	
	$("#botonRedes").click(function() {
		$("#botonRedes").hide();
		$("#botonRedesQuitar").removeClass("d-none")
		$("#divRedes").removeClass("d-none")
	}) 

	$("#botonRedesQuitar").click(function() {
		$("#botonRedes").show();
		$("#botonRedesQuitar").addClass("d-none")
		$("#divRedes").addClass("d-none")
	}) 
})