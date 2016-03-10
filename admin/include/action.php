<?php

include '/../../config.inc.php';
include_once '/../../bddConnect.php';

$db = connectDb();

if(isset($_POST)){
	$data = $_POST;

	$expCT = explode("-",$_POST['contentType']);

	if(count(array_keys($expCT)) < 2){
		if($expCT[0] == 'text/html')
			$data['activityType'] = 1;
		if($expCT[0] == 'audio/mpeg')
			$data['activityType'] = 2;
		if($expCT[0] == 'video/mp4')
			$data['activityType'] = 3;
		if($expCT[0] == 'maps')
			$data['activityType'] = 6;
	}elseif(count(array_keys($expCT)) == 2){
		if($expCT[0] == 'application/vnd.layar.internal'){
			if($expCT[1] == 'tel'){
				$data['activityType'] = 4;
				$data['uri'] = 'tel:'.$_POST['uri'];
			}
			if($expCT[1] == 'mail'){
				$data['activityType'] = 5;
				$data['uri'] = 'mailto:'.$_POST['uri'];
			}
		}
	}
	$data['contentType'] = $expCT[0];

	(isset($_POST['autoTriggerRange']))?$data['autoTriggerRange'] = 1:$data['autoTriggerRange'] = 0;
	(isset($_POST['autoTriggerOnly']))?$data['autoTriggerOnly'] = 1:$data['autoTriggerOnly'] = 0;
	(isset($_POST['closeBiw']))?$data['closeBiw'] = 1:$data['closeBiw'] = 0;
	(isset($_POST['showActivity']))?$data['showActivity'] = 1:$data['showActivity'] = 0;
	(isset($_POST['autoTrigger']))?$data['autoTrigger'] = 1:$data['autoTrigger'] = 0;

	if($data['action'] == 'ajouter'){
		$sql = $db->prepare("INSERT INTO POIAction (poiID,label,uri,contentType,method,activityType,params,autoTriggerRange,autoTriggerOnly,closeBiw,showActivity,autoTrigger,activityMessage) VALUES (:poiID,:label,:uri,:contentType,:method,:activityType,:params,:autoTriggerRange,:autoTriggerOnly,:closeBiw,:showActivity,:autoTrigger,activityMessage)");
	}elseif($data['action'] == 'modifier'){
		$sql = $db->prepare("UPDATE POIAction SET poiID=:poiID,label=:label,uri=:uri,contentType=:contentType,method=:method,activityType=:activityType,params=:params,autoTriggerRange=:autoTriggerRange,autoTriggerOnly=:autoTriggerOnly,closeBiw=:closeBiw,showActivity=:showActivity,autoTrigger=:autoTrigger,activityMessage=:activityMessage WHERE id=:id");
		$sql->bindParam( ':id', $data['id'], PDO::PARAM_STR );
	}
	$sql->bindParam( ':poiID', $data['poiID'], PDO::PARAM_STR );
	$sql->bindParam( ':label', $data['label'], PDO::PARAM_STR );
	$sql->bindParam( ':uri', $data['uri'], PDO::PARAM_STR );
	$sql->bindParam( ':contentType', $data['contentType'], PDO::PARAM_STR );
	$sql->bindParam( ':method', $data['method'], PDO::PARAM_STR );
	$sql->bindParam( ':activityType', $data['activityType'], PDO::PARAM_STR );
	$sql->bindParam( ':params', $data['params'], PDO::PARAM_STR );
	$sql->bindParam( ':autoTriggerRange', $data['autoTriggerRange'], PDO::PARAM_STR );
	$sql->bindParam( ':autoTriggerOnly', $data['autoTriggerOnly'], PDO::PARAM_STR );
	$sql->bindParam( ':closeBiw', $data['closeBiw'], PDO::PARAM_STR );
	$sql->bindParam( ':showActivity', $data['showActivity'], PDO::PARAM_STR );
	$sql->bindParam( ':autoTrigger', $data['autoTrigger'], PDO::PARAM_STR );
	$sql->bindParam( ':activityMessage', $data['activityMessage'], PDO::PARAM_STR );
	$sql->execute();

	header('Location:/index.php');
}
