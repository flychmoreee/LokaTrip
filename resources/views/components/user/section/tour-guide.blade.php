<x-user.layout>

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <!-- Search Bar -->
                <div class="col-md-6 mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search-input" placeholder="Cari tour guide...">
                        <button class="btn btn-primary" type="button" id="search-btn">Cari</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                            <div class="card contact-bx item-content">
                                @foreach ($tourGuides as $tourGuide)
                                    <div class="card-body user-profile">
                                        <div class="image-bx">
                                            <img src="{{ asset('/storage/' . $tourGuide->image_profile) }}"
                                                alt="" class="rounded-circle">
                                        </div>
                                        <div class="media-body user-meta-info">
                                            <h6 class="fs-18 font-w600 my-1"><a class="text-black user-name"
                                                    data-name="Alan Green">{{ $tourGuide->name }}</a></h6>
                                            <p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Tour Guide</p>
                                            <ul>
                                                <ul>
                                                    <li><a href="{{ $tourGuide->phone }}"><i
                                                                class="fab fa-whatsapp text-white"></i></a></li>
                                                    <li><a href="{{ $tourGuide->instagram }}"><i
                                                                class="fab fa-instagram text-white"></i></a></li>
                                                </ul>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-user.layout>
