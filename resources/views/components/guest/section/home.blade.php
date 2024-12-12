  <!--==================== HOME ====================-->
  <section class="home section" id="home">
      @foreach ($hero as $item)
          <img src="{{ asset('storage/' . $item->hero_image) }}" alt="home image" class="home__bg">
          <div class="home__shadow"></div>

          <div class="home__container container grid">
              <div class="home__data">
                  <h3 class="home__subtitle">
                      Selamat Datang di {{ $item->name }}
                  </h3>

                  <h1 class="home__title">
                      Jelajah <br>
                      Indonesia
                  </h1>

                  <p class="home__description">
                      {{ $item->description }}
                  </p>

                  <a class="button" onclick="openLoginModal()">
                      Mulai Perjalanan Anda <i class="ri-arrow-right-line"></i>
                  </a>
              </div>
      @endforeach
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
