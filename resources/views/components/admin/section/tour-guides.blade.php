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
                                        @foreach ($tourGuides as $tourGuide)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('/storage/' . $tourGuide->image_profile) }}"
                                                        alt="" class="avatar rounded-circle"
                                                        style="width: 50px; height: 50px;">
                                                </td>
                                                <td>{{ $tourGuide->name }}</td>
                                                <td>{{ $tourGuide->phone }}</td>
                                                <td>{{ $tourGuide->instagram }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#edittourguide{{ $tourGuide->id }}">
                                                        <i class="icofont-edit text-success"></i>
                                                    </button>
                                                    <form action="{{ route('tour-guides.delete', $tourGuide->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-outline-danger" type="submit">
                                                            <i class="icofont-ui-delete text-danger"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{ $tourGuide->phone }}"
                                                        class="btn btn-sm btn-outline-secondary">
                                                        <i class="icofont-whatsapp text-success"></i>
                                                    </a>
                                                    <a href="{{ $tourGuide->instagram }}"
                                                        class="btn btn-sm btn-outline-secondary">
                                                        <i class="icofont-instagram text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <x-admin.modal id="edittourguide{{ $tourGuide->id }}"
                                                title="Edit Tour Guide"
                                                action="{{ route('tour-guides.update', $tourGuide->id) }}"
                                                method="PUT" size="modal-lg modal-dialog-scrollable"
                                                :fields="[
                                                    [
                                                        'type' => 'hidden',
                                                        'name' => 'id',
                                                        'value' => $tourGuide->id,
                                                    ],
                                                    [
                                                        'type' => 'text',
                                                        'name' => 'name',
                                                        'label' => 'Nama Tour Guide',
                                                        'required' => true,
                                                        'value' => $tourGuide->name,
                                                    ],
                                                    [
                                                        'type' => 'tel',
                                                        'name' => 'phone',
                                                        'label' => 'WhatsApp',
                                                        'required' => true,
                                                        'value' => $tourGuide->phone,
                                                    ],
                                                    [
                                                        'type' => 'text',
                                                        'name' => 'instagram',
                                                        'label' => 'Instagram',
                                                        'required' => true,
                                                        'value' => $tourGuide->instagram,
                                                    ],
                                                    [
                                                        'type' => 'file',
                                                        'name' => 'image_profile',
                                                        'label' => 'Foto Profile',
                                                        'help' => 'Biarkan kosong jika tidak ingin mengubah foto',
                                                        'value' => json_encode([$tourGuide->image_profile]),
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

        <!-- Create Tour Guide Modal -->
        <x-admin.modal id="addtourguide" title="Tambah Tour Guide" size="modal-lg modal-dialog-scrollable"
            action="{{ route('tour-guides.add') }}" :fields="[
                [
                    'type' => 'text',
                    'name' => 'name',
                    'label' => 'Nama Tour Guide',
                    'placeholder' => 'Masukkan nama tour guide...',
                    'required' => true,
                ],
                [
                    'type' => 'tel',
                    'name' => 'phone',
                    'label' => 'WhatsApp',
                    'placeholder' => '628xxxxxxxxxx',
                    'required' => true,
                ],
                [
                    'type' => 'text',
                    'name' => 'instagram',
                    'label' => 'Instagram',
                    'placeholder' => 'Flyychmoreee',
                    'required' => true,
                ],
                [
                    'type' => 'file',
                    'name' => 'image_profile',
                    'label' => 'Foto Profile',
                    'required' => true,
                ],
            ]" />

        <!-- Edit Tour Guide Modal -->


        <!-- Delete Tour Guide Modal -->
        <x-admin.modal id="deletetourguide" title="Hapus Tour Guide" size="modal-md modal-dialog-scrollable"
            :isDelete="true" :bodyText="'Apakah Anda yakin ingin menghapus tour guide ini?'" />
    </div>
    </div>

    <!-- Delete About Modal -->

    <script>
        $(document).ready(function() {
            $('#tourGuideTable').DataTable({
                responsive: true,
                columnDefs: [{
                        targets: [-1],
                        orderable: false
                    },
                    {
                        targets: [0],
                        orderable: false
                    }
                ]
            });
        });
    </script>
</x-admin.layout>
