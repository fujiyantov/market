<header>
    <div class="header-area">
        {{-- <div class="main-header header-sticky"> --}}
        <div class="main-header">
            <div class="container-fluid">
                <div class="row menu-wrapper align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center">
                        {{-- <div class="logo"> --}}
                        <div class="logo navbar-brand">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('/assets/img/logo/logo.png') }}" class="d-none d-lg-block d-xl-none" width="60" alt="" />

                                {{-- D-MOBILE --}}
                                <img src="{{ asset('/assets/img/logo/logo.png') }}" class="d-lg-none d-xl-block" width="60" style="width: 60px" alt="" />
                            </a>
                        </div>

                        <div class="logo navbar-brand">
                            <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/logo/logo-kementrian.svg') }}"
                                    width="100" alt="" /></a>
                        </div>
                        <div class="logo navbar-brand">
                            <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/logo/logo-kbkm-blue.png') }}"
                                    width="90" alt="" /></a>
                        </div>

                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ route('home') }}">Beranda</a></li>
                                    <li><a href="{{ route('products.index') }}">Produk Budaya</a></li>
                                    {{-- <li><a href="{{ route('travels.index') }}">Travel Budaya</a></li> --}}
                                    {{-- <li><a href="{{ route('contact') }}">Kontak</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
