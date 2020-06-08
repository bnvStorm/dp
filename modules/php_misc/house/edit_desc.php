<?php
//Подключение БД
// require('../misc/config.php');
// require('../../modules/event_handler/misc/config.php');
define( "DB_USERNAME", "root" ); 
define( "DB_PASSWORD", "" ); 
define( "DB_DSN", "mysql:host=localhost; dbname=dproject" ); 
date_default_timezone_set( "Asia/Almaty" );

//Объявляем переменные
if (isset($_GET['id'])) {$house_id=$_GET['id'] ;}
if (isset($_POST['edit_description'])) {$description=$_POST['edit_description'] ;}
if (isset($_POST['category_st'])) {$category=$_POST['category_st'] ;}
if (isset($_POST['number_house_edit'])) {$number_house=$_POST['number_house_edit'] ;}
if (isset($_POST['capacity_edit'])) {$capacity=$_POST['capacity_edit'] ;}
if (isset($_POST['house__price'])) {$price=$_POST['house__price'] ;}
if (isset($_POST['season_1'])) {$season_1=$_POST['season_1'] ;}
if (isset($_POST['season_2'])) {$season_2=$_POST['season_2'] ;}
if (isset($_POST['season_3'])) {$season_3=$_POST['season_3'] ;}
if (isset($_POST['season_4'])) {$season_4=$_POST['season_4'] ;}
if (isset($_POST['season_5'])) {$season_5=$_POST['season_5'] ;}
if (isset($_POST['season_6'])) {$season_6=$_POST['season_6'] ;}
if (isset($_POST['season_7'])) {$season_7=$_POST['season_7'] ;}
if (isset($_POST['season_8'])) {$season_8=$_POST['season_8'] ;}
if (isset($_POST['season_9'])) {$season_9=$_POST['season_9'] ;}


// Путь загрузки
$pathtitle = '/OpenServer/domains/dp/style/images/houses/title/';
$pathfont = '/OpenServer/domains/dp/style/images/houses/';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Загрузка файла
	if (!@copy($_FILES['picture']['tmp_name'], $pathtitle . $_FILES['picture']['name']));
    if (!@copy($_FILES['image_1']['tmp_name'], $pathfont . $_FILES['image_1']['name']));
    if (!@copy($_FILES['image_2']['tmp_name'], $pathfont . $_FILES['image_2']['name']));
    if (!@copy($_FILES['image_3']['tmp_name'], $pathfont . $_FILES['image_3']['name']));
    if (!@copy($_FILES['image_4']['tmp_name'], $pathfont . $_FILES['image_4']['name']));
}

$image_1=$_FILES['image_1']['name'];
$image_2=$_FILES['image_2']['name'];
$image_3=$_FILES['image_3']['name'];
$image_4=$_FILES['image_4']['name'];
$img_title=$_FILES['picture']['name'];

$img_source_title="../style/images/houses/$img_title";
$img_source1="../style/images/houses/$image_1";
$img_source2="../style/images/houses/$image_2";
$img_source3="../style/images/houses/$image_3";
$img_source4="../style/images/houses/$image_4";

$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
$sql ="UPDATE houses SET description= :description,number_house=:number_house,capacity=:capacity,category=:category,price=:price,img_source= :img_source_title  WHERE house_id= :house_id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":description", $description, PDO::PARAM_STR );
    $st->bindValue( ":number_house", $number_house, PDO::PARAM_STR );
    $st->bindValue( ":category", $category, PDO::PARAM_STR );
    $st->bindValue( ":capacity", $capacity, PDO::PARAM_STR );
    $st->bindValue( ":house_id", $_GET['id'], PDO::PARAM_STR );
    $st->bindValue( ":price", $price, PDO::PARAM_STR );
    $st->bindValue( ":img_source_title", $img_source_title, PDO::PARAM_STR );
    $st->execute();

    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );

    $sql ="UPDATE season SET percent= :percent WHERE season_id= 1";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":percent", $season_1, PDO::PARAM_INT );
        $st->execute();

    $sql ="UPDATE season SET percent= :percent WHERE season_id= 2";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":percent", $season_2, PDO::PARAM_INT );
        $st->execute();

    $sql ="UPDATE season SET percent= :percent WHERE season_id= 3";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":percent", $season_3, PDO::PARAM_INT );
        $st->execute();

    $sql ="UPDATE season SET percent= :percent WHERE season_id= 4";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":percent", $season_4, PDO::PARAM_INT );
        $st->execute();

    $sql ="UPDATE season SET percent= :percent WHERE season_id= 5";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":percent", $season_5, PDO::PARAM_INT );
        $st->execute();
    $sql ="UPDATE season SET percent= :percent WHERE season_id= 6";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":percent", $season_6, PDO::PARAM_INT );
        $st->execute();
    $sql ="UPDATE season SET percent= :percent WHERE season_id= 7";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":percent", $season_7, PDO::PARAM_INT );
        $st->execute();
    $sql ="UPDATE season SET percent= :percent WHERE season_id= 8";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":percent", $season_8, PDO::PARAM_INT );
        $st->execute();
    $sql ="UPDATE season SET percent= :percent WHERE season_id= 9";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":percent", $season_9, PDO::PARAM_INT );
        $st->execute();

$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
$sql ="UPDATE images SET house_id= :house_id, source1= :source1,source2= :source2,source3= :source3,source4= :source4 WHERE house_id= :house_id ";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":house_id", $house_id, PDO::PARAM_INT );
    $st->bindValue( ":source1", $img_source1, PDO::PARAM_STR );
    $st->bindValue( ":source2", $img_source2, PDO::PARAM_STR );
    $st->bindValue( ":source3", $img_source3, PDO::PARAM_STR );
    $st->bindValue( ":source4", $img_source4, PDO::PARAM_STR );
    $st->execute();
$sql ="INSERT INTO `images`(house_id,source1,source2,source3,source4) VALUES ('$house_id','$img_source1','$img_source2','$img_source3','$img_source4')";    
    $st = $conn->prepare( $sql );
    $st->execute();

header('Location: http://dp/pages/house_edit.php?id='.$_GET['id'].'');

?> 