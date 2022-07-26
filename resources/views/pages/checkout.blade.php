@extends('layouts.app')

@section('title')
    Market
@endsection

@section('stylesheet')
    <style>
        .section-padding40 {
            padding-bottom: 10px !important
        }
    </style>
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
                                    Checkout Payment
                                </h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home') }}">Beranda</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Checkout Payment</a>
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

    <section class="checkout_area section-padding40">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="order_box">
                            <div class="popular-img">
                                @if (substr($item->image, 0, 5) == 'https')
                                    <img class="img img-fluid" src="{{ $item->image }}" alt="" />
                                @else
                                    @if ($type == 'produk')
                                        <img class="img img-fluid" src="{{ productImageUrl($item->image) }}"
                                            alt="" />
                                    @else
                                        <img class="img img-fluid" src="{{ travelImageUrl($item->image) }}"
                                            alt="" />
                                    @endif
                                @endif
                            </div>
                            <div class="popular-caption">
                                <h3>
                                    {{ $item->name }}
                                </h3>
                                <span>Rp {{ number_format($item->price) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-8">
                        <div class="order_box">
                            <h2>Chekcout {{ ucwords($type) }} Budaya</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Produk<span>Total</span> </a>
                                </li>
                                <li>
                                    <a href="#" style="font-weight: bold">{{ ucwords($item->name) }}
                                        <span class="middle">x 01</span>
                                        <span class="last">Rp {{ number_format($item->price) }}</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Kode Unik <span>Rp {{ $code = rand(11, 99) }}</span></a>
                                </li>
                                <li>
                                    <a href="#" style="font-weight: bold">Total Transfer<span>Rp
                                            {{ number_format($item->price + $code) }}</span> </a>
                                </li>
                            </ul>
                            <div class="payment_item">
                                <p>
                                    <b>Informasi penting</b>
                                    <br>
                                    <br>
                                    Proses konfirmasi pembayaran kelas akan membutuhkan waktu sekitar 20 menit (dari pesan
                                    WhatsApp dikirim) jika menggunakan metode pembayaran manual. Mohon menunggu dengan sabar
                                    dan terima kasih.
                                    <br>
                                    <br>
                                    <b>Transfer Pembayaran</b>
                                    <br>
                                    <br>
                                    <img class="img img-fluid mb-4" src="{{ asset('/assets/banks/logo_bca.png') }}"
                                        alt="" width="20%" />
                                    <br>
                                    PT Balkondes (Admin Ceunah)
                                    <br>
                                    <strong>0280256315</strong>
                                </p>
                            </div>
                            <div class="creat_account checkout-cap">
                                <input type="checkbox" id="f-option8" name="selector" />
                                <label for="f-option8">I’ve read and accept the
                                    <a href="#">terms & conditions*</a>
                                </label>
                            </div>
                            @php
                                $message = 'Halo, Saya sudah melakukan pembayaran ' . ucwords($type) . ' Budaya ' . ucwords($item->name) . '. Berikut saya lampirkan foto bukti pembayaran:';
                            @endphp
                            <a class="btn w-100"
                                href="https://api.whatsapp.com/send?phone=6281211735338&text={{ $message }}"
                                target="_blank">Konfirmasi
                                Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout_area" style="padding-top: 30px; padding-bottom: 50px">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <div class="order_box">
                            Butuh bantuan? hubungi kami
                            <ul class="list">
                                <li>
                                    <a href="#" style="font-weight: bold">Admin
                                        <span class="last">Admin Ceunah</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="font-weight: bold">No. WhatsApp
                                        <span class="last">+62812-1173-5338</span>
                                    </a>
                                </li>
                            </ul>
                            @php
                                $messageAdmin = 'Halo, Saya mendapati kesulitan dalam melakukan checkout: ' . ucwords($type) . ' Budaya ' . ucwords($item->name) . '';
                            @endphp
                            <a class="btn btn-secondary w-100"
                                href="https://api.whatsapp.com/send?phone=6281211735338&text={{ $messageAdmin }}"
                                target="_blank">WhatsApp ke Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
