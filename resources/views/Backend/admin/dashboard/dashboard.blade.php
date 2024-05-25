@extends('Backend.includes.common-template')

@push('styles')
{{--
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}"> --}}
@endpush



@section('content')
<section id="dash">
    <div class="contain-fluid">
        <ul class="crumbs">
            <li>Dashboard</li>
        </ul>
        <div class="tile_row flex_row">
            <div class="col">
                <div class="tile_blk">
                    <div class="icon"><img src="http://localhost/yna/yna/assets/images/vector-car.svg" alt=""></div>
                    <div class="txt">
                        <h4>Upload my car</h4>
                        <p>Make more money when you sell your car yourself.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tile_blk">
                    <div class="icon"><img src="http://localhost/yna/yna/assets/images/vector-auction.svg" alt=""></div>
                    <div class="txt">
                        <h4>Auction my car</h4>
                        <p>Get an Instant Cash Offer and trade in or sell your...</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tile_blk">
                    <div class="icon"><img src="http://localhost/yna/yna/assets/images/vector-badge.svg" alt=""></div>
                    <div class="txt">
                        <h4>Value my car</h4>
                        <p>Find out what your car is worth to an individual buyer or dealer.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="block_row flex_row">
            <div class="col">
                <div class="inner">
                    <strong>05</strong>
                    <p>Live Adverts</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>02</strong>
                    <p>Soon to Expire</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>01</strong>
                    <p>Incomplete Adverts</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>207</strong>
                    <p>Advert Views</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>10</strong>
                    <p>Wishlists</p>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div id="brands">
            <h3 class="heading">I want to search by brands</h3>
            <div class="sub_row flex_row">
                <div class="col">
                    <div class="inner">
                        <div class="icon"><img src="http://localhost/yna/yna/assets/images/brands/01.png" alt=""></div>
                        <span class="tip">12</span>
                    </div>
                </div>
                <div class="col">
                    <div class="inner">
                        <div class="icon"><img src="http://localhost/yna/yna/assets/images/brands/02.png" alt=""></div>
                        <span class="tip">05</span>
                    </div>
                </div>
                <div class="col">
                    <div class="inner">
                        <div class="icon"><img src="http://localhost/yna/yna/assets/images/brands/03.png" alt=""></div>
                        <span class="tip">10</span>
                    </div>
                </div>
                <div class="col">
                    <div class="inner">
                        <div class="icon"><img src="http://localhost/yna/yna/assets/images/brands/04.png" alt=""></div>
                        <span class="tip">26</span>
                    </div>
                </div>
                <div class="col">
                    <div class="inner">
                        <div class="icon"><img src="http://localhost/yna/yna/assets/images/brands/05.png" alt=""></div>
                        <span class="tip">11</span>
                    </div>
                </div>
                <div class="col">
                    <div class="inner">
                        <div class="icon"><img src="http://localhost/yna/yna/assets/images/brands/06.png" alt=""></div>
                        <span class="tip">06</span>
                    </div>
                </div>
                <div class="col">
                    <div class="inner">
                        <div class="icon"><img src="http://localhost/yna/yna/assets/images/brands/07.png" alt=""></div>
                        <span class="tip">34</span>
                    </div>
                </div>
                <div class="col">
                    <div class="inner">
                        <div class="icon"><img src="http://localhost/yna/yna/assets/images/brands/08.png" alt=""></div>
                        <span class="tip">15</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div id="types">
            <h3 class="heading">Vehicle Types</h3>
            <div class="types_row flex_row">
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/micro.svg" alt="">
                        </figure>
                        <span>Micro/Electric</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/hatchback.svg"
                                alt=""></figure>
                        <span>Hatchback</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/mpv.svg" alt="">
                        </figure>
                        <span>MPV/Wagon/Minivan</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/suv.svg" alt="">
                        </figure>
                        <span>SUV</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/saloon.svg" alt="">
                        </figure>
                        <span>Saloon</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/convertible.svg"
                                alt=""></figure>
                        <span>Convertible</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/coupe.svg" alt="">
                        </figure>
                        <span>Coupe</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/pickup.svg" alt="">
                        </figure>
                        <span>Pickup</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/4WD.svg" alt="">
                        </figure>
                        <span>4WD</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/mini_truck.svg"
                                alt=""></figure>
                        <span>Mini Truck</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/van.svg" alt="">
                        </figure>
                        <span>Van</span>
                    </a>
                </div>
                <div class="col">
                    <a href="?" class="in_blk">
                        <figure class="icon"><img src="http://localhost/yna/yna/assets/images/body/campervan.svg"
                                alt=""></figure>
                        <span>Campervan</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div id="featured">
            <h3 class="heading">Feature Vehicles Listing</h3>
            <div data-id="slick-listing" class="slick-carousel slick-initialized slick-slider slick-dotted"><button
                    class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                <div class="slick-list draggable">
                    <div class="slick-track"
                        style="opacity: 1; width: 4102px; transform: translate3d(-1172px, 0px, 0px);">
                        <div class="item slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/02.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Lexus GS 450h</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/03.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">GTA 5 Lowriders DLC</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/04.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Toyota avalon hybrid</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/05.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Hyundai santa fe sport</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-current slick-active" data-slick-index="0"
                            aria-hidden="false" style="width: 293px;" tabindex="0" role="tabpanel" id="slick-slide00"
                            aria-describedby="slick-slide-control00">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/01.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="0">Acura Rsx</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                            style="width: 293px;" tabindex="0" role="tabpanel" id="slick-slide01"
                            aria-describedby="slick-slide-control01">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/02.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="0">Lexus GS 450h</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                            style="width: 293px;" tabindex="0" role="tabpanel" id="slick-slide02"
                            aria-describedby="slick-slide-control02">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/03.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="0">GTA 5 Lowriders DLC</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                            style="width: 293px;" tabindex="0" role="tabpanel" id="slick-slide03"
                            aria-describedby="slick-slide-control03">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/04.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="0">Toyota avalon hybrid</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide" data-slick-index="4" aria-hidden="true" style="width: 293px;"
                            tabindex="-1" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/05.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Hyundai santa fe sport</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="5" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/01.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Acura Rsx</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="6" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/02.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Lexus GS 450h</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="7" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/03.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">GTA 5 Lowriders DLC</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="8" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/04.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Toyota avalon hybrid</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="9" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/05.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Hyundai santa fe sport</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                <ul class="slick-dots" style="" role="tablist">
                    <li class="slick-active" role="presentation"><button type="button" role="tab"
                            id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0"
                            aria-selected="true">1</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control01"
                            aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control02"
                            aria-controls="slick-slide02" aria-label="3 of 2" tabindex="-1">3</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control03"
                            aria-controls="slick-slide03" aria-label="4 of 2" tabindex="-1">4</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control04"
                            aria-controls="slick-slide04" aria-label="5 of 2" tabindex="-1">5</button></li>
                </ul>
            </div>
        </div>
        <div class="space"></div>
        <div id="featured">
            <h3 class="heading">My Vehicles Listing</h3>
            <div data-id="slick-listing" class="slick-carousel slick-initialized slick-slider slick-dotted"><button
                    class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                <div class="slick-list draggable">
                    <div class="slick-track"
                        style="opacity: 1; width: 4102px; transform: translate3d(-1172px, 0px, 0px);">
                        <div class="item slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/02.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Lexus GS 450h</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/03.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">GTA 5 Lowriders DLC</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/04.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Toyota avalon hybrid</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/05.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Hyundai santa fe sport</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-current slick-active" data-slick-index="0"
                            aria-hidden="false" style="width: 293px;" tabindex="0" role="tabpanel" id="slick-slide10"
                            aria-describedby="slick-slide-control10">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/01.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="0">Acura Rsx</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                            style="width: 293px;" tabindex="0" role="tabpanel" id="slick-slide11"
                            aria-describedby="slick-slide-control11">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/02.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="0">Lexus GS 450h</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                            style="width: 293px;" tabindex="0" role="tabpanel" id="slick-slide12"
                            aria-describedby="slick-slide-control12">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/03.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="0">GTA 5 Lowriders DLC</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                            style="width: 293px;" tabindex="0" role="tabpanel" id="slick-slide13"
                            aria-describedby="slick-slide-control13">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/04.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="0"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="0">Toyota avalon hybrid</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide" data-slick-index="4" aria-hidden="true" style="width: 293px;"
                            tabindex="-1" role="tabpanel" id="slick-slide14" aria-describedby="slick-slide-control14">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/05.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Hyundai santa fe sport</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="5" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/01.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Acura Rsx</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="6" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/02.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Lexus GS 450h</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="7" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/03.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">GTA 5 Lowriders DLC</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="8" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/04.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Toyota avalon hybrid</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="9" aria-hidden="true"
                            style="width: 293px;" tabindex="-1">
                            <div class="item_blk">
                                <div class="image">
                                    <img src="http://localhost/yna/yna/assets/images/cars/05.jpg" alt="">
                                    <div class="overlay">
                                        <ul class="social_links">
                                            <li><a href="http://localhost/yna/yna/vehicle-details.php"
                                                    tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-link.svg"
                                                        alt=""></a></li>
                                            <li><a href="?" tabindex="-1"><img
                                                        src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="menu_list">
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-registered.svg"
                                                alt=""> 2017</li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-cog.svg" alt="">
                                            Manual </li>
                                        <li><img src="http://localhost/yna/yna/assets/images/vector-dashboard.svg"
                                                alt=""> 6,000 mi</li>
                                    </ul>
                                </div>
                                <div class="txt">
                                    <div class="rateYo jq-ry-container" readonly="readonly" style="width: 88px;">
                                        <div class="jq-ry-group-wrapper">
                                            <div class="jq-ry-normal-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ddd" style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="jq-ry-rated-group jq-ry-group" style="width: 79.5455%;">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 55.867 55.867" fill="#ffc000"
                                                    style="margin-left: 2px;">
                                                    <path
                                                        d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="http://localhost/yna/yna/vehicle-details.php"
                                            tabindex="-1">Hyundai santa fe sport</a></h5>
                                    <div class="price"><del>£30,568</del><span>£28,698</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                <ul class="slick-dots" style="" role="tablist">
                    <li class="slick-active" role="presentation"><button type="button" role="tab"
                            id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 2" tabindex="0"
                            aria-selected="true">1</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control11"
                            aria-controls="slick-slide11" aria-label="2 of 2" tabindex="-1">2</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control12"
                            aria-controls="slick-slide12" aria-label="3 of 2" tabindex="-1">3</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control13"
                            aria-controls="slick-slide13" aria-label="4 of 2" tabindex="-1">4</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control14"
                            aria-controls="slick-slide14" aria-label="5 of 2" tabindex="-1">5</button></li>
                </ul>
            </div>
        </div>
        <div class="space"></div>
        <div id="vendors">
            <div id="slick-vendors" class="slick-carousel slick-initialized slick-slider"><button
                    class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                <div class="slick-list draggable">
                    <div class="slick-track"
                        style="opacity: 1; width: 3978px; transform: translate3d(-1170px, 0px, 0px);">
                        <div class="item slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>MOT</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-dark.jpg"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Book MOT</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>Service</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-icon.png"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Book
                                        Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>Warranty</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-icon.png"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Get quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>Vehicle Tax</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-dark.jpg"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Renew Tax</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>MOT</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-light.png"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Book MOT</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-current slick-active" data-slick-index="0"
                            aria-hidden="false" style="width: 234px;" tabindex="0">
                            <div class="inner">
                                <h4>Vehicle Tax</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-dark.jpg"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="0">Renew Tax</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                            style="width: 234px;" tabindex="0">
                            <div class="inner">
                                <h4>MOT</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-dark.jpg"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="0">Book MOT</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                            style="width: 234px;" tabindex="0">
                            <div class="inner">
                                <h4>Service</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-icon.png"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="0">Book
                                        Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                            style="width: 234px;" tabindex="0">
                            <div class="inner">
                                <h4>Warranty</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-icon.png"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="0">Get quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                            style="width: 234px;" tabindex="0">
                            <div class="inner">
                                <h4>Vehicle Tax</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-dark.jpg"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="0">Renew Tax</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide" data-slick-index="5" aria-hidden="true" style="width: 234px;"
                            tabindex="-1">
                            <div class="inner">
                                <h4>MOT</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-light.png"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Book MOT</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="6" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>Vehicle Tax</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-dark.jpg"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Renew Tax</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="7" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>MOT</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-dark.jpg"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Book MOT</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="8" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>Service</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-icon.png"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Book
                                        Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="9" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>Warranty</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-icon.png"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Get quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="10" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>Vehicle Tax</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-dark.jpg"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Renew Tax</a>
                                </div>
                            </div>
                        </div>
                        <div class="item slick-slide slick-cloned" data-slick-index="11" aria-hidden="true"
                            style="width: 234px;" tabindex="-1">
                            <div class="inner">
                                <h4>MOT</h4>
                                <div class="icon"><img src="http://localhost/yna/yna/assets/images/logo-light.png"
                                        alt=""></div>
                                <div class="btn_blk">
                                    <a href="?" class="site_btn md block round blank border" tabindex="-1">Book MOT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
            </div>
        </div>
    </div>
</section>
@endsection



@push('scripts')
<script>

</script>
{{-- <script src="{{ asset('js/custom-home.js') }}"></script> --}}
@endpush