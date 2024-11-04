@extends('layouts.base')
@push('styles')
<style>
    .r-price {
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .r-price .main-price {
        width: 100%;
    }

    .r-price .rating {
        padding-left: auto;
    }

    .product-style-3.product-style-chair .product-title {
        text-align: left;
        width: 100%;
    }

    @media (max-width:600px) {

        .product-box p,
        .product-box a {
            text-align: left;
        }

        .product-style-3.product-style-chair .main-price {
            text-align: right !important;
        }
    }
</style>
@endpush
@section('content')
    <section class="pt-0 poster-section">
        <div class="poster-image slider-for custome-arrow classic-arrow">
            @foreach($products as $product)
                <div>
                    <img src="assets/images/HERO.webp" class="img-fluid blur-up lazyload" alt="">
                </div>
            @endforeach
            
        </div>
        <div class="slider-nav image-show">
            @foreach($products as $product)
                <div>
                    <img src="assets/images/HERO.webp" class="img-fluid blur-up lazyload" alt="">
                </div>
                
            @endforeach
        </div>

        <div class="left-side-contain">
            <div class="banner-left">
                <h4>Sale <span class="theme-color">35% Off</span></h4>
                <h1>New Latest <span>in Tech</span></h1>
                <p>BUY ONE GET ONE <span class="theme-color">FREE</span></p>
                <p class="poster-details mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.</p>
            </div>
        </div>

        
    </section>
    <!-- banner section start -->
    <!-- banner section end -->

    <section class="ratio_asos overflow-hidden">
        <div class="container p-sm-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="title-3 text-center">
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
            
            <div class="row g-sm-4 g-3">
                @foreach($products as $product)
                    <div class="col-xl-2 col-lg-2 col-6">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="{{route('shop.product.details',['slug'=>$product->slug])}}">
                                    <img src="{{ asset('products/' . $product->image) }}"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                {{-- <span class="background-text">Furniture</span> --}}
                                @if($product->sale_price)
                                    <div class="label-block">
                                        <span class="label label-theme">
                                            {{round((($product->regular_price - $product->sale_price) / $product->regular_price) * 100)}}%
                                        </span>
                                    </div>
                                @endif
                                {{-- <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">{{$product->regular_price}}</div>
                                        <div class="main-price">
                                            {{-- <ul class="rating mb-1 mt-0">
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
                                            </ul> --}}
                                        </div>
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">{{$product->category->name}}</p>
                                    <a href="product/details.html" class="font-default">
                                        <h5>{{$product->name}}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="{{route('shop.index')}}" class="btn btn-solid btn-theme-color">View All</a>
            </div>
        </div>
    </section>

    <!-- category section start -->
    {{-- <section class="category-section ratio_40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title title-2 text-center">
                        <h2>Our Category</h2>
                        <h5 class="text-color">Our collection</h5>
                    </div>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col-xxl-2 col-lg-3">
                    <div class="category-wrap category-padding category-block theme-bg-color">
                        <div>
                            <h2 class="light-text">Top</h2>
                            <h2 class="top-spacing">Our Top</h2>
                            <span>Categories</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 col-lg-9">
                    <div class="category-wrapper category-slider1 white-arrow category-arrow">
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/1.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Shoes</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/2.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Men</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/3.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Jeans</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/4.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Jacket</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/3.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Jeans</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->


    <section class="product-slider overflow-hidden">
        <div>
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="title-3 pb-4 title-border">
                            <h2>Most Popular</h2>
                            <h5 class="theme-color">Our Collection</h5>
                        </div>

                        <div class="product-slider round-arrow">
                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/1.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/2.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/3.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/4.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="title-3 pb-4 title-border">
                            <h2>Recent Popular</h2>
                            <h5 class="theme-color">Our Collection</h5>
                        </div>

                        <div class="product-slider round-arrow">
                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/1.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/2.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/3.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/4.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="title-3 pb-4 title-border">
                            <h2>Most Popular</h2>
                            <h5 class="theme-color">Our Collection</h5>
                        </div>

                        <div class="product-slider round-arrow">
                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/1.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/2.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/3.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product/details.html">
                                                <img src="assets/images/furniture-images/product/4.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product/details.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.php" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <style>
        .products-c .bg-size {
            background-position: center 0 !important;
        }
    </style>

    {{-- <section class="ratio_asos overflow-hidden pb-5">
        <div class="px-0 container-fluid p-sm-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="title-3 text-center">
                        <h2>Fashion Top Deals</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>
                </div>

                <div class="our-product products-c">
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/25.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$21</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Skater Multicolor Dress</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/26.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$21</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Skater Multicolor Dress</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/27.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$21</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Skater Multicolor Dress</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/28.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$21</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Skater Multicolor Dress</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/29.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$21</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Skater Multicolor Dress</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/30.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$21</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Skater Multicolor Dress</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/31.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$21</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Skater Multicolor Dress</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/32.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$21</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Skater Multicolor Dress</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
@endsection
