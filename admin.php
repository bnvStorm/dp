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
  <div class="admin_content" id="content_body">
    <div class="left_admin">
        <? include('sections/sidebar_admin.php');?>
   </div>
<div class="right_admin">


<p>
	Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Снова единственное коварных текст грамматики сбить, вдали щеке? Оксмокс, своего, вскоре? Продолжил океана своих всеми путь она, подпоясал щеке ручеек?
</p><p>
	Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Снова единственное коварных текст грамматики сбить, вдали щеке? Оксмокс, своего, вскоре? Продолжил океана своих всеми путь она, подпоясал щеке ручеек?
</p><p>
	Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Снова единственное коварных текст грамматики сбить, вдали щеке? Оксмокс, своего, вскоре? Продолжил океана своих всеми путь она, подпоясал щеке ручеек?
</p><p>
	Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Снова единственное коварных текст грамматики сбить, вдали щеке? Оксмокс, своего, вскоре? Продолжил океана своих всеми путь она, подпоясал щеке ручеек?
</p><p>
	Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Снова единственное коварных текст грамматики сбить, вдали щеке? Оксмокс, своего, вскоре? Продолжил океана своих всеми путь она, подпоясал щеке ручеек?
</p>




<!-- end right_admin -->
</div>
<!--end  main content-->
 </div>
  <hr class="clear" />
<?include('sections/footer.php');?>