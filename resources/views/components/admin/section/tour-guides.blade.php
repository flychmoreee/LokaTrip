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
                                        data-bs-target="#createproject">
                                        <i class="icofont-plus-circle me-2 fs-6"></i>Tambah Tour Guide
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tour Guide List Container -->
                <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4"
                    id="tourGuideContainer">
                    <!-- Tour guides will be added here dynamically -->
                </div>
            </div>
        </div>

        <!-- Create Tour Guide Modal -->
        <div class="modal fade" id="createproject" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Tambah Tour Guide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="createTourGuideForm">
                            <div class="mb-3">
                                <label class="form-label">Nama Tour Guide</label>
                                <input type="text" class="form-control" name="nama" placeholder="Rafi Tour"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">WhatsApp</label>
                                <input type="text" class="form-control" name="whatsapp"
                                    placeholder="6281234567890" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="instagram" placeholder="@rafitour"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto Profile</label>
                                <input class="form-control" type="file" name="foto" accept="image/*" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="saveTourGuide">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Tour Guide Modal -->
        <div class="modal fade" id="editTourGuideModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Edit Tour Guide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editTourGuideForm">
                            <input type="hidden" name="editId">
                            <div class="mb-3">
                                <label class="form-label">Nama Tour Guide</label>
                                <input type="text" class="form-control" name="editNama" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">WhatsApp</label>
                                <input type="text" class="form-control" name="editWhatsapp" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="editInstagram" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto Profile</label>
                                <input class="form-control" type="file" name="editFoto" accept="image/*">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto</small>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="updateTourGuide">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="deleteproject" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="deleteprojectLabel"> Delete item Permanently?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body justify-content-center flex-column d-flex">
                    <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                    <p class="mt-4 fs-5 text-center">You can only delete this item Permanently</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger color-fff">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Template untuk card tour guide -->
    <!-- Tour Guide List Container -->
    <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4"
        id="tourGuideContainer">
        @foreach ($tourGuides as $guide)
            <div class="col">
                <div class="card teacher-card">
                    <div class="card-body d-flex">
                        <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                            <img src="{{ asset('storage/' . $guide->foto) }}" alt=""
                                class="avatar xl rounded-circle img-thumbnail shadow-sm guide-image">
                            <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                                <h6 class="mb-0 fw-bold d-block fs-6 mt-2">{{ $guide->nama }}</h6>
                                <div class="btn-group mt-2" role="group">
                                    <button type="button" class="btn btn-outline-secondary edit-guide"
                                        data-id="{{ $guide->id }}">
                                        <i class="icofont-edit text-success"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary delete-guide"
                                        data-id="{{ $guide->id }}">
                                        <i class="icofont-ui-delete text-danger"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                            <h6 class="mb-0 mt-2 fw-bold d-block fs-6 guide-nama">{{ $guide->nama }}</h6>
                            <div class="video-setting-icon mt-3 pt-3 border-top">
                                <p>
                                    <i class="icofont-whatsapp me-2"></i>WhatsApp: <span
                                        class="guide-whatsapp">{{ $guide->whatsapp }}</span><br>
                                    <i class="icofont-instagram me-2"></i>Instagram: <span
                                        class="guide-instagram">{{ $guide->instagram }}</span>
                                </p>
                            </div>
                            <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                <a href="https://wa.me/{{ $guide->whatsapp }}"
                                    class="btn btn-dark btn-sm mt-1 me-1 whatsapp-link">
                                    <i class="icofont-whatsapp me-2 fs-6"></i>Chat WhatsApp
                                </a>
                                <a href="https://instagram.com/{{ ltrim($guide->instagram, '@') }}"
                                    class="btn btn-dark btn-sm mt-1 instagram-link">
                                    <i class="icofont-instagram me-2 fs-6"></i>Lihat Instagram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Script untuk menangani logika -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const elements = {
                container: document.getElementById('tourGuideContainer'),
                createForm: document.getElementById('createTourGuideForm'),
                editForm: document.getElementById('editTourGuideForm'),
                template: document.getElementById('tourGuideTemplate'),
                deleteModal: new bootstrap.Modal(document.getElementById('deleteproject')),
                searchInput: document.getElementById('searchInput'),
                searchButton: document.getElementById('addon-wrapping'),
                saveButton: document.getElementById('saveTourGuide'),
                editModal: new bootstrap.Modal(document.getElementById('editTourGuideModal'))
            };

            let tourGuideToDelete = null;

            // Fungsi utilitas
            const utils = {
                getCard: id => document.querySelector(`.edit-guide[data-id="${id}"]`).closest('.col'),
                processImage: (file, callback) => {
                    const reader = new FileReader();
                    reader.onload = e => callback(e.target.result);
                    reader.readAsDataURL(file);
                },
                updateCardData: (card, data) => {
                    card.querySelector('.guide-nama').textContent = data.nama;
                    card.querySelector('.guide-whatsapp').textContent = data.whatsapp;
                    card.querySelector('.guide-instagram').textContent = data.instagram;
                    card.querySelector('.whatsapp-link').href = `https://wa.me/${data.whatsapp}`;
                    card.querySelector('.instagram-link').href =
                        `https://instagram.com/${data.instagram.replace('@', '')}`;
                    if (data.imageUrl) card.querySelector('.guide-image').src = data.imageUrl;
                }
            };

            // Tambahkan fungsi pencarian
            const searchUtils = {
                normalizeText: (text) => text.toLowerCase().trim(),

                filterTourGuides: (searchTerm) => {
                    const cards = elements.container.querySelectorAll('.col');
                    let foundResults = false;

                    cards.forEach(card => {
                        const searchableFields = {
                            nama: card.querySelector('.guide-nama')?.textContent || '',
                            whatsapp: card.querySelector('.guide-whatsapp')?.textContent || '',
                            instagram: card.querySelector('.guide-instagram')?.textContent || ''
                        };

                        const matches = Object.values(searchableFields).some(value =>
                            searchUtils.normalizeText(value).includes(searchTerm)
                        );

                        card.style.display = matches ? '' : 'none';
                        if (matches) foundResults = true;
                    });

                    // Tampilkan pesan jika tidak ada hasil
                    const noResultsMsg = document.getElementById('noResultsMessage');
                    if (noResultsMsg) {
                        noResultsMsg.remove();
                    }

                    if (!foundResults && searchTerm) {
                        const message = document.createElement('div');
                        message.id = 'noResultsMessage';
                        message.className = 'col-12 text-center py-3';
                        message.innerHTML = `
                <div class="alert alert-info">
                    Tidak ada tour guide yang ditemukan dengan kata kunci "${searchTerm}"
                </div>
            `;
                        elements.container.appendChild(message);
                    }
                },

                handleSearch: () => {
                    const searchTerm = searchUtils.normalizeText(elements.searchInput.value);
                    searchUtils.filterTourGuides(searchTerm);
                },

                initializeSearch: () => {
                    // Event untuk input pencarian (real-time)
                    elements.searchInput.addEventListener('input', searchUtils.handleSearch);

                    // Event untuk tombol search
                    elements.searchButton.addEventListener('click', searchUtils.handleSearch);

                    // Event untuk pencarian dengan Enter
                    elements.searchInput.addEventListener('keypress', (e) => {
                        if (e.key === 'Enter') {
                            e.preventDefault();
                            searchUtils.handleSearch();
                        }
                    });
                }
            };

            // Inisialisasi pencarian
            searchUtils.initializeSearch();

            // Event Handlers
            const handlers = {
                create: () => {
                    const formData = new FormData(elements.createForm);
                    fetch('/admin/tour-guides', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content')
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.message) {
                                alert(data.message);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                },

                handlers.edit = (id, card) => {
                    // Pastikan elemen kartu ditemukan
                    if (!card) {
                        console.error('Card not found for ID:', id);
                        return;
                    }

                    // Data yang akan dimasukkan ke dalam form
                    const data = {
                        nama: card.querySelector('.guide-nama')?.textContent || '',
                        whatsapp: card.querySelector('.guide-whatsapp')?.textContent || '',
                        instagram: card.querySelector('.guide-instagram')?.textContent || ''
                    };

                    // Isi form dengan data yang ada
                    Object.keys(data).forEach(key => {
                        const input = elements.editForm.querySelector(
                            `[name="edit${key.charAt(0).toUpperCase() + key.slice(1)}"]`
                        );
                        if (input) {
                            input.value = data[key];
                        }
                    });

                    // Set ID yang akan diedit
                    elements.editForm.querySelector('[name="editId"]').value = id;

                    // Tampilkan modal
                    elements.editModal.show();
                };

                handlers.update = () => {
                    const formData = new FormData(elements.editForm);
                    const id = formData.get('editId');
                    const card = utils.getCard(id);

                    if (!card) {
                        console.error('Card not found for ID:', id);
                        return;
                    }

                    fetch('/admin/tour-guides/update', {
                            method: 'POST', // Gunakan metode sesuai API Anda (POST/PUT/PATCH)
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content')
                            }
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Failed to update tour guide');
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.message) {
                                alert(data.message);

                                const updateData = {
                                    nama: formData.get('editNama'),
                                    whatsapp: formData.get('editWhatsapp'),
                                    instagram: formData.get('editInstagram')
                                };

                                const editFoto = formData.get('editFoto');
                                if (editFoto && editFoto.size > 0) {
                                    utils.processImage(editFoto, imageUrl => {
                                        updateData.imageUrl = imageUrl;
                                        utils.updateCardData(card, updateData);
                                    });
                                } else {
                                    utils.updateCardData(card, updateData);
                                }

                                // Reset dan sembunyikan modal
                                bootstrap.Modal.getInstance(document.getElementById('editTourGuideModal'))
                                    .hide();
                                elements.editForm.reset();
                            }
                        })
                        .catch(error => console.error('Error updating tour guide:', error));
                };


                delete: () => {
                    if (tourGuideToDelete) {
                        tourGuideToDelete.remove();
                        tourGuideToDelete = null;
                        elements.deleteModal.hide();
                    }
                }
            };

            // Event Listeners
            elements.saveButton.addEventListener('click', handlers.create);
            document.getElementById('updateTourGuide').addEventListener('click', handlers.update);
            document.querySelector('#deleteproject .btn-danger').addEventListener('click', handlers.delete);

            elements.container.addEventListener('click', e => {
                const editBtn = e.target.closest('.edit-guide');
                const deleteBtn = e.target.closest('.delete-guide');

                if (editBtn) {
                    const id = editBtn.dataset.id;
                    const card = utils.getCard(id);
                    handlers.edit(id, card);
                } else if (deleteBtn) {
                    tourGuideToDelete = utils.getCard(deleteBtn.dataset.id);
                    elements.deleteModal.show();
                }
            });
        });
    </script>
</x-admin.layout>
