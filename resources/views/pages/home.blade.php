@extends('layouts.app')

@section('title')
    Market
@endsection

@section('style')
    <style>
        .new-arrival .single-new-arrival .popular-img {}

        .new-arrival .single-new-arrival .popular-img:hover {
            transform: scale(1) !important;
        }

        /* &.card-featured {
                                                    overflow: hidden;
                                                    cursor: pointer;
                                                    height: 100%;

                                                    &:after {
                                                        position: absolute;
                                                        content: "";
                                                        top: 0;
                                                        bottom: 0;
                                                        left: 0;
                                                        right: 0;
                                                        transform: scale(1.1);
                                                        transition: 0.5s transform ease-in-out;
                                                        z-index: 2;

                                                    }

                                                    .img-wrapper {
                                                        z-index: 1;
                                                        margin: 0;
                                                        position: absolute;
                                                        top: 0;
                                                        bottom: 0;
                                                        left: 0;
                                                        right: 0;
                                                        transform: scale(1.1);
                                                        transition: 0.25s transform ease-in-out;
                                                    }

                                                    .meta-wrapper {
                                                        z-index: 4;
                                                        color: $white;
                                                        padding: 20px;
                                                        position: absolute;
                                                        top: 0;
                                                        bottom: 0;
                                                        width: 100%;
                                                        transform: translateY(0);
                                                        transition: .3s transform ease-in-out;
                                                        display: flex;
                                                        justify-content: flex-end;
                                                        flex-direction: column;
                                                    }

                                                    &:hover {
                                                        .meta-wrapper {
                                                            transform: translateY(-10px);
                                                        }

                                                        &:after {
                                                            transform: scale(1);
                                                        }

                                                        .img-wrapper {
                                                            transform: scale(1);
                                                        }
                                                    }
                                                } */
    </style>
@endsection

