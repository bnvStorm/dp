<?session_start();?>
<?php
  require('../main_connections.php');
?>
<!-- content_body -->
<div id="content_body">
  <div class="art-layout-cell art-content clearfix">
<!-- art-article art-post -->
    <div class="art-article art-post">
    <!-- art-postheader-title-main -->
      <div class="art-postheader-title-main">
        <span class="art-postheader-title">
          Домик №<?=$house->number_house?>,
          <?if ($house->category==1){ echo "<span class="."category_txt-easy".">простой</span>"; }else{ echo "<span class="."category_txt-elite".">элитный</span>";} ?>,
           мест: <?=$house->capacity?>
          </span>
          <!-- end art-postheader-title-main -->
      </div>
      <!-- carousel -->
      <div class="carousel shadow">
        <div class="carousel-button-left">
          <a href="#"></a>
        </div>
        <div class="carousel-button-right">
          <a href="#"></a>
        </div>
        <div class="carousel-wrapper">
          <div class="carousel-items">
            <div class="carousel-block">
                <a  href="style/images/houses/house<?=$house->house_id?>-1.jpg">
                  <img class="aligncenter size-medium wp-image-23706" src="<?=$table2?>" alt="IMG_3573" width="300" height="200">
                </a>
              </div>
            <div class="carousel-block">
                <a  href="style/images/houses/house<?=$house->house_id?>-2.jpg">
                  <img class="aligncenter size-medium wp-image-23706" src="<?=$table3?>" alt="IMG_3573" width="300" height="200">
                </a>
              </div>
            <div class="carousel-block">
              <a  href="style/images/houses/house<?=$house->house_id?>-3.jpg">
                <img class="aligncenter size-medium wp-image-23706" src="<?=$table4?>" alt="IMG_3573" width="300" height="200">
                </a>
            </div>
            
            <div class="carousel-block">
              <a  href="style/images/houses/house<?=$house->house_id?>-4.jpg">
                <img class="aligncenter size-medium wp-image-23706" src="<?=$table5?>" alt="IMG_3573" width="300" height="200">
                </a>
            </div>
          </div>
        </div>
        <!-- end carousel -->
      </div>
      <!-- end art-article art-post -->
    </div>
<!-- art-postcontent -->
    <div class="art-postcontent">

      <div class="house_description">

        <span class="house_description-text">
          <?=$house->description?>
          </span>
      </div>
      <div class="house_rent-action">
        <div class="house_rent-title">
          <span>Занятость домика в сезоны</span>
        </div>
<?
$seasons=Season::getList();
foreach ($seasons as $season) {
  $a=false;
  $ocupate[$i]=1;
for ($i=0; $i <= count($ocupate) ; $i++) { 

if ($ocupate[$i]==$season->season_id){
$a=true;
}
}
if ($a){
?>
<div class="house_info">
          <div class="house_info_left">
            <span class="house_info_left-title">Сезон <?=$season->season_id?>
            <small class="lite"><?=$season->season_name?></small>
            :
          </div>
          <div class="house_info_center">
           <div class="occupied">Занят</div>   
            <div class="div_for_payment_link"> <b>Цена:</b>
              <span class="cottage_price">
                <span><?=$season_price=((($house->price*($season->percent)*10)/100)*10)?>тг</span>
              </span>
          </div>
        </div>
          <div class="house_info_right">
          <div class="house__info-badbtn">Заказать</div>
        </div>
      </div>
<?}else{?>
<div class="house_info">
          <div class="house_info_left">
            <span class="house_info_left-title">Сезон <?=$season->season_id?>
            <small class="lite"><?=$season->season_name?></small>
            :
          </div>
          <div class="house_info_center">
          <div class="vacant">Свободен</div>  
            <div class="div_for_payment_link"> <b>Цена:</b>
              <span class="cottage_price">
                <span><?=$season_price=((($house->price*($season->percent)*10)/100)*10)?>тг</span>
              </span>
          </div>
        </div>
          <div class="house_info_right">
         <div class="house__info-goodbtn"><a href="rent.php?id=<?=$_GET['id']?>&season=<?=$season->season_id?>&testid=1">Заказать</a></div>
        </div>
      </div>
<?}?>
<?}?>
<!--end house_rent-action--> 
</div>
<!--end art-postcontent -->
</div>
<!--end  art-layout-cell art-content clearfix-->
</div>
<!--end  content_body-->
</div>
<!-- </div> -->
<hr class="clear" />
<?include('../modules/footer.php');?>