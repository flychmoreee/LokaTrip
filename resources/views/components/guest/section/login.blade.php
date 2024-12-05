<div id="loginModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content position-relative shadow-lg">
            <!-- Tombol Close -->
            <button type="button" class="btn-close ms-auto" aria-label="Close" onclick="closeLoginModal()"></button>

            <!-- Logo dan Judul -->
            <div class="modal-body text-center">
                <div class="d-flex justify-content-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-bounce" width="80" height="80"
                        viewBox="0 0 48 48">
                        <path fill="#000"
                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                        <path fill="#000"
                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                        <path fill="#000"
                            d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                    </svg>
                </div>
                <h2 class="h4 fw-bold text-black">
                    Selamat Datang di LokaTrip!
                </h2>
                <p class="text-muted mt-2">
                    Masuk dan segera temukan keajaiban di Indonesia.
                </p>
            </div>

            <!-- Tombol Login Google -->
            <div class="modal-footer justify-content-center">
                <a href="{{ route('google.login') }}"
                    class="btn btn-dark d-flex align-items-center gap-2 py-2 px-4 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="svg-fade"
                        viewBox="0 0 24 24">
                        <path
                            d="M21.35 11.1H12v2.8h5.35C16.8 15.6 14.65 17 12 17c-3.3 0-6-2.7-6-6s2.7-6 6-6c1.5 0 2.8.55 3.8 1.4l2.1-2.1C16.55 3.45 14.4 2.5 12 2.5 6.75 2.5 2.5 6.75 2.5 12S6.75 21.5 12 21.5c5.25 0 9.5-4.25 9.5-9.5 0-.45-.05-.9-.15-1.35z" />
                    </svg>
                    Login Dengan Google
                </a>
            </div>
        </div>
    </div>
</div>
