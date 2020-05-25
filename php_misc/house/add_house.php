<?php
//Подключение БД
require('../misc/config.php');
//Объявляем переменные

if (isset($_POST['numb_house'])) {$numb_house=$_POST['numb_house'] ;}
if (isset($_POST['house_capacity'])) {$house_capacity=$_POST['house_capacity'] ;}
if (isset($_POST['house_category'])) {$house_category=$_POST['house_category'] ;}
if (isset($_POST['house_additionally'])) {$description=$_POST['house_additionally'] ;}
if (isset($_POST['house_price'])) {$house_price=$_POST['house_price'] ;}
// Путь загрузки
$path = '/OpenServer/domains/dProject/images/houses/title/';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Загрузка файла
	if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']));
}
$img_name=$_FILES['picture']['name'];
$img_source="images/houses/title/$img_name";


// Обработка запроса
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql ="INSERT INTO `houses`(img_source,number_house,capacity,category,description,price) 
           VALUES ('$img_source','$numb_house','$house_capacity','$house_category','$description','$house_price')";
    $st = $conn->prepare( $sql );
    $st->execute();


header('Location: http://dp/housesCatalog.php');
// echo $img_source;
?> 