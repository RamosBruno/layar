<?php

include '../../config.inc.php';
include_once '../../bddConnect.php';

$db = connectDb();

if(isset($_POST)){

	$data = $_POST;

	if($data['action'] == 'ajouter'){
		$sql = $db->prepare("INSERT INTO Icon (url,type) VALUES (:url,:type)");
	}elseif($data['action'] == 'modifier'){
		$sql = $db->prepare("UPDATE Icon SET url = :url,type = :type WHERE id = :id");
		$sql->bindParam( ':id', $data['id'], PDO::PARAM_STR );
	}
	$sql->bindParam( ':url', $data['url'], PDO::PARAM_STR );
	$sql->bindParam( ':type', $data['type'], PDO::PARAM_STR );
	$sql->execute();


	if(isset($data['redirect'])){
		if($data['redirect'] == 'poi'){
			header('Location:/views/formpoi.php?action=ajouter');
		}
	}else{
		header('Location:/index.php');
	}
}
