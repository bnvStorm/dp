<?php
//Подключение БД
define( "DB_USERNAME", "root" ); 
define( "DB_PASSWORD", "" ); 
define( "DB_DSN", "mysql:host=localhost; dbname=dproject" ); 
date_default_timezone_set( "Asia/Almaty" );
//Объявляем переменные

if (isset($_POST['numb_house'])) {$numb_house=$_POST['numb_house'] ;}
if (isset($_POST['house_capacity'])) {$house_capacity=$_POST['house_capacity'] ;}
if (isset($_POST['house_category'])) {$house_category=$_POST['house_category'] ;}
if (isset($_POST['house_additionally'])) {$description=$_POST['house_additionally'] ;}
if (isset($_POST['house_price'])) {$house_price=$_POST['house_price'] ;}
// Путь загрузки
$path = '/OpenServer/domains/dp/style/images/houses/title/';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Загрузка файла
	if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']));
}
$img_title=$_FILES['picture']['name'];
$img_source_title="images/houses/title/$img_title";


// Обработка запроса
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql ="INSERT INTO `houses`(img_source,number_house,capacity,category,description,price) 
           VALUES ('$img_source_title','$numb_house','$house_capacity','$house_category','$description','$house_price')";
    $st = $conn->prepare( $sql );
    $st->execute();


header('Location: http://dp/pages/housesCatalog.php');
// echo $img_source;
?> 