
<?php
/*
function urlHasBeenShortened($url){
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/intit.php';
  $row = $conn->query("SELECT * FROM urls WHERE url = "$url"");

  if($row->num_rows > 0){
    return true;
  } else {
    return false;
  }


function getURLID($url){
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/intit.php';
  $row = $conn->query("SELECT 'URL' FROM `URLS` WHERE id = $url");

  return $row->fetch_assoc()['id'];
}


function insertID($id, $url){

   $conn-> query ("INSERT INTO `URLS2`(`URL`,`SURL`) VALUES ('$url','$surl')");
}

function getURLID($url){
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/intit.php';
  $row = $conn->query("SELECT 'URL' FROM `URLS` WHERE id = $url");
  return $row->fetch_assoc()['id'];
}


function insertID($id, $url){
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/intit.php';
  $conn-> query ("INSERT INTO `URLS`(`URL`,`SURL`) VALUES ('$url','$surl')");
}

  if(strlen($conn->error)==0){
    return true;
  }

function getURLlocation($url){
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/intit.php';
  $row = $conn->query("SELECT 'ID' FROM 'URLS2' WHERE 'id = $id'");
  return $row -> fetch_assoc()['id'];
 }




}
?>
