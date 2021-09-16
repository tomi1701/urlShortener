<?php

$con = mysqli_connect('localhost','root','root','Tomi');
//echo "YOOOOOO ";


$surl = $_POST['link'];
/*
$result = getURLlocation($surl);
echo $result;*/


$sql = "SELECT URL FROM URLS WHERE SURL = '$surl' LIMIT 1";
//$sql = "SELECT `URL` FROM `URLS` WHERE `SURL = $surl`";
//$sql = "SELECT 'URL' FROM 'URLS' WHERE `SURL = $surl`";
$res1 = mysqli_query($con, $sql);
if (mysqli_num_rows($res1) == 0) {
//  echo "No rows found, nothing to print so am exiting";
}else {

  //$row1 =  mysqli_fetch_assoc($res1);
  while($row1 =  mysqli_fetch_assoc($res1)){
  echo $row1['URL'];

  }

}
//while($row1 =  mysqli_fetch_assoc($row)){


//}


?>
