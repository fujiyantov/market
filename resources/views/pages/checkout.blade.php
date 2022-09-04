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
                                    Checkout
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
            <div class="billing_details new-arrival new-arrival3">
                <div class="row">
                    <div class="col-xl-4 none d-lg-block d-xl-none">
                        <div class="order_box single-new-arrival mb-50">
                            <div class="popular-img">
                                @if (substr($item->image, 0, 5) == 'https')
                                    <img src="{{ $item->image }}" alt="" data-pagespeed-url-hash="3041166571" />
                                @else
                                    @if ($type == 'produk')
                                        <img src="{{ productImageUrl($item->image) }}" alt="" />
                                    @else
                                        <img src="{{ travelImageUrl($item->image) }}" alt="" />
                                    @endif
                                @endif
                            </div>
                            <div class="popular-caption">
                                <h3 style="margin-bottom: 0px">
                                    <a href="{{ route('products.show', $item->id) }}">{{ $item->name }}</a>
                                </h3>
                                <span>Rp {{ number_format($item->price, 0, ',', '.') }},
                                    {{ ucwords($item->village->name) }}</span>
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
                                    <img class="img img-fluid mb-4" src="{{ env('STORAGE_URL_PROD') . '/banks/images/' . $bank->image; }}"
                                        alt="" width="20%" />
                                    <br>
                                    {{ $bank->account_holder }}
                                    <br>
                                    <strong>{{ $bank->account_number }}</strong>
                                </p>
                            </div>
                            <div class="creat_account checkout-cap">
                                <input type="checkbox" id="f-option8" name="selector" />
                                <label for="f-option8">I’ve read and accept the
                                    <a href="#">terms & conditions*</a>
                                </label>
                            </div>

                            <form class="row contact_form mb-4"
                                action="{{ route('checkout.store', [$type, $item->id, $item->name]) }}" method="post"
                                novalidate>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control name" name="name"
                                            placeholder="Your Full name" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control phone" name="number"
                                            placeholder="Phone Number" required />
                                    </div>
                                </div>
                                <div class="col-md-12 text-left">
                                    @php
                                        if ($type == 'produk') {
                                            $btnMessage = 'Beli Produk';
                                        } else {
                                            $btnMessage = 'Pesan Travel';
                                        }
                                    @endphp
                                    <button type="submit" value="submit" id="form-checkout" class="btn w-100 btn-checkout">
                                        {{ $btnMessage }}
                                    </button>
                                </div>
                            </form>
                            @php
                                $message = 'Halo, Saya sudah melakukan pembayaran ' . ucwords($type) . ' Budaya ' . ucwords($item->name) . '. Berikut saya lampirkan foto bukti pembayaran:';
                            @endphp
                            <a class="btn w-100 btn-confirmation"
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
                                        <span class="last">+62856-1123-3451</span>
                                    </a>
                                </li>
                            </ul>
                            @php
                                $messageAdmin = 'Halo, Saya mendapati kesulitan dalam melakukan checkout: ' . ucwords($type) . ' Budaya ' . ucwords($item->name) . '';
                            @endphp
                            <a class="btn btn-secondary w-100"
                                href="https://api.whatsapp.com/send?phone=62811861645&text={{ $messageAdmin }}"
                                target="_blank">WhatsApp ke Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        let btnMessage = "{{ $btnMessage }}"
        $('.btn-confirmation').hide();
        $("#form-checkout").on('click', function(e) {
            e.preventDefault(); // prevent actual form submit

            var name = $('.name').val()
            var phone = $('.phone').val()

            if (name == '') {
                alert('Name is required')
                return
            }

            if (phone == '') {
                alert('Phone is required')
                return
            }

            let checkPhone = phonenumber(phone)
            if (checkPhone == false) {
                return
            }

            if (phone.length < 11 || phone.length > 14) {
                alert("Not a valid Phone Number");
                return false;
            }


            let text = "Apakah kamu yakin akan membeli {{ $item->name }}";
            if (confirm(text) == true) {
                var form = $(this);
                let data = {
                    _token: "{{ csrf_token() }}",
                    'name': name,
                    'phone': phone,
                    'code': {{ $code }}
                }

                $('.btn-checkout').prop('disabled', true);
                $('.btn-checkout').text('Loading...')

                var url = form.attr('action');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function(res) {
                        console.log(res);
                        if (res == 200) {
                            alert('Pesanan kamu berhasil diproses, segera konfirmasi pembayaran')
                            // $('.btn-checkout').text('Beli')
                            $('.btn-checkout').hide();
                            $('.btn-confirmation').show();
                        }

                        if (res == 422) {
                            alert('Nama/Phone yang kamu masukan tidak sesuai')
                            $('.btn-checkout').text(btnMessage)
                            $('.btn-checkout').prop('disabled', false);

                        }

                        if (res == 400) {
                            alert('Pesanan kamu tidak ditemukan')
                            $('.btn-checkout').text(btnMessage)
                            $('.btn-checkout').prop('disabled', false);
                        }
                    }
                });
            }
        });

        function phonenumber(inputtxt) {
            var phoneno = /^[0-9]+$/;
            if (inputtxt.match(phoneno)) {
                return true;
            } else {
                alert("Not a valid Phone Number");
                return false;
            }
        }
    </script>
@endsection
