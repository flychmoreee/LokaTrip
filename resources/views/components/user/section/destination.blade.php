<x-user.layout>
    <div class="content-body">
        <div class="container-fluid">

            {{-- Card AI --}}
            <div class="row">
                <!-- Input Section -->
                <div class="row mb-2">
                    <div class="col-xl-7">
                        <div class="row">
                            <div class="col-xl-11">
                                <div class="card">
                                    <div class="card-body tryal column">
                                        <div class="col-xl-12 col-sm-6">
                                            <h2>Cari Destinasi Berdasarkan Budget Anda</h2>
                                            <span class="m-0 mb-3">Masukkan lokasi yang ingin di tuju dan kategori range
                                                budget untuk
                                                mendapatkan destinasi yang sesuai.</span>
                                            <form method="POST" action="{{ route('budget.recommendation') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Lokasi</label>
                                                    <input type="text" class="form-control" id="location"
                                                        name="location" placeholder="Surabaya">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="budget" class="form-label">Budget Anda</label>
                                                    <input type="text" class="form-control" id="budget_display"
                                                        placeholder="Rp 50.000">
                                                    <input type="hidden" id="budget" name="budget">
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-block">Generate</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Output Section -->
                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-body hasil-generate" style="max-height: 400px; overflow-y: auto;">
                                <h4>Hasil Generate</h4>
                                @if (isset($latestResult))
                                    <div>
                                        <?php
                                        // Ambil teks dari database
                                        $text = $latestResult->prompt;
                                        
                                        // Pisahkan teks berdasarkan bagian
                                        $sections = preg_split('/\*\*(.*?)\*\*/', $text, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
                                        
                                        // Tampilkan setiap bagian
                                        foreach ($sections as $index => $section) {
                                            if ($index % 2 == 0) {
                                                // Ini adalah konten
                                                echo '<ul>';
                                                $items = explode('*', $section);
                                                foreach ($items as $item) {
                                                    $item = trim($item);
                                                    if (!empty($item)) {
                                                        echo '<li>' . $item . '</li>';
                                                    }
                                                }
                                                echo '</ul>';
                                            } else {
                                                // Ini adalah judul
                                                echo '<strong>' . trim($section) . '</strong>';
                                            }
                                        }
                                        ?>
                                    </div>
                                @else
                                    <p>Belum ada hasil generate terbaru.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                @foreach ($destinations as $destination)
                    <div class="col-lg-12 col-xl-6 destination">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/' . $destination->thumbnail) }}"
                                                    alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a
                                                    href="{{ route('user.detail-product', ['id' => $destination->id]) }}">{{ $destination->name }}</a>
                                            </h4>
                                            <p>Lokasi: <span class="item">{{ $destination->location }}</span></p>
                                            <div class="comment-review star-rating">
                                                <p class="price">Rp
                                                    {{ number_format($destination->price, 0, ',', '.') }}</p>
                                            </div>
                                            <p class="text-content">{{ $destination->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <script>
                    document.getElementById('budget_display').addEventListener('input', function(e) {
                        let value = e.target.value.replace(/[^0-9]/g, ''); // Hanya angka
                        document.getElementById('budget').value = value; // Set nilai asli ke input hidden

                        // Format tampilan dengan Rp dan titik
                        e.target.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                        if (e.target.value) {
                            e.target.value = 'Rp ' + e.target.value;
                        }
                    });
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
                        justify-content: center;
                    }

                    .rating-stars ul li.star {
                        display: inline-block;
                        cursor: pointer;
                        margin: 0 5px;
                    }

                    .rating-stars ul li.star i {
                        font-size: 24px;
                        color: #ccc;
                    }

                    .rating-stars ul li.star.hover i,
                    .rating-stars ul li.star.selected i {
                        color: #ffcc00;
                    }

                    .select-dark {
                        background-color: #0000003d;
                        color: #ffffff70;
                        border: 0.5px solid #323232;
                        height: 50px;
                    }

                    .select-dark:focus {
                        background-color: #0000003d;
                        color: #ffffff70;
                        border-color: #323232;
                        box-shadow: none;
                    }

                    .hasil-generate::-webkit-scrollbar {
                        display: none;
                    }

                    .hasil-generate {
                        -ms-overflow-style: none;
                        scrollbar-width: none;
                    }
                </style>

</x-user.layout>
