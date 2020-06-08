<?
session_start();
if(empty($_SESSION["session_username"])){
header("Location: /index.php");
    die;
}
require('../main_connections.php');
require('../modules/php_misc/rent/not_processed_orders.php');

?>
     <!--start  main content-->
  <div id="content_body">
      <!-- left_admin -->
      <div class="left_admin">
        <? include('sections/sidebar_admin.php');?>
      </div>
      <!-- right_admin -->
      <div class="right_admin">
<?require('sections/search.php');?>
        <div class="order_wrapper">
            <div class="basket_title"> Не обработанные заказы </div>
               <form class="order_form" method="post">
                <!-- <?// require('php_misc/rent/basket_table.php');?> -->
<table class="simple-little-table">
<tr>
<th width="10"></>
<th width="70">id Заказа</th>
<th width="80">№ Домика</th>
<th width="140">Дата оформления</th>
<th width="80">Сезон</th>
<th width="80">Цена</th>
<th>Телефон</th>
<th width="100" style="text-align:center;">ФИО</th>
<th width="150" style="text-align:center;">Описание</th>
 </tr>
<?
$orders=Order::getList($_GET['fnp'],$_GET['number_house'],$_GET['phone']);
foreach ($orders as $order) {
?>
<tr>
<td><input type="radio" name="choice_radio" value="<?=$order->phone?>"></td>
<td>
<div style="text-align:center;"><?=$order->id_orders?></div>
</td>
<td>
<div style="text-align:center;"><?=$order->number_house?></div>
</td>
<!-- <td>
<div style="text-align:center;"><?=$order->house_id?></div>
</td> -->
<td>
<div><?=$order->date_rent?></div>
</td> 
<td>
<div><?=$order->season?> сезон</div>
</td>
<td>
<div style="text-align:center;"><?=$order->price?></div>
</td>
<td>
<div style="text-align:center;"><?=$order->phone?></div>
</td>
<td>
<div style="text-align:center;"><?=$order->fnp?></div>
</td>
<td>
<div><?=$order->additionally?></div>
</td>
</tr>
<?
}
?>
</table>
                <div class="order_form-btn">
                   <div class="order_form-btn_left">
                      <button name="submit" id="submit" formaction="php_misc/rent/ok_rent.php" alt="принять заказ" value="0" class="booking-button"/>
                          принять заказ
                      </button>
                  </div> 
                    <div class="order_form-btn_right">
                        <button name="submit" id="submit" formaction="php_misc/rent/delete.php" alt="Удалить заказ" value="0" class="booking-button"/>
                        удалить заказ
                        </button>
                    </div> 
                </div>
              </form>
        </div>

        <!-- end right-admin -->
      </div>
      <!--end  main content-->
  </div>
  <hr class="clear" />

<?include('../modules/footer.php');?>

