<?php
//Подключение БД
require('../misc/config.php');

if (isset($_GET['id'])) {$id=$_GET['id'];}
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "DELETE FROM `houses` WHERE house_id='$id'";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":id", $id, PDO::PARAM_INT );
    $st->execute();
    $sql = "ALTER TABLE testtable AUTO_INCREMENT = 1";
    $st = $conn->prepare( $sql );
    $st->execute();
    
header('Location: http://dp/housesCatalog.php');
// echo $id;
?> 