<?php
//Подключение БД
define( "DB_USERNAME", "root" ); 
define( "DB_PASSWORD", "" ); 
define( "DB_DSN", "mysql:host=localhost; dbname=dproject" ); 
date_default_timezone_set( "Asia/Almaty" );

if (isset($_GET['id'])) {$id=$_GET['id'];}
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "DELETE FROM `houses` WHERE house_id='$id'";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":id", $id, PDO::PARAM_INT );
    $st->execute();
    $sql = "ALTER TABLE testtable AUTO_INCREMENT = 1";
    $st = $conn->prepare( $sql );
    $st->execute();
    
header('Location: http://dp/pages/housesCatalog.php');
// echo $id;
?> 