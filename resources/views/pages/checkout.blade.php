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
                                    Produk
                                </h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Checkout</a>
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
                    <div class="col-lg-2">
                    </div>
                    <div class=" col-lg-8">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Produkt<span>Total</span> </a>
                                </li>
                                <li>
                                    <a href="#">Produk 1
                                        <span class="middle">x 01</span>
                                        <span class="last">Rp 720.000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Produk 2
                                        <span class="middle">x 01</span>
                                        <span class="last">Rp 720.000</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Subtotal <span>Rp 2.160.000</span></a>
                                </li>
                                <li>
                                    <a href="#">Total<span>Rp 2.210.000</span> </a>
                                </li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector" />
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis saepe atque dolor
                                    exercitationem ex blanditiis odit harum voluptates, animi iure obcaecati quam
                                    praesentium, suscipit molestias quod dolorem sit eum porro!
                                </p>
                            </div>
                            <div class="creat_account checkout-cap">
                                <input type="checkbox" id="f-option8" name="selector" />
                                <label for="f-option8">I’ve read and accept the
                                    <a href="#">terms & conditions*</a>
                                </label>
                            </div>
                            <a class="btn w-100" href="#">Proceed to Payment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
