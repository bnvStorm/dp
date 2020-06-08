<?
session_start();
if(empty($_SESSION["session_username"])){
header("Location: /index.php");
    die;
}
require('../main_connections.php');
require('../modules/php_misc/rent/processed_orders.php');

?>
     <!--start  main content-->
  <div id="content_body">
      <!-- left_admin -->
      <div class="left_admin">
        <? include('sections/sidebar_admin.php');?>
      </div>
      <!-- right_admin -->
      <div class="right_admin">


<div class="form__stat" style="background: #9ADEE1;">

<form class="form__stat-form" action="">
<div class="search__txt-main">
<p>Поиск по критериям</p>
</div>
<div class="form__stat_field">
<div class="form__stat_field-left">
<select class="form__stat-slct" name="number_house" id="number_house" >
<option>...</option>
<?
$houses=House::getList();
foreach ($houses as $house){
?>
<option <?=$select;?> value="<?=$house->number_house?>">
Домик №<?=$house->number_house?>: <?=$house->category?>, мест: <?=$house->capacity?>
</option> 
<?
}
?>
</select>
</div>

<div class="form__stat_field-right"> 
 <div class="tabs">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" title="Вкладка 1">Всего</label>
 
    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" title="Вкладка 2">Сезон 1</label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3" title="Вкладка 3">Сезон 2</label>
 
     <input id="tab4" type="radio" name="tabs">
    <label for="tab4" title="Вкладка 4">Сезон 3</label> 
 
    <input id="tab5" type="radio" name="tabs">
    <label for="tab5" title="Вкладка 5">Сезон 4</label> 

      <input id="tab6" type="radio" name="tabs" >
    <label for="tab6" title="Вкладка 6">Сезон 5</label>
 
    <input id="tab7" type="radio" name="tabs">
    <label for="tab7" title="Вкладка 7">Сезон 6</label>
 
     <input id="tab8" type="radio" name="tabs">
    <label for="tab8" title="Вкладка 8">Сезон 7</label> 
 
    <input id="tab9" type="radio" name="tabs">
    <label for="tab9" title="Вкладка 9">Сезон 8</label> 

        <input id="tab10" type="radio" name="tabs">
    <label for="tab10" title="Вкладка 10">Сезон 9</label> 
 
    <section id="content-tab1">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль за все время:</span> 
            <?
        $orders=Order::getSum($_GET['number_house']);
        foreach ($orders as $order) {
        ?>
        <span><?=$order->sum?> тг</span>      
        <?
        }
        ?> 
        </div>

    </section>  
    <section id="content-tab2">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль:</span> 
        <input hidden="true" type="text" name="season" id="season" value="1"> 
            <?
        $orders=Order::getSumS($_GET['number_house'],$_GET['season']);
        foreach ($orders as $order) {
        ?>
       <span><?=$order->sum?> тг</span>
        <?
        }
        ?> 
        </div>
    </section> 
    <section id="content-tab3">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль:</span> 
        <input hidden="true" type="text" name="season2" id="season2" value="2"> 
            <?
        $orders=Order::getSumSeason($_GET['number_house'],$_GET['season2']);
        foreach ($orders as $order) {
        ?>
       <span><?=$order->sum?> тг</span>
        <?
        }
        ?> 
        </div>
    </section> 
    <!--<section id="content-tab4">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль:</span> 
        <input hidden="true" type="text" name="season" id="season" value="3"> 
            <?
        $orders=Order::getSumS($_GET['number_house'],$_GET['season']);
        foreach ($orders as $order) {
        ?>
       <span><?=$order->sum?> тг</span>
        <?
        }
        ?> 
        </div>
    </section>  
    <section id="content-tab5">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль:</span> 
        <input hidden="true" type="text" name="season" id="season" value="4"> 
            <?
        $orders=Order::getSumS($_GET['number_house'],$_GET['season']);
        foreach ($orders as $order) {
        ?>
       <span><?=$order->sum?> тг</span>
        <?
        }
        ?> 
        </div>
    </section>  
    <section id="content-tab6">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль:</span> 
        <input hidden="true" type="text" name="season" id="season" value="5"> 
            <?
        $orders=Order::getSumS($_GET['number_house'],$_GET['season']);
        foreach ($orders as $order) {
        ?>
       <span><?=$order->sum?> тг</span>
        <?
        }
        ?> 
        </div>
    </section> 
    <section id="content-tab7">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль:</span> 
        <input hidden="true" type="text" name="season" id="season" value="6"> 
            <?
        $orders=Order::getSumS($_GET['number_house'],$_GET['season']);
        foreach ($orders as $order) {
        ?>
       <span><?=$order->sum?> тг</span>
        <?
        }
        ?> 
        </div>
    </section> 
    <section id="content-tab8">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль:</span> 
        <input hidden="true" type="text" name="season" id="season" value="7"> 
            <?
        $orders=Order::getSumS($_GET['number_house'],$_GET['season']);
        foreach ($orders as $order) {
        ?>
       <span><?=$order->sum?> тг</span>
        <?
        }
        ?> 
        </div>
    </section> 
        <section id="content-tab9">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль:</span> 
        <input hidden="true" type="text" name="season" id="season" value="8"> 
            <?
        $orders=Order::getSumS($_GET['number_house'],$_GET['season']);
        foreach ($orders as $order) {
        ?>
       <span><?=$order->sum?> тг</span>
        <?
        }
        ?> 
        </div>
    </section>
        <section id="content-tab10">
        <div class="form__stat-sumwrite">
        <span class="form__stat-maintxt">Прибыль:</span> 
        <input hidden="true" type="text" name="season" id="season" value="9"> 
            <?
        $orders=Order::getSumS($_GET['number_house'],$_GET['season']);
        foreach ($orders as $order) {
        ?>
       <span><?=$order->sum?> тг</span>
        <?
        }
        ?> 
        </div> -->
    </section>    
</div> 
</div>
</div>
  <hr class="clear" />
<div class="search_btn">
<input class="search-button" type="submit" value="Рассчитать"> 
</div>
</form>
    <!-- end form__search -->
</div>



<div class="a">

  </div>  
  <div class="b">


  </div>
        <!-- end right-admin -->
      </div>
      <!--end  main content-->
  </div>
  <hr class="clear" />
<?include('../modules/footer.php');?>