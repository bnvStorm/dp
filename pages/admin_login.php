<?php
session_start();
require('../main_connections.php');
  // require('../modules/event_handler/misc/config.php');
if (isset($_SESSION["session_username"])) {
    header('Location: http://dp/pages/admin.php',true, 301);
    die;}
require('../modules/event_handler/login/login_action.php');
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
              </form>
          </div>
      </div>
      <?php if (!empty($message)) {echo "<p class=\"error\">" . "ВНИМАНИЕ: ". $message . "</p>";} ?>
  </div>
  <!--end  main content-->
  <hr class="clear" />
<?include('../modules/footer.php');?>