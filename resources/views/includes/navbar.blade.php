{{-- <header>
    <nav class="navbar navbar-expand-lg topnav-menu navbar-light zindex-10">
        <div class="container">
            <a class="navbar-brand logo" href="/">
                <img src="/assets/images/logo.png" height="30" class="align-top logo-dark" alt="" />
                <img src="/assets/images/logo-light.png" height="30" class="align-top logo-light" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#topnav-menu-content" aria-controls="topnav-menu-content" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav align-items-lg-center d-flex me-auto">

                </ul>


                <ul class="navbar-nav align-items-lg-center ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('search') }}">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    @if (Auth::user())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle py-0" href="#" id="user" role="button"
                         bs        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="../../assets/images/avatars/img-8.jpg"
                                            class="avatar avatar-xs rounded-circle me-2" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-1 lh-base">
                                        <span
                                            class="fw-semibold fs-13 d-block line-height-normal text-capitalize">{{ Auth::user()->name }}</span>

                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-menu p-2" aria-labelledby="user">
                                <a class="dropdown-item p-2" href="{{ route('dashboard.dashboard') }}">
                                    <i class="icon icon-xxs me-1 icon-dual" data-feather="user"></i>
                                    Dashboard
                                </a>

                                <div class="dropdown-divider"></div>



                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="dropdown-item p-2" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="icon icon-xxs me-1 icon-dual" data-feather="unlock"></i>
                                        Sign Out
                                    </a>

                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item ms-2">
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item ms-2">
                            <a class="btn btn-primary btn-sm" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif

                </ul>

            </div>
        </div>
    </nav>

</header> --}}

<header id="navbar"
    class="light fixed top-0 inset-x-0 flex items-center z-40 w-full lg:bg-transparent bg-white transition-all py-5">
    <div class="container">
        <nav class="flex items-center">
            <!-- Navbar Brand Logo -->
            <a href="{{ route('home') }}" class="text-3xl font-bold text-teal-600 hover:text-teal-500 flex items-center gap-3">
                <img src="/assets/images/logos2.png" alt="logo-medismap" class="w-10">
                MedisMap
            </a>

            <!-- Nevigation Menu -->
            <div class="hidden lg:block ms-auto">
                <ul class="navbar-nav flex gap-x-10 items-center justify-center">
                    <!-- Home Page Link -->
                    <li>
                        <a class="font-base text-ijo hover:text-teal-300" href="{{ route('home') }}">Home</a>
                    </li>

                    @if (Auth::user())
                    <li>
                        <a class="font-base text-ijo hover:text-teal-300" href="{{ route('search') }}">Search</a>
                    </li>
                    @endif

                    <li>
                        <a class="font-base text-ijo hover:text-teal-300" href="#aboutus">About</a>
                    </li>
                    @if (Auth::user())
                        <li class="nav-item">
                            <a href="javascript:void(0);"
                                class="nav-link after:absolute hover:after:-bottom-10 after:inset-0"
                                data-fc-target="innerPageDropdownMenu" data-fc-type="dropdown"
                                data-fc-placement="bottom">
                                <div class="flex items-center">
                                    <div class="shrink">
                                        {{-- <div class="h-8 w-8 me-2">
                                            <img src="assets/images/avatars/img-6.jpg"
                                                class="avatar h-full w-full rounded-full me-2" alt="photo">
                                        </div> --}}
                                    </div>
                                    <div class="hidden lg:block grow ms-1 leading-normal text-ijo">
                                        <span class="block text-sm font-medium">{{ Auth::user()->name  }}</span>
                                        <span class="block text-gray-400 text-xs">{{ Auth::user()->roles  }}</span>
                                    </div>
                                </div>
                            </a>

                            <div id="innerPageDropdownMenu"
                                class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-48 space-y-1.5">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-teal-50 transition-all">
                                    <a class="text-black hover:text-teal-600 flex items-center !p-2" href="{{ route('dashboard.dashboard') }}">
                                        <svg class="h-4 w-4 me-2 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-settings icon icon-xxs me-1 icon-dual">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                        Dashboard
                                    </a>
                                </div>
                                <hr class="-mx-2 my-2">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-teal-50 transition-all">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="flex items-center text-black hover:text-teal-600 !p-2" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-unlock icon icon-xxs me-1 icon-dual">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                            </svg>
                                            Sign Out
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            {{-- <button class="flex items-center"> --}}
                            <a href="{{ route('register') }}"
                                class="border border-ijo text-ijo rounded-md hover:bg-ijo hover:text-white hover:shadow-lg hover:shadow-ijo/30 focus:shadow-none focus:outline focus:outline-ijo/40 transition-all duration-500 py-2 px-4">Register</a>
                            {{-- </button> --}}

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}"
                                class="border outline-ijo outline-2 bg-ijo text-white hover:bg-white hover:text-ijo hover:shadow-md hover:shadow-ijo/30 hover:border-ijo focus:shadow-none focus:outline focus:outline-ijo/40 transition-all duration-500 px-4 py-2 rounded inline-flex items-center text-sm">Login</a>
                        </li>
                    @endif


                </ul>
            </div>

            <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                    <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                </button>
            </div>
        </nav>
    </div>
</header>

@push('after-style')
@endpush

@push('after-script')
@endpush
