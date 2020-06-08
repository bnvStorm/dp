<?php 
session_start();
if(isset($_SESSION["session_username"]))
{
header('Location: http://dp/pages/admin.php?id=1');
}else{
	header('Location: http://dp/pages/admin_login.php?id=1');
}
?>