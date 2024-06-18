@extends('layouts.base')
@push('style')
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('../assets/css/demo2.css') }}">
@endpush
@section('content')
    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>{{ $product->name }}</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('app.index') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section> <!-- Shop Section start -->

    <section>
        <div class="container">
            <div class="row gx-4 gy-5">
                <div class="col-lg-12 col-12">
                    <div class="details-items">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="{{ asset('products/' . $product->image) }}"
                                                    class="img-fluid blur-up lazyload" alt="{{$product->name}}">
                                            </div>
                                            @if ($product->images)
                                                @php
                                                    $images = explode(',', $product->images);
                                                @endphp
                                                @foreach ($images as $image)
                                                    <div>
                                                        <img src="{{ asset('/assets/images/fashion/product/front') }}/{{ $image }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="{{ asset('products/' . $product->image) }}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload"
                                                    alt="">
                                            </div>
                                            @if ($product->images)
                                                @php
                                                    $images = explode(',', $product->images);
                                                @endphp
                                                @foreach ($images as $image)
                                                    <div>
                                                        <img src="{{ asset('products/' . $product->image) }}"
                                                            class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload"
                                                            alt="">
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="cloth-details-size">
                                    <div class="product-count">
                                        <ul>
                                            <li>
                                                <img src="../assets/images/gif/fire.gif" class="img-fluid blur-up lazyload"
                                                    alt="image">
                                                <span class="p-counter">37</span>
                                                <span class="lang">orders in last 24 hours</span>
                                            </li>
                                            <li>
                                                <img src="../assets/images/gif/person.gif"
                                                    class="img-fluid user_img blur-up lazyload" alt="image">
                                                <span class="p-counter">44</span>
                                                <span class="lang">active view this</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="details-image-concept">
                                        <h2>{{$product->name}}</h2>
                                    </div>

                                    <div class="label-section">
                                        <span class="badge badge-grey-color">#1 Best seller</span>
                                        <span class="label-text">in fashion</span>
                                    </div>

                                    <h3 class="price-detail">
                                        @if ($product->sale_price)
                                            {{ $product->sale_price }}<del>{{ $product->regular_price }}</del><span>{{ round((($product->regular_price - $product->sale_price) / $product->regular_price) * 100) }}%
                                                off</span>
                                        @else
                                            {{ $product->regular_price }}
                                        @endif

                                    </h3>

                                    <div class="color-image">
                                        <div class="image-select">
                                            <h5>Color :</h5>
                                            <ul class="image-section">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/fashion/product/front/5.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/fashion/product/front/6.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/fashion/product/front/7.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="selectSize" class="addeffect-section product-description border-product">

                                        <h6 class="product-title product-title-2 d-block">quantity</h6>

                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        onclick="updateQuantity()" data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" id="quantity"
                                                    class="form-control input-number" value="1">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        onclick="updateQuantity()" data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-buttons">
                                        <a href="javascript:void(0)" class="btn btn-solid">
                                            <i class="fa fa-bookmark fz-16 me-2"></i>
                                            <span>Wishlist</span>
                                        </a>
                                        <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('addtocart').submit();" id="cartEffect"
                                            class="btn btn-solid hover-solid btn-animation">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Add To Cart</span>
                                            <form id="addtocart" method="post"
                                                action="{{route('cart.store')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <input type="hidden" name="quantity" id="qty" value="1">
                                            </form>
                                        </a>



                                    </div>

                                    <ul class="product-count shipping-order">
                                        <li>
                                            <img src="../assets/images/gif/truck.png" class="img-fluid blur-up lazyload"
                                                alt="image">
                                            <span class="lang">Free shipping for orders above $500 USD</span>
                                        </li>
                                    </ul>

                                    <div class="mt-2 mt-md-3 border-product">
                                        <h6 class="product-title hurry-title d-block">Hurry Up! Left
                                            <span>
                                                @if ($product->stock_status == 'instock')
                                                    {{ $product->quantity }}
                                                @else
                                                    0
                                                @endif
                                            </span> in
                                            stock
                                        </h6>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                                        </div>
                                        <div class="font-light timer-5">
                                            <h5>Order in the next to get</h5>
                                            <ul class="timer1">
                                                <li class="counter">
                                                    <h5 id="days">&#9251;</h5> Days :
                                                </li>
                                                <li class="counter">
                                                    <h5 id="hours">&#9251;</h5> Hour :
                                                </li>
                                                <li class="counter">
                                                    <h5 id="minutes">&#9251;</h5> Min :
                                                </li>
                                                <li class="counter">
                                                    <h5 id="seconds">&#9251;</h5> Sec
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="border-product">
                                        <h6 class="product-title d-block">share it</h6>
                                        <div class="product-icon">
                                            <ul class="product-social">
                                                <li>
                                                    <a href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.google.com/">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="pe-0">
                                                    <a href="https://www.google.com/">
                                                        <i class="fas fa-rss"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- Shop Section end -->

    <!-- product section start -->
    {{-- <section class="ratio_asos section-b-space overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-lg-4 mb-3">Customers Also Bought These</h2>
                    <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space">
                        @foreach($rproducts as $rproduct)
                            
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{route('shop.product.details', ['slug'=>$rproduct->slug])}}">
                                            <img src="{{asset('/assets/images/fashion/product/front')}}/{{$rproduct->image}}}"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="{{route('shop.product.details', ['slug'=>$rproduct->slug])}}">
                                            <img src="{{asset('/assets/images/fashion/product/front')}}/{{$rproduct->image}}}"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                    data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Cupiditate Minus</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="{{route('shop.product.details', ['slug'=>$rproduct->slug])}}" class="font-default">
                                            <h5>{{$rproduct->name}}</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">{{$rproduct->category->name}}</span>
                                            <p class="font-light">{{$rproduct->short_description}}</p>
                                        </div>
                                        <h3 class="theme-color">
                                            @if($rproduct->sale_price)
                                                {{$rproduct->sale_price}}
                                            @else
                                                {{$rproduct->regular_price}}
                                            @endif
                                        </h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- product section end -->
@endsection
