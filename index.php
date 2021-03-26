<?php include('header.php') ?>
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
    <!-- /.packages-card--active -->
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
      <input type="email" placeholder="Your email address" class="subscribe__input" name="email" required />
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
      <h3 class="card__title">The curious corner<br> of chamarel</h3>
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
<?php include('footer.php') ?>