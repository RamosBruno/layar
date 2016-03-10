<?php

include '../../config.inc.php';
include_once '../../bddConnect.php';

$db = connectDb();

if(isset($_GET)){
	$table = $_GET['table'];
	$id = $_GET['id'];

	if($_GET['action'] == 'desactiver'){
		$sql = $db->prepare("UPDATE ".$table." SET active = 0 WHERE id=:id");
	}elseif($_GET['action'] == 'activer'){
		$sql = $db->prepare("UPDATE ".$table." SET active = 1 WHERE id=:id");
	}
	$sql->bindParam( ':id', $id, PDO::PARAM_STR );
	$sql->execute();

	header('Location:/index.php');
}