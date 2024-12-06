<!--**********************************
            Content body start
        ***********************************-->
<div class="container mt-5 ms-5">
    <!-- Title -->
    <div class="ms-2">
        <h1 class="fw-bold text-white">Selamat Datang <br> di LokaTrip</h1>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel hendrerit libero.
        </p>
    </div>

    <!-- Features Section -->
    <div class="row g-4 mt-5">
        @foreach (['Fitur 1', 'Fitur 2', 'Fitur 3', 'Fitur 4'] as $fitur)
            <div class="col-md-6 col-lg-3">
                <div class="feature-card d-flex align-items-start">
                    <!-- Icon -->
                    <div class="icon me-3">
                        <i class="fas fa-cogs fa-2x text-primary"></i>
                    </div>
                    <!-- Content -->
                    <div>
                        <h5 class="text-white mb-1">{{ $fitur }}</h5>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-6 destination">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="{{ asset('/assets/img/air-terjun.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="ecom-product-detail.html">Jawa Timur Park 1</a></h4>
                                    <p>Lokasi: <span class="item">Batu, Jawa Timur</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 destination">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="{{ asset('/assets/img/gunung.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="ecom-product-detail.html">Tanaka</a></h4>
                                    <p>Lokasi: <span class="item">Tokyo, Jepang</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 destination">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="{{ asset('/assets/img/danau.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="ecom-product-detail.html">Bromo</a></h4>
                                    <p>Lokasi: <span class="item">Probolinggo, Jawa Timur</span></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
    Content body end
***********************************-->
<style>
    /* Card fitur */
    .feature-card {
        position: relative;
        background-color: #2b2b2b;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        z-index: 0;
        display: flex;
        align-items: center;
        text-align: left;
        /* Untuk menyesuaikan teks */
        border: 2px solid transparent;
    }

    .feature-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        border-radius: 10px;
        padding: 2px;
        background: linear-gradient(120deg, #ff6ec4, #7873f5, #2af598, #ff6ec4);
        background-size: 300% 300%;
        animation: borderAnimation 4s linear infinite;
    }

    .feature-card:hover::before {
        animation-duration: 2s;
    }

    .feature-card::after {
        content: "";
        position: absolute;
        top: 4px;
        left: 4px;
        right: 4px;
        bottom: 4px;
        z-index: -1;
        background-color: #2b2b2b;
        border-radius: 8px;
    }

    /* Ikon */
    .icon i {
        color: #2af598;
    }

    /* Animasi border */
    @keyframes borderAnimation {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

</style>
