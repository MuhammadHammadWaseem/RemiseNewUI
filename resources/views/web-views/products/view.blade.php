@extends('layouts.front-end.app')

@section('title', \App\CPU\translate($data['data_from']) . ' ' . \App\CPU\translate('products'))

@push('css_or_js')
    <meta property="og:image" content="{{ asset('storage/app/public/company') }}/{{ $web_config['web_logo'] }}" />
    <meta property="og:title" content="Products of {{ $web_config['name'] }} " />
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:description" content="{!! substr($web_config['about']->value, 0, 100) !!}">

    <meta property="twitter:card" content="{{ asset('storage/app/public/company') }}/{{ $web_config['web_logo'] }}" />
    <meta property="twitter:title" content="Products of {{ $web_config['name'] }}" />
    <meta property="twitter:url" content="{{ env('APP_URL') }}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value, 0, 100) !!}">
@endpush

@section('content')

    @php($decimal_point_settings = \App\CPU\Helpers::get_business_settings('decimal_point_settings'))

    {{-- NEW --}}
    <div class="container-fluid">
        <div class="row more-about-us top-banner"
            style="background-image: url({{ asset('public/assets/Images/more-about-us-img.png') }});">

            <div class="col-lg-6">

                <div class="box-content">
                    <h4>Shopping</h4>
                    <h3>Start Fencing Shopping</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid product-container-main">
        <div class="row">

            <div class="col-lg-3" id="sidebar">

                <div class="filter-toggle-btn">

                    <button class="menu-btn ofcanvas-btn-toggle" onclick="toggleSidebar()">☰ Apply Filter</button>


                    <div id="sidebar-offcanvas" class="sidebar-offcanvas">

                        
                        <div class="filter-product-section">
                            <a href="javascript:void(0)" class="close-btn" onclick="toggleSidebar()">X</a>
                            <div class="cz-sidebar " id="shop-sidebar">
                                <div class="cz-sidebar-header ">
                                    <button class="close {{ Session::get('direction') === 'rtl' ? 'mr-auto' : 'ml-auto' }}"
                                        type="button" data-dismiss="sidebar" aria-label="Close"><span
                                            class="d-inline-block font-size-xs font-weight-normal align-middle"><span
                                                class="d-inline-block align-middle" aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="pb-0">
                                    <!-- Filter by price-->
                                    <div class="text-center">
                                        <div class="__cate-side-title border-bottom">
                                            <span class="widget-title "
                                                style="font-size: 25px; font-weight:600; font-family: 'BURBANKBIGCONDENSED-BOLD' !important;">{{ \App\CPU\translate('filter') }}
                                            </span>
                                        </div>
                                        <div class=" w-100 pt-4">
                                            <label class="for-shoting" for="sorting">
                                                <select class="form-control custom-select" id="searchByFilterValue">
                                                    <option selected>Choose category</option>
                                                    <option
                                                        value="{{ route('products', ['id' => $data['id'], 'data_from' => 'best-selling', 'page' => 1]) }}"
                                                        {{ isset($data['data_from']) != null ? ($data['data_from'] == 'best-selling' ? 'selected' : '') : '' }}>
                                                        {{ \App\CPU\translate('best_selling_product') }}</option>
                                                    <option
                                                        value="{{ route('products', ['id' => $data['id'], 'data_from' => 'top-rated', 'page' => 1]) }}"
                                                        {{ isset($data['data_from']) != null ? ($data['data_from'] == 'top-rated' ? 'selected' : '') : '' }}>
                                                        {{ \App\CPU\translate('top_rated') }}</option>
                                                    <option
                                                        value="{{ route('products', ['id' => $data['id'], 'data_from' => 'most-favorite', 'page' => 1]) }}"
                                                        {{ isset($data['data_from']) != null ? ($data['data_from'] == 'most-favorite' ? 'selected' : '') : '' }}>
                                                        {{ \App\CPU\translate('most_favorite') }}</option>
                                                    <option
                                                        value="{{ route('products', ['id' => $data['id'], 'data_from' => 'featured_deal', 'page' => 1]) }}"
                                                        {{ isset($data['data_from']) != null ? ($data['data_from'] == 'featured_deal' ? 'selected' : '') : '' }}>
                                                        {{ \App\CPU\translate('featured_deal') }}</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <!-- Filter by price-->
                                    <div class="text-center">
                                        <div class="__cate-side-title border-top border-bottom">
                                            <span class="widget-title "
                                                style="font-size: 25px; font-weight:600; font-family: 'BURBANKBIGCONDENSED-BOLD' !important;">{{ \App\CPU\translate('Price') }}
                                            </span>
                                        </div>
            
                                        <div class="d-flex justify-content-between align-items-center ">
                                            <div class="">
                                                <input
                                                    class="bg-white cz-filter-search form-control form-control-sm appended-form-control input-style"
                                                    type="number" min="0" max="1000000" id="min_price" placeholder="Min"
                                                    style="border-radius: 5px !important; padding: 0 5px !important; height: 40px;">
            
                                            </div>
                                            <div class="">
                                                <p class="m-0">{{ \App\CPU\translate('to') }}</p>
                                            </div>
                                            <div class="">
                                                <input min="100" max="1000000"
                                                    class="bg-white cz-filter-search form-control form-control-sm appended-form-control input-style"
                                                    type="number" id="max_price" placeholder="Max"
                                                    style="border-radius: 5px !important; padding: 0 5px !important; height: 40px; ">
            
                                            </div>
            
                                            <div class="d-flex justify-content-center align-items-center __number-filter-btn">
            
                                                <a class="icon_style" onclick="searchByPrice()">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
            
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                                <div>
                                    <div class="text-center">
                                        <div class="__cate-side-title border-top border-bottom">
                                            <span class="widget-title font-semibold"
                                                style="">{{ \App\CPU\translate('brands') }}</span>
                                        </div>
                                        <div class=" pb-0">
                                            <div class="input-group-overlay input-group-sm">
                                                <input
                                                    
                                                    placeholder="{{ __('Search by brands') }}"
                                                    class="__inline-38 cz-filter-search form-control form-control-sm appended-form-control"
                                                    type="text" id="search-brand">
                                                {{-- <div class="input-group-append-overlay">
                                                    <span class="input-group-text"
                                                        style="background: #FF061E !important; color: #fff !important;">
                                                        <i class="fa fa-search" aria-hidden="true" style="color:#fff;"></i>
                                                    </span>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <ul id="lista1" class="__brands-cate-wrap" data-simplebar
                                            data-simplebar-auto-hide="false">
                                            @foreach (\App\CPU\BrandManager::get_active_brands() as $brand)
                                                <div class="brand mt-2 for-brand-hover {{ Session::get('direction') === 'rtl' ? 'mr-2' : '' }}"
                                                    id="brand">
                                                    <li class="flex-between __inline-39"
                                                        onclick="location.href='{{ route('products', ['id' => $brand['id'], 'data_from' => 'brand', 'page' => 1]) }}'">
                                                        <div class="brandName">
                                                            {{ $brand['name'] }}
                                                        </div>
                                                        @if ($brand['brand_products_count'] > 0)
                                                            <div class="__brands-cate-badge">
                                                                <span class="">
                                                                    {{ $brand['brand_products_count'] }}
                                                                </span>
                                                            </div>
                                                        @endif
                                                    </li>
                                                </div>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-3 __cate-side-arrordion">
                                    <!-- Categories-->
                                    <div>
                                        <div class="text-center __cate-side-title border-top border-bottom">
                                            <span class="widget-title"
                                                style="font-size: 25px; font-weight: 500; font-family: 'BURBANKBIGCONDENSED-BOLD' !important;">{{ \App\CPU\translate('categories') }}</span>
                                        </div>
                                        @php($categories = \App\CPU\CategoryManager::parents())
                                        <div class="accordion mt-n1 __cate-side-price" id="shop-categories">
                                            @foreach ($categories as $category)
                                                <div>
                                                    <div class="card-header p-1 flex-between">
                                                        <div>
                                                            <label class=" cursor-pointer categoryOptions"
                                                                onclick="location.href='{{ route('products', ['id' => $category['id'], 'data_from' => 'category', 'page' => 1]) }}'">
                                                                {{ $category['name'] }}
                                                            </label>
                                                        </div>
                                                        <div class="px-2 cursor-pointer "
                                                            onclick="$('#collapse-{{ $category['id'] }}').slideToggle(300); if($(this).find('.pull-right').hasClass('active')){
                                                            $(this).find('.pull-right').removeClass('active');
                                                            $(this).find('.pull-right').text('+')
                                                        }else {$(this).find('.pull-right').addClass('active');
                                                            $(this).find('.pull-right').text('-')}
            
                                                            ">
                                                            <strong class="pull-right categoryOptions">
                                                                {{ $category->childes->count() > 0 ? '+' : '' }}
                                                            </strong>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0 {{ Session::get('direction') === 'rtl' ? 'mr-2' : 'ml-2' }}"
                                                        id="collapse-{{ $category['id'] }}" style="display: none">
                                                        @foreach ($category->childes as $child)
                                                            <div class=" for-hover-lable card-header p-1 flex-between">
                                                                <div>
                                                                    <label class="cursor-pointer"
                                                                        onclick="location.href='{{ route('products', ['id' => $child['id'], 'data_from' => 'category', 'page' => 1]) }}'">
                                                                        {{ $child['name'] }}
                                                                    </label>
                                                                </div>
                                                                <div class="px-2 cursor-pointer"
                                                                    onclick="$('#collapse-{{ $child['id'] }}').slideToggle(300); if($(this).find('.pull-right').hasClass('active')){
                                                            $(this).find('.pull-right').removeClass('active');
                                                            $(this).find('.pull-right').text('+')
                                                        }else {$(this).find('.pull-right').addClass('active');
                                                            $(this).find('.pull-right').text('-')}">
                                                                    <strong class="pull-right">
                                                                        {{ $child->childes->count() > 0 ? '+' : '' }}
                                                                    </strong>
                                                                </div>
                                                            </div>
                                                            <div class="card-body p-0 {{ Session::get('direction') === 'rtl' ? 'mr-2' : 'ml-2' }}"
                                                                id="collapse-{{ $child['id'] }}" style="display: none">
                                                                @foreach ($child->childes as $ch)
                                                                    <div class="card-header p-1">
                                                                        <label class="for-hover-lable d-block cursor-pointer text-left"
                                                                            onclick="location.href='{{ route('products', ['id' => $ch['id'], 'data_from' => 'category', 'page' => 1]) }}'">{{ $ch['name'] }}</label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="filter-product-section display-offcancas">
                    <div class="cz-sidebar " id="shop-sidebar">
                        <div class="cz-sidebar-header ">
                            <button class="close {{ Session::get('direction') === 'rtl' ? 'mr-auto' : 'ml-auto' }}"
                                type="button" data-dismiss="sidebar" aria-label="Close"><span
                                    class="d-inline-block font-size-xs font-weight-normal align-middle"><span
                                        class="d-inline-block align-middle" aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="pb-0">
                            <!-- Filter by price-->
                            <div class="text-center">
                                <div class="__cate-side-title border-bottom">
                                    <span class="widget-title "
                                        style="font-size: 25px; font-weight:600; font-family: 'BURBANKBIGCONDENSED-BOLD' !important;">{{ \App\CPU\translate('filter') }}
                                    </span>
                                </div>
                                <div class=" w-100 pt-4">
                                    <label class="for-shoting" for="sorting">
                                        <select class="form-control custom-select" id="searchByFilterValue">
                                            <option selected>Choose category</option>
                                            <option
                                                value="{{ route('products', ['id' => $data['id'], 'data_from' => 'best-selling', 'page' => 1]) }}"
                                                {{ isset($data['data_from']) != null ? ($data['data_from'] == 'best-selling' ? 'selected' : '') : '' }}>
                                                {{ \App\CPU\translate('best_selling_product') }}</option>
                                            <option
                                                value="{{ route('products', ['id' => $data['id'], 'data_from' => 'top-rated', 'page' => 1]) }}"
                                                {{ isset($data['data_from']) != null ? ($data['data_from'] == 'top-rated' ? 'selected' : '') : '' }}>
                                                {{ \App\CPU\translate('top_rated') }}</option>
                                            <option
                                                value="{{ route('products', ['id' => $data['id'], 'data_from' => 'most-favorite', 'page' => 1]) }}"
                                                {{ isset($data['data_from']) != null ? ($data['data_from'] == 'most-favorite' ? 'selected' : '') : '' }}>
                                                {{ \App\CPU\translate('most_favorite') }}</option>
                                            <option
                                                value="{{ route('products', ['id' => $data['id'], 'data_from' => 'featured_deal', 'page' => 1]) }}"
                                                {{ isset($data['data_from']) != null ? ($data['data_from'] == 'featured_deal' ? 'selected' : '') : '' }}>
                                                {{ \App\CPU\translate('featured_deal') }}</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <!-- Filter by price-->
                            <div class="text-center">
                                <div class="__cate-side-title border-top border-bottom">
                                    <span class="widget-title "
                                        style="font-size: 25px; font-weight:600; font-family: 'BURBANKBIGCONDENSED-BOLD' !important;">{{ \App\CPU\translate('Price') }}
                                    </span>
                                </div>
    
                                <div class="d-flex justify-content-between align-items-center ">
                                    <div class="">
                                        <input
                                            class="bg-white cz-filter-search form-control form-control-sm appended-form-control input-style"
                                            type="number" min="0" max="1000000" id="min_price" placeholder="Min"
                                            style="border-radius: 5px !important; padding: 0 5px !important; height: 40px;">
    
                                    </div>
                                    <div class="">
                                        <p class="m-0">{{ \App\CPU\translate('to') }}</p>
                                    </div>
                                    <div class="">
                                        <input min="100" max="1000000"
                                            class="bg-white cz-filter-search form-control form-control-sm appended-form-control input-style"
                                            type="number" id="max_price" placeholder="Max"
                                            style="border-radius: 5px !important; padding: 0 5px !important; height: 40px; ">
    
                                    </div>
    
                                    <div class="d-flex justify-content-center align-items-center __number-filter-btn">
    
                                        <a class="icon_style" onclick="searchByPrice()">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </a>
    
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        <div>
                            <div class="text-center">
                                <div class="__cate-side-title border-top border-bottom">
                                    <span class="widget-title font-semibold"
                                        style="">{{ \App\CPU\translate('brands') }}</span>
                                </div>
                                <div class=" pb-0">
                                    <div class="input-group-overlay input-group-sm">
                                        <input
                                            
                                            placeholder="{{ __('Search by brands') }}"
                                            class="__inline-38 cz-filter-search form-control form-control-sm appended-form-control"
                                            type="text" id="search-brand">
                                        {{-- <div class="input-group-append-overlay">
                                            <span class="input-group-text"
                                                style="background: #FF061E !important; color: #fff !important;">
                                                <i class="fa fa-search" aria-hidden="true" style="color:#fff;"></i>
                                            </span>
                                        </div> --}}
                                    </div>
                                </div>
                                <ul id="lista1" class="__brands-cate-wrap" data-simplebar
                                    data-simplebar-auto-hide="false">
                                    @foreach (\App\CPU\BrandManager::get_active_brands() as $brand)
                                        <div class="brand mt-2 for-brand-hover {{ Session::get('direction') === 'rtl' ? 'mr-2' : '' }}"
                                            id="brand">
                                            <li class="flex-between __inline-39"
                                                onclick="location.href='{{ route('products', ['id' => $brand['id'], 'data_from' => 'brand', 'page' => 1]) }}'">
                                                <div class="brandName">
                                                    {{ $brand['name'] }}
                                                </div>
                                                @if ($brand['brand_products_count'] > 0)
                                                    <div class="__brands-cate-badge">
                                                        <span class="">
                                                            {{ $brand['brand_products_count'] }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </li>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="mt-3 __cate-side-arrordion">
                            <!-- Categories-->
                            <div>
                                <div class="text-center __cate-side-title border-top border-bottom">
                                    <span class="widget-title"
                                        style="font-size: 25px; font-weight: 500; font-family: 'BURBANKBIGCONDENSED-BOLD' !important;">{{ \App\CPU\translate('categories') }}</span>
                                </div>
                                @php($categories = \App\CPU\CategoryManager::parents())
                                <div class="accordion mt-n1 __cate-side-price" id="shop-categories">
                                    @foreach ($categories as $category)
                                        <div>
                                            <div class="card-header p-1 flex-between">
                                                <div>
                                                    <label class=" cursor-pointer categoryOptions"
                                                        onclick="location.href='{{ route('products', ['id' => $category['id'], 'data_from' => 'category', 'page' => 1]) }}'">
                                                        {{ $category['name'] }}
                                                    </label>
                                                </div>
                                                <div class="px-2 cursor-pointer "
                                                    onclick="$('#collapse-{{ $category['id'] }}').slideToggle(300); if($(this).find('.pull-right').hasClass('active')){
                                                    $(this).find('.pull-right').removeClass('active');
                                                    $(this).find('.pull-right').text('+')
                                                }else {$(this).find('.pull-right').addClass('active');
                                                    $(this).find('.pull-right').text('-')}
    
                                                    ">
                                                    <strong class="pull-right categoryOptions">
                                                        {{ $category->childes->count() > 0 ? '+' : '' }}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 {{ Session::get('direction') === 'rtl' ? 'mr-2' : 'ml-2' }}"
                                                id="collapse-{{ $category['id'] }}" style="display: none">
                                                @foreach ($category->childes as $child)
                                                    <div class=" for-hover-lable card-header p-1 flex-between">
                                                        <div>
                                                            <label class="cursor-pointer"
                                                                onclick="location.href='{{ route('products', ['id' => $child['id'], 'data_from' => 'category', 'page' => 1]) }}'">
                                                                {{ $child['name'] }}
                                                            </label>
                                                        </div>
                                                        <div class="px-2 cursor-pointer"
                                                            onclick="$('#collapse-{{ $child['id'] }}').slideToggle(300); if($(this).find('.pull-right').hasClass('active')){
                                                    $(this).find('.pull-right').removeClass('active');
                                                    $(this).find('.pull-right').text('+')
                                                }else {$(this).find('.pull-right').addClass('active');
                                                    $(this).find('.pull-right').text('-')}">
                                                            <strong class="pull-right">
                                                                {{ $child->childes->count() > 0 ? '+' : '' }}
                                                            </strong>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0 {{ Session::get('direction') === 'rtl' ? 'mr-2' : 'ml-2' }}"
                                                        id="collapse-{{ $child['id'] }}" style="display: none">
                                                        @foreach ($child->childes as $ch)
                                                            <div class="card-header p-1">
                                                                <label class="for-hover-lable d-block cursor-pointer text-left"
                                                                    onclick="location.href='{{ route('products', ['id' => $ch['id'], 'data_from' => 'category', 'page' => 1]) }}'">{{ $ch['name'] }}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-9" id="product-main">
                <div class="two-thing-spacing">
                    <h3>{{ \App\CPU\translate(str_replace('_', ' ', $data['data_from'])) }}
                        {{ \App\CPU\translate('products') }} {{ isset($brand_name) ? '(' . $brand_name . ')' : '' }}</h3>
                    <div class="box-styling flex-end">
                        <a href="#" class="btn t-btn">Seller<svg width="24" height="25" viewBox="0 0 24 25"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.293 17.5958L12.707 19.0098L19.414 12.3028L12.707 5.59576L11.293 7.00976L15.586 11.3028H6V13.3028H15.586L11.293 17.5958Z"
                                    fill="#2A2A2A" />
                            </svg>
                        </a>

                        <a href="#" class="btn t-btn">See All Products<svg width="24" height="25"
                                viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.293 17.5958L12.707 19.0098L19.414 12.3028L12.707 5.59576L11.293 7.00976L15.586 11.3028H6V13.3028H15.586L11.293 17.5958Z"
                                    fill="#2A2A2A" />
                            </svg>
                        </a>
                    </div>
                </div>
                @if (count($products) > 0)
                    <div class="row mt-3 ml-1 mr-1" id="ajax-products">
                        <div class="product-grid-container">
                            @include('web-views.products._ajax-products', [
                                'products' => $products,
                                'decimal_point_settings' => $decimal_point_settings,
                            ])
                        </div>
                    </div>
                @else
                    <div class="text-center pt-5">
                        <h2>{{ \App\CPU\translate('No Product Found') }}</h2>
                    </div>
                @endif


                {{-- <div class="panignation-box">

                    <div class="pagination" actpage="1">
                        <a href="#!-1" class="page-link prev"><svg width="30" height="30" viewBox="0 0 30 30"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6162 7.86621L9.48242 15L16.6162 22.1337L18.3837 20.3662L13.0174 15L18.3837 9.63371L16.6162 7.86621Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="#!1" class="page-link pagination-active">01</a>
                        <a href="#!2" class="page-link dots">...</a>
                        <a href="#!10" class="page-link">10</a>
                        <a href="#!+1" class="page-link next"><svg width="30" height="30" viewBox="0 0 30 30"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.3837 22.1337L20.5175 15L13.3837 7.86621L11.6162 9.63371L16.9825 15L11.6162 20.3662L13.3837 22.1337Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>

                </div> --}}

            </div>

        </div>
    </div>
    {{-- NEW --}}


    


