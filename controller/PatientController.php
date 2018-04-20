<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	$patients = getAllPatients();

	render("patient/index", array(
		"patients" => $patients
	));	
}

function create()
{
	$species = getAllSpecies();
	$clients = getAllClients();

	render("patient/create", array(
		"species" => $species,
		"clients" => $clients
	));
}

function createSave()
{
	if(createPatient($_POST)){
		header("location:" . URL . " patient/index");
		exit();
	} else {
		header("location:" . URL . " error/error_createPatient");
		exit();
	}
}

function edit($id)
{
	$patient = getPatient($id);
	$species = getAllSpecies();
	$clients = getAllClients();

	render("patient/edit", array(
		"patient" => $patient,
		"species" => $species,
		"clients" => $clients
	));
}

function editSave($id)
{
	if(editPatient($id, $_POST)){
		header("location:" . URL . " patient/index");
		exit();
	} else {
		header("location:" . URL . " error/error_editPatient");
		exit();
	}
}

function delete($id)
{
	if(deletePatient($id)){
		header("location:" . URL . " patient/index");
		exit();
	} else {
		header("location:" . URL . " error/error_deletePatient");
		exit();
	}
}