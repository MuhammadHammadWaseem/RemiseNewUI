@extends('layouts.front-end.app')
@section('title', $web_config['name']->value . ' ' . \App\CPU\translate('Online Shopping') . ' | ' . $web_config['name']->value . ' ' . \App\CPU\translate('Ecommerce'))

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Remise</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    </head>
    <body>
        @php($decimal_point_settings = !empty(\App\CPU\Helpers::get_business_settings('decimal_point_settings')) ? \App\CPU\Helpers::get_business_settings('decimal_point_settings') : 0)
    @section('content')
        <div class="container">
            <div class="row rowDiv">
                @php($categories = \App\Model\Category::with(['childes.childes'])->where('position', 0)->priority()->paginate(11))
                <ul style="margin-left: 5px"
                    class="navbar-nav mega-nav pr-2 pl-2 toggleCat {{ Session::get('direction') === 'rtl' ? 'mr-2' : 'mr-2' }} d-none d-xl-block __mega-nav">
                    <li class="nav-item {{ !request()->is('/') ? 'dropdown' : '' }}">
                        <a class="nav-link  {{ Session::get('direction') === 'rtl' ? 'pr-0' : 'pl-0' }}"
                            href="#" data-toggle="dropdown"
                            style=" color: #fff !important; {{ request()->is('/') ? 'pointer-events: none' : '' }}">
                            <i class="czi-menu align-middle mt-n1 {{ Session::get('direction') === 'rtl' ? 'mr-2' : 'mr-2' }}"
                                style="color:#fff;"></i>
                            <span class="navCate fontt2"
                                style="text-transform: capitalize !important; color:#fff;">
                                {{ \App\CPU\translate('Browse Categories') }}
                            </span>
                        </a>
                        @if (request()->is('/'))
                            <ul class="dropdown-menu __dropdown-menu"
                                style="{{ Session::get('direction') === 'rtl' ? 'text-align: right;' : 'text-align: left;' }}padding-bottom: 32px!important; width: 107%;">
                                @foreach ($categories as $key => $category)
                                    @if ($key < 5)
                                        <li class="dropdown">
                                            <a class="dropdown-item flex-between paraentDrop" <?php if ($category->childes->count() > 0) {
                                                echo "data-toggle='dropdown'";
                                            } ?>
                                                href="javascript:"
                                                onclick="location.href='{{ route('products', ['id' => $category['id'], 'data_from' => 'category', 'page' => 1]) }}'">
                                                <div class="d-flex">

                                                    <span
                                                        class="w-0 flex-grow-1 childDrop {{ Session::get('direction') === 'rtl' ? 'pr-3' : 'pl-3' }}">{{ $category['name'] }}</span>
                                                    <i
                                                        class="czi-arrow-{{ Session::get('direction') === 'rtl' ? 'left' : 'right' }} __inline-15"></i>

                                                </div>
                                                @if ($category->childes->count() > 0)
                                                    <div>
                                                        <i class="czi-arrow-{{ Session::get('direction') === 'rtl' ? 'left' : 'right' }} __inline-15"
                                                            style="display:none;"></i>
                                                    </div>
                                                @endif
                                            </a>
                                            @if ($category->childes->count() > 0)
                                                <ul class="dropdown-menu"
                                                    style="right: 100%; text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
                                                    @foreach ($category['childes'] as $subCategory)
                                                        <li class="dropdown">
                                                            <a class="dropdown-item flex-between" <?php if ($subCategory->childes->count() > 0) {
                                                                echo "data-toggle='dropdown'";
                                                            } ?>
                                                                href="javascript:"
                                                                onclick="location.href='{{ route('products', ['id' => $subCategory['id'], 'data_from' => 'category', 'page' => 1]) }}'">
                                                                <div>
                                                                    <span
                                                                        class="{{ Session::get('direction') === 'rtl' ? 'pr-3' : 'pl-3' }}">{{ $subCategory['name'] }}</span>
                                                                </div>
                                                                @if ($subCategory->childes->count() > 0)
                                                                    <div>
                                                                        <i
                                                                            class="czi-arrow-{{ Session::get('direction') === 'rtl' ? 'left' : 'right' }} __inline-15"></i>
                                                                    </div>
                                                                @endif
                                                            </a>
                                                            @if ($subCategory->childes->count() > 0)
                                                                <ul class="dropdown-menu __r-100"
                                                                    style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
                                                                    @foreach ($subCategory['childes'] as $subSubCategory)
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="{{ route('products', ['id' => $subSubCategory['id'], 'data_from' => 'category', 'page' => 1]) }}">{{ $subSubCategory['name'] }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                                <li class="dropdown">
                                        <a class="dropdown-item text-capitalize text-center" href="{{ route('products', ['data_from' => 'latest']) }}"
                                        style="color: #FF061E; !important;">
                                        {{ \App\CPU\translate('view_more') }}

                                        <i
                                            class="czi-arrow-{{ Session::get('direction') === 'rtl' ? 'left' : 'right' }} __inline-15"></i>
                                    </a>
                                </li>

                            </ul>
                        @else
                            <ul class="dropdown-menu __dropdown-menu-2"
                                style="right: 0; text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
                                @foreach ($categories as $category)
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between <?php if ($category->childes->count() > 0) {
                                            echo "data-toggle='dropdown";
                                        } ?> " <?php if ($category->childes->count() > 0) {
                                            echo "data-toggle='dropdown'";
                                        } ?>
                                            href="javascript:"
                                            onclick="location.href='{{ route('products', ['id' => $category['id'], 'data_from' => 'category', 'page' => 1]) }}'">
                                            <div class="d-flex">
                                                <img src="{{ asset("storage/app/public/category/$category->icon") }}"
                                                    onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                                    class="__img-18">
                                                <span
                                                    class="w-0 flex-grow-1 {{ Session::get('direction') === 'rtl' ? 'pr-3' : 'pl-3' }}">{{ $category['name'] }}</span>
                                            </div>
                                            @if ($category->childes->count() > 0)
                                                <div>
                                                    <i
                                                        class="czi-arrow-{{ Session::get('direction') === 'rtl' ? 'left' : 'right' }} __inline-15"></i>
                                                </div>
                                            @endif
                                        </a>
                                        @if ($category->childes->count() > 0)
                                            <ul class="dropdown-menu __r-100"
                                                style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
                                                @foreach ($category['childes'] as $subCategory)
                                                    <li class="dropdown">
                                                        <a class="dropdown-item flex-between <?php if ($subCategory->childes->count() > 0) {
                                                            echo "data-toggle='dropdown";
                                                        } ?> "
                                                            <?php if ($subCategory->childes->count() > 0) {
                                                                echo "data-toggle='dropdown'";
                                                            } ?> href="javascript:"
                                                            onclick="location.href='{{ route('products', ['id' => $subCategory['id'], 'data_from' => 'category', 'page' => 1]) }}'">
                                                            <div>
                                                                <span
                                                                    class="{{ Session::get('direction') === 'rtl' ? 'pr-3' : 'pl-3' }}">{{ $subCategory['name'] }}</span>
                                                            </div>
                                                            @if ($subCategory->childes->count() > 0)
                                                                <div>
                                                                    <i
                                                                        class="czi-arrow-{{ Session::get('direction') === 'rtl' ? 'left' : 'right' }} __inline-15"></i>
                                                                </div>
                                                            @endif
                                                        </a>
                                                        @if ($subCategory->childes->count() > 0)
                                                            <ul class="dropdown-menu __r-100"
                                                                style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
                                                                @foreach ($subCategory['childes'] as $subSubCategory)
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href="{{ route('products', ['id' => $subSubCategory['id'], 'data_from' => 'category', 'page' => 1]) }}">{{ $subSubCategory['name'] }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                                <li class="dropdown">
                                    <a class="dropdown-item d-block text-center" href="{{ route('categories') }}"
                                        style="color: {{ $web_config['primary_color'] }} !important;">
                                        {{ \App\CPU\translate('view_more') }}

                                        <i class="czi-arrow-{{ Session::get('direction') === 'rtl' ? 'left' : 'right' }} __text-8px"
                                            style="background:none !important;color:{{ $web_config['primary_color'] }} !important;"></i>
                                    </a>
                                </li>
                            </ul>
                        @endif
                    </li>
                </ul>


                <div class="col col-lg-9 col-md-12 col-sm-12">

                    <div class="innerArea4">

                        <div class="row mx-auto">

                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12 bann1 hideDeskMenu" style="margin-bottom: 10px; margin-left: 43px;">
                                <ul  class="navbar-nav nav_float"
                                    style="{{ Session::get('direction') === 'rtl' ? 'padding-right: 0px ' : '' }}">
                                    <li class="nav-item dropdown {{ request()->is('/') ? 'active' : '' }}">
                                        <a class="nav-link navLink fontt"
                                            href="{{ route('home') }}">{{ \App\CPU\translate('Home') }}</a>
                                    </li>

                                    @if (\App\Model\BusinessSetting::where(['type' => 'product_brand'])->first()->value)
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle navLink fontt" href="#"
                                                data-toggle="dropdown">{{ \App\CPU\translate("Today's Deals") }}</a>
                                            <ul class="dropdown-menu __dropdown-menu-sizing dropdown-menu-{{ Session::get('direction') === 'rtl' ? 'right' : 'left' }} scroll-bar"
                                                style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
                                                @foreach (\App\CPU\BrandManager::get_active_brands() as $brand)
                                                    <li class="__inline-17">
                                                        <div>
                                                            <a class="dropdown-item"
                                                                href="{{ route('products', ['id' => $brand['id'], 'data_from' => 'brand', 'page' => 1]) }}">
                                                                {{ $brand['name'] }}
                                                            </a>
                                                        </div>
                                                        <div class="align-baseline">
                                                            @if ($brand['brand_products_count'] > 0)
                                                                <span class="count-value px-2">(
                                                                    {{ $brand['brand_products_count'] }} )</span>
                                                            @endif
                                                        </div>
                                                    </li>
                                                @endforeach
                                                <li class="__inline-17">
                                                    <div>
                                                        <a class="dropdown-item " href="{{ route('brands') }}"
                                                            style="color: {{ $web_config['primary_color'] }} !important;">
                                                            {{ \App\CPU\translate('View_more') }}
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                    @php($discount_product = App\Model\Product::with(['reviews'])->active()->where('discount', '!=', 0)->count())
                                    @if ($discount_product > 0)
                                        <li class="nav-item dropdown {{ request()->is('/') ? 'active' : '' }}">
                                            <a class="nav-link text-capitalize navLink fontt"
                                                href="{{ route('products', ['data_from' => 'discounted', 'page' => 1]) }}">{{ \App\CPU\translate('Trending Products') }}</a>
                                        </li>
                                    @endif

                                    @php($business_mode = \App\CPU\Helpers::get_business_settings('business_mode'))
                                    @if ($business_mode == 'multi')
                                        <li class="nav-item dropdown {{ request()->is('/') ? 'active' : '' }}">
                                            <a class="nav-link navLink fontt"
                                                href="{{ route('sellers') }}">{{ \App\CPU\translate('Special Offers') }}</a>
                                        </li>

                                        @php($seller_registration = \App\Model\BusinessSetting::where(['type' => 'seller_registration'])->first()->value)
                                        @if ($seller_registration)
                                            <li class="nav-item ">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle NAVFONTHOVER fontt " type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        style="padding-{{ Session::get('direction') === 'rtl' ? 'right' : 'left' }}: 0">
                                                        {{ \App\CPU\translate('Seller') }}
                                                        {{ \App\CPU\translate('zone') }}
                                                    </button>
                                                    <div class="dropdown-menu __dropdown-menu-3 __min-w-165px"
                                                        aria-labelledby="dropdownMenuButton"
                                                        style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
                                                        @if(!auth()->guard('seller')->check())
                                                        <a class="dropdown-item" href="{{ route('shop.apply') }}">
                                                            {{ \App\CPU\translate('Become a') }}
                                                            {{ \App\CPU\translate('Seller') }}
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="{{ route('seller.auth.login') }}">
                                                            {{ \App\CPU\translate('Seller') }}
                                                            {{ \App\CPU\translate('login') }}
                                                        </a>
                                                        @else
                                                            <a class="dropdown-item" href="{{ url('seller/dashboard') }}">
                                                                {{ \App\CPU\translate('Dashboard') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                            @php($main_banner = \App\Model\Banner::where('banner_type', 'Main Banner')->where('published', 1)->orderBy('id', 'desc')->get())
                            @if(count($main_banner) >2)

                            <div class="col col-lg-7 col-md-12 col-sm-12 col-12 bann1">
                                {{-- @foreach ($main_banner as $banner) --}}
                                <div class="d-flex justify-content-center" style="position:relative;">
                                    <div class="img1" style="  background-image:
                                    linear-gradient(90.38deg, rgba(0, 0, 0, 0.6) 2.19%, rgba(0, 0, 0, 0) 82.56%),
                                    url({{ asset('storage/app/public/banner') }}/{{ $main_banner[0]['photo'] }});  background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;">

                                        <div class="innerBody">
                                            <div class="heading">
                                                <h1>{{ $main_banner[0]['title'] }}</h1>
                                            </div>
                                            <div class="innerText">
                                                <p>{{ $main_banner[0]['description'] }}</p>

                                            </div>
                                            <div class="btnBody">
                                                <a href="{{ route('products', ['data_from' => 'latest']) }}"><button
                                                        class="btnShop">{{ App\CPU\translate('Shop Now') }}</button></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endforeach --}}
                            </div>

                            <div class="col col-lg-5 col-md-12 col-sm-12 col-12 bann1">
                                <div class="rightSide">
                                    <div class="img2" style="position: relative;         background-image:
                                     linear-gradient(89.95deg, #1E1E1E -22.83%, rgba(30, 30, 30, 0) 111.11%),
                                    url({{ asset('storage/app/public/banner') }}/{{ $main_banner[1]['photo'] }});
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-position: top center;">


                                        <div class="innerBody2">

                                            <div class="heading2">
                                                <h1>{{  $main_banner[1]['title'] }}</h1>
                                            </div>
                                            <div class="innerText2">
                                                <p>{{ $main_banner[1]['description'] }}</p>
                                            </div>
                                            <div class="priceBody2">
                                                <a href="{{ route('products', ['data_from' => 'latest']) }}" class="btnShopBan">{{ App\CPU\translate('Shop Now') }}</a>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="img3" style="position: relative;         background-image:
                                    linear-gradient(90.38deg, rgba(0, 0, 0, 0.6) 2.19%, rgba(0, 0, 0, 0) 82.56%),
                                    url({{ asset('storage/app/public/banner') }}/{{ $main_banner[2]['photo'] }});
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-position: top center;">

                                        <div class="innerBody3">

                                            <div class="heading3">
                                                <h1>{{ $main_banner[2]['title'] }}</h1>
                                            </div>
                                            <div class="innerText3">
                                                <p>{{ $main_banner[2]['description'] }}</p>
                                            </div>
                                            <div class="priceBody3">
                                                {{-- <p>$200 <span>$200</span></p> --}}

                                                <a href="{{ route('products', ['data_from' => 'latest']) }}" class="btnShopBan">{{ App\CPU\translate('Shop Now') }}</a>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>


                            @elseif(count($main_banner) >1)
                            <div class="col col-lg-7 col-md-12 col-sm-12 col-12 bann1">

                                    <div class="img1 " style="position:relative;  background-image:
linear-gradient(90.38deg, rgba(0, 0, 0, 0.6) 2.19%, rgba(0, 0, 0, 0) 82.56%),
                                    url({{ asset('storage/app/public/banner') }}/{{ $main_banner[0]['photo'] }});  background-size: cover;
        background-repeat: no-repeat;
        background-position: top center; ">

                                        <div class="innerBody">
                                            <div class="heading">
                                                <h1>{{ $main_banner[0]['title'] }}</h1>
                                            </div>
                                            <div class="innerText">
                                                <p>Vorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit Nunc vulputate libero et.</p>

                                            </div>
                                            <div class="btnBody">
                                                <a href="{{ route('products', ['data_from' => 'latest']) }}"><button
                                                        class="btnShop">{{ App\CPU\translate('Shop Now') }}</button></a>

                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="col col-lg-5 col-md-12 col-sm-12 col-12 bann1">
                                <div class="rightSide">
                                    <div class="img25" style="position: relative;     background-image:
                                     linear-gradient(89.95deg, #1E1E1E -22.83%, rgba(30, 30, 30, 0) 111.11%),
                                    url({{ asset('storage/app/public/banner') }}/{{ $main_banner[1]['photo'] }});
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-position: top center;">


                                        <div class="innerBody25">

                                            <div class="heading2">
                                                <h1>Sorem ipsum dolor</h1>
                                            </div>
                                            <div class="innerText2">
                                                <p>vorem ipsum dolor sit.</p>
                                            </div>
                                            <div class="priceBody2">
                                                <a href="{{ route('products', ['data_from' => 'latest']) }}" class="btnShopBan">{{ App\CPU\translate('Shop Now') }}</a>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>

                            @elseif(count($main_banner) >0)
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12 bann1">
                                {{-- @foreach ($main_banner as $banner) --}}

                                    <div class="imgOne" style="position:relative;  background-image:
                                   linear-gradient(90.38deg, rgba(0, 0, 0, 0.6) 2.19%, rgba(0, 0, 0, 0) 82.56%),
                                    url({{ asset('storage/app/public/banner') }}/{{ $main_banner[0]['photo'] }});  background-size: cover;
        background-repeat: no-repeat;
        background-position: top center; ">
                                        <div class="innerBody525">
                                            <div class="heading">
                                                <h1>{{ $main_banner[0]['title'] }}</h1>
                                            </div>
                                            <div class="innerText">
                                                <p>Vorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit Nunc vulputate libero et.</p>

                                            </div>
                                            <div class="btnBody">
                                                <a href="{{ route('products', ['data_from' => 'latest']) }}"><button
                                                        class="btnShop">{{ App\CPU\translate('Shop Now') }}</button></a>

                                            </div>
                                        </div>
                                    </div>
                            </div>

                            @else

                            @endif
                        </div>
                    </div>
                    <!-- </div> -->




                </div>
            </div>

        </div>


        </div>

        <br><br>

        <div class="container px-auto">
            <div class="row mx-auto">

                <div class="col-9 px-0">
                    <h1 class="shopHeading">{{ \App\CPU\translate('Shop By Category') }}</h1>
                </div>
                <div class="col-3 px-0">
                    <div class="innea5">
                        <a class=" viewBtn" href="{{ route('products', ['data_from' => 'latest']) }}">{{ \App\CPU\translate('View All') }} ></i></a>

                    </div>

                </div>

            </div>
        </div>


        <br><br>
        <div class="container">
            <div class="cardsContainer d-flex justify-content-center ">
                <div class="row">

                    <div class="col-12">
                        <div class="innerArea6">
                            <div class="inner1 cardOne">

                                @foreach ($categories as $key => $category)
                                    @if ($key < 7)

                                            <a
                                                href="{{ route('products', ['id' => $category['id'], 'data_from' => 'category', 'page' => 1]) }}">
                                                <div class="inner2">
                                                    <div class="card"
                                                        style=" background: linear-gradient(to bottom, rgba(245, 246, 252, 0.048), rgba(0, 0, 0, 0.5)), url({{ asset("storage/app/public/category/$category->icon") }}); ">
                                                        <h2 class="cardText1">{{ Str::limit($category->name, 12) }}</h2>
                                                    </div>
                                                </div>
                                            </a>

                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>


                </div>


            </div>
        </div>


        <br><br><br>

        <br>

        <div class="container px-auto">
            <div class="row mx-auto">
                <div class="col-12">
                    <div class="innerArea6">
                        <div class="inner1 cardOne">
                            @foreach ($latest_products as $key => $product)
                                @if ($key < 4)

                                            <div class="inner122">

                                                    @if (isset($product))
                                                        @php($overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews))
                                                        <div class="flash_deal_product rtl"
                                                            onclick="location.href='{{ route('product', $product->slug) }}'">
                                                            <div class=" d-flex flex-column">
                                                                <div class="d-flex align-items-center justify-content-center"
                                                                   >
                                                                    <div class="flash-deals-background-image">

                                                                        <a href="{{route('product',$product->slug)}}">

                                                                        {{-- <img class="__img-125px"
                                                                            src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product['thumbnail'] }}"
                                                                            onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'" /> --}}
                                                                        </a>

                                                                        </div>
                                                                </div>
                                                                <div
                                                                    class="flash_deal_product_details" style="width: 100%">
                                                                    <div class="d-flex mt-4">
                                                                        <div>
                                                                            <span class="flash-product-title" style="

                                                                            font-family: 'BURBANKBIGCONDENSED-BOLD' !important;

                                                                            color: #000;
                                                                            font-size: 26px;
                                                                            font-weight: 600;">
                                                                                {{ $product['name'] }}
                                                                            </span>
                                                                        </div>
                                                                        <div class="d-flex" style="width: 47%;">
                                                                            <div>
                                                                                @if ($product->discount > 0)
                                                                                    <p
                                                                                    style="
                                                                                        font-family: 'BURBANKBIGCONDENSED-BOLD' !important;

                                                                                    font-size: 18px!important; color: #1E1E1E99; !important; font-weight:700;    text-decoration: line-through;
                                                                                    text-decoration-color: red; text-decoration-thickness:1.5px;">
                                                                                    </p>
                                                                                @endif
                                                                            </div>
                                                                            <div class="flash-product-price">

                                                                                <p style="color: red;
                                                                                    font-family: 'BURBANKBIGCONDENSED-BOLD' !important;

                                                                                font-size: 30px;
                                                                                font-weight: 800;">
                                                                                    {{ \App\CPU\Helpers::currency_converter($product->unit_price - \App\CPU\Helpers::get_product_discount($product, $product->unit_price)) }}

                                                                                </p>

                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
        <br><br><br>

        <div class="container px-auto">
            <div class="row">
                <div class="col-12">
                    <div class="innerArea5">
                    </div>
                </div>
            </div>
        </div>


        <br>
        
        <br><br>

        <div class="container px-auto mx-auto">
            <div class="row mx-auto">
                <div class="col-12">
                    <h1 class="shopHeading">{{ App\CPU\Translate('For You') }}</h1>
                    <div class="innerArea6">
                        <div class="inner1 cardOne forYOU">
                            @foreach ($latest_products as $key => $product)
                                @if ($key < 12)

                                            <div class="inner122">

                                                    @if (isset($product))
                                                        @php($overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews))
                                                        <div class="flash_deal_product rtl"
                                                            onclick="location.href='{{ route('product', $product->slug) }}'">
                                                            <div class=" d-flex flex-column">
                                                                <div class="d-flex align-items-center justify-content-center"
                                                                    >
                                                                    <div class="flash-deals-background-image">
                                                                        <a href="{{route('product',$product->slug)}}">
                                                                        {{-- <img class="__img-125px"
                                                                            src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product['thumbnail'] }}"
                                                                            onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'" /> --}}

                                                                        </a>
                                                                        </div>
                                                                </div>

                                                                <div class="flash_deal_product_details" style="width: 100%">
                                                                    <div class="d-flex mt-4">
                                                                        <div>
                                                                            <div>
                                                                                <span class="flash-product-title"

                                                                                style="
                                                                                font-family: 'BURBANKBIGCONDENSED-BOLD' !important;
                                                                                color: #000;
                                                                                font-size: 26px;
                                                                                font-weight: 600;">
                                                                                    {{ $product['name'] }}
                                                                                </span>
                                                                            </div>
                                                                            <div class="flash-product-review">




                                                                                @for ($inc = 0; $inc < 5; $inc++)
                                                                                @if ($inc < $overallRating[0])
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#ffc700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                                        </svg>
                                                                                @else


                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#1E1E1E33" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                                </svg>
                                                                                @endif
                                                                            @endfor
                                                                                <label class="badge-style2">
                                                                                    ( {{ $product->reviews->count() }} )
                                                                                </label>
                                                                            </div>

                                                                        </div>

                                                                        <div class="d-flex" style="width: 47%;">
                                                                            <div>
                                                                                @if ($product->discount > 0)
                                                                                    <p
                                                                                    style="
                                                                                        font-family: 'BURBANKBIGCONDENSED-BOLD' !important;

                                                                                    font-size: 18px!important; color: #1E1E1E99; !important; font-weight:700;    text-decoration: line-through;
                                                                                    text-decoration-color: red; text-decoration-thickness:1.5px;">
                                                                                    </p>
                                                                                @endif
                                                                            </div>
                                                                            <div class="flash-product-price">

                                                                                <p style="color: red;
                                                                                    font-family: 'BURBANKBIGCONDENSED-BOLD' !important;

                                                                                font-size: 30px;
                                                                                font-weight: 800;">
                                                                                    {{ \App\CPU\Helpers::currency_converter($product->unit_price - \App\CPU\Helpers::get_product_discount($product, $product->unit_price)) }}

                                                                                </p>

                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                </div>

                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <br><br>

        <div class="container px-auto">
            <div class="row mx-auto">
                <div class="col-12">
                    <div class="innerArea9">
                        <a href="{{ route('products', ['data_from' => 'latest']) }}"><button class="loadMore">
                                {{ App\CPU\translate('Load More') }}
                            </button></a>
                    </div>

                </div>
            </div>
        </div>

        <br>
        <br>
        </div>

    @endsection
</body>

</html>

@push('script')
@endpush
