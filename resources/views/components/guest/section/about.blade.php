<!--==================== ABOUT ====================-->
<section class="about section" id="about">
    <div class="about__container container grid">
        @foreach ($about as $item)
            <div class="about__data">
                <h2 class="section__title">
                    Tentang {{ $item->title }}
                </h2>
                <p class="about__description">
                    {{ $item->description }}
                </p>

                <a class="button" onclick="openLoginModal()">
                    Buat Jadwal Sekarang<i class="ri-arrow-right-line"></i>
                </a>
            </div>

            <div class="about__image">
                <img src="{{ asset('/storage/' . $item->image_url) }}" alt="" class="about__img">
                <div class="about__shadow"></div>
            </div>
        @endforeach
    </div>
</section>
