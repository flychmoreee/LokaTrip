<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}">
    <link href="{{ asset('/assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Style css -->
    <link href="{{ asset('/assets/css/user-dashboard.css') }}" rel="stylesheet">

    <title>Loka Trip Website</title>
</head>

<body>

    {{-- Preloader --}}
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="main-wrapper">
        <x-user.navbar></x-user.navbar>
        <x-user.sidebar></x-user.sidebar>
        {{ $slot }}
    </div>


    <!-- Required vendors -->
    <script src="{{ asset('/assets/js/global.min.js') }}"></script>
    <script src="{{ asset('/assets/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('/assets/js/apexchart.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('/assets/js/jquery.peity.min.js') }}"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('/assets/js/dashboard-1.js') }}"></script>

    <script src="{{ asset('/assets/js/owl.carousel.js') }} "></script>

    <script src="{{ asset('/assets/js/custom.min.js') }} "></script>
    <script src="{{ asset('/assets/js/dlabnav-init.js') }} "></script>
    <script src="{{ asset('/assets/js/demo.js') }} "></script>
    <script src="{{ asset('/assets/js/styleSwitcher.js') }}"></script>
    <script>
        function cardsCenter() {

            /*  testimonial one function by = owl.carousel.js */



            jQuery('.card-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1600: {
                        items: 1
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                cardsCenter();
            }, 1000);
        });
    </script>

</body>

</html>
