<?php
//Подключение БД
require('../../../modules/event_handler/misc/config.php');

//Объявляем переменные

  if (isset($_POST['house_choice'])) {$house_id=$_POST['house_choice'] ;}
  if(isset($_POST['season_choice'])) {
    $date_rent=date("d.m.y");
    $season_id=$_POST['season_choice'];
  }

  if(isset($_POST['fnp'])) {$fnp=$_POST['fnp'];}
  if (isset($_POST['additionally'])) {$additionally=$_POST['additionally'];}
 // echo $house_id;
// utf8
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SET NAMES utf8";
    $st = $conn->prepare( $sql );
    $st->execute();
//достаем цену из таблицы houses
    $sql = "SELECT number_house,price FROM houses WHERE house_id= :house_id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":house_id", $house_id, PDO::PARAM_INT );
    $st->execute();
    $row=$st->fetch(PDO::FETCH_ASSOC);
    $price=$row['price'];
    $number_house=$row['number_house'];
// достаем цену из таблицы season
    $sql = "SELECT percent FROM season WHERE season_id= :season_id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":season_id", $season_id, PDO::PARAM_INT );
    $st->execute();
    $row=$st->fetch(PDO::FETCH_ASSOC);
     $percent=$row['percent'];
     $price=((($price*($percent)*10)/100)*10);
  $arr = array(); // создаем пустой массив чтобы записать туда все номера из БД
//Выполняем запросы
//SET NAMES utf8
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SET NAMES utf8";
    $st = $conn->prepare( $sql );
    $st->execute();
//Добавление в заказы
      if(isset($_POST["rent_form-btn"])){

          if(!empty($_POST['phone']))
          {
              $phone=$_POST['phone'];
              $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
              $sql="SELECT * FROM orders WHERE phone= :phone";
              $st = $conn->prepare( $sql );
              $st->bindValue( ":phone", $phone, PDO::PARAM_INT );
              $st->execute();
              if($st)
              {
                  while($row=$st->fetch(PDO::FETCH_ASSOC))
                  {
                      $dbphone=$row['phone'];
                  }
                  if($phone != $dbphone )
                  {
          $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
          $sql2 = "INSERT INTO `ORDERS`(number_house,house_id,date_rent,season,price,phone,fnp,additionally) 
           VALUES ('$number_house','$house_id','$date_rent','$season_id','$price','$phone','$fnp','$additionally')";
               $st2 = $conn->prepare( $sql2 );
               $st2->execute();
                $message = "Ваш заказ заявка успешно отправлена!";              
              } else{        
$message = "Этот номер телефона уже используется, попробуйте другой!";
              }
          } 
      } else {
              $message = "Заполните ВСЕ поля!";
          }
      }
header('Location: http://dp/pages/basket.php');
   // echo "'$house_id',<br>'$house_id',<br>'$date_rent',<br>'$season_id',<br>'$price',<br>'$phone',<br>'$fnp',<br>'$additionally'";   
?>