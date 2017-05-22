<?php
if(isset($_GET['id']))
{
$house=House::getById($_GET['id']);
}
?>
