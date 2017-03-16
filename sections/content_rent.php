
    <!--end info box-->
  </div>
  <!--start  main content-->
  <div id="content_body">
      <div class="rent_wrapper">
        <form  class="rent_form" action="fio.php" method="post">
            <div class="rent_title"><div class="h1__title">Бронирование</div></div>
            <div class="rent">
            <div class="left_form">
                <div class="input_rent">
                    <span class="input_rent-title">Введите свои данные</span>
                    <div class="input_rent-item">
                        <li><label class="my__label" for="my_name">ФИО:</label><input name="fio" type="text" class="side_menu_box_field" id="fio" size="11" required placeholder="ФИО" /></li>
                        <li><label class="my__label" for="my_name">ИИН:</label><input name="iin" type="text" class="side_menu_box_field" id="iin" required placeholder="ИИН"  size="11" /></li>
                        <li><label class="my__label" for="my_name">Телефон:</label><input name="tn" type="text" class="side_menu_box_field"  id="tn" required placeholder="Номер телефона"  size="11" /></li>
                        <li><label class="my__label" for="my_name">Заезд:</label><input type="date" name="dn" class="side_menu_box_field" /></li>
                        <li><label class="my__label" for="my_name">Выезд:</label><input type="date" name="dk" class="side_menu_box_field"/></li>
                 </div>
            </div>
        </div>
<div class="right_form">

          <ul class="home_rent">
<span class="input_rent-title">Выбирите домик</span>
                <li><input type="radio" name="rad" value="1"><div class="home_rent-link"><a href="houses.phtml">Домик №1</a></div></li>
                <li><input type="radio" name="rad" value="2"><div class="home_rent-link"><a href="houses.phtml">Домик №2</a></div></li>
                <li><input type="radio" name="rad" value="3"><div class="home_rent-link"><a href="houses.phtml">Домик №3</a></div></li>
                <li><input type="radio" name="rad" value="4"><div class="home_rent-link"><a href="houses.phtml">Домик №4</a></div></li>
                <li><input type="radio" name="rad" value="5"><div class="home_rent-link"><a href="houses.phtml">Домик №5</a></div></li>
                <li><input type="radio" name="rad" value="6"><div class="home_rent-link"><a href="houses.phtml">Домик №6</a></div></li>
                <li><input type="radio" name="rad" value="7"><div class="home_rent-link"><a href="houses.phtml">Домик №7</a></div></li>
                <li><input type="radio" name="rad" value="8"><div class="home_rent-link"><a href="houses.phtml">Домик №8</a></div></li>
        </ul>
</div>
            </div>
            <div class="rent_form-btn"><button type="submit" class="booking-button" />забронировать</button></div>
        </form>
      </div>

  </div>
  <!--end  main content-->
  <hr class="clear" />
</div>
<!--end wrapper-->