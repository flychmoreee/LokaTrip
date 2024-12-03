<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Tombol Login -->
    <button 
        onclick="openLoginModal()"
        class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg shadow hover:bg-blue-600">
        Login
    </button>

    <!-- Komponen Modal Login -->
    <x-guest.login />

    <!-- Script untuk Pop-up -->
    <script>
        function openLoginModal() {
            const modal = document.getElementById('loginModal');
            const content = document.getElementById('modalContent');
            mod al.classList.remove('hidden');
            setTimeout(() => content.classList.remove('scale-90', 'opacity-0'), 50);
        }

        function closeLoginModal() {
            const modal = document.getElementById('loginModal');
            const content = document.getElementById('modalContent');
            content.classList.add('scale-90', 'opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }
    </script>

</body>
</html>
