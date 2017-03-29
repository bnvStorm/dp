  
    <!--end info box-->
  </div>
  <!--start  main content-->
  <div id="content_basket">
      <div class="order_wrapper">
        <div class="h1__title">Ваш заказ</div>
      <table class="simple-little-table" >
          <?php
          $a=$_SESSION['session_username'];
          $db=mysql_connect("localhost","root","");
          mysql_select_db("surf",$db);
          $result=mysql_query("SELECT * FROM `usertbl` WHERE `username`='$a'");
          $myrow=mysql_fetch_array($result);
          $id2=$myrow['ID'];
          $strSQL = "SELECT * FROM orders WHERE ID=$id2";
          $rs = mysql_query($strSQL, $db);
          $row = mysql_fetch_array($rs);
          $table1 = $row['N_HOUSE'];
          $table2 = $row['DN'];
          $table3 = $row['DK'];
          $table4 = $row['ORDERS_ID'];
          $table5 = $row['PRICE'];

          ?>
          <tr>
              <td> </td> <td>Номер домика</td><td>Дата начала аренды</td><td>Дата окончания аренды</td><td>Номер заказа</td><td>Цена</td>
          </tr>
          <form class="order_form" action="delete.php" method="post">
              <tr>
                  <td><input type="radio" name="rad2" value="<?echo $table1;?>" /></td>
                  <td><?echo $table1;?></td>
                  <td><?echo $table2;?></td>
                  <td><?echo $table3;?></td>
                  <td><?echo $table4;?></td>
                  <td><?echo $table5;?></td>
              </tr>

      </table>

      <div class="order_form-btn"><button name="submit" id="submit" alt="Удалить заказ" value="0" class="booking-button" />удалить заказ</button></div>

      </form>
      </div>
  </div>
  <!--end  main content-->
</div>
<!--end wrapper-->