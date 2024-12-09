<x-user.layout>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active" id="first">
                                            <img class="img-fluid product-image"
                                                src="{{ asset('/assets/img/danau.jpg') }}" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="second">
                                            <img class="img-fluid product-image"
                                                src="{{ asset('/assets/img/air-terjun.jpg') }}" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="third">
                                            <img class="img-fluid product-image"
                                                src="{{ asset('/assets/img/gunung.jpg') }}" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="for">
                                            <img class="img-fluid product-image"
                                                src="{{ asset('/assets/img/pantai.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                        <!-- Nav tabs -->
                                        <ul class="nav slide-item-list mt-3" role="tablist">
                                            <li role="presentation" class="show">
                                                <a href="#first" role="tab" data-bs-toggle="tab">
                                                    <img class="img-fluid thumbnail-image"
                                                        src="{{ asset('/assets/img/pantai.jpg') }}" alt=""
                                                        width="50">
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#second" role="tab" data-bs-toggle="tab">
                                                    <img class="img-fluid thumbnail-image"
                                                        src="{{ asset('/assets/img/pantai.jpg') }}" alt=""
                                                        width="50">
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#third" role="tab" data-bs-toggle="tab">
                                                    <img class="img-fluid thumbnail-image"
                                                        src="{{ asset('/assets/img/pantai.jpg') }}" alt=""
                                                        width="50">
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#for" role="tab" data-bs-toggle="tab">
                                                    <img class="img-fluid thumbnail-image"
                                                        src="{{ asset('/assets/img/pantai.jpg') }}" alt=""
                                                        width="50">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                        <!--Product details-->
                                        <div class="new-arrival-content pr">
                                            <h4>Jawa Timur Park 1</h4>
                                            <div class="d-table mb-2">
                                                <p class="price float-start d-block">Rp 48.000</p>
                                            </div>
                                            <p>Lokasi: <span class="item">Batu, Jawa Timur, Indonesia</span></p>
                                            <div class="wrapper-iframe-gmaps">
                                                <iframe class="iframe-gmaps"
                                                    src="https://www.google.com/maps/place/Suryana/@-6.0932358,97.5884235,6z/data=!4m6!3m5!1s0x2e69f5007796b675:0xa448ebe0f7a5c5a4!8m2!3d-6.145353!4d106.8185752!16s%2Fg%2F11vwy56npv?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D"
                                                    allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade">
                                                </iframe>
                                            </div>
                                            <p>Jam Operasional: <span class="item">09:00 - 17:00 WIB</span></p>
                                            <p>Fasilitas: <span class="item">Parkir, Restoran, Toko Souvenir</span>
                                            </p>
                                            <p>Kategori:&nbsp;&nbsp;
                                                <span class="badge badge-success light">Hiburan</span>
                                            </p>
                                            <p>Deskripsi: <span class="text-content">Jawa Timur Park 1 adalah taman
                                                    hiburan keluarga yang menawarkan berbagai wahana seru, area edukasi,
                                                    dan pertunjukan menarik. Cocok untuk liburan bersama keluarga dan
                                                    anak-anak.</span></p>
                                            <div class="d-flex align-items-end flex-wrap mt-4">
                                                <!--Quanatity End-->
                                                <div class="shopping-cart mb-2 me-3">
                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#ticketModal">
                                                        <i class="fas fa-ticket-alt me-2"></i>Beli Tiket
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ticketModalLabel">Pesan Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="totalPrice" class="form-label">Harga Tiket</label>
                            <p id="totalPrice" class="form-text fw-bold">Rp 48.000</p>
                        </div>
                        <div class="mb-3">
                            <label for="ticketCount" class="form-label">Pesan Tiket Untuk Orang:</label>
                            <input type="number" class="form-control" id="ticketCount"
                                placeholder="Masukkan jumlah tiket" required value="1">
                        </div>
                        <div class="mb-3">
                            <label for="ticketDate" class="form-label">Pilih Tanggal:</label>
                            <input type="date" class="form-control input-date" id="ticketDate" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Bayar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .input-date::-webkit-calendar-picker-indicator {
            color: white;
            filter: invert(1);
        }
    </style>

    <script>
        document.getElementById('ticketCount').addEventListener('input', function() {
            const ticketPrice = 48000; // Harga tiket
            const ticketCount = parseInt(this.value) || 0;
            const totalPrice = ticketPrice * ticketCount;
            document.getElementById('totalPrice').textContent = `Rp ${totalPrice.toLocaleString()}`;
        });
    </script>

</x-user.layout>
