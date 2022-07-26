@extends('layouts.app')

@section('title')
    Market
@endsection

@section('style')
    <style>
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

        .img-wrapper:hover {
            transform: scale(1);
        }

        .img-wrapper:after {
            transform: scale(1);
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
                        <h2>Produk Budaya</h2>
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
                                @foreach ($categories as $category)
                                    <a class="nav-item nav-link @if ($category->id == 1) active @endif"
                                        id="nav-Sofa-tab" data-toggle="tab" href="#{{ $category->id }}" role="tab"
                                        aria-controls="nav-Sofa" aria-selected="true">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tab-content" id="nav-tabContent">
                    @foreach ($categories as $category)
                        <div class="tab-pane fade show active" id="{{ $category->id }}" role="tabpanel"
                            aria-labelledby="{{ $category->id }}-tab">
                            <div class="row">
                                @foreach ($category->product as $product)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="single-new-arrival mb-50 text-center">
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
                                                    <a
                                                        href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                                </h3>
                                                <span>Rp {{ number_format($product->price) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

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
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
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

                            {{-- <div class="card card-featured">
                                <div class="tag">
                                    200
                                    <span class="font-weight-light">per asda</span>
                                </div>
                                <figure class="img-wrapper">
                                    <img src="{{ travelImageUrl($travel->image) }}" alt="" class="img-cover" />
                                </figure>
                                <div class="meta-wrapper">
                                    <Button type="link" class="stretched-link d-block text-white"
                                        href="#">
                                        <h5> asdasd </h5>
                                    </Button>
                                    <span>
                                        zzzz, asdasdasd
                                    </span>
                                </div>
                            </div> --}}

                            <div class="popular-img img-wrapper">
                                @if (substr($travel->image, 0, 5) == 'https')
                                    <img class="img-cover" src="{{ $travel->image }}" alt="" data-pagespeed-url-hash="3041166571" />
                                @else
                                    <img class="img-cover" src="{{ travelImageUrl($travel->image) }}" alt=""
                                        data-pagespeed-url-hash="3041166571" />
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
