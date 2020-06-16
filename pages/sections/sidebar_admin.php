      <div id="side_menu_containe-admin">  
  <ul id="side_menu">
        <li class="menu__list"><a href="#">Заказы</a>
          <ul class="menu__drop">
            <li><a href="basket.php" style="
    color: #fff;">Не обработанные</a></li>
            <li><a href="basket_accept.php" style="
    color: #fff;">Обработанные</a></li>
          </ul>
        </li>
    
    <li class="menu__list"><a href="stat.php">Статистика</a>         
  <!--   <ul class="menu__drop">
            <li><a href="stat.php" style="
    color: #fff;">Один</a></li>
            <li><a href="stat.php" style="
    color: #fff;">Дыва</a></li>
    <li><a href="stat.php" style="
    color: #fff;">Тари</a></li>
          </ul> --></li>

    </ul>
    <!--start signup box-->
    <div class="side_menu_box">
<?php
// Проверяем, пусты ли переменные логина и id пользователя
if (empty($_SESSION['session_username']))
{
    // Если пусты, то мы не выводим ссылку
  echo "Вы вошли на сайт, как гость<br><a href='admin_login.php'><h3>Вход/Регистрация</h3></a>";
}
else
{

    // Если не пусты, то мы выводим ссылку
    echo "<div class="."login_text".">Вы вошли на сайт, как </div><div class="."session_name-stile"."> ".$_SESSION['session_username']."</div> <div class="."logout_btn"."><a href='../modules/event_handler/logout.php'>Выход</a></div>";
}
?>
    
    </div>
    <!--end signup box-->
    <!--start info box-->
    <!--end info box-->
  </div>