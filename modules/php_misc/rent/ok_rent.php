<?php
//Подключение БД
require('../../../modules/event_handler/misc/config.php');


if (isset($_POST['choice_radio'])) {$phone=$_POST['choice_radio'];
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$sql = "SELECT * FROM orders WHERE phone='$phone'";
	$st = $conn->prepare( $sql );
    $st->execute();
	$row=$st->fetch(PDO::FETCH_ASSOC);
    		$table1 = $row['id_orders'];
            $table2 = $row['number_house'];
            $table3 = $row['house_id'];
            $table4 = $row['date_rent'];
            $table5 = $row['season'];
            $table6 = $row['price'];
            $table7 = $row['phone'];
            $table8 = $row['fnp'];
            $table9 = $row['additionally'];
    $sql = "INSERT INTO `orders_accepted`(`id_orders`,`number_house`, `house_id`, `date_rent`, `season`, `price`, `phone`, `fnp`, `additionally`) 
           VALUES ('$table1','$table2','$table3','$table4','$table5','$table6','$table7','$table8','$table9')";
    $st = $conn->prepare( $sql );
    $st->execute();
 $sql = "DELETE FROM `orders` WHERE phone='$phone'";
    $st = $conn->prepare( $sql );
    $st->execute();  
header('Location: http://dp/pages/basket.php');
}else{
	header('Location: http://dp/pages/basket.php');
	$message = "Заполните ВСЕ поля!";
}
?>