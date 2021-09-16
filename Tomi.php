<?php

//print_r($_POST);
//1. Connect to database
//("localhost" server location,"your_localhost_database_user","your_localhost_database_password","your_localhost_database_db")
$con = mysqli_connect('localhost','root','root','Tomi');

//2. Getting url from html to php
$url = $_POST["url"]; //from html to php
//3. Make short url

function generateUniqueID(){
 //$token = substr(md5(uniqid(rand(), true)),0,6);
 $token = rand(111,999);
 // echo(tomi.com/ + $token);
 return "tomi.com/" . strval($token); //this is $surl, i am using it because its function, same as in java//}
}

// Check if same surl exists in db
// if yes - then generate once more




//if(idExists($id) == true){
  //$id = rand(111,999);
//}

// if(urlHasBeenShortened($url)){
//   return getURLID($url);
// }

// function getURLID($url){
//   $row = $conn->query("SELECT 'URL' FROM `URLS` WHERE id = $url");
//   return $row->fetch_assoc()['id'];
// }


// function insertID($id, $url){
//   $conn-> query ("INSERT INTO `URLS`(`URL`,`SURL`) VALUES ('$url','$surl')");
// }

$surl = generateUniqueID();

$sql1 = "INSERT INTO `URLS`(`URL`,`SURL`) VALUES ('$url','$surl')";
$sql = "SELECT * FROM `URLS`";


$sql2 =  "SELECT * FROM URLS WHERE SURL = '$surl'";
$res1 = mysqli_query($con, $sql2);


//4 INSERT short url into sql
/*if (mysqli_num_rows($res1) == 0) {
  //  echo "No rows found, nothing to print so am exiting";
  if(mysqli_query($con, $sql1)){ //send to sql
    //echo "Done" ;
  } else {
    echo "Its not in sql";
  }

}else {
$surl = generateUniqueID();
$sql1 = "INSERT INTO `URLS`(`URL`,`SURL`) VALUES ('$url','$surl')";



}*/
if(mysqli_query($con, $sql1)){ //send to sql
  echo $surl ;
} else {
  echo "Its not in sql";
}
//*/

//5 take short url from sql and insert into html

//*/
 ?>
