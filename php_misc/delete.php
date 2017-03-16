<?php
if (isset($_POST['rad2'])) {$n_house=$_POST['rad2'];}
$db=mysql_connect("localhost","root","mysql");
mysql_select_db("surf",$db);
mysql_query("DELETE FROM `orders` WHERE N_HOUSE=$n_house");
header('Location: http://localhost/html/urn.phtml');
?>