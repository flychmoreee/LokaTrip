<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <!-- Beranda -->
            <li class="{{ request()->is('user') ? 'active' : '' }}">
                <a href="{{ url('/user/dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Beranda</span>
                </a>
            </li>

            <!-- Destinasi -->
            <li class="{{ request()->is('user') ? 'active' : '' }}">
                <a href="{{ url('/user/destination') }}">
                    <i class="fas fa-location-dot"></i>
                    <span class="nav-text">Destinasi</span>
                </a>
            </li>

            <!-- Kuliner -->
            <li class="{{ request()->is('user') ? 'active' : '' }}">
                <a href="{{ url('/user/culinary') }}">
                    <i class="fa-solid fa-utensils"></i>
                    <span class="nav-text">Kuliner</span>
                </a>
            </li>

            <!-- Tour Guide -->
            <li class="{{ request()->is('user') ? 'active' : '' }}">
                <a href="{{ url('/user/tour-guide') }}">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Tour Guide</span>
                </a>
            </li>

            <!-- History Transaction -->
            <li class="{{ request()->is('user') ? 'active' : '' }}">
                <a href="{{ url('/user/trip-plan') }}">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <span class="nav-text">Rencana Perjalanan</span>
                </a>
            </li>
        </ul>
    </div>
</div>
