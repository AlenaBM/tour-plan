<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
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
          <input type="text" placeholder="Search Location" class="form-search__input" required />
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
        <li class="navbar-menu__item navbar-menu__item_mobile_visible navbar-menu__item_mobile_visible_user">
          <a href="#" class="user user_visible">
            <img src="img/user.jpg" alt="User: Nathan" class="user__img img-poly" />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
        </li>
        <li class="navbar-menu__item navbar-menu__item_mobile_visible navbar-menu__item_mobile_visible_form">
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
      <li class="breadcrumb-list__link"><a href="#" target="_blank" rel="nofollow noopener">Home</a></li>
      <li class="breadcrumb-list__link"><a href="#" target="_blank" rel="nofollow noopener">Flash Offers</a></li>
      <li class="breadcrumb-list__link">Grand Hilton Hotel</li>
    </ul>
  </nav>
  <section class="hotel">
  <div class="hotel-info container">
    <div class="hotel-info__text">
      <div class="hotel-wrap">
        <div class="stars stars_hotel">
          <svg class="icon" data-aos="fade-up-right" data-aos-delay="200">
            <use xlink:href="img/sprite.svg#star"></use>
          </svg>
          <svg class="icon" data-aos="fade-up-right" data-aos-delay="400">
            <use xlink:href="img/sprite.svg#star"></use>
          </svg>
          <svg class="icon" data-aos="fade-up-right" data-aos-delay="600">
            <use xlink:href="img/sprite.svg#star"></use>
          </svg>
          <svg class="icon" data-aos="fade-up-right" data-aos-delay="800">
            <use xlink:href="img/sprite.svg#star"></use>
          </svg>
          <svg class="icon" data-aos="fade-up-right" data-aos-delay="1000">
            <use xlink:href="img/sprite.svg#star"></use>
          </svg>
        </div>
        <!-- /stars -->
        <h1 class="hotel-name hotel-info__name">grand hilton hotel</h1>
        <span class="offer hotel-info__offer">Flash Offer</span>
      </div>
      <!-- /hotel-wrap -->
      <p class="description">
        Half-Board/ All Inclusive + Complimentary Activities + Child Stays
        Free
      </p>
    </div>
    <!-- /hotel-info__text -->
    <div class="hotel-info__rating rating">
      <span class="rating__text">User Rattings</span>
      <span class="rating__counter">4.5/</span>
      <!-- /rating__counter -->
    </div>
    <!-- /hotel-info__rating -->
  </div>
  <!-- /hotel-info container -->
  <div class="hotel-grid container">
    <div class="swiper-container hotel-slider hotel__slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide hotel-slider__item">
          <img src="img/slider-hotel-grid/slide1.jpg" alt="Slide" class="hotel-slider__img" />
        </div>
        <div class="swiper-slide hotel-slider__item">
          <img src="img/slider-hotel-grid/slide2.jpg" alt="Slide" class="hotel-slider__img" />
        </div>
        <div class="swiper-slide hotel-slider__item">
          <img src="img/slider-hotel-grid/slide3.jpg" alt="Slide" class="hotel-slider__img" />
        </div>
        <div class="swiper-slide hotel-slider__item">
          <img src="img/slider-hotel-grid/slide4.jpg" alt="Slide" class="hotel-slider__img" />
        </div>
        <div class="swiper-slide hotel-slider__item">
          <img src="img/slider-hotel-grid/slide5.jpg" alt="Slide" class="hotel-slider__img" />
        </div>
      </div>
      <!-- /swiper-wrapper -->

      <button class="hotel-slider__button hotel-slider__button--prev"></button>
      <button class="hotel-slider__button hotel-slider__button--next"></button>
    </div>
    <!-- /hotel-slider -->

    <div class="booking">
      <div class="booking-card">
        <div class="booking-card__info">
          <div class="booking-card__price">
            <span class="booking-card__start">price starts as</span>
            <strong class="booking-card__pricetag">$ 8,500</strong>
            <span class="booking-card__per-room">per room / night</span>
          </div>
          <!-- /booking-card__price -->
          <div class="booking-card__guests">
            <div class="booking-card__text">
              <img src="img/hotel-info/user.svg" alt="Icon: user" class="booking-card__icon" />
              <span class="booking-card__description">2 x Guests</span>
            </div>
            <!-- /.booking-card__text -->
            <div class="booking-card__text">
              <img src="img/hotel-info/home.svg" alt="Icon: home" class="booking-card__icon" />
              <span class="booking-card__description">1 x Room</span>
            </div>
            <!-- /.booking-card__text -->
          </div>
          <!-- /booking-card__guests -->
        </div>
        <!-- /booking-card__info -->
        <div class="call-center">
          <span class="call-center__text">Quick Booking</span>
          <a class="call-center__number" href="tel:12100">
            <img src="img/hotel-info/phone-call.svg" alt="Icon: phone" />
            <span class="call-center__phonenum">12100</span>
          </a>
        </div>
        <!-- /call-center -->
        <button data-toggle="modal" class="booking-card__button button">
          View Other Options
        </button>
      </div>
      <!-- /booking-card -->
      <div id="map_container" class="booking-map map container-fluid">
        <iframe id="ymap_lazy" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.342915286954!2d98.29358403442558!3d7.891503405749703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30503b7bfcd9f903%3A0xf7065fac1e3d7c48!2sDoubleTree%20by%20Hilton%20Phuket%20Banthai%20Resort!5e0!3m2!1sru!2sru!4v1616664876346!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <!-- /booking-map -->
    </div>
    <!-- /booking -->
  </div>
  <!-- /hotel-grid -->
