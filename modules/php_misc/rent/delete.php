<?php
//Подключение БД
// require('../misc/config.php');
require('../../../modules/event_handler/misc/config.php');

if (isset($_POST['choice_radio'])) {$phone=$_POST['choice_radio'];}
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );

    $sql = "DELETE FROM `orders` WHERE phone='$phone'";
    $st = $conn->prepare( $sql );
    $st->execute();
header('Location: http://dp/pages/basket.php');
?> 