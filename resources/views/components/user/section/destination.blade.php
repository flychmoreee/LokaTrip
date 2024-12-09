<x-user.layout>
    <div class="content-body">
        <div class="container-fluid">
            <!-- Search and Categories -->
            <div class="row mb-4">
                <!-- Search Bar -->
                <div class="col-md-6 mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari destinasi...">
                        <button class="btn btn-primary" type="button">Cari</button>
                    </div>
                </div>
                <!-- Categories -->
                <div class="col-md-6 d-flex justify-content-end mb-4">
                    <button class="btn btn-outline-primary mx-1 p-3" type="button">Populer</button>
                    <button class="btn btn-outline-primary mx-1 p-3" type="button">Gunung</button>
                    <button class="btn btn-outline-primary mx-1 p-3" type="button">Pantai</button>
                    <button class="btn btn-outline-primary mx-1 p-3" type="button">Hutan</button>
                    <button class="btn btn-outline-primary mx-1 p-3" type="button">Danau</button>
                </div>
            </div>
            <!-- Card Section -->
            <div class="row">
                {{-- card --}}
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/danau.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">

                                        <!-- Love Icon -->
                                        <div class="wishlist-icon position-absolute top-0 end-0">
                                            <span class="love-btn">
                                                <i class="fa-regular fa-heart fs-4"></i>
                                            </span>
                                        </div>


                                        <h4><a href="{{ route('user.detail-product') }}">Jawa Timur Park 1</a></h4>
                                        <p>Lokasi: <span class="item">Batu, Jawa Timur</span></p>
                                        <div class="comment-review star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                            <span class="review-text">(34 reviews) / </span><a class="product-review"
                                                href="" data-bs-toggle="modal"
                                                data-bs-target="#reviewModal">Write a review?</a>
                                            <p class="price">Rp 48.000</p>
                                        </div>
                                        <p class="text-content">Jawa Timur Park 1 adalah taman hiburan keluarga yang
                                            menawarkan berbagai wahana seru, area edukasi, dan pertunjukan menarik.
                                            Cocok untuk liburan bersama keluarga dan anak-anak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- card --}}
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div
                                            class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/danau.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">

                                        <!-- Love Icon -->
                                        <div class="wishlist-icon position-absolute top-0 end-0">
                                            <span class="love-btn">
                                                <i class="fa-regular fa-heart fs-4"></i>
                                            </span>
                                        </div>

                                        <h4><a href="{{ route('user.detail-product') }}">Jawa Timur Park 2</a></h4>
                                        <p>Lokasi: <span class="item">Batu, Jawa Timur</span></p>
                                        <div class="comment-review star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                            <span class="review-text">(34 reviews) / </span><a class="product-review"
                                                href="" data-bs-toggle="modal"
                                                data-bs-target="#reviewModal">Write a review?</a>
                                            <p class="price">Rp 48.000</p>
                                        </div>
                                        <p class="text-content">Jawa Timur Park 1 adalah taman hiburan keluarga yang
                                            menawarkan berbagai wahana seru, area edukasi, dan pertunjukan menarik.
                                            Cocok untuk liburan bersama keluarga dan anak-anak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- </a> --}}
                </div>
                {{-- card --}}
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/danau.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">

                                        <!-- Love Icon -->
                                        <div class="wishlist-icon position-absolute top-0 end-0">
                                            <span class="love-btn">
                                                <i class="fa-regular fa-heart fs-4"></i>
                                            </span>
                                        </div>

                                        <h4><a href="ecom-product-detail.html">Jawa Timur Park 3</a></h4>
                                        <p>Lokasi: <span class="item">Batu, Jawa Timur</span></p>
                                        <div class="comment-review star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                            <span class="review-text">(34 reviews) / </span><a class="product-review"
                                                href="" data-bs-toggle="modal"
                                                data-bs-target="#reviewModal">Write a review?</a>
                                            <p class="price">Rp 48.000</p>
                                        </div>
                                        <p class="text-content">Jawa Timur Park 1 adalah taman hiburan keluarga yang
                                            menawarkan berbagai wahana seru, area edukasi, dan pertunjukan menarik.
                                            Cocok untuk liburan bersama keluarga dan anak-anak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- card --}}
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/danau.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">

                                        <!-- Love Icon -->
                                        <div class="wishlist-icon position-absolute top-0 end-0">
                                            <span class="love-btn">
                                                <i class="fa-regular fa-heart fs-4"></i>
                                            </span>
                                        </div>

                                        <h4><a href="ecom-product-detail.html">Jawa Timur Park 4</a></h4>
                                        <p>Lokasi: <span class="item">Batu, Jawa Timur</span></p>
                                        <div class="comment-review star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                            <span class="review-text">(34 reviews) / </span><a class="product-review"
                                                href="" data-bs-toggle="modal"
                                                data-bs-target="#reviewModal">Write a review?</a>
                                            <p class="price">Rp 48.000</p>
                                        </div>
                                        <p class="text-content">Jawa Timur Park 1 adalah taman hiburan keluarga yang
                                            menawarkan berbagai wahana seru, area edukasi, dan pertunjukan menarik.
                                            Cocok untuk liburan bersama keluarga dan anak-anak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- card --}}
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/danau.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">

                                        <!-- Love Icon -->
                                        <div class="wishlist-icon position-absolute top-0 end-0">
                                            <span class="love-btn">
                                                <i class="fa-regular fa-heart fs-4"></i>
                                            </span>
                                        </div>

                                        <h4><a href="ecom-product-detail.html">Jawa Timur Park 5</a></h4>
                                        <p>Lokasi: <span class="item">Batu, Jawa Timur</span></p>
                                        <div class="comment-review star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                            <span class="review-text">(34 reviews) / </span><a class="product-review"
                                                href="" data-bs-toggle="modal"
                                                data-bs-target="#reviewModal">Write a review?</a>
                                            <p class="price">Rp 48.000</p>
                                        </div>
                                        <p class="text-content">Jawa Timur Park 1 adalah taman hiburan keluarga yang
                                            menawarkan berbagai wahana seru, area edukasi, dan pertunjukan menarik.
                                            Cocok untuk liburan bersama keluarga dan anak-anak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- card --}}
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/danau.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">

                                        <!-- Love Icon -->
                                        <div class="wishlist-icon position-absolute top-0 end-0">
                                            <span class="love-btn">
                                                <i class="fa-regular fa-heart fs-4"></i>
                                            </span>
                                        </div>

                                        <h4><a href="ecom-product-detail.html">Jawa Timur Park 6</a></h4>
                                        <p>Lokasi: <span class="item">Batu, Jawa Timur</span></p>
                                        <div class="comment-review star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                            <span class="review-text">(34 reviews) / </span><a class="product-review"
                                                href="" data-bs-toggle="modal"
                                                data-bs-target="#reviewModal">Write a review?</a>
                                            <p class="price">Rp 48.000</p>
                                        </div>
                                        <p class="text-content">Jawa Timur Park 1 adalah taman hiburan keluarga yang
                                            menawarkan berbagai wahana seru, area edukasi, dan pertunjukan menarik.
                                            Cocok untuk liburan bersama keluarga dan anak-anak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- review -->
    <div class="modal fade" id="reviewModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="text-center mb-4">
                            <img class="img-fluid rounded" width="78"
                                src="{{ asset('/assets/img/explore-perfil.png') }}" alt="DexignZone">
                        </div>
                        <div class="mb-3">
                            <div class="rating-widget mb-4 text-center">
                                <!-- Rating Stars Box -->
                                <div class="rating-stars">
                                    <ul id="stars">
                                        <li class="star" title="Poor" data-value="1">
                                            <i class="fa fa-star fa-fw"></i>
                                        </li>
                                        <li class="star" title="Fair" data-value="2">
                                            <i class="fa fa-star fa-fw"></i>
                                        </li>
                                        <li class="star" title="Good" data-value="3">
                                            <i class="fa fa-star fa-fw"></i>
                                        </li>
                                        <li class="star" title="Excellent" data-value="4">
                                            <i class="fa fa-star fa-fw"></i>
                                        </li>
                                        <li class="star" title="WOW!!!" data-value="5">
                                            <i class="fa fa-star fa-fw"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Tuliskan Komentar Anda" rows="5"></textarea>
                        </div>
                        <button class="btn btn-primary btn-block">RATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- JS WISHLIST --}}
    <script>
        document.addEventListener('click', function(event) {
            if (event.target.closest('.love-btn')) {
                const icon = event.target.closest('.love-btn').querySelector('i');
                icon.classList.toggle('fa-solid'); // Ubah ke hati penuh
                icon.classList.toggle('fa-regular'); // Ubah ke hati ber-border

                // Tampilkan SweetAlert jika love aktif
                if (icon.classList.contains('fa-solid')) {
                    showAlert('Destinasi berhasil ditambahkan ke wishlist');
                } else {
                    showAlert('Destinasi berhasil dihapus dari wishlist', 'warning');
                }
            }
        });

        function showAlert(message, icon = 'success') {
            Swal.fire({
                title: message,
                icon: icon,
                timer: 5000,
                showConfirmButton: false,
                position: 'center',
                background: '#2d2d2d', // Warna latar belakang gelap
                color: '#fff', // Warna teks terang

            });
        }
    </script>

    <style>
        #directDetail {
            cursor: pointer;
        }

        textarea {
            resize: none;
            height: 115px !important;
            padding: 15px !important;
        }

        .rating-stars ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            /* Membuat elemen dalam ul berjajar horizontal */
            justify-content: center;
            /* Mengatur posisi bintang agar berada di tengah */
        }

        .rating-stars ul li.star {
            display: inline-block;
            /* Mengatur setiap elemen li berjajar horizontal */
            cursor: pointer;
            /* Menambahkan efek pointer untuk interaktif */
            margin: 0 5px;
            /* Menambahkan jarak antar bintang */
        }

        .rating-stars ul li.star i {
            font-size: 24px;
            /* Atur ukuran bintang sesuai kebutuhan */
            color: #ccc;
            /* Warna default untuk bintang belum dipilih */
        }

        .rating-stars ul li.star.hover i,
        .rating-stars ul li.star.selected i {
            color: #ffcc00;
            /* Warna bintang yang dipilih atau di-hover */
        }
    </style>

</x-user.layout>