</section>
<section class="packages container">
  <h2 class="packages-title packages__title" data-aos="fade-up">Other Packages</h2>
  <div class="packages-grid">
    <div class="packages-card packages-card--active">
      <span class="packages-card__offer packages-card__offer--active offer">Flash Offer</span>
      <img src="img/packages-grid/card-hotel-1.jpeg" alt="Hotel Blue Haven" class="packages-card__img packages-card__img--active" />
      <div class="packages-card__description packages-card__description--active">
        <div class="stars">
          <img src="img/hotel-info/star.svg" alt="Star" />
          <img src="img/hotel-info/star.svg" alt="Star" />
          <img src="img/hotel-info/star.svg" alt="Star" />
          <img src="img/hotel-info/star.svg" alt="Star" />
          <img src="img/hotel-info/star.svg" alt="Star" />
        </div>
        <!-- /stars -->
        <h3 class="packages-card__title packages-card__title--active">
          Hotel Blue Haven
        </h3>
        <p class="packages-card__abouthotel">
          Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
          enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse
          ut in veniam sun in onsequat. Aute quis duis epteur excepteur
          ipsum occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum
          est fugiat velit ea ullamco do
        </p>
        <div class="packages-card__guests packages-card__guests--active">
          <div class="packages-card__info">
            <img src="img/packages-grid/location.svg" alt="Address" class="packages-card__icon" />
            <span class="packages-card__text">1749 Wheeler Ridge Delaware</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/user.svg" alt="Number of guests" class="packages-card__icon" />
            <span class="packages-card__text">2 x Guests</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/home.svg" alt="Number of rooms" class="packages-card__icon" />
            <span class="packages-card__text">1 x Room</span>
          </div>
          <!-- /.packages-card__info -->
        </div>
        <!-- /.packages-card__guests -->
        <span class="packages-card__canceledprice">$ 10,500</span>
        <div class="packages-card__booking">
          <span class="packages-card__price">$ 8,500</span>
          <button data-toggle="modal" class="packages-card__button button">Book Now</button>
        </div>
        <!-- /packages-card__booking -->
      </div>
      <!-- /.packages-card__description -->
    </div>
    <!-- /.packages-card-active -->
    <div class="packages-card">
      <span class="packages-card__offer offer">Flash Offer</span>
      <img src="img/packages-grid/card-hotel-2.jpeg" alt="LUX* Belle Mare" class="packages-card__img" />
      <div class="packages-card__description">
        <h3 class="packages-card__title">LUX* Belle Mare</h3>
        <div class="packages-card__guests">
          <div class="packages-card__info">
            <img src="img/packages-grid/location.svg" alt="Address" class="packages-card__icon" />
            <span class="packages-card__text">1749 Wheeler Ridge Delaware</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/user.svg" alt="Number of guests" class="packages-card__icon" />
            <span class="packages-card__text">2 x Guests</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/home.svg" alt="Number of rooms" class="packages-card__icon" />
            <span class="packages-card__text">1 x Room</span>
          </div>
          <!-- /.packages-card__info -->
        </div>
        <!-- /.packages-card__guests -->
        <span class="packages-card__canceledprice">$ 8,500</span>
        <div class="packages-card__booking">
          <span class="packages-card__price">$ 3,500</span>
          <button data-toggle="modal" class="packages-card__button button">Book Now</button>
        </div>
        <!-- /packages-card__booking -->
      </div>
      <!-- /.packages-card__description -->
    </div>
    <!-- /.packages-card -->
    <div class="packages-card">
      <span class="packages-card__offer offer">Flash Offer</span>
      <img src="img/packages-grid/card-hotel-3.jpeg" alt="White Palace" class="packages-card__img" />
      <div class="packages-card__description">
        <h3 class="packages-card__title">White Palace</h3>
        <div class="packages-card__guests">
          <div class="packages-card__info">
            <img src="img/packages-grid/location.svg" alt="Address" class="packages-card__icon" />
            <span class="packages-card__text">1749 Wheeler Ridge Delaware</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/user.svg" alt="Number of guests" class="packages-card__icon" />
            <span class="packages-card__text">2 x Guests</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/home.svg" alt="Number of rooms" class="packages-card__icon" />
            <span class="packages-card__text">1 x Room</span>
          </div>
          <!-- /.packages-card__info -->
        </div>
        <!-- /.packages-card__guests -->
        <span class="packages-card__canceledprice">$ 10,500</span>
        <div class="packages-card__booking">
          <span class="packages-card__price">$ 9,500</span>
          <button data-toggle="modal" class="packages-card__button button">Book Now</button>
        </div>
        <!-- /packages-card__booking -->
      </div>
      <!-- /.packages-card__description -->
    </div>
    <!-- /.packages-card -->
    <div class="packages-card">
      <span class="packages-card__offer offer">Flash Offer</span>
      <img src="img/packages-grid/card-hotel-4.jpeg" alt="Luxury Place" class="packages-card__img" />
      <div class="packages-card__description">
        <h3 class="packages-card__title">Luxury Place</h3>
        <div class="packages-card__guests">
          <div class="packages-card__info">
            <img src="img/packages-grid/location.svg" alt="Address" class="packages-card__icon" />
            <span class="packages-card__text">1749 Wheeler Ridge Delaware</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/user.svg" alt="Number of guests" class="packages-card__icon" />
            <span class="packages-card__text">2 x Guests</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/home.svg" alt="Number of rooms" class="packages-card__icon" />
            <span class="packages-card__text">1 x Room</span>
          </div>
          <!-- /.packages-card__info -->
        </div>
        <!-- /.packages-card__guests -->
        <span class="packages-card__canceledprice">$ 4,500</span>
        <div class="packages-card__booking">
          <span class="packages-card__price">$ 2,500</span>
          <button data-toggle="modal" class="packages-card__button button">Book Now</button>
        </div>
        <!-- /packages-card__booking -->
      </div>
      <!-- /.packages-card__description -->
    </div>
    <!-- /.packages-card -->
    <div class="packages-card">
      <span class="packages-card__offer offer">Flash Offer</span>
      <img src="img/packages-grid/card-hotel-5.jpeg" alt="Hotel Five Star" class="packages-card__img" />
      <div class="packages-card__description">
        <h3 class="packages-card__title">Hotel Five Star</h3>
        <div class="packages-card__guests">
          <div class="packages-card__info">
            <img src="img/packages-grid/location.svg" alt="Address" class="packages-card__icon" />
            <span class="packages-card__text">1749 Wheeler Ridge Delaware</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/user.svg" alt="Number of guests" class="packages-card__icon" />
            <span class="packages-card__text">2 x Guests</span>
          </div>
          <!-- /.packages-card__info -->
          <div class="packages-card__info">
            <img src="img/packages-grid/home.svg" alt="Number of rooms" class="packages-card__icon" />
            <span class="packages-card__text">1 x Room</span>
          </div>
          <!-- /.packages-card__info -->
        </div>
        <!-- /.packages-card__guests -->
        <span class="packages-card__canceledprice">$ 6,500</span>
        <div class="packages-card__booking">
          <span class="packages-card__price">$ 3,500</span>
          <button data-toggle="modal" class="packages-card__button button">Book Now</button>
        </div>
        <!-- /packages-card__booking -->
      </div>
      <!-- /.packages-card__description -->
    </div>
    <!-- /.packages-card -->
  </div>
  <!-- /.packages-grid -->
