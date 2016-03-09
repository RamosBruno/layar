<?php

include '/../config.inc.php';
include_once '/../bddConnect.php';

$db = connectDb();

if(isset($_POST)){
	$data = $_POST;
	$sql = $db->prepare("INSERT INTO poiaction (poiID,label,uri,contentType,method,activityType,params) VALUES (:poiID,:label,:uri,:contentType,:method,:activityType,:params)");
	$sql->bindParam( ':poiID', $data['poiID'], PDO::PARAM_STR );
	$sql->bindParam( ':label', $data['label'], PDO::PARAM_STR );
	$sql->bindParam( ':uri', $data['uri'], PDO::PARAM_STR );
	$sql->bindParam( ':contentType', $data['contentType'], PDO::PARAM_STR );
	$sql->bindParam( ':method', $data['method'], PDO::PARAM_STR );
	$sql->bindParam( ':activityType', $data['activityType'], PDO::PARAM_STR );
	$sql->bindParam( ':params', $data['params'], PDO::PARAM_STR );
	$sql->execute();
}
