<?php
if (isset($_GET['fio'])) {$a=$_GET['fio'];}
$host = 'localhost';  // сервер
$base = 'dProject';  // имя базы данных
$user = 'root';  // пользователь
$pass = '';  // пароль 
// $a='2';
//3306
$mysql = @new mysqli($host, $user, $pass, $base);
if(mysqli_connect_errno()){ die(mysqli_connect_error()); }

$sql = "SELECT * FROM `houses` WHERE `number`=$a";

$result = $mysql->query($sql); if (!$result) die($mysql->error);

$row = $result->fetch_assoc();
    $category = $row['category'];
    $price = $row['category'];
    $capacity = $row['capacity'];
    $number = $row['number'];
// header( 'Location: http://google.ru/search?q=redirect' );

?>