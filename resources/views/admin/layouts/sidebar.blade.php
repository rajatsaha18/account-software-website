<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header"><a href="index.html"
                class="b-brand text-primary"><!-- ========   Change your logo from here   ============ --> <img
                    src="https://ableproadmin.com/assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo">
                <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.4.3</span></a></div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img
                                src="{{ asset('public/admin/assets/images/user/avatar-1.jpg') }}" alt="user-image"
                                class="user-avtar wid-45 rounded-circle"></div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">Jonh Smith</h6><small>Administrator</small>
                        </div><a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                            href="#pc_sidebar_userlink"><svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg></a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3"><a href="#!"><i class="ti ti-user"></i> <span>My Account</span>
                            </a><a href="#!"><i class="ti ti-settings"></i> <span>Settings</span> </a><a
                                href="#!"><i class="ti ti-lock"></i> <span>Lock Screen</span> </a><a
                                href="#!"><i class="ti ti-power"></i> <span>Logout</span></a></div>
                    </div>
                </div>
            </div>
            <ul class="pc-navbar">
                <li class="pc-item pc-caption"><label>Navigation</label></li>

                <li class="pc-item"><a href="{{ route('dashboard') }}" class="pc-link"><span
                    class="pc-micon"><svg class="pc-icon">
                        <use xlink:href="#custom-crop"></use>
                    </svg> </span><span class="pc-mtext">Dashboard</span></a>
                </li>
                <li class="pc-item"><a href="{{ route('site-setting') }}" class="pc-link"><span
                    class="pc-micon"><svg class="pc-icon">
                        <use xlink:href="#custom-crop"></use>
                    </svg> </span><span class="pc-mtext">SiteSetting</span></a>
                </li>
                <li class="pc-item"><a href="{{ route('admin.about') }}" class="pc-link"><span
                    class="pc-micon"><svg class="pc-icon">
                        <use xlink:href="#custom-crop"></use>
                    </svg> </span><span class="pc-mtext">About</span></a>
                </li>
                <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">
                    <span class="pc-micon">
                        <svg class="pc-icon"><use xlink:href="#custom-layer"></use></svg>
                    </span>
                    <span class="pc-mtext">Products</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item pc-hasmenu"><a class="pc-link" href="{{ route('product.add') }}">Add
                                Product<span class=""></span></a>
                        </li>
                        <li class="pc-item pc-hasmenu"><a class="pc-link" href="{{ route('product.manage') }}">Manage
                                Product<span class=""></span></a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">
                    <span class="pc-micon">
                        <svg class="pc-icon"><use xlink:href="#custom-layer"></use></svg>
                    </span>
                    <span class="pc-mtext">Blogs</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item pc-hasmenu"><a class="pc-link" href="{{ route('blog.add') }}">Add
                                Blog<span class=""></span></a>
                        </li>
                        <li class="pc-item pc-hasmenu"><a class="pc-link" href="{{ route('blog.manage') }}">Manage
                                Blog<span class=""></span></a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">
                    <span class="pc-micon">
                        <svg class="pc-icon"><use xlink:href="#custom-layer"></use></svg>
                    </span>
                    <span class="pc-mtext">Our Clients</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item pc-hasmenu"><a class="pc-link" href="{{ route('client.add') }}">Add
                                Client<span class=""></span></a>
                        </li>
                        <li class="pc-item pc-hasmenu"><a class="pc-link" href="{{ route('client.manage') }}">Manage
                                Client<span class=""></span></a>
                        </li>
                    </ul>
                </li>

                <li class="pc-item"><a href="{{ route('user.message') }}" class="pc-link"><span
                    class="pc-micon"><svg class="pc-icon">
                        <use xlink:href="#custom-crop"></use>
                    </svg> </span><span class="pc-mtext">User Messages</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
