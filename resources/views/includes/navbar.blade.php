<header>
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row menu-wrapper align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center">
                        <div class="logo">
                            <!-- <a href="index.html"
                  ><img
                    src="./assets/img/logo/logo-kementrian.svg"
                    width="80"
                    alt=""
                    data-pagespeed-url-hash="2553996795"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                /></a> -->
                            <a href="{{ route('home') }}" style="margin-left: 20px;"><img
                                    src="./assets/img/logo/logo-kbkm-blue.png" width="80" alt=""
                                    data-pagespeed-url-hash="2553996795"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
                        </div>

                        <div class="logo2">
                            <!--  <a href="index.html"
                  ><img
                    src="./assets/img/logo/logo-kementrian.svg"
                    width="80"
                    alt=""
                    data-pagespeed-url-hash="2553996795"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                /></a> -->
                            <a href="index.html" style="margin-left: 20px"><img
                                    src="./assets/img/logo/logo-kbkm-blue.png" width="80" alt=""
                                    data-pagespeed-url-hash="2553996795"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
                            <!-- <a href="index.html"
                  ><img
                    src="assets/img/logo/xlogo2.png.pagespeed.ic.X6XjsWuZ5G.webp"
                    alt=""
                    data-pagespeed-url-hash="595792077"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                /></a> -->
                        </div>

                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ route('home') }}">Beranda</a></li>
                                    <li><a href="{{ route('products.index') }}">Produk Wisata</a></li>
                                    <li><a href="{{ route('travels.index') }}">Paket Wisata</a></li>
                                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right1 d-flex align-items-center">
                        <div class="search">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <form action="#" class="form-box f-right">
                                        <input type="text" name="Search" placeholder="Search" />
                                        <!-- <div class="search-icon">
                        <i data-feather="circle"></i>
                      </div> -->
                                    </form>
                                </li>
                                <li>
                                    <a href="login.html" class="account-btn" target="_blank">Login</a>
                                </li>
                                <li>
                                    <div class="card-stor">
                                        <a href="{{ route('checkout') }}">
                                            <img src="{{ asset('assets/img/icon/card.svg') }}" alt=""
                                                data-pagespeed-url-hash="3237307825"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                                            <span>0</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
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
