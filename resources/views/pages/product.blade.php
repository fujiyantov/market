@extends('layouts.app')

@section('title')
    Market
@endsection

@section('container')
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider hero-overly2 slider-height2 d-flex align-items-center slider-bg2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="fadeInUp" data-delay=".4s">
                                    Produk Budaya
                                </h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home') }}">Beranda</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Produk Budaya</a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="category-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-50">
                        <h2>Produk Budaya</h2>
                        <p>Browse from {{ number_format(count($collection)) }} latest items</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-tittle mb-45" id="myBtn">
                                <div class="ion">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="12px">
                                        <path fill-rule="evenodd" fill="rgb(27, 207, 107)"
                                            d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z">
                                        </path>
                                    </svg>
                                </div>
                                <h4>Filter Product</h4>
                            </div>
                        </div>
                    </div>

                    {{-- D-MOBILE --}}
                    <div class="collapse d-lg-none d-xl-block" id="myCollapse">
                        <div class="category-listing mb-50">
                            <div class="categories-wrapper">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="select-categories">
                                            <select name="select1">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="select-categories">
                                            <select name="select4">
                                                <option value="">Price range</option>
                                                <option value="">Rp 10.000 to Rp 100.000</option>
                                                <option value="">Rp 100.000 to Rp 1.000.000</option>
                                                <option value="">Rp 1.000.000 to Rp 5.000.000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="range-slider mt-50">
                                <div class="small-tittle small-tittle2">
                                    <h4>Price Range</h4>
                                </div>
                                <div class="range_item">
                                    <input type="text" class="js-range-slider" value="" />
                                    <div class="d-flex align-items-center">
                                        <div class="price_text">
                                            <p>Price :</p>
                                        </div>
                                        <div class="price_value d-flex justify-content-center">
                                            <input type="text" class="js-input-from" id="amount" readonly />
                                            <span>to</span>
                                            <input type="text" class="js-input-to" id="amount" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-checkbox mt-30 mb-30">
                                <div class="small-tittle">
                                    <h4>Latest Product</h4>
                                </div>
                                <label class="container">Any
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Today
                                    <input type="checkbox" checked />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 2 days
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 5 days
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 10 days
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 15 days
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="category-listing mb-50 d-none d-lg-block d-xl-none">
                        <div class="categories-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="select-categories">
                                        <select name="select1">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="select-categories">
                                        <select name="select4">
                                            <option value="">Price range</option>
                                            <option value="">Rp 10.000 to Rp 100.000</option>
                                            <option value="">Rp 100.000 to Rp 1.000.000</option>
                                            <option value="">Rp 1.000.000 to Rp 5.000.000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="range-slider mt-50">
                            <div class="small-tittle small-tittle2">
                                <h4>Price Range</h4>
                            </div>
                            <div class="range_item">
                                <input type="text" class="js-range-slider" value="" />
                                <div class="d-flex align-items-center">
                                    <div class="price_text">
                                        <p>Price :</p>
                                    </div>
                                    <div class="price_value d-flex justify-content-center">
                                        <input type="text" class="js-input-from" id="amount" readonly />
                                        <span>to</span>
                                        <input type="text" class="js-input-to" id="amount" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="select-checkbox mt-30 mb-30">
                            <div class="small-tittle">
                                <h4>Latest Product</h4>
                            </div>
                            <label class="container">Any
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Today
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Last 2 days
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Last 5 days
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Last 10 days
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Last 15 days
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="count-job mb-35">
                                <span>{{ number_format(count($collection)) }} Product found</span>

                                <div class="select-cat">
                                    <span>Sort by</span>
                                    <select name="select">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="new-arrival new-arrival3">
                        <div class="row">
                            @foreach ($collection as $item)
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 d-none d-lg-block d-xl-none">
                                    <div class="single-new-arrival mb-50">
                                        <div class="popular-img">
                                            @if (substr($item->image, 0, 5) == 'https')
                                                <img src="{{ $item->image }}" alt=""
                                                    data-pagespeed-url-hash="3041166571" />
                                            @else
                                                <img src="{{ productImageUrl($item->image) }}" alt=""
                                                    data-pagespeed-url-hash="3041166571" />
                                            @endif
                                        </div>
                                        <div class="popular-caption">
                                            <h3>
                                                <a href="{{ route('products.show', $item->id) }}">{{ $item->name }}</a>
                                            </h3>
                                            <span>Rp {{ number_format($item->price, 0, ',', '.') }},
                                                {{ ucwords($item->village->name) }}</span>
                                        </div>
                                    </div>
                                </div>

                                {{-- D-MOBILE --}}
                                <div class="col-6 d-lg-none d-xl-block">
                                    <div class="single-new-arrival mb-50 wow fadeInUp" data-wow-duration="1s"
                                        data-wow-delay=".1s" style="margin-left: 10px; margin-bottom:30px">
                                        <div class="popular-img" style="margin-right: 10px; margin-bottom: 15px">
                                            @if (substr($item->image, 0, 5) == 'https')
                                                <img src="{{ $item->image }}" alt=""
                                                    data-pagespeed-url-hash="3041166571" />
                                            @else
                                                <img src="{{ productImageUrl($item->image) }}" alt=""
                                                    data-pagespeed-url-hash="3041166571" />
                                            @endif
                                        </div>
                                        <div class="popular-caption">
                                            <h3>
                                                <a href="{{ route('products.show', $item->id) }}">{{ $item->name }}</a>
                                            </h3>
                                            <span>Rp {{ number_format($item->price, 0, ',', '.') }},
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row justify-content-center">
                            <div class="room-btn mt-20">
                                <a href="#" class="border-btn">MorLe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#myBtn").click(function() {
            $("#myCollapse").collapse("toggle");
        });
    </script>
@endsection
