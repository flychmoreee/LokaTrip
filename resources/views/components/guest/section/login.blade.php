<div id="loginModal" class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center">
    <div class="bg-white/90 backdrop-blur rounded-2xl shadow-2xl w-full max-w-md p-8 relative transform transition-all duration-300 scale-90 opacity-0 hover:shadow-blue-500/20"
        id="modalContent">
        <!-- Tombol Close dengan animasi -->
        <button
            class="absolute top-4 right-4 text-gray-500 hover:text-red-500 hover:rotate-90 transition-all duration-300"
            onclick="closeLoginModal()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Logo dan Judul dengan animasi -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
               <img src="{{ asset('/assets/img/logo.jpeg') }}" alt="Login Image" class="h-20 w-20 animate-bounce" viewBox="0 0 48 48">
            </div>
            <h2 class="text-2xl font-bold bg-black bg-clip-text text-transparent">
                Selamat Datang di LokaTrip!
            </h2>
            <p class="text-gray-600 mt-2">Masuk dan segera temukan keajaiban di Indonesia.</p>
        </div>

        <!-- Tombol Login Google dengan efek hover yang lebih menarik -->
        <div class="text-center">
            <a href="{{ route('google.login') }}"
                class="group relative w-full bg-black hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-4 px-6 rounded-xl inline-flex items-center justify-center transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg">
                <div
                    class="absolute inset-0 bg-white/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 animate-pulse" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        d="M21.35 11.1H12v2.8h5.35C16.8 15.6 14.65 17 12 17c-3.3 0-6-2.7-6-6s2.7-6 6-6c1.5 0 2.8.55 3.8 1.4l2.1-2.1C16.55 3.45 14.4 2.5 12 2.5 6.75 2.5 2.5 6.75 2.5 12S6.75 21.5 12 21.5c5.25 0 9.5-4.25 9.5-9.5 0-.45-.05-.9-.15-1.35z" />
                </svg>
                Login dengan Google
            </a>
        </div>
    </div>
</div>
