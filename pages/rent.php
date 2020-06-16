<?session_start();?>
<?php
  require('../main_connections.php');
?>

<!--start  main content-->
  <div class="content_rent" id="content_body">
    <div class="message">
      <p>Для выбора просмотра информации о домиках, посетите <a href="housesCatalog.php">каталог</a> </p>
    </div>
    <div class="rent_wrapper">
      <form  class="rent_form" action="../modules/php_misc/rent/rent_action.php" method="POST">
        <div class="rent_title">
          <div class="h1__title">Бронирование</div>
        </div>
        <div class="rent">
          <div class="left_form">
            <div class="left_form-input_rent">
              <span class="input_rent-title">Выберите сезон</span>
   

                  <select name="season_choice" id="season_choice" >
<?
if ($_GET['testid']==1) {
  $step=0;
  $select='';
  $seasons=Season::getList();
  foreach ($seasons as $season) 
  {
      if (($step+1)==$_GET['season']) { $select='selected'; }
    ?>

    <option  <?=$select?> value="<?=$season->season_id?>" >Сезон <?=$season->season_id?> <?=$season->season_name?></option>; 

    <?
    $select='';
    $step++;
  }
}else{


?>

<option selected value="<?=$season->season_id?>" >Сезон <?=$season->season_id?> <?=$season->season_name?></option>

 <?
}
?>
                  </select>


              <span class="input_rent-title">Введите свои данные</span>
              <div class="input_rent-item">
                <li>
                  <label class="my__label" for="fnp">ФИО:</label>
                  <input name="fnp" type="text" class="side_menu_box_field" id="fnp" size="11"  placeholder="ФИО" />  
                </li>
                <li>
                  <label class="my__label" for="phone">Телефон:</label>
                  <input name="phone" type="text" class="side_menu_box_field"  id="phone" required placeholder="Номер телефона"  size="11" />  
                </li>
               </div>
              </div>
            </div>
            <div class="right_form">
              <div class="right_form-input_rent">
                <span class="input_rent-title">Выберите домик</span>
              </div>
              <div class="right_form-house_choice">
                <select name="house_choice" id="house_choice">
<?
if ($_GET['testid']==0) {
$step=0;
$select='';
$houses=House::getList();
foreach ($houses as $house)
{
  if (($step+1)==$_GET['id']) { $select='selected'; }
?>

<option <?=$select;?> value="<?=$house->house_id?>">Домик №<?=$house->number_house?>: <?=$house->category?>, мест: <?=$house->capacity?></option> 

<?
$select='';
$step++;
}
}else{?>
 <option selected value="<?=$house->house_id?>" >Домик №<?=$house->number_house?>: <?=$house->category?>, мест: <?=$house->capacity?></option>  
<?}?>
                </select>
              <div class="right_form-input_rent">
                <span class="input_rent-title">Дополнительная информация:</span>
              </div>
              <div class="right_form-comment_form">
        <textarea name="additionally" class="comment_form" maxlength="100"></textarea>
              </div>
              </div>
            </div>
          </div>
          <div class="all_price">
             <input value="<?echo $_GET['season_price'];?>" name="price" type="hidden" class="side_menu_box_field"  id="price" />  
          </div>
          <div class="rent_form-btn">
            <input name="rent_form-btn" type="submit" class="booking-button" value="Заказать путевку">  
          </div>
        </form>
        <?php
         if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>
      ";} ?>
    </div>

  </div>
  <!--end  main content-->
  <hr class="clear" />

<?include('../modules/footer.php');?>