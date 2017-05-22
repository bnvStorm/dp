<?php 
// session_start();
if(isset($_SESSION["session_username"]))
{
header('Location: http://dproject/admin.php');
}else{
	header('Location: http://dproject/admin_login.php');
}
?>