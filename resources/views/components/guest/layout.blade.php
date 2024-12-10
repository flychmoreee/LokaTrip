<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">

    <title>Loka Trip Website</title>
</head>

<body>

    <main class="main">
        <x-guest.header></x-guest.header>
        {{ $slot }}
        <x-guest.footer></x-guest.footer>
    </main>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('/assets/js/scrollreveal.min.js') }}"></script>

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('/assets/js/main.js') }}"></script>


    <!--=============== JS POPUP LOGIN ===============-->
    <script>
        function openLoginModal() {
            const modal = new bootstrap.Modal(document.getElementById('loginModal'));
            modal.show();
        }

        // Fungsi untuk menutup modal menggunakan Bootstrap
        function closeLoginModal() {
            const modalElement = document.getElementById('loginModal');
            const modalInstance = bootstrap.Modal.getInstance(modalElement);
            modalInstance.hide(); // Tutup modal menggunakan API Bootstrap
        }
    </script>

</body>

</html>
