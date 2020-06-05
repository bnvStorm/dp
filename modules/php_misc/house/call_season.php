<?php
if(isset($_GET['season']))
{
$season=Season::getById($_GET['season']);
}
?>