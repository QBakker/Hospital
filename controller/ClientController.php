<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	$clients = getAllClients();

	render("client/index", array(
		'clients' => $clients
	));	
}

function create()
{
	render("client/create");
}

function createSave()
{
	if(createClient()){
		header("location:" . URL . " client/index");
		exit();
	} else {
		header("location:" . URL . " error/error_createClient");
		exit();
	}
}

function edit($id)
{
	$client = getClient($id);

	render("client/edit", array(
		"client" => $client
	));
}

function editSave($id)
{
	if(editClient($id)){
		header("location:" . URL . " client/index");
		exit();
	} else {
		header("location:" . URL . " error/error_editClient");
		exit();
	}
}

function delete($id)
{
	if(deleteClient($id)){
		header("location:" . URL . " client/index");
		exit();
	} else {
		header("location:" . URL . " error/error_deleteClient");
		exit();
	}
}