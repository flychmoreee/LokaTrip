<section class="testimonial section" id="testimonial">
    <div class="testimonial__container">
        <!-- Testimoni 1 -->
        <div class="testimonial__item" data-index="0" style="display: block;">
            <div class="testimonial__image">
                <img src="{{ asset('/assets/img/explore-beach.jpg') }}" alt="testimonial image" class="testimonial__img">
                <div class="testimonial__shadow"></div>
            </div>
            <div class="testimonial__content container grid">
                <div class="testimonial__data">
                    <h2 class="section__title">Sumber Maron <br> Gondanglegi</h2>
                    <p class="testimonial__description">
                        Disini tempatnya enak, ada arum jeramnya tapi agak jorok sedikit, makanannya mahal mahal, ada
                        loker
                        penyimpanan juga,
                        pokoknya jangan ke warung bu Lilik, sudah mahal, makanannya banyak yang mambu.
                    </p>
                    <div class="testimonial__rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="testimonial__user">
                    <img src="{{ asset('/assets/img/explore-perfil.png') }}" alt="testimonial profile"
                        class="testimonial__perfil">
                    <span class="testimonial__name">Budianto</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimoni 2 -->
    <div class="testimonial__container">
        <div class="testimonial__item" data-index="1" style="display: none;">
            <div class="testimonial__image">
                <img src="{{ asset('/assets/img/home-bg.jpg') }}" alt="testimonial image" class="testimonial__img">
                <div class="testimonial__shadow"></div>
            </div>
            <div class="testimonial__content container grid">
                <div class="testimonial__data">
                    <h2 class="section__title">Pantai Balekambang <br> Malang</h2>
                    <p class="testimonial__description">
                        Tempat wisata yang luar biasa dengan keindahan pantai dan suasana sejuk. Cocok untuk liburan
                        bersama
                        keluarga.
                        Harga makanannya cukup bersahabat.
                    </p>
                    <div class="testimonial__rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="testimonial__user">
                    <img src="{{ asset('/assets/img/explore-perfil.png') }}" alt="testimonial profile"
                        class="testimonial__perfil">
                    <span class="testimonial__name">Siti Aisyah</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimoni 3 -->
    <div class="testimonial__container">
        <div class="testimonial__item" data-index="2" style="display: none;">
            <div class="testimonial__image">
                <img src="{{ asset('/assets/img/logo.jpeg') }}" alt="testimonial image" class="testimonial__img">
                <div class="testimonial__shadow"></div>
            </div>
            <div class="testimonial__content container grid">
                <div class="testimonial__data">
                    <h2 class="section__title">Jatim Park 1 <br> Batu, Malang</h2>
                    <p class="testimonial__description">
                        Opo cok barang larang kabeh bangsat Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Fuga magnam saepe eveniet perferendis odio consectetur velit quod nihil consequatur labore?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui explicabo unde molestiae, illum a
                        reprehenderit obcaecati nostrum eos soluta
                    </p>
                    <div class="testimonial__rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="testimonial__user">
                    <img src="{{ asset('/assets/img/popular-mountain.jpg') }}" alt="testimonial profile"
                        class="testimonial__perfil">
                    <span class="testimonial__name">Fawas</span>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const testimonials = document.querySelectorAll(".testimonial__item");
        let currentIndex = 0;

        function showNextTestimonial() {
            // Sembunyikan testimoni saat ini
            testimonials[currentIndex].style.display = "none";

            // Tentukan indeks berikutnya
            currentIndex = (currentIndex + 1) % testimonials.length;

            // Tampilkan testimoni berikutnya
            testimonials[currentIndex].style.display = "block";
        }

        // Rotasi setiap 5 detik
        setInterval(showNextTestimonial, 5000);
    });
</script>

