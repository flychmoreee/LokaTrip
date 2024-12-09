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
                    <a href="{{ route('user.detail-product') }}">
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


                                            <h4><a href="ecom-product-detail.html">Jawa Timur Park 1</a></h4>
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
                                                <span class="review-text">(34 reviews) / </span><a
                                                    class="product-review" href="" data-bs-toggle="modal"
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
                    </a>
                </div>
                {{-- card --}}
                <div class="col-lg-12 col-xl-6 destination">
                    <a href="{{ route('user.detail-product') }}">
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

                                            <h4><a href="ecom-product-detail.html">Jawa Timur Park 2</a></h4>
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
                                                <span class="review-text">(34 reviews) / </span><a
                                                    class="product-review" href="" data-bs-toggle="modal"
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
                    </a>
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
                timer: 20000000,
                showConfirmButton: false,
                position: 'center',
                background: '#2d2d2d', // Warna latar belakang gelap
                color: '#fff', // Warna teks terang

            });
        }
    </script>



</x-user.layout>