@endsection

@push('script')
    <script>
        
  // offcanvas shop

  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar-offcanvas");
    const mainContent = document.getElementById("main-content");

    if (sidebar.style.width === "320px") {
        sidebar.style.width = "0";
    } else {
        sidebar.style.width = "320px";
    }
}
        function openNav() {
            document.getElementById("mySidepanel").style.width = "70%";
            document.getElementById("mySidepanel").style.height = "100vh";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

        function filter(value) {
            $.get({
                url: '{{ url('/') }}/products',
                data: {
                    id: '{{ $data['id'] }}',
                    name: '{{ $data['name'] }}',
                    data_from: '{{ $data['data_from'] }}',
                    min_price: '{{ $data['min_price'] }}',
                    max_price: '{{ $data['max_price'] }}',
                    sort_by: value
                },
                dataType: 'json',
                beforeSend: function() {
                    $('#loading').show();
                },
                success: function(response) {
                    $('#ajax-products').html(response.view);
                },
                complete: function() {
                    $('#loading').hide();
                },
            });
        }

        function searchByPrice() {
            let min = $('#min_price').val();
            let max = $('#max_price').val();
            $.get({
                url: '{{ url('/') }}/products',
                data: {
                    id: '{{ $data['id'] }}',
                    name: '{{ $data['name'] }}',
                    data_from: '{{ $data['data_from'] }}',
                    sort_by: '{{ $data['sort_by'] }}',
                    min_price: min,
                    max_price: max,
                },
                dataType: 'json',
                beforeSend: function() {
                    $('#loading').show();
                },
                success: function(response) {
                    $('#ajax-products').html(response.view);
                    $('#paginator-ajax').html(response.paginator);
                    console.log(response.total_product);
                    $('#price-filter-count').text(response.total_product +
                        ' {{ \App\CPU\translate('items found') }}')
                },
                complete: function() {
                    $('#loading').hide();
                },
            });
        }

        $('#searchByFilterValue, #searchByFilterValue-m').change(function() {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });

        $("#search-brand").on("keyup", function() {
            var value = this.value.toLowerCase().trim();
            $("#lista1 div>li").show().filter(function() {
                return $(this).text().toLowerCase().trim().indexOf(value) == -1;
            }).hide();
        });
    </script>
@endpush
