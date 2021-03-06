<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.bundle.css" />

    <title>Сайт</title>
  </head>
  <body>
    <div class="background-img"></div>

    <div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="block-ornament" href="{{ route('map') }}">
          <img src="./uploads/ornament.png" alt="Орнамент" class="ornament" />
        </a>
        <button
          class="navbar-toggler js-btn-collapse"
          type="button"
          data-toggle="collapse"
          data-target="#navbar1"
          aria-controls="navbar1"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar1">
          <ul class="navbar-nav mr-auto justify-content-center js-nav"></ul>
        </div>
      </nav>
      <div class="container">
        <div class="dynamic-place"></div>
      </div>
    </div>

    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.js"></script>
    <script src="js/bundle.js"></script>
  </body>
</html>

<script id="books" type="text/x-handlebars-template">
  <div class="books">
    <div class="title-header">
        <h2 class=" my-border-ref">Учебники</h2>
    </div>
    <div class="block-books row">
        <div class="my-col col-md-6 col-lg-4">
          <div class="block-book shadow">
            <div><span class="bold">Название: </span><span class="name"></span></div>
            <div><span class="bold">Автор: </span><span class="author"></span></div>
            <div><span class="bold">Издательство: </span><span class="publish"></span></div>
            <div><span class="bold">Год: </span><span class="year"></span></div>
          </div>
      </div>
    </div>
  </div>
</script>

<script id="cabinets" type="text/x-handlebars-template">
  <div class="cabinets">
      <div class="title-header">
          <h2 class=" my-border-ref">Кабинеты</h2>
      </div>
    <div class="block-cabinets row">
      <div class="my-col col-md-6 col-lg-4">
        <div class="block-cabinet shadow-f">
          <div><span class="bold">Описание: </span><span class="description"></span></div>
          <div><span class="bold">Руководитель: </span><span class="head"></span></div>
        </div>
      </div>
    </div>
  </div>
</script>

<script id="additionalInfo" type="text/x-handlebars-template">
  <div class="additionalInfo">
      <div class="title-header">
          <h2 class=" my-border-ref">Дополнительная информация</h2>
      </div>
    <div class="row block-additionalInfos">
      <div class="my-col col-12">
        <div class="block-additionalInfo">
          <div class="description">
          </div>
        </div>
      </div>
    </div>
  </div>
</script>

<script id="collectives" type="text/x-handlebars-template">
  <div class="collectives">
      <div class="title-header">
          <h2 class=" my-border-ref">Коллективы</h2>
      </div>
    <div class="block-collectives row">
        <div class="my-col col-md-6 col-lg-4">
          <div class="block-collective shadow">
            <div><span class="bold">Название: </span><span class="name"></span></div>
            <div><span class="bold">Руководитель: </span><span class="head"></span></div>
            <div><span class="bold">Уровень: </span><span class="ageChildren"></span></div>
            <div><span class="bold">Описание: </span><span class="description"></span></div>
        </div>
      </div>
    </div>
  </div>
</script>

<script id="events" type="text/x-handlebars-template">
  <div class="events">
      <div class="title-header">
          <h2 class=" my-border-ref">Мероприятия</h2>
      </div>
    <div class="block-events row">
        <div class="my-col col-md-6 col-lg-4">
          <div class="block-event shadow">
            <div><span class="bold">Название: </span><span class="name"></span></div>
            <div><span class="bold">Уровень: </span><span class="level"></span></div>
            <div><span class="bold">Тип: </span><span class="form"></span></div>
            <div><span class="bold">Дата: </span><span class="date"></span></div>
        </div>
      </div>
    </div>
  </div>
</script>

<script id="main" type="text/x-handlebars-template">
  <main class="main">
    <header class="header">
      <h1 class="header-org"></h1>
      <br>
      <p class="header-status shadow"></p>
      <br>
      <p class="header-doc shadow"></p>
    </header>

    <hr>
    <div class="main-people shadow">
      <div class="block-director">
        <span class="bold">Директор: </span>
        <span class="surname"></span>
        <span class="name"></span>
        <span class="patronymic"></span>
      </div>
      <div class="block-responsible">
        <span class="bold">Ответственный:</span>

        <span class="surname"></span>
        <span class="name"></span>
        <span class="patronymic"></span>,
        <span class="bold">телефон:</span>
        <span class="telephone"></span>

      </div>
    </div>
  </main>
