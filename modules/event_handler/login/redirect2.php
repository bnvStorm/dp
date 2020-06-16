<?php 
// session_start();
if(isset($_SESSION["session_username"]))
{
header('Location: http://dp/pages/admin.php');
}else{
	header('Location: http://dp/pages/admin_login.php');
}
?>