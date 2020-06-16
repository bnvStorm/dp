<?php
include('modules/header.php');
	require('modules/event_handler/misc/config.php');
	
	include('pages/sections/sidebar.php');
	require('modules/event_handler/misc/config.php');
	require('modules/php_misc/house/class_house.php');
	require('modules/php_misc/rent/class_season.php');
	require('modules/php_misc/house/call_house.php');
	require('modules/php_misc/house/img_call.php');
	include('modules/php_misc/rent/empl.php');
?>