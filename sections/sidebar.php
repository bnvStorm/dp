  <div id="side_menu_container">  
  <ul id="side_menu">
  
      <li><a href="index.php">Главная страница</a></li>
	  <li><a href="index.php">Новости</a></li>
      <li><a href="rent.php">Бронирование</a></li>
	  <li><a href="contact.php">Контактная информация</a></li>
      <li><a href="basket.php">Корзина</a></li>
    </ul>
    <!--start signup box-->
    <div class="side_menu_box" style="height:40px;">
<?php
// Проверяем, пусты ли переменные логина и id пользователя
if (empty($_SESSION['session_username']))
{
    // Если пусты, то мы не выводим ссылку
  echo "<div class=\"reg-btn\"><a href='login.php'>Вход/Регистрация</a></div>";
}
else
{

    // Если не пусты, то мы выводим ссылку
    echo "<div class=\"sidebar_title-logout\">Вы вошли на сайт, как</div> <div class=\"userlogin\">".$_SESSION['session_username']."</div> <div class=\"logout-btn\"><a href='logout.php'>Выход</a></div>  ";
}
?>
		
    </div>
    <!--end signup box-->

    <!--start info box-->
    <div id="info"> Горячая линия <br />
      <span class="size20">8 777 123 45 67</span> info@website.com </div>
    <!--end info <box-->

      </box-->
  </div>