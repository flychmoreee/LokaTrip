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
                                                src="{{ asset('storage/' . $destination->thumbnail) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                        <!--Product details-->
                                        <div class="new-arrival-content pr">
                                            <h4>{{ $destination->name }}</h4>
                                            <div class="d-table mb-2">
                                                <p class="price float-start d-block">Rp
                                                    {{ number_format($destination->price, 0, ',', '.') }}</p>
                                            </div>
                                            <p>Lokasi: <span class="item">{{ $destination->location }}</span></p>
                                            <div class="wrapper-iframe-gmaps">
                                                <iframe class="iframe-gmaps" src="{{ $destination->google_maps }}"
                                                    allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade">
                                                </iframe>
                                            </div>
                                            <p>Jam Operasional: <span
                                                    class="item">{{ date('H:i', strtotime($destination->open)) }} -
                                                    {{ date('H:i', strtotime($destination->close)) }} WIB</span></p>
                                            <p>Fasilitas: <span class="item">{{ $destination->facilities }}</span>
                                            </p>
                                            <p>Kategori:&nbsp;&nbsp;
                                                <span
                                                    class="badge badge-success light">{{ $destination->category }}</span>
                                            </p>
                                            <p>Deskripsi: <span
                                                    class="text-content">{{ $destination->description }}</span></p>
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
