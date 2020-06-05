<div class="container__rent">
  <div class="art-layout-wrapper clearfix">
    <div class="art-content-layout">
      <div class="art-content-layout-row">

        <div class="art-layout-cell art-content clearfix">

          <link type="text/css" rel="stylesheet" media="all" href="/map/map.css">

          <!--<script type="text/javascript" src="/map/jquery.mousewheel.min.js"></script>
        -->
        <script type="text/javascript" src="/map/mapbox.js"></script>
        <script type="text/javascript">

  jQuery(document).ready(function() {
    $("#viewport").mapbox({
      mousewheel: false,
      layerSplit: 1//smoother transition for mousewheel
    });
    jQuery(".map-control a").click(function() {//control panel
      var viewport = $("#viewport");
      //this.className is same as method to be called
      if(this.className == "zoom" || this.className == "back") {viewport.mapbox(this.className, 1);}
      else {viewport.mapbox(this.className,20);}
      return false;
    });
  });

</script>

        <div class="art-article art-post">
          <h1 class="art-postheader">Карта домиков</h1>

          <div class="art-postcontent cottages clearfix">

            <div id="legend">
              <ul>
                <li>
                  <img src="/map/hsv.png">домик свободен</li>
                <li>
                  <img src="/map/hso.png">домик занят</li>
                <li>
                  <img src="/map/hsr.png">домик забронирован</li>
                <li>
                  <img src="/map/hsd.png">домик сдан посуточно</li>
              </ul>
            </div>

            <h2 style="text-align: left; margin: 20px 0px 30px 0;">Сезон 1: 1.06-10.06, 2.06-11.06</h2>

            <div id="smenu">
              Сезоны:
              <a href="/cottages-map/?season=1" class="active">1</a>
              <a href="/cottages-map/?season=2">2</a>
              <a href="/cottages-map/?season=3">3</a>
              <a href="/cottages-map/?season=4">4</a>
              <a href="/cottages-map/?season=5">5</a>
              <a href="/cottages-map/?season=6">6</a>
              <a href="/cottages-map/?season=7">7</a>
              <a href="/cottages-map/?season=8">8</a>
              <a href="/cottages-map/?season=9">9</a>
            </div>
            <p style="font-style:italic;">
              <span style="color:red;">*</span>
              Укажите интересующий вас домик. Выбранный домик будет выделен на карте. По клику на домик Вы перейдете на страницу с его описанием.
            </p>

            <form action="" style="margin: 20px 0px !important;">

              <select name="h">
                <option value="">-- Выберите домик --</option>
                <option value="1-1">Домик 1/1: элитный 2-х этажный, 4 места</option>
                <option value="1-2">Домик 1/2: элитный 2-х этажный, 4 места</option>
                <option value="1-3">Домик 1/3: элитный 2-х этажный, 4 места</option>
                <option value="1-4">Домик 1/4: элитный 2-х этажный, 4 места</option>
                <option value="1-5">Домик 1/5: элитный 2-х этажный, 4 места</option>
                <option value="1-6">Домик 1/6: элитный 2-х этажный, 4 места</option>
                <option value="1-7">Домик 1/7: элитный 2-х этажный, 4 места</option>
                <option value="1-8">Домик 1/8: элитный 2-х этажный, 4 места</option>
                <option value="1-9">Домик 1/9: элитный 2-х этажный, 4 места</option>
                <option value="100">Домик 100: дощатый, ДСП, 4 места</option>
                <option value="102-1">Домик 102/1: дощатый, ДСП, 4 места</option>
                <option value="102">Домик 102: дощатый, ДСП, 3 места</option>
                <option value="103">Домик 103: дощатый, ДСП, 3 места</option>
                <option value="104">Домик 104: дощатый, ДСП, 3 места</option>
                <option value="105-1">Домик 105/1: дощатый, ДСП, 3 места</option>
                <option value="105-2a">Домик 105/2А: ДСП, 4 места</option>
                <option value="105-2b">Домик 105/2Б: ДСП, 5 мест</option>
                <option value="105">Домик 105: дощатый, ДСП, 3 места</option>
                <option value="106">Домик 106: дощатый, ДСП, 5 мест</option>
                <option value="107">Домик 107: дощатый, ДСП, 3 места</option>
                <option value="108a">Домик 108А: кирпичный, 4 места</option>
                <option value="108b">Домик 108Б: кирпичный, 4 места</option>
                <option value="109">Домик 109: дощатый, 5 мест</option>
                <option value="10a">Домик 10А: дощатый, ДСП, 4 места</option>
                <option value="10b">Домик 10Б: дощатый, ДСП, 4 места</option>
                <option value="12">Домик 12: дощатый, 4 места</option>
                <option value="14">Домик 14: дощатый, 4 места</option>
                <option value="15">Домик 15: дощатый, 5 мест</option>
                <option value="16">Домик 16: дощатый, 5 мест</option>
                <option value="17">Домик 17: дощатый, 4 места</option>
                <option value="18">Домик 18: элитный, 3 места</option>
                <option value="19">Домик 19: дощатый, 5 мест</option>
                <option value="1">Домик 1: дощатый, 4 места</option>
                <option value="1">Домик 1: дощатый, 4 места</option>
                <option value="2-1">Домик 2/1: элитный 2-х этажный, 4 места</option>
                <option value="2-2">Домик 2/2: элитный 2-х этажный, 4 места</option>
                <option value="2-3">Домик 2/3: элитный, 6 мест</option>
                <option value="2-4">Домик 2/4: элитный, 6 мест</option>
                <option value="2-5">Домик 2/5: элитный, 6 мест</option>
                <option value="200a">Домик 200А: деревянный улучшенный, 6 мест</option>
                <option value="200b">Домик 200Б: деревянный улучшенный, 6 мест</option>
                <option value="20">Домик 20: дощатый, 4 места</option>
                <option value="21">Домик 21: дощатый, 4 места</option>
                <option value="22">Домик 22: элитный, 3 места</option>
                <option value="24">Домик 24: элитный, 3 места</option>
                <option value="25">Домик 25: элитный, 3 места</option>
                <option value="26-1">Домик 26/1: брус улучшенный, 4 места</option>
                <option value="26a">Домик 26A: кирпичный благоустроенный, 4 места</option>
                <option value="26A">Домик 26А: кирпичный благоустроенный, 4 места</option>
                <option value="26b">Домик 26Б: кирпичный благоустроенный, 4 места</option>
                <option value="27a">Домик 27А: кирпичный благоустроенный, 4 места</option>
                <option value="27b">Домик 27Б: кирпичный благоустроенный, 4 места</option>
                <option value="28a">Домик 28А: кирпичный благоустроенный, 4 места</option>
                <option value="28b">Домик 28Б: кирпичный благоустроенный, 4 места</option>
                <option value="29a">Домик 29А: вагончик, ДСП, 3 места</option>
                <option value="29b">Домик 29Б: вагончик, ДСП, 3 места</option>
                <option value="2">Домик 2: дощатый, 3 места</option>
                <option value="30a">Домик 30А: вагончик, дощатый, 4 места</option>
                <option value="30b">Домик 30Б: вагончик, дощатый, 4 места</option>
                <option value="31-1">Домик 31/1: брус улучшенный, 4 места</option>
                <option value="31-2">Домик 31/2: брус улучшенный, 4 места</option>
                <option value="31-3">Домик 31/3: брус улучшенный, 4 места</option>
                <option value="31-4">Домик 31/4: деревянный улучшенный, 4 места</option>
                <option value="31-5">Домик 31/5: брус улучшенный, 4 места</option>
                <option value="31">Домик 31: элитный, 6 мест</option>
                <option value="33a">Домик 33А: кирпичный, 4 места</option>
                <option value="33b">Домик 33Б: кирпичный, 4 места</option>
                <option value="35">Домик 35: элитный, 3 места</option>
                <option value="37a">Домик 37А: кирпичный, 4 места</option>
                <option value="37b">Домик 37Б: кирпичный, 4 места</option>
                <option value="38">Домик 38: стандартный дощатый</option>
                <option value="39a">Домик 39А: кирпичный, 4 места</option>
                <option value="39b">Домик 39Б: кирпичный, 4 места</option>
                <option value="3a">Домик 3А: дощатый, 3 места</option>
                <option value="3b">Домик 3Б: дощатый, 4 места</option>
                <option value="40">Домик 40: дощатый, ДСП, 4 места</option>
                <option value="41">Домик 41: дощатый, 4 места</option>
                <option value="42a">Домик 42А: кирпичный, 4 места</option>
                <option value="42b">Домик 42Б: кирпичный, 4 места</option>
                <option value="43">Домик 43: дощатый, ДСП, 4 места</option>
                <option value="44">Домик 44: дощатый, ДСП, 4 места</option>
                <option value="45a">Домик 45А: вагончик, дощатый, 4 места</option>
                <option value="45b">Домик 45Б: вагончик, дощатый, 4 места</option>
                <option value="46">Домик 46: дощатый, 4 места</option>
                <option value="47">Домик 47: дощатый, 4 места</option>
                <option value="48">Домик 48: дощатый, 4 места</option>
                <option value="49a">Домик 49А: вагончик, дощатый, 4 места</option>
                <option value="49b">Домик 49Б: вагончик, дощатый, 4 места</option>
                <option value="4">Домик 4: дощатый, 5мест</option>
                <option value="50">Домик 50: дощатый, 4 места</option>
                <option value="51-1">Домик 51/1: фанерный, 6 мест</option>
                <option value="51">Домик 51: элитный, 3 места</option>
                <option value="52a">Домик 52А: кирпичный благоустроенный, 4 места</option>
                <option value="52b">Домик 52Б: кирпичный благоустроенный, 4 места</option>
                <option value="53">Домик 53: элитный, 3 места</option>
                <option value="54">Домик 54: элитный, 3 места</option>
                <option value="55a">Домик 55А: кирпичный, 4 места</option>
                <option value="55b">Домик 55Б: кирпичный, 4 места</option>
                <option value="56">Домик 56: дощатый, ДСП, 3 места</option>
                <option value="57a">Домик 57А: кирпичный, 4 места</option>
                <option value="57b">Домик 57Б: кирпичный, 4 места</option>
                <option value="58">Домик 58: элитный, 3 места</option>
                <option value="59">Домик 59: элитный, 3 места</option>
                <option value="5">Домик 5: дощатый, 3 места</option>
                <option value="60">Домик 60: элитный, 3 места</option>
                <option value="61">Домик 61: элитный, 3 места</option>
                <option value="62">Домик 62: элитный, 3 места</option>
                <option value="63a">Домик 63А - кирпичный, 4 места</option>
                <option value="63b">Домик 63Б: кирпичный, 4 места</option>
                <option value="64">Домик 64: дощатый, ДСП, 3 места</option>
                <option value="65">Домик 65: дощатый, ДСП, 3 места</option>
                <option value="66a">Домик 66А: кирпичный, 4 места</option>
                <option value="66b">Домик 66Б - кирпичный, 4 места</option>
                <option value="67">Домик 67: элитный, 3 места</option>
                <option value="68">Домик 68: элитный, 3 места</option>
                <option value="6">Домик 6: дощатый, 6 мест</option>
                <option value="70a">Домик 70А: кирпичный, 4 места</option>
                <option value="70b">Домик 70Б: кирпичный, 4 места</option>
                <option value="71-1">Домик 71/1: дощатый, ДСП, брус, 6 мест</option>
                <option value="71">Домик 71: деревянный, 4 места</option>
                <option value="72">Домик 72: элитный, 6 мест</option>
                <option value="74">Домик 74: деревянный, 4 места</option>
                <option value="75-1">Домик 75/1: элитный, 3 места</option>
                <option value="75-2">Домик 75/2: элитный, 3 места</option>
                <option value="75">Домик 75: элитный, 3 места</option>
                <option value="76-1">Домик 76/1: элитный, 6 мест</option>
                <option value="76-2">Домик 76/2: элитный, 3 места</option>
                <option value="76">Домик 76: элитный, 6 мест</option>
                <option value="77">Домик 77: элитный, 6 мест</option>
                <option value="78">Домик 78: деревянный, 4 места</option>
                <option value="79-1">Домик 79/1: деревянный, 4 места</option>
                <option value="79-2">Домик 79/2: деревянный, 4 места</option>
                <option value="79">Домик 79: деревянный, 4 места</option>
                <option value="7">Домик 7: дощатый, 4 места</option>
                <option value="80">Домик 80: дощатый, ДСП, брус, 6 мест</option>
                <option value="81">Домик 81: дощатый, 5 мест</option>
                <option value="82">Домик 82: дощатый, 5 мест</option>
                <option value="83">Домик 83: дощатый, ДСП, 4 места</option>
                <option value="84-1">Домик 84/1: дощатый, ДСП, 4 места</option>
                <option value="84a">Домик 84А: дощатый, 3 места</option>
                <option value="84b">Домик 84Б: дощатый, 3 места</option>
                <option value="85">Домик 85: дощатый, ДСП, 5 мест</option>
                <option value="86">Домик 86: дощатый, ДСП, 3 места</option>
                <option value="89a">Домик 89А: кирпичный, 4 места</option>
                <option value="89b">Домик 89Б: кирпичный, 4 места</option>
                <option value="8">Домик 8: дощатый, 4 места</option>
                <option value="90-1">Домик 90/1: дощатый, ДСП, 4 места</option>
                <option value="90">Домик 90: вагончик, 5 мест</option>
                <option value="92-1">Домик 92/1: ДСП, 7 мест</option>
                <option value="92-2">Домик 92/2: ДСП улучшенный, 8 мест</option>
                <option value="92-3">Домик 92/3: фанерный, 6 мест</option>
                <option value="92-4">Домик 92/4: ДСП, 8 мест</option>
                <option value="92a">Домик 92А: кирпичный, 4 места</option>
                <option value="92b">Домик 92Б: кирпичный, 4 места</option>
                <option value="93">Домик 93: кирпичный, 3 места</option>
                <option value="94">Домик 94: кирпичный, 3 места</option>
                <option value="95">Домик 95: дощатый, ДСП, 4 места</option>
                <option value="96-1a">Домик 96/1А: ДСП, 2 места</option>
                <option value="96-1b">Домик 96/1Б: ДСП, 2 места</option>
                <option value="96-2a">Домик 96/2А: ДСП, 2 места</option>
                <option value="96-2b">Домик 96/2Б: ДСП, 2 места</option>
                <option value="96-3a">Домик 96/3А: вагончик, ДСП, 2 места</option>
                <option value="96-3b">Домик 96/3Б: вагончик, ДСП, 2 места</option>
                <option value="96">Домик 96: дощатый, ДСП, брус, 6 мест</option>
                <option value="97-1">Домик 97/1:дощатый, 2 места</option>
                <option value="97-2">Домик 97/2 - дощатый, 2 места</option>
                <option value="97-3">Домик 97/3 - дощатый, 2 места</option>
                <option value="97-4">Домик 97/4: дощатый, 2 места</option>
                <option value="97-5">Домик 97/5 - дощатый, 2 места</option>
                <option value="97">Домик 97: дощатый, ДСП, 5 мест</option>
                <option value="98">Домик 98: дощатый, ДСП, 4 места</option>
                <option value="99a">Домик 99А: дощатый, 4 места</option>
                <option value="99b">Домик 99Б: дощатый, 5 мест</option>
                <option value="9">Домик 9: дощатый, 5 мест</option>
              </select>

              <input type="submit" value="Найти домик"></form>

            <div class="body">
              <div class="mapwrapper">
                <div id="viewport" style="overflow: hidden; position: relative;">
                  <div style="background: url(&quot;/map/a05.jpg&quot;) no-repeat; height: 467px; width: 900px; position: absolute; display: none; left: 0px; top: 3px;" class="z1">
                    <img src="/map/a05.jpg" alt="" style="width: 100%; position: absolute; left: 0px; top: 0px;">
                    <div class="map-layer-mask" style="position: absolute; left: 0px; top: 0px; background: white; opacity: 0;"></div>
                    <div class="mapcontent" style="position: absolute; left: 0px; top: 0px; height: 470px; width: 100%;">
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-973-doshhatyj-2-mesta/" title="Домик 97/3 - дощатый, 2 места / свободен" class="hs97-3" target="_blank">97/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-975-doshhatyj-2-mesta/" title="Домик 97/5 - дощатый, 2 места / свободен" class="hs97-5" target="_blank">97/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-962a-dsp-2-mesta/" title="Домик 96/2А: ДСП, 2 места / свободен" class="hs96-2a" target="_blank">96/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961biz-dsp-2-mesta/" title="Домик 96/2Б: ДСП, 2 места / свободен" class="hs96-2b" target="_blank">96/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-972-doshhatyj-2-mesta/" title="Домик 97/2 - дощатый, 2 места / свободен" class="hs97-2" target="_blank">97/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-971doshhatyj-2-mesta/" title="Домик 97/1:дощатый, 2 места / свободен" class="hs97-1" target="_blank">97/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961aiz-dsp-2-mesta/" title="Домик 96/1А: ДСП, 2 места / свободен" class="hs96-1a" target="_blank">96/1а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-961b-dsp-2-mesta/" title="Домик 96/1Б: ДСП, 2 места / свободен" class="hs96-1b" target="_blank">96/1б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-974doshhatyj-2-mesta/" title="Домик 97/4: дощатый, 2 места / свободен" class="hs97-4" target="_blank">97/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963a-dsp-2-mesta/" title="Домик 96/3А: вагончик, ДСП, 2 места / свободен" class="hs96-3a" target="_blank">96/3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963b-dsp-2-mesta/" title="Домик 96/3Б: вагончик, ДСП, 2 места / свободен" class="hs96-3b" target="_blank">96/3б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-97doshhatyj-5-mest/" title="Домик 97: дощатый, ДСП, 5 мест / свободен" class="hs97" target="_blank">97</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-98doshhatyj-4-mesta/" title="Домик 98: дощатый, ДСП, 4 места / свободен" class="hs98" target="_blank">98</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-96iz-brusa-6-mest/" title="Домик 96: дощатый, ДСП, брус, 6 мест / свободен" class="hs96" target="_blank">96</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-99a-doshhatyj-4-mesta/" title="Домик 99А: дощатый, 4 места / свободен" class="hs99a" target="_blank">99а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-99b-doshhatyj-5-mest/" title="Домик 99Б: дощатый, 5 мест / свободен" class="hs99b" target="_blank">99б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1021iz-dsp-4-mesta/" title="Домик 102/1: дощатый, ДСП, 4 места / свободен" class="hs102-1" target="_blank">102/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-103-dsp-3-mesta/" title="Домик 103: дощатый, ДСП, 3 места / свободен" class="hs103" target="_blank">103</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-104iz-dsp-3-mesta/" title="Домик 104: дощатый, ДСП, 3 места / свободен" class="hs104" target="_blank">104</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-102-iz-dsp-3-mesta/" title="Домик 102: дощатый, ДСП, 3 места / свободен" class="hs102" target="_blank">102</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-100-dsp-4-mesta/" title="Домик 100: дощатый, ДСП, 4 места / свободен" class="hs100" target="_blank">100</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-105-dsp-3-mesta/" title="Домик 105: дощатый, ДСП, 3 места / свободен" class="hs105" target="_blank">105</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-106-dsp-5-mest/" title="Домик 106: дощатый, ДСП, 5 мест / свободен" class="hs106" target="_blank">106</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-107iz-dsp-3-mesta/" title="Домик 107: дощатый, ДСП, 3 места / свободен" class="hs107" target="_blank">107</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1051iz-dsp-3-mesta/" title="Домик 105/1: дощатый, ДСП, 3 места / свободен" class="hs105-1" target="_blank">105/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052a-dsp-4-mesta/" title="Домик 105/2А: ДСП, 4 места / свободен" class="hs105-2a" target="_blank">105/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052b-dsp-5-mest/" title="Домик 105/2Б: ДСП, 5 мест / свободен" class="hs105-2b" target="_blank">105/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-95-dsp-4-mesta/" title="Домик 95: дощатый, ДСП, 4 места / свободен" class="hs95" target="_blank">95</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-901iz-dsp-4-mesta/" title="Домик 90/1: дощатый, ДСП, 4 места / свободен" class="hs90-1" target="_blank">90/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-b-kirpichnyj-4-mesta/" title="Домик 108Б: кирпичный, 4 места / свободен" class="hs108b" target="_blank">108б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-a-kirpichnyj-4-mesta/" title="Домик 108А: кирпичный, 4 места / свободен" class="hs108a" target="_blank">108а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-922uluchshennyj-iz-dsp-8-mest/" title="Домик 92/2: ДСП улучшенный, 8 мест / свободен" class="hs92-2" target="_blank">92/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-921-dsp-7-mest/" title="Домик 92/1: ДСП, 7 мест / свободен" class="hs92-1" target="_blank">92/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-924-iz-dsp-8-mest/" title="Домик 92/4: ДСП, 8 мест / свободен" class="hs92-4" target="_blank">92/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-923-dsp-8-mest/" title="Домик 92/3: фанерный, 6 мест / свободен" class="hs92-3" target="_blank">92/3</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-94kirpichnyj-3-mesta/" title="Домик 94: кирпичный, 3 места / занят" class="hs94" target="_blank">94</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92-kirpichnyj-3-mesta/" title="Домик 93: кирпичный, 3 места / свободен" class="hs93" target="_blank">93</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92a-kirpichnyj-4-mesta/" title="Домик 92А: кирпичный, 4 места / свободен" class="hs92a" target="_blank">92а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92b-kirpichnyj-4-mesta/" title="Домик 92Б: кирпичный, 4 места / свободен" class="hs92b" target="_blank">92б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-90-vagonchik-5-mest/" title="Домик 90: вагончик, 5 мест / свободен" class="hs90" target="_blank">90</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89a-kirpichnyj-4-mesta/" title="Домик 89А: кирпичный, 4 места / свободен" class="hs89a" target="_blank">89а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89b-kirpichnyj-4-mesta/" title="Домик 89Б: кирпичный, 4 места / свободен" class="hs89b" target="_blank">89б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-86dsp-3-mesta/" title="Домик 86: дощатый, ДСП, 3 места / занят" class="hs86" target="_blank">86</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-82doshhatyj-5-mest/" title="Домик 82: дощатый, 5 мест / свободен" class="hs82" target="_blank">82</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-81-doshhatyj-5-mest/" title="Домик 81: дощатый, 5 мест / свободен" class="hs81" target="_blank">81</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-83-doshhatyj-4-mesta/" title="Домик 83: дощатый, ДСП, 4 места / свободен" class="hs83" target="_blank">83</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-841doshhatyj-4-mesta/" title="Домик 84/1: дощатый, ДСП, 4 места / свободен" class="hs84-1" target="_blank">84/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-84a-doshhatyj-3-mesta/" title="Домик 84А: дощатый, 3 места / свободен" class="hs84a" target="_blank">84а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-84bdoshhatyj-3-mesta/" title="Домик 84Б: дощатый, 3 места / свободен" class="hs84b" target="_blank">84б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/31/domik-85-doshhatyj-5-mest/" title="Домик 85: дощатый, ДСП, 5 мест / занят" class="hs85" target="_blank">85</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-78-derevyannyj-4-mesta/" title="Домик 78: деревянный, 4 места / свободен" class="hs78" target="_blank">78</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-79-derevyannyj-4-mesta/" title="Домик 79: деревянный, 4 места / свободен" class="hs79" target="_blank">79</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-77elitnii-6-mest/" title="Домик 77: элитный, 6 мест / свободен" class="hs77" target="_blank">77</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/12/domik-76-2/" title="Домик 76: элитный, 6 мест / свободен" class="hs76" target="_blank">76</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-76-1/" title="Домик 76/1: элитный, 6 мест / свободен" class="hs76-1" target="_blank">76/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-762derevyannyj-elitnyj-3-mesta/" title="Домик 76/2: элитный, 3 места / свободен" class="hs76-2" target="_blank">76/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-781-derevyannyj-elitnyj/" title="Домик 75/1: элитный, 3 места / свободен" class="hs75-1" target="_blank">75/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-752-derevyannyj-elitnyj-2/" title="Домик 75/2: элитный, 3 места / свободен" class="hs75-2" target="_blank">75/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-75-elitnyj-derevyannyj/" title="Домик 75: элитный, 3 места / свободен" class="hs75" target="_blank">75</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-74-derevyannyj-4-mesta/" title="Домик 74: деревянный, 4 места / свободен" class="hs74" target="_blank">74</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-72elitnii-6-mest/" title="Домик 72: элитный, 6 мест / занят" class="hs72" target="_blank">72</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-711doshhatyj-3-mesta/" title="Домик 71/1: дощатый, ДСП, брус, 6 мест / свободен" class="hs71-1" target="_blank">71/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-71-derevyannyj-4-mesta/" title="Домик 71: деревянный, 4 места / свободен" class="hs71" target="_blank">71</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-792derevyannyj-4-mesta/" title="Домик 79/2: деревянный, 4 места / свободен" class="hs79-2" target="_blank">79/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-791derevyannyj-4-mesta/" title="Домик 79/1: деревянный, 4 места / свободен" class="hs79-1" target="_blank">79/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-80derevyannyj-6-mest/" title="Домик 80: дощатый, ДСП, брус, 6 мест / свободен" class="hs80" target="_blank">80</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-67-elitnii/" title="Домик 67: элитный, 3 места / свободен" class="hs67" target="_blank">67</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-68-elitnii/" title="Домик 68: элитный, 3 места / свободен" class="hs68" target="_blank">68</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70akirpichnyj-4-mesta/" title="Домик 70А: кирпичный, 4 места / свободен" class="hs70a" target="_blank">70а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70bkirpichnyj-4-mesta/" title="Домик 70Б: кирпичный, 4 места / свободен" class="hs70b" target="_blank">70б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-66a-kirpichnyj-4-mesta/" title="Домик 66А: кирпичный, 4 места / свободен" class="hs66a" target="_blank">66а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domiks-66b-kirpichnyj-4-mesta/" title="Домик 66Б - кирпичный, 4 места / свободен" class="hs66b" target="_blank">66б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-65doshhatyj-3-mesta/" title="Домик 65: дощатый, ДСП, 3 места / свободен" class="hs65" target="_blank">65</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-64doshhatyj-3-mesta/" title="Домик 64: дощатый, ДСП, 3 места / свободен" class="hs64" target="_blank">64</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62a-kirpichnyj-4-mesta/" title="Домик 63А - кирпичный, 4 места / свободен" class="hs63a" target="_blank">63а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-63bkirpichnyj-4-mesta/" title="Домик 63Б: кирпичный, 4 места / свободен" class="hs63b" target="_blank">63б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62-elitnii-3-mesta/" title="Домик 62: элитный, 3 места / свободен" class="hs62" target="_blank">62</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-61-elitnii-3-mesta/" title="Домик 61: элитный, 3 места / свободен" class="hs61" target="_blank">61</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-60-elitnii-3-mesta/" title="Домик 60: элитный, 3 места / свободен" class="hs60" target="_blank">60</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-59-elitnii-3-mesta/" title="Домик 59: элитный, 3 места / свободен" class="hs59" target="_blank">59</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-58/" title="Домик 58: элитный, 3 места / свободен" class="hs58" target="_blank">58</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-56doshhatyj-3-mesta/" title="Домик 56: дощатый, ДСП, 3 места / свободен" class="hs56" target="_blank">56</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-57a-kirpichnyj-4-mesta/" title="Домик 57А: кирпичный, 4 места / свободен" class="hs57a" target="_blank">57а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-57bkirpichnyj-4-mesta/" title="Домик 57Б: кирпичный, 4 места / свободен" class="hs57b" target="_blank">57б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-55a-kirpichnyj-4-mesta/" title="Домик 55А: кирпичный, 4 места / свободен" class="hs55a" target="_blank">55а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-55bkirpichnyj-4-mesta/" title="Домик 55Б: кирпичный, 4 места / свободен" class="hs55b" target="_blank">55б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-54elitnii-3-mesta/" title="Домик 54: элитный, 3 места / свободен" class="hs54" target="_blank">54</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-53elitnii-3-mesta/" title="Домик 53: элитный, 3 места / свободен" class="hs53" target="_blank">53</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-50doshhatyj-4-mesta/" title="Домик 50: дощатый, 4 места / свободен" class="hs50" target="_blank">50</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-51-elitnii-3/" title="Домик 51: элитный, 3 места / занят" class="hs51" target="_blank">51</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-49adoshhatyj-4-mesta/" title="Домик 49А: вагончик, дощатый, 4 места / свободен" class="hs49a" target="_blank">49а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-49b-doshhatyj-4-mesta/" title="Домик 49Б: вагончик, дощатый, 4 места / свободен" class="hs49b" target="_blank">49б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-47doshhatyj-4-mesta/" title="Домик 47: дощатый, 4 места / свободен" class="hs47" target="_blank">47</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-48-doshhatyj-4-mesta/" title="Домик 48: дощатый, 4 места / свободен" class="hs48" target="_blank">48</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52akirpichnyj-4-mesta/" title="Домик 52А: кирпичный благоустроенный, 4 места / свободен" class="hs52a" target="_blank">52а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52b-kirpichnyj-4-mesta/" title="Домик 52Б: кирпичный благоустроенный, 4 места / свободен" class="hs52b" target="_blank">52б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-51-doshhatyj-3-mesta/" title="Домик 51/1: фанерный, 6 мест / свободен" class="hs51-1" target="_blank">51/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-28a-kirpichnyj-4-mesta-2/" title="Домик 28А: кирпичный благоустроенный, 4 места / свободен" class="hs28a" target="_blank">28а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-28b-kirpichnyj-4-mesta/" title="Домик 28Б: кирпичный благоустроенный, 4 места / свободен" class="hs28b" target="_blank">28б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-27a-kirpichnyj-4-mesta/" title="Домик 27А: кирпичный благоустроенный, 4 места / свободен" class="hs27a" target="_blank">27а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-27b/" title="Домик 27Б: кирпичный благоустроенный, 4 места / свободен" class="hs27b" target="_blank">27б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/20/domik-26b-kirpichnyj-4-mesta-2/" title="Домик 26A: кирпичный благоустроенный, 4 места / свободен" class="hs26a" target="_blank">26а</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/14/domik-26b-kirpichnyj-4-mesta/" title="Домик 26Б: кирпичный благоустроенный, 4 места / занят" class="hs26b" target="_blank">26б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/16/domik-1-shhitovoj-4-x-mestnyj/" title="Домик 1: дощатый, 4 места / занят" class="hs1" target="_blank">1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/16/domik-2-doshhatyj-3-x-mestnyj/" title="Домик 2: дощатый, 3 места / свободен" class="hs2" target="_blank">2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3adoshhatyj-4-mesta/" title="Домик 3А: дощатый, 3 места / свободен" class="hs3a" target="_blank">3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3bdoshhatyj-4-mesta/" title="Домик 3Б: дощатый, 4 места / свободен" class="hs3b" target="_blank">3б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/29/domik-4doshhatyj-5mest/" title="Домик 4: дощатый, 5мест / занят" class="hs4" target="_blank">4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-5doshhatyj-3-mesta/" title="Домик 5: дощатый, 3 места / свободен" class="hs5" target="_blank">5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-6doshhatyj-6-mest/" title="Домик 6: дощатый, 6 мест / свободен" class="hs6" target="_blank">6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-7doshhatyj-4-mesta/" title="Домик 7: дощатый, 4 места / свободен" class="hs7" target="_blank">7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-8doshhatyj-4-mesta/" title="Домик 8: дощатый, 4 места / свободен" class="hs8" target="_blank">8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-9doshhatyj-5-mest/" title="Домик 9: дощатый, 5 мест / свободен" class="hs9" target="_blank">9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-10a-doshhatyj-4-mesta/" title="Домик 10А: дощатый, ДСП, 4 места / свободен" class="hs10a" target="_blank">10а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-10bdoshhatyj-4-mesta/" title="Домик 10Б: дощатый, ДСП, 4 места / свободен" class="hs10b" target="_blank">10б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-12doshhatyj-4-mesta/" title="Домик 12: дощатый, 4 места / свободен" class="hs12" target="_blank">12</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-14-doshhatyj-4-mesta/" title="Домик 14: дощатый, 4 места / свободен" class="hs14" target="_blank">14</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/12/domik-15-doshhatyj-5-mest/" title="Домик 15: дощатый, 5 мест / свободен" class="hs15" target="_blank">15</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-16doshhatyj-5-mest/" title="Домик 16: дощатый, 5 мест / свободен" class="hs16" target="_blank">16</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-17-doshhatyj-4-mesta/" title="Домик 17: дощатый, 4 места / свободен" class="hs17" target="_blank">17</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-18-elitnii-3-mesta/" title="Домик 18: элитный, 3 места / занят" class="hs18" target="_blank">18</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-19-doshhatyj-5-mest/" title="Домик 19: дощатый, 5 мест / свободен" class="hs19" target="_blank">19</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-20-doshhatyj-4-mesta/" title="Домик 20: дощатый, 4 места / свободен" class="hs20" target="_blank">20</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-21-doshhatyj-4-mesta/" title="Домик 21: дощатый, 4 места / свободен" class="hs21" target="_blank">21</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-22-elitnii-3-mesta/" title="Домик 22: элитный, 3 места / свободен" class="hs22" target="_blank">22</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-24-elitnii-3-mesta/" title="Домик 24: элитный, 3 места / занят" class="hs24" target="_blank">24</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-25-elitnii/" title="Домик 25: элитный, 3 места / свободен" class="hs25" target="_blank">25</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-21-novyj-elitnyj-4-mesta/" title="Домик 2/1: элитный 2-х этажный, 4 места / свободен" class="hs2-1" target="_blank">2/1</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/01/domik-22-novyj-elitnyj-4-mesta/" title="Домик 2/2: элитный 2-х этажный, 4 места / занят" class="hs2-2" target="_blank">2/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-3/" title="Домик 2/3: элитный, 6 мест / свободен" class="hs2-3" target="_blank">2/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-4/" title="Домик 2/4: элитный, 6 мест / свободен" class="hs2-4" target="_blank">2/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/04/10/domik-2-5/" title="Домик 2/5: элитный, 6 мест / свободен" class="hs2-5" target="_blank">2/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-19-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/9: элитный 2-х этажный, 4 места / свободен" class="hs1-9" target="_blank">1/9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-18-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/8: элитный 2-х этажный, 4 места / свободен" class="hs1-8" target="_blank">1/8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-11-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/1: элитный 2-х этажный, 4 места / свободен" class="hs1-1" target="_blank">1/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-12-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/2: элитный 2-х этажный, 4 места / свободен" class="hs1-2" target="_blank">1/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-13-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/3: элитный 2-х этажный, 4 места / свободен" class="hs1-3" target="_blank">1/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-14-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/4: элитный 2-х этажный, 4 места / свободен" class="hs1-4" target="_blank">1/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/15/domik-15-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/5: элитный 2-х этажный, 4 места / свободен" class="hs1-5" target="_blank">1/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-16-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/6: элитный 2-х этажный, 4 места / свободен" class="hs1-6" target="_blank">1/6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-17-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/7: элитный 2-х этажный, 4 места / свободен" class="hs1-7" target="_blank">1/7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-29avagonchik-3-mesta/" title="Домик 29А: вагончик, ДСП, 3 места / свободен" class="hs29a" target="_blank">29а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-29b-kirpichnyj-4-mesta/" title="Домик 29Б: вагончик, ДСП, 3 места / свободен" class="hs29b" target="_blank">29б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-30a/" title="Домик 30А: вагончик, дощатый, 4 места / свободен" class="hs30a" target="_blank">30а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-30bvagonchik-4-mesta/" title="Домик 30Б: вагончик, дощатый, 4 места / свободен" class="hs30b" target="_blank">30б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-31/" title="Домик 31: элитный, 6 мест / свободен" class="hs31" target="_blank">31</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33a-vagonchik-4-mesta/" title="Домик 33А: кирпичный, 4 места / свободен" class="hs33a" target="_blank">33а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33b-vagonchik-4-mesta/" title="Домик 33Б: кирпичный, 4 места / свободен" class="hs33b" target="_blank">33б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-35/" title="Домик 35: элитный, 3 места / свободен" class="hs35" target="_blank">35</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-312derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/2: брус улучшенный, 4 места / свободен" class="hs31-2" target="_blank">31/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-311-derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/1: брус улучшенный, 4 места / свободен" class="hs31-1" target="_blank">31/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-313derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/3: брус улучшенный, 4 места / свободен" class="hs31-3" target="_blank">31/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-314-derevyannyj-uluchshennyj/" title="Домик 31/4: деревянный улучшенный, 4 места / свободен" class="hs31-4" target="_blank">31/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-315-derevyannyj-4-mesta/" title="Домик 31/5: брус улучшенный, 4 места / свободен" class="hs31-5" target="_blank">31/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-37a-kirpichnyj-4-mesta/" title="Домик 37А: кирпичный, 4 места / свободен" class="hs37a" target="_blank">37а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-37b-kirpichnyj-4-mesta/" title="Домик 37Б: кирпичный, 4 места / свободен" class="hs37b" target="_blank">37б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-38-%e2%80%93-standartnyj-doshhatyj/" title="Домик 38: стандартный дощатый / свободен" class="hs38" target="_blank">38</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-39a-irpichnyj-4-mesta/" title="Домик 39А: кирпичный, 4 места / свободен" class="hs39a" target="_blank">39а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-39bkirpichnyj-4-mesta/" title="Домик 39Б: кирпичный, 4 места / свободен" class="hs39b" target="_blank">39б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-40-doshhatyj-4-mesta/" title="Домик 40: дощатый, ДСП, 4 места / свободен" class="hs40" target="_blank">40</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-261-derevyannyj-uluchshennyj-4-mesta/" title="Домик 26/1: брус улучшенный, 4 места / свободен" class="hs26-1" target="_blank">26/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-41doshhatyj-4-mesta/" title="Домик 41: дощатый, 4 места / свободен" class="hs41" target="_blank">41</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-42a-kirpichnyj-4-mesta/" title="Домик 42А: кирпичный, 4 места / свободен" class="hs42a" target="_blank">42а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-42b-kirpichnyj-4-mesta/" title="Домик 42Б: кирпичный, 4 места / свободен" class="hs42b" target="_blank">42б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-43-doshhatyj-4-mesta/" title="Домик 43: дощатый, ДСП, 4 места / свободен" class="hs43" target="_blank">43</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-44doshhatyj-4-mesta/" title="Домик 44: дощатый, ДСП, 4 места / свободен" class="hs44" target="_blank">44</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-45adoshhatyj-4-mesta/" title="Домик 45А: вагончик, дощатый, 4 места / свободен" class="hs45a" target="_blank">45а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-45b-doshhatyj-4-mesta/" title="Домик 45Б: вагончик, дощатый, 4 места / свободен" class="hs45b" target="_blank">45б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-46doshhatyj-4-mesta/" title="Домик 46: дощатый, 4 места / свободен" class="hs46" target="_blank">46</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-200a-derevyannyj-uluchshennyj-6-mest/" title="Домик 200А: деревянный улучшенный, 6 мест / свободен" class="hs200a" target="_blank">200а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-200bderevyannyj-uluchshennyj-6-mest/" title="Домик 200Б: деревянный улучшенный, 6 мест / свободен" class="hs200b" target="_blank">200б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-n-doshhatyj-5-mest/" title="Домик 109: дощатый, 5 мест / свободен" class="hs109" target="_blank">109</a>
                      </span>
                    </div>
                  </div>
                  <div style="height: 706px; width: 1360px; position: absolute; display: block; left: -182.847px; top: -236px;" class="z2 current-map-layer">
                    <img src="/map/a05.jpg" alt="" style="width: 100%; position: absolute; left: 0px; top: 0px;">
                    <div class="map-layer-mask" style="position: absolute; left: 0px; top: 0px; background: white; opacity: 0;"></div>
                    <div class="mapcontent" style="position: absolute; top: 0px; left: 0px;">
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-973-doshhatyj-2-mesta/" title="Домик 97/3 - дощатый, 2 места / свободен" class="hs97-3" target="_blank">97/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-975-doshhatyj-2-mesta/" title="Домик 97/5 - дощатый, 2 места / свободен" class="hs97-5" target="_blank">97/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-962a-dsp-2-mesta/" title="Домик 96/2А: ДСП, 2 места / свободен" class="hs96-2a" target="_blank">96/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961biz-dsp-2-mesta/" title="Домик 96/2Б: ДСП, 2 места / свободен" class="hs96-2b" target="_blank">96/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-972-doshhatyj-2-mesta/" title="Домик 97/2 - дощатый, 2 места / свободен" class="hs97-2" target="_blank">97/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-971doshhatyj-2-mesta/" title="Домик 97/1:дощатый, 2 места / свободен" class="hs97-1" target="_blank">97/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961aiz-dsp-2-mesta/" title="Домик 96/1А: ДСП, 2 места / свободен" class="hs96-1a" target="_blank">96/1а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-961b-dsp-2-mesta/" title="Домик 96/1Б: ДСП, 2 места / свободен" class="hs96-1b" target="_blank">96/1б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-974doshhatyj-2-mesta/" title="Домик 97/4: дощатый, 2 места / свободен" class="hs97-4" target="_blank">97/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963a-dsp-2-mesta/" title="Домик 96/3А: вагончик, ДСП, 2 места / свободен" class="hs96-3a" target="_blank">96/3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963b-dsp-2-mesta/" title="Домик 96/3Б: вагончик, ДСП, 2 места / свободен" class="hs96-3b" target="_blank">96/3б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-97doshhatyj-5-mest/" title="Домик 97: дощатый, ДСП, 5 мест / свободен" class="hs97" target="_blank">97</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-98doshhatyj-4-mesta/" title="Домик 98: дощатый, ДСП, 4 места / свободен" class="hs98" target="_blank">98</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-96iz-brusa-6-mest/" title="Домик 96: дощатый, ДСП, брус, 6 мест / свободен" class="hs96" target="_blank">96</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-99a-doshhatyj-4-mesta/" title="Домик 99А: дощатый, 4 места / свободен" class="hs99a" target="_blank">99а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-99b-doshhatyj-5-mest/" title="Домик 99Б: дощатый, 5 мест / свободен" class="hs99b" target="_blank">99б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1021iz-dsp-4-mesta/" title="Домик 102/1: дощатый, ДСП, 4 места / свободен" class="hs102-1" target="_blank">102/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-103-dsp-3-mesta/" title="Домик 103: дощатый, ДСП, 3 места / свободен" class="hs103" target="_blank">103</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-104iz-dsp-3-mesta/" title="Домик 104: дощатый, ДСП, 3 места / свободен" class="hs104" target="_blank">104</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-102-iz-dsp-3-mesta/" title="Домик 102: дощатый, ДСП, 3 места / свободен" class="hs102" target="_blank">102</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-100-dsp-4-mesta/" title="Домик 100: дощатый, ДСП, 4 места / свободен" class="hs100" target="_blank">100</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-105-dsp-3-mesta/" title="Домик 105: дощатый, ДСП, 3 места / свободен" class="hs105" target="_blank">105</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-106-dsp-5-mest/" title="Домик 106: дощатый, ДСП, 5 мест / свободен" class="hs106" target="_blank">106</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-107iz-dsp-3-mesta/" title="Домик 107: дощатый, ДСП, 3 места / свободен" class="hs107" target="_blank">107</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1051iz-dsp-3-mesta/" title="Домик 105/1: дощатый, ДСП, 3 места / свободен" class="hs105-1" target="_blank">105/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052a-dsp-4-mesta/" title="Домик 105/2А: ДСП, 4 места / свободен" class="hs105-2a" target="_blank">105/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052b-dsp-5-mest/" title="Домик 105/2Б: ДСП, 5 мест / свободен" class="hs105-2b" target="_blank">105/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-95-dsp-4-mesta/" title="Домик 95: дощатый, ДСП, 4 места / свободен" class="hs95" target="_blank">95</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-901iz-dsp-4-mesta/" title="Домик 90/1: дощатый, ДСП, 4 места / свободен" class="hs90-1" target="_blank">90/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-b-kirpichnyj-4-mesta/" title="Домик 108Б: кирпичный, 4 места / свободен" class="hs108b" target="_blank">108б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-a-kirpichnyj-4-mesta/" title="Домик 108А: кирпичный, 4 места / свободен" class="hs108a" target="_blank">108а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-922uluchshennyj-iz-dsp-8-mest/" title="Домик 92/2: ДСП улучшенный, 8 мест / свободен" class="hs92-2" target="_blank">92/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-921-dsp-7-mest/" title="Домик 92/1: ДСП, 7 мест / свободен" class="hs92-1" target="_blank">92/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-924-iz-dsp-8-mest/" title="Домик 92/4: ДСП, 8 мест / свободен" class="hs92-4" target="_blank">92/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-923-dsp-8-mest/" title="Домик 92/3: фанерный, 6 мест / свободен" class="hs92-3" target="_blank">92/3</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-94kirpichnyj-3-mesta/" title="Домик 94: кирпичный, 3 места / занят" class="hs94" target="_blank">94</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92-kirpichnyj-3-mesta/" title="Домик 93: кирпичный, 3 места / свободен" class="hs93" target="_blank">93</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92a-kirpichnyj-4-mesta/" title="Домик 92А: кирпичный, 4 места / свободен" class="hs92a" target="_blank">92а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92b-kirpichnyj-4-mesta/" title="Домик 92Б: кирпичный, 4 места / свободен" class="hs92b" target="_blank">92б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-90-vagonchik-5-mest/" title="Домик 90: вагончик, 5 мест / свободен" class="hs90" target="_blank">90</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89a-kirpichnyj-4-mesta/" title="Домик 89А: кирпичный, 4 места / свободен" class="hs89a" target="_blank">89а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89b-kirpichnyj-4-mesta/" title="Домик 89Б: кирпичный, 4 места / свободен" class="hs89b" target="_blank">89б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-86dsp-3-mesta/" title="Домик 86: дощатый, ДСП, 3 места / занят" class="hs86" target="_blank">86</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-82doshhatyj-5-mest/" title="Домик 82: дощатый, 5 мест / свободен" class="hs82" target="_blank">82</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-81-doshhatyj-5-mest/" title="Домик 81: дощатый, 5 мест / свободен" class="hs81" target="_blank">81</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-83-doshhatyj-4-mesta/" title="Домик 83: дощатый, ДСП, 4 места / свободен" class="hs83" target="_blank">83</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-841doshhatyj-4-mesta/" title="Домик 84/1: дощатый, ДСП, 4 места / свободен" class="hs84-1" target="_blank">84/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-84a-doshhatyj-3-mesta/" title="Домик 84А: дощатый, 3 места / свободен" class="hs84a" target="_blank">84а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-84bdoshhatyj-3-mesta/" title="Домик 84Б: дощатый, 3 места / свободен" class="hs84b" target="_blank">84б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/31/domik-85-doshhatyj-5-mest/" title="Домик 85: дощатый, ДСП, 5 мест / занят" class="hs85" target="_blank">85</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-78-derevyannyj-4-mesta/" title="Домик 78: деревянный, 4 места / свободен" class="hs78" target="_blank">78</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-79-derevyannyj-4-mesta/" title="Домик 79: деревянный, 4 места / свободен" class="hs79" target="_blank">79</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-77elitnii-6-mest/" title="Домик 77: элитный, 6 мест / свободен" class="hs77" target="_blank">77</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/12/domik-76-2/" title="Домик 76: элитный, 6 мест / свободен" class="hs76" target="_blank">76</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-76-1/" title="Домик 76/1: элитный, 6 мест / свободен" class="hs76-1" target="_blank">76/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-762derevyannyj-elitnyj-3-mesta/" title="Домик 76/2: элитный, 3 места / свободен" class="hs76-2" target="_blank">76/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-781-derevyannyj-elitnyj/" title="Домик 75/1: элитный, 3 места / свободен" class="hs75-1" target="_blank">75/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-752-derevyannyj-elitnyj-2/" title="Домик 75/2: элитный, 3 места / свободен" class="hs75-2" target="_blank">75/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-75-elitnyj-derevyannyj/" title="Домик 75: элитный, 3 места / свободен" class="hs75" target="_blank">75</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-74-derevyannyj-4-mesta/" title="Домик 74: деревянный, 4 места / свободен" class="hs74" target="_blank">74</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-72elitnii-6-mest/" title="Домик 72: элитный, 6 мест / занят" class="hs72" target="_blank">72</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-711doshhatyj-3-mesta/" title="Домик 71/1: дощатый, ДСП, брус, 6 мест / свободен" class="hs71-1" target="_blank">71/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-71-derevyannyj-4-mesta/" title="Домик 71: деревянный, 4 места / свободен" class="hs71" target="_blank">71</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-792derevyannyj-4-mesta/" title="Домик 79/2: деревянный, 4 места / свободен" class="hs79-2" target="_blank">79/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-791derevyannyj-4-mesta/" title="Домик 79/1: деревянный, 4 места / свободен" class="hs79-1" target="_blank">79/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-80derevyannyj-6-mest/" title="Домик 80: дощатый, ДСП, брус, 6 мест / свободен" class="hs80" target="_blank">80</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-67-elitnii/" title="Домик 67: элитный, 3 места / свободен" class="hs67" target="_blank">67</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-68-elitnii/" title="Домик 68: элитный, 3 места / свободен" class="hs68" target="_blank">68</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70akirpichnyj-4-mesta/" title="Домик 70А: кирпичный, 4 места / свободен" class="hs70a" target="_blank">70а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70bkirpichnyj-4-mesta/" title="Домик 70Б: кирпичный, 4 места / свободен" class="hs70b" target="_blank">70б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-66a-kirpichnyj-4-mesta/" title="Домик 66А: кирпичный, 4 места / свободен" class="hs66a" target="_blank">66а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domiks-66b-kirpichnyj-4-mesta/" title="Домик 66Б - кирпичный, 4 места / свободен" class="hs66b" target="_blank">66б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-65doshhatyj-3-mesta/" title="Домик 65: дощатый, ДСП, 3 места / свободен" class="hs65" target="_blank">65</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-64doshhatyj-3-mesta/" title="Домик 64: дощатый, ДСП, 3 места / свободен" class="hs64" target="_blank">64</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62a-kirpichnyj-4-mesta/" title="Домик 63А - кирпичный, 4 места / свободен" class="hs63a" target="_blank">63а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-63bkirpichnyj-4-mesta/" title="Домик 63Б: кирпичный, 4 места / свободен" class="hs63b" target="_blank">63б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62-elitnii-3-mesta/" title="Домик 62: элитный, 3 места / свободен" class="hs62" target="_blank">62</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-61-elitnii-3-mesta/" title="Домик 61: элитный, 3 места / свободен" class="hs61" target="_blank">61</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-60-elitnii-3-mesta/" title="Домик 60: элитный, 3 места / свободен" class="hs60" target="_blank">60</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-59-elitnii-3-mesta/" title="Домик 59: элитный, 3 места / свободен" class="hs59" target="_blank">59</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-58/" title="Домик 58: элитный, 3 места / свободен" class="hs58" target="_blank">58</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-56doshhatyj-3-mesta/" title="Домик 56: дощатый, ДСП, 3 места / свободен" class="hs56" target="_blank">56</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-57a-kirpichnyj-4-mesta/" title="Домик 57А: кирпичный, 4 места / свободен" class="hs57a" target="_blank">57а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-57bkirpichnyj-4-mesta/" title="Домик 57Б: кирпичный, 4 места / свободен" class="hs57b" target="_blank">57б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-55a-kirpichnyj-4-mesta/" title="Домик 55А: кирпичный, 4 места / свободен" class="hs55a" target="_blank">55а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-55bkirpichnyj-4-mesta/" title="Домик 55Б: кирпичный, 4 места / свободен" class="hs55b" target="_blank">55б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-54elitnii-3-mesta/" title="Домик 54: элитный, 3 места / свободен" class="hs54" target="_blank">54</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-53elitnii-3-mesta/" title="Домик 53: элитный, 3 места / свободен" class="hs53" target="_blank">53</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-50doshhatyj-4-mesta/" title="Домик 50: дощатый, 4 места / свободен" class="hs50" target="_blank">50</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-51-elitnii-3/" title="Домик 51: элитный, 3 места / занят" class="hs51" target="_blank">51</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-49adoshhatyj-4-mesta/" title="Домик 49А: вагончик, дощатый, 4 места / свободен" class="hs49a" target="_blank">49а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-49b-doshhatyj-4-mesta/" title="Домик 49Б: вагончик, дощатый, 4 места / свободен" class="hs49b" target="_blank">49б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-47doshhatyj-4-mesta/" title="Домик 47: дощатый, 4 места / свободен" class="hs47" target="_blank">47</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-48-doshhatyj-4-mesta/" title="Домик 48: дощатый, 4 места / свободен" class="hs48" target="_blank">48</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52akirpichnyj-4-mesta/" title="Домик 52А: кирпичный благоустроенный, 4 места / свободен" class="hs52a" target="_blank">52а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52b-kirpichnyj-4-mesta/" title="Домик 52Б: кирпичный благоустроенный, 4 места / свободен" class="hs52b" target="_blank">52б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-51-doshhatyj-3-mesta/" title="Домик 51/1: фанерный, 6 мест / свободен" class="hs51-1" target="_blank">51/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-28a-kirpichnyj-4-mesta-2/" title="Домик 28А: кирпичный благоустроенный, 4 места / свободен" class="hs28a" target="_blank">28а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-28b-kirpichnyj-4-mesta/" title="Домик 28Б: кирпичный благоустроенный, 4 места / свободен" class="hs28b" target="_blank">28б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-27a-kirpichnyj-4-mesta/" title="Домик 27А: кирпичный благоустроенный, 4 места / свободен" class="hs27a" target="_blank">27а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-27b/" title="Домик 27Б: кирпичный благоустроенный, 4 места / свободен" class="hs27b" target="_blank">27б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/20/domik-26b-kirpichnyj-4-mesta-2/" title="Домик 26A: кирпичный благоустроенный, 4 места / свободен" class="hs26a" target="_blank">26а</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/14/domik-26b-kirpichnyj-4-mesta/" title="Домик 26Б: кирпичный благоустроенный, 4 места / занят" class="hs26b" target="_blank">26б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/16/domik-1-shhitovoj-4-x-mestnyj/" title="Домик 1: дощатый, 4 места / занят" class="hs1" target="_blank">1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/16/domik-2-doshhatyj-3-x-mestnyj/" title="Домик 2: дощатый, 3 места / свободен" class="hs2" target="_blank">2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3adoshhatyj-4-mesta/" title="Домик 3А: дощатый, 3 места / свободен" class="hs3a" target="_blank">3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3bdoshhatyj-4-mesta/" title="Домик 3Б: дощатый, 4 места / свободен" class="hs3b" target="_blank">3б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/29/domik-4doshhatyj-5mest/" title="Домик 4: дощатый, 5мест / занят" class="hs4" target="_blank">4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-5doshhatyj-3-mesta/" title="Домик 5: дощатый, 3 места / свободен" class="hs5" target="_blank">5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-6doshhatyj-6-mest/" title="Домик 6: дощатый, 6 мест / свободен" class="hs6" target="_blank">6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-7doshhatyj-4-mesta/" title="Домик 7: дощатый, 4 места / свободен" class="hs7" target="_blank">7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-8doshhatyj-4-mesta/" title="Домик 8: дощатый, 4 места / свободен" class="hs8" target="_blank">8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-9doshhatyj-5-mest/" title="Домик 9: дощатый, 5 мест / свободен" class="hs9" target="_blank">9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-10a-doshhatyj-4-mesta/" title="Домик 10А: дощатый, ДСП, 4 места / свободен" class="hs10a" target="_blank">10а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-10bdoshhatyj-4-mesta/" title="Домик 10Б: дощатый, ДСП, 4 места / свободен" class="hs10b" target="_blank">10б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-12doshhatyj-4-mesta/" title="Домик 12: дощатый, 4 места / свободен" class="hs12" target="_blank">12</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-14-doshhatyj-4-mesta/" title="Домик 14: дощатый, 4 места / свободен" class="hs14" target="_blank">14</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/12/domik-15-doshhatyj-5-mest/" title="Домик 15: дощатый, 5 мест / свободен" class="hs15" target="_blank">15</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-16doshhatyj-5-mest/" title="Домик 16: дощатый, 5 мест / свободен" class="hs16" target="_blank">16</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-17-doshhatyj-4-mesta/" title="Домик 17: дощатый, 4 места / свободен" class="hs17" target="_blank">17</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-18-elitnii-3-mesta/" title="Домик 18: элитный, 3 места / занят" class="hs18" target="_blank">18</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-19-doshhatyj-5-mest/" title="Домик 19: дощатый, 5 мест / свободен" class="hs19" target="_blank">19</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-20-doshhatyj-4-mesta/" title="Домик 20: дощатый, 4 места / свободен" class="hs20" target="_blank">20</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-21-doshhatyj-4-mesta/" title="Домик 21: дощатый, 4 места / свободен" class="hs21" target="_blank">21</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-22-elitnii-3-mesta/" title="Домик 22: элитный, 3 места / свободен" class="hs22" target="_blank">22</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-24-elitnii-3-mesta/" title="Домик 24: элитный, 3 места / занят" class="hs24" target="_blank">24</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-25-elitnii/" title="Домик 25: элитный, 3 места / свободен" class="hs25" target="_blank">25</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-21-novyj-elitnyj-4-mesta/" title="Домик 2/1: элитный 2-х этажный, 4 места / свободен" class="hs2-1" target="_blank">2/1</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/01/domik-22-novyj-elitnyj-4-mesta/" title="Домик 2/2: элитный 2-х этажный, 4 места / занят" class="hs2-2" target="_blank">2/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-3/" title="Домик 2/3: элитный, 6 мест / свободен" class="hs2-3" target="_blank">2/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-4/" title="Домик 2/4: элитный, 6 мест / свободен" class="hs2-4" target="_blank">2/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/04/10/domik-2-5/" title="Домик 2/5: элитный, 6 мест / свободен" class="hs2-5" target="_blank">2/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-19-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/9: элитный 2-х этажный, 4 места / свободен" class="hs1-9" target="_blank">1/9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-18-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/8: элитный 2-х этажный, 4 места / свободен" class="hs1-8" target="_blank">1/8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-11-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/1: элитный 2-х этажный, 4 места / свободен" class="hs1-1" target="_blank">1/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-12-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/2: элитный 2-х этажный, 4 места / свободен" class="hs1-2" target="_blank">1/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-13-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/3: элитный 2-х этажный, 4 места / свободен" class="hs1-3" target="_blank">1/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-14-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/4: элитный 2-х этажный, 4 места / свободен" class="hs1-4" target="_blank">1/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/15/domik-15-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/5: элитный 2-х этажный, 4 места / свободен" class="hs1-5" target="_blank">1/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-16-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/6: элитный 2-х этажный, 4 места / свободен" class="hs1-6" target="_blank">1/6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-17-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/7: элитный 2-х этажный, 4 места / свободен" class="hs1-7" target="_blank">1/7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-29avagonchik-3-mesta/" title="Домик 29А: вагончик, ДСП, 3 места / свободен" class="hs29a" target="_blank">29а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-29b-kirpichnyj-4-mesta/" title="Домик 29Б: вагончик, ДСП, 3 места / свободен" class="hs29b" target="_blank">29б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-30a/" title="Домик 30А: вагончик, дощатый, 4 места / свободен" class="hs30a" target="_blank">30а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-30bvagonchik-4-mesta/" title="Домик 30Б: вагончик, дощатый, 4 места / свободен" class="hs30b" target="_blank">30б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-31/" title="Домик 31: элитный, 6 мест / свободен" class="hs31" target="_blank">31</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33a-vagonchik-4-mesta/" title="Домик 33А: кирпичный, 4 места / свободен" class="hs33a" target="_blank">33а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33b-vagonchik-4-mesta/" title="Домик 33Б: кирпичный, 4 места / свободен" class="hs33b" target="_blank">33б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-35/" title="Домик 35: элитный, 3 места / свободен" class="hs35" target="_blank">35</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-312derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/2: брус улучшенный, 4 места / свободен" class="hs31-2" target="_blank">31/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-311-derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/1: брус улучшенный, 4 места / свободен" class="hs31-1" target="_blank">31/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-313derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/3: брус улучшенный, 4 места / свободен" class="hs31-3" target="_blank">31/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-314-derevyannyj-uluchshennyj/" title="Домик 31/4: деревянный улучшенный, 4 места / свободен" class="hs31-4" target="_blank">31/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-315-derevyannyj-4-mesta/" title="Домик 31/5: брус улучшенный, 4 места / свободен" class="hs31-5" target="_blank">31/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-37a-kirpichnyj-4-mesta/" title="Домик 37А: кирпичный, 4 места / свободен" class="hs37a" target="_blank">37а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-37b-kirpichnyj-4-mesta/" title="Домик 37Б: кирпичный, 4 места / свободен" class="hs37b" target="_blank">37б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-38-%e2%80%93-standartnyj-doshhatyj/" title="Домик 38: стандартный дощатый / свободен" class="hs38" target="_blank">38</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-39a-irpichnyj-4-mesta/" title="Домик 39А: кирпичный, 4 места / свободен" class="hs39a" target="_blank">39а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-39bkirpichnyj-4-mesta/" title="Домик 39Б: кирпичный, 4 места / свободен" class="hs39b" target="_blank">39б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-40-doshhatyj-4-mesta/" title="Домик 40: дощатый, ДСП, 4 места / свободен" class="hs40" target="_blank">40</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-261-derevyannyj-uluchshennyj-4-mesta/" title="Домик 26/1: брус улучшенный, 4 места / свободен" class="hs26-1" target="_blank">26/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-41doshhatyj-4-mesta/" title="Домик 41: дощатый, 4 места / свободен" class="hs41" target="_blank">41</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-42a-kirpichnyj-4-mesta/" title="Домик 42А: кирпичный, 4 места / свободен" class="hs42a" target="_blank">42а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-42b-kirpichnyj-4-mesta/" title="Домик 42Б: кирпичный, 4 места / свободен" class="hs42b" target="_blank">42б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-43-doshhatyj-4-mesta/" title="Домик 43: дощатый, ДСП, 4 места / свободен" class="hs43" target="_blank">43</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-44doshhatyj-4-mesta/" title="Домик 44: дощатый, ДСП, 4 места / свободен" class="hs44" target="_blank">44</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-45adoshhatyj-4-mesta/" title="Домик 45А: вагончик, дощатый, 4 места / свободен" class="hs45a" target="_blank">45а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-45b-doshhatyj-4-mesta/" title="Домик 45Б: вагончик, дощатый, 4 места / свободен" class="hs45b" target="_blank">45б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-46doshhatyj-4-mesta/" title="Домик 46: дощатый, 4 места / свободен" class="hs46" target="_blank">46</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-200a-derevyannyj-uluchshennyj-6-mest/" title="Домик 200А: деревянный улучшенный, 6 мест / свободен" class="hs200a" target="_blank">200а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-200bderevyannyj-uluchshennyj-6-mest/" title="Домик 200Б: деревянный улучшенный, 6 мест / свободен" class="hs200b" target="_blank">200б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-n-doshhatyj-5-mest/" title="Домик 109: дощатый, 5 мест / свободен" class="hs109" target="_blank">109</a>
                      </span>
                    </div>
                  </div>
                  <div style="height: 945px; width: 1820px; position: absolute; display: none; left: -396.898px; top: -475px;" class="z3">
                    <img src="/map/a04.jpg" alt="" style="width: 100%; position: absolute; left: 0px; top: 0px;">
                    <div class="map-layer-mask" style="position: absolute; left: 0px; top: 0px; background: white; opacity: 0;"></div>
                    <div class="mapcontent" style="position: absolute; top: 0px; left: 0px;">
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-973-doshhatyj-2-mesta/" title="Домик 97/3 - дощатый, 2 места / свободен" class="hs97-3" target="_blank">97/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-975-doshhatyj-2-mesta/" title="Домик 97/5 - дощатый, 2 места / свободен" class="hs97-5" target="_blank">97/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-962a-dsp-2-mesta/" title="Домик 96/2А: ДСП, 2 места / свободен" class="hs96-2a" target="_blank">96/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961biz-dsp-2-mesta/" title="Домик 96/2Б: ДСП, 2 места / свободен" class="hs96-2b" target="_blank">96/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-972-doshhatyj-2-mesta/" title="Домик 97/2 - дощатый, 2 места / свободен" class="hs97-2" target="_blank">97/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-971doshhatyj-2-mesta/" title="Домик 97/1:дощатый, 2 места / свободен" class="hs97-1" target="_blank">97/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961aiz-dsp-2-mesta/" title="Домик 96/1А: ДСП, 2 места / свободен" class="hs96-1a" target="_blank">96/1а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-961b-dsp-2-mesta/" title="Домик 96/1Б: ДСП, 2 места / свободен" class="hs96-1b" target="_blank">96/1б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-974doshhatyj-2-mesta/" title="Домик 97/4: дощатый, 2 места / свободен" class="hs97-4" target="_blank">97/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963a-dsp-2-mesta/" title="Домик 96/3А: вагончик, ДСП, 2 места / свободен" class="hs96-3a" target="_blank">96/3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963b-dsp-2-mesta/" title="Домик 96/3Б: вагончик, ДСП, 2 места / свободен" class="hs96-3b" target="_blank">96/3б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-97doshhatyj-5-mest/" title="Домик 97: дощатый, ДСП, 5 мест / свободен" class="hs97" target="_blank">97</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-98doshhatyj-4-mesta/" title="Домик 98: дощатый, ДСП, 4 места / свободен" class="hs98" target="_blank">98</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-96iz-brusa-6-mest/" title="Домик 96: дощатый, ДСП, брус, 6 мест / свободен" class="hs96" target="_blank">96</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-99a-doshhatyj-4-mesta/" title="Домик 99А: дощатый, 4 места / свободен" class="hs99a" target="_blank">99а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-99b-doshhatyj-5-mest/" title="Домик 99Б: дощатый, 5 мест / свободен" class="hs99b" target="_blank">99б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1021iz-dsp-4-mesta/" title="Домик 102/1: дощатый, ДСП, 4 места / свободен" class="hs102-1" target="_blank">102/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-103-dsp-3-mesta/" title="Домик 103: дощатый, ДСП, 3 места / свободен" class="hs103" target="_blank">103</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-104iz-dsp-3-mesta/" title="Домик 104: дощатый, ДСП, 3 места / свободен" class="hs104" target="_blank">104</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-102-iz-dsp-3-mesta/" title="Домик 102: дощатый, ДСП, 3 места / свободен" class="hs102" target="_blank">102</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-100-dsp-4-mesta/" title="Домик 100: дощатый, ДСП, 4 места / свободен" class="hs100" target="_blank">100</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-105-dsp-3-mesta/" title="Домик 105: дощатый, ДСП, 3 места / свободен" class="hs105" target="_blank">105</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-106-dsp-5-mest/" title="Домик 106: дощатый, ДСП, 5 мест / свободен" class="hs106" target="_blank">106</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-107iz-dsp-3-mesta/" title="Домик 107: дощатый, ДСП, 3 места / свободен" class="hs107" target="_blank">107</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1051iz-dsp-3-mesta/" title="Домик 105/1: дощатый, ДСП, 3 места / свободен" class="hs105-1" target="_blank">105/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052a-dsp-4-mesta/" title="Домик 105/2А: ДСП, 4 места / свободен" class="hs105-2a" target="_blank">105/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052b-dsp-5-mest/" title="Домик 105/2Б: ДСП, 5 мест / свободен" class="hs105-2b" target="_blank">105/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-95-dsp-4-mesta/" title="Домик 95: дощатый, ДСП, 4 места / свободен" class="hs95" target="_blank">95</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-901iz-dsp-4-mesta/" title="Домик 90/1: дощатый, ДСП, 4 места / свободен" class="hs90-1" target="_blank">90/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-b-kirpichnyj-4-mesta/" title="Домик 108Б: кирпичный, 4 места / свободен" class="hs108b" target="_blank">108б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-a-kirpichnyj-4-mesta/" title="Домик 108А: кирпичный, 4 места / свободен" class="hs108a" target="_blank">108а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-922uluchshennyj-iz-dsp-8-mest/" title="Домик 92/2: ДСП улучшенный, 8 мест / свободен" class="hs92-2" target="_blank">92/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-921-dsp-7-mest/" title="Домик 92/1: ДСП, 7 мест / свободен" class="hs92-1" target="_blank">92/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-924-iz-dsp-8-mest/" title="Домик 92/4: ДСП, 8 мест / свободен" class="hs92-4" target="_blank">92/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-923-dsp-8-mest/" title="Домик 92/3: фанерный, 6 мест / свободен" class="hs92-3" target="_blank">92/3</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-94kirpichnyj-3-mesta/" title="Домик 94: кирпичный, 3 места / занят" class="hs94" target="_blank">94</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92-kirpichnyj-3-mesta/" title="Домик 93: кирпичный, 3 места / свободен" class="hs93" target="_blank">93</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92a-kirpichnyj-4-mesta/" title="Домик 92А: кирпичный, 4 места / свободен" class="hs92a" target="_blank">92а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92b-kirpichnyj-4-mesta/" title="Домик 92Б: кирпичный, 4 места / свободен" class="hs92b" target="_blank">92б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-90-vagonchik-5-mest/" title="Домик 90: вагончик, 5 мест / свободен" class="hs90" target="_blank">90</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89a-kirpichnyj-4-mesta/" title="Домик 89А: кирпичный, 4 места / свободен" class="hs89a" target="_blank">89а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89b-kirpichnyj-4-mesta/" title="Домик 89Б: кирпичный, 4 места / свободен" class="hs89b" target="_blank">89б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-86dsp-3-mesta/" title="Домик 86: дощатый, ДСП, 3 места / занят" class="hs86" target="_blank">86</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-82doshhatyj-5-mest/" title="Домик 82: дощатый, 5 мест / свободен" class="hs82" target="_blank">82</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-81-doshhatyj-5-mest/" title="Домик 81: дощатый, 5 мест / свободен" class="hs81" target="_blank">81</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-83-doshhatyj-4-mesta/" title="Домик 83: дощатый, ДСП, 4 места / свободен" class="hs83" target="_blank">83</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-841doshhatyj-4-mesta/" title="Домик 84/1: дощатый, ДСП, 4 места / свободен" class="hs84-1" target="_blank">84/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-84a-doshhatyj-3-mesta/" title="Домик 84А: дощатый, 3 места / свободен" class="hs84a" target="_blank">84а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-84bdoshhatyj-3-mesta/" title="Домик 84Б: дощатый, 3 места / свободен" class="hs84b" target="_blank">84б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/31/domik-85-doshhatyj-5-mest/" title="Домик 85: дощатый, ДСП, 5 мест / занят" class="hs85" target="_blank">85</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-78-derevyannyj-4-mesta/" title="Домик 78: деревянный, 4 места / свободен" class="hs78" target="_blank">78</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-79-derevyannyj-4-mesta/" title="Домик 79: деревянный, 4 места / свободен" class="hs79" target="_blank">79</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-77elitnii-6-mest/" title="Домик 77: элитный, 6 мест / свободен" class="hs77" target="_blank">77</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/12/domik-76-2/" title="Домик 76: элитный, 6 мест / свободен" class="hs76" target="_blank">76</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-76-1/" title="Домик 76/1: элитный, 6 мест / свободен" class="hs76-1" target="_blank">76/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-762derevyannyj-elitnyj-3-mesta/" title="Домик 76/2: элитный, 3 места / свободен" class="hs76-2" target="_blank">76/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-781-derevyannyj-elitnyj/" title="Домик 75/1: элитный, 3 места / свободен" class="hs75-1" target="_blank">75/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-752-derevyannyj-elitnyj-2/" title="Домик 75/2: элитный, 3 места / свободен" class="hs75-2" target="_blank">75/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-75-elitnyj-derevyannyj/" title="Домик 75: элитный, 3 места / свободен" class="hs75" target="_blank">75</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-74-derevyannyj-4-mesta/" title="Домик 74: деревянный, 4 места / свободен" class="hs74" target="_blank">74</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-72elitnii-6-mest/" title="Домик 72: элитный, 6 мест / занят" class="hs72" target="_blank">72</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-711doshhatyj-3-mesta/" title="Домик 71/1: дощатый, ДСП, брус, 6 мест / свободен" class="hs71-1" target="_blank">71/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-71-derevyannyj-4-mesta/" title="Домик 71: деревянный, 4 места / свободен" class="hs71" target="_blank">71</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-792derevyannyj-4-mesta/" title="Домик 79/2: деревянный, 4 места / свободен" class="hs79-2" target="_blank">79/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-791derevyannyj-4-mesta/" title="Домик 79/1: деревянный, 4 места / свободен" class="hs79-1" target="_blank">79/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-80derevyannyj-6-mest/" title="Домик 80: дощатый, ДСП, брус, 6 мест / свободен" class="hs80" target="_blank">80</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-67-elitnii/" title="Домик 67: элитный, 3 места / свободен" class="hs67" target="_blank">67</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-68-elitnii/" title="Домик 68: элитный, 3 места / свободен" class="hs68" target="_blank">68</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70akirpichnyj-4-mesta/" title="Домик 70А: кирпичный, 4 места / свободен" class="hs70a" target="_blank">70а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70bkirpichnyj-4-mesta/" title="Домик 70Б: кирпичный, 4 места / свободен" class="hs70b" target="_blank">70б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-66a-kirpichnyj-4-mesta/" title="Домик 66А: кирпичный, 4 места / свободен" class="hs66a" target="_blank">66а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domiks-66b-kirpichnyj-4-mesta/" title="Домик 66Б - кирпичный, 4 места / свободен" class="hs66b" target="_blank">66б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-65doshhatyj-3-mesta/" title="Домик 65: дощатый, ДСП, 3 места / свободен" class="hs65" target="_blank">65</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-64doshhatyj-3-mesta/" title="Домик 64: дощатый, ДСП, 3 места / свободен" class="hs64" target="_blank">64</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62a-kirpichnyj-4-mesta/" title="Домик 63А - кирпичный, 4 места / свободен" class="hs63a" target="_blank">63а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-63bkirpichnyj-4-mesta/" title="Домик 63Б: кирпичный, 4 места / свободен" class="hs63b" target="_blank">63б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62-elitnii-3-mesta/" title="Домик 62: элитный, 3 места / свободен" class="hs62" target="_blank">62</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-61-elitnii-3-mesta/" title="Домик 61: элитный, 3 места / свободен" class="hs61" target="_blank">61</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-60-elitnii-3-mesta/" title="Домик 60: элитный, 3 места / свободен" class="hs60" target="_blank">60</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-59-elitnii-3-mesta/" title="Домик 59: элитный, 3 места / свободен" class="hs59" target="_blank">59</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-58/" title="Домик 58: элитный, 3 места / свободен" class="hs58" target="_blank">58</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-56doshhatyj-3-mesta/" title="Домик 56: дощатый, ДСП, 3 места / свободен" class="hs56" target="_blank">56</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-57a-kirpichnyj-4-mesta/" title="Домик 57А: кирпичный, 4 места / свободен" class="hs57a" target="_blank">57а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-57bkirpichnyj-4-mesta/" title="Домик 57Б: кирпичный, 4 места / свободен" class="hs57b" target="_blank">57б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-55a-kirpichnyj-4-mesta/" title="Домик 55А: кирпичный, 4 места / свободен" class="hs55a" target="_blank">55а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-55bkirpichnyj-4-mesta/" title="Домик 55Б: кирпичный, 4 места / свободен" class="hs55b" target="_blank">55б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-54elitnii-3-mesta/" title="Домик 54: элитный, 3 места / свободен" class="hs54" target="_blank">54</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-53elitnii-3-mesta/" title="Домик 53: элитный, 3 места / свободен" class="hs53" target="_blank">53</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-50doshhatyj-4-mesta/" title="Домик 50: дощатый, 4 места / свободен" class="hs50" target="_blank">50</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-51-elitnii-3/" title="Домик 51: элитный, 3 места / занят" class="hs51" target="_blank">51</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-49adoshhatyj-4-mesta/" title="Домик 49А: вагончик, дощатый, 4 места / свободен" class="hs49a" target="_blank">49а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-49b-doshhatyj-4-mesta/" title="Домик 49Б: вагончик, дощатый, 4 места / свободен" class="hs49b" target="_blank">49б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-47doshhatyj-4-mesta/" title="Домик 47: дощатый, 4 места / свободен" class="hs47" target="_blank">47</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-48-doshhatyj-4-mesta/" title="Домик 48: дощатый, 4 места / свободен" class="hs48" target="_blank">48</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52akirpichnyj-4-mesta/" title="Домик 52А: кирпичный благоустроенный, 4 места / свободен" class="hs52a" target="_blank">52а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52b-kirpichnyj-4-mesta/" title="Домик 52Б: кирпичный благоустроенный, 4 места / свободен" class="hs52b" target="_blank">52б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-51-doshhatyj-3-mesta/" title="Домик 51/1: фанерный, 6 мест / свободен" class="hs51-1" target="_blank">51/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-28a-kirpichnyj-4-mesta-2/" title="Домик 28А: кирпичный благоустроенный, 4 места / свободен" class="hs28a" target="_blank">28а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-28b-kirpichnyj-4-mesta/" title="Домик 28Б: кирпичный благоустроенный, 4 места / свободен" class="hs28b" target="_blank">28б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-27a-kirpichnyj-4-mesta/" title="Домик 27А: кирпичный благоустроенный, 4 места / свободен" class="hs27a" target="_blank">27а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-27b/" title="Домик 27Б: кирпичный благоустроенный, 4 места / свободен" class="hs27b" target="_blank">27б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/20/domik-26b-kirpichnyj-4-mesta-2/" title="Домик 26A: кирпичный благоустроенный, 4 места / свободен" class="hs26a" target="_blank">26а</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/14/domik-26b-kirpichnyj-4-mesta/" title="Домик 26Б: кирпичный благоустроенный, 4 места / занят" class="hs26b" target="_blank">26б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/16/domik-1-shhitovoj-4-x-mestnyj/" title="Домик 1: дощатый, 4 места / занят" class="hs1" target="_blank">1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/16/domik-2-doshhatyj-3-x-mestnyj/" title="Домик 2: дощатый, 3 места / свободен" class="hs2" target="_blank">2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3adoshhatyj-4-mesta/" title="Домик 3А: дощатый, 3 места / свободен" class="hs3a" target="_blank">3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3bdoshhatyj-4-mesta/" title="Домик 3Б: дощатый, 4 места / свободен" class="hs3b" target="_blank">3б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/29/domik-4doshhatyj-5mest/" title="Домик 4: дощатый, 5мест / занят" class="hs4" target="_blank">4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-5doshhatyj-3-mesta/" title="Домик 5: дощатый, 3 места / свободен" class="hs5" target="_blank">5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-6doshhatyj-6-mest/" title="Домик 6: дощатый, 6 мест / свободен" class="hs6" target="_blank">6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-7doshhatyj-4-mesta/" title="Домик 7: дощатый, 4 места / свободен" class="hs7" target="_blank">7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-8doshhatyj-4-mesta/" title="Домик 8: дощатый, 4 места / свободен" class="hs8" target="_blank">8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-9doshhatyj-5-mest/" title="Домик 9: дощатый, 5 мест / свободен" class="hs9" target="_blank">9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-10a-doshhatyj-4-mesta/" title="Домик 10А: дощатый, ДСП, 4 места / свободен" class="hs10a" target="_blank">10а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-10bdoshhatyj-4-mesta/" title="Домик 10Б: дощатый, ДСП, 4 места / свободен" class="hs10b" target="_blank">10б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-12doshhatyj-4-mesta/" title="Домик 12: дощатый, 4 места / свободен" class="hs12" target="_blank">12</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-14-doshhatyj-4-mesta/" title="Домик 14: дощатый, 4 места / свободен" class="hs14" target="_blank">14</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/12/domik-15-doshhatyj-5-mest/" title="Домик 15: дощатый, 5 мест / свободен" class="hs15" target="_blank">15</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-16doshhatyj-5-mest/" title="Домик 16: дощатый, 5 мест / свободен" class="hs16" target="_blank">16</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-17-doshhatyj-4-mesta/" title="Домик 17: дощатый, 4 места / свободен" class="hs17" target="_blank">17</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-18-elitnii-3-mesta/" title="Домик 18: элитный, 3 места / занят" class="hs18" target="_blank">18</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-19-doshhatyj-5-mest/" title="Домик 19: дощатый, 5 мест / свободен" class="hs19" target="_blank">19</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-20-doshhatyj-4-mesta/" title="Домик 20: дощатый, 4 места / свободен" class="hs20" target="_blank">20</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-21-doshhatyj-4-mesta/" title="Домик 21: дощатый, 4 места / свободен" class="hs21" target="_blank">21</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-22-elitnii-3-mesta/" title="Домик 22: элитный, 3 места / свободен" class="hs22" target="_blank">22</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-24-elitnii-3-mesta/" title="Домик 24: элитный, 3 места / занят" class="hs24" target="_blank">24</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-25-elitnii/" title="Домик 25: элитный, 3 места / свободен" class="hs25" target="_blank">25</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-21-novyj-elitnyj-4-mesta/" title="Домик 2/1: элитный 2-х этажный, 4 места / свободен" class="hs2-1" target="_blank">2/1</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/01/domik-22-novyj-elitnyj-4-mesta/" title="Домик 2/2: элитный 2-х этажный, 4 места / занят" class="hs2-2" target="_blank">2/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-3/" title="Домик 2/3: элитный, 6 мест / свободен" class="hs2-3" target="_blank">2/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-4/" title="Домик 2/4: элитный, 6 мест / свободен" class="hs2-4" target="_blank">2/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/04/10/domik-2-5/" title="Домик 2/5: элитный, 6 мест / свободен" class="hs2-5" target="_blank">2/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-19-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/9: элитный 2-х этажный, 4 места / свободен" class="hs1-9" target="_blank">1/9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-18-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/8: элитный 2-х этажный, 4 места / свободен" class="hs1-8" target="_blank">1/8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-11-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/1: элитный 2-х этажный, 4 места / свободен" class="hs1-1" target="_blank">1/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-12-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/2: элитный 2-х этажный, 4 места / свободен" class="hs1-2" target="_blank">1/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-13-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/3: элитный 2-х этажный, 4 места / свободен" class="hs1-3" target="_blank">1/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-14-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/4: элитный 2-х этажный, 4 места / свободен" class="hs1-4" target="_blank">1/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/15/domik-15-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/5: элитный 2-х этажный, 4 места / свободен" class="hs1-5" target="_blank">1/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-16-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/6: элитный 2-х этажный, 4 места / свободен" class="hs1-6" target="_blank">1/6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-17-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/7: элитный 2-х этажный, 4 места / свободен" class="hs1-7" target="_blank">1/7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-29avagonchik-3-mesta/" title="Домик 29А: вагончик, ДСП, 3 места / свободен" class="hs29a" target="_blank">29а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-29b-kirpichnyj-4-mesta/" title="Домик 29Б: вагончик, ДСП, 3 места / свободен" class="hs29b" target="_blank">29б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-30a/" title="Домик 30А: вагончик, дощатый, 4 места / свободен" class="hs30a" target="_blank">30а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-30bvagonchik-4-mesta/" title="Домик 30Б: вагончик, дощатый, 4 места / свободен" class="hs30b" target="_blank">30б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-31/" title="Домик 31: элитный, 6 мест / свободен" class="hs31" target="_blank">31</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33a-vagonchik-4-mesta/" title="Домик 33А: кирпичный, 4 места / свободен" class="hs33a" target="_blank">33а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33b-vagonchik-4-mesta/" title="Домик 33Б: кирпичный, 4 места / свободен" class="hs33b" target="_blank">33б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-35/" title="Домик 35: элитный, 3 места / свободен" class="hs35" target="_blank">35</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-312derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/2: брус улучшенный, 4 места / свободен" class="hs31-2" target="_blank">31/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-311-derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/1: брус улучшенный, 4 места / свободен" class="hs31-1" target="_blank">31/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-313derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/3: брус улучшенный, 4 места / свободен" class="hs31-3" target="_blank">31/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-314-derevyannyj-uluchshennyj/" title="Домик 31/4: деревянный улучшенный, 4 места / свободен" class="hs31-4" target="_blank">31/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-315-derevyannyj-4-mesta/" title="Домик 31/5: брус улучшенный, 4 места / свободен" class="hs31-5" target="_blank">31/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-37a-kirpichnyj-4-mesta/" title="Домик 37А: кирпичный, 4 места / свободен" class="hs37a" target="_blank">37а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-37b-kirpichnyj-4-mesta/" title="Домик 37Б: кирпичный, 4 места / свободен" class="hs37b" target="_blank">37б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-38-%e2%80%93-standartnyj-doshhatyj/" title="Домик 38: стандартный дощатый / свободен" class="hs38" target="_blank">38</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-39a-irpichnyj-4-mesta/" title="Домик 39А: кирпичный, 4 места / свободен" class="hs39a" target="_blank">39а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-39bkirpichnyj-4-mesta/" title="Домик 39Б: кирпичный, 4 места / свободен" class="hs39b" target="_blank">39б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-40-doshhatyj-4-mesta/" title="Домик 40: дощатый, ДСП, 4 места / свободен" class="hs40" target="_blank">40</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-261-derevyannyj-uluchshennyj-4-mesta/" title="Домик 26/1: брус улучшенный, 4 места / свободен" class="hs26-1" target="_blank">26/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-41doshhatyj-4-mesta/" title="Домик 41: дощатый, 4 места / свободен" class="hs41" target="_blank">41</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-42a-kirpichnyj-4-mesta/" title="Домик 42А: кирпичный, 4 места / свободен" class="hs42a" target="_blank">42а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-42b-kirpichnyj-4-mesta/" title="Домик 42Б: кирпичный, 4 места / свободен" class="hs42b" target="_blank">42б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-43-doshhatyj-4-mesta/" title="Домик 43: дощатый, ДСП, 4 места / свободен" class="hs43" target="_blank">43</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-44doshhatyj-4-mesta/" title="Домик 44: дощатый, ДСП, 4 места / свободен" class="hs44" target="_blank">44</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-45adoshhatyj-4-mesta/" title="Домик 45А: вагончик, дощатый, 4 места / свободен" class="hs45a" target="_blank">45а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-45b-doshhatyj-4-mesta/" title="Домик 45Б: вагончик, дощатый, 4 места / свободен" class="hs45b" target="_blank">45б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-46doshhatyj-4-mesta/" title="Домик 46: дощатый, 4 места / свободен" class="hs46" target="_blank">46</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-200a-derevyannyj-uluchshennyj-6-mest/" title="Домик 200А: деревянный улучшенный, 6 мест / свободен" class="hs200a" target="_blank">200а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-200bderevyannyj-uluchshennyj-6-mest/" title="Домик 200Б: деревянный улучшенный, 6 мест / свободен" class="hs200b" target="_blank">200б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-n-doshhatyj-5-mest/" title="Домик 109: дощатый, 5 мест / свободен" class="hs109" target="_blank">109</a>
                      </span>
                    </div>
                  </div>
                  <div style="height: 1184px; width: 2280px; position: absolute; display: none; left: -610.949px; top: -714px;" class="z4">
                    <img src="/map/a03.jpg" alt="" style="width: 100%; position: absolute; left: 0px; top: 0px;">
                    <div class="map-layer-mask" style="position: absolute; left: 0px; top: 0px; background: white; opacity: 0;"></div>
                    <div class="mapcontent" style="position: absolute; top: 0px; left: 0px;">
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-973-doshhatyj-2-mesta/" title="Домик 97/3 - дощатый, 2 места / свободен" class="hs97-3" target="_blank">97/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-975-doshhatyj-2-mesta/" title="Домик 97/5 - дощатый, 2 места / свободен" class="hs97-5" target="_blank">97/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-962a-dsp-2-mesta/" title="Домик 96/2А: ДСП, 2 места / свободен" class="hs96-2a" target="_blank">96/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961biz-dsp-2-mesta/" title="Домик 96/2Б: ДСП, 2 места / свободен" class="hs96-2b" target="_blank">96/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-972-doshhatyj-2-mesta/" title="Домик 97/2 - дощатый, 2 места / свободен" class="hs97-2" target="_blank">97/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-971doshhatyj-2-mesta/" title="Домик 97/1:дощатый, 2 места / свободен" class="hs97-1" target="_blank">97/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961aiz-dsp-2-mesta/" title="Домик 96/1А: ДСП, 2 места / свободен" class="hs96-1a" target="_blank">96/1а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-961b-dsp-2-mesta/" title="Домик 96/1Б: ДСП, 2 места / свободен" class="hs96-1b" target="_blank">96/1б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-974doshhatyj-2-mesta/" title="Домик 97/4: дощатый, 2 места / свободен" class="hs97-4" target="_blank">97/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963a-dsp-2-mesta/" title="Домик 96/3А: вагончик, ДСП, 2 места / свободен" class="hs96-3a" target="_blank">96/3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963b-dsp-2-mesta/" title="Домик 96/3Б: вагончик, ДСП, 2 места / свободен" class="hs96-3b" target="_blank">96/3б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-97doshhatyj-5-mest/" title="Домик 97: дощатый, ДСП, 5 мест / свободен" class="hs97" target="_blank">97</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-98doshhatyj-4-mesta/" title="Домик 98: дощатый, ДСП, 4 места / свободен" class="hs98" target="_blank">98</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-96iz-brusa-6-mest/" title="Домик 96: дощатый, ДСП, брус, 6 мест / свободен" class="hs96" target="_blank">96</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-99a-doshhatyj-4-mesta/" title="Домик 99А: дощатый, 4 места / свободен" class="hs99a" target="_blank">99а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-99b-doshhatyj-5-mest/" title="Домик 99Б: дощатый, 5 мест / свободен" class="hs99b" target="_blank">99б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1021iz-dsp-4-mesta/" title="Домик 102/1: дощатый, ДСП, 4 места / свободен" class="hs102-1" target="_blank">102/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-103-dsp-3-mesta/" title="Домик 103: дощатый, ДСП, 3 места / свободен" class="hs103" target="_blank">103</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-104iz-dsp-3-mesta/" title="Домик 104: дощатый, ДСП, 3 места / свободен" class="hs104" target="_blank">104</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-102-iz-dsp-3-mesta/" title="Домик 102: дощатый, ДСП, 3 места / свободен" class="hs102" target="_blank">102</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-100-dsp-4-mesta/" title="Домик 100: дощатый, ДСП, 4 места / свободен" class="hs100" target="_blank">100</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-105-dsp-3-mesta/" title="Домик 105: дощатый, ДСП, 3 места / свободен" class="hs105" target="_blank">105</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-106-dsp-5-mest/" title="Домик 106: дощатый, ДСП, 5 мест / свободен" class="hs106" target="_blank">106</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-107iz-dsp-3-mesta/" title="Домик 107: дощатый, ДСП, 3 места / свободен" class="hs107" target="_blank">107</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1051iz-dsp-3-mesta/" title="Домик 105/1: дощатый, ДСП, 3 места / свободен" class="hs105-1" target="_blank">105/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052a-dsp-4-mesta/" title="Домик 105/2А: ДСП, 4 места / свободен" class="hs105-2a" target="_blank">105/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052b-dsp-5-mest/" title="Домик 105/2Б: ДСП, 5 мест / свободен" class="hs105-2b" target="_blank">105/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-95-dsp-4-mesta/" title="Домик 95: дощатый, ДСП, 4 места / свободен" class="hs95" target="_blank">95</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-901iz-dsp-4-mesta/" title="Домик 90/1: дощатый, ДСП, 4 места / свободен" class="hs90-1" target="_blank">90/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-b-kirpichnyj-4-mesta/" title="Домик 108Б: кирпичный, 4 места / свободен" class="hs108b" target="_blank">108б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-a-kirpichnyj-4-mesta/" title="Домик 108А: кирпичный, 4 места / свободен" class="hs108a" target="_blank">108а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-922uluchshennyj-iz-dsp-8-mest/" title="Домик 92/2: ДСП улучшенный, 8 мест / свободен" class="hs92-2" target="_blank">92/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-921-dsp-7-mest/" title="Домик 92/1: ДСП, 7 мест / свободен" class="hs92-1" target="_blank">92/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-924-iz-dsp-8-mest/" title="Домик 92/4: ДСП, 8 мест / свободен" class="hs92-4" target="_blank">92/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-923-dsp-8-mest/" title="Домик 92/3: фанерный, 6 мест / свободен" class="hs92-3" target="_blank">92/3</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-94kirpichnyj-3-mesta/" title="Домик 94: кирпичный, 3 места / занят" class="hs94" target="_blank">94</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92-kirpichnyj-3-mesta/" title="Домик 93: кирпичный, 3 места / свободен" class="hs93" target="_blank">93</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92a-kirpichnyj-4-mesta/" title="Домик 92А: кирпичный, 4 места / свободен" class="hs92a" target="_blank">92а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92b-kirpichnyj-4-mesta/" title="Домик 92Б: кирпичный, 4 места / свободен" class="hs92b" target="_blank">92б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-90-vagonchik-5-mest/" title="Домик 90: вагончик, 5 мест / свободен" class="hs90" target="_blank">90</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89a-kirpichnyj-4-mesta/" title="Домик 89А: кирпичный, 4 места / свободен" class="hs89a" target="_blank">89а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89b-kirpichnyj-4-mesta/" title="Домик 89Б: кирпичный, 4 места / свободен" class="hs89b" target="_blank">89б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-86dsp-3-mesta/" title="Домик 86: дощатый, ДСП, 3 места / занят" class="hs86" target="_blank">86</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-82doshhatyj-5-mest/" title="Домик 82: дощатый, 5 мест / свободен" class="hs82" target="_blank">82</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-81-doshhatyj-5-mest/" title="Домик 81: дощатый, 5 мест / свободен" class="hs81" target="_blank">81</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-83-doshhatyj-4-mesta/" title="Домик 83: дощатый, ДСП, 4 места / свободен" class="hs83" target="_blank">83</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-841doshhatyj-4-mesta/" title="Домик 84/1: дощатый, ДСП, 4 места / свободен" class="hs84-1" target="_blank">84/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-84a-doshhatyj-3-mesta/" title="Домик 84А: дощатый, 3 места / свободен" class="hs84a" target="_blank">84а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-84bdoshhatyj-3-mesta/" title="Домик 84Б: дощатый, 3 места / свободен" class="hs84b" target="_blank">84б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/31/domik-85-doshhatyj-5-mest/" title="Домик 85: дощатый, ДСП, 5 мест / занят" class="hs85" target="_blank">85</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-78-derevyannyj-4-mesta/" title="Домик 78: деревянный, 4 места / свободен" class="hs78" target="_blank">78</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-79-derevyannyj-4-mesta/" title="Домик 79: деревянный, 4 места / свободен" class="hs79" target="_blank">79</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-77elitnii-6-mest/" title="Домик 77: элитный, 6 мест / свободен" class="hs77" target="_blank">77</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/12/domik-76-2/" title="Домик 76: элитный, 6 мест / свободен" class="hs76" target="_blank">76</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-76-1/" title="Домик 76/1: элитный, 6 мест / свободен" class="hs76-1" target="_blank">76/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-762derevyannyj-elitnyj-3-mesta/" title="Домик 76/2: элитный, 3 места / свободен" class="hs76-2" target="_blank">76/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-781-derevyannyj-elitnyj/" title="Домик 75/1: элитный, 3 места / свободен" class="hs75-1" target="_blank">75/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-752-derevyannyj-elitnyj-2/" title="Домик 75/2: элитный, 3 места / свободен" class="hs75-2" target="_blank">75/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-75-elitnyj-derevyannyj/" title="Домик 75: элитный, 3 места / свободен" class="hs75" target="_blank">75</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-74-derevyannyj-4-mesta/" title="Домик 74: деревянный, 4 места / свободен" class="hs74" target="_blank">74</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-72elitnii-6-mest/" title="Домик 72: элитный, 6 мест / занят" class="hs72" target="_blank">72</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-711doshhatyj-3-mesta/" title="Домик 71/1: дощатый, ДСП, брус, 6 мест / свободен" class="hs71-1" target="_blank">71/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-71-derevyannyj-4-mesta/" title="Домик 71: деревянный, 4 места / свободен" class="hs71" target="_blank">71</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-792derevyannyj-4-mesta/" title="Домик 79/2: деревянный, 4 места / свободен" class="hs79-2" target="_blank">79/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-791derevyannyj-4-mesta/" title="Домик 79/1: деревянный, 4 места / свободен" class="hs79-1" target="_blank">79/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-80derevyannyj-6-mest/" title="Домик 80: дощатый, ДСП, брус, 6 мест / свободен" class="hs80" target="_blank">80</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-67-elitnii/" title="Домик 67: элитный, 3 места / свободен" class="hs67" target="_blank">67</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-68-elitnii/" title="Домик 68: элитный, 3 места / свободен" class="hs68" target="_blank">68</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70akirpichnyj-4-mesta/" title="Домик 70А: кирпичный, 4 места / свободен" class="hs70a" target="_blank">70а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70bkirpichnyj-4-mesta/" title="Домик 70Б: кирпичный, 4 места / свободен" class="hs70b" target="_blank">70б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-66a-kirpichnyj-4-mesta/" title="Домик 66А: кирпичный, 4 места / свободен" class="hs66a" target="_blank">66а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domiks-66b-kirpichnyj-4-mesta/" title="Домик 66Б - кирпичный, 4 места / свободен" class="hs66b" target="_blank">66б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-65doshhatyj-3-mesta/" title="Домик 65: дощатый, ДСП, 3 места / свободен" class="hs65" target="_blank">65</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-64doshhatyj-3-mesta/" title="Домик 64: дощатый, ДСП, 3 места / свободен" class="hs64" target="_blank">64</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62a-kirpichnyj-4-mesta/" title="Домик 63А - кирпичный, 4 места / свободен" class="hs63a" target="_blank">63а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-63bkirpichnyj-4-mesta/" title="Домик 63Б: кирпичный, 4 места / свободен" class="hs63b" target="_blank">63б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62-elitnii-3-mesta/" title="Домик 62: элитный, 3 места / свободен" class="hs62" target="_blank">62</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-61-elitnii-3-mesta/" title="Домик 61: элитный, 3 места / свободен" class="hs61" target="_blank">61</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-60-elitnii-3-mesta/" title="Домик 60: элитный, 3 места / свободен" class="hs60" target="_blank">60</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-59-elitnii-3-mesta/" title="Домик 59: элитный, 3 места / свободен" class="hs59" target="_blank">59</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-58/" title="Домик 58: элитный, 3 места / свободен" class="hs58" target="_blank">58</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-56doshhatyj-3-mesta/" title="Домик 56: дощатый, ДСП, 3 места / свободен" class="hs56" target="_blank">56</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-57a-kirpichnyj-4-mesta/" title="Домик 57А: кирпичный, 4 места / свободен" class="hs57a" target="_blank">57а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-57bkirpichnyj-4-mesta/" title="Домик 57Б: кирпичный, 4 места / свободен" class="hs57b" target="_blank">57б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-55a-kirpichnyj-4-mesta/" title="Домик 55А: кирпичный, 4 места / свободен" class="hs55a" target="_blank">55а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-55bkirpichnyj-4-mesta/" title="Домик 55Б: кирпичный, 4 места / свободен" class="hs55b" target="_blank">55б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-54elitnii-3-mesta/" title="Домик 54: элитный, 3 места / свободен" class="hs54" target="_blank">54</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-53elitnii-3-mesta/" title="Домик 53: элитный, 3 места / свободен" class="hs53" target="_blank">53</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-50doshhatyj-4-mesta/" title="Домик 50: дощатый, 4 места / свободен" class="hs50" target="_blank">50</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-51-elitnii-3/" title="Домик 51: элитный, 3 места / занят" class="hs51" target="_blank">51</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-49adoshhatyj-4-mesta/" title="Домик 49А: вагончик, дощатый, 4 места / свободен" class="hs49a" target="_blank">49а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-49b-doshhatyj-4-mesta/" title="Домик 49Б: вагончик, дощатый, 4 места / свободен" class="hs49b" target="_blank">49б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-47doshhatyj-4-mesta/" title="Домик 47: дощатый, 4 места / свободен" class="hs47" target="_blank">47</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-48-doshhatyj-4-mesta/" title="Домик 48: дощатый, 4 места / свободен" class="hs48" target="_blank">48</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52akirpichnyj-4-mesta/" title="Домик 52А: кирпичный благоустроенный, 4 места / свободен" class="hs52a" target="_blank">52а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52b-kirpichnyj-4-mesta/" title="Домик 52Б: кирпичный благоустроенный, 4 места / свободен" class="hs52b" target="_blank">52б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-51-doshhatyj-3-mesta/" title="Домик 51/1: фанерный, 6 мест / свободен" class="hs51-1" target="_blank">51/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-28a-kirpichnyj-4-mesta-2/" title="Домик 28А: кирпичный благоустроенный, 4 места / свободен" class="hs28a" target="_blank">28а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-28b-kirpichnyj-4-mesta/" title="Домик 28Б: кирпичный благоустроенный, 4 места / свободен" class="hs28b" target="_blank">28б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-27a-kirpichnyj-4-mesta/" title="Домик 27А: кирпичный благоустроенный, 4 места / свободен" class="hs27a" target="_blank">27а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-27b/" title="Домик 27Б: кирпичный благоустроенный, 4 места / свободен" class="hs27b" target="_blank">27б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/20/domik-26b-kirpichnyj-4-mesta-2/" title="Домик 26A: кирпичный благоустроенный, 4 места / свободен" class="hs26a" target="_blank">26а</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/14/domik-26b-kirpichnyj-4-mesta/" title="Домик 26Б: кирпичный благоустроенный, 4 места / занят" class="hs26b" target="_blank">26б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/16/domik-1-shhitovoj-4-x-mestnyj/" title="Домик 1: дощатый, 4 места / занят" class="hs1" target="_blank">1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/16/domik-2-doshhatyj-3-x-mestnyj/" title="Домик 2: дощатый, 3 места / свободен" class="hs2" target="_blank">2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3adoshhatyj-4-mesta/" title="Домик 3А: дощатый, 3 места / свободен" class="hs3a" target="_blank">3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3bdoshhatyj-4-mesta/" title="Домик 3Б: дощатый, 4 места / свободен" class="hs3b" target="_blank">3б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/29/domik-4doshhatyj-5mest/" title="Домик 4: дощатый, 5мест / занят" class="hs4" target="_blank">4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-5doshhatyj-3-mesta/" title="Домик 5: дощатый, 3 места / свободен" class="hs5" target="_blank">5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-6doshhatyj-6-mest/" title="Домик 6: дощатый, 6 мест / свободен" class="hs6" target="_blank">6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-7doshhatyj-4-mesta/" title="Домик 7: дощатый, 4 места / свободен" class="hs7" target="_blank">7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-8doshhatyj-4-mesta/" title="Домик 8: дощатый, 4 места / свободен" class="hs8" target="_blank">8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-9doshhatyj-5-mest/" title="Домик 9: дощатый, 5 мест / свободен" class="hs9" target="_blank">9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-10a-doshhatyj-4-mesta/" title="Домик 10А: дощатый, ДСП, 4 места / свободен" class="hs10a" target="_blank">10а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-10bdoshhatyj-4-mesta/" title="Домик 10Б: дощатый, ДСП, 4 места / свободен" class="hs10b" target="_blank">10б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-12doshhatyj-4-mesta/" title="Домик 12: дощатый, 4 места / свободен" class="hs12" target="_blank">12</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-14-doshhatyj-4-mesta/" title="Домик 14: дощатый, 4 места / свободен" class="hs14" target="_blank">14</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/12/domik-15-doshhatyj-5-mest/" title="Домик 15: дощатый, 5 мест / свободен" class="hs15" target="_blank">15</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-16doshhatyj-5-mest/" title="Домик 16: дощатый, 5 мест / свободен" class="hs16" target="_blank">16</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-17-doshhatyj-4-mesta/" title="Домик 17: дощатый, 4 места / свободен" class="hs17" target="_blank">17</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-18-elitnii-3-mesta/" title="Домик 18: элитный, 3 места / занят" class="hs18" target="_blank">18</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-19-doshhatyj-5-mest/" title="Домик 19: дощатый, 5 мест / свободен" class="hs19" target="_blank">19</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-20-doshhatyj-4-mesta/" title="Домик 20: дощатый, 4 места / свободен" class="hs20" target="_blank">20</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-21-doshhatyj-4-mesta/" title="Домик 21: дощатый, 4 места / свободен" class="hs21" target="_blank">21</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-22-elitnii-3-mesta/" title="Домик 22: элитный, 3 места / свободен" class="hs22" target="_blank">22</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-24-elitnii-3-mesta/" title="Домик 24: элитный, 3 места / занят" class="hs24" target="_blank">24</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-25-elitnii/" title="Домик 25: элитный, 3 места / свободен" class="hs25" target="_blank">25</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-21-novyj-elitnyj-4-mesta/" title="Домик 2/1: элитный 2-х этажный, 4 места / свободен" class="hs2-1" target="_blank">2/1</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/01/domik-22-novyj-elitnyj-4-mesta/" title="Домик 2/2: элитный 2-х этажный, 4 места / занят" class="hs2-2" target="_blank">2/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-3/" title="Домик 2/3: элитный, 6 мест / свободен" class="hs2-3" target="_blank">2/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-4/" title="Домик 2/4: элитный, 6 мест / свободен" class="hs2-4" target="_blank">2/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/04/10/domik-2-5/" title="Домик 2/5: элитный, 6 мест / свободен" class="hs2-5" target="_blank">2/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-19-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/9: элитный 2-х этажный, 4 места / свободен" class="hs1-9" target="_blank">1/9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-18-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/8: элитный 2-х этажный, 4 места / свободен" class="hs1-8" target="_blank">1/8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-11-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/1: элитный 2-х этажный, 4 места / свободен" class="hs1-1" target="_blank">1/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-12-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/2: элитный 2-х этажный, 4 места / свободен" class="hs1-2" target="_blank">1/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-13-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/3: элитный 2-х этажный, 4 места / свободен" class="hs1-3" target="_blank">1/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-14-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/4: элитный 2-х этажный, 4 места / свободен" class="hs1-4" target="_blank">1/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/15/domik-15-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/5: элитный 2-х этажный, 4 места / свободен" class="hs1-5" target="_blank">1/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-16-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/6: элитный 2-х этажный, 4 места / свободен" class="hs1-6" target="_blank">1/6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-17-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/7: элитный 2-х этажный, 4 места / свободен" class="hs1-7" target="_blank">1/7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-29avagonchik-3-mesta/" title="Домик 29А: вагончик, ДСП, 3 места / свободен" class="hs29a" target="_blank">29а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-29b-kirpichnyj-4-mesta/" title="Домик 29Б: вагончик, ДСП, 3 места / свободен" class="hs29b" target="_blank">29б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-30a/" title="Домик 30А: вагончик, дощатый, 4 места / свободен" class="hs30a" target="_blank">30а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-30bvagonchik-4-mesta/" title="Домик 30Б: вагончик, дощатый, 4 места / свободен" class="hs30b" target="_blank">30б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-31/" title="Домик 31: элитный, 6 мест / свободен" class="hs31" target="_blank">31</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33a-vagonchik-4-mesta/" title="Домик 33А: кирпичный, 4 места / свободен" class="hs33a" target="_blank">33а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33b-vagonchik-4-mesta/" title="Домик 33Б: кирпичный, 4 места / свободен" class="hs33b" target="_blank">33б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-35/" title="Домик 35: элитный, 3 места / свободен" class="hs35" target="_blank">35</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-312derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/2: брус улучшенный, 4 места / свободен" class="hs31-2" target="_blank">31/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-311-derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/1: брус улучшенный, 4 места / свободен" class="hs31-1" target="_blank">31/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-313derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/3: брус улучшенный, 4 места / свободен" class="hs31-3" target="_blank">31/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-314-derevyannyj-uluchshennyj/" title="Домик 31/4: деревянный улучшенный, 4 места / свободен" class="hs31-4" target="_blank">31/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-315-derevyannyj-4-mesta/" title="Домик 31/5: брус улучшенный, 4 места / свободен" class="hs31-5" target="_blank">31/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-37a-kirpichnyj-4-mesta/" title="Домик 37А: кирпичный, 4 места / свободен" class="hs37a" target="_blank">37а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-37b-kirpichnyj-4-mesta/" title="Домик 37Б: кирпичный, 4 места / свободен" class="hs37b" target="_blank">37б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-38-%e2%80%93-standartnyj-doshhatyj/" title="Домик 38: стандартный дощатый / свободен" class="hs38" target="_blank">38</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-39a-irpichnyj-4-mesta/" title="Домик 39А: кирпичный, 4 места / свободен" class="hs39a" target="_blank">39а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-39bkirpichnyj-4-mesta/" title="Домик 39Б: кирпичный, 4 места / свободен" class="hs39b" target="_blank">39б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-40-doshhatyj-4-mesta/" title="Домик 40: дощатый, ДСП, 4 места / свободен" class="hs40" target="_blank">40</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-261-derevyannyj-uluchshennyj-4-mesta/" title="Домик 26/1: брус улучшенный, 4 места / свободен" class="hs26-1" target="_blank">26/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-41doshhatyj-4-mesta/" title="Домик 41: дощатый, 4 места / свободен" class="hs41" target="_blank">41</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-42a-kirpichnyj-4-mesta/" title="Домик 42А: кирпичный, 4 места / свободен" class="hs42a" target="_blank">42а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-42b-kirpichnyj-4-mesta/" title="Домик 42Б: кирпичный, 4 места / свободен" class="hs42b" target="_blank">42б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-43-doshhatyj-4-mesta/" title="Домик 43: дощатый, ДСП, 4 места / свободен" class="hs43" target="_blank">43</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-44doshhatyj-4-mesta/" title="Домик 44: дощатый, ДСП, 4 места / свободен" class="hs44" target="_blank">44</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-45adoshhatyj-4-mesta/" title="Домик 45А: вагончик, дощатый, 4 места / свободен" class="hs45a" target="_blank">45а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-45b-doshhatyj-4-mesta/" title="Домик 45Б: вагончик, дощатый, 4 места / свободен" class="hs45b" target="_blank">45б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-46doshhatyj-4-mesta/" title="Домик 46: дощатый, 4 места / свободен" class="hs46" target="_blank">46</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-200a-derevyannyj-uluchshennyj-6-mest/" title="Домик 200А: деревянный улучшенный, 6 мест / свободен" class="hs200a" target="_blank">200а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-200bderevyannyj-uluchshennyj-6-mest/" title="Домик 200Б: деревянный улучшенный, 6 мест / свободен" class="hs200b" target="_blank">200б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-n-doshhatyj-5-mest/" title="Домик 109: дощатый, 5 мест / свободен" class="hs109" target="_blank">109</a>
                      </span>
                    </div>
                  </div>
                  <div style="height: 1423px; width: 2740px; position: absolute; display: none; left: -825px; top: -953px;" class="z5">
                    <img src="/map/a02.jpg" alt="" style="width: 100%; position: absolute; left: 0px; top: 0px;">
                    <div class="map-layer-mask" style="position: absolute; left: 0px; top: 0px; background: white; opacity: 0;"></div>
                    <div class="mapcontent" style="position: absolute; top: 0px; left: 0px;">
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-973-doshhatyj-2-mesta/" title="Домик 97/3 - дощатый, 2 места / свободен" class="hs97-3" target="_blank">97/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-975-doshhatyj-2-mesta/" title="Домик 97/5 - дощатый, 2 места / свободен" class="hs97-5" target="_blank">97/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-962a-dsp-2-mesta/" title="Домик 96/2А: ДСП, 2 места / свободен" class="hs96-2a" target="_blank">96/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961biz-dsp-2-mesta/" title="Домик 96/2Б: ДСП, 2 места / свободен" class="hs96-2b" target="_blank">96/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-972-doshhatyj-2-mesta/" title="Домик 97/2 - дощатый, 2 места / свободен" class="hs97-2" target="_blank">97/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-971doshhatyj-2-mesta/" title="Домик 97/1:дощатый, 2 места / свободен" class="hs97-1" target="_blank">97/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961aiz-dsp-2-mesta/" title="Домик 96/1А: ДСП, 2 места / свободен" class="hs96-1a" target="_blank">96/1а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-961b-dsp-2-mesta/" title="Домик 96/1Б: ДСП, 2 места / свободен" class="hs96-1b" target="_blank">96/1б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-974doshhatyj-2-mesta/" title="Домик 97/4: дощатый, 2 места / свободен" class="hs97-4" target="_blank">97/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963a-dsp-2-mesta/" title="Домик 96/3А: вагончик, ДСП, 2 места / свободен" class="hs96-3a" target="_blank">96/3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963b-dsp-2-mesta/" title="Домик 96/3Б: вагончик, ДСП, 2 места / свободен" class="hs96-3b" target="_blank">96/3б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-97doshhatyj-5-mest/" title="Домик 97: дощатый, ДСП, 5 мест / свободен" class="hs97" target="_blank">97</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-98doshhatyj-4-mesta/" title="Домик 98: дощатый, ДСП, 4 места / свободен" class="hs98" target="_blank">98</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-96iz-brusa-6-mest/" title="Домик 96: дощатый, ДСП, брус, 6 мест / свободен" class="hs96" target="_blank">96</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-99a-doshhatyj-4-mesta/" title="Домик 99А: дощатый, 4 места / свободен" class="hs99a" target="_blank">99а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-99b-doshhatyj-5-mest/" title="Домик 99Б: дощатый, 5 мест / свободен" class="hs99b" target="_blank">99б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1021iz-dsp-4-mesta/" title="Домик 102/1: дощатый, ДСП, 4 места / свободен" class="hs102-1" target="_blank">102/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-103-dsp-3-mesta/" title="Домик 103: дощатый, ДСП, 3 места / свободен" class="hs103" target="_blank">103</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-104iz-dsp-3-mesta/" title="Домик 104: дощатый, ДСП, 3 места / свободен" class="hs104" target="_blank">104</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-102-iz-dsp-3-mesta/" title="Домик 102: дощатый, ДСП, 3 места / свободен" class="hs102" target="_blank">102</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-100-dsp-4-mesta/" title="Домик 100: дощатый, ДСП, 4 места / свободен" class="hs100" target="_blank">100</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-105-dsp-3-mesta/" title="Домик 105: дощатый, ДСП, 3 места / свободен" class="hs105" target="_blank">105</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-106-dsp-5-mest/" title="Домик 106: дощатый, ДСП, 5 мест / свободен" class="hs106" target="_blank">106</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-107iz-dsp-3-mesta/" title="Домик 107: дощатый, ДСП, 3 места / свободен" class="hs107" target="_blank">107</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1051iz-dsp-3-mesta/" title="Домик 105/1: дощатый, ДСП, 3 места / свободен" class="hs105-1" target="_blank">105/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052a-dsp-4-mesta/" title="Домик 105/2А: ДСП, 4 места / свободен" class="hs105-2a" target="_blank">105/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052b-dsp-5-mest/" title="Домик 105/2Б: ДСП, 5 мест / свободен" class="hs105-2b" target="_blank">105/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-95-dsp-4-mesta/" title="Домик 95: дощатый, ДСП, 4 места / свободен" class="hs95" target="_blank">95</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-901iz-dsp-4-mesta/" title="Домик 90/1: дощатый, ДСП, 4 места / свободен" class="hs90-1" target="_blank">90/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-b-kirpichnyj-4-mesta/" title="Домик 108Б: кирпичный, 4 места / свободен" class="hs108b" target="_blank">108б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-a-kirpichnyj-4-mesta/" title="Домик 108А: кирпичный, 4 места / свободен" class="hs108a" target="_blank">108а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-922uluchshennyj-iz-dsp-8-mest/" title="Домик 92/2: ДСП улучшенный, 8 мест / свободен" class="hs92-2" target="_blank">92/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-921-dsp-7-mest/" title="Домик 92/1: ДСП, 7 мест / свободен" class="hs92-1" target="_blank">92/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-924-iz-dsp-8-mest/" title="Домик 92/4: ДСП, 8 мест / свободен" class="hs92-4" target="_blank">92/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-923-dsp-8-mest/" title="Домик 92/3: фанерный, 6 мест / свободен" class="hs92-3" target="_blank">92/3</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-94kirpichnyj-3-mesta/" title="Домик 94: кирпичный, 3 места / занят" class="hs94" target="_blank">94</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92-kirpichnyj-3-mesta/" title="Домик 93: кирпичный, 3 места / свободен" class="hs93" target="_blank">93</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92a-kirpichnyj-4-mesta/" title="Домик 92А: кирпичный, 4 места / свободен" class="hs92a" target="_blank">92а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92b-kirpichnyj-4-mesta/" title="Домик 92Б: кирпичный, 4 места / свободен" class="hs92b" target="_blank">92б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-90-vagonchik-5-mest/" title="Домик 90: вагончик, 5 мест / свободен" class="hs90" target="_blank">90</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89a-kirpichnyj-4-mesta/" title="Домик 89А: кирпичный, 4 места / свободен" class="hs89a" target="_blank">89а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89b-kirpichnyj-4-mesta/" title="Домик 89Б: кирпичный, 4 места / свободен" class="hs89b" target="_blank">89б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-86dsp-3-mesta/" title="Домик 86: дощатый, ДСП, 3 места / занят" class="hs86" target="_blank">86</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-82doshhatyj-5-mest/" title="Домик 82: дощатый, 5 мест / свободен" class="hs82" target="_blank">82</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-81-doshhatyj-5-mest/" title="Домик 81: дощатый, 5 мест / свободен" class="hs81" target="_blank">81</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-83-doshhatyj-4-mesta/" title="Домик 83: дощатый, ДСП, 4 места / свободен" class="hs83" target="_blank">83</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-841doshhatyj-4-mesta/" title="Домик 84/1: дощатый, ДСП, 4 места / свободен" class="hs84-1" target="_blank">84/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-84a-doshhatyj-3-mesta/" title="Домик 84А: дощатый, 3 места / свободен" class="hs84a" target="_blank">84а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-84bdoshhatyj-3-mesta/" title="Домик 84Б: дощатый, 3 места / свободен" class="hs84b" target="_blank">84б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/31/domik-85-doshhatyj-5-mest/" title="Домик 85: дощатый, ДСП, 5 мест / занят" class="hs85" target="_blank">85</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-78-derevyannyj-4-mesta/" title="Домик 78: деревянный, 4 места / свободен" class="hs78" target="_blank">78</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-79-derevyannyj-4-mesta/" title="Домик 79: деревянный, 4 места / свободен" class="hs79" target="_blank">79</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-77elitnii-6-mest/" title="Домик 77: элитный, 6 мест / свободен" class="hs77" target="_blank">77</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/12/domik-76-2/" title="Домик 76: элитный, 6 мест / свободен" class="hs76" target="_blank">76</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-76-1/" title="Домик 76/1: элитный, 6 мест / свободен" class="hs76-1" target="_blank">76/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-762derevyannyj-elitnyj-3-mesta/" title="Домик 76/2: элитный, 3 места / свободен" class="hs76-2" target="_blank">76/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-781-derevyannyj-elitnyj/" title="Домик 75/1: элитный, 3 места / свободен" class="hs75-1" target="_blank">75/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-752-derevyannyj-elitnyj-2/" title="Домик 75/2: элитный, 3 места / свободен" class="hs75-2" target="_blank">75/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-75-elitnyj-derevyannyj/" title="Домик 75: элитный, 3 места / свободен" class="hs75" target="_blank">75</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-74-derevyannyj-4-mesta/" title="Домик 74: деревянный, 4 места / свободен" class="hs74" target="_blank">74</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-72elitnii-6-mest/" title="Домик 72: элитный, 6 мест / занят" class="hs72" target="_blank">72</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-711doshhatyj-3-mesta/" title="Домик 71/1: дощатый, ДСП, брус, 6 мест / свободен" class="hs71-1" target="_blank">71/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-71-derevyannyj-4-mesta/" title="Домик 71: деревянный, 4 места / свободен" class="hs71" target="_blank">71</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-792derevyannyj-4-mesta/" title="Домик 79/2: деревянный, 4 места / свободен" class="hs79-2" target="_blank">79/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-791derevyannyj-4-mesta/" title="Домик 79/1: деревянный, 4 места / свободен" class="hs79-1" target="_blank">79/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-80derevyannyj-6-mest/" title="Домик 80: дощатый, ДСП, брус, 6 мест / свободен" class="hs80" target="_blank">80</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-67-elitnii/" title="Домик 67: элитный, 3 места / свободен" class="hs67" target="_blank">67</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-68-elitnii/" title="Домик 68: элитный, 3 места / свободен" class="hs68" target="_blank">68</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70akirpichnyj-4-mesta/" title="Домик 70А: кирпичный, 4 места / свободен" class="hs70a" target="_blank">70а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70bkirpichnyj-4-mesta/" title="Домик 70Б: кирпичный, 4 места / свободен" class="hs70b" target="_blank">70б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-66a-kirpichnyj-4-mesta/" title="Домик 66А: кирпичный, 4 места / свободен" class="hs66a" target="_blank">66а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domiks-66b-kirpichnyj-4-mesta/" title="Домик 66Б - кирпичный, 4 места / свободен" class="hs66b" target="_blank">66б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-65doshhatyj-3-mesta/" title="Домик 65: дощатый, ДСП, 3 места / свободен" class="hs65" target="_blank">65</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-64doshhatyj-3-mesta/" title="Домик 64: дощатый, ДСП, 3 места / свободен" class="hs64" target="_blank">64</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62a-kirpichnyj-4-mesta/" title="Домик 63А - кирпичный, 4 места / свободен" class="hs63a" target="_blank">63а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-63bkirpichnyj-4-mesta/" title="Домик 63Б: кирпичный, 4 места / свободен" class="hs63b" target="_blank">63б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62-elitnii-3-mesta/" title="Домик 62: элитный, 3 места / свободен" class="hs62" target="_blank">62</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-61-elitnii-3-mesta/" title="Домик 61: элитный, 3 места / свободен" class="hs61" target="_blank">61</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-60-elitnii-3-mesta/" title="Домик 60: элитный, 3 места / свободен" class="hs60" target="_blank">60</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-59-elitnii-3-mesta/" title="Домик 59: элитный, 3 места / свободен" class="hs59" target="_blank">59</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-58/" title="Домик 58: элитный, 3 места / свободен" class="hs58" target="_blank">58</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-56doshhatyj-3-mesta/" title="Домик 56: дощатый, ДСП, 3 места / свободен" class="hs56" target="_blank">56</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-57a-kirpichnyj-4-mesta/" title="Домик 57А: кирпичный, 4 места / свободен" class="hs57a" target="_blank">57а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-57bkirpichnyj-4-mesta/" title="Домик 57Б: кирпичный, 4 места / свободен" class="hs57b" target="_blank">57б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-55a-kirpichnyj-4-mesta/" title="Домик 55А: кирпичный, 4 места / свободен" class="hs55a" target="_blank">55а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-55bkirpichnyj-4-mesta/" title="Домик 55Б: кирпичный, 4 места / свободен" class="hs55b" target="_blank">55б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-54elitnii-3-mesta/" title="Домик 54: элитный, 3 места / свободен" class="hs54" target="_blank">54</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-53elitnii-3-mesta/" title="Домик 53: элитный, 3 места / свободен" class="hs53" target="_blank">53</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-50doshhatyj-4-mesta/" title="Домик 50: дощатый, 4 места / свободен" class="hs50" target="_blank">50</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-51-elitnii-3/" title="Домик 51: элитный, 3 места / занят" class="hs51" target="_blank">51</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-49adoshhatyj-4-mesta/" title="Домик 49А: вагончик, дощатый, 4 места / свободен" class="hs49a" target="_blank">49а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-49b-doshhatyj-4-mesta/" title="Домик 49Б: вагончик, дощатый, 4 места / свободен" class="hs49b" target="_blank">49б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-47doshhatyj-4-mesta/" title="Домик 47: дощатый, 4 места / свободен" class="hs47" target="_blank">47</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-48-doshhatyj-4-mesta/" title="Домик 48: дощатый, 4 места / свободен" class="hs48" target="_blank">48</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52akirpichnyj-4-mesta/" title="Домик 52А: кирпичный благоустроенный, 4 места / свободен" class="hs52a" target="_blank">52а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52b-kirpichnyj-4-mesta/" title="Домик 52Б: кирпичный благоустроенный, 4 места / свободен" class="hs52b" target="_blank">52б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-51-doshhatyj-3-mesta/" title="Домик 51/1: фанерный, 6 мест / свободен" class="hs51-1" target="_blank">51/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-28a-kirpichnyj-4-mesta-2/" title="Домик 28А: кирпичный благоустроенный, 4 места / свободен" class="hs28a" target="_blank">28а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-28b-kirpichnyj-4-mesta/" title="Домик 28Б: кирпичный благоустроенный, 4 места / свободен" class="hs28b" target="_blank">28б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-27a-kirpichnyj-4-mesta/" title="Домик 27А: кирпичный благоустроенный, 4 места / свободен" class="hs27a" target="_blank">27а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-27b/" title="Домик 27Б: кирпичный благоустроенный, 4 места / свободен" class="hs27b" target="_blank">27б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/20/domik-26b-kirpichnyj-4-mesta-2/" title="Домик 26A: кирпичный благоустроенный, 4 места / свободен" class="hs26a" target="_blank">26а</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/14/domik-26b-kirpichnyj-4-mesta/" title="Домик 26Б: кирпичный благоустроенный, 4 места / занят" class="hs26b" target="_blank">26б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/16/domik-1-shhitovoj-4-x-mestnyj/" title="Домик 1: дощатый, 4 места / занят" class="hs1" target="_blank">1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/16/domik-2-doshhatyj-3-x-mestnyj/" title="Домик 2: дощатый, 3 места / свободен" class="hs2" target="_blank">2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3adoshhatyj-4-mesta/" title="Домик 3А: дощатый, 3 места / свободен" class="hs3a" target="_blank">3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3bdoshhatyj-4-mesta/" title="Домик 3Б: дощатый, 4 места / свободен" class="hs3b" target="_blank">3б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/29/domik-4doshhatyj-5mest/" title="Домик 4: дощатый, 5мест / занят" class="hs4" target="_blank">4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-5doshhatyj-3-mesta/" title="Домик 5: дощатый, 3 места / свободен" class="hs5" target="_blank">5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-6doshhatyj-6-mest/" title="Домик 6: дощатый, 6 мест / свободен" class="hs6" target="_blank">6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-7doshhatyj-4-mesta/" title="Домик 7: дощатый, 4 места / свободен" class="hs7" target="_blank">7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-8doshhatyj-4-mesta/" title="Домик 8: дощатый, 4 места / свободен" class="hs8" target="_blank">8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-9doshhatyj-5-mest/" title="Домик 9: дощатый, 5 мест / свободен" class="hs9" target="_blank">9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-10a-doshhatyj-4-mesta/" title="Домик 10А: дощатый, ДСП, 4 места / свободен" class="hs10a" target="_blank">10а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-10bdoshhatyj-4-mesta/" title="Домик 10Б: дощатый, ДСП, 4 места / свободен" class="hs10b" target="_blank">10б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-12doshhatyj-4-mesta/" title="Домик 12: дощатый, 4 места / свободен" class="hs12" target="_blank">12</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-14-doshhatyj-4-mesta/" title="Домик 14: дощатый, 4 места / свободен" class="hs14" target="_blank">14</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/12/domik-15-doshhatyj-5-mest/" title="Домик 15: дощатый, 5 мест / свободен" class="hs15" target="_blank">15</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-16doshhatyj-5-mest/" title="Домик 16: дощатый, 5 мест / свободен" class="hs16" target="_blank">16</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-17-doshhatyj-4-mesta/" title="Домик 17: дощатый, 4 места / свободен" class="hs17" target="_blank">17</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-18-elitnii-3-mesta/" title="Домик 18: элитный, 3 места / занят" class="hs18" target="_blank">18</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-19-doshhatyj-5-mest/" title="Домик 19: дощатый, 5 мест / свободен" class="hs19" target="_blank">19</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-20-doshhatyj-4-mesta/" title="Домик 20: дощатый, 4 места / свободен" class="hs20" target="_blank">20</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-21-doshhatyj-4-mesta/" title="Домик 21: дощатый, 4 места / свободен" class="hs21" target="_blank">21</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-22-elitnii-3-mesta/" title="Домик 22: элитный, 3 места / свободен" class="hs22" target="_blank">22</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-24-elitnii-3-mesta/" title="Домик 24: элитный, 3 места / занят" class="hs24" target="_blank">24</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-25-elitnii/" title="Домик 25: элитный, 3 места / свободен" class="hs25" target="_blank">25</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-21-novyj-elitnyj-4-mesta/" title="Домик 2/1: элитный 2-х этажный, 4 места / свободен" class="hs2-1" target="_blank">2/1</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/01/domik-22-novyj-elitnyj-4-mesta/" title="Домик 2/2: элитный 2-х этажный, 4 места / занят" class="hs2-2" target="_blank">2/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-3/" title="Домик 2/3: элитный, 6 мест / свободен" class="hs2-3" target="_blank">2/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-4/" title="Домик 2/4: элитный, 6 мест / свободен" class="hs2-4" target="_blank">2/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/04/10/domik-2-5/" title="Домик 2/5: элитный, 6 мест / свободен" class="hs2-5" target="_blank">2/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-19-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/9: элитный 2-х этажный, 4 места / свободен" class="hs1-9" target="_blank">1/9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-18-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/8: элитный 2-х этажный, 4 места / свободен" class="hs1-8" target="_blank">1/8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-11-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/1: элитный 2-х этажный, 4 места / свободен" class="hs1-1" target="_blank">1/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-12-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/2: элитный 2-х этажный, 4 места / свободен" class="hs1-2" target="_blank">1/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-13-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/3: элитный 2-х этажный, 4 места / свободен" class="hs1-3" target="_blank">1/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-14-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/4: элитный 2-х этажный, 4 места / свободен" class="hs1-4" target="_blank">1/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/15/domik-15-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/5: элитный 2-х этажный, 4 места / свободен" class="hs1-5" target="_blank">1/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-16-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/6: элитный 2-х этажный, 4 места / свободен" class="hs1-6" target="_blank">1/6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-17-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/7: элитный 2-х этажный, 4 места / свободен" class="hs1-7" target="_blank">1/7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-29avagonchik-3-mesta/" title="Домик 29А: вагончик, ДСП, 3 места / свободен" class="hs29a" target="_blank">29а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-29b-kirpichnyj-4-mesta/" title="Домик 29Б: вагончик, ДСП, 3 места / свободен" class="hs29b" target="_blank">29б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-30a/" title="Домик 30А: вагончик, дощатый, 4 места / свободен" class="hs30a" target="_blank">30а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-30bvagonchik-4-mesta/" title="Домик 30Б: вагончик, дощатый, 4 места / свободен" class="hs30b" target="_blank">30б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-31/" title="Домик 31: элитный, 6 мест / свободен" class="hs31" target="_blank">31</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33a-vagonchik-4-mesta/" title="Домик 33А: кирпичный, 4 места / свободен" class="hs33a" target="_blank">33а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33b-vagonchik-4-mesta/" title="Домик 33Б: кирпичный, 4 места / свободен" class="hs33b" target="_blank">33б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-35/" title="Домик 35: элитный, 3 места / свободен" class="hs35" target="_blank">35</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-312derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/2: брус улучшенный, 4 места / свободен" class="hs31-2" target="_blank">31/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-311-derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/1: брус улучшенный, 4 места / свободен" class="hs31-1" target="_blank">31/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-313derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/3: брус улучшенный, 4 места / свободен" class="hs31-3" target="_blank">31/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-314-derevyannyj-uluchshennyj/" title="Домик 31/4: деревянный улучшенный, 4 места / свободен" class="hs31-4" target="_blank">31/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-315-derevyannyj-4-mesta/" title="Домик 31/5: брус улучшенный, 4 места / свободен" class="hs31-5" target="_blank">31/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-37a-kirpichnyj-4-mesta/" title="Домик 37А: кирпичный, 4 места / свободен" class="hs37a" target="_blank">37а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-37b-kirpichnyj-4-mesta/" title="Домик 37Б: кирпичный, 4 места / свободен" class="hs37b" target="_blank">37б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-38-%e2%80%93-standartnyj-doshhatyj/" title="Домик 38: стандартный дощатый / свободен" class="hs38" target="_blank">38</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-39a-irpichnyj-4-mesta/" title="Домик 39А: кирпичный, 4 места / свободен" class="hs39a" target="_blank">39а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-39bkirpichnyj-4-mesta/" title="Домик 39Б: кирпичный, 4 места / свободен" class="hs39b" target="_blank">39б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-40-doshhatyj-4-mesta/" title="Домик 40: дощатый, ДСП, 4 места / свободен" class="hs40" target="_blank">40</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-261-derevyannyj-uluchshennyj-4-mesta/" title="Домик 26/1: брус улучшенный, 4 места / свободен" class="hs26-1" target="_blank">26/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-41doshhatyj-4-mesta/" title="Домик 41: дощатый, 4 места / свободен" class="hs41" target="_blank">41</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-42a-kirpichnyj-4-mesta/" title="Домик 42А: кирпичный, 4 места / свободен" class="hs42a" target="_blank">42а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-42b-kirpichnyj-4-mesta/" title="Домик 42Б: кирпичный, 4 места / свободен" class="hs42b" target="_blank">42б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-43-doshhatyj-4-mesta/" title="Домик 43: дощатый, ДСП, 4 места / свободен" class="hs43" target="_blank">43</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-44doshhatyj-4-mesta/" title="Домик 44: дощатый, ДСП, 4 места / свободен" class="hs44" target="_blank">44</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-45adoshhatyj-4-mesta/" title="Домик 45А: вагончик, дощатый, 4 места / свободен" class="hs45a" target="_blank">45а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-45b-doshhatyj-4-mesta/" title="Домик 45Б: вагончик, дощатый, 4 места / свободен" class="hs45b" target="_blank">45б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-46doshhatyj-4-mesta/" title="Домик 46: дощатый, 4 места / свободен" class="hs46" target="_blank">46</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-200a-derevyannyj-uluchshennyj-6-mest/" title="Домик 200А: деревянный улучшенный, 6 мест / свободен" class="hs200a" target="_blank">200а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-200bderevyannyj-uluchshennyj-6-mest/" title="Домик 200Б: деревянный улучшенный, 6 мест / свободен" class="hs200b" target="_blank">200б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-n-doshhatyj-5-mest/" title="Домик 109: дощатый, 5 мест / свободен" class="hs109" target="_blank">109</a>
                      </span>
                    </div>
                  </div>
                  <div style="height: 1664px; width: 3205px; position: absolute; display: none;" class="z6">
                    <img src="/map/a01.jpg" alt="" style="width: 100%; position: absolute; left: 0px; top: 0px;">
                    <div class="map-layer-mask" style="position: absolute; left: 0px; top: 0px; background: white; opacity: 0;"></div>
                    <div class="mapcontent" style="position: absolute; top: 0px; left: 0px;">
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-973-doshhatyj-2-mesta/" title="Домик 97/3 - дощатый, 2 места / свободен" class="hs97-3" target="_blank">97/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-975-doshhatyj-2-mesta/" title="Домик 97/5 - дощатый, 2 места / свободен" class="hs97-5" target="_blank">97/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-962a-dsp-2-mesta/" title="Домик 96/2А: ДСП, 2 места / свободен" class="hs96-2a" target="_blank">96/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961biz-dsp-2-mesta/" title="Домик 96/2Б: ДСП, 2 места / свободен" class="hs96-2b" target="_blank">96/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-972-doshhatyj-2-mesta/" title="Домик 97/2 - дощатый, 2 места / свободен" class="hs97-2" target="_blank">97/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-971doshhatyj-2-mesta/" title="Домик 97/1:дощатый, 2 места / свободен" class="hs97-1" target="_blank">97/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-961aiz-dsp-2-mesta/" title="Домик 96/1А: ДСП, 2 места / свободен" class="hs96-1a" target="_blank">96/1а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-961b-dsp-2-mesta/" title="Домик 96/1Б: ДСП, 2 места / свободен" class="hs96-1b" target="_blank">96/1б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-974doshhatyj-2-mesta/" title="Домик 97/4: дощатый, 2 места / свободен" class="hs97-4" target="_blank">97/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963a-dsp-2-mesta/" title="Домик 96/3А: вагончик, ДСП, 2 места / свободен" class="hs96-3a" target="_blank">96/3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-963b-dsp-2-mesta/" title="Домик 96/3Б: вагончик, ДСП, 2 места / свободен" class="hs96-3b" target="_blank">96/3б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-97doshhatyj-5-mest/" title="Домик 97: дощатый, ДСП, 5 мест / свободен" class="hs97" target="_blank">97</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-98doshhatyj-4-mesta/" title="Домик 98: дощатый, ДСП, 4 места / свободен" class="hs98" target="_blank">98</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-96iz-brusa-6-mest/" title="Домик 96: дощатый, ДСП, брус, 6 мест / свободен" class="hs96" target="_blank">96</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-99a-doshhatyj-4-mesta/" title="Домик 99А: дощатый, 4 места / свободен" class="hs99a" target="_blank">99а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-99b-doshhatyj-5-mest/" title="Домик 99Б: дощатый, 5 мест / свободен" class="hs99b" target="_blank">99б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1021iz-dsp-4-mesta/" title="Домик 102/1: дощатый, ДСП, 4 места / свободен" class="hs102-1" target="_blank">102/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-103-dsp-3-mesta/" title="Домик 103: дощатый, ДСП, 3 места / свободен" class="hs103" target="_blank">103</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-104iz-dsp-3-mesta/" title="Домик 104: дощатый, ДСП, 3 места / свободен" class="hs104" target="_blank">104</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-102-iz-dsp-3-mesta/" title="Домик 102: дощатый, ДСП, 3 места / свободен" class="hs102" target="_blank">102</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-100-dsp-4-mesta/" title="Домик 100: дощатый, ДСП, 4 места / свободен" class="hs100" target="_blank">100</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-105-dsp-3-mesta/" title="Домик 105: дощатый, ДСП, 3 места / свободен" class="hs105" target="_blank">105</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-106-dsp-5-mest/" title="Домик 106: дощатый, ДСП, 5 мест / свободен" class="hs106" target="_blank">106</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-107iz-dsp-3-mesta/" title="Домик 107: дощатый, ДСП, 3 места / свободен" class="hs107" target="_blank">107</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-1051iz-dsp-3-mesta/" title="Домик 105/1: дощатый, ДСП, 3 места / свободен" class="hs105-1" target="_blank">105/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052a-dsp-4-mesta/" title="Домик 105/2А: ДСП, 4 места / свободен" class="hs105-2a" target="_blank">105/2а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-1052b-dsp-5-mest/" title="Домик 105/2Б: ДСП, 5 мест / свободен" class="hs105-2b" target="_blank">105/2б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-95-dsp-4-mesta/" title="Домик 95: дощатый, ДСП, 4 места / свободен" class="hs95" target="_blank">95</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-901iz-dsp-4-mesta/" title="Домик 90/1: дощатый, ДСП, 4 места / свободен" class="hs90-1" target="_blank">90/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-b-kirpichnyj-4-mesta/" title="Домик 108Б: кирпичный, 4 места / свободен" class="hs108b" target="_blank">108б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-108-a-kirpichnyj-4-mesta/" title="Домик 108А: кирпичный, 4 места / свободен" class="hs108a" target="_blank">108а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-922uluchshennyj-iz-dsp-8-mest/" title="Домик 92/2: ДСП улучшенный, 8 мест / свободен" class="hs92-2" target="_blank">92/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-921-dsp-7-mest/" title="Домик 92/1: ДСП, 7 мест / свободен" class="hs92-1" target="_blank">92/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/21/domik-924-iz-dsp-8-mest/" title="Домик 92/4: ДСП, 8 мест / свободен" class="hs92-4" target="_blank">92/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-923-dsp-8-mest/" title="Домик 92/3: фанерный, 6 мест / свободен" class="hs92-3" target="_blank">92/3</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-94kirpichnyj-3-mesta/" title="Домик 94: кирпичный, 3 места / занят" class="hs94" target="_blank">94</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92-kirpichnyj-3-mesta/" title="Домик 93: кирпичный, 3 места / свободен" class="hs93" target="_blank">93</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92a-kirpichnyj-4-mesta/" title="Домик 92А: кирпичный, 4 места / свободен" class="hs92a" target="_blank">92а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-92b-kirpichnyj-4-mesta/" title="Домик 92Б: кирпичный, 4 места / свободен" class="hs92b" target="_blank">92б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-90-vagonchik-5-mest/" title="Домик 90: вагончик, 5 мест / свободен" class="hs90" target="_blank">90</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89a-kirpichnyj-4-mesta/" title="Домик 89А: кирпичный, 4 места / свободен" class="hs89a" target="_blank">89а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-89b-kirpichnyj-4-mesta/" title="Домик 89Б: кирпичный, 4 места / свободен" class="hs89b" target="_blank">89б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-86dsp-3-mesta/" title="Домик 86: дощатый, ДСП, 3 места / занят" class="hs86" target="_blank">86</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-82doshhatyj-5-mest/" title="Домик 82: дощатый, 5 мест / свободен" class="hs82" target="_blank">82</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-81-doshhatyj-5-mest/" title="Домик 81: дощатый, 5 мест / свободен" class="hs81" target="_blank">81</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-83-doshhatyj-4-mesta/" title="Домик 83: дощатый, ДСП, 4 места / свободен" class="hs83" target="_blank">83</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-841doshhatyj-4-mesta/" title="Домик 84/1: дощатый, ДСП, 4 места / свободен" class="hs84-1" target="_blank">84/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-84a-doshhatyj-3-mesta/" title="Домик 84А: дощатый, 3 места / свободен" class="hs84a" target="_blank">84а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-84bdoshhatyj-3-mesta/" title="Домик 84Б: дощатый, 3 места / свободен" class="hs84b" target="_blank">84б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/31/domik-85-doshhatyj-5-mest/" title="Домик 85: дощатый, ДСП, 5 мест / занят" class="hs85" target="_blank">85</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-78-derevyannyj-4-mesta/" title="Домик 78: деревянный, 4 места / свободен" class="hs78" target="_blank">78</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-79-derevyannyj-4-mesta/" title="Домик 79: деревянный, 4 места / свободен" class="hs79" target="_blank">79</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-77elitnii-6-mest/" title="Домик 77: элитный, 6 мест / свободен" class="hs77" target="_blank">77</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/12/domik-76-2/" title="Домик 76: элитный, 6 мест / свободен" class="hs76" target="_blank">76</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-76-1/" title="Домик 76/1: элитный, 6 мест / свободен" class="hs76-1" target="_blank">76/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-762derevyannyj-elitnyj-3-mesta/" title="Домик 76/2: элитный, 3 места / свободен" class="hs76-2" target="_blank">76/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-781-derevyannyj-elitnyj/" title="Домик 75/1: элитный, 3 места / свободен" class="hs75-1" target="_blank">75/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-752-derevyannyj-elitnyj-2/" title="Домик 75/2: элитный, 3 места / свободен" class="hs75-2" target="_blank">75/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-75-elitnyj-derevyannyj/" title="Домик 75: элитный, 3 места / свободен" class="hs75" target="_blank">75</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-74-derevyannyj-4-mesta/" title="Домик 74: деревянный, 4 места / свободен" class="hs74" target="_blank">74</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-72elitnii-6-mest/" title="Домик 72: элитный, 6 мест / занят" class="hs72" target="_blank">72</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-711doshhatyj-3-mesta/" title="Домик 71/1: дощатый, ДСП, брус, 6 мест / свободен" class="hs71-1" target="_blank">71/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-71-derevyannyj-4-mesta/" title="Домик 71: деревянный, 4 места / свободен" class="hs71" target="_blank">71</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-792derevyannyj-4-mesta/" title="Домик 79/2: деревянный, 4 места / свободен" class="hs79-2" target="_blank">79/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-791derevyannyj-4-mesta/" title="Домик 79/1: деревянный, 4 места / свободен" class="hs79-1" target="_blank">79/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-80derevyannyj-6-mest/" title="Домик 80: дощатый, ДСП, брус, 6 мест / свободен" class="hs80" target="_blank">80</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-67-elitnii/" title="Домик 67: элитный, 3 места / свободен" class="hs67" target="_blank">67</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-68-elitnii/" title="Домик 68: элитный, 3 места / свободен" class="hs68" target="_blank">68</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70akirpichnyj-4-mesta/" title="Домик 70А: кирпичный, 4 места / свободен" class="hs70a" target="_blank">70а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-70bkirpichnyj-4-mesta/" title="Домик 70Б: кирпичный, 4 места / свободен" class="hs70b" target="_blank">70б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-66a-kirpichnyj-4-mesta/" title="Домик 66А: кирпичный, 4 места / свободен" class="hs66a" target="_blank">66а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domiks-66b-kirpichnyj-4-mesta/" title="Домик 66Б - кирпичный, 4 места / свободен" class="hs66b" target="_blank">66б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-65doshhatyj-3-mesta/" title="Домик 65: дощатый, ДСП, 3 места / свободен" class="hs65" target="_blank">65</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-64doshhatyj-3-mesta/" title="Домик 64: дощатый, ДСП, 3 места / свободен" class="hs64" target="_blank">64</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62a-kirpichnyj-4-mesta/" title="Домик 63А - кирпичный, 4 места / свободен" class="hs63a" target="_blank">63а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-63bkirpichnyj-4-mesta/" title="Домик 63Б: кирпичный, 4 места / свободен" class="hs63b" target="_blank">63б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-62-elitnii-3-mesta/" title="Домик 62: элитный, 3 места / свободен" class="hs62" target="_blank">62</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-61-elitnii-3-mesta/" title="Домик 61: элитный, 3 места / свободен" class="hs61" target="_blank">61</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-60-elitnii-3-mesta/" title="Домик 60: элитный, 3 места / свободен" class="hs60" target="_blank">60</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-59-elitnii-3-mesta/" title="Домик 59: элитный, 3 места / свободен" class="hs59" target="_blank">59</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-58/" title="Домик 58: элитный, 3 места / свободен" class="hs58" target="_blank">58</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-56doshhatyj-3-mesta/" title="Домик 56: дощатый, ДСП, 3 места / свободен" class="hs56" target="_blank">56</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-57a-kirpichnyj-4-mesta/" title="Домик 57А: кирпичный, 4 места / свободен" class="hs57a" target="_blank">57а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-57bkirpichnyj-4-mesta/" title="Домик 57Б: кирпичный, 4 места / свободен" class="hs57b" target="_blank">57б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-55a-kirpichnyj-4-mesta/" title="Домик 55А: кирпичный, 4 места / свободен" class="hs55a" target="_blank">55а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-55bkirpichnyj-4-mesta/" title="Домик 55Б: кирпичный, 4 места / свободен" class="hs55b" target="_blank">55б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-54elitnii-3-mesta/" title="Домик 54: элитный, 3 места / свободен" class="hs54" target="_blank">54</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-53elitnii-3-mesta/" title="Домик 53: элитный, 3 места / свободен" class="hs53" target="_blank">53</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-50doshhatyj-4-mesta/" title="Домик 50: дощатый, 4 места / свободен" class="hs50" target="_blank">50</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/19/domik-51-elitnii-3/" title="Домик 51: элитный, 3 места / занят" class="hs51" target="_blank">51</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-49adoshhatyj-4-mesta/" title="Домик 49А: вагончик, дощатый, 4 места / свободен" class="hs49a" target="_blank">49а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-49b-doshhatyj-4-mesta/" title="Домик 49Б: вагончик, дощатый, 4 места / свободен" class="hs49b" target="_blank">49б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-47doshhatyj-4-mesta/" title="Домик 47: дощатый, 4 места / свободен" class="hs47" target="_blank">47</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-48-doshhatyj-4-mesta/" title="Домик 48: дощатый, 4 места / свободен" class="hs48" target="_blank">48</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52akirpichnyj-4-mesta/" title="Домик 52А: кирпичный благоустроенный, 4 места / свободен" class="hs52a" target="_blank">52а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-52b-kirpichnyj-4-mesta/" title="Домик 52Б: кирпичный благоустроенный, 4 места / свободен" class="hs52b" target="_blank">52б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-51-doshhatyj-3-mesta/" title="Домик 51/1: фанерный, 6 мест / свободен" class="hs51-1" target="_blank">51/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-28a-kirpichnyj-4-mesta-2/" title="Домик 28А: кирпичный благоустроенный, 4 места / свободен" class="hs28a" target="_blank">28а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-28b-kirpichnyj-4-mesta/" title="Домик 28Б: кирпичный благоустроенный, 4 места / свободен" class="hs28b" target="_blank">28б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-27a-kirpichnyj-4-mesta/" title="Домик 27А: кирпичный благоустроенный, 4 места / свободен" class="hs27a" target="_blank">27а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-27b/" title="Домик 27Б: кирпичный благоустроенный, 4 места / свободен" class="hs27b" target="_blank">27б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/05/20/domik-26b-kirpichnyj-4-mesta-2/" title="Домик 26A: кирпичный благоустроенный, 4 места / свободен" class="hs26a" target="_blank">26а</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/14/domik-26b-kirpichnyj-4-mesta/" title="Домик 26Б: кирпичный благоустроенный, 4 места / занят" class="hs26b" target="_blank">26б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/16/domik-1-shhitovoj-4-x-mestnyj/" title="Домик 1: дощатый, 4 места / занят" class="hs1" target="_blank">1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/16/domik-2-doshhatyj-3-x-mestnyj/" title="Домик 2: дощатый, 3 места / свободен" class="hs2" target="_blank">2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3adoshhatyj-4-mesta/" title="Домик 3А: дощатый, 3 места / свободен" class="hs3a" target="_blank">3а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-3bdoshhatyj-4-mesta/" title="Домик 3Б: дощатый, 4 места / свободен" class="hs3b" target="_blank">3б</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/03/29/domik-4doshhatyj-5mest/" title="Домик 4: дощатый, 5мест / занят" class="hs4" target="_blank">4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-5doshhatyj-3-mesta/" title="Домик 5: дощатый, 3 места / свободен" class="hs5" target="_blank">5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-6doshhatyj-6-mest/" title="Домик 6: дощатый, 6 мест / свободен" class="hs6" target="_blank">6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-7doshhatyj-4-mesta/" title="Домик 7: дощатый, 4 места / свободен" class="hs7" target="_blank">7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-8doshhatyj-4-mesta/" title="Домик 8: дощатый, 4 места / свободен" class="hs8" target="_blank">8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-9doshhatyj-5-mest/" title="Домик 9: дощатый, 5 мест / свободен" class="hs9" target="_blank">9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-10a-doshhatyj-4-mesta/" title="Домик 10А: дощатый, ДСП, 4 места / свободен" class="hs10a" target="_blank">10а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-10bdoshhatyj-4-mesta/" title="Домик 10Б: дощатый, ДСП, 4 места / свободен" class="hs10b" target="_blank">10б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-12doshhatyj-4-mesta/" title="Домик 12: дощатый, 4 места / свободен" class="hs12" target="_blank">12</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-14-doshhatyj-4-mesta/" title="Домик 14: дощатый, 4 места / свободен" class="hs14" target="_blank">14</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/12/domik-15-doshhatyj-5-mest/" title="Домик 15: дощатый, 5 мест / свободен" class="hs15" target="_blank">15</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-16doshhatyj-5-mest/" title="Домик 16: дощатый, 5 мест / свободен" class="hs16" target="_blank">16</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/13/domik-17-doshhatyj-4-mesta/" title="Домик 17: дощатый, 4 места / свободен" class="hs17" target="_blank">17</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-18-elitnii-3-mesta/" title="Домик 18: элитный, 3 места / занят" class="hs18" target="_blank">18</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/29/domik-19-doshhatyj-5-mest/" title="Домик 19: дощатый, 5 мест / свободен" class="hs19" target="_blank">19</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-20-doshhatyj-4-mesta/" title="Домик 20: дощатый, 4 места / свободен" class="hs20" target="_blank">20</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-21-doshhatyj-4-mesta/" title="Домик 21: дощатый, 4 места / свободен" class="hs21" target="_blank">21</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-22-elitnii-3-mesta/" title="Домик 22: элитный, 3 места / свободен" class="hs22" target="_blank">22</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/13/domik-24-elitnii-3-mesta/" title="Домик 24: элитный, 3 места / занят" class="hs24" target="_blank">24</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2014/07/15/dom-25-elitnii/" title="Домик 25: элитный, 3 места / свободен" class="hs25" target="_blank">25</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-21-novyj-elitnyj-4-mesta/" title="Домик 2/1: элитный 2-х этажный, 4 места / свободен" class="hs2-1" target="_blank">2/1</a>
                      </span>
                      <span class="hs soccupied">
                        <a href="http://auda.altay.kz/2010/04/01/domik-22-novyj-elitnyj-4-mesta/" title="Домик 2/2: элитный 2-х этажный, 4 места / занят" class="hs2-2" target="_blank">2/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-3/" title="Домик 2/3: элитный, 6 мест / свободен" class="hs2-3" target="_blank">2/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-2-4/" title="Домик 2/4: элитный, 6 мест / свободен" class="hs2-4" target="_blank">2/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/04/10/domik-2-5/" title="Домик 2/5: элитный, 6 мест / свободен" class="hs2-5" target="_blank">2/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-19-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/9: элитный 2-х этажный, 4 места / свободен" class="hs1-9" target="_blank">1/9</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-18-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/8: элитный 2-х этажный, 4 места / свободен" class="hs1-8" target="_blank">1/8</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-11-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/1: элитный 2-х этажный, 4 места / свободен" class="hs1-1" target="_blank">1/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-12-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/2: элитный 2-х этажный, 4 места / свободен" class="hs1-2" target="_blank">1/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-13-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/3: элитный 2-х этажный, 4 места / свободен" class="hs1-3" target="_blank">1/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-14-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/4: элитный 2-х этажный, 4 места / свободен" class="hs1-4" target="_blank">1/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/15/domik-15-elitnyj-dvuxetazhnyj-4-mesta/" title="Домик 1/5: элитный 2-х этажный, 4 места / свободен" class="hs1-5" target="_blank">1/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-16-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/6: элитный 2-х этажный, 4 места / свободен" class="hs1-6" target="_blank">1/6</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-17-elitnyj-2-x-etazhnyj-4-mesta/" title="Домик 1/7: элитный 2-х этажный, 4 места / свободен" class="hs1-7" target="_blank">1/7</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-29avagonchik-3-mesta/" title="Домик 29А: вагончик, ДСП, 3 места / свободен" class="hs29a" target="_blank">29а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-29b-kirpichnyj-4-mesta/" title="Домик 29Б: вагончик, ДСП, 3 места / свободен" class="hs29b" target="_blank">29б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-30a/" title="Домик 30А: вагончик, дощатый, 4 места / свободен" class="hs30a" target="_blank">30а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-30bvagonchik-4-mesta/" title="Домик 30Б: вагончик, дощатый, 4 места / свободен" class="hs30b" target="_blank">30б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2013/08/11/domik-31/" title="Домик 31: элитный, 6 мест / свободен" class="hs31" target="_blank">31</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33a-vagonchik-4-mesta/" title="Домик 33А: кирпичный, 4 места / свободен" class="hs33a" target="_blank">33а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-33b-vagonchik-4-mesta/" title="Домик 33Б: кирпичный, 4 места / свободен" class="hs33b" target="_blank">33б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2015/03/30/domik-35/" title="Домик 35: элитный, 3 места / свободен" class="hs35" target="_blank">35</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-312derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/2: брус улучшенный, 4 места / свободен" class="hs31-2" target="_blank">31/2</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-311-derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/1: брус улучшенный, 4 места / свободен" class="hs31-1" target="_blank">31/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-313derevyannyj-uluchshennyj-4-mesta/" title="Домик 31/3: брус улучшенный, 4 места / свободен" class="hs31-3" target="_blank">31/3</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-314-derevyannyj-uluchshennyj/" title="Домик 31/4: деревянный улучшенный, 4 места / свободен" class="hs31-4" target="_blank">31/4</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-315-derevyannyj-4-mesta/" title="Домик 31/5: брус улучшенный, 4 места / свободен" class="hs31-5" target="_blank">31/5</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/30/domik-37a-kirpichnyj-4-mesta/" title="Домик 37А: кирпичный, 4 места / свободен" class="hs37a" target="_blank">37а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-37b-kirpichnyj-4-mesta/" title="Домик 37Б: кирпичный, 4 места / свободен" class="hs37b" target="_blank">37б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-38-%e2%80%93-standartnyj-doshhatyj/" title="Домик 38: стандартный дощатый / свободен" class="hs38" target="_blank">38</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-39a-irpichnyj-4-mesta/" title="Домик 39А: кирпичный, 4 места / свободен" class="hs39a" target="_blank">39а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-39bkirpichnyj-4-mesta/" title="Домик 39Б: кирпичный, 4 места / свободен" class="hs39b" target="_blank">39б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-40-doshhatyj-4-mesta/" title="Домик 40: дощатый, ДСП, 4 места / свободен" class="hs40" target="_blank">40</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-261-derevyannyj-uluchshennyj-4-mesta/" title="Домик 26/1: брус улучшенный, 4 места / свободен" class="hs26-1" target="_blank">26/1</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-41doshhatyj-4-mesta/" title="Домик 41: дощатый, 4 места / свободен" class="hs41" target="_blank">41</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/18/domik-42a-kirpichnyj-4-mesta/" title="Домик 42А: кирпичный, 4 места / свободен" class="hs42a" target="_blank">42а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-42b-kirpichnyj-4-mesta/" title="Домик 42Б: кирпичный, 4 места / свободен" class="hs42b" target="_blank">42б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-43-doshhatyj-4-mesta/" title="Домик 43: дощатый, ДСП, 4 места / свободен" class="hs43" target="_blank">43</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-44doshhatyj-4-mesta/" title="Домик 44: дощатый, ДСП, 4 места / свободен" class="hs44" target="_blank">44</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-45adoshhatyj-4-mesta/" title="Домик 45А: вагончик, дощатый, 4 места / свободен" class="hs45a" target="_blank">45а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/03/31/domik-45b-doshhatyj-4-mesta/" title="Домик 45Б: вагончик, дощатый, 4 места / свободен" class="hs45b" target="_blank">45б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/14/domik-46doshhatyj-4-mesta/" title="Домик 46: дощатый, 4 места / свободен" class="hs46" target="_blank">46</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-200a-derevyannyj-uluchshennyj-6-mest/" title="Домик 200А: деревянный улучшенный, 6 мест / свободен" class="hs200a" target="_blank">200а</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/19/domik-200bderevyannyj-uluchshennyj-6-mest/" title="Домик 200Б: деревянный улучшенный, 6 мест / свободен" class="hs200b" target="_blank">200б</a>
                      </span>
                      <span class="hs svacant">
                        <a href="http://auda.altay.kz/2010/04/01/domik-n-doshhatyj-5-mest/" title="Домик 109: дощатый, 5 мест / свободен" class="hs109" target="_blank">109</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="map-control">
                  <a href="#left" class="left">Left</a>
                  <a href="#right" class="right">Right</a>
                  <a href="#up" class="up">Up</a>
                  <a href="#down" class="down">Down</a>
                  <a href="#zoom" class="zoom">Zoom</a>
                  <a href="#zoom_out" class="back">Back</a>
                </div>

              </div>
              <img src="/map/legend.png" alt="Условные обозначения"></div>

            <style type="text/css">

    .svacant a {background:url(/map/hsv.png);}
    .sreserve a {background:url(/map/hsr.png);}
    .soccupied a {background:url(/map/hso.png);}
    .sdaily a {background:url(/map/hsd.png);}
    .vacant a, .svacant a:hover {background:url(/map/vacant.png);}
    .reserve a, .sreserve a:hover {background:url(/map/reserve.png);}
    .occupied a, .soccupied a:hover {background:url(/map/occupied.png);}
    .daily a, .sdaily a:hover {background:url(/map/daily.png);}
    
    .z6 .hs97-3 {top:387px;left:173px;}
