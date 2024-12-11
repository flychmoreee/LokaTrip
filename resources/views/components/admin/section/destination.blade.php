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
                    <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                        <div class="u-info me-2">
                            <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Admin</span></p>
                            <small>Admin Profile</small>
                        </div>
                        <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown">
                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.png" alt="profile">
                        </a>
                        <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                            <div class="card border-0 w280">
                                <div class="card-body pb-0">
                                    <div class="d-flex py-1">
                                        <img class="avatar rounded-circle" src="assets/images/profile_av.png" alt="profile">
                                        <div class="flex-fill ms-3">
                                            <p class="mb-0"><span class="font-weight-bold">Admin</span></p>
                                            <small class="">admin@example.com</small>
                                        </div>
                                    </div>
                                    <div><hr class="dropdown-divider border-dark"></div>
                                </div>
                                <div class="list-group m-2">
                                    <a href="auth-signin.html" class="list-group-item list-group-item-action border-0"><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                    <div class="input-group flex-nowrap input-group-lg">
                        <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                        <input type="search" class="form-control" placeholder="Cari destinasi..." aria-label="search" aria-describedby="addon-wrapping">
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
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Daftar Destinasi</h3>
                        <div class="col-auto d-flex w-sm-100">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#adddestination">
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
                                        <th>Jam Operasional</th>
                                        <th>Fasilitas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="destination-images">
                                                <img src="https://via.placeholder.com/400x200" alt="" style="width: 50px; height: 50px; object-fit: cover;" class="mb-1">
                                                <img src="https://via.placeholder.com/400x200" alt="" style="width: 50px; height: 50px; object-fit: cover;" class="mb-1">
                                                <img src="https://via.placeholder.com/400x200" alt="" style="width: 50px; height: 50px; object-fit: cover;" class="mb-1">
                                                <img src="https://via.placeholder.com/400x200" alt="" style="width: 50px; height: 50px; object-fit: cover;" class="mb-1">
                                            </div>
                                        </td>
                                        <td>Pantai Kuta</td>
                                        <td>Pantai Kuta adalah salah satu pantai yang paling terkenal di Bali dengan pemandangan sunset yang indah...</td>
                                        <td>Rp 15.000</td>
                                        <td>Bali, Indonesia</td>
                                        <td><span class="badge bg-success">Wisata Alam</span></td>
                                        <td>06:00 - 18:00 WITA</td>
                                        <td>Parkir, Toilet, Food Court</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editdestination">
                                                <i class="icofont-edit text-success"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deletedestination">
                                                <i class="icofont-ui-delete text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Destinasi -->
    <x-admin.modal 
        id="adddestination"
        title="Tambah Destinasi"
        size="modal-lg"
        :fields="[
            [
                'type' => 'file',
                'name' => 'images[]',
                'label' => 'Foto Destinasi',
                'accept' => 'image/*',
                'required' => true,
                'help' => 'Format: JPG, PNG. Maksimal 5 foto',
                'multiple' => true
            ],
            [
                'type' => 'text',
                'name' => 'nama',
                'label' => 'Nama Destinasi',
                'required' => true
            ],
            [
                'type' => 'textarea',
                'name' => 'deskripsi',
                'label' => 'Deskripsi',
                'required' => true
            ],
            [
                'type' => 'number',
                'name' => 'harga',
                'label' => 'Harga',
                'required' => true
            ],
            [
                'type' => 'text',
                'name' => 'lokasi',
                'label' => 'Lokasi',
                'required' => true
            ],
            [
                'type' => 'select',
                'name' => 'kategori',
                'label' => 'Kategori',
                'options' => [
                    'Wisata Alam' => 'Wisata Alam',
                    'Budaya' => 'Budaya',
                    'Kuliner' => 'Kuliner'
                ],
                'required' => true
            ],
            [
                'type' => 'text',
                'name' => 'jam_operasional',
                'label' => 'Jam Operasional',
                'required' => true
            ],
            [
                'type' => 'text',
                'name' => 'fasilitas',
                'label' => 'Fasilitas',
                'placeholder' => 'Contoh: Parkir, Toilet, Food Court',
                'required' => true
            ]
        ]"
    />

    <!-- Modal Edit Destinasi -->
    <x-admin.modal 
        id="editdestination"
        title="Edit Destinasi"
        method="PUT"
        size="modal-lg"
        :fields="[
            [
                'type' => 'hidden',
                'name' => 'id'
            ],
            [
                'type' => 'file',
                'name' => 'images[]',
                'label' => 'Foto Destinasi',
                'accept' => 'image/*',
                'multiple' => true,
                'help' => 'Biarkan kosong jika tidak ingin mengubah foto'
            ],
            [
                'type' => 'text',
                'name' => 'nama',
                'label' => 'Nama Destinasi',
                'required' => true
            ],
            [
                'type' => 'textarea',
                'name' => 'deskripsi',
                'label' => 'Deskripsi',
                'required' => true
            ],
            [
                'type' => 'number',
                'name' => 'harga',
                'label' => 'Harga',
                'required' => true
            ],
            [
                'type' => 'text',
                'name' => 'lokasi',
                'label' => 'Lokasi',
                'required' => true
            ],
            [
                'type' => 'select',
                'name' => 'kategori',
                'label' => 'Kategori',
                'options' => [
                    'Wisata Alam' => 'Wisata Alam',
                    'Budaya' => 'Budaya',
                    'Kuliner' => 'Kuliner'
                ],
                'required' => true
            ],
            [
                'type' => 'text',
                'name' => 'jam_operasional',
                'label' => 'Jam Operasional',
                'required' => true
            ],
            [
                'type' => 'text',
                'name' => 'fasilitas',
                'label' => 'Fasilitas',
                'placeholder' => 'Contoh: Parkir, Toilet, Food Court',
                'required' => true
            ]
        ]"
        submitText="Update"
    />

    <!-- Modal Hapus Destinasi -->
    <x-admin.modal 
        id="deletedestination"
        title="Hapus Destinasi"
        size="modal-md"
        :isDelete="true"
        :bodyText="'Apakah Anda yakin ingin menghapus destinasi ini?'"
    />

    <!-- Script DataTable -->
    <script>
        $(document).ready(function() {
            $('#destinasiTable').DataTable({
                responsive: true,
                columnDefs: [
                    { targets: [-1], orderable: false }
                ]
            });
        });
    </script>

    <!-- Tambahkan CSS berikut di bagian bawah file atau di header -->
    <style>
        .modal-dialog.modal-lg {
            max-height: 90vh;
        }
        
        .modal-body {
            max-height: calc(90vh - 120px); /* 120px untuk header dan footer modal */
            overflow-y: auto;
        }
        .modal-body::-webkit-scrollbar {
            display: none; /* Chrome, Safari dan Opera */
        }
    </style>
</div>
</x-admin.layout>