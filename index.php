<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Гостиница "Колизей"</title>
    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <main class="main">
      <header class="toolbar">
        <nav
          class="navbar sticky-top navbar-expand-md navbar-dark"
          style="background-color: #2c241b"
        >
          <div class="container-fluid">
            <a
              class="navbar-brand"
              href="javascript://0"
              onclick="slowScroll('#head')"
            >
              <img
                src="img/logo.svg"
                width="50"
                height="50"
                alt=""
                loading="lazy"
              />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarResponsive"
            >
              <span class="sr-only">Навигация</span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a href="#about" class="nav-link active">О гостинице</a>
                </li>
                <li class="nav-item">
                  <a href="#numbers" class="nav-link">Номера</a>
                </li>
                <li class="nav-item">
                  <a href="#reviews" class="nav-link">Отзывы</a>
                </li>
                <li class="nav-item">
                  <a href="#contact" class="nav-link">Контакты</a>
                </li>
              </ul>
              <div class="phone">
                <a href="tel:+79999999999" class="phone-number"
                  ><img class="img-phone" src="img/phone.png" alt="" />8 (999)
                  99-99-999</a
                >
                <p class="call-back">связаться с нами</p>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <!-- /.header -->
      <section id="head">
        <div class="picture">
          <div class="container">
            <div class="main-content">
              <div class="row">
                <div class="col align-self-center head_panel">
                  <div class="main-title">
                    <h1>Гостиница “Колизей”</h1>
                    <h2>
                      Ваше комфортабельное и уютное размещение <br />
                      по адекватной цене
                    </h2>
                    <div class="advantage">
                      <p>
                        <img
                          class="img-star"
                          src="img/star.svg"
                          alt=""
                        />Удобное месторасположение
                      </p>
                      <p>
                        <img
                          class="img-star"
                          src="img/star.svg"
                          alt=""
                        />Доступные цены
                      </p>
                      <p>
                        <img
                          class="img-star"
                          src="img/star.svg"
                          alt=""
                        />Безопасность
                      </p>
                    </div>
                  </div>
                  <button
                    href="javascript://0"
                    onclick="slowScroll('#numbers')"
                    class="main-button take-number-btn"
                    type="submit"
                  >
                    Выбрать номер
                  </button>
                  <button
                    class="main-button book-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-whatever="@mdo"
                    type="submit"
                  >
                    Забронировать
                  </button>
                  <div class="row align-items-end justify-content-center">
                    <div class="col-5">
                      <div class="arrow">
                        <a href="javascript://0" onclick="slowScroll('#about')"
                          ><i class="fas fa-angle-down"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div
        class="modal hide fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                Заявка на бронирование
              </h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form 
              action="/form.php" method="POST"
              id="bookForm">
                <input
                  type="hidden"
                  name="project_name"
                  value="Гостиница Колизей"
                />
                <input
                  type="hidden"
                  name="admin_email"
                  value="wizardtema@yandex.ru"
                />
                <input
                  type="hidden"
                  name="form_subject"
                  value="Заявка на бронь номера"
                />
                <div class="form-group">
                  <label for="name" class="col-form-label">Ваше имя:</label>
                  <input
                    type="name"
                    name="username"
                    required
                    class="form-control"
                    id="recipient-name"
                    placeholder="Имя"
                  />
                </div>
                <div class="form-group">
                  <label for="number" class="col-form-label"
                    >Ваш номер телефона:</label
                  >
                  <input
                    type="tel"
                    name="phone"
                    class="form-control"
                    id="phone"
                    onkeydown="return validateNumber(event)"
                    maxlength="11"
                    placeholder="7 (999) 99 99 999"
                    required="required"
                  />
                </div>
                <div class="form-group">
                  <label for="mail" class="col-form-label">Ваш e-mail:</label>
                  <input
                    required
                    type="email"
                    name="useremail"
                    class="form-control"
                    placeholder="E-mail"
                  />
                </div>
                <div class="form-group">
                  <label class="col-form-label">Дата бронирования</label>
                  <input
                    required
                    type="date"
                    name="time"
                    id="datepicker"
                    class="form-control"
                    data-position="right top"
                    placeholder="Дата бронирования"
                  />
                </div>
                <div class="form-group">
                  <label for="room" class="col-form-label"
                    >Категория номера:</label
                  >
                  <select type="text" name="category" required>
                    <option value="Стандарт">Стандарт</option>
                    <option value="Комфорт">Комфорт</option>
                    <option value="Люкс">Люкс</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="guests" class="col-form-label"
                    >Количество гостей:</label
                  >
                  <select type="text" name="amount_guests" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <input
                  class="btn book-btn-mod"
                  type="submit"
                  value="Забронировать"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"
    ></script>

    <!-- Подключает файл скриптов -->
    <script src="js/main.js"></script>
  </body>
</html>