@section('container')
    <!-- Section Hero -->
    <div class="slider-area">
        {{-- <div class="slider-active"> --}}
        <div class="single-slider hero-overly1 slider-height d-flex align-items-center slider-bg1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInUp" data-delay=".4s">
                                Forget Busy Work, <br> Start Next Vacation
                            </h1>

                            <p data-animation="fadeInUp" data-delay=".6s">
                                We provide what you need to enjoy your holiday with family. Time to make another memorable
                                moments.
                            </p>

                            <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
                                <a href="#" class="btn hero-btn">Start Me Now</a>
                            </div>

                            <div class="row mt-5 mb-3 pt-10">
                                <div class="col-md-4">
                                    <img class="img mb-3" src="{{ asset('assets/img/icon/map.png') }}" alt=""
                                        width="52" />
                                    <h5 style="font-size: 1.5rem">
                                        6 Desa
                                    </h5>
                                </div>
                                <div class="col-md-4">
                                    <img class="img mb-3" src="{{ asset('assets/img/icon/product.png') }}" alt=""
                                        width="52" />
                                    <h5 style="font-size: 1.5rem">
                                        184 Produk
                                    </h5>
                                </div>
                                <div class="col-md-4">
                                    <img class="img mb-3" src="{{ asset('assets/img/icon/traveller.png') }}" alt=""
                                        width="52" />
                                    <h5 style="font-size: 1.5rem">
                                        34 Traveller
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="hero__caption">
                            <img src="{{ asset('assets/img/hero/hero-2-m.jpg') }}" class="img img-fluid" width="150%"
                                style="border-radius: 110px 20px 20px 20px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>

    <!-- Section Popular Products -->
    <section class="properties new-arrival fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <h2>Most Picked</h2>
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
                @foreach ($products->take(1) as $product)
                    <div class="col-lg-4 mb-50">
                        <div class="card card-featured mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="img-wrapper">
                                @if (substr($product->image, 0, 5) == 'https')
                                    <img src="{{ $product->image }}" alt="" data-pagespeed-url-hash="3041166571" />
                                @else
                                    <img src="{{ productImageUrl($product->image) }}" alt="" class="img-cover"
                                        data-pagespeed-url-hash="3041166571" />
                                @endif
                            </div>
                            <div class="meta-wrapper">
                                <h3 style="color: #fff">
                                    <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                </h3>
                                <span>Rp {{ number_format($product->price, 0, ',', '.') }},
                                    {{ ucwords($product->village->name) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-8 mb-50">
                    <div class="row">
                        @foreach ($products->take(4) as $key => $product)
                            <div class="col-lg-6" style="margin-top: @if($key > 1) 20px @endif">
                                <div class="card card-featured mb-50 wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".1s">
                                    <div class="img-wrapper">
                                        @if (substr($product->image, 0, 5) == 'https')
                                            <img src="{{ $product->image }}" alt=""
                                                data-pagespeed-url-hash="3041166571" />
                                        @else
                                            <img src="{{ productImageUrl($product->image) }}" alt=""
                                                class="img-cover" data-pagespeed-url-hash="3041166571" />
                                        @endif
                                    </div>
                                    <div class="meta-wrapper">
                                        <h3 style="color: #fff">
                                            <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                        </h3>
                                        <span>Rp {{ number_format($product->price, 0, ',', '.') }}, {{ ucwords($product->village->name) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h3 class="new-arrival-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                        style="margin-left: -10px">Aneka Produk Lokal</h3>
                </div>
                @foreach ($products->take(4) as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="popular-img">
                                @if (substr($product->image, 0, 5) == 'https')
                                    <img src="{{ $product->image }}" alt="" data-pagespeed-url-hash="3041166571" />
                                @else
                                    <img src="{{ productImageUrl($product->image) }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
                                @endif
                            </div>
                            <div class="popular-caption" style="margin-left: -10px">
                                <h3>
                                    <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                </h3>
                                <span>Rp {{ number_format($product->price, 0, ',', '.') }}, {{ ucwords($product->village->name) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <h3 class="new-arrival-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                        style="margin-left: -10px">Produk Zaman Now</h3>
                </div>
                @foreach ($products->take(4) as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="popular-img">
                                @if (substr($product->image, 0, 5) == 'https')
                                    <img src="{{ $product->image }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
                                @else
                                    <img src="{{ productImageUrl($product->image) }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
                                @endif
                            </div>
                            <div class="popular-caption" style="margin-left: -10px">
                                <h3>
                                    <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                </h3>
                                <span>Rp {{ number_format($product->price, 0, ',', '.') }}, {{ ucwords($product->village->name) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center">
                <div class="room-btn">
                    <a href="{{ route('products.index') }}" class="border-btn">Lihat Semua Produk</a>
                </div>
            </div>
        </div>
    </section>

    <div class="visit-tailor-area fix">
        <div class="tailor-offers"></div>

        <div class="tailor-details">
            <h2>
                Travel<br />
                Kebudayaan
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
                <div class="col-12">
                    <h3 class="new-arrival-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                        style="margin-left: -10px">Travel Kekinian</h3>
                </div>
                @foreach ($travels->take(4) as $travel)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="popular-img img-wrapper">
                                @if (substr($travel->image, 0, 5) == 'https')
                                    <img class="img-cover" src="{{ $travel->image }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
                                @else
                                    <img class="img-cover" src="{{ travelImageUrl($travel->image) }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
                                @endif
                            </div>
                            <div class="popular-caption" style="margin-left: -10px">
                                <h3>
                                    <a href="{{ route('products.show', $travel->id) }}">{{ $travel->name }}</a>
                                </h3>
                                <span>Rp {{ number_format($travel->price, 0, ',', '.') }}, {{ ucwords($product->village->name) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <h3 class="new-arrival-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                        style="margin-left: -10px">Destinasi Milenial</h3>
                </div>
                @foreach ($travels->take(4) as $travel)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="popular-img img-wrapper">
                                @if (substr($travel->image, 0, 5) == 'https')
                                    <img class="img-cover" src="{{ $travel->image }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
                                @else
                                    <img class="img-cover" src="{{ travelImageUrl($travel->image) }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
                                @endif
                            </div>
                            <div class="popular-caption" style="margin-left: -10px">
                                <h3>
                                    <a href="{{ route('products.show', $travel->id) }}">{{ $travel->name }}</a>
                                </h3>
                                <span>Rp {{ number_format($travel->price, 0, ',', '.') }}, {{ ucwords($product->village->name) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <h3 class="new-arrival-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                        style="margin-left: -10px">Pariwisata dengan Kenangan</h3>
                </div>
                @foreach ($travels->take(4) as $travel)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="popular-img img-wrapper">
                                @if (substr($travel->image, 0, 5) == 'https')
                                    <img class="img-cover" src="{{ $travel->image }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
                                @else
                                    <img class="img-cover" src="{{ travelImageUrl($travel->image) }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
                                @endif
                            </div>
                            <div class="popular-caption" style="margin-left: -10px">
                                <h3>
                                    <a href="{{ route('products.show', $travel->id) }}">{{ $travel->name }}</a>
                                </h3>
                                <span>Rp {{ number_format($travel->price, 0, ',', '.') }}, {{ ucwords($product->village->name) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center">
                <div class="room-btn">
                    <a href="{{ route('travels.index') }}" class="border-btn">Lihat Semua Travel</a>
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
                                data-pagespeed-url-hash="254140710" />
                            <h2>Share Social Media</h2>
                            <p class="mb-35">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti ipsam minus saepe, quidem doloremque recusandae quo
                            </p>
                            <a href="#" class="border-btn">Share</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="row no-gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-instagram">
                                <img src="./assets/img/gallery/banner-3.jpg" alt="" class="w-100"
                                    data-pagespeed-url-hash="2664729450" />
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-instagram">
                                <img src="./assets/img/gallery/banner-1.jpg" alt="" class="w-100"
                                    data-pagespeed-url-hash="2959229371" />
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
