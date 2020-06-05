<?php
// require('../../event_handler/misc/config.php');
if(isset($_GET['id'])){$house_id=$_GET['id'];}
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT season FROM orders WHERE  house_id= :house_id ORDER BY season ASC";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":house_id", $house_id, PDO::PARAM_INT );
    $st->execute();
while ( $row = $st->fetch() ) {
      $list[] = $row;
    
    foreach ($list as $item) {

    $ocupate[] = $item['season'];

    }
}
