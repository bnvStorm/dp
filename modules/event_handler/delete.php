<?php
//Подключение БД
define( "DB_USERNAME", "root" ); 
define( "DB_PASSWORD", "" ); 
define( "DB_DSN", "mysql:host=localhost; dbname=dproject" ); 
date_default_timezone_set( "Asia/Almaty" );
//delete
if (isset($_POST['rad2'])) {$n_house=$_POST['rad2'];}
$db=mysql_connect("localhost","root","");
mysql_select_db("surf",$db);
mysql_query("DELETE FROM `orders` WHERE N_HOUSE=$n_house");
header('Location: http://neptun/pages/basket.php');
?>