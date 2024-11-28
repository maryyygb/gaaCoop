<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('/css/dashboard-nav.css') }}">\

    <!-- USER DASHBOARD DESIGN -->
    <link rel="stylesheet" href="{{ asset('/css/user-dashboard.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Dashboard Nav</title>
</head>

<body>

    <nav>
        <ul class="nav-container">
            <!-- Sidebar -->
            <li class="nav-bar">
                <div class="nav-bar-con">
                    <!-- LOGO -->
                    <div class="side-division">
                        <h1>GAAC</h1>
                    </div>

                    <!-- SIDE BAR LIST OF LINKS -->
                    <div class="side-division">
                        <ul class="side-nav-list">
                            <li>
                                <a href="/dashboard">
                                    <span>
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user-daily-tasks')}}">
                                    <span>
                                        <i class="fa fa-list-check" aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Daily Tasks </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user-earnings')}}">
                                    <span>
                                        <i class="fa fa-coins" aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Earnings </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user-broadcast')}}">
                                    <span>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Broadcast </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user-withdraw-history')}}">
                                    <span>
                                        <i
                                            class="fa fa-money-bill-transfer"
                                            aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Withdrawal History </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user-packages')}}">
                                    <span>
                                        <i class="fa fa-boxes-stacked" aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Packages </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user-promo')}}">
                                    <span>
                                        <i class="fa fa-ticket" aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Promo </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user-invite')}}">
                                    <span>
                                        <i class="fa fa-square-plus" aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Invite </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user-ask')}}">
                                    <span>
                                        <i class="fa fa-circle-question" aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Ask </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user-shop')}}">
                                    <span>
                                        <i class="fa fa-cart-shopping" aria-hidden="true"></i>
                                    </span>
                                    <span class="nav-names"> Shop Now </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- BOTTOM PART -->
                    <div class="side-division">
                        <div class="btm-list">
                            <a href="#">
                                <span>
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                </span>
                                <span class="nav-names">Report</span>
                            </a>
                        </div>
                        <div class="btm-list">
                            <a href="#">
                                <span>
                                    <i class="fa fa-headphones-simple" aria-hidden="true"></i>
                                </span>
                                <span class="nav-names">Support</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Topbar -->
            <li class="nav-bar">
                <div class="right-division">
                    <!-- SEARCH -->
                    <div class="search-section">
                        <label for="search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </label>
                        <input
                            type="search"
                            name="search"
                            id="search"
                            placeholder="Search" />
                    </div>
                    <div class="top-side-profile">
                        <div class="notifications">
                            <button title="notification" type="button">
                                <i class="fa-solid fa-bell"></i>
                            </button>
                        </div>
                        <div class="photo-profile">
                            <img src="p5.png" alt="profile" />
                            <div class="names-title">
                                <p class="name-prof">{{ Auth::user()->name }}</p>
                                <p class="type-prof">{{ Auth::user()->usertype }}</p>
                            </div>
                        </div>
                        <div class="menu-collapse">
                            <button type="button" title="log-toggle" onclick="dropdownBtn()">
                                <i class="fa-solid fa-caret-down"></i>
                            </button>

                            <div class="collapse-prof-btn" id="dropdown-toggle-show">
                                <div class="toggle-dropdown">
                                    <a href="{{ route('profile.edit') }}">
                                        <span><i class="fa-solid fa-user"></i></span>
                                        Profile</a>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="logout-btn-prof">
                                            <span><i class="fa-solid fa-right-from-bracket"></i></span>
                                            {{ __('Logout') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-division">
                    @yield('content')
                </div>
                <div class="right-division"></div>
            </li>
        </ul>
    </nav>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('/js/dashboard.js') }}"></script>

</body>

</html>