<x-admin.layout>
<!-- main body area -->
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
                           <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                            <input type="search" class="form-control" id="searchDestinasi" placeholder="Cari destinasi..." aria-label="search" aria-describedby="addon-wrapping">
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
                            <div class="card-header py-3 px-0 d-flex align-items-center justify-content-between border-bottom">
                                <h3 class="fw-bold flex-fill mb-0">Destinasi Wisata</h3>
                                <div class="col-auto d-flex">
                                    <button type="button" class="btn btn-dark ms-1" data-bs-toggle="modal" data-bs-target="#createDestinasi">
                                        <i class="icofont-plus-circle me-2 fs-6"></i>Tambah Destinasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Destinasi List Container -->
                <div class="row g-3 row-deck" id="destinasiContainer">
                    <!-- Destinasi cards will be added here dynamically -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Destinasi Modal -->
<div class="modal fade" id="createDestinasi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Tambah Destinasi Wisata</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="deadline-form">
                    <form id="createDestinasiForm">
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">Nama Destinasi</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control" name="harga" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Kategori</label>
                                <select class="form-select" name="kategori" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Hiburan">Hiburan</option>
                                    <option value="Wisata Alam">Wisata Alam</option>
                                    <option value="Budaya">Budaya</option>
                                    <option value="Kuliner">Kuliner</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Jam Operasional</label>
                                <input type="text" class="form-control" name="jamOperasional" placeholder="09:00 - 17:00 WIB" required>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">Fasilitas</label>
                                <input type="text" class="form-control" name="fasilitas" placeholder="Parkir, Restoran, Toko Souvenir" required>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">Foto Destinasi</label>
                                <input class="form-control" type="file" name="foto" accept="image/*" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="saveDestinasi">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Destinasi Modal -->
<div class="modal fade" id="editDestinasi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Edit Destinasi Wisata</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDestinasiForm">
                    <input type="hidden" name="editId">
                    <div class="mb-3">
                        <label class="form-label">Nama Destinasi</label>
                        <input type="text" class="form-control" name="editNama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control" name="editHarga" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" class="form-control" name="editLokasi" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Operasional</label>
                        <input type="text" class="form-control" name="editJamOperasional" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fasilitas</label>
                        <input type="text" class="form-control" name="editFasilitas" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-control" name="editKategori" required>
                            <option value="Hiburan">Hiburan</option>
                            <option value="Wisata Alam">Wisata Alam</option>
                            <option value="Budaya">Budaya</option>
                            <option value="Kuliner">Kuliner</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="editDeskripsi" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto Destinasi</label>
                        <input class="form-control" type="file" name="editFoto" accept="image/*" multiple>
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="updateDestinasi">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteDestinasi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Hapus Destinasi?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body justify-content-center flex-column d-flex">
                <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                <p class="mt-4 fs-5 text-center">Apakah Anda yakin ingin menghapus destinasi ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Template untuk card destinasi -->
