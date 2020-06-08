<?session_start();?>
<?php
 require('../main_connections.php');
?>
<!-- content_body php_misc/house/edit_desc.php -->
<div id="content_body">
  <form enctype="multipart/form-data" action="" method="POST">
  <div class="art-layout-cell art-content ">
<!-- art-article art-post -->
    <div class="art-article art-post">
  
    <!-- art-postheader-title-main -->
      <div class="art_edit-title">
        редактирование информации о домике
      </div>
<div class="art-article-left">
  <div class="art_edit">
  <label class="art_edit-lbl" for="number_house_edit">Домик №</label>
  <input class="house__edit-edit" name="number_house_edit" id="number_house_edit" style="width: 75px;"  type="text" value="<?=$house->number_house?>"/></div>
<div class="art_edit">
<label class="art_edit-lbl" for="category_st">Категория</label>
  <select name="category_st" id="category_st">   
          <option value="1">
          <?if ($house->category==1){ echo "простой"; }else{ echo "элитный";} ?>
          </option>
          <option value="2">
          <?if ($house->category==1){ echo "элитный"; }else{ echo "простой";} ?>
          </option>
          </select>
</div>
<div class="art_edit">
<label class="art_edit-lbl" for="capacity_edit">Вместимость</label>
<input class="house__edit-edit" type="text" value="<?=$house->capacity?>" style="width: 75px;" name="capacity_edit" id="capacity_edit">
</div>
<div class="art_edit">
<label class="art_edit-lbl" for="house__price"> Цена домика:</label> 
<input class="house__edit-edit" type="text" name="house__price" id="house__price" value="<?=$house->price?>"/>
</div>
<div class="art_edit">
<label class="art_edit-lbl" for="house__price"> Главное Фото:</label> 
 <input type="file" name="picture" id="picture" />
</div>
<div class="art_edit">
<label class="art_edit-lbl" for="house__price"> Фото №1:</label> 
 <input type="file" name="image_1" id="image_1" />
</div>
<div class="art_edit">
<label class="art_edit-lbl" for="house__price"> Фото №2:</label> 
 <input type="file" name="image_2" id="image_2" />
</div>
<div class="art_edit">
<label class="art_edit-lbl" for="house__price"> Фото №3:</label> 
 <input type="file" name="image_3" id="image_3" />
</div>
<div class="art_edit">
<label class="art_edit-lbl" for="house__price"> Фото №4:</label> 
 <input type="file" name="image_4" id="image_4" />
</div>
      <div class="art__edit_season-action">
  <?
$seasons=Season::getList();
foreach ($seasons as $season) {

  $a=false;
  $ocupate[$i]=1;
for ($i=0; $i <= count($ocupate) ; $i++) { 

if ($ocupate[$i]==$season->season_id) {
$a=true;
}
}
if ($a){
?>
<div class="art__edit_season">
          <div class="art__edit_season-left">
            <span class="art__edit_season-title">Сезон <?=$season->season_id?>
            <small class="lite"><?=$season->season_name?></small>
            :
          </div>
          <div class="art__edit_season-right">
          <div class="occupied"><a href="#" style="color:#fff;text-decoration: none;">Занят</a></div>  
            <div class="div_for_payment_link"> <b style="margin:0 10px 0 0;">Процент:</b>
              <span class="cottage_price">
               <input class="cottage_percent-input" type="text" name="season_<?=$season->season_id?>" value="<?=$season->percent?>">
              </span>
          </div>
        </div>
      </div>
      <hr class="clear" />
<?
}else{
  ?>
<div class="art__edit_season">
          <div class="art__edit_season-left">
            <span class="art__edit_season-title">Сезон <?=$season->season_id?>
            <small class="lite"><?=$season->season_name?></small>
            :
          </div>
          <div class="art__edit_season-right">
          <div class="vacant"><a href="../modules/php_misc/rent/fake_rent.php?id=<?=$_GET['id']?>&season=<?=$season->season_id?>&testid=0?>" style="color:#fff;text-decoration: none;">Свободен</a></div>  
            <div class="div_for_payment_link"> <b style="margin:0 10px 0 0;">Процент:</b>
              <span class="cottage_price">
               <input class="cottage_percent-input" name="season_<?=$season->season_id?>" type="text" value="<?=$season->percent?>">
              </span>
          </div>
        </div>
      </div>
      <hr class="clear" />
<?
}
?>
<?
}
?>
    <!--end house_rent-action--> 
</div>
</div>
<div class="art-article-right">
 <div class="art_edit-description">
 <div class="art_edit-description-title">Описание:  </div>
<textarea name="edit_description" id="edit_description" class="edit_description" maxlength="5000"><?=$house->description?></textarea>
</div> 
</div>
      <!-- end art-postheader-title-main -->
      <hr class="clear" />
      <div class="btn-main">
            <div class="btn-left"><button type="submit" name="submit" id="submit" formaction="../modules/php_misc/house/edit_desc.php?id=<?=$_GET['id']?>" alt="редактировать" value="0" class="admin__edit_house-button"/>редактировать</button></div>
            <div class="btn-right"><button  name="submit" id="view" formaction="house.php?id=<?=$_GET['id']?>" alt="Просмотреть" value="0" class="admin__edit_house-button"/>Просмотреть</button></div>
            </div>
      </div>
    </div>
      <!-- end art-article art-post -->
    </div>
<!-- art-postcontent -->
    <div class="art-postcontent">
      <div class="house_description">
<!--         <span class="house_description-text">

          </span> -->
      </div>
<hr class="clear" />
    <!--end art-postcontent -->
</div>
<!--end  art-layout-cell art-content clearfix-->
</div>
  </form>
<!--end  content_body-->
</div>
<hr class="clear" />
<?include('../modules/footer.php');?>