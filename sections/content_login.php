
    <!--end info box-->
  </div>
  <!--start  main content-->
  <div id="content_body">
<!--      --><?php
//      session_start();
//      ?>

      <?php require_once("includes/connection.php"); ?>
<!--      --><?php //include("includes/header.php"); ?>

      <?php

      if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
          header("Location: intropage.php");
      }

      if(isset($_POST["login"])){

          if(!empty($_POST['username']) && !empty($_POST['password'])) {
              $username=$_POST['username'];
              $password=$_POST['password'];

              $query =mysql_query("SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");

              $numrows=mysql_num_rows($query);
              if($numrows!=0)

              {
                  while($row=mysql_fetch_assoc($query))
                  {
                      $dbusername=$row['username'];
                      $dbpassword=$row['password'];
                  }

                  if($username == $dbusername && $password == $dbpassword)

                  {


                      $_SESSION['session_username']=$username;

                      /* Redirect browser */
//                      header('Location: http://neptun/basket.php');
                  }
              } else {

                  $message =  "Invalid username or password!";
              }

          } else {
              $message = "All fields are required!";
          }
      }
      ?>




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
                  <p class="regtext">У вас нет аккаунта? <a href="register.php" >Зарегистрироваться!</a>!</p>
              </form>

          </div>

      </div>



      <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
  </div>
  <!--end  main content-->
  <hr class="clear" />
</div>
<!--end wrapper-->