</section>
<section class="newsletter parallax-window" data-parallax="scroll" data-image-src="img/newsletter/newsletter-bg.jpeg" data-speed="0.2" data-ios-fix="true" data-android-fix="true">
  <div class="newsletter-wrap">
    <h2 class="newsletter-title newsletter__title">
      subscribe to our
      <span class="newsletter-title__strong"> newsletter </span>
    </h2>
    <form action="send.php" class="subscribe newsletter__subscribe form" method="POST">
      <input type="email" placeholder="Your email address" class="subscribe__input" name="email_newsLetter" required />
      <button type="submit" class="subscribe__btn">Send</button>
    </form>
  </div>
  <!-- /.newsletter-wrap -->
</section>
<!-- /.newsletter -->
<section class="reviews container">
  <h2 class="reviews__title" data-aos="fade-up">What people think about us</h2>
  <div class="swiper-container reviews-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="reviews-slider__item">
          <div class="reviews-slider__profile">
            <img src="img/slider-reviews/avatar1.jpeg" alt="Photo: Megan Fox" class="reviews-slider__avatar" />
            <h3 class="reviews-slider__username">Megan Fox</h3>
            <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
            <div class="reviews-slider__rating">
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
            </div>
            <!-- /rating -->
          </div>
          <!-- /.reviews-slider__profile -->
          <p class="reviews-slider__text">
            It was very nice hotel with cleanliness. Staff behavior was good
            and polite. They welcome us very well. Issue was only that Lift
            was not in working and we were allotted to 3rd floor and
            amenities articles were in corner of gallery which were giving
            bad feeling. Breakfast was good and support of the staff was
            also very nice. Location is not good as per atmosphere, it is
            very nearby most of the popular places but self location in a
            narrow street is not good. Overall it was a good experience and
            could recommend.
          </p>
        </div>
        <!-- /.reviews-slider__item -->
      </div>
      <!-- /.swiper-slide -->
      <div class="swiper-slide">
        <div class="reviews-slider__item">
          <div class="reviews-slider__profile">
            <img src="img/slider-reviews/avatar2.jpeg" alt="Photo: Robert Li" class="reviews-slider__avatar" />
            <h3 class="reviews-slider__username">Robert Li</h3>
            <span class="reviews-slider__date">Stayed 5 Dec, 2019</span>
            <div class="reviews-slider__rating">
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
            </div>
            <!-- /rating -->
          </div>
          <!-- /.reviews-slider__profile -->
          <p class="reviews-slider__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
            odit, magni minus adipisci nam aliquam aperiam quis repudiandae
            quod, sequi, animi illo nisi voluptates consequuntur ullam
            consectetur doloremque explicabo. Totam. Illum rem vero autem
            obcaecati beatae vel magni soluta incidunt exercitationem
            provident debitis libero reiciendis iure placeat facilis eaque
            aliquam nulla dolorum, praesentium sint non tempora. Magni eaque
            dicta repellat.
            It was very nice hotel with cleanliness. Staff behavior was good
            and polite. They welcome us very well. Issue was only that Lift
            was not in working and we were allotted to 3rd floor and
            amenities articles were in corner of gallery which were giving
            bad feeling. Breakfast was good and support of the staff was
            also very nice. Location is not good as per atmosphere, it is
            very nearby most of the popular places but self location in a
            narrow street is not good. Overall it was a good experience and
            could recommend.
          </p>
        </div>
        <!-- /.reviews-slider__item -->
      </div>
      <!-- /.swiper-slide -->
      <div class="swiper-slide">
        <div class="reviews-slider__item">
          <div class="reviews-slider__profile">
            <img src="img/slider-reviews/avatar3.jpeg" alt="Photo: Mary King" class="reviews-slider__avatar" />
            <h3 class="reviews-slider__username">Mary King</h3>
            <span class="reviews-slider__date">Stayed 5 Jul, 2020</span>
            <div class="reviews-slider__rating">
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
              <img src="img/hotel-info/star.svg" alt="Star" />
            </div>
            <!-- /rating -->
          </div>
          <!-- /.reviews-slider__profile -->
          <p class="reviews-slider__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Deserunt molestias nisi voluptatum neque distinctio, aspernatur
            culpa aut accusamus eaque. Provident aspernatur saepe quae
            delectus nulla ipsum, reiciendis nisi voluptatem natus.
          </p>
        </div>
        <!-- /.reviews-slider__item -->
      </div>
      <!-- /.swiper-slide -->
    </div>
    <!-- /.swiper-wrapper -->

    <button class="reviews-slider__button reviews-slider__button--prev"></button>
    <button class="reviews-slider__button reviews-slider__button--next"></button>
  </div>
  <!-- /.reviews-slider -->
