<?php
	session_start();
	$a=$_SESSION['session_username'];
	if(isset($_POST['fio'])) {$fio=$_POST['fio'];}
	if(isset($_POST['iin'])) {$iin=$_POST['iin'];}
	if(isset($_POST['tn'])) {$tn=$_POST['tn'];}
	if(isset($_POST['dn'])) {$dn=$_POST['dn'];}
	if(isset($_POST['dk'])) {$dk=$_POST['dk'];}
	if (isset($_POST['rad'])) {$n_house=$_POST['rad'];}
	$orders_id=rand(1,100);
$db=mysql_connect("localhost","root","");
mysql_select_db("surf",$db);
$result=mysql_query("SELECT * FROM `usertbl` WHERE `username`='$a'");
$myrow=mysql_fetch_array($result);
$id=$myrow['ID'];
$result=mysql_query("SELECT * FROM `HOUSES` WHERE N_HOUSE=$n_house");
$myrow=mysql_fetch_array($result);
$price=$myrow['PRICE'];
mysql_query("INSERT INTO `CLIENT`(fio,iin,tn,id)
VALUES ('$fio','$iin','$tn','$id')");
mysql_query("INSERT INTO `ORDERS`(price,dn,dk,iin,id,orders_id,n_house)
VALUES ('$price','$dn','$dk','$iin','$id',$orders_id,'$n_house')");

header('Location: http://neptun/basket.php');
?>