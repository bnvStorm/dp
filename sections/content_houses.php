<!-- end info box-->
  </div>
  <!--start  main content-->
    <div id="content_body">

        <?php
        $db=mysql_connect("localhost","root","");
        mysql_select_db("surf",$db);
        $strSQL = "SELECT * FROM houses WHERE N_HOUSE=1";     // запрос
        $rs = mysql_query($strSQL, $db);
        $row = mysql_fetch_array($rs);
        $table = $row['PRICE'];
        $table1 = $row['N_HOUSE'];
        $table5 = $row['VMEST'];
        ?>
    <div class="house_nhouse">Домик №<? echo $table1;?></div>
<div class="right_house">

    <div>
    <img src="images/1.jpg" alt="lol" class="house_pic"/>
    </div>
</div>
        <div class="left_house">
            <div class="house_gltext">Цена:</div><h4><? echo $table;?> тенге/сутки</h4>
    <div class="house_gltext">Мест:</div><h4><? echo $table5;?> чел.</h4>
        <div class="house_gltext">Описание:</div>
        <div class="house_text">
       <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa aperiam autem itaque dolorum quaerat soluta nulla magni impedit delectus? Sed earum inventore fugit consequatur, aliquid consectetur adipisci amet eius corrupti.</div>
       <div>Quaerat distinctio veritatis fugiat ratione corporis culpa quae nisi consequatur. Officia totam fuga adipisci quisquam reiciendis rem. Corrupti ipsam animi ea culpa dolor nobis soluta doloremque, ullam suscipit omnis in?</div>
       <div>Dolor aliquam ab fuga neque suscipit saepe minima, adipisci vitae. Necessitatibus ipsam, dolorum quo quae, atque modi rerum veritatis labore, sit facilis quos ullam laborum! Sit aliquid officia vitae voluptatum!</div>
       <div>Reiciendis et nesciunt esse pariatur impedit, maxime qui neque corporis, repellat, alias consequatur recusandae labore, assumenda iure eveniet fuga. Ut sunt doloremque id magni reiciendis minima itaque quia perferendis delectus.</div>
       <div>Repellendus laudantium asperiores, voluptatem, maxime totam quae! Possimus sed recusandae harum maiores quisquam consequuntur libero mollitia, neque hic tenetur ipsam enim, rem quae debitis fugiat est deserunt aliquam sint! Nesciunt.</div>
       <div>Doloribus ullam eum adipisci molestiae, reiciendis harum eligendi nam earum placeat, blanditiis rem. Provident reiciendis nihil ipsa animi sed soluta, molestias quaerat, quasi inventore suscipit vitae deserunt, nemo nam magni.</div>
       <div>Assumenda molestiae repellat architecto quo nisi delectus magni iure excepturi temporibus. Libero amet quaerat, ut vel, incidunt, molestias illo tempore, quas pariatur provident ad harum perspiciatis quo ipsam. Fugiat, tenetur?</div>
       <div>Corporis placeat, libero. Quos delectus tempora in adipisci accusamus assumenda, eligendi minus quasi vel nesciunt! Quam consectetur, tempore, deleniti placeat, error porro consequuntur illo neque laborum numquam, repellat laboriosam vitae.</div></div>   
    </div>
    </div>
  <!--end  main content-->
  <hr class="clear" />
</div>
<!--end wrapper