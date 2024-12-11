<!-- main body area -->
<x-admin.layout>
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
                    <!-- Tambahkan tombol hamburger untuk sidebar -->
                    <button type="button" class="btn btn-primary sidebar-toggle-btn d-lg-none">
                        <i class="icofont-navigation-menu"></i>
                    </button>
                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Dylan
                                        Hunter</span></p>
                                <small>Admin Profile</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.png"
                                    alt="profile">
                            </a>
                            <div
                                class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="assets/images/profile_av.png"
                                                alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">Dylan Hunter</span></p>
                                                <small class="">Dylan.hunter@gmail.com</small>
                                            </div>
                                        </div>

                                        <div>
                                            <hr class="dropdown-divider border-dark">
                                        </div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="task.html" class="list-group-item list-group-item-action border-0 "><i
                                                class="icofont-tasks fs-5 me-3"></i>My Task</a>
                                        <a href="members.html"
                                            class="list-group-item list-group-item-action border-0 "><i
                                                class="icofont-ui-user-group fs-6 me-3"></i>members</a>
                                        <a href="ui-elements/auth-signin.html"
                                            class="list-group-item list-group-item-action border-0 "><i
                                                class="icofont-logout fs-6 me-3"></i>Signout</a>
                                        <div>
                                            <hr class="dropdown-divider border-dark">
                                        </div>
                                        <a href="ui-elements/auth-signup.html"
                                            class="list-group-item list-group-item-action border-0 "><i
                                                class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>

                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i
                                    class="fa fa-search"></i></button>
                            <input type="search" class="form-control" placeholder="Search" aria-label="search"
                                aria-describedby="addon-wrapping" id="searchInput">
                            <button type="button" class="input-group-text add-member-top" id="addon-wrappingone"
                                data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>

                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card border-0 mb-4 no-bg">
                            <div
                                class="card-header py-3 px-0 d-flex align-items-center justify-content-between border-bottom">
                                <h3 class="fw-bold flex-fill mb-0">Tour Guides</h3>
                                <div class="col-auto d-flex">
                                    <button type="button" class="btn btn-dark ms-1" data-bs-toggle="modal"
                                        data-bs-target="#addtourguide">
                                        <i class="icofont-plus-circle me-2 fs-6"></i>Tambah Tour Guide
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabel Tour Guide -->
                <div class="row clearfix g-3">
                    <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="tourGuideTable" class="table table-hover align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>WhatsApp</th>
                                            <th>Instagram</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data Statis -->
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/assets/img/danau.jpg') }}" alt="" class="avatar rounded-circle" style="width: 50px; height: 50px;">
                                            </td>
                                            <td>Rafi Tour</td>
                                            <td>6281234567890</td>
                                            <td>@rafitour</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edittourguide">
                                                    <i class="icofont-edit text-success"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deletetourguide">
                                                    <i class="icofont-ui-delete text-danger"></i>
                                                </button>
                                                <a href="https://wa.me/6281234567890" class="btn btn-sm btn-outline-secondary">
                                                    <i class="icofont-whatsapp text-success"></i>
                                                </a>
                                                <a href="https://instagram.com/rafitour" class="btn btn-sm btn-outline-secondary">
                                                    <i class="icofont-instagram text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- Tambahkan data statis lainnya jika diperlukan -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create Tour Guide Modal -->
        <x-admin.modal 
            id="addtourguide"
            title="Tambah Tour Guide"
            size="modal-lg modal-dialog-scrollable"
            :fields="[
                [
                    'type' => 'text',
                    'name' => 'nama',
                    'label' => 'Nama Tour Guide',
                    'placeholder' => 'Masukkan nama tour guide...',
                    'required' => true
                ],
                [
                    'type' => 'tel',
                    'name' => 'whatsapp',
                    'label' => 'WhatsApp',
                    'placeholder' => '628xxxxxxxxxx',
                    'required' => true
                ],
                [
                    'type' => 'text',
                    'name' => 'instagram',
                    'label' => 'Instagram',
                    'placeholder' => '@username',
                    'required' => true
                ],
                [
                    'type' => 'file',
                    'name' => 'foto',
                    'label' => 'Foto Profile',
                    'required' => true
                ]
            ]"
        />

        <!-- Edit Tour Guide Modal -->
        <x-admin.modal 
            id="edittourguide"
            title="Edit Tour Guide"
            method="PUT"
            size="modal-lg modal-dialog-scrollable"
            :fields="[
                [
                    'type' => 'hidden',
                    'name' => 'id'
                ],
                [
                    'type' => 'text',
                    'name' => 'nama',
                    'label' => 'Nama Tour Guide',
                    'required' => true
                ],
                [
                    'type' => 'tel',
                    'name' => 'whatsapp',
                    'label' => 'WhatsApp',
                    'required' => true
                ],
                [
                    'type' => 'text',
                    'name' => 'instagram',
                    'label' => 'Instagram',
                    'required' => true
                ],
                [
                    'type' => 'file',
                    'name' => 'foto',
                    'label' => 'Foto Profile',
                    'help' => 'Biarkan kosong jika tidak ingin mengubah foto'
                ]
            ]"
            submitText="Update"
        />

        <!-- Delete Tour Guide Modal -->
        <x-admin.modal 
            id="deletetourguide"
            title="Hapus Tour Guide"
            size="modal-md modal-dialog-scrollable"
            :isDelete="true"
            :bodyText="'Apakah Anda yakin ingin menghapus tour guide ini?'"
        />
    </div>
    </div>

<!-- Delete About Modal -->
<x-admin.modal 
    id="deleteabout"
    title="Hapus About"
    size="modal-md"
    :isDelete="true"
    :bodyText="'Apakah Anda yakin ingin menghapus item ini?'"
/>
    <script>
        $(document).ready(function() {
            $('#tourGuideTable').DataTable({
                responsive: true,
                columnDefs: [
                    { targets: [-1], orderable: false },
                    { targets: [0], orderable: false }
                ]
            });
        });
    </script>
</x-admin.layout>
