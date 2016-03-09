<?php

include '/../config.inc.php';
include_once '/../bddConnect.php';

function getPois(){
	$db = connectDb();
	$sql = $db->prepare( "
              SELECT id,
                     imageURL,
                     title,
                     description,
                     footnote,
                     lat,
                     lon,
	                 iconID,
	                 objectID,
	                 transformID
               FROM poi
              LIMIT 0, 50 " );

  $sql->execute();
  $rawPois = $sql->fetchAll(PDO::FETCH_ASSOC);
  return $rawPois;
}

function getActions(){
	$db = connectDb();
	$sql = $db->prepare( "
              SELECT poiID,
                     label,
                     uri,
                     contentType,
                     method,
                     params,
                     id
               FROM poiaction
              LIMIT 0, 50 " );

  $sql->execute();
  $rawActions = $sql->fetchAll(PDO::FETCH_ASSOC);
  return $rawActions;
}

function getIcons(){
	$db = connectDb();
	$sql = $db->prepare( "
              SELECT id,
              url,
              type
               FROM icon
              LIMIT 0, 50 " );

  $sql->execute();
  $rawIcons = $sql->fetchAll(PDO::FETCH_ASSOC);
  return $rawIcons;
}
