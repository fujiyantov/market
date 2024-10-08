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

        .slider-bg1 {
            background-image: url('../img/hero/hero-2-m.jpg') !important;
        }
    </style>
@endsection

@section('container')
    <!-- Section Hero -->
    <div class="slider-area" style="background: #fff">
        <div class="single-slider hero-overly1 slider-height d-flex align-items-center slider-bg1"
            style="background-image: url('{{ asset('assets/img/hero/hero-2-m.jpg') }}')!important;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInUp" data-delay=".4s">
                                {{ isset($sectionHero) ? $sectionHero->title : null }}
                            </h1>

                            <p data-animation="fadeInUp" data-delay=".6s">
                                {{ isset($sectionHero) ? $sectionHero->description : null }}
                            </p>

                            <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
                                <a href="#" class="btn hero-btn">Mulai Sekarang</a>
                            </div>

                            <div class="row mt-5 mb-3 pt-10">
                                <div class="col">
                                    <img class="img mb-3" src="{{ asset('assets/img/icon/map.png') }}" alt=""
                                        width="52" />
                                    <h5 style="font-size: 1.5rem">
                                        {{ count($villages) }} Desa
                                    </h5>
                                </div>
                                <div class="col">
                                    <img class="img mb-3" src="{{ asset('assets/img/icon/product.png') }}" alt=""
                                        width="52" />
                                    <h5 style="font-size: 1.5rem">
                                        {{ count($products) }} Produk
                                    </h5>
                                </div>
                                <div class="col">
                                    <img class="img mb-3" src="{{ asset('assets/img/icon/traveller.png') }}" alt=""
                                        width="52" />
                                    <h5 style="font-size: 1.5rem">
                                        {{ count($travels) }} Travel
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-xl-6 col-lg-8 col-md-8 d-none d-lg-block d-xl-none">
                        <div class="hero__caption">
                            @if (isset($sectionHero))
                                <img src="{{ env('STORAGE_URL_PROD') . '/sections/images/' . $sectionHero->image }}"
                                    class="img img-fluid" width="150%" style="border-radius: 110px 20px 20px 20px"
                                    alt="">
                            @endif
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Section Popular Products -->
    <section class="properties new-arrival fix">
        <div class="container">
            {{-- @if (count($transactionHero) > 0)

                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <h2>Produk Favorit</h2>
                            <p>
                                Rekomendasi produk favorit unggulan berbasis kearifan lokal dan nilainilai budaya bangsa
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($transactionHero as $product)
                        <div class="col-lg-4 mb-50">
                            <div class="card card-featured mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                                <div class="img-wrapper">
                                    @if (substr($product->image, 0, 5) == 'https')
                                        <img src="{{ $product->image }}" alt=""
                                            data-pagespeed-url-hash="3041166571" />
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
                    @if (isset($transaction) && count($transaction) > 0)
                        <div class="col-lg-8 mb-50">
                            <div class="row">
                                @foreach ($transaction as $key => $product)
                                    <div class="col-6 d-none d-lg-block d-xl-none"
                                        style="margin-top: @if ($key > 1) 20px @endif">
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
                                                    <a
                                                        href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                                </h3>
                                                <span>Rp {{ number_format($product->price, 0, ',', '.') }},
                                                    {{ ucwords($product->village->name) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="row d-lg-none d-xl-block">
                                @foreach ($transaction as $key => $product)
                                    <div class="col-6" style="margin-top: @if ($key > 1) 20px @endif">
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
                                                    <a
                                                        href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                                </h3>
                                                <span>Rp {{ number_format($product->price, 0, ',', '.') }},
                                                    {{ ucwords($product->village->name) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            @endif --}}

            {{-- Looping --}}
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-12">
                        <h3 class="new-arrival-title wow fadeInUp d-none d-lg-block d-xl-none" data-wow-duration="1s"
                            data-wow-delay=".1s" style="margin-left: -10px">
                            {{ count($category->product) > 0 ? $category->name : '' }}</h3>

                        {{-- D-MOBILE --}}
                        <h3 class="new-arrival-title wow text-center fadeInUp d-lg-none d-xl-block" data-wow-duration="1s"
                            data-wow-delay=".1s" style="margin-left: -10px">
                            {{ count($category->product) > 0 ? $category->name : '' }}</h3>
                    </div>
                    @foreach ($category->product->take(4) as $product)
                        <div class="col-lg-3 col-md-6 col-sm-6 d-none d-lg-block d-xl-none">
                            <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".1s">
                                <div class="popular-img">
                                    @if (substr($product->image, 0, 5) == 'https')
                                        <img src="{{ $product->image }}" alt=""
                                            data-pagespeed-url-hash="3041166571" />
                                    @else
                                        <img src="{{ productImageUrl($product->image) }}" alt=""
                                            data-pagespeed-url-hash="3041166571" />
                                    @endif
                                </div>
                                <div class="popular-caption">
                                    <h3>
                                        <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                    </h3>
                                    <span>Rp {{ number_format($product->price, 0, ',', '.') }},
                                        {{ ucwords($product->village->name) }}</span>
                                </div>
                            </div>
                        </div>

                        {{-- D-MOBILE --}}
                        <div class="col-6 d-lg-none d-xl-block">
                            <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".1s" style="margin-left: 10px; margin-bottom:30px">
                                <div class="popular-img" style="margin-right: 40px; margin-bottom: 20px">
                                    @if (substr($product->image, 0, 5) == 'https')
                                        <img src="{{ $product->image }}" alt=""
                                            data-pagespeed-url-hash="3041166571" />
                                    @else
                                        <img src="{{ productImageUrl($product->image) }}" alt=""
                                            data-pagespeed-url-hash="3041166571" />
                                    @endif
                                </div>
                                <div class="popular-caption">
                                    <h3>
                                        <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                    </h3>
                                    <span>Rp {{ number_format($product->price, 0, ',', '.') }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            @if (count($products))
                <div class="row justify-content-center">
                    <div class="room-btn">
                        <a href="{{ route('products.index') }}" class="border-btn">Lihat Semua Produk</a>
                    </div>
                </div>
            @endif
        </div>
    </section>

    @if (isset($sectionTravel))
        <div class="visit-tailor-area fix">
            <div class="tailor-offers"
                style="background: url('{{ env('STORAGE_URL_PROD') . '/sections/images/' . !is_null($sectionTravel) ? $sectionTravel->image : null }}')!important">
            </div>

            <div class="tailor-details">
                <h2>
                    {{ !is_null($sectionTravel) ? $sectionTravel->title : null }}
                </h2>
                <p>
                    {{ !is_null($sectionTravel) ? $sectionTravel->description : null }}
                </p>
                <a href="#" class="btn">Jelajah Lebih Lanjut</a>
            </div>
        </div>
    @endif

    <!-- Section Popular Travel -->
    {{-- <div class="new-arrival new-arrival2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s"
                        data-wow-delay=".2s">
                        <h2>Tujuan Wisata Favorit</h2>
                        <p>
                            Rencanakan destinasimu bersama kami, menikmati keidahan budaya dan alam sekitar Borobudur.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($travelCategories as $travelCategory)
                    <div class="col-12">
                        <h3 class="new-arrival-title wow fadeInUp  d-none d-lg-block d-xl-none" data-wow-duration="1s"
                            data-wow-delay=".1s" style="margin-left: -10px">
                            {{ count($travelCategory->travel) > 0 ? $travelCategory->name : '' }}</h3>

                        <h3 class="new-arrival-title text-center wow fadeInUp d-lg-none d-xl-block" data-wow-duration="1s"
                            data-wow-delay=".1s" style="margin-left: -10px">
                            {{ count($travelCategory->travel) > 0 ? $travelCategory->name : '' }}</h3>
                    </div>
                    @foreach ($travelCategory->travel->take(4) as $travel)
                        <div class="col-lg-3 col-md-6 col-sm-6 d-none d-lg-block d-xl-none">
                            <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".1s">
                                <div class="popular-img img-wrapper">
                                    @if (substr($travel->image, 0, 5) == 'https')
                                        <img class="img-cover" src="{{ $travel->image }}" alt=""
                                            data-pagespeed-url-hash="3041166571" />
                                    @else
                                        <img class="img-cover" src="{{ travelImageUrl($travel->image) }}" alt=""
                                            data-pagespeed-url-hash="3041166571" />
                                    @endif
                                </div>
                                <div class="popular-caption">
                                    <h3>
                                        <a href="{{ route('products.show', $travel->id) }}">{{ $travel->name }}</a>
                                    </h3>
                                    <span>Rp {{ number_format($travel->price, 0, ',', '.') }},
                                        {{ ucwords($product->village->name) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 d-lg-none d-xl-block">
                            <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".1s" style="margin-left: 10px; margin-bottom:30px">
                                <div class="popular-img" style="margin-right: 40px; margin-bottom: 20px">
                                    @if (substr($travel->image, 0, 5) == 'https')
                                        <img class="img-cover" src="{{ $travel->image }}" alt=""
                                            data-pagespeed-url-hash="3041166571" />
                                    @else
                                        <img class="img-cover" src="{{ travelImageUrl($travel->image) }}" alt=""
                                            data-pagespeed-url-hash="3041166571" />
                                    @endif
                                </div>
                                <div class="popular-caption">
                                    <h3>
                                        <a href="{{ route('products.show', $travel->id) }}">{{ $travel->name }}</a>
                                    </h3>
                                    <span>Rp {{ number_format($travel->price, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            @if (count($travels) > 0)
                <div class="row justify-content-center">
                    <div class="room-btn">
                        <a href="{{ route('travels.index') }}" class="border-btn">Lihat Semua Travel</a>
                    </div>
                </div>
            @endif
        </div>
    </div> --}}

    <!-- Section Socila Media -->
    {{-- <div class="instagram-area d-none d-lg-block d-xl-none">
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
    </div> --}}
@endsection