<template id="destinasiTemplate">
    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <div class="profile-pic w-100 mb-3">
                        <img src="" alt="" class="rounded-2 w-100 destinasi-image" style="height: 200px; object-fit: cover;">
                    </div>
                    <div class="flex-fill ms-3">
                        <h5 class="destinasi-nama fw-bold mb-1"></h5>
                        <h6 class="destinasi-harga text-primary mb-2"></h6>
                        <div class="location-info mb-2">
                            <p class="mb-1">
                                <i class="icofont-location-pin"></i> <span class="destinasi-lokasi"></span>
                            </p>
                            <p class="mb-1">
                                <i class="icofont-clock-time"></i> <span class="destinasi-jam"></span>
                            </p>
                            <p class="mb-1">
                                <i class="icofont-star"></i> Fasilitas: <span class="destinasi-fasilitas"></span>
                            </p>
                        </div>
                        <span class="badge bg-success destinasi-kategori mb-2"></span>
                        <p class="destinasi-deskripsi mb-3" style="font-size: 0.9rem;"></p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-sm btn-outline-secondary edit-destinasi" data-bs-toggle="modal">
                                <i class="icofont-edit text-success"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-outline-secondary delete-destinasi">
                                <i class="icofont-ui-delete text-danger"></i> Hapus
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<!-- Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const elements = {
        container: document.getElementById('destinasiContainer'),
        createForm: document.getElementById('createDestinasiForm'),
        editForm: document.getElementById('editDestinasiForm'),
        template: document.getElementById('destinasiTemplate'),
        deleteModal: new bootstrap.Modal(document.getElementById('deleteDestinasi'))
    };

    let destinasiToDelete = null;

    // Fungsi utilitas
    const utils = {
        formatRupiah: (number) => {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(number);
        },
        
        processImage: (file, callback) => {
            const reader = new FileReader();
            reader.onload = e => callback(e.target.result);
            reader.readAsDataURL(file);
        },

        getCard: id => document.querySelector(`.edit-destinasi[data-id="${id}"]`).closest('.col-xxl-4'),

        updateCardData: (card, data) => {
            card.querySelector('.destinasi-nama').textContent = data.nama;
            card.querySelector('.destinasi-harga').textContent = utils.formatRupiah(data.harga);
            card.querySelector('.destinasi-lokasi').textContent = data.lokasi;
            card.querySelector('.destinasi-jam').textContent = data.jamOperasional;
            card.querySelector('.destinasi-fasilitas').textContent = data.fasilitas;
            card.querySelector('.destinasi-kategori').textContent = data.kategori;
            card.querySelector('.destinasi-deskripsi').textContent = data.deskripsi;
            if (data.imageUrl) {
                card.querySelector('.destinasi-image').src = data.imageUrl;
            }
            
            // Set data-id untuk tombol edit dan delete
            card.querySelector('.edit-destinasi').dataset.id = data.id;
            card.querySelector('.delete-destinasi').dataset.id = data.id;
        }
    };

    // Event Handlers
    const handlers = {
        create: () => {
            const formData = new FormData(elements.createForm);
            const fileInput = elements.createForm.querySelector('input[type="file"]');
            
            if (fileInput.files[0]) {
                utils.processImage(fileInput.files[0], imageUrl => {
                    const clone = elements.template.content.cloneNode(true);
                    utils.updateCardData(clone, {
                        id: Date.now(),
                        nama: formData.get('nama'),
                        harga: formData.get('harga'),
                        lokasi: formData.get('lokasi'),
                        jamOperasional: formData.get('jamOperasional'),
                        fasilitas: formData.get('fasilitas'),
                        kategori: formData.get('kategori'),
                        deskripsi: formData.get('deskripsi'),
                        imageUrl: imageUrl
                    });
                    elements.container.appendChild(clone);
                    elements.createForm.reset();
                    bootstrap.Modal.getInstance(document.getElementById('createDestinasi')).hide();
                });
            }
        },

        edit: (id, card) => {
            const data = {
                nama: card.querySelector('.destinasi-nama').textContent,
                harga: card.querySelector('.destinasi-harga').textContent.replace(/[^0-9]/g, ''),
                lokasi: card.querySelector('.destinasi-lokasi').textContent,
                jamOperasional: card.querySelector('.destinasi-jam').textContent,
                fasilitas: card.querySelector('.destinasi-fasilitas').textContent,
                kategori: card.querySelector('.destinasi-kategori').textContent,
                deskripsi: card.querySelector('.destinasi-deskripsi').textContent
            };
            
            Object.keys(data).forEach(key => {
                elements.editForm.querySelector(`[name="edit${key.charAt(0).toUpperCase() + key.slice(1)}"]`).value = data[key];
            });
            elements.editForm.querySelector('[name="editId"]').value = id;
            new bootstrap.Modal(document.getElementById('editDestinasi')).show();
        },

        update: () => {
            const card = utils.getCard(elements.editForm.querySelector('[name="editId"]').value);
            const fileInput = elements.editForm.querySelector('[name="editFoto"]');
            
            const updateData = {
                id: elements.editForm.querySelector('[name="editId"]').value,
                nama: elements.editForm.querySelector('[name="editNama"]').value,
                harga: elements.editForm.querySelector('[name="editHarga"]').value,
                lokasi: elements.editForm.querySelector('[name="editLokasi"]').value,
                jamOperasional: elements.editForm.querySelector('[name="editJamOperasional"]').value,
                fasilitas: elements.editForm.querySelector('[name="editFasilitas"]').value,
                kategori: elements.editForm.querySelector('[name="editKategori"]').value,
                deskripsi: elements.editForm.querySelector('[name="editDeskripsi"]').value
            };

            if (fileInput.files[0]) {
                utils.processImage(fileInput.files[0], imageUrl => {
                    updateData.imageUrl = imageUrl;
                    utils.updateCardData(card, updateData);
                });
            } else {
                utils.updateCardData(card, updateData);
            }

            bootstrap.Modal.getInstance(document.getElementById('editDestinasi')).hide();
            elements.editForm.reset();
        },

        delete: () => {
            if (destinasiToDelete) {
                destinasiToDelete.remove();
                destinasiToDelete = null;
                elements.deleteModal.hide();
            }
        }
    };

    // Event Listeners
    document.getElementById('saveDestinasi').addEventListener('click', handlers.create);
    document.getElementById('updateDestinasi').addEventListener('click', handlers.update);
    document.getElementById('confirmDelete').addEventListener('click', handlers.delete);

    elements.container.addEventListener('click', e => {
        const editBtn = e.target.closest('.edit-destinasi');
        const deleteBtn = e.target.closest('.delete-destinasi');

        if (editBtn) {
            handlers.edit(editBtn.dataset.id, utils.getCard(editBtn.dataset.id));
        } else if (deleteBtn) {
            destinasiToDelete = utils.getCard(deleteBtn.dataset.id);
            elements.deleteModal.show();
        }
    });

    // Tambahkan fungsi search
    const searchDestinasi = document.getElementById('searchDestinasi');
    
    searchDestinasi.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const cards = document.querySelectorAll('#destinasiContainer .col-xxl-4');
        
        cards.forEach(card => {
            const nama = card.querySelector('.destinasi-nama').textContent.toLowerCase();
            const lokasi = card.querySelector('.destinasi-lokasi').textContent.toLowerCase();
            const kategori = card.querySelector('.destinasi-kategori').textContent.toLowerCase();
            const deskripsi = card.querySelector('.destinasi-deskripsi').textContent.toLowerCase();
            
            const isMatch = nama.includes(searchTerm) || 
                           lokasi.includes(searchTerm) || 
                           kategori.includes(searchTerm) || 
                           deskripsi.includes(searchTerm);
            
            card.style.display = isMatch ? '' : 'none';
        });
    });
});
</script>
</x-admin.layout>