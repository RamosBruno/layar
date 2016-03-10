<?php

include 'config.inc.php';
include_once 'bddConnect.php';

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
                   transformID,
                   active
               FROM POI
              LIMIT 0, 50 " );

  $sql->execute();
  $rawPois = $sql->fetchAll(PDO::FETCH_ASSOC);
  return $rawPois;
}

function getPoiById($id){
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
                   transformID,
                   biwStyle,
                   doNotIndex,
                   showSmallBiw,
                   showBiwOnClick,
                   poiType,
                   iconID,
                   objectID,
                   transformID
               FROM POI
               WHERE id = :id
              LIMIT 0, 50 " );

  $sql->bindParam( ':id', $id, PDO::PARAM_STR );
  $sql->execute();
  $poi = $sql->fetchAll(PDO::FETCH_ASSOC);
  return $poi;
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
                     id,
                     active
               FROM POIAction
              LIMIT 0, 50 " );

  $sql->execute();
  $rawActions = $sql->fetchAll(PDO::FETCH_ASSOC);
  return $rawActions;
}

function getActionById($id){
  $db = connectDb();
  $sql = $db->prepare( "
              SELECT poiID,
                     label,
                     uri,
                     autoTriggerRange,
                     autoTriggerOnly,
                     id,
                     contentType,
                     method,
                     activityType,
                     params,
                     closeBiw,
                     showActivity,
                     activityMessage,
                     autoTrigger
               FROM POIAction
               WHERE id = :id
              LIMIT 0, 50 " );

  $sql->bindParam( ':id', $id, PDO::PARAM_STR );
  $sql->execute();
  $rawActions = $sql->fetchAll(PDO::FETCH_ASSOC);
  return $rawActions;
}

function getIcons(){
  $db = connectDb();
  $sql = $db->prepare( "
              SELECT id,
              url,
              type,
              active
               FROM Icon
              LIMIT 0, 50 " );

  $sql->execute();
  $rawIcons = $sql->fetchAll(PDO::FETCH_ASSOC);
  return $rawIcons;
}

function getIconById($id){
  $db = connectDb();
  $sql = $db->prepare( "
              SELECT id,
              url,
              type
               FROM Icon
               WHERE id = :id
              LIMIT 0, 50 " );

  $sql->bindParam( ':id', $id, PDO::PARAM_STR );
  $sql->execute();
  $icon = $sql->fetchAll(PDO::FETCH_ASSOC);
  return $icon;
}
