<?
session_start();
if(empty($_SESSION["session_username"])){
header("Location: /index.php");
    die;
}
?>
<?php
include('sections/header.php');
include('sections/sidebar.php');
?>
<!--start  main content-->
  <div id="content_body">
    <div class="left_admin">
        <? include('sections/sidebar_admin.php');?>
   </div>
<div class="right_admin">







<!-- end right_admin -->
</div>
<!--end  main content-->
 </div>
  <hr class="clear" />
<?include('sections/footer.php');?>