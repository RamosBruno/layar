<?php

include '/../config.inc.php';
include_once '/../bddConnect.php';

$db = connectDb();

if(isset($_POST)){

	$data = $_POST;

	if($data['action'] == 'ajouter')
		$sql = $db->prepare("INSERT INTO icon (url,type) VALUES (:url,:type)");
	elseif($data['action'] == 'modifier')
		$sql = $db->prepare("UPDATE icon SET url = :url,type = :type WHERE id = :id");
		$sql->bindParam( ':id', $data['id'], PDO::PARAM_STR );
	$sql->bindParam( ':url', $data['url'], PDO::PARAM_STR );
	$sql->bindParam( ':type', $data['type'], PDO::PARAM_STR );
	$sql->execute();

	header('Location:/index.php');
}
