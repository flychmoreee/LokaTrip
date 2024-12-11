<!-- main body area -->
<x-admin.layout :active="['landingpage']">
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
                <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center     zindex-popover">
                    <div class="u-info me-2">
                        <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Dylan Hunter</span></p>
                        <small>Admin Profile</small>
                    </div>
                    <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                        <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.png" alt="profile">
                    </a>
                    <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                        <div class="card border-0 w280">
                            <div class="card-body pb-0">
                                <div class="d-flex py-1">
                                    <img class="avatar rounded-circle" src="assets/images/profile_av.png" alt="profile">
                                    <div class="flex-fill ms-3">
                                        <p class="mb-0"><span class="font-weight-bold">Dylan Hunter</span></p>
                                        <small class="">Dylan.hunter@gmail.com</small>
                                    </div>
                                </div>
                                
                                <div><hr class="dropdown-divider border-dark"></div>
                            </div>
                            <div class="list-group m-2 ">
                                <a href="task.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-tasks fs-5 me-3"></i>My Task</a>
                                <a href="members.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user-group fs-6 me-3"></i>members</a>
                                <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                <div><hr class="dropdown-divider border-dark"></div>
                                <a href="ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- menu toggler -->
            <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                <span class="fa fa-bars"></span>
            </button>

            <!-- main menu Search-->
            <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                <div class="input-group flex-nowrap input-group-lg">
                    <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                    <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping" id="searchInput">
                    <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
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
                    <h3 class="fw-bold mb-0">About Us Section</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addabout">
                            <i class="icofont-plus-circle me-2 fs-6"></i>Tambah About
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel About -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="aboutTable" class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>IMAGE</th>
                                    <th>TITLE</th>
                                    <th>DESCRIPTION</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{ asset('/assets/img/danau.jpg') }}" width="100" class="rounded"></td>
                                    <td>Our Story</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editabout">
                                            <i class="icofont-edit text-success"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteabout">
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

<!-- Create About Modal -->
<x-admin.modal 
    id="addabout"
    title="Tambah About"
    :fields="[
        [
            'type' => 'file',
            'name' => 'image',
            'label' => 'Gambar',
            'required' => true
        ],
        [
            'type' => 'text',
            'name' => 'title',
            'label' => 'Judul',
            'required' => true
        ],
        [
            'type' => 'textarea',
            'name' => 'description',
            'label' => 'Deskripsi',
            'required' => true
        ]
    ]"
/>

<!-- Edit About Modal -->
<x-admin.modal 
    id="editabout"
    title="Edit About"
    method="PUT"
    :fields="[
        [
            'type' => 'hidden',
            'name' => 'id',
            'value' => ''
        ],
        [
            'type' => 'file',
            'name' => 'image',
            'label' => 'Gambar',
            'help' => 'Biarkan kosong jika tidak ingin mengubah gambar',
            'preview' => asset('/assets/img/danau.jpg') // Contoh preview gambar
        ],
        [
            'type' => 'text',
            'name' => 'title',
            'label' => 'Judul',
            'value' => 'Our Story',
            'required' => true
        ],
        [
            'type' => 'textarea',
            'name' => 'description',
            'label' => 'Deskripsi',
            'value' => 'Lorem ipsum dolor sit amet...',
            'required' => true
        ]
    ]"
    submitText="Update"
/>

<!-- Delete About Modal -->
<x-admin.modal 
    id="deleteabout"
    title="Hapus About"
    size="modal-md"
    :isDelete="true"
    :bodyText="'Apakah Anda yakin ingin menghapus item ini?'"
/>

<!-- Script DataTable -->
<script>
    $(document).ready(function() {
        $('#aboutTable').DataTable({
            responsive: true,
            columnDefs: [
                { targets: [-1], orderable: false }
            ]
        });
    });
</script>
</x-admin.layout>
