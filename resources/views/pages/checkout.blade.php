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
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Produk</a>
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
                            <!-- <div class="payment_item active">
                    <div class="radion_btn">
                      <input type="radio" id="f-option6" name="selector" />
                      <label for="f-option6">Paypal </label>
                      <img
                        src="assets/img/gallery/xcard.jpg.pagespeed.ic.dHda8uy866.webp"
                        alt=""
                        data-pagespeed-url-hash="771037055"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                      />
                      <div class="check"></div>
                    </div>
                    <p>
                      Please send a check to Store Name, Store Street, Store
                      Town, Store State / County, Store Postcode.
                    </p>
                  </div> -->
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

    <div class="categories-area section-padding40 gray-bg">
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
    </div>
@endsection