.z5 .hs97-3 {top:331px;left:148px;}
.z4 .hs97-3 {top:275px;left:123px;}
.z3 .hs97-3 {top:220px;left:98px;}
.z2 .hs97-3 {top:164px;left:73px;}
.z1 .hs97-3 {top:109px;left:49px;}
.z6 .hs97-5 {top:511px;left:216px;}
.z5 .hs97-5 {top:437px;left:185px;}
.z4 .hs97-5 {top:364px;left:154px;}
.z3 .hs97-5 {top:290px;left:123px;}
.z2 .hs97-5 {top:217px;left:92px;}
.z1 .hs97-5 {top:143px;left:61px;}
.z6 .hs96-2a {top:449px;left:221px;}
.z5 .hs96-2a {top:384px;left:189px;}
.z4 .hs96-2a {top:319px;left:157px;}
.z3 .hs96-2a {top:255px;left:125px;}
.z2 .hs96-2a {top:191px;left:94px;}
.z1 .hs96-2a {top:126px;left:62px;}
.z6 .hs96-2b {top:441px;left:253px;}
.z5 .hs96-2b {top:377px;left:216px;}
.z4 .hs96-2b {top:314px;left:180px;}
.z3 .hs96-2b {top:250px;left:144px;}
.z2 .hs96-2b {top:187px;left:107px;}
.z1 .hs96-2b {top:124px;left:71px;}
.z6 .hs97-2 {top:380px;left:262px;}
.z5 .hs97-2 {top:325px;left:224px;}
.z4 .hs97-2 {top:270px;left:186px;}
.z3 .hs97-2 {top:216px;left:149px;}
.z2 .hs97-2 {top:161px;left:111px;}
.z1 .hs97-2 {top:107px;left:74px;}
.z6 .hs97-1 {top:370px;left:326px;}
.z5 .hs97-1 {top:316px;left:279px;}
.z4 .hs97-1 {top:263px;left:232px;}
.z3 .hs97-1 {top:210px;left:185px;}
.z2 .hs97-1 {top:157px;left:138px;}
.z1 .hs97-1 {top:104px;left:92px;}
.z6 .hs96-1a {top:438px;left:291px;}
.z5 .hs96-1a {top:374px;left:249px;}
.z4 .hs96-1a {top:312px;left:207px;}
.z3 .hs96-1a {top:249px;left:165px;}
.z2 .hs96-1a {top:186px;left:123px;}
.z1 .hs96-1a {top:123px;left:82px;}
.z6 .hs96-1b {top:428px;left:329px;}
.z5 .hs96-1b {top:366px;left:281px;}
.z4 .hs96-1b {top:304px;left:234px;}
.z3 .hs96-1b {top:243px;left:187px;}
.z2 .hs96-1b {top:182px;left:140px;}
.z1 .hs96-1b {top:120px;left:92px;}
.z6 .hs97-4 {top:514px;left:260px;}
.z5 .hs97-4 {top:439px;left:222px;}
.z4 .hs97-4 {top:366px;left:185px;}
.z3 .hs97-4 {top:292px;left:148px;}
.z2 .hs97-4 {top:218px;left:110px;}
.z1 .hs97-4 {top:144px;left:73px;}
.z6 .hs96-3a {top:504px;left:294px;}
.z5 .hs96-3a {top:431px;left:251px;}
.z4 .hs96-3a {top:359px;left:209px;}
.z3 .hs96-3a {top:286px;left:167px;}
.z2 .hs96-3a {top:214px;left:125px;}
.z1 .hs96-3a {top:142px;left:83px;}
.z6 .hs96-3b {top:504px;left:327px;}
.z5 .hs96-3b {top:431px;left:280px;}
.z4 .hs96-3b {top:359px;left:233px;}
.z3 .hs96-3b {top:286px;left:186px;}
.z2 .hs96-3b {top:214px;left:139px;}
.z1 .hs96-3b {top:142px;left:92px;}
.z6 .hs97 {top:400px;left:404px;}
.z5 .hs97 {top:342px;left:345px;}
.z4 .hs97 {top:285px;left:287px;}
.z3 .hs97 {top:227px;left:229px;}
.z2 .hs97 {top:170px;left:171px;}
.z1 .hs97 {top:112px;left:113px;}
.z6 .hs98 {top:331px;left:442px;}
.z5 .hs98 {top:283px;left:378px;}
.z4 .hs98 {top:235px;left:314px;}
.z3 .hs98 {top:188px;left:251px;}
.z2 .hs98 {top:140px;left:188px;}
.z1 .hs98 {top:93px;left:124px;}
.z6 .hs96 {top:476px;left:456px;}
.z5 .hs96 {top:407px;left:390px;}
.z4 .hs96 {top:339px;left:324px;}
.z3 .hs96 {top:270px;left:259px;}
.z2 .hs96 {top:202px;left:193px;}
.z1 .hs96 {top:134px;left:128px;}
.z6 .hs99a {top:383px;left:486px;}
.z5 .hs99a {top:327px;left:415px;}
.z4 .hs99a {top:272px;left:346px;}
.z3 .hs99a {top:217px;left:276px;}
.z2 .hs99a {top:163px;left:206px;}
.z1 .hs99a {top:108px;left:136px;}
.z6 .hs99b {top:379px;left:514px;}
.z5 .hs99b {top:324px;left:439px;}
.z4 .hs99b {top:270px;left:366px;}
.z3 .hs99b {top:215px;left:292px;}
.z2 .hs99b {top:161px;left:218px;}
.z1 .hs99b {top:106px;left:144px;}
.z6 .hs102-1 {top:366px;left:581px;}
.z5 .hs102-1 {top:313px;left:497px;}
.z4 .hs102-1 {top:260px;left:413px;}
.z3 .hs102-1 {top:208px;left:330px;}
.z2 .hs102-1 {top:155px;left:247px;}
.z1 .hs102-1 {top:103px;left:163px;}
.z6 .hs103 {top:366px;left:643px;}
.z5 .hs103 {top:313px;left:550px;}
.z4 .hs103 {top:260px;left:457px;}
.z3 .hs103 {top:208px;left:365px;}
.z2 .hs103 {top:155px;left:273px;}
.z1 .hs103 {top:103px;left:181px;}
.z6 .hs104 {top:391px;left:669px;}
.z5 .hs104 {top:334px;left:572px;}
.z4 .hs104 {top:278px;left:476px;}
.z3 .hs104 {top:222px;left:380px;}
.z2 .hs104 {top:166px;left:284px;}
.z1 .hs104 {top:110px;left:188px;}
.z6 .hs102 {top:405px;left:604px;}
.z5 .hs102 {top:346px;left:516px;}
.z4 .hs102 {top:288px;left:430px;}
.z3 .hs102 {top:230px;left:343px;}
.z2 .hs102 {top:172px;left:256px;}
.z1 .hs102 {top:114px;left:170px;}
.z6 .hs100 {top:467px;left:513px;}
.z5 .hs100 {top:399px;left:439px;}
.z4 .hs100 {top:332px;left:365px;}
.z3 .hs100 {top:265px;left:291px;}
.z2 .hs100 {top:198px;left:218px;}
.z1 .hs100 {top:131px;left:144px;}
.z6 .hs105 {top:448px;left:685px;}
.z5 .hs105 {top:383px;left:586px;}
.z4 .hs105 {top:319px;left:487px;}
.z3 .hs105 {top:254px;left:389px;}
.z2 .hs105 {top:190px;left:291px;}
.z1 .hs105 {top:126px;left:192px;}
.z6 .hs106 {top:446px;left:623px;}
.z5 .hs106 {top:381px;left:533px;}
.z4 .hs106 {top:317px;left:443px;}
.z3 .hs106 {top:253px;left:354px;}
.z2 .hs106 {top:189px;left:264px;}
.z1 .hs106 {top:125px;left:175px;}
.z6 .hs107 {top:466px;left:593px;}
.z5 .hs107 {top:398px;left:507px;}
.z4 .hs107 {top:332px;left:422px;}
.z3 .hs107 {top:265px;left:337px;}
.z2 .hs107 {top:198px;left:252px;}
.z1 .hs107 {top:131px;left:167px;}
.z6 .hs105-1 {top:476px;left:653px;}
.z5 .hs105-1 {top:407px;left:558px;}
.z4 .hs105-1 {top:339px;left:465px;}
.z3 .hs105-1 {top:270px;left:371px;}
.z2 .hs105-1 {top:202px;left:277px;}
.z1 .hs105-1 {top:134px;left:183px;}
.z6 .hs105-2a {top:508px;left:642px;}
.z5 .hs105-2a {top:434px;left:549px;}
.z4 .hs105-2a {top:361px;left:457px;}
.z3 .hs105-2a {top:288px;left:365px;}
.z2 .hs105-2a {top:216px;left:272px;}
.z1 .hs105-2a {top:143px;left:180px;}
.z6 .hs105-2b {top:510px;left:678px;}
.z5 .hs105-2b {top:436px;left:580px;}
.z4 .hs105-2b {top:363px;left:482px;}
.z3 .hs105-2b {top:290px;left:385px;}
.z2 .hs105-2b {top:216px;left:288px;}
.z1 .hs105-2b {top:143px;left:190px;}
.z6 .hs95 {top:548px;left:488px;}
.z5 .hs95 {top:468px;left:417px;}
.z4 .hs95 {top:390px;left:347px;}
.z3 .hs95 {top:311px;left:277px;}
.z2 .hs95 {top:233px;left:207px;}
.z1 .hs95 {top:154px;left:137px;}
.z6 .hs90-1 {top:635px;left:739px;}
.z5 .hs90-1 {top:543px;left:632px;}
.z4 .hs90-1 {top:452px;left:526px;}
.z3 .hs90-1 {top:361px;left:420px;}
.z2 .hs90-1 {top:269px;left:314px;}
.z1 .hs90-1 {top:178px;left:208px;}
.z6 .hs108b {top:597px;left:667px;}
.z5 .hs108b {top:510px;left:570px;}
.z4 .hs108b {top:425px;left:474px;}
.z3 .hs108b {top:339px;left:379px;}
.z2 .hs108b {top:253px;left:283px;}
.z1 .hs108b {top:168px;left:187px;}
.z6 .hs108a {top:629px;left:648px;}
.z5 .hs108a {top:538px;left:554px;}
.z4 .hs108a {top:447px;left:461px;}
.z3 .hs108a {top:357px;left:368px;}
.z2 .hs108a {top:267px;left:275px;}
.z1 .hs108a {top:177px;left:182px;}
.z6 .hs92-2 {top:562px;left:429px;}
.z5 .hs92-2 {top:480px;left:367px;}
.z4 .hs92-2 {top:400px;left:305px;}
.z3 .hs92-2 {top:319px;left:244px;}
.z2 .hs92-2 {top:238px;left:182px;}
.z1 .hs92-2 {top:158px;left:120px;}
.z6 .hs92-1 {top:622px;left:371px;}
.z5 .hs92-1 {top:532px;left:317px;}
.z4 .hs92-1 {top:442px;left:264px;}
.z3 .hs92-1 {top:353px;left:211px;}
.z2 .hs92-1 {top:264px;left:157px;}
.z1 .hs92-1 {top:175px;left:104px;}
.z6 .hs92-4 {top:625px;left:319px;}
.z5 .hs92-4 {top:534px;left:273px;}
.z4 .hs92-4 {top:445px;left:227px;}
.z3 .hs92-4 {top:355px;left:181px;}
.z2 .hs92-4 {top:265px;left:135px;}
.z1 .hs92-4 {top:176px;left:90px;}
.z6 .hs92-3 {top:628px;left:242px;}
.z5 .hs92-3 {top:537px;left:207px;}
.z4 .hs92-3 {top:447px;left:172px;}
.z3 .hs92-3 {top:357px;left:137px;}
.z2 .hs92-3 {top:266px;left:103px;}
.z1 .hs92-3 {top:176px;left:68px;}
.z6 .hs94 {top:743px;left:310px;}
.z5 .hs94 {top:635px;left:265px;}
.z4 .hs94 {top:529px;left:221px;}
.z3 .hs94 {top:422px;left:176px;}
.z2 .hs94 {top:315px;left:132px;}
.z1 .hs94 {top:209px;left:87px;}
.z6 .hs93 {top:752px;left:367px;}
.z5 .hs93 {top:643px;left:314px;}
.z4 .hs93 {top:535px;left:261px;}
.z3 .hs93 {top:427px;left:208px;}
.z2 .hs93 {top:319px;left:156px;}
.z1 .hs93 {top:211px;left:103px;}
.z6 .hs92a {top:690px;left:353px;}
.z5 .hs92a {top:590px;left:302px;}
.z4 .hs92a {top:491px;left:251px;}
.z3 .hs92a {top:392px;left:200px;}
.z2 .hs92a {top:293px;left:150px;}
.z1 .hs92a {top:194px;left:99px;}
.z6 .hs92b {top:679px;left:381px;}
.z5 .hs92b {top:580px;left:326px;}
.z4 .hs92b {top:483px;left:271px;}
.z3 .hs92b {top:386px;left:216px;}
.z2 .hs92b {top:288px;left:162px;}
.z1 .hs92b {top:191px;left:107px;}
.z6 .hs90 {top:682px;left:548px;}
.z5 .hs90 {top:583px;left:468px;}
.z4 .hs90 {top:485px;left:390px;}
.z3 .hs90 {top:387px;left:311px;}
.z2 .hs90 {top:289px;left:233px;}
.z1 .hs90 {top:192px;left:154px;}
.z6 .hs89a {top:786px;left:472px;}
.z5 .hs89a {top:672px;left:404px;}
.z4 .hs89a {top:559px;left:336px;}
.z3 .hs89a {top:446px;left:268px;}
.z2 .hs89a {top:334px;left:200px;}
.z1 .hs89a {top:221px;left:133px;}
.z6 .hs89b {top:785px;left:498px;}
.z5 .hs89b {top:671px;left:426px;}
.z4 .hs89b {top:558px;left:354px;}
.z3 .hs89b {top:446px;left:283px;}
.z2 .hs89b {top:333px;left:211px;}
.z1 .hs89b {top:220px;left:140px;}
.z6 .hs86 {top:971px;left:774px;}
.z5 .hs86 {top:830px;left:662px;}
.z4 .hs86 {top:691px;left:551px;}
.z3 .hs86 {top:551px;left:440px;}
.z2 .hs86 {top:412px;left:328px;}
.z1 .hs86 {top:273px;left:217px;}
.z6 .hs82 {top:1157px;left:895px;}
.z5 .hs82 {top:989px;left:765px;}
.z4 .hs82 {top:823px;left:637px;}
.z3 .hs82 {top:657px;left:508px;}
.z2 .hs82 {top:491px;left:380px;}
.z1 .hs82 {top:325px;left:251px;}
.z6 .hs81 {top:1177px;left:945px;}
.z5 .hs81 {top:1006px;left:808px;}
.z4 .hs81 {top:837px;left:672px;}
.z3 .hs81 {top:668px;left:537px;}
.z2 .hs81 {top:499px;left:401px;}
.z1 .hs81 {top:331px;left:265px;}
.z6 .hs83 {top:953px;left:947px;}
.z5 .hs83 {top:815px;left:810px;}
.z4 .hs83 {top:678px;left:674px;}
.z3 .hs83 {top:541px;left:538px;}
.z2 .hs83 {top:404px;left:402px;}
.z1 .hs83 {top:268px;left:266px;}
.z6 .hs84-1 {top:943px;left:897px;}
.z5 .hs84-1 {top:806px;left:767px;}
.z4 .hs84-1 {top:671px;left:638px;}
.z3 .hs84-1 {top:535px;left:509px;}
.z2 .hs84-1 {top:400px;left:381px;}
.z1 .hs84-1 {top:265px;left:252px;}
.z6 .hs84a {top:875px;left:905px;}
.z5 .hs84a {top:748px;left:774px;}
.z4 .hs84a {top:622px;left:644px;}
.z3 .hs84a {top:497px;left:514px;}
.z2 .hs84a {top:371px;left:384px;}
.z1 .hs84a {top:246px;left:254px;}
.z6 .hs84b {top:875px;left:885px;}
.z5 .hs84b {top:748px;left:757px;}
.z4 .hs84b {top:622px;left:630px;}
.z3 .hs84b {top:497px;left:503px;}
.z2 .hs84b {top:371px;left:376px;}
.z1 .hs84b {top:246px;left:249px;}
.z6 .hs85 {top:914px;left:823px;}
.z5 .hs85 {top:781px;left:704px;}
.z4 .hs85 {top:650px;left:585px;}
.z3 .hs85 {top:519px;left:467px;}
.z2 .hs85 {top:388px;left:349px;}
.z1 .hs85 {top:257px;left:231px;}
.z6 .hs78 {top:1334px;left:1131px;}
.z5 .hs78 {top:1140px;left:967px;}
.z4 .hs78 {top:949px;left:805px;}
.z3 .hs78 {top:758px;left:642px;}
.z2 .hs78 {top:566px;left:480px;}
.z1 .hs78 {top:375px;left:318px;}
.z6 .hs79 {top:1304px;left:1167px;}
.z5 .hs79 {top:1115px;left:998px;}
.z4 .hs79 {top:928px;left:830px;}
.z3 .hs79 {top:740px;left:663px;}
.z2 .hs79 {top:553px;left:495px;}
.z1 .hs79 {top:366px;left:328px;}
.z6 .hs77 {top:1410px;left:1095px;}
.z5 .hs77 {top:1205px;left:936px;}
.z4 .hs77 {top:1003px;left:779px;}
.z3 .hs77 {top:801px;left:622px;}
.z2 .hs77 {top:598px;left:465px;}
.z1 .hs77 {top:396px;left:307px;}
.z6 .hs76 {top:1390px;left:1180px;}
.z5 .hs76 {top:1188px;left:1009px;}
.z4 .hs76 {top:989px;left:839px;}
.z3 .hs76 {top:789px;left:670px;}
.z2 .hs76 {top:590px;left:501px;}
.z1 .hs76 {top:390px;left:331px;}
.z6 .hs76-1 {top:1370px;left:1145px;}
.z5 .hs76-1 {top:1171px;left:979px;}
.z4 .hs76-1 {top:975px;left:815px;}
.z3 .hs76-1 {top:778px;left:650px;}
.z2 .hs76-1 {top:581px;left:486px;}
.z1 .hs76-1 {top:385px;left:322px;}
.z6 .hs76-2 {top:1435px;left:1240px;}
.z5 .hs76-2 {top:1227px;left:1060px;}
.z4 .hs76-2 {top:1021px;left:882px;}
.z3 .hs76-2 {top:815px;left:704px;}
.z2 .hs76-2 {top:609px;left:526px;}
.z1 .hs76-2 {top:403px;left:348px;}
.z6 .hs75-1 {top:1368px;left:1301px;}
.z5 .hs75-1 {top:1170px;left:1112px;}
.z4 .hs75-1 {top:973px;left:926px;}
.z3 .hs75-1 {top:777px;left:739px;}
.z2 .hs75-1 {top:580px;left:552px;}
.z1 .hs75-1 {top:384px;left:365px;}
.z6 .hs75-2 {top:1417px;left:1312px;}
.z5 .hs75-2 {top:1211px;left:1122px;}
.z4 .hs75-2 {top:1008px;left:933px;}
.z3 .hs75-2 {top:805px;left:745px;}
.z2 .hs75-2 {top:601px;left:557px;}
.z1 .hs75-2 {top:398px;left:368px;}
.z6 .hs75 {top:1334px;left:1262px;}
.z5 .hs75 {top:1140px;left:1079px;}
.z4 .hs75 {top:949px;left:898px;}
.z3 .hs75 {top:758px;left:717px;}
.z2 .hs75 {top:566px;left:536px;}
.z1 .hs75 {top:375px;left:354px;}
.z6 .hs74 {top:1292px;left:1279px;}
.z5 .hs74 {top:1105px;left:1093px;}
.z4 .hs74 {top:919px;left:910px;}
.z3 .hs74 {top:734px;left:726px;}
.z2 .hs74 {top:548px;left:543px;}
.z1 .hs74 {top:363px;left:359px;}
.z6 .hs72 {top:1225px;left:1385px;}
.z5 .hs72 {top:1047px;left:1184px;}
.z4 .hs72 {top:871px;left:985px;}
.z3 .hs72 {top:696px;left:786px;}
.z2 .hs72 {top:520px;left:588px;}
.z1 .hs72 {top:344px;left:389px;}
.z6 .hs71-1 {top:1178px;left:1339px;}
.z5 .hs71-1 {top:1007px;left:1145px;}
.z4 .hs71-1 {top:838px;left:953px;}
.z3 .hs71-1 {top:669px;left:760px;}
.z2 .hs71-1 {top:500px;left:568px;}
.z1 .hs71-1 {top:331px;left:376px;}
.z6 .hs71 {top:1123px;left:1355px;}
.z5 .hs71 {top:960px;left:1158px;}
.z4 .hs71 {top:799px;left:964px;}
.z3 .hs71 {top:638px;left:769px;}
.z2 .hs71 {top:477px;left:575px;}
.z1 .hs71 {top:315px;left:380px;}
.z6 .hs79-2 {top:1237px;left:1171px;}
.z5 .hs79-2 {top:1058px;left:1001px;}
.z4 .hs79-2 {top:880px;left:833px;}
.z3 .hs79-2 {top:702px;left:665px;}
.z2 .hs79-2 {top:525px;left:497px;}
.z1 .hs79-2 {top:347px;left:329px;}
.z6 .hs79-1 {top:1208px;left:1191px;}
.z5 .hs79-1 {top:1033px;left:1018px;}
.z4 .hs79-1 {top:859px;left:847px;}
.z3 .hs79-1 {top:686px;left:676px;}
.z2 .hs79-1 {top:513px;left:505px;}
.z1 .hs79-1 {top:339px;left:334px;}
.z6 .hs80 {top:1188px;left:1226px;}
.z5 .hs80 {top:1016px;left:1048px;}
.z4 .hs80 {top:845px;left:872px;}
.z3 .hs80 {top:675px;left:696px;}
.z2 .hs80 {top:504px;left:520px;}
.z1 .hs80 {top:334px;left:344px;}
.z6 .hs67 {top:1206px;left:1496px;}
.z5 .hs67 {top:1031px;left:1279px;}
.z4 .hs67 {top:858px;left:1064px;}
.z3 .hs67 {top:685px;left:850px;}
.z2 .hs67 {top:512px;left:635px;}
.z1 .hs67 {top:339px;left:420px;}
.z6 .hs68 {top:1198px;left:1437px;}
.z5 .hs68 {top:1024px;left:1229px;}
.z4 .hs68 {top:852px;left:1022px;}
.z3 .hs68 {top:680px;left:816px;}
.z2 .hs68 {top:508px;left:610px;}
.z1 .hs68 {top:336px;left:404px;}
.z6 .hs70a {top:1112px;left:1462px;}
.z5 .hs70a {top:951px;left:1250px;}
.z4 .hs70a {top:791px;left:1040px;}
.z3 .hs70a {top:631px;left:830px;}
.z2 .hs70a {top:472px;left:620px;}
.z1 .hs70a {top:312px;left:411px;}
.z6 .hs70b {top:1115px;left:1483px;}
.z5 .hs70b {top:953px;left:1268px;}
.z4 .hs70b {top:793px;left:1055px;}
.z3 .hs70b {top:633px;left:842px;}
.z2 .hs70b {top:473px;left:629px;}
.z1 .hs70b {top:313px;left:416px;}
.z6 .hs66a {top:1114px;left:1521px;}
.z5 .hs66a {top:952px;left:1300px;}
.z4 .hs66a {top:792px;left:1082px;}
.z3 .hs66a {top:633px;left:864px;}
.z2 .hs66a {top:473px;left:645px;}
.z1 .hs66a {top:313px;left:427px;}
.z6 .hs66b {top:1112px;left:1547px;}
.z5 .hs66b {top:951px;left:1323px;}
.z4 .hs66b {top:791px;left:1101px;}
.z3 .hs66b {top:631px;left:878px;}
.z2 .hs66b {top:472px;left:656px;}
.z1 .hs66b {top:312px;left:434px;}
.z6 .hs65 {top:1156px;left:1560px;}
.z5 .hs65 {top:988px;left:1334px;}
.z4 .hs65 {top:822px;left:1110px;}
.z3 .hs65 {top:656px;left:886px;}
.z2 .hs65 {top:491px;left:662px;}
.z1 .hs65 {top:325px;left:438px;}
.z6 .hs64 {top:1194px;left:1586px;}
.z5 .hs64 {top:1021px;left:1356px;}
.z4 .hs64 {top:849px;left:1128px;}
.z3 .hs64 {top:678px;left:901px;}
.z2 .hs64 {top:507px;left:673px;}
.z1 .hs64 {top:335px;left:445px;}
.z6 .hs63a {top:1207px;left:1620px;}
.z5 .hs63a {top:1032px;left:1385px;}
.z4 .hs63a {top:859px;left:1152px;}
.z3 .hs63a {top:685px;left:920px;}
.z2 .hs63a {top:512px;left:687px;}
.z1 .hs63a {top:339px;left:455px;}
.z6 .hs63b {top:1179px;left:1631px;}
.z5 .hs63b {top:1008px;left:1394px;}
.z4 .hs63b {top:839px;left:1160px;}
.z3 .hs63b {top:670px;left:926px;}
.z2 .hs63b {top:500px;left:692px;}
.z1 .hs63b {top:331px;left:458px;}
.z6 .hs62 {top:1130px;left:1791px;}
.z5 .hs62 {top:966px;left:1531px;}
.z4 .hs62 {top:804px;left:1274px;}
.z3 .hs62 {top:642px;left:1017px;}
.z2 .hs62 {top:480px;left:760px;}
.z1 .hs62 {top:317px;left:503px;}
.z6 .hs61 {top:1136px;left:1882px;}
.z5 .hs61 {top:971px;left:1609px;}
.z4 .hs61 {top:808px;left:1339px;}
.z3 .hs61 {top:645px;left:1069px;}
.z2 .hs61 {top:482px;left:799px;}
.z1 .hs61 {top:319px;left:528px;}
.z6 .hs60 {top:1134px;left:1938px;}
.z5 .hs60 {top:969px;left:1657px;}
.z4 .hs60 {top:807px;left:1379px;}
.z3 .hs60 {top:644px;left:1101px;}
.z2 .hs60 {top:481px;left:822px;}
.z1 .hs60 {top:318px;left:544px;}
.z6 .hs59 {top:1175px;left:1980px;}
.z5 .hs59 {top:1005px;left:1693px;}
.z4 .hs59 {top:836px;left:1409px;}
.z3 .hs59 {top:667px;left:1124px;}
.z2 .hs59 {top:499px;left:840px;}
.z1 .hs59 {top:330px;left:556px;}
.z6 .hs58 {top:1176px;left:2040px;}
.z5 .hs58 {top:1005px;left:1744px;}
.z4 .hs58 {top:837px;left:1451px;}
.z3 .hs58 {top:668px;left:1158px;}
.z2 .hs58 {top:499px;left:866px;}
.z1 .hs58 {top:330px;left:573px;}
.z6 .hs56 {top:1089px;left:2051px;}
.z5 .hs56 {top:931px;left:1753px;}
.z4 .hs56 {top:775px;left:1459px;}
.z3 .hs56 {top:618px;left:1165px;}
.z2 .hs56 {top:462px;left:870px;}
.z1 .hs56 {top:306px;left:576px;}
.z6 .hs57a {top:1131px;left:2050px;}
.z5 .hs57a {top:967px;left:1753px;}
.z4 .hs57a {top:805px;left:1458px;}
.z3 .hs57a {top:642px;left:1164px;}
.z2 .hs57a {top:480px;left:870px;}
.z1 .hs57a {top:318px;left:576px;}
.z6 .hs57b {top:1131px;left:2080px;}
.z5 .hs57b {top:967px;left:1778px;}
.z4 .hs57b {top:805px;left:1480px;}
.z3 .hs57b {top:642px;left:1181px;}
.z2 .hs57b {top:480px;left:883px;}
.z1 .hs57b {top:318px;left:584px;}
.z6 .hs55a {top:1107px;left:2185px;}
.z5 .hs55a {top:946px;left:1868px;}
.z4 .hs55a {top:788px;left:1554px;}
.z3 .hs55a {top:629px;left:1241px;}
.z2 .hs55a {top:470px;left:927px;}
.z1 .hs55a {top:311px;left:614px;}
.z6 .hs55b {top:1098px;left:2207px;}
.z5 .hs55b {top:939px;left:1887px;}
.z4 .hs55b {top:781px;left:1570px;}
.z3 .hs55b {top:624px;left:1253px;}
.z2 .hs55b {top:466px;left:937px;}
.z1 .hs55b {top:308px;left:620px;}
.z6 .hs54 {top:1145px;left:2235px;}
.z5 .hs54 {top:979px;left:1911px;}
.z4 .hs54 {top:815px;left:1590px;}
.z3 .hs54 {top:650px;left:1269px;}
.z2 .hs54 {top:486px;left:948px;}
.z1 .hs54 {top:322px;left:628px;}
.z6 .hs53 {top:1120px;left:2275px;}
.z5 .hs53 {top:958px;left:1945px;}
.z4 .hs53 {top:797px;left:1618px;}
.z3 .hs53 {top:636px;left:1292px;}
.z2 .hs53 {top:475px;left:965px;}
.z1 .hs53 {top:315px;left:639px;}
.z6 .hs50 {top:1085px;left:2367px;}
.z5 .hs50 {top:928px;left:2024px;}
.z4 .hs50 {top:772px;left:1684px;}
.z3 .hs50 {top:616px;left:1344px;}
.z2 .hs50 {top:460px;left:1004px;}
.z1 .hs50 {top:305px;left:665px;}
.z6 .hs51 {top:1135px;left:2343px;}
.z5 .hs51 {top:970px;left:2003px;}
.z4 .hs51 {top:807px;left:1667px;}
.z3 .hs51 {top:645px;left:1331px;}
.z2 .hs51 {top:482px;left:994px;}
.z1 .hs51 {top:319px;left:658px;}
.z6 .hs49a {top:1121px;left:2384px;}
.z5 .hs49a {top:958px;left:2038px;}
.z4 .hs49a {top:797px;left:1696px;}
.z3 .hs49a {top:637px;left:1354px;}
.z2 .hs49a {top:476px;left:1012px;}
.z1 .hs49a {top:315px;left:669px;}
.z6 .hs49b {top:1124px;left:2412px;}
.z5 .hs49b {top:961px;left:2062px;}
.z4 .hs49b {top:800px;left:1716px;}
.z3 .hs49b {top:638px;left:1370px;}
.z2 .hs49b {top:477px;left:1024px;}
.z1 .hs49b {top:316px;left:677px;}
.z6 .hs47 {top:1088px;left:2426px;}
.z5 .hs47 {top:930px;left:2074px;}
.z4 .hs47 {top:774px;left:1726px;}
.z3 .hs47 {top:618px;left:1378px;}
.z2 .hs47 {top:462px;left:1029px;}
.z1 .hs47 {top:306px;left:681px;}
.z6 .hs48 {top:1026px;left:2437px;}
.z5 .hs48 {top:877px;left:2083px;}
.z4 .hs48 {top:730px;left:1734px;}
.z3 .hs48 {top:583px;left:1384px;}
.z2 .hs48 {top:435px;left:1034px;}
.z1 .hs48 {top:288px;left:684px;}
.z6 .hs52a {top:998px;left:2354px;}
.z5 .hs52a {top:853px;left:2012px;}
.z4 .hs52a {top:710px;left:1675px;}
.z3 .hs52a {top:567px;left:1337px;}
.z2 .hs52a {top:423px;left:999px;}
.z1 .hs52a {top:280px;left:661px;}
.z6 .hs52b {top:1008px;left:2382px;}
.z5 .hs52b {top:862px;left:2036px;}
.z4 .hs52b {top:717px;left:1695px;}
.z3 .hs52b {top:572px;left:1353px;}
.z2 .hs52b {top:428px;left:1011px;}
.z1 .hs52b {top:283px;left:669px;}
.z6 .hs51-1 {top:978px;left:2289px;}
.z5 .hs51-1 {top:836px;left:1957px;}
.z4 .hs51-1 {top:696px;left:1628px;}
.z3 .hs51-1 {top:555px;left:1300px;}
.z2 .hs51-1 {top:415px;left:971px;}
.z1 .hs51-1 {top:275px;left:643px;}
.z6 .hs28a {top:928px;left:2345px;}
.z5 .hs28a {top:793px;left:2005px;}
.z4 .hs28a {top:660px;left:1668px;}
.z3 .hs28a {top:527px;left:1332px;}
.z2 .hs28a {top:394px;left:995px;}
.z1 .hs28a {top:261px;left:659px;}
.z6 .hs28b {top:928px;left:2366px;}
.z5 .hs28b {top:793px;left:2023px;}
.z4 .hs28b {top:660px;left:1683px;}
.z3 .hs28b {top:527px;left:1344px;}
.z2 .hs28b {top:394px;left:1004px;}
.z1 .hs28b {top:261px;left:664px;}
.z6 .hs27a {top:933px;left:2393px;}
.z5 .hs27a {top:798px;left:2046px;}
.z4 .hs27a {top:664px;left:1702px;}
.z3 .hs27a {top:530px;left:1359px;}
.z2 .hs27a {top:396px;left:1015px;}
.z1 .hs27a {top:262px;left:672px;}
.z6 .hs27b {top:933px;left:2417px;}
.z5 .hs27b {top:798px;left:2066px;}
.z4 .hs27b {top:664px;left:1719px;}
.z3 .hs27b {top:530px;left:1373px;}
.z2 .hs27b {top:396px;left:1026px;}
.z1 .hs27b {top:262px;left:679px;}
.z6 .hs26a {top:947px;left:2450px;}
.z5 .hs26a {top:810px;left:2095px;}
.z4 .hs26a {top:674px;left:1743px;}
.z3 .hs26a {top:538px;left:1391px;}
.z2 .hs26a {top:402px;left:1040px;}
.z1 .hs26a {top:266px;left:688px;}
.z6 .hs26b {top:966px;left:2463px;}
.z5 .hs26b {top:826px;left:2106px;}
.z4 .hs26b {top:687px;left:1752px;}
.z3 .hs26b {top:549px;left:1399px;}
.z2 .hs26b {top:410px;left:1045px;}
.z1 .hs26b {top:271px;left:692px;}
.z6 .hs1 {top:673px;left:2519px;}
.z5 .hs1 {top:575px;left:2154px;}
.z4 .hs1 {top:479px;left:1792px;}
.z3 .hs1 {top:382px;left:1430px;}
.z2 .hs1 {top:286px;left:1069px;}
.z1 .hs1 {top:189px;left:707px;}
.z6 .hs2 {top:673px;left:2603px;}
.z5 .hs2 {top:575px;left:2225px;}
.z4 .hs2 {top:479px;left:1852px;}
.z3 .hs2 {top:382px;left:1478px;}
.z2 .hs2 {top:286px;left:1105px;}
.z1 .hs2 {top:189px;left:731px;}
.z6 .hs3a {top:678px;left:2629px;}
.z5 .hs3a {top:580px;left:2248px;}
.z4 .hs3a {top:482px;left:1870px;}
.z3 .hs3a {top:385px;left:1493px;}
.z2 .hs3a {top:288px;left:1116px;}
.z1 .hs3a {top:190px;left:738px;}
.z6 .hs3b {top:686px;left:2653px;}
.z5 .hs3b {top:586px;left:2268px;}
.z4 .hs3b {top:488px;left:1887px;}
.z3 .hs3b {top:390px;left:1507px;}
.z2 .hs3b {top:291px;left:1126px;}
.z1 .hs3b {top:193px;left:745px;}
.z6 .hs4 {top:689px;left:2714px;}
.z5 .hs4 {top:589px;left:2320px;}
.z4 .hs4 {top:490px;left:1931px;}
.z3 .hs4 {top:391px;left:1541px;}
.z2 .hs4 {top:292px;left:1152px;}
.z1 .hs4 {top:193px;left:762px;}
.z6 .hs5 {top:730px;left:2787px;}
.z5 .hs5 {top:624px;left:2383px;}
.z4 .hs5 {top:519px;left:1983px;}
.z3 .hs5 {top:415px;left:1583px;}
.z2 .hs5 {top:310px;left:1183px;}
.z1 .hs5 {top:205px;left:783px;}
.z6 .hs6 {top:752px;left:2711px;}
.z5 .hs6 {top:643px;left:2318px;}
.z4 .hs6 {top:535px;left:1929px;}
.z3 .hs6 {top:427px;left:1539px;}
.z2 .hs6 {top:319px;left:1150px;}
.z1 .hs6 {top:211px;left:761px;}
.z6 .hs7 {top:785px;left:2780px;}
.z5 .hs7 {top:671px;left:2377px;}
.z4 .hs7 {top:558px;left:1978px;}
.z3 .hs7 {top:446px;left:1579px;}
.z2 .hs7 {top:333px;left:1180px;}
.z1 .hs7 {top:220px;left:781px;}
.z6 .hs8 {top:811px;left:2820px;}
.z5 .hs8 {top:693px;left:2411px;}
.z4 .hs8 {top:577px;left:2006px;}
.z3 .hs8 {top:461px;left:1601px;}
.z2 .hs8 {top:344px;left:1197px;}
.z1 .hs8 {top:228px;left:792px;}
.z6 .hs9 {top:826px;left:2890px;}
.z5 .hs9 {top:706px;left:2471px;}
.z4 .hs9 {top:588px;left:2056px;}
.z3 .hs9 {top:469px;left:1641px;}
.z2 .hs9 {top:351px;left:1226px;}
.z1 .hs9 {top:232px;left:812px;}
.z6 .hs10a {top:837px;left:2853px;}
.z5 .hs10a {top:716px;left:2439px;}
.z4 .hs10a {top:595px;left:2030px;}
.z3 .hs10a {top:475px;left:1620px;}
.z2 .hs10a {top:355px;left:1211px;}
.z1 .hs10a {top:235px;left:801px;}
.z6 .hs10b {top:862px;left:2869px;}
.z5 .hs10b {top:737px;left:2453px;}
.z4 .hs10b {top:613px;left:2041px;}
.z3 .hs10b {top:489px;left:1629px;}
.z2 .hs10b {top:366px;left:1217px;}
.z1 .hs10b {top:242px;left:806px;}
.z6 .hs12 {top:846px;left:2761px;}
.z5 .hs12 {top:723px;left:2360px;}
.z4 .hs12 {top:602px;left:1964px;}
.z3 .hs12 {top:480px;left:1568px;}
.z2 .hs12 {top:359px;left:1172px;}
.z1 .hs12 {top:238px;left:775px;}
.z6 .hs14 {top:796px;left:2700px;}
.z5 .hs14 {top:681px;left:2308px;}
.z4 .hs14 {top:566px;left:1921px;}
.z3 .hs14 {top:452px;left:1533px;}
.z2 .hs14 {top:338px;left:1146px;}
.z1 .hs14 {top:224px;left:758px;}
.z6 .hs15 {top:823px;left:2663px;}
.z5 .hs15 {top:704px;left:2277px;}
.z4 .hs15 {top:585px;left:1894px;}
.z3 .hs15 {top:467px;left:1512px;}
.z2 .hs15 {top:349px;left:1130px;}
.z1 .hs15 {top:231px;left:748px;}
.z6 .hs16 {top:801px;left:2605px;}
.z5 .hs16 {top:685px;left:2227px;}
.z4 .hs16 {top:570px;left:1853px;}
.z3 .hs16 {top:455px;left:1479px;}
.z2 .hs16 {top:340px;left:1105px;}
.z1 .hs16 {top:225px;left:732px;}
.z6 .hs17 {top:740px;left:2569px;}
.z5 .hs17 {top:633px;left:2196px;}
.z4 .hs17 {top:526px;left:1828px;}
.z3 .hs17 {top:420px;left:1459px;}
.z2 .hs17 {top:314px;left:1090px;}
.z1 .hs17 {top:208px;left:721px;}
.z6 .hs18 {top:925px;left:2720px;}
.z5 .hs18 {top:791px;left:2325px;}
.z4 .hs18 {top:658px;left:1935px;}
.z3 .hs18 {top:525px;left:1545px;}
.z2 .hs18 {top:393px;left:1154px;}
.z1 .hs18 {top:260px;left:764px;}
.z6 .hs19 {top:970px;left:2696px;}
.z5 .hs19 {top:829px;left:2305px;}
.z4 .hs19 {top:690px;left:1918px;}
.z3 .hs19 {top:551px;left:1531px;}
.z2 .hs19 {top:412px;left:1144px;}
.z1 .hs19 {top:272px;left:757px;}
.z6 .hs20 {top:943px;left:2645px;}
.z5 .hs20 {top:806px;left:2261px;}
.z4 .hs20 {top:671px;left:1882px;}
.z3 .hs20 {top:535px;left:1502px;}
.z2 .hs20 {top:400px;left:1122px;}
.z1 .hs20 {top:265px;left:743px;}
.z6 .hs21 {top:949px;left:2612px;}
.z5 .hs21 {top:811px;left:2233px;}
.z4 .hs21 {top:675px;left:1858px;}
.z3 .hs21 {top:539px;left:1483px;}
.z2 .hs21 {top:403px;left:1108px;}
.z1 .hs21 {top:266px;left:733px;}
.z6 .hs22 {top:893px;left:2640px;}
.z5 .hs22 {top:763px;left:2257px;}
.z4 .hs22 {top:635px;left:1878px;}
.z3 .hs22 {top:507px;left:1499px;}
.z2 .hs22 {top:379px;left:1120px;}
.z1 .hs22 {top:251px;left:741px;}
.z6 .hs24 {top:885px;left:2545px;}
.z5 .hs24 {top:757px;left:2176px;}
.z4 .hs24 {top:630px;left:1810px;}
.z3 .hs24 {top:503px;left:1445px;}
.z2 .hs24 {top:376px;left:1080px;}
.z1 .hs24 {top:249px;left:715px;}
.z6 .hs25 {top:886px;left:2485px;}
.z5 .hs25 {top:757px;left:2124px;}
.z4 .hs25 {top:630px;left:1768px;}
.z3 .hs25 {top:503px;left:1411px;}
.z2 .hs25 {top:376px;left:1054px;}
.z1 .hs25 {top:249px;left:698px;}
.z6 .hs2-1 {top:1014px;left:3052px;}
.z5 .hs2-1 {top:867px;left:2609px;}
.z4 .hs2-1 {top:721px;left:2171px;}
.z3 .hs2-1 {top:576px;left:1733px;}
.z2 .hs2-1 {top:430px;left:1295px;}
.z1 .hs2-1 {top:285px;left:857px;}
.z6 .hs2-2 {top:974px;left:2971px;}
.z5 .hs2-2 {top:833px;left:2540px;}
.z4 .hs2-2 {top:693px;left:2114px;}
.z3 .hs2-2 {top:553px;left:1687px;}
.z2 .hs2-2 {top:413px;left:1261px;}
.z1 .hs2-2 {top:274px;left:834px;}
.z6 .hs2-3 {top:935px;left:3040px;}
.z5 .hs2-3 {top:799px;left:2599px;}
.z4 .hs2-3 {top:665px;left:2163px;}
.z3 .hs2-3 {top:531px;left:1726px;}
.z2 .hs2-3 {top:397px;left:1290px;}
.z1 .hs2-3 {top:263px;left:854px;}
.z6 .hs2-4 {top:900px;left:2970px;}
.z5 .hs2-4 {top:769px;left:2539px;}
.z4 .hs2-4 {top:640px;left:2113px;}
.z3 .hs2-4 {top:511px;left:1687px;}
.z2 .hs2-4 {top:382px;left:1260px;}
.z1 .hs2-4 {top:253px;left:834px;}
.z6 .hs2-5 {top:1020px;left:3135px;}
.z5 .hs2-5 {top:872px;left:2680px;}
.z4 .hs2-5 {top:726px;left:2230px;}
.z3 .hs2-5 {top:579px;left:1780px;}
.z2 .hs2-5 {top:433px;left:1330px;}
.z1 .hs2-5 {top:286px;left:880px;}
.z6 .hs1-9 {top:1355px;left:3025px;}
.z5 .hs1-9 {top:1158px;left:2586px;}
.z4 .hs1-9 {top:964px;left:2152px;}
.z3 .hs1-9 {top:769px;left:1718px;}
.z2 .hs1-9 {top:575px;left:1284px;}
.z1 .hs1-9 {top:380px;left:849px;}
.z6 .hs1-8 {top:1104px;left:2995px;}
.z5 .hs1-8 {top:944px;left:2560px;}
.z4 .hs1-8 {top:785px;left:2131px;}
.z3 .hs1-8 {top:627px;left:1701px;}
.z2 .hs1-8 {top:468px;left:1271px;}
.z1 .hs1-8 {top:310px;left:841px;}
.z6 .hs1-1 {top:1214px;left:2988px;}
.z5 .hs1-1 {top:1038px;left:2554px;}
.z4 .hs1-1 {top:864px;left:2126px;}
.z3 .hs1-1 {top:689px;left:1697px;}
.z2 .hs1-1 {top:515px;left:1268px;}
.z1 .hs1-1 {top:341px;left:839px;}
.z6 .hs1-2 {top:1165px;left:2975px;}
.z5 .hs1-2 {top:996px;left:2543px;}
.z4 .hs1-2 {top:829px;left:2116px;}
.z3 .hs1-2 {top:662px;left:1689px;}
.z2 .hs1-2 {top:494px;left:1262px;}
.z1 .hs1-2 {top:327px;left:835px;}
.z6 .hs1-3 {top:1189px;left:2910px;}
.z5 .hs1-3 {top:1016px;left:2488px;}
.z4 .hs1-3 {top:846px;left:2070px;}
.z3 .hs1-3 {top:675px;left:1652px;}
.z2 .hs1-3 {top:505px;left:1235px;}
.z1 .hs1-3 {top:334px;left:817px;}
.z6 .hs1-4 {top:1135px;left:2873px;}
.z5 .hs1-4 {top:970px;left:2456px;}
.z4 .hs1-4 {top:807px;left:2044px;}
.z3 .hs1-4 {top:645px;left:1631px;}
.z2 .hs1-4 {top:482px;left:1219px;}
.z1 .hs1-4 {top:319px;left:807px;}
.z6 .hs1-5 {top:1112px;left:2819px;}
.z5 .hs1-5 {top:951px;left:2410px;}
.z4 .hs1-5 {top:791px;left:2005px;}
.z3 .hs1-5 {top:631px;left:1601px;}
.z2 .hs1-5 {top:472px;left:1196px;}
.z1 .hs1-5 {top:312px;left:792px;}
.z6 .hs1-6 {top:1111px;left:2756px;}
.z5 .hs1-6 {top:950px;left:2356px;}
.z4 .hs1-6 {top:790px;left:1961px;}
.z3 .hs1-6 {top:631px;left:1565px;}
.z2 .hs1-6 {top:471px;left:1169px;}
.z1 .hs1-6 {top:312px;left:774px;}
.z6 .hs1-7 {top:1100px;left:2677px;}
.z5 .hs1-7 {top:940px;left:2289px;}
.z4 .hs1-7 {top:783px;left:1904px;}
.z3 .hs1-7 {top:625px;left:1520px;}
.z2 .hs1-7 {top:467px;left:1136px;}
.z1 .hs1-7 {top:309px;left:752px;}
.z6 .hs29a {top:1224px;left:2808px;}
.z5 .hs29a {top:1046px;left:2401px;}
.z4 .hs29a {top:871px;left:1998px;}
.z3 .hs29a {top:695px;left:1595px;}
.z2 .hs29a {top:519px;left:1192px;}
.z1 .hs29a {top:344px;left:789px;}
.z6 .hs29b {top:1248px;left:2834px;}
.z5 .hs29b {top:1067px;left:2423px;}
.z4 .hs29b {top:888px;left:2016px;}
.z3 .hs29b {top:709px;left:1609px;}
.z2 .hs29b {top:530px;left:1203px;}
.z1 .hs29b {top:350px;left:796px;}
.z6 .hs30a {top:1269px;left:2858px;}
.z5 .hs30a {top:1085px;left:2443px;}
.z4 .hs30a {top:903px;left:2033px;}
.z3 .hs30a {top:721px;left:1623px;}
.z2 .hs30a {top:538px;left:1213px;}
.z1 .hs30a {top:356px;left:803px;}
.z6 .hs30b {top:1290px;left:2871px;}
.z5 .hs30b {top:1103px;left:2454px;}
.z4 .hs30b {top:918px;left:2042px;}
.z3 .hs30b {top:733px;left:1630px;}
.z2 .hs30b {top:547px;left:1218px;}
.z1 .hs30b {top:362px;left:806px;}
.z6 .hs31 {top:1308px;left:2801px;}
.z5 .hs31 {top:1118px;left:2395px;}
.z4 .hs31 {top:930px;left:1993px;}
.z3 .hs31 {top:743px;left:1591px;}
.z2 .hs31 {top:555px;left:1189px;}
.z1 .hs31 {top:367px;left:787px;}
.z6 .hs33a {top:1260px;left:2747px;}
.z5 .hs33a {top:1077px;left:2348px;}
.z4 .hs33a {top:896px;left:1954px;}
.z3 .hs33a {top:716px;left:1560px;}
.z2 .hs33a {top:535px;left:1166px;}
.z1 .hs33a {top:354px;left:771px;}
.z6 .hs33b {top:1270px;left:2767px;}
.z5 .hs33b {top:1086px;left:2366px;}
.z4 .hs33b {top:903px;left:1968px;}
.z3 .hs33b {top:721px;left:1571px;}
.z2 .hs33b {top:539px;left:1174px;}
.z1 .hs33b {top:357px;left:777px;}
.z6 .hs35 {top:1379px;left:2665px;}
.z5 .hs35 {top:1179px;left:2278px;}
.z4 .hs35 {top:981px;left:1896px;}
.z3 .hs35 {top:783px;left:1513px;}
.z2 .hs35 {top:585px;left:1131px;}
.z1 .hs35 {top:387px;left:748px;}
.z6 .hs31-2 {top:1367px;left:2735px;}
.z5 .hs31-2 {top:1169px;left:2338px;}
.z4 .hs31-2 {top:972px;left:1946px;}
.z3 .hs31-2 {top:776px;left:1553px;}
.z2 .hs31-2 {top:580px;left:1161px;}
.z1 .hs31-2 {top:384px;left:768px;}
.z6 .hs31-1 {top:1351px;left:2772px;}
.z5 .hs31-1 {top:1155px;left:2370px;}
.z4 .hs31-1 {top:961px;left:1972px;}
.z3 .hs31-1 {top:767px;left:1574px;}
.z2 .hs31-1 {top:573px;left:1176px;}
.z1 .hs31-1 {top:379px;left:778px;}
.z6 .hs31-3 {top:1395px;left:2796px;}
.z5 .hs31-3 {top:1193px;left:2390px;}
.z4 .hs31-3 {top:992px;left:1989px;}
.z3 .hs31-3 {top:792px;left:1588px;}
.z2 .hs31-3 {top:592px;left:1186px;}
.z1 .hs31-3 {top:392px;left:785px;}
.z6 .hs31-4 {top:1429px;left:2781px;}
.z5 .hs31-4 {top:1222px;left:2378px;}
.z4 .hs31-4 {top:1017px;left:1978px;}
.z3 .hs31-4 {top:811px;left:1579px;}
.z2 .hs31-4 {top:606px;left:1180px;}
.z1 .hs31-4 {top:401px;left:781px;}
.z6 .hs31-5 {top:1445px;left:2739px;}
.z5 .hs31-5 {top:1235px;left:2342px;}
.z4 .hs31-5 {top:1028px;left:1948px;}
.z3 .hs31-5 {top:821px;left:1555px;}
.z2 .hs31-5 {top:613px;left:1162px;}
.z1 .hs31-5 {top:406px;left:769px;}
.z6 .hs37a {top:1293px;left:2677px;}
.z5 .hs37a {top:1105px;left:2289px;}
.z4 .hs37a {top:920px;left:1904px;}
.z3 .hs37a {top:734px;left:1520px;}
.z2 .hs37a {top:549px;left:1136px;}
.z1 .hs37a {top:363px;left:752px;}
.z6 .hs37b {top:1292px;left:2705px;}
.z5 .hs37b {top:1105px;left:2313px;}
.z4 .hs37b {top:919px;left:1924px;}
.z3 .hs37b {top:734px;left:1536px;}
.z2 .hs37b {top:548px;left:1148px;}
.z1 .hs37b {top:363px;left:760px;}
.z6 .hs38 {top:1254px;left:2713px;}
.z5 .hs38 {top:1072px;left:2319px;}
.z4 .hs38 {top:892px;left:1930px;}
.z3 .hs38 {top:712px;left:1541px;}
.z2 .hs38 {top:532px;left:1151px;}
.z1 .hs38 {top:352px;left:762px;}
.z6 .hs39a {top:1228px;left:2686px;}
.z5 .hs39a {top:1050px;left:2296px;}
.z4 .hs39a {top:874px;left:1911px;}
.z3 .hs39a {top:697px;left:1525px;}
.z2 .hs39a {top:521px;left:1140px;}
.z1 .hs39a {top:345px;left:754px;}
.z6 .hs39b {top:1221px;left:2707px;}
.z5 .hs39b {top:1044px;left:2314px;}
.z4 .hs39b {top:869px;left:1926px;}
.z3 .hs39b {top:693px;left:1537px;}
.z2 .hs39b {top:518px;left:1149px;}
.z1 .hs39b {top:343px;left:760px;}
.z6 .hs40 {top:1208px;left:2650px;}
.z5 .hs40 {top:1033px;left:2266px;}
.z4 .hs40 {top:859px;left:1885px;}
.z3 .hs40 {top:686px;left:1505px;}
.z2 .hs40 {top:513px;left:1124px;}
.z1 .hs40 {top:339px;left:744px;}
.z6 .hs26-1 {top:1188px;left:2752px;}
.z5 .hs26-1 {top:1016px;left:2353px;}
.z4 .hs26-1 {top:845px;left:1958px;}
.z3 .hs26-1 {top:675px;left:1563px;}
.z2 .hs26-1 {top:504px;left:1168px;}
.z1 .hs26-1 {top:334px;left:773px;}
.z6 .hs41 {top:1193px;left:2598px;}
.z5 .hs41 {top:1020px;left:2221px;}
.z4 .hs41 {top:849px;left:1848px;}
.z3 .hs41 {top:677px;left:1475px;}
.z2 .hs41 {top:506px;left:1102px;}
.z1 .hs41 {top:335px;left:730px;}
.z6 .hs42a {top:1151px;left:2603px;}
.z5 .hs42a {top:984px;left:2225px;}
.z4 .hs42a {top:819px;left:1852px;}
.z3 .hs42a {top:654px;left:1478px;}
.z2 .hs42a {top:488px;left:1105px;}
.z1 .hs42a {top:323px;left:731px;}
.z6 .hs42b {top:1152px;left:2629px;}
.z5 .hs42b {top:985px;left:2248px;}
.z4 .hs42b {top:820px;left:1870px;}
.z3 .hs42b {top:654px;left:1493px;}
.z2 .hs42b {top:489px;left:1116px;}
.z1 .hs42b {top:323px;left:738px;}
.z6 .hs43 {top:1145px;left:2564px;}
.z5 .hs43 {top:979px;left:2192px;}
.z4 .hs43 {top:815px;left:1824px;}
.z3 .hs43 {top:650px;left:1456px;}
.z2 .hs43 {top:486px;left:1088px;}
.z1 .hs43 {top:322px;left:720px;}
.z6 .hs44 {top:1095px;left:2503px;}
.z5 .hs44 {top:936px;left:2140px;}
.z4 .hs44 {top:779px;left:1781px;}
.z3 .hs44 {top:622px;left:1421px;}
.z2 .hs44 {top:465px;left:1062px;}
.z1 .hs44 {top:307px;left:703px;}
.z6 .hs45a {top:1152px;left:2479px;}
.z5 .hs45a {top:985px;left:2119px;}
.z4 .hs45a {top:820px;left:1764px;}
.z3 .hs45a {top:654px;left:1408px;}
.z2 .hs45a {top:489px;left:1052px;}
.z1 .hs45a {top:323px;left:696px;}
.z6 .hs45b {top:1158px;left:2496px;}
.z5 .hs45b {top:990px;left:2134px;}
.z4 .hs45b {top:824px;left:1776px;}
.z3 .hs45b {top:658px;left:1417px;}
.z2 .hs45b {top:491px;left:1059px;}
.z1 .hs45b {top:325px;left:701px;}
.z6 .hs46 {top:1084px;left:2460px;}
.z5 .hs46 {top:927px;left:2103px;}
.z4 .hs46 {top:771px;left:1750px;}
.z3 .hs46 {top:616px;left:1397px;}
.z2 .hs46 {top:460px;left:1044px;}
.z1 .hs46 {top:304px;left:691px;}
.z6 .hs200a {top:1169px;left:530px;}
.z5 .hs200a {top:999px;left:453px;}
.z4 .hs200a {top:832px;left:377px;}
.z3 .hs200a {top:664px;left:301px;}
.z2 .hs200a {top:496px;left:225px;}
.z1 .hs200a {top:328px;left:149px;}
.z6 .hs200b {top:1140px;left:485px;}
.z5 .hs200b {top:975px;left:415px;}
.z4 .hs200b {top:811px;left:345px;}
.z3 .hs200b {top:647px;left:275px;}
.z2 .hs200b {top:484px;left:206px;}
.z1 .hs200b {top:320px;left:136px;}
.z6 .hs109 {top:295px;left:486px;}
.z5 .hs109 {top:252px;left:415px;}
.z4 .hs109 {top:210px;left:346px;}
.z3 .hs109 {top:168px;left:276px;}
.z2 .hs109 {top:125px;left:206px;}
.z1 .hs109 {top:83px;left:136px;}
    
  </style>

          </div>
        </div>

        <!--<script type="text/javascript">
        // Функция для добавления обработчика событий мышки!
  function addHandler(object, event, handler) {
    if (object.addEventListener) {
      object.addEventListener(event, handler, false);
    }
    else if (object.attachEvent) {
      object.attachEvent('on' + event, handler);
    }
    else alert("Обработчик не поддерживается");
  }
  // Добавляем обработчики для разных браузеров
  addHandler(window, 'DOMMouseScroll', wheel);
  addHandler(window, 'mousewheel', wheel);
  addHandler(document, 'mousewheel', wheel);
  // Функция, обрабатывающая событие
  function wheel(event) {
    var delta; // Направление колёсика мыши
    event = event || window.event;
    // Opera и IE работают со свойством wheelDelta
    if (event.wheelDelta) { // В Opera и IE
      delta = event.wheelDelta / 120;
      // В Опере значение wheelDelta такое же, но с противоположным знаком
      if (window.opera) delta = -delta; // Дополнительно для Opera
    }
    else if (event.detail) { // Для Gecko
      delta = -event.detail / 3;
    }
    // Запрещаем обработку события браузером по умолчанию
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
  if (delta>0) $('.zoom').click();
   else $('.zoom').click();
   // alert(delta); // Выводим направление колёсика мыши
  }
      </script>
      -->
    </div>
  </div>

</div>
</div>
</div>
</div>