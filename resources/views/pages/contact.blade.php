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
                                    Kontak Kami
                                </h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">kontak</a>
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

    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px; position: relative; overflow: hidden">

                    <div
                        style="
          background-color: white;
          font-weight: 500;
          font-family: Roboto, sans-serif;
          padding: 15px 25px;
          box-sizing: border-box;
          top: 5px;
          border: 1px solid rgba(0, 0, 0, 0.12);
          border-radius: 5px;
          left: 50%;
          max-width: 375px;
          position: absolute;
          transform: translateX(-50%);
          width: calc(100% - 10px);
          z-index: 1;
        ">
                        <div>
                            <img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg"
                                draggable="false"
                                style="
              padding: 0px;
              margin: 0px;
              border: 0px;
              height: 17px;
              vertical-align: middle;
              width: 52px;
              user-select: none;
            "
                                data-pagespeed-url-hash="1773485332"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        </div>
                        <div style="line-height: 20px; margin: 15px 0px">
                            <span style="color: rgba(0, 0, 0, 0.87); font-size: 14px">This page can't load Google Maps
                                correctly.</span>
                        </div>
                        <table style="width: 100%">
                            <tr>
                                <td style="line-height: 16px; vertical-align: middle">
                                    <a href="#" target="_blank" rel="noopener"
                                        style="color: rgba(0, 0, 0, 0.54); font-size: 12px">Do you own this website?</a>
                                </td>
                                <td style="text-align: right">
                                    <button class="dismissButton">OK</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -25.363,
                            lng: 131.044,
                        };
                        var grayStyles = [{
                                featureType: "all",
                                stylers: [{
                                        saturation: -90,
                                    },
                                    {
                                        lightness: 50,
                                    },
                                ],
                            },
                            {
                                elementType: "labels.text.fill",
                                stylers: [{
                                    color: "#ccdee9",
                                }, ],
                            },
                        ];
                        var map = new google.maps.Map(document.getElementById("map"), {
                            center: {
                                lat: -6.968667,
                                lng: 110.1234954,
                            },
                            zoom: 9,
                            //   styles: grayStyles,
                            scrollwheel: false,
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-v8gfAKwMuaBRN1QQ0wssH05SlaN0qpA&callback=initMap">
                </script>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder="Enter your name" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder="Enter Subject" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>Lorem, AD 11</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+62812-9121-2222</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="4c3f393c3c233e380c2f2320233e20252e622f2321">[email&#160;protected]</a>
                            </h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
