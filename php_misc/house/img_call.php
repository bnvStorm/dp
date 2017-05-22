<?php
//Подключение БД
require('php_misc/misc/config.php');
if (isset($_GET['id'])) {$house_id=$_GET['id'] ;}
// Обработка запроса
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
$sql ="SELECT * FROM images WHERE house_id=:house_id";     
$st = $conn->prepare( $sql );
$st->bindValue( ":house_id", $house_id, PDO::PARAM_INT );
$st->execute();
while ($row = $st->fetch()){
            $table1 = $row['house_id'];
            $table2 = $row['source1'];
            $table3 = $row['source2'];
            $table4 = $row['source3'];
            $table5 = $row['source4'];
}
?>