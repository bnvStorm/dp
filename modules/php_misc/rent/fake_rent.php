<?php
//Подключение БД
require('../../../modules/event_handler/misc/config.php');
//Объявляем переменные

$house_id=$_GET['id'];
$date_rent=$_GET['season'];
$season_id=$_GET['season'];
$fnp='FAKE';
$additionally='FAKE_ADDITIONAL';
$phone=rand(100,1000);
// utf8
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SET NAMES utf8";
    $st = $conn->prepare( $sql );
    $st->execute();
//достаем цену из таблицы houses
    $sql = "SELECT price FROM houses WHERE house_id= :house_id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":house_id", $house_id, PDO::PARAM_INT );
    $st->execute();
    $row=$st->fetch(PDO::FETCH_ASSOC);
    $price=$row['price'];
// достаем цену из таблицы season
    $sql = "SELECT percent FROM season WHERE season_id= :season_id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":season_id", $season_id, PDO::PARAM_INT );
    $st->execute();
    $row=$st->fetch(PDO::FETCH_ASSOC);
     $percent=$row['percent'];
     $price=($price*$percent)*10;

//Выполняем запросы
//SET NAMES utf8
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SET NAMES utf8";
    $st = $conn->prepare( $sql );
    $st->execute();
//Добавление в заказы
              
              $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
              $sql="SELECT * FROM orders WHERE phone= :phone";
              $st = $conn->prepare( $sql );
              $st->bindValue( ":phone", $phone, PDO::PARAM_INT );
              $st->execute();
          $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
          $sql2 = "INSERT INTO `ORDERS`(number_house,house_id,date_rent,season,price,phone,fnp,additionally) 
           VALUES ('$house_id','$house_id','$date_rent','$season_id','$price','$phone','$fnp','$additionally')";
               $st2 = $conn->prepare( $sql2 );
               $st2->execute();
               
header('Location: http://dp/pages/house_edit.php?id='.$_GET['id'].'');


      ?>