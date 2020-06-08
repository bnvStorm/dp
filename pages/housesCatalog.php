<?session_start();?>
<?php
  require('../main_connections.php');
?>
<div id="content_body">
<div class="art-postcontent cottages clearfix"> 
<!-- form__search -->
<div class="form__cottages_search">

    <form class="cottages_search" action="">
      <div class="search__txt-main"><p>Поиск по критериям</p></div>
      <div class="search__field">
      <div class="search__field-category">
      <label>Категория домика: </label> 
      
      <select name="cottage" style="margin: 0 25px 0 10px;">
      
        <option value=""> -- Все категории -- </option>
        <option value="2">Элитный </option>
        <option value="1">Простой</option>
      
      </select>
      </div>
      <div class="search__field-numberhouse">
      <label>Номер домика: </label>
      <input name="house_from" type="text" value=""> 
    </div>
      <div class="search__field-capacity" >

        <label>Вместимость: </label> 
        <select style="margin-left: 10px;" name="capacity">
          
          <option value=""> -- Любая -- </option>
          <option value="2 места">2 места</option>
          <option value="3 места">3 места</option>
          <option value="4 места">4 места</option>
          <option value="5 мест">5 мест</option>
          <option value="6 мест">6 мест</option>
          <option value="7 мест">7 мест</option>
          <option value="8 мест">8 мест</option>
        
        </select>         
      </div>
      </div>
      <div class="search_btn">
        <input class="search-button" type="submit" value="Найти"> 
        </div>
    </form>
    <!-- end form__search -->
</div>
<!-- form__houses -->
<div class="form__houses">
  <!-- <form action="" method=""> -->
  <div class="mainHouse">
    <ul class="main_news">

  <?

$houses=House::getList($_GET['cottage'],$_GET['capacity'],$_GET['house_from']);

foreach ($houses as $house) {
  ?>
  <div class="main_news-item">
<li> 
<div class="cottage_title-main">
<div class="cottage_title-left">Домик №<?=$house->number_house?></div>
<?php if($_SESSION["session_username"]){?>
<div class="cottage_title-right">
<a href="../pages/house_edit.php?id=<?=$house->house_id?>"><img class="edit_pic" src="../style/images/ico/edit.ico" alt="edit"></a>
<a class="zero_btn" href="../modules/php_misc/house/delete_house.php?id=<?=$house->house_id?>">&times;</a>

</div> 
<?}?>
</div>
           
          <div class="news_picture"><img src="../style/<?=$house->img_source?>"></div>                
          <p class="cottage_title"><?if ($house->category==1){ echo "простой"; }else{ echo "элитный";} ?>, мест: <?=$house->capacity?> </p>            
          <div style="position:absolute; bottom:50px; "></div>  
           <a class="more" href="house.php?id=<?=$house->house_id?>">Читать описание</a>
          <div style="clear:both"></div>
        </li>  
        </div>
<?
}
?>     
    </ul>

   </div>
   <!-- </form> -->
</div>
<!-- end art-postcontent cottages clearfix -->
</div>
<!-- end  main content -->
  </div>
  <hr class="clear" />
  <?php
if($_SESSION["session_username"]){
  ?>
<div class="form_house_add">
<form class="" action="../modules/php_misc/house/add_house.php" method="POST" enctype="multipart/form-data">

<div class="form_house_add__left">

<div class="form_house_add__left-category">
<label class="form_house_add-label">Номер домика:</label>
<input name="numb_house" required  type="text" id="numb_house" placeholder="Номер домика"  >
</div>

<div class="form_house_add__left-category">
<label class="form_house_add-label">Категория домика:</label>
  <select name="house_category" id="house_category" style="margin: 0 25px 0 0;">
    <option value="">-- Все категории --</option>
    <option value="1">простой</option>
    <option value="2">элитный</option>
  </select>
</div>
<div class="form_house_add__left-price">
<label class="form_house_add-label">Цена за сезон: </label>
<input name="house_price" required
 type="text" id="house_price" placeholder="Цена домика">
</div>

<div class="form_house_add__left-capacity">
  <label class="form_house_add-label">Вместимость:</label>
<input type="text" required
 name="house_capacity" id="house_capacity" value="">
  </div>

<div class="form_house_add__left-add_img">
<label class="form_house_add-label">Главное фото:</label>
      <input type="file" name="picture">
</div>
</div>
<div class="form_house_add__right">


<div class="form_house_add__right-add_text">
<label class="form_house_add-label">Описание: </label>
  <textarea name="house_additionally" required
 class="comment_form" maxlength="1000"></textarea>
</div>
</div>

<div style="clear: both;"></div>

<div class="form_house_add-bottom">
  <div class="form_house_add__right-input">

<input name="house_add-btn" class="admin__edit-button" type="submit" value="Создать">

</div>
</div>
</form>  
<?                       
}
?>  
    <!-- end form__house -->
</div>
<?
include('../modules/footer.php');
?>