<?php

include '/../config.inc.php';
include_once '/../bddConnect.php';

$db = connectDb();

if(isset($_POST)){

	$data = $_POST;

	(isset($_POST['showBiwOnClick']))?$data['showBiwOnClick'] = 1:$data['showBiwOnClick'] = 0;
	(isset($_POST['doNotIndex']))?$data['doNotIndex'] = 1:$data['doNotIndex'] = 0;
	(isset($_POST['showSmallBiw']))?$data['showSmallBiw'] = 1:$data['showSmallBiw'] = 0;

	$sql = $db->prepare("INSERT INTO poi (title,id,footnote,lat,lon,imageURL,description,biwStyle,poiType,showBiwOnClick,doNotIndex,showSmallBiw) VALUES (:title,:id,:footnote,:lat,:lon,:imageURL,:description,:biwStyle,:poiType,:showBiwOnClick,:doNotIndex,:showSmallBiw)");
	$sql->bindParam( ':title', $data['title'], PDO::PARAM_STR );
	$sql->bindParam( ':id', $data['id'], PDO::PARAM_STR );
	$sql->bindParam( ':footnote', $data['footnote'], PDO::PARAM_STR );
	$sql->bindParam( ':lat', $data['lat'], PDO::PARAM_STR );
	$sql->bindParam( ':lon', $data['lon'], PDO::PARAM_STR );
	$sql->bindParam( ':imageURL', $data['imageURL'], PDO::PARAM_STR );
	$sql->bindParam( ':description', $data['description'], PDO::PARAM_STR );
	$sql->bindParam( ':biwStyle', $data['biwStyle'], PDO::PARAM_STR );
	$sql->bindParam( ':poiType', $data['poiType'], PDO::PARAM_STR );
	$sql->bindParam( ':showBiwOnClick', $data['showBiwOnClick'], PDO::PARAM_STR );
	$sql->bindParam( ':doNotIndex', $data['doNotIndex'], PDO::PARAM_STR );
	$sql->bindParam( ':showSmallBiw', $data['showSmallBiw'], PDO::PARAM_STR );
	$sql->execute();
}
