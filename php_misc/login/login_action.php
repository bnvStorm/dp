  <?php 
require('php_misc/misc/config.php');
      if(isset($_POST["login"])){
          if(!empty($_POST['username']) && !empty($_POST['password'])) 
          {
              $username=$_POST['username'];
              $password=$_POST['password'];
              $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
              $sql="SELECT * FROM personal WHERE username= :username AND password= :password";
              $st = $conn->prepare( $sql );
              $st->bindValue( ":username", $username, PDO::PARAM_STR );
              $st->bindValue( ":password", $password, PDO::PARAM_STR );
              $st->execute();
              if($st)
              {
                  while($row=$st->fetch(PDO::FETCH_ASSOC))
                  {
                      $dbusername=$row['username'];
                      $dbpassword=$row['password'];
                  }
                  if($username == $dbusername && $password == $dbpassword)
                  {
                      $_SESSION['session_username']=$username;
                      $message =  "<a class="."button"." href="."admin.php"." >ВОЙТИ</a>";  
                      // header('Location: http://dproject/php_misc/login/redirect2.php');
                  } else {
                  $message =  "Неверное имя или пароль!";
              }
            }
          } else {
              $message = "Заполните ВСЕ поля!";
          }
      }
?>
     