    <header class="header_wrap fixed-top header_with_topbar">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                            <div class="lng_dropdown me-2">
                                <select name="countries" class="custome_select">
                                    <option value='en' data-image="assets/images/eng.png" data-title="English">English</option>
                                    <option value='fn' data-image="assets/images/fn.png" data-title="France">France</option>
                                    <option value='us' data-image="assets/images/us.png" data-title="United States">United States</option>
                                </select>
                            </div>
                            <div class="me-3">
                                <select name="countries" class="custome_select">
                                    <option value='USD' data-title="USD">USD</option>
                                    <option value='EUR' data-title="EUR">EUR</option>
                                    <option value='GBR' data-title="GBR">GBR</option>
                                </select>
                            </div>
                            <ul class="contact_detail text-center text-lg-start">
                                <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-end">
                            <ul class="header_list">
                                <li><a href="compare.html"><i class="ti-control-shuffle"></i><span>Compare</span></a></li>
                                <li><a href="wishlist.html"><i class="ti-heart"></i><span>Wishlist</span></a></li>
                                <li><a href="login.html"><i class="ti-user"></i><span>Login</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_header dark_skin main_menu_uppercase">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img class="logo_light" src="assets/images/logo_light.png" alt="logo">
                        <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="dropdown">
                                <a data-bs-toggle="dropdown" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown"> Categories</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        @foreach($categoryLinks as $catlink)
                                        <li><a class="dropdown-item nav-link nav_item" href="">{{ $catlink->category }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>

                            <li><a class="nav-link nav_item" href="">About Us</a></li>

                            <li><a class="nav-link nav_item" href="/contact">Contact Us</a></li>

                            <li><a class="nav-link nav_item" href="">Blog</a></li>
                        </ul>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <li><a href="javascript:;" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                            <div class="search_wrap">
                                <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                <form>
                                    <input type="text" placeholder="Search" class="form-control" id="search_input">
                                    <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            <div class="search_overlay"></div>
                        </li>
                        <li class=""><a class="nav-link " href="#"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>

                        </li>
                    </ul>

                    @auth
                    <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft" href="{{ route('user_logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-animation="slideInLeft" data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">Logout</a>

                    <form action="{{ route('user_logout') }}" method="post" class="d-none" id="logout-form">
                        @csrf
                    </form>

                    @else
                    <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft" href="/signup" data-animation="slideInLeft" data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">Signup</a>

                    <a class="btn btn-fill-out log rounded-0 staggered-animation text-uppercase animated slideInLeft" href="{{ route('login') }}" data-animation="slideInLeft" data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">Login</a>
                    @endauth
                </nav>
            </div>
        </div>
    </header>
