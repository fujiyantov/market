<header>
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row menu-wrapper align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center">
                        {{-- <div class="logo"> --}}
                        <div class="logo navbar-brand">
                            <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/logo/logo-kbkm-blue.png') }}"
                                    width="80" alt="" /></a>
                        </div>

                        <div class="logo navbar-brand">
                            <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/logo/logo-kbkm-blue.png') }}"
                                    width="80" alt="" /></a>
                        </div>
                        <div class="logo navbar-brand">
                            <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/logo/logo-kbkm-blue.png') }}"
                                    width="80" alt="" /></a>
                        </div>

                        <div class="logo2 navbar-brand">
                            <a href="index.html"><img src="{{ asset('/assets/img/logo/logo-kbkm-blue.png') }}"
                                    width="64" alt="" style="margin-right: 5px" /></a>

                            <a href="index.html"><img src="{{ asset('/assets/img/logo/logo-kbkm-blue.png') }}"
                                    width="64" alt="" style="margin-right: 5px" /></a>

                            <a href="index.html"><img src="{{ asset('/assets/img/logo/logo-kbkm-blue.png') }}"
                                    width="64" alt="" style="margin-right: 5px" /></a>
                        </div>

                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ route('home') }}">Beranda</a></li>
                                    <li><a href="{{ route('products.index') }}">Produk Budaya</a></li>
                                    <li><a href="{{ route('travels.index') }}">Travel Budaya</a></li>
                                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {{-- <div class="header-right1 d-flex align-items-center">
                        <div class="search">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <form action="#" class="form-box f-right">
                                        <input type="text" name="Search" placeholder="Search" />

                                    </form>
                                </li>
                                <li>
                                    <a href="login.html" class="account-btn" target="_blank">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
