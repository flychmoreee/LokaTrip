<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="index.html" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                </span>
                <span class="logo-text">LokaTrip</span>
            </a>
            <!-- Menu: main ul -->
            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                            class="icofont-home fs-5"></i> <span>Landing Page</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Componentsone">
                        <li><a class="ms-link" href="{{ route('admin.hero') }}"><span>Hero</span></a></li>
                        <li><a class="ms-link" href="{{ route('admin.about-us') }}"><span>About Us</span></a></li>
                        <li><a class="ms-link" href="{{ route('admin.faq') }}"><span>FAQ</span></a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link {{ request()->routeIs('admin.destination') ? 'active' : '' }}" href="{{ route('admin.destination') }}">
                        <i class="icofont-map-pins fs-5"></i> <span>Destinasi Wisata</span>
                    </a>
                </li>
                <li class="collapsed">
                    <a class="m-link {{ request()->routeIs('admin.tour-guides') ? 'active' : '' }}" href="{{ route('admin.tour-guides') }}">
                        <i class="icofont-travelling fs-5"></i> <span>Tour Guide</span>
                    </a>
                </li>
            </ul>

            <!-- Theme: Switch Theme -->
            <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-switch">
                        <input class="form-check-input" type="checkbox" id="theme-switch">
                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                    </div>
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