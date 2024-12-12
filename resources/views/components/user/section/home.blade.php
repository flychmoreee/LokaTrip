<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body tryal column">
                                        <div class="col-xl-7 col-sm-6">
                                            <h2> Hai {{ Auth::user()->name }}, Selamat datang kembali di Lokatrip</h2>
                                            <span>Temukan destinasi wisata dan nikmati liburanmu bersama Lokatrip</span>
                                            <a href="{{ route('user.destination') }}"
                                                class="btn btn-rounded  fs-18 font-w500">Cari
                                                Destinasi Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card fitur ai --}}
                    <div class="col-xl-6">
                        <div class="row">
                            <!-- Trip Plan Card -->
                            <div class="col-xl-6 col-sm-6">
                                <div class="card feature-card d-flex flex-column align-items-center text-center">
                                    <!-- Icon -->
                                    <div class="icon mb-3 mt-2">
                                        <i class="fas fa-map-marked-alt fa-2x text-white"></i>
                                    </div>
                                    <!-- Content -->
                                    <div class="mb-1">
                                        <h5 class="text-white mb-2">Trip Plan</h5>
                                        <p class="text-muted mb-0">
                                            AI membantu menyusun itinerary perjalanan anda secara personal.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Rekomendasi Budget Card -->
                            <div class="col-xl-6 col-sm-6">
                                <div class="card feature-card d-flex flex-column align-items-center text-center">
                                    <!-- Icon -->
                                    <div class="icon mb-3 mt-2">
                                        <i class="fas fa-wallet fa-2x text-white"></i>
                                    </div>
                                    <!-- Content -->
                                    <div class="mb-1">
                                        <h5 class="text-white mb-2">Rekomendasi Budget</h5>
                                        <p class="text-muted mb-0">
                                            Optimalkan anggaran anda dengan rekomendasi dari AI.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Rekomendasi Makanan Card -->
                            <div class="col-xl-12 col-sm-6">
                                <div class="card feature-card d-flex flex-column align-items-center text-center">
                                    <!-- Icon -->
                                    <div class="icon mb-3 mt-2">
                                        <i class="fas fa-utensils fa-2x text-white"></i>
                                    </div>
                                    <!-- Content -->
                                    <div class="mb-1">
                                        <h5 class="text-white mb-2">Rekomendasi Makanan</h5>
                                        <p class="text-muted mb-0">
                                            AI memilihkan kuliner terbaik sesuai dengan selera anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Card Wisata --}}
    <div class="container-fluid pt-0">

        @foreach ($destinations as $destination)
            <div class="row" style="gap: 5px;">
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card" style="cursor:pointer;">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid"
                                                src="{{ asset('storage/' . $destination->thumbnail) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a
                                                href="{{ route('user.detail-product', ['id' => $destination->id]) }}">{{ $destination->name }}</a>
                                        </h4>
                                        <p>Lokasi: <span class="item">{{ $destination->location }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<style>
    /* Border Neon Effect */

    .btn-link {
        color: white;
        text-decoration: underline;
        font-weight: 600;
    }

    .btn-link:hover {
        color: white;
        text-decoration: none;
    }


    .feature-card {
        position: relative;
        background-color: #2b2b2b;
        border-radius: 10px;
        overflow: hidden;
        padding: 20px;
        z-index: 0;
        cursor: pointer;
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
        /* Border thickness */
        background: linear-gradient(120deg, #ff6ec4, #7873f5, #2af598, #ff6ec4);
        background-size: 300% 300%;
        animation: borderAnimation 4s linear infinite;
    }

    .feature-card:hover::before {
        animation-duration: 2s;
        /* Faster animation on hover */
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
        /* Inner card adjustment */
    }

    /* Icon Style */
    .feature-icon {
        font-size: 24px;
        color: #ff6ec4;
        /* Neon color */
        margin-top: 3px;
        /* Align icon with text */
    }

    /* Adjust Text Alignment */
    .align-icon {
        margin-top: 6px;
        /* Align description with icon */
    }

    /* Animasi Border */
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
