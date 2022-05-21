<!DOCTYPE html>
<html lang="ru">
<?php require_once("head.php")?>

<body style="background-color: rgb(250,242,236);">

<?php require_once("header.php")?>

<!-- карусель бутстрап -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height: 600px;" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/11.png" class="d-block w-100" alt="..." style="height: 600px;" >
      <div class="carousel-caption d-none d-md-block">
        <span style="color:black;"><h3>Макаронс </h3></span>
        <span style="color:black; font-size: 22px;"><p>Макарони на заказ – популярные миндальные пирожные с нежной начинкой</p></span>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/12.png" class="d-block w-100" alt="..." style="height: 600px;">
      <div class="carousel-caption d-none d-md-block">
        <span style="color:black"><h3>Капкейки</h3></span>
        <span style="color:black; font-size: 22px;"><p>Капкейки на заказ это маленькие тортики с ягодной начинкой и нежным кремом</p></span>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/13.png" class="d-block w-100" alt="..." style="height: 600px;">
      <div class="carousel-caption d-none d-md-block">
        <span style="color:black;"><h3>Капкейки для Gender paty</h3></span>
        <span style="color:black; font-size: 22px;"><p>Для особенных моментов Вашй жизни</p></span>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Предыдущий</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Следующий</span>
  </a>
</div>

  <div class="main-circle">
    <div class="wave top"></div>
    <div class="wave bottom"></div>
    
<div class="conainer box2">
  <p>Цена торта ручной работы: от 2500 руб. за 1 кг.
    Предоплата: 100%
    Минимальный вес заказного торта: 2 кг.
    Срок принятия заказа: рекомендуется обращаться за неделю до мероприятия
    Доставка по Москве: 500 руб. | Подмосковье: 500 руб. + 25 руб./км.
    Расчет веса торта: Кусочек торта весит около 180 грамм, и на компанию 10 человек мы рекомендуем торт весом 2 кг.
  </p>
</div>
</div>


      <!-- Контакты -->
  <div class="container box3" style="margin-top: 5rem;">
    <h2 class="text-center">Контакты</h2>
    <div class="row">
            <div class="col-sm-6">
                <h3>Контакты</h3>
                <h5>Адрес:</h5>
                <p>Москва, улица Белореченская д.49<br> Метро "Братиславская"</p>
                <h5>Телефон:</h5>
                <a href="tel:+7906752-05-05"> +7(906)752-05-05</a>
                <h5>E-mail:</h5>
                <a href="lesjaegrva@mail.ru"> lesjaegrva@mail.ru </a> 
                <h5>Часы работы:</h5>
                <p>Ежедневно 10:00-19:00</p>
                    <div class="icons">
                <a href="https://www.instagram.com/egorova_lesya"><img src="/img/instagram1.png" alt="Инстаграм"></a>
                <a href="https://vk.me/id97279400"><img src="/img/vk1.png" alt="Вконтакте"></a>
                <a href="https://wa.me/79036851455?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%F0%9F%91%8B%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D1%8C%20%D0%B2%D0%BA%D1%83%D1%81%D0%BD%D1%8B%D0%B9%20%D1%82%D0%BE%D1%80%D1%82%20"><img src="/img/whatsapp1.png" alt="Вотсап"></a>
                <a href="https://tlgg.ru/lesya_egorova"><img src="/img/telegram1.png" alt="Телеграмм"></a>
                    </div>
            </div>

            <!--Форма обратной связи -->
            <div class="col-sm-6 pt-2">
              <h5 class="text-center">Заполните форму и я свяжусь с Вами в ближайше время</h5>
              <form action="/Helen_Baker/sendmail.php" method="POST">
              <p >Меня интересует:</p>        
                <div class="form-check">
                  <label><input class="form-check-input" type="radio" name="tochka" value="Детские торты" checked>Детские торты</label><br>
                  <label><input class="form-check-input" type="radio" name="tochka" value="Торт на Gender Party">Торт на Gender Party </label><br>
                  <label><input class="form-check-input" type="radio" name="tochka" value="Бенто-торты">Бенто-торты</label><br>
                  <label><input class="form-check-input" type="radio" name="tochka" value="Десерты">Десерты</label><br>
                </div>
              
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ваше имя" name="name">
              </div>
            
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="Ваш E-mail" name="email">
              </div>
            
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Ваш номер телефона" name="phone">
            </div>
            
              <div class="form-group">
                  <textarea class="form-control" placeholder="Сообщение" name="message"></textarea>
              </div>
            
              <div class="form-group">
                  <input type="submit" class="btn btn-warning">
              </div>
                  </form>
            </div>
    </div>
</div>


<!-- Яндекс карты -->
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3bc6ec49ba9a0077d1fd4bbd1132354b6f079b7f88c5365a67d77a2c858b3775&amp;width=100%25&amp;height=243&amp;lang=ru_RU&amp;scroll=true"></script>
  

<?php require_once("footer.php")?>

</body>
</html>