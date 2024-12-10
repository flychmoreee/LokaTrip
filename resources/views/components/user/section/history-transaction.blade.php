<x-user.layout>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="project-page d-flex justify-content-between align-items-center flex-wrap">
                <div class="project mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#AllStatus" role="tab">Sukses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Pending" role="tab">Pending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Closed" role="tab">Gagal</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="AllStatus">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Destinasi</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah Tiket</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="text-primary d-block fs-18 font-w500">#484</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('/assets/img/gunung.jpg') }}" alt=""
                                                        style="width: 100px; height: auto; object-fit: cover; border-radius: 5px; margin-right: 15px;">
                                                    <h3 class="fs-18 text-black font-w600">Gunung Bromo</h3>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="fs-18 font-w500">11 April 2023</span>
                                            </td>
                                            <td>
                                                <span class="fs-18 font-w500">2</span>
                                            </td>
                                            <td>
                                                <span class="fs-18 font-w500">Rp 200.000</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="btn bgl-warning text-warning fs-18 font-w600">PENDING</span>
                                            </td>

                                        </tr>
                                        <!-- Baris kedua -->
                                        <tr>
                                            <td>
                                                <span class="text-primary d-block fs-18 font-w500">#488</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('/assets/img/pantai-bingin.jpg') }}" alt=""
                                                        style="width: 100px; height: auto; object-fit: cover; border-radius: 5px; margin-right: 15px;">
                                                    <h3 class="fs-18 text-black font-w600">Pantai Kuta</h3>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="fs-18 font-w500">15 April 2023</span>
                                            </td>
                                            <td>
                                                <span class="fs-18 font-w500">3</span>
                                            </td>
                                            <td>
                                                <span class="fs-18 font-w500">Rp 150.000</span>
                                            </td>
                                            <td>
                                                <span class="btn bgl-success text-success fs-18 font-w600">SUKSES</span>
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
    </div>




</x-user.layout>
