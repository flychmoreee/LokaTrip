  <!--==================== HOME ====================-->
  <section class="home section" id="home">
      <img src="{{ asset('/assets/img/home-bg.jpg') }}" alt="home image" class="home__bg">
      <div class="home__shadow"></div>

      <div class="home__container container grid">
          <div class="home__data">
              <h3 class="home__subtitle">
                  Selamat Datang di LokaTrip
              </h3>

              <h1 class="home__title">
                  Jelajah <br>
                  Indonesia
              </h1>

              <p class="home__description">
                  Temukan surga tersembunyi di Indonesia dan rencanakan perjalanan impian anda dengan kemudahan dan
                  bantuan yang didukung AI
              </p>

              <a class="button" onclick="openLoginModal()">
                  Mulai Perjalanan Anda <i class="ri-arrow-right-line"></i>
              </a>
          </div>

          <div class="home__cards grid">
              <article class="home__card">
                  <img src="{{ asset('/assets/img/air-terjun.jpg') }}" alt="home image" class="home__card-img">
                  <h3 class="home__card-title">Air Terjun</h3>
                  <div class="home__card-shadow"></div>
              </article>

              <article class="home__card">
                  <img src="{{ asset('/assets/img/gunung.jpg') }}" alt="home image" class="home__card-img">
                  <h3 class="home__card-title">Gunung</h3>
                  <div class="home__card-shadow"></div>
              </article>

              <article class="home__card">
                  <img src="{{ asset('/assets/img/danau.jpg') }}" alt="home image" class="home__card-img">
                  <h3 class="home__card-title">Danau</h3>
                  <div class="home__card-shadow"></div>
              </article>

              <article class="home__card">
                  <img src="{{ asset('/assets/img/pantai.jpg') }}" alt="home image" class="home__card-img">
                  <h3 class="home__card-title">Pantai</h3>
                  <div class="home__card-shadow"></div>
              </article>
          </div>
      </div>
  </section>
