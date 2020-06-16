<?php
if (isset($_POST['num_hs'])) {$number_house=$_POST['num_hs'];}
if (isset($_POST['fnp'])) {$fnp=$_POST['fnp'];}
header('Location: http://dp/pages/basket.php?num_hs='.$number_house.'&fnp='.$fnp.'');
?>