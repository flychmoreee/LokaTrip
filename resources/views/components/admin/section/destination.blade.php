<x-admin.layout>
    <div class="main px-lg-4 px-md-4">
        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
                    <button type="button" class="btn btn-primary sidebar-toggle-btn d-lg-none">
                        <i class="icofont-navigation-menu"></i>
                    </button>

                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center     zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span
                                        class="font-weight-bold">{{ Auth::user()->name }}</span></p>
                                <small>Admin Profile</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail"
                                    src="{{ asset('/storage/' . Auth::user()->image_url) }}" alt="profile">
                            </a>
                            <div
                                class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle"
                                                src="{{ asset('/storage/' . Auth::user()->image_url) }}" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span
                                                        class="font-weight-bold">{{ Auth::user()->name }}</span></p>
                                                <small class="">{{ Auth::user()->email }}</small>
                                            </div>
                                        </div>

                                        <div>
                                            <hr class="dropdown-divider border-dark">
                                        </div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="list-group-item list-group-item-action border-0">
                                                <i class="icofont-logout fs-6 me-3"></i>Signout
                                            </button>
                                        </form>
                                        <div>
                                            <hr class="dropdown-divider border-dark">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                           
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div
                            class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Daftar Destinasi</h3>
                            <div class="col-auto d-flex w-sm-100">
                                <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                    data-bs-target="#adddestination">
                                    <i class="icofont-plus-circle me-2 fs-6"></i>Tambah Destinasi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabel Destinasi -->
                <div class="row clearfix g-3">
                    <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="destinasiTable" class="table table-hover align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Destinasi</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Lokasi</th>
                                            <th>Kategori</th>
                                            <th>Jam Buka</th>
                                            <th>Jam Tutup</th>
                                            <th>Fasilitas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($destinations as $destination)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="destination-images">
                                                        <img src="{{ asset('storage/' . $destination->thumbnail) }}"
                                                            alt=""
                                                            style="width: 50px; height: 50px; object-fit: cover;"
                                                            class="mb-1">
                                                    </div>
                                                </td>
                                                <td>{{ $destination->name }}</td>
                                                <td>{{ $destination->description }}</td>
                                                <td>Rp {{ number_format($destination->price, 0, ',', '.') }}</td>
                                                <td>{{ $destination->location }}</td>
                                                <td><span class="badge bg-success">{{ $destination->category }}</span>
                                                </td>
                                                <td>{{ $destination->open }}</td>
                                                <td>{{ $destination->close }}</td>
                                                <td>{{ $destination->facilities }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editdestination{{ $destination->id }}">
                                                        <i class="icofont-edit text-success"></i>
                                                    </button>
                                                    <form action="{{ route('destinations.delete', $destination->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-outline-danger" type="submit">
                                                            <i class="icofont-ui-delete text-danger"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <x-admin.modal id="editdestination{{ $destination->id }}"
                                                title="Edit Destinasi"
                                                action="{{ route('destinations.update', $destination->id) }}"
                                                method="PUT" size="modal-lg" :fields="[
                                                    [
                                                        'type' => 'hidden',
                                                        'name' => 'id',
                                                        'value' => $destination->id,
                                                    ],
                                                    [
                                                        'type' => 'file',
                                                        'name' => 'thumbnail',
                                                        'label' => 'Gambar Wisata',
                                                        'required' => true,
                                                        'value' => $destination->thumbnail,
                                                    ],
                                                    [
                                                        'type' => 'text',
                                                        'name' => 'name',
                                                        'label' => 'Nama Destinasi',
                                                        'required' => true,
                                                        'value' => $destination->name,
                                                    ],
                                                    [
                                                        'type' => 'textarea',
                                                        'name' => 'description',
                                                        'label' => 'Deskripsi',
                                                        'required' => true,
                                                        'value' => $destination->description,
                                                    ],
                                                    [
                                                        'type' => 'text',
                                                        'name' => 'price',
                                                        'label' => 'Harga',
                                                        'required' => true,
                                                        'attributes' => [
                                                            'id' => 'priceInput',
                                                        ],
                                                        'value' => $destination->price,
                                                    ],
                                                    [
                                                        'type' => 'text',
                                                        'name' => 'location',
                                                        'label' => 'Lokasi',
                                                        'required' => true,
                                                        'value' => $destination->location,
                                                    ],
                                                    [
                                                        'type' => 'text',
                                                        'name' => 'google_maps',
                                                        'label' => 'Link Google Maps',
                                                        'required' => true,
                                                        'value' => $destination->google_maps,
                                                    ],
                                                    [
                                                        'type' => 'text',
                                                        'name' => 'category',
                                                        'label' => 'Kategori',
                                                        'required' => true,
                                                        'value' => $destination->category,
                                                    ],
                                                    [
                                                        'type' => 'time',
                                                        'name' => 'open',
                                                        'label' => 'Jam Buka',
                                                        'required' => true,
                                                        'value' => $destination->open,
                                                    ],
                                                    [
                                                        'type' => 'time',
                                                        'name' => 'close',
                                                        'label' => 'Jam Tutup',
                                                        'required' => true,
                                                        'value' => $destination->close,
                                                    ],
                                                    [
                                                        'type' => 'text',
                                                        'name' => 'facilities',
                                                        'label' => 'Fasilitas',
                                                        'placeholder' => 'Contoh: Parkir, Toilet, Food Court',
                                                        'required' => true,
                                                        'value' => $destination->facilities,
                                                    ],
                                                ]" submitText="Update" />
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Destinasi -->
        <x-admin.modal id="adddestination" action="{{ route('destinations.add') }}" title="Tambah Destinasi"
            size="modal-lg" :fields="[
                [
                    'type' => 'file',
                    'name' => 'thumbnail',
                    'label' => 'Gambar Wisata',
                    'required' => true,
                ],
                [
                    'type' => 'text',
                    'name' => 'name',
                    'label' => 'Nama Destinasi',
                    'required' => true,
                ],
                [
                    'type' => 'textarea',
                    'name' => 'description',
                    'label' => 'Deskripsi',
                    'required' => true,
                ],
                [
                    'type' => 'text',
                    'name' => 'price',
                    'label' => 'Harga',
                    'required' => true,
                    'attributes' => [
                        'id' => 'priceInput',
                    ],
                ],
                [
                    'type' => 'text',
                    'name' => 'location',
                    'label' => 'Lokasi',
                    'required' => true,
                ],
                [
                    'type' => 'text',
                    'name' => 'google_maps',
                    'label' => 'Link Google Maps',
                    'required' => true,
                ],
                [
                    'type' => 'text',
                    'name' => 'category',
                    'label' => 'Kategori',
                    'required' => true,
                ],
                [
                    'type' => 'time',
                    'name' => 'open',
                    'label' => 'Jam Buka',
                    'required' => true,
                ],
                [
                    'type' => 'time',
                    'name' => 'close',
                    'label' => 'Jam Tutup',
                    'required' => true,
                ],
                [
                    'type' => 'text',
                    'name' => 'facilities',
                    'label' => 'Fasilitas',
                    'placeholder' => 'Contoh: Parkir, Toilet, Food Court',
                    'required' => true,
                ],
            ]" />

        <!-- Modal Edit Destinasi -->


        <!-- Modal Hapus Destinasi -->


        <!-- Script DataTable -->
        <script>
            $(document).ready(function() {
                $('#destinasiTable').DataTable({
                    responsive: true,
                    columnDefs: [{
                        targets: [-1],
                        orderable: false
                    }]
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                const priceInput = document.getElementById('priceInput');

                priceInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/[^,\d]/g, '');
                    if (value) {
                        value = parseInt(value, 10).toLocaleString('id-ID', {
                            style: 'currency',
                            currency: 'IDR',
                            minimumFractionDigits: 0
                        }).replace('IDR', 'Rp');
                    }
                    e.target.value = value;
                });
            });
        </script>

        <!-- Tambahkan CSS berikut di bagian bawah file atau di header -->
        <style>
            .modal-dialog.modal-lg {
                max-height: 90vh;
            }

            .modal-body {
                max-height: calc(90vh - 120px);
                /* 120px untuk header dan footer modal */
                overflow-y: auto;
            }

            .modal-body::-webkit-scrollbar {
                display: none;
                /* Chrome, Safari dan Opera */
            }
        </style>
    </div>
</x-admin.layout>
