<?php
session_start();
if (isset($_SESSION["session_username"])) {
    header("Location: /admin.php");
    die;}
?>
<?php
require('php_misc/login/login_action.php');
include('sections/header.php');
include('sections/sidebar.php');
?>
<!--start  main content-->
  <div id="content_body">
      <div class="container mlogin">
          <div id="login">
              <h1>ВХОД</h1>
              <form name="loginform" id="loginform" action="" method="POST">
                  <p>
                      <label for="user_login">Никнейм<br />
                          <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
                  </p>
                  <p>
                      <label for="user_pass">Пароль<br />
                          <input type="password" name="password" id="password" class="input" value="" size="20" /></label>
                  </p>
                  <p class="submit">
                      <input type="submit" name="login" class="button" value="Вход" />
                  </p>
                  <p class="regtext">У вас нет аккаунта? <a href="admin.php" >Зарегистрироваться!</a>!</p>
              </form>
          </div>
      </div>
      <?php if (!empty($message)) {echo "<p class=\"error\">" . "ВНИМАНИЕ: ". $message . "</p>";} ?>
  </div>
  <!--end  main content-->
  <hr class="clear" />
<?include('sections/footer.php');?>