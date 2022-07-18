@extends('layouts.app')

@section('title')
    Market
@endsection

@section('container')
    <!-- Section Hero -->
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider hero-overly1 slider-height d-flex align-items-center slider-bg1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="hero__caption">
                                <!-- <span>20% Sale off </span> -->
                                <h1 data-animation="fadeInUp" data-delay=".4s">
                                    Etiam in quam
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".6s">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Ut mattis purus nisl, vel consequat elit tincidunt et.
                                    Etiam in quam ut purus tempor commodo. Maecenas bibendum
                                    ligula in commodo fringilla.
                                </p>

                                <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="industries.html" class="btn hero-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Popular Products -->
    <section class="properties new-arrival fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <h2>Popular products</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                            mattis purus nisl, vel consequat elit tincidunt et. Etiam in
                            quam ut purus tempor commodo. Maecenas bibendum ligula in
                            commodo fringilla.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="properties__button text-center">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-Sofa-tab" data-toggle="tab" href="#nav-Sofa"
                                    role="tab" aria-controls="nav-Sofa" aria-selected="true">Category 1</a>
                                <a class="nav-item nav-link" id="nav-Table-tab" data-toggle="tab" href="#nav-Table"
                                    role="tab" aria-controls="nav-Table" aria-selected="false">Category 2</a>
                                <a class="nav-item nav-link" id="nav-Chair-tab" data-toggle="tab" href="#nav-Chair"
                                    role="tab" aria-controls="nav-Chair" aria-selected="false">Category 3</a>
                                <a class="nav-item nav-link" id="nav-Bed-tab" data-toggle="tab" href="#nav-Bed"
                                    role="tab" aria-controls="nav-Bed" aria-selected="false">Category 4</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-Sofa" role="tabpanel" aria-labelledby="nav-Sofa-tab">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            @if (substr($product->image, 0, 5) == 'https')
                                                <img src="{{ $product->image }}" alt=""
                                                    data-pagespeed-url-hash="3041166571"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                                            @else
                                                <img src="{{ productImageUrl($product->image) }}" alt=""
                                                    data-pagespeed-url-hash="3041166571"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                                            @endif
                                        </div>
                                        <div class="popular-caption">
                                            <h3>
                                                <a
                                                    href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a>
                                            </h3>
                                            <span>Rp {{ number_format($product->price) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-Table" role="tabpanel" aria-labelledby="nav-Table-tab">
                        <!-- Product Category -->
                    </div>

                    <div class="tab-pane fade" id="nav-Chair" role="tabpanel" aria-labelledby="nav-Chair-tab">
                        <!-- Product Category -->
                    </div>

                    <div class="tab-pane fade" id="nav-Bed" role="tabpanel" aria-labelledby="nav-Bed-tab">
                        <!-- Product Category -->
                    </div>

                    <div class="tab-pane fade" id="nav-Lightning" role="tabpanel" aria-labelledby="nav-Lightning-tab">
                        <!-- Product Category -->
                    </div>

                    <div class="tab-pane fade" id="nav-Decore" role="tabpanel" aria-labelledby="nav-Decore-tab">
                        <!-- Product Category -->
                    </div>

                    <div class="row justify-content-center">
                        <div class="room-btn">
                            <a href="{{ route('products.index') }}" class="border-btn">Lihat Semua Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="visit-tailor-area fix">
        <div class="tailor-offers"></div>

        <div class="tailor-details">
            <h2>
                Traveller<br />
                Culture History
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis
                purus nisl,
            </p>
            <p class="pera-bottom">
                vel consequat elit tincidunt et. Etiam in quam ut purus tempor
                commodo. Maecenas bibendum ligula in commodo fringilla.
            </p>
            <a href="#" class="btn">Discover More</a>
        </div>
    </div>

    <!-- Section Popular Travel -->
    <div class="new-arrival new-arrival2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s"
                        data-wow-delay=".2s">
                        <h2>Destination Favorite</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                            mattis purus nisl, vel consequat elit tincidunt et.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($travels as $travel)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="popular-img">
                                @if (substr($travel->image, 0, 5) == 'https')
                                    <img src="{{ $travel->image }}" alt="" data-pagespeed-url-hash="3041166571"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                                @else
                                    <img src="{{ travelImageUrl($travel->image) }}" alt=""
                                        data-pagespeed-url-hash="3041166571"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                                @endif
                            </div>
                            <div class="popular-caption">
                                <h3>
                                    <a href="{{ route('products.show', $travel->id) }}">{{ $travel->name }}</a>
                                </h3>
                                <span>Rp {{ number_format($travel->price) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center">
                <div class="room-btn">
                    <a href="{{ route('travels.index') }}" class="border-btn">Lihat Semua Paket</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Socila Media -->
    <div class="instagram-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="instra-tittle mb-40">
                        <div class="section-tittle">
                            <img src="assets/img/gallery/xinsta.png.pagespeed.ic.aReOy1YojK.webp" alt=""
                                data-pagespeed-url-hash="254140710"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                            <h2>Share Social Media</h2>
                            <p class="mb-35">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti ipsam minus saepe, quidem doloremque recusandae quo
                            </p>
                            <a href="product.html" class="border-btn">Share</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="row no-gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-instagram">
                                <img src="./assets/img/gallery/banner-3.jpg" alt="" class="w-100"
                                    data-pagespeed-url-hash="2664729450"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-instagram">
                                <img src="./assets/img/gallery/banner-1.jpg" alt="" class="w-100"
                                    data-pagespeed-url-hash="2959229371"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="categories-area section-padding40 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services1.svg" alt="" data-pagespeed-url-hash="1965786122"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        </div>
                        <div class="cat-cap">
                            <h5>Fast & Free Delivery</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services4.svg" alt="" data-pagespeed-url-hash="2849285885"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        </div>
                        <div class="cat-cap">
                            <h5>Online Support</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
