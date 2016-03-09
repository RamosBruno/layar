<?php

include '/../config.inc.php';
include_once '/../bddConnect.php';

$db = connectDb();

if(isset($_POST)){
	$data = $_POST;
	$sql = $db->prepare("INSERT INTO poi (title,id,footnote,lat,lon,imageURL,description,biwStyle,poiType) VALUES (:title,:id,:footnote,:lat,:lon,:imageURL,:description,:biwStyle,:poiType)");
	$sql->bindParam( ':title', $data['title'], PDO::PARAM_STR );
	$sql->bindParam( ':id', $data['id'], PDO::PARAM_STR );
	$sql->bindParam( ':footnote', $data['footnote'], PDO::PARAM_STR );
	$sql->bindParam( ':lat', $data['lat'], PDO::PARAM_STR );
	$sql->bindParam( ':lon', $data['lon'], PDO::PARAM_STR );
	$sql->bindParam( ':imageURL', $data['imageURL'], PDO::PARAM_STR );
	$sql->bindParam( ':description', $data['description'], PDO::PARAM_STR );
	$sql->bindParam( ':biwStyle', $data['biwStyle'], PDO::PARAM_STR );
	$sql->bindParam( ':poiType', $data['poiType'], PDO::PARAM_STR );
	$sql->execute();
}
