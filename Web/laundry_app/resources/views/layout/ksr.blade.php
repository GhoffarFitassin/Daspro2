<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.link')
    <title>Kasir | {{ $title }}</title>
</head>

<body>
    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-list">
                    <line x1="8" y1="6" x2="21" y2="6"></line>
                    <line x1="8" y1="12" x2="21" y2="12"></line>
                    <line x1="8" y1="18" x2="21" y2="18"></line>
                    <line x1="3" y1="6" x2="3" y2="6"></line>
                    <line x1="3" y1="12" x2="3" y2="12"></line>
                    <line x1="3" y1="18" x2="3" y2="18"></line>
                </svg></a>

            <ul class="navbar-item flex-row navbar-dropdown">
                @auth


                    <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </a>
                        <div class="dropdown-menu position-absolute animated fadeInUp"
                            aria-labelledby="userProfileDropdown">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <img src="/assets/img/90x90.jpg" class="img-fluid mr-2" alt="avatar">
                                    <div class="media-body">
                                        <h5>{{ auth()->user()->name }}</h5>
                                        <p>{{ auth()->user()->role }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item m-sm-1"><a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-log-out">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg> <span>Log Out</span></a>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endauth
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="compactSidebar">

                <div class="theme-logo">
                    <a href="/kasir">
                        <img src="/assets/img/logo.png" class="navbar-logo" alt="logo">
                    </a>
                </div>

                <ul class="menu-categories">
                    <li class="menu {{ Request::is('dashboard*') ? 'active' : '' }}">
                        <a href="#dashboard" data-active="{{ Request::is('dashboard*') ? 'true' : '' }}"
                            class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Dashboard</span></div>
                    </li>

                    {{-- <li class="menu">
                <a href="#app" data-active="{{ Request::is('app') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Data Master</span></div>
            </li> --}}

                    <li class="menu {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a href="#users" data-active="{{ Request::is('dashboard') ? 'true' : '' }}"
                            class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Registrasi Member</span></div>
                    </li>

                    <li class="menu">
                        <a href="#data" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-database">
                                        <ellipse cx="12" cy="5" rx="9" ry="3">
                                        </ellipse>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Entry Transaction</span></div>
                    </li>
                    <li class="menu">
                        <a href="#report" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Report</span></div>
                    </li>
                </ul>


            </nav>

            <div id="compact_submenuSidebar" class="submenu-sidebar">

                <div class="theme-brand-name">
                    <a href="/kasir">Laundry</a>
                </div>

                <div class="submenu" id="dashboard">
                    <div class="category-info">
                        <h5>Dashboard</h5>
                        <p>This menu contains information on the dashboard.</p>
                    </div>

                    <ul class="submenu-list" data-parent-element="#dashboard">
                        <li>
                            <a href="/kasir/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg> Dashboard </a>
                        </li>
                    </ul>
                </div>

                {{-- <div class="submenu" id="app">
            <div class="category-info">
                <h5>Data Master</h5>
                <p>This menu consist of Same Icons.</p>
            </div>
            <ul class="submenu-list" data-parent-element="#app">
                <li>
                    <a href="/kasir/outlet"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg></span> Outlet Data </a>
                </li>
                <li>
                    <a href="/kasir/paket"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg></span> Package Data </a>
                </li>
                <li>
                    <a href="/kasir/user"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg></span> User Data </a>
                </li>
            </ul>
        </div> --}}

                <div class="submenu" id="users">
                    <div class="category-info">
                        <h5>Regristration Member</h5>
                        <p>This menu contains member registration information.</p>
                    </div>
                    <ul class="submenu-list" data-parent-element="#users">
                        <li>
                            <a href="/kasir/member"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg></span> Register </a>
                        </li>
                        {{-- <li>
                <a href="javascript:void(0)"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Submenu 2 </a>
            </li> --}}
                        {{-- <li class="sub-submenu">
                <a role="menu" class="collapsed" data-toggle="collapse" data-target="#starter-kit" aria-expanded="false"><div><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Submenu 3 </div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                <ul id="starter-kit" class="collapse" data-parent="#compact_submenuSidebar">
                    <li>
                        <a href="javascript:void(0);"> Sub Submenu 1 </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"> Sub Submenu 2 </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"> Sub Submenu 2 </a>
                    </li>
                </ul>
            </li> --}}
                    </ul>
                </div>

                <div class="submenu" id="data">
                    <div class="category-info">
                        <h5>Entry Transaction</h5>
                        <p>This menu contains transaction data information.</p>
                    </div>
                    <ul class="submenu-list" data-parent-element="#data">
                        <li class="active">
                            <a href="/kasir/transaksi"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg></span> Entry Transaction </a>
                        </li>
                        {{-- <li>
                <a href="starter_kit_breadcrumb.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Breadcrumb </a>
            </li>
            <li>
                <a href="starter_kit_boxed.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Boxed </a>
            </li> --}}
                    </ul>
                </div>

                <div class="submenu" id="report">
                    <div class="category-info">
                        <h5>Report</h5>
                        <p>This menu contains information for generating reports.</p>
                    </div>
                    <ul class="submenu-list" data-parent-element="#report">
                        <li class="active">
                            <a href="/kasir/detail"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg></span> Report </a>
                        </li>
                        <li class="active">
                            <a href="/kasir/detail/invoice"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg></span> Invoice </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">


                <!-- CONTENT AREA -->
                @yield('container')
                <!-- CONTENT AREA -->

            </div>
            <footer>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2023 <a target="_blank"
                                href="https://www.instagram.com/itzzfar._/">@itzzfar._</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-heart">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg></p>
                    </div>
                </div>
            </footer>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
</body>

@include('partials.script')

</html>
