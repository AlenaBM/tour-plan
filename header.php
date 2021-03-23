<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://api-maps.yandex.ru/2.1/?apikey=c4f3e61d-d9d6-4038-86b9-895785b12687&lang=en_US"></script>
  <script src="js/map.js"></script>
  <link rel="stylesheet" href="css/slider.css" />
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Best Tour Plan - Hotel booking</title>
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
  <link rel="manifest" href="favicon/site.webmanifest" />
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
</head>

<body>
  <header class="navbar navbar--mobile_fixed">
    <div class="container">
      <div class="navbar-top">
        <a href="https://alena-web.ru/homeworks/tour-plan/" class="logo"><img src="img/logo-horizontal.svg" class="logo__img" alt="Logo: Best Tour Plan" /></a>
        <form action="#" class="form-search navbar-top__search navbar-top__search_mobile_hidden">
          <input type="text" placeholder="Search Location" class="form-search__input" />
          <button class="form-search__btn">
            <img src="img/search.svg" alt="Button: search" />
          </button>
        </form>
        <a href="#" class="user navbar-top__user navbar-top__user_mobile_hidden">
          <img src="img/user.jpg" alt="User: Nathan" class="user__img" />
          <span class="user__name">Nathan</span>
        </a>
        <!-- /.user -->
        <button class="navbar-top__menu-button menu-button">
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
        </button>
      </div>
      <!-- /navbar-top -->
    </div>
    <!-- /container -->

    <div class="navbar-bottom">
      <ul class="navbar-menu container">
        <li class="navbar-menu__item navbar-menu__item_mobile_visible">
          <a href="#" class="user user_visible">
            <img src="img/user.jpg" alt="User: Nathan" class="user__img img-poly" />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
        </li>
        <li class="navbar-menu__item navbar-menu__item_mobile_visible">
          <form action="#" class="form-search form-search_visible">
            <input type="text" placeholder="Search Location" class="form-search__input" />
            <button class="form-search__btn">
              <img src="img/search.svg" alt="Button: search" />
            </button>
          </form>
        </li>
        <li class="navbar-menu__item">
          <a href="#" class="navbar-menu__link">All Deals</a>
        </li>
        <li class="navbar-menu__item">
          <a href="#" class="navbar-menu__link">Hotels</a>
        </li>
        <li class="navbar-menu__item">
          <a href="#" class="navbar-menu__link">Activities</a>
        </li>
        <li class="navbar-menu__item">
          <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
        </li>
        <li class="navbar-menu__item">
          <a href="#" class="navbar-menu__link">Restaurants</a>
        </li>
        <li class="navbar-menu__item">
          <a href="#" class="navbar-menu__link">Events</a>
        </li>
        <li class="navbar-menu__item">
          <a href="#" class="navbar-menu__link">Rodrigues</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-bottom -->
  </header>
  <nav class="breadcrumb container">
    <ul class="breadcrumb-list">
      <li class="breadcrumb-list__link"><a href="#">Home</a></li>
      <li class="breadcrumb-list__link"><a href="#">Flash Offers</a></li>
      <li class="breadcrumb-list__link">Grand Hilton Hotel</li>
    </ul>
  </nav>