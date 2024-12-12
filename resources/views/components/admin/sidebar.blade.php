<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-5 me-0">
    <div class="d-flex flex-column h-100">
        <a href="#" class="mb-0 brand-icon">
            <span class="logo-text">LokaTrip</span>
        </a>
        <!-- Menu: main ul -->
        <ul class="menu-list flex-grow-1 mt-3">
            <li class="collapsed">
                <a class="m-link {{ request()->routeIs('admin.hero') || request()->routeIs('admin.about-us') || request()->routeIs('admin.faq') ? 'active' : '' }}"
                    data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#">
                    <i class="icofont-home fs-5"></i>
                    <span>Landing Page</span>
                    <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span>
                </a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse {{ request()->routeIs('admin.hero') || request()->routeIs('admin.about-us') || request()->routeIs('admin.faq') ? 'show' : '' }}"
                    id="menu-Componentsone">
                    <li><a class="ms-link {{ request()->routeIs('admin.hero') ? 'active' : '' }}"
                            href="{{ route('admin.hero') }}"><span>Hero</span></a></li>
                    <li><a class="ms-link {{ request()->routeIs('admin.about-us') ? 'active' : '' }}"
                            href="{{ route('admin.about-us') }}"><span>About Us</span></a></li>
                    <li><a class="ms-link {{ request()->routeIs('admin.faq') ? 'active' : '' }}"
                            href="{{ route('admin.faq') }}"><span>FAQ</span></a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link {{ request()->routeIs('admin.destination') ? 'active' : '' }}"
                    href="{{ route('admin.destination') }}">
                    <i class="icofont-map-pins fs-5"></i> <span>Destinasi Wisata</span>
                </a>
            </li>
            <li class="collapsed">
                <a class="m-link {{ request()->routeIs('admin.tour-guides') ? 'active' : '' }}"
                    href="{{ route('admin.tour-guides') }}">
                    <i class="icofont-travelling fs-5"></i> <span>Tour Guide</span>
                </a>
            </li>
        </ul>

        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>

<style>
    @media (max-width: 991px) {
        .sidebar {
            position: fixed;
            left: -300px;
            top: 0;
            bottom: 0;
            transition: all 0.3s ease-in-out;
            z-index: 1045;
            width: 300px;
        }

        .sidebar.active {
            left: 0;
        }

        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            display: none;
        }

        .sidebar-overlay.active {
            display: block;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarToggleBtn = document.querySelector('.sidebar-toggle-btn');
        const sidebar = document.querySelector('.sidebar');
        const overlay = document.querySelector('.sidebar-overlay');

        function toggleSidebar() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        sidebarToggleBtn.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);
    });
</script>
