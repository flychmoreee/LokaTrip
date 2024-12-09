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
                                            <form>
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Lokasi Anda Saat
                                                        Ini</label>
                                                    <input type="text" class="form-control" id="location"
                                                        placeholder="Surabaya">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Kota Tujuan</label>
                                                    <input type="text" class="form-control" id="location"
                                                        placeholder="Bali">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="category" class="form-label">Kategori Berpergian</label>
                                                    <select class="form-select select-dark mb-4" id="category">
                                                        <option value="tradisional">Berbelanja</option>
                                                        <option value="modern">Liburan</option>
                                                        <option value="ringan">Berpetualang</option>
                                                        <option value="penutup">Penelitian</option>
                                                    </select>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula est id eros
                                    facilisis, ut auctor justo gravida. Maecenas nec libero vel mauris feugiat
                                    tincidunt. Aenean a risus non magna viverra suscipit id at neque. Quisque sit amet
                                    erat et neque dapibus vehicula. Vestibulum vitae tincidunt nisi. Cras sit amet
                                    tincidunt ex, et pharetra risus. Fusce sed risus eu nisl scelerisque tempus. Sed
                                    tincidunt accumsan neque. Aenean nec dictum eros.</p>
                                <p>Integer vulputate purus ut eros congue, quis rutrum metus auctor. Ut ac tortor
                                    suscipit, gravida felis in, volutpat mauris. Suspendisse et ex id urna vulputate
                                    interdum at id lorem. Vivamus nec est vehicula, interdum urna sed, mollis risus.
                                    Proin quis congue lectus, sed tincidunt justo. Cras fringilla dictum augue, nec
                                    rutrum justo fermentum a. Proin vel tortor augue.</p>
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
