<x-user.layout>

    <div class="content-body">
        <div class="container-fluid">
            <!-- Card Section -->
            <div class="row">
                <!-- Input Section -->
                <div class="row mb-2">
                    <div class="col-xl-7">
                        <div class="row">
                            <div class="col-xl-11">
                                <div class="card">
                                    <div class="card-body tryal column">
                                        <div class="col-xl-12 col-sm-6">
                                            <h2> Cari Rekomendasi Makanan Dengan Bantuan AI</h2>
                                            <span class="m-0 mb-3">Masukkan lokasi dan kategori makanan untuk
                                                mendapatkan rekomendasi yang sesuai.</span>
                                            <form>
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Lokasi</label>
                                                    <input type="text" class="form-control" id="location"
                                                        placeholder="Surabaya">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="category" class="form-label">Kategori Makanan</label>
                                                    <select class="form-select select-dark mb-4" id="category">
                                                        <option value="tradisional">Tradisional</option>
                                                        <option value="modern">Modern</option>
                                                        <option value="ringan">Cepat Saji</option>
                                                        <option value="penutup">Vegetarian</option>
                                                    </select>
                                                </div>

                                                <div class="text-center">
                                                    <button type="button"
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

            {{-- search --}}
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
                    <button class="btn btn-outline-primary mx-1 p-3" type="button">Tradisional</button>
                    <button class="btn btn-outline-primary mx-1 p-3" type="button">Modern</button>
                    <button class="btn btn-outline-primary mx-1 p-3" type="button">Cepat Saji</button>
                    <button class="btn btn-outline-primary mx-1 p-3" type="button">Vegetarian</button>
                </div>
            </div>


            <div class="row">
                <!-- Cards Section for Food Items -->
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/soto.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="#">Soto</a></h4>
                                        <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Accusantium et suscipit aut, pariatur blanditiis ut, doloribus
                                            sint
                                            est recusandae accusamus ea iure sequi, corrupti magnam laudantium id?
                                            Iste
                                            iusto neque temporibus architecto, delectus quis a modi laborum, quam,
                                            nobis
                                            maxime esse vitae earum. Neque saepe in magni, obcaecati voluptates
                                            ullam!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cards Section for Food Items -->
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/soto.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="#">Soto</a></h4>
                                        <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Accusantium et suscipit aut, pariatur blanditiis ut, doloribus
                                            sint
                                            est recusandae accusamus ea iure sequi, corrupti magnam laudantium id?
                                            Iste
                                            iusto neque temporibus architecto, delectus quis a modi laborum, quam,
                                            nobis
                                            maxime esse vitae earum. Neque saepe in magni, obcaecati voluptates
                                            ullam!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cards Section for Food Items -->
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/soto.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="#">Soto</a></h4>
                                        <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Accusantium et suscipit aut, pariatur blanditiis ut, doloribus
                                            sint
                                            est recusandae accusamus ea iure sequi, corrupti magnam laudantium id?
                                            Iste
                                            iusto neque temporibus architecto, delectus quis a modi laborum, quam,
                                            nobis
                                            maxime esse vitae earum. Neque saepe in magni, obcaecati voluptates
                                            ullam!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cards Section for Food Items -->
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/soto.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="#">Soto</a></h4>
                                        <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Accusantium et suscipit aut, pariatur blanditiis ut, doloribus
                                            sint
                                            est recusandae accusamus ea iure sequi, corrupti magnam laudantium id?
                                            Iste
                                            iusto neque temporibus architecto, delectus quis a modi laborum, quam,
                                            nobis
                                            maxime esse vitae earum. Neque saepe in magni, obcaecati voluptates
                                            ullam!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cards Section for Food Items -->
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/soto.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="#">Soto</a></h4>
                                        <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Accusantium et suscipit aut, pariatur blanditiis ut, doloribus
                                            sint
                                            est recusandae accusamus ea iure sequi, corrupti magnam laudantium id?
                                            Iste
                                            iusto neque temporibus architecto, delectus quis a modi laborum, quam,
                                            nobis
                                            maxime esse vitae earum. Neque saepe in magni, obcaecati voluptates
                                            ullam!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cards Section for Food Items -->
                <div class="col-lg-12 col-xl-6 destination">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ asset('/assets/img/soto.jpg') }}"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="#">Soto</a></h4>
                                        <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Accusantium et suscipit aut, pariatur blanditiis ut, doloribus
                                            sint
                                            est recusandae accusamus ea iure sequi, corrupti magnam laudantium id?
                                            Iste
                                            iusto neque temporibus architecto, delectus quis a modi laborum, quam,
                                            nobis
                                            maxime esse vitae earum. Neque saepe in magni, obcaecati voluptates
                                            ullam!
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