</section>
<!-- /.reviews -->
<section class="activities container">
  <h2 class="activities__title">Other Activities</h2>
  <div class="activities-wrap">
    <div class="card card_corner" data-aos="fade-right" data-aos-delay="200">
      <img src="img/other_activities/activity-card1.jpg" alt="The curious corner of chamarel" class="card__img" />
      <h3 class="card__title">The curious corner<br>of chamarel</h3>
      <button data-toggle="modal" class="card__button button">Book Now</button>
    </div>
    <!-- /.card -->
    <div class="card card_golf" data-aos="fade-right" data-aos-delay="400">
      <img src="img/other_activities/activity-card2.jpg" alt="Gymkhana club golf course" class="card__img" />
      <h3 class="card__title">Gymkhana club golf<br> course</h3>
      <button data-toggle="modal" class="card__button button">Book Now</button>
    </div>
    <!-- /.card -->
    <div class="card card_falls" data-aos="fade-right" data-aos-delay="600">
      <img src="img/other_activities/activity-card3.jpg" alt="Tamarind falls hiking trip - full day" class="card__img" />
      <h3 class="card__title">Tamarind falls hiking<br> trip - full day</h3>
      <button data-toggle="modal" class="card__button button">Book Now</button>
    </div>
    <!-- /.card -->
    <div class="card card_quest" data-aos="fade-right" data-aos-delay="800">
      <img src="img/other_activities/activity-card4.jpg" alt="The blue marine discovery quest" class="card__img" />
      <h3 class="card__title">The blue marine discovery<br> quest</h3>
      <button data-toggle="modal" class="card__button button">Book Now</button>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.activities-wrap -->
