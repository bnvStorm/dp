<?php
	session_start();
	$a=$_SESSION['session_username'];
$db=mysql_connect("localhost","root","mysql");
mysql_select_db("surf",$db);
$result=mysql_query("SELECT * FROM `usertbl` WHERE `username`='$a'");
$myrow=mysql_fetch_array($result);
$id=$myrow['ID'];
echo $id;
	?>