<x-user.layout>
    <div class="content-body">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-wrap">

            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row" id="tour-guide-container">
                        @forelse ($tourGuides as $tourGuide)
                            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                                <div class="card contact-bx item-content">
                                    <div class="card-body user-profile">
                                        <div class="image-bx">
                                            <img src="{{ asset('/storage/' . $tourGuide->image_profile) }}"
                                                alt="" class="rounded-circle">
                                        </div>
                                        <div class="media-body user-meta-info">
                                            <h6 class="fs-18 font-w600 my-1">
                                                <a class="text-black user-name">{{ $tourGuide->name }}</a>
                                            </h6>
                                            <p class="fs-14 mb-3 user-work">Tour Guide</p>
                                            <ul>
                                                <li><a href="{{ $tourGuide->phone }}"><i
                                                            class="fab fa-whatsapp text-white"></i></a></li>
                                                <li><a href="{{ $tourGuide->instagram }}"><i
                                                            class="fab fa-instagram text-white"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>Tidak ada tour guide yang ditemukan</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.layout>
