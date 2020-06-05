<?php
          require('php_misc/misc/config.php');
          $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
          $sql = "SELECT * FROM orders_accepted";
          $st = $conn->prepare( $sql );
          $st->execute();
         echo "<table class="."simple-little-table".">";
          echo"<tr>
          <th width="."10"."></><th width="."70".">id Заказа</th><th width="."80".">№ Домика</th><th width="."140".">Дата оформления</th><th width="."80".">Сезон</th>
          <th width="."80".">Цена</th><th>Телефон</th><th width="."100"." style="."text-align:center;".">ФИО</th><th width="."150"." style="."text-align:center;".">Описание</th>
          </tr>";
          while ($row = $st->fetch()){
            $table1 = $row['id_orders'];
            $table2 = $row['number_house'];
            $table3 = $row['house_id'];
            $table4 = $row['date_rent'];
            $table5 = $row['season'];
            $table6 = $row['price'];
            $table7 = $row['phone'];
            $table8 = $row['fnp'];
            $table9 = $row['additionally'];
        echo "<tr>";
          echo "<td><input type="."radio"." name="."choice_radio"." value="."$table7"."</td>";
          echo "<td>";
          echo "<div style="."text-align:center;".">$table1</div>";
          echo "</td>";
          echo "<td>";
          echo "<div style="."text-align:center;".">$table2</div>";
          echo "</td>";
          echo "<td>";
          echo "<div style="."text-align:center;".">$table4</div>";
          echo "</td>";
          echo "<td>";
          echo "<div>Сезон №$table5</div>";
          echo "</td>";  
          echo "<td>";
          echo "<div>$table6 тг</div>";
          echo "</td>";
          echo "<td>";
          echo "<div style="."text-align:center;".">$table7</div>";
          echo "</td>";
          echo "<td>";
          echo "<div style="."text-align:center;".">$table8</div>";
          echo "</td>";
          echo "<td>";
          echo "<div>$table9</div>";
          echo "</td>";
        echo "</tr>";
         }
        
    echo "</table>";
          ?> 