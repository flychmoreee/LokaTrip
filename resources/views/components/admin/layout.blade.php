<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Loka Trip Website</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> 
    <!-- Favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icofont/dist/icofont.min.css">
    <!-- Style css -->
    <link href="{{ asset('/assets/css/admin-dashboard.css') }}" rel="stylesheet">

</head>
<body>
    <div id="mytask-layout" class="theme-indigo">
        <x-admin.sidebar></x-admin.sidebar>
        {{ $slot }}
    </div>

    <script src="{{ asset('/assets/js/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/template.js') }}"></script>
</body>
</html>

