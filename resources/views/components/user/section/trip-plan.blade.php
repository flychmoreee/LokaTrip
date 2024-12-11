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
                                            <h2>Rencanakan Jadwal Harianmu Menggunakan AI</h2>
                                            <span class="m-0 mb-3">Masukkan Lokasi yang di tuju dan lengkapi semua data
                                                agar AI dapat membuatkan anda jadwal</span>
                                            <form method="POST" action="{{ route('trip.plan') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Lokasi Anda Saat
                                                        Ini</label>
                                                    <input type="text" class="form-control" id="location"
                                                        name="user_location" placeholder="Surabaya">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Lokasi Tujuan</label>
                                                    <input type="text" class="form-control" id="location"
                                                        name="destination_locations" placeholder="Bali,Jakarta,Bandung">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="category" class="form-label">Kategori Berpergian</label>
                                                    <select class="form-select select-dark mb-4" id="category"
                                                        name="category">
                                                        <option value="tradisional">Berbelanja</option>
                                                        <option value="modern">Liburan</option>
                                                        <option value="ringan">Berpetualang</option>
                                                        <option value="penutup">Penelitian</option>
                                                    </select>
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
        </div>
    </div>

    <style>
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
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>

</x-user.layout>
