<!--end info box-->
  </div>
  <!--start  main content-->
    <div id="content_body">
<div class="right_house">
    <div><h1>Домик №1</h1></div>
<!--    <div class="house_pic"><img src="images/1.jpg" width="300" height="350" alt="lol"/></div>-->
        <?php
        $db=mysql_connect("localhost","root","");
        mysql_select_db("surf",$db);
        $strSQL = "SELECT * FROM houses WHERE N_HOUSE=1";     // запрос
        $rs = mysql_query($strSQL, $db);
        $row = mysql_fetch_array($rs);
        $table = $row['PRICE'];
        $table5 = $row['VMEST'];
        ?>
    <h1>Цена:</h1><h4><? echo $table;?> тенге/сутки</h4>
    <br>
    <h1>Вместимость:</h1><h4><? echo $table5;?> чел.</h4>
    <br>
</div>
        <div class="left_house"></div>
        <div>Описание:
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Aliquid exercitationem inventore necessitatibus odit voluptatibus.Alias doloribus ducimus est libero magni nam odit optio placeat possimus, quas rem, repudiandae sit. Repudiandae!</span>
           <span>Assumenda delectus dignissimos dolore dolorem doloremque dolorum ducimus eos eveniet facilis, ipsa ipsam laudantium molestiae nobis nulla officiis possimus quam quasi quia rem reprehenderit sint ullam voluptates! Aliquam, deleniti, in.</span>
           <span>Architecto dolores eveniet id libero omnis quo soluta! A assumenda autem iure laborum, magni perspiciatis quae ratione, rerum sequi suscipit ut veritatis voluptatibus!
               Ab culpa iure laborum nostrum quam! Vel.</span></p></div>
    </div>
  <!--end  main content-->
  <hr class="clear" />
</div>
<!--end wrapper-->