</script>

<script id="museums" type="text/x-handlebars-template">
  <div class="museums">
      <div class="title-header">
          <h2 class=" my-border-ref">Музеи</h2>
      </div>

    <div class="block-museums row">
      <div class="my-col col-12">
        <div class="block-museum shadow">
          <div><span class="bold">Описание: </span><span class="description"></span></div>
          <div><span class="bold">Экспозиция: </span><span class="exposition"></span></div>
          <div><span class="bold">Руководитель: </span><span class="head"></span></div>
        </div>

      </div>
    </div>
  </div>
</script>

<script id="others" type="text/x-handlebars-template">
  <div class="others">
      <div class="title-header">
          <h2 class=" my-border-ref">Разное</h2>
      </div>
    <div class="row block-others">
      <div class="my-col col-12">
        <div class="block-other">
          <div class="description">
          </div>
        </div>
      </div>
    </div>
  </div>
</script>

<script id="teachers" type="text/x-handlebars-template">
  <div class="teachers">
      <div class="title-header">
          <h2 class=" my-border-ref">Учителя</h2>
      </div>
    <h3>Родного мордовского языка:</h3>
    <div class="row">
      <div class="col col-md-6">
        <div class="block-teachers shadow-d">
          <div class="my-col-teachers col-12">
            <div class="block-teacher">
              <span class="surname"></span>
              <span class="name"></span>
              <span class="patronymic"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</script>

<script id="subjects" type="text/x-handlebars-template">
  <div class="subjects">
      <div class="title-header">
          <h2 class=" my-border-ref">Предметы</h2>
      </div>
    <div class="block-subjects row">
        <div class="my-col col-md-6 col-lg-4">
          <div class="block-subject shadow">
            <div><span class="bold">Название: </span><span class="title"></span></div>
            <div><span class="bold">Уровень: </span><span class="level"></span></div>
          </div>
      </div>
    </div>
  </div>
</script>

<script id="societies" type="text/x-handlebars-template">
  <div class="societies">
      <div class="title-header">
          <h2 class=" my-border-ref">Кружки</h2>
      </div>
    <div class="block-societies row">
        <div class="my-col col-md-6 col-lg-4">
            <div class="block-society shadow">
            <div><span class="bold">Название: </span><span class="name"></span></div>
            <div><span class="bold">Класс: </span><span class="class"></span></div>
            <div><span class="bold">Руководитель: </span><span class="head"></span></div>
            <div><span class="bold">Описание: </span><span class="description"></span></div>
        </div>
      </div>
    </div>
  </div>
</script>

<script id="openClassrooms" type="text/x-handlebars-template">
  <div class="openClassrooms">
      <div class="title-header">
          <h2 class=" my-border-ref">Факультативы</h2>
      </div>
      <div class="block-openClassrooms row">
          <div class="my-col col-md-6 col-lg-4">
            <div class="block-openClassroom shadow">
              <div><span class="bold">Руководитель: </span><span class="head"></span></div>
              <div><span class="bold">Класс: </span><span class="class"></span></div>
              <div><span class="bold">Описание: </span><span class="description"></span></div>
          </div>
        </div>
      </div>
  </div>
</script>

<script id="methodologs" type="text/x-handlebars-template">
  <div class="methodologs">
      <div class="title-header">
          <h2 class=" my-border-ref">Методические обеспечения</h2>
      </div>
      <div class="block-methodologs row">
          <div class="my-col col-md-6 col-lg-4">
            <div class="block-methodolog shadow">
              <div><span class="bold">Название: </span><span class="name"></span></div>
              <div><span class="bold">Автор: </span><span class="author"></span></div>
              <div><span class="bold">Издательство: </span><span class="publish"></span></div>
              <div><span class="bold">Год: </span><span class="year"></span></div>
          </div>
        </div>
      </div>
  </div>
</script>