</section>
<!-- /.activities -->
  <footer class="footer">
    <div class="container">
      <div class="footer-wrap footer-wrap--grid">
        <a href="https://alena-web.ru/homeworks/tour-plan/" class="footer__logo">
          <img src="img/footer/vertical-logo.svg" alt="Logo: Best Tour Plan" class="footer__logo" />
        </a>
        <div class="footer__list footer__categories">
          <h3 class="footer__title">ALL CATEGORIES</h3>
          <ul class="footer__ul">
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">All Deals</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Hotels</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Activities</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Spa Packages </a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Hotel Day Packages</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Restaurants</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Fitness</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Rodrigues</a>
            </li>
          </ul>
        </div>
        <!-- /.footer__list -->
        <div class="footer__list footer__additional">
          <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
          <ul class="footer__ul">
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">About Us</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Contact Us </a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">How does it work?</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Frequently Asked Questions</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Deals.mu loyalty program</a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Promote your Business on BTP</a>
            </li>
          </ul>
        </div>
        <!-- /.footer__list -->
        <div class="footer__social-network">
          <h3 class="footer__title footer__title--inline">Social Network</h3>
          <div class="footer__social-links">
            <a href="#" target="_blank" rel="nofollow noopener" class="footer__link"><img src="img/footer/facebook.svg" alt="Icon: facebook" class="footer__icon" /></a>
            <a href="#" target="_blank" rel="nofollow noopener" class="footer__link"><img src="img/footer/youtube.svg" alt="Icon: YouTube" class="footer__icon" /></a>
            <a href="#" target="_blank" rel="nofollow noopener" class="footer__link"><img src="img/footer/instagram.svg" alt="Icon: instagram" class="footer__icon" /></a>
          </div>
          <!-- /.footer__social-links -->
        </div>
        <!-- /.footer__social-network -->
        <div class="footer__list footer__legal">
          <h3 class="footer__title">LEGAL INFORMATION</h3>
          <ul class="footer__ul">
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Terms & Conditions </a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Disclaimer </a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Cancellation policy </a>
            </li>
            <li class="footer__item">
              <a href="#" target="_blank" rel="nofollow noopener" class="footer__link">Privacy</a>
            </li>
          </ul>
        </div>
        <!-- /.footer__list -->
        <div class="footer__contact-details">
          <h3 class="footer__title footer__title--secondrow">
            Contact Details
          </h3>
          <p class="footer__text">
            Feel free to contact us by phone, email or by our contact form
          </p>
          <ul class="footer__ul">
            <li class="footer__item footer__item--marbot">
              <div class="footer__icon-wrap">
                <img src="img/footer/map-marker.svg" alt="Location" />
              </div>
              <!-- /.footer__icon-wrap -->
              9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
              States
            </li>
            <li class="footer__item footer__item--marbot">
              <div class="footer__icon-wrap">
                <img src="img/footer/phone-call.svg" alt="Phone numbers" />
              </div>
              <!-- /.footer__icon-wrap -->
              <div class="footer__item-wrap">
                <span>Tel (business hours): <a class="footer__item__contactlink" href="tel:2691500">269 1500</a></span><br />
                <span>Tel (hotline) Monday - Saturday: <a class="footer__item__contactlink" href="tel:52-56-61-38">52&#8209;56-61-38</a> (08:00 am – 20:00 pm)</span>
                <span>Tel (hotline) Sunday: <a class="footer__item__contactlink" href="tel:52-56-61-38">52-56-61-38</a> (08:00 am – 14:00 pm)</span>
              </div>
              <!-- /footer__item-wrap -->
            </li>
            <li class="footer__item footer__item__mail">
              <div class="footer__icon-wrap">
                <img src="img/footer/email.svg" alt="Company's mail" />
              </div>
              <!-- /.footer__icon-wrap -->
              <a class="footer__item__contactlink" href="mailto:cherly.lawson@example.com"><span class="footer__item__num">cherly.lawson@example.com</span></a>
            </li>
          </ul>
        </div>
        <!-- /.footer__contact-details -->
        <div class="footer__contact-form">
          <h3 class="footer__title footer__title--secondrow footer__title--secondrow__form">
            Send us a message
          </h3>
          <form action="send.php" method="POST" class="footer__form form">
            <div class="footer__input-group">
              <input type="text" class="input footer__input" placeholder="Your Full name*" name="name_footer" required minlength="2" />
            </div>
            <div class="footer__input-group">
              <input type="tel" class="input footer__input input_num" placeholder="Phone number*" name="phone_footer" required minlength="18" />
            </div>
            <textarea cols="30" rows="10" class="footer__message message" placeholder="Message" name="message_footer"></textarea>
            <button class="footer__button button" type="submit">Send</button>
            <span class="footer__info">* Required Fields</span>
          </form>
        </div>
        <!-- /.footer__contact-form -->
      </div>
      <!-- /.footer-wrap -->
      <div class="footer-bottom">
        <div class="footer-bottom__info">
          <ul class="footer-bottom__list">
            <li class="footer-bottom__item">
              <a href="#" class="footer-bottom__link">Disclaimer</a>
            </li>
            <li class="footer-bottom__item">
              <a href="#" class="footer-bottom__link">Conditions of use</a>
            </li>
            <li class="footer-bottom__item">
              <a href="#" class="footer-bottom__link">Cancellation policy</a>
            </li>
          </ul>
        </div>
        <!-- /footer-bottom__info -->
        <img src="img/footer/payments-options.png" alt="Payments options" class="footer-bottom__img" />
      </div>
      <!-- /footer-bottom -->
    </div>
    <!-- /container -->
  </footer>
  <div class="modal">
    <div class="modal__overlay"></div>
    <!-- /.modal__overlay -->
    <div class="modal__dialog">
      <a href="#" class="modal__close">
        <img src="close.svg" alt="Icon: close">
      </a>
      <h3 class="modal__title modal__title--secondrow">
        Booking
      </h3>
      <form action="send.php" method="POST" class="modal__form form">
        <input type="text" class="input modal__input" placeholder="Your Full name*" name="name" required minlength="2" />
        <input type="tel" class="input modal__input input_num" placeholder="Phone number*" name="phone" required minlength="18" />
        <input type="email" class="input modal__input" placeholder="Email*" name="email" required />
        <textarea cols="30" rows="10" class="modal__message message" placeholder="Message" name="message"></textarea>
        <button class="modal__button button" type="submit">Send</button>
        <span class="modal__info">* Required Fields</span>
      </form>
    </div>
    <!-- /.modal__dialog -->
  </div>
  <!-- /.modal -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.mask.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/map.js"></script>
  <script src="js/script.js"></script>
  <script src="js/parallax.js-1.5.0/parallax.js"></script>
  </body>
  </html>
