<x-user.layout>
    <div class="content-body">
        <!-- Halaman Tiket -->
        <div class="container-fluid">
            <div class="row">
                <!-- Card Tiket -->
                <div class="col-12">
                    <div class="card d-flex flex-row align-items-center mb-4" style="border: none">
                        <!-- QR Code Section -->
                        <div class="qr-code-container ps-5 pt-5 pb-5 pe-0">
                            <img src="{{ asset('/assets/img/qr.png') }}" alt="QR Code" class="img-thumbnail"
                                style="width: 180px; cursor: pointer;" data-bs-toggle="modal"
                                data-bs-target="#qrCodeModal">
                        </div>

                        <!-- Tiket Details Section -->
                        <div class="ticket-details p-5">
                            <h4 class="destination-title">Destinasi Wisata: <strong>Borobudur</strong></h4>
                            <p>Lokasi: <span class="text-muted">Magelang, Jawa Tengah</span></p>
                            <p>Tanggal Wisata: <span class="text-muted">12 Desember 2024</span></p>
                            <p>Jumlah Tiket: <span class="text-muted">3 Orang</span></p>
                            <p>Total Harga: <span class="text-success">Rp 1.500.000</span></p>
                        </div>
                    </div>
                </div>
                <!-- Card Tiket -->
                <div class="col-12">
                    <div class="card d-flex flex-row align-items-center mb-4" style="border: none">
                        <!-- QR Code Section -->
                        <div class="qr-code-container ps-5 pt-5 pb-5 pe-0">
                            <img src="{{ asset('/assets/img/qr.png') }}" alt="QR Code" class="img-thumbnail"
                                style="width: 180px; cursor: pointer;" data-bs-toggle="modal"
                                data-bs-target="#qrCodeModal">
                        </div>

                        <!-- Tiket Details Section -->
                        <div class="ticket-details p-5">
                            <h4 class="destination-title">Destinasi Wisata: <strong>Borobudur</strong></h4>
                            <p>Lokasi: <span class="text-muted">Magelang, Jawa Tengah</span></p>
                            <p>Tanggal Wisata: <span class="text-muted">12 Desember 2024</span></p>
                            <p>Jumlah Tiket: <span class="text-muted">3 Orang</span></p>
                            <p>Total Harga: <span class="text-success">Rp 1.500.000</span></p>
                        </div>
                    </div>
                </div>
                <!-- Card Tiket -->
                <div class="col-12">
                    <div class="card d-flex flex-row align-items-center mb-4" style="border: none">
                        <!-- QR Code Section -->
                        <div class="qr-code-container ps-5 pt-5 pb-5 pe-0">
                            <img src="{{ asset('/assets/img/qr.png') }}" alt="QR Code" class="img-thumbnail"
                                style="width: 180px; cursor: pointer;" data-bs-toggle="modal"
                                data-bs-target="#qrCodeModal">
                        </div>

                        <!-- Tiket Details Section -->
                        <div class="ticket-details p-5">
                            <h4 class="destination-title">Destinasi Wisata: <strong>Borobudur</strong></h4>
                            <p>Lokasi: <span class="text-muted">Magelang, Jawa Tengah</span></p>
                            <p>Tanggal Wisata: <span class="text-muted">12 Desember 2024</span></p>
                            <p>Jumlah Tiket: <span class="text-muted">3 Orang</span></p>
                            <p>Total Harga: <span class="text-success">Rp 1.500.000</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal untuk QR Code -->
        <div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="qrCodeModalLabel">QR Code</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <!-- Gambar QR Code -->
                        <img src="{{ asset('/assets/img/qr.png') }}" alt="QR Code" class="img-fluid mb-3">

                        <!-- Penjelasan QR Code -->
                        <p class="text-muted">
                            QR Code ini harus dipindai di tempat wisata sebagai bukti pembayaran tiket Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .card {
                display: flex;
                flex-direction: row;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }

            .qr-code-container {
                flex-shrink: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .ticket-details {
                flex-grow: 1;
            }

            .destination-title {
                margin-bottom: 8px;
                font-size: 18px;
                font-weight: bold;
            }

            .modal-content img {
                max-width: 100%;
                height: auto;
            }
        </style>
</x-user.layout>