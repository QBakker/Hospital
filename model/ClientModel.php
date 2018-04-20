<?php

function getAllClients()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getClient($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients 
			WHERE client_id = :id 
			LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return $query->fetch();
}

function createClient()
{
	$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : null;
	$firstname = ucwords(strtolower($firstname));

	$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : null;
	$lastname = ucwords(strtolower($lastname));

	$phonenumber = isset($_POST["phonenumber"]) ? $_POST["phonenumber"] : null;

	$email = isset($_POST["email"]) ? $_POST["email"] : null;

	if ($firstname === null || $lastname === null || $phonenumber === null || $email === null) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients (client_firstname, client_lastname, client_phonenumber, client_email) 
			VALUES (:firstname, :lastname, :phonenumber, :email)";

	$query = $db->prepare($sql);
	$query->execute(array(
	 ":firstname" => $firstname,
	 ":lastname" => $lastname,
	 ":phonenumber" => $phonenumber,
	 "email" => $email
	));

	$db = null;

	return true;
}

function editClient($id=null)
{
	$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : null;
	$firstname = ucwords(strtolower($firstname));

	$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : null;
	$lastname = ucwords(strtolower($lastname));

	$phonenumber = isset($_POST["phonenumber"]) ? $_POST["phonenumber"] : null;

	$email = isset($_POST["email"]) ? $_POST["email"] : null;

	if ($id === null || $firstname === null || $lastname === null || $phonenumber === null || $email === null) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE clients 
			SET client_firstname = :firstname, 
				client_lastname = :lastname, 
				client_phonenumber = :phonenumber, 
				client_email = :email
			WHERE client_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
	 ":firstname" => $firstname,
	 ":lastname" => $lastname,
	 ":phonenumber" => $phonenumber,
	 "email" => $email,
	 "id" => $id
	));

	$db = null;

	return true;
}

function deleteClient($id)
{
	if ($id === '') {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE client_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return true;
}
