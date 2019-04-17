<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.bundle.css" />

    <title>Карта изучения культуры и быта мордовского народа</title>
  </head>
  <body>
    <div class="container-main">
      <div class="title-block">
        <h1 class="title-map">Географический справочник учебных заведений</h1>
      </div>
      <div class="container-map">
        <div class="wrapper">
          <div id="map"></div>
        </div>
      </div>

      <div class="block-area"></div>

      <div class="footer-map">
        <div class="block-text">
          <h3>Контакты</h3>
          <div class="names">
            <div class="block-name">Имя</div>
            <div class="block-name">Имя</div>
            <div class="block-name">Имя</div>
          </div>
        </div>
      </div>
    </div>
    <section class="overlay" aria-hidden="true">
      <div class="popup">
        <span class="close">X</span>
        <h2 class="area-name"></h2>

        <div class="content"></div>
      </div>
    </section>

    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.js"></script>
    <script src="js/bundle.js"></script>
  </body>
</html>
