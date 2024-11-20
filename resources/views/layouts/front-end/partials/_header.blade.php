<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remise Fencing</title>
     <link rel="stylesheet" media="screen" href="{{asset('public/assets/front-end')}}/css/new_style.css">
</head>


@php($announcement = \App\CPU\Helpers::get_business_settings('announcement'))
@if (isset($announcement) && $announcement['status'] == 1)
    <div class="text-center position-relative px-4 py-1" id="anouncement"
        style="background-color: {{ $announcement['color'] }};color:{{ $announcement['text_color'] }}">
        <span>{{ $announcement['announcement'] }} </span>
        <span class="__close-anouncement" onclick="myFunction()">X</span>
    </div>
@endif


 <div class="bloom-mobile-header container-fluid">
  <div class="toggle-nav">
      <i class="material-icons ico-menu" id="openNavButton"><i class="fa fa-bars" aria-hidden="true" style="color: #777777;"></i>
      </i>
      <i class="material-icons ico-close" id="closeNavButton"><i class="fa fa-times" aria-hidden="true" style="color: #777777;"></i>
      </i>
  </div>
  <div class="logo">
      <a href="{{ route('home') }}"><img class="footLogo" src="{{ asset('storage/app/public/company') . '/' . $web_config['web_logo']->value }}"
                                onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                alt="{{ $web_config['name']->value }}"></a>
  </div>
  
  <ol class="nav">
    <li class="item mobile-home-active">
      <a href="{{ route('home') }}">{{ \App\CPU\translate('Home') }}</a>
    </li>
    @if (\App\Model\BusinessSetting::where(['type' => 'product_brand'])->first()->value)
      <li class="item deals-drop-mobile">
        <a href="#">{{ \App\CPU\translate("Today's Deals") }}<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.43945 7.78133L12.7325 12.0743L8.43945 16.3673L9.85345 17.7813L15.5605 12.0743L9.85345 6.36733L8.43945 7.78133Z" fill="#FF061E"/>
            </svg></a>

          <ol class="deals-drop-hover-mobile">
              @foreach (\App\CPU\BrandManager::get_active_brands() as $brand)
                  <li class="item">
                      <div>
                          <a href="{{ route('products', ['id' => $brand['id'], 'data_from' => 'brand', 'page' => 1]) }}">
                              {{ $brand['name'] }}
                          </a>
                      </div>
                      <div>
                          @if ($brand['brand_products_count'] > 0)
                              <span>({{ $brand['brand_products_count'] }})</span>
                          @endif
                      </div>
                  </li>
              @endforeach
              <li class="item"><a href="{{ route('brands') }}">{{ \App\CPU\translate('View_more') }}</a></li>
          </ol>

      </li>
    @endif

    @php($discount_product = App\Model\Product::with(['reviews'])->active()->where('discount', '!=', 0)->count())
    @if ($discount_product > 0)
    <li class="item">
        <a href="{{ route('products', ['data_from' => 'discounted', 'page' => 1]) }}">{{ \App\CPU\translate('Trending Products') }}</a>
    </li>
    @endif


    @php($business_mode = \App\CPU\Helpers::get_business_settings('business_mode'))
    @if ($business_mode == 'multi')
        <li class="item">
            <a href="{{ route('sellers') }}">{{ \App\CPU\translate('Special Offers') }}</a>
        </li>
    @endif

    <li class="item">
      <a href="{{route('shop-cart')}}">{{ App\CPU\translate('Cart') }}</a>
    </li>
  </ol>
  
  @php($seller_registration = \App\Model\BusinessSetting::where(['type' => 'seller_registration'])->first()->value)
  @if ($seller_registration)
  <div class="Seller-container">
      <div class="seller-drop">
          <a href="#" class="btn t-btn seller_zone">{{ \App\CPU\translate('Seller') }}{{ \App\CPU\translate('zone') }}</a>
          <ul class="seller-drop-hover">
              <li><a href="{{ route('shop.apply') }}">{{ \App\CPU\translate('Become a') }}
                  {{ \App\CPU\translate('Seller') }}</a></li>
              <li><a href="{{ route('seller.auth.login') }}">{{ \App\CPU\translate('Seller') }}
                  {{ \App\CPU\translate('login') }}</a></li>
          </ul>
      </div>
  </div>
  @endif

</div>
{{-- NEW HEADER --}}
<header class="custom-dextop-header">
  <div class="container-fluid upper_top_header">
      <div class="row">
          
          <div class="col-lg-6 ">
              <div class="seller_btn_header">
                  <a href="{{ url('seller/dashboard') }}">{{ \App\CPU\translate('Sell On Remise') }}</a>
              </div>
          </div>

          <div class="col-lg-6">
              <div class="top_info_header">
                  <ul>
                      <li>
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M17.707 12.293C17.6142 12.2 17.504 12.1263 17.3827 12.076C17.2614 12.0257 17.1314 11.9998 17 11.9998C16.8687 11.9998 16.7387 12.0257 16.6173 12.076C16.496 12.1263 16.3858 12.2 16.293 12.293L14.699 13.887C13.96 13.667 12.581 13.167 11.707 12.293C10.833 11.419 10.333 10.04 10.113 9.30099L11.707 7.70699C11.8 7.6142 11.8737 7.504 11.924 7.38268C11.9743 7.26137 12.0002 7.13132 12.0002 6.99999C12.0002 6.86865 11.9743 6.73861 11.924 6.61729C11.8737 6.49598 11.8 6.38578 11.707 6.29299L7.70703 2.29299C7.61424 2.20004 7.50404 2.1263 7.38272 2.07599C7.26141 2.02568 7.13136 1.99979 7.00003 1.99979C6.8687 1.99979 6.73865 2.02568 6.61734 2.07599C6.49602 2.1263 6.38582 2.20004 6.29303 2.29299L3.58103 5.00499C3.20103 5.38499 2.98703 5.90699 2.99503 6.43999C3.01803 7.86399 3.39503 12.81 7.29303 16.708C11.191 20.606 16.137 20.982 17.562 21.006H17.59C18.118 21.006 18.617 20.798 18.995 20.42L21.707 17.708C21.8 17.6152 21.8737 17.505 21.924 17.3837C21.9743 17.2624 22.0002 17.1323 22.0002 17.001C22.0002 16.8697 21.9743 16.7396 21.924 16.6183C21.8737 16.497 21.8 16.3868 21.707 16.294L17.707 12.293ZM17.58 19.005C16.332 18.984 12.062 18.649 8.70703 15.293C5.34103 11.927 5.01503 7.64199 4.99503 6.41899L7.00003 4.41399L9.58603 6.99999L8.29303 8.29299C8.17549 8.41044 8.08907 8.55533 8.04158 8.71456C7.99409 8.87379 7.98703 9.04234 8.02103 9.20499C8.04503 9.31999 8.63203 12.047 10.292 13.707C11.952 15.367 14.679 15.954 14.794 15.978C14.9566 16.0129 15.1253 16.0064 15.2847 15.9591C15.4441 15.9117 15.589 15.825 15.706 15.707L17 14.414L19.586 17L17.58 19.005Z" fill="white"/>
                              </svg>
                              <a href="tel: {{ $web_config['phone']->value }}">{{ $web_config['phone']->value }}</a>
                      </li>
                      <li>
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20 4H4C2.897 4 2 4.897 2 6V18C2 19.103 2.897 20 4 20H20C21.103 20 22 19.103 22 18V6C22 4.897 21.103 4 20 4ZM20 6V6.511L12 12.734L4 6.512V6H20ZM4 18V9.044L11.386 14.789C11.5611 14.9265 11.7773 15.0013 12 15.0013C12.2227 15.0013 12.4389 14.9265 12.614 14.789L20 9.044L20.002 18H4Z" fill="white"/>
                              </svg>
                              <a href="mailto:Info@remisefencinggear.com">Info@remisefencinggear.com</a>
                      </li>
                  </ul>
              </div>
          </div>

      </div>
  </div>
  <div class="container-fluid bottom_main_header">
      <div class="row">
          
          <div class="col-lg-6">
              <div class="main_logo">
                  <a href="{{ route('home') }}"><img class="footLogo" src="{{ asset('storage/app/public/company') . '/' . $web_config['web_logo']->value }}"
                                onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                alt="{{ $web_config['name']->value }}"></a>
              </div>
          </div>

          <div class="col-lg-6">
              <div class="header_main_menu">
                  <ul>
                      <li>
                          <a  href="{{ route('home') }}" class="home-active">{{ \App\CPU\translate('Home') }}</a>
                      </li>

                      @if (\App\Model\BusinessSetting::where(['type' => 'product_brand'])->first()->value)
                      <li class="deals-drop">
                          <a href="#">{{ \App\CPU\translate("Today's Deals") }}</a>
                          <ul class="deals-drop-hover">
                              @foreach (\App\CPU\BrandManager::get_active_brands() as $brand)
                                  <li>
                                      <div>
                                          <a href="{{ route('products', ['id' => $brand['id'], 'data_from' => 'brand', 'page' => 1]) }}">
                                              {{ $brand['name'] }}
                                          </a>
                                      </div>
                                      <div>
                                          @if ($brand['brand_products_count'] > 0)
                                              <span>({{ $brand['brand_products_count'] }})</span>
                                          @endif
                                      </div>
                                  </li>
                              @endforeach
                              <li><a href="{{ route('brands') }}">{{ \App\CPU\translate('View_more') }}</a></li>
                          </ul>
                      </li>
                      @endif

                      @php($discount_product = App\Model\Product::with(['reviews'])->active()->where('discount', '!=', 0)->count())
                      @if ($discount_product > 0)
                      <li>
                          <a href="{{ route('products', ['data_from' => 'discounted', 'page' => 1]) }}">{{ \App\CPU\translate('Trending Products') }}</a>
                      </li>
                      @endif


                      @php($business_mode = \App\CPU\Helpers::get_business_settings('business_mode'))
                      @if ($business_mode == 'multi')
                          <li>
                              <a href="{{ route('sellers') }}">{{ \App\CPU\translate('Special Offers') }}</a>
                          </li>

                          {{-- @php($seller_registration = \App\Model\BusinessSetting::where(['type' => 'seller_registration'])->first()->value)
                          @if ($seller_registration)
                              <li>
                                  <div class="two_btn_header_align">
      
                                      <div class="seller-drop">
                                      <a href="#" class="btn t-btn seller_zone">{{ \App\CPU\translate('Seller') }}
                                          {{ \App\CPU\translate('zone') }}<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.43945 7.78133L12.7325 12.0743L8.43945 16.3673L9.85345 17.7813L15.5605 12.0743L9.85345 6.36733L8.43945 7.78133Z" fill="#FF061E"/>
                                          </svg>
                                          </a>
      
                                          <ul class="seller-drop-hover">
                                              <li><a href="{{ route('shop.apply') }}">{{ \App\CPU\translate('Become a') }}
                                                  {{ \App\CPU\translate('Seller') }}</a></li>
                                              <li><a href="{{ route('seller.auth.login') }}">{{ \App\CPU\translate('Seller') }}
                                                  {{ \App\CPU\translate('login') }}</a></li>
                                          </ul>
      
                                      </div>
      
                                      <div class="cart_icon">
                                          <a href="{{route('shop-cart')}}"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M21 4.0743H2V6.0743H4.3L7.58 15.0743C7.78631 15.6579 8.16807 16.1633 8.67294 16.5214C9.1778 16.8794 9.78106 17.0726 10.4 17.0743H19V15.0743H10.4C10.1945 15.0742 9.99399 15.0108 9.8258 14.8927C9.6576 14.7746 9.52987 14.6076 9.46 14.4143L9 13.0743H18.28C18.714 13.0737 19.1361 12.9319 19.4824 12.6703C19.8288 12.4087 20.0806 12.0416 20.2 11.6243L22 5.3443C22.0406 5.21299 22.0538 5.0747 22.0386 4.93808C22.0234 4.80146 21.9802 4.66943 21.9117 4.55026C21.8432 4.43108 21.7509 4.3273 21.6404 4.24541C21.53 4.16352 21.4039 4.10527 21.27 4.0743C21.1806 4.05975 21.0894 4.05975 21 4.0743ZM18.25 11.0743H8.25L6.43 6.0743H19.67L18.25 11.0743Z" fill="#777777"/>
                                              <path d="M10.5 21.0743C11.3284 21.0743 12 20.4027 12 19.5743C12 18.7459 11.3284 18.0743 10.5 18.0743C9.67157 18.0743 9 18.7459 9 19.5743C9 20.4027 9.67157 21.0743 10.5 21.0743Z" fill="#777777"/>
                                              <path d="M16.5 21.0743C17.3284 21.0743 18 20.4027 18 19.5743C18 18.7459 17.3284 18.0743 16.5 18.0743C15.6716 18.0743 15 18.7459 15 19.5743C15 20.4027 15.6716 21.0743 16.5 21.0743Z" fill="#777777"/>
                                              </svg>
                                              {{ App\CPU\translate('Cart') }}
                                          </a>
                                      </div>
                                  </div>
                              </li>
                          @endif --}}

                          {{-- NN --}}
                          @if (auth('customer')->check())
                                <li>
                                  <div class="two_btn_header_align">
      
                                      <div class="seller-drop">
                                      <a href="#" class="btn t-btn seller_zone">
                                          {{ \App\CPU\translate('Hello') }},{{ auth('customer')->user()->f_name }}
                                          {{ \App\CPU\translate('dashboard') }}
                                          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.43945 7.78133L12.7325 12.0743L8.43945 16.3673L9.85345 17.7813L15.5605 12.0743L9.85345 6.36733L8.43945 7.78133Z" fill="#FF061E"/>
                                              </svg>
                                          </a>
      
                                          <ul class="seller-drop-hover">
                                              <li>
                                                  <a href="{{ route('account-oder') }}">
                                                      {{ \App\CPU\translate('my_order') }}
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="{{ route('user-account') }}">
                                                      {{ \App\CPU\translate('my_profile') }}
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="{{ route('home') }}">
                                                      {{ \App\CPU\translate('Home') }}
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="{{ route('wallet') }}">
                                                      {{ \App\CPU\translate('wallet') }}
                                                  </a>
                                              </li>
                                              <li>
                                                  <a ref="{{ route('seller.auth.logout') }}">
                                                      {{ \App\CPU\translate('logout') }}
                                                  </a>
                                              </li>
                                          </ul>
      
                                      </div>
                                      <div class="cart_icon">
                                        <a href="{{route('shop-cart')}}"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 4.0743H2V6.0743H4.3L7.58 15.0743C7.78631 15.6579 8.16807 16.1633 8.67294 16.5214C9.1778 16.8794 9.78106 17.0726 10.4 17.0743H19V15.0743H10.4C10.1945 15.0742 9.99399 15.0108 9.8258 14.8927C9.6576 14.7746 9.52987 14.6076 9.46 14.4143L9 13.0743H18.28C18.714 13.0737 19.1361 12.9319 19.4824 12.6703C19.8288 12.4087 20.0806 12.0416 20.2 11.6243L22 5.3443C22.0406 5.21299 22.0538 5.0747 22.0386 4.93808C22.0234 4.80146 21.9802 4.66943 21.9117 4.55026C21.8432 4.43108 21.7509 4.3273 21.6404 4.24541C21.53 4.16352 21.4039 4.10527 21.27 4.0743C21.1806 4.05975 21.0894 4.05975 21 4.0743ZM18.25 11.0743H8.25L6.43 6.0743H19.67L18.25 11.0743Z" fill="#777777"/>
                                            <path d="M10.5 21.0743C11.3284 21.0743 12 20.4027 12 19.5743C12 18.7459 11.3284 18.0743 10.5 18.0743C9.67157 18.0743 9 18.7459 9 19.5743C9 20.4027 9.67157 21.0743 10.5 21.0743Z" fill="#777777"/>
                                            <path d="M16.5 21.0743C17.3284 21.0743 18 20.4027 18 19.5743C18 18.7459 17.3284 18.0743 16.5 18.0743C15.6716 18.0743 15 18.7459 15 19.5743C15 20.4027 15.6716 21.0743 16.5 21.0743Z" fill="#777777"/>
                                            </svg>
                                            {{ App\CPU\translate('Cart') }}
                                        </a>
                                    </div>
                                  </div>
                              </li>
                            @elseif (auth('seller')->check())
                                <li>
                                  <div class="two_btn_header_align">
      
                                      <div class="seller-drop">
                                      <a href="#" class="btn t-btn seller_zone">
                                          {{ \App\CPU\translate('Hello') }},{{ auth('seller')->user()->f_name }}
                                            {{ \App\CPU\translate('dashboard') }}
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.43945 7.78133L12.7325 12.0743L8.43945 16.3673L9.85345 17.7813L15.5605 12.0743L9.85345 6.36733L8.43945 7.78133Z" fill="#FF061E"/>
                                              </svg>
                                          </a>
      
                                          <ul class="seller-drop-hover">
                                              <li>
                                                  <a href="{{ route('account-oder') }}">{{ \App\CPU\translate('my_order') }}</a>
                                              </li>
                                              <li>
                                                  <a href="{{ route('user-account') }}">
                                                      {{ \App\CPU\translate('my_profile') }}</a>
                                              </li>
                                              <li>
                                                  <a href="{{ route('home') }}">
                                                      {{ \App\CPU\translate('Home') }}</a>
                                              </li>
                                              <li>
                                                  <a href="{{ route('wallet') }}">
                                                      {{ \App\CPU\translate('wallet') }}</a>
                                              </li>
                                              <li>
                                                  <a href="{{ url('seller/dashboard') }}">
                                                      {{ \App\CPU\translate('seller Dashboard') }}</a>
                                              </li>
                                              <li>
                                                  <a
                                                      href="{{ route('seller.auth.logout') }}">{{ \App\CPU\translate('logout') }}</a>
                                              </li>
                                          </ul>
      
                                      </div>
                                      <div class="cart_icon">
                                        <a href="{{route('shop-cart')}}"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 4.0743H2V6.0743H4.3L7.58 15.0743C7.78631 15.6579 8.16807 16.1633 8.67294 16.5214C9.1778 16.8794 9.78106 17.0726 10.4 17.0743H19V15.0743H10.4C10.1945 15.0742 9.99399 15.0108 9.8258 14.8927C9.6576 14.7746 9.52987 14.6076 9.46 14.4143L9 13.0743H18.28C18.714 13.0737 19.1361 12.9319 19.4824 12.6703C19.8288 12.4087 20.0806 12.0416 20.2 11.6243L22 5.3443C22.0406 5.21299 22.0538 5.0747 22.0386 4.93808C22.0234 4.80146 21.9802 4.66943 21.9117 4.55026C21.8432 4.43108 21.7509 4.3273 21.6404 4.24541C21.53 4.16352 21.4039 4.10527 21.27 4.0743C21.1806 4.05975 21.0894 4.05975 21 4.0743ZM18.25 11.0743H8.25L6.43 6.0743H19.67L18.25 11.0743Z" fill="#777777"/>
                                            <path d="M10.5 21.0743C11.3284 21.0743 12 20.4027 12 19.5743C12 18.7459 11.3284 18.0743 10.5 18.0743C9.67157 18.0743 9 18.7459 9 19.5743C9 20.4027 9.67157 21.0743 10.5 21.0743Z" fill="#777777"/>
                                            <path d="M16.5 21.0743C17.3284 21.0743 18 20.4027 18 19.5743C18 18.7459 17.3284 18.0743 16.5 18.0743C15.6716 18.0743 15 18.7459 15 19.5743C15 20.4027 15.6716 21.0743 16.5 21.0743Z" fill="#777777"/>
                                            </svg>
                                            {{ App\CPU\translate('Cart') }}
                                        </a>
                                    </div>
                                  </div>
                              </li>

                            @else
                                <li>
                                  <div class="two_btn_header_align">
      
                                      <div class="seller-drop">
                                      <a href="#" class="btn t-btn seller_zone">{{ \App\CPU\translate('Seller') }}
                                          {{ \App\CPU\translate('zone') }}<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.43945 7.78133L12.7325 12.0743L8.43945 16.3673L9.85345 17.7813L15.5605 12.0743L9.85345 6.36733L8.43945 7.78133Z" fill="#FF061E"/>
                                          </svg>
                                          </a>
      
                                          <ul class="seller-drop-hover">
                                              <li><a href="{{ route('shop.apply') }}">{{ \App\CPU\translate('Become a') }}
                                                  {{ \App\CPU\translate('Seller') }}</a></li>
                                              <li><a href="{{ route('seller.auth.login') }}">{{ \App\CPU\translate('Seller') }}
                                                  {{ \App\CPU\translate('login') }}</a></li>
                                          </ul>
      
                                      </div>
                                      <div class="cart_icon">
                                          <a href="{{route('shop-cart')}}"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M21 4.0743H2V6.0743H4.3L7.58 15.0743C7.78631 15.6579 8.16807 16.1633 8.67294 16.5214C9.1778 16.8794 9.78106 17.0726 10.4 17.0743H19V15.0743H10.4C10.1945 15.0742 9.99399 15.0108 9.8258 14.8927C9.6576 14.7746 9.52987 14.6076 9.46 14.4143L9 13.0743H18.28C18.714 13.0737 19.1361 12.9319 19.4824 12.6703C19.8288 12.4087 20.0806 12.0416 20.2 11.6243L22 5.3443C22.0406 5.21299 22.0538 5.0747 22.0386 4.93808C22.0234 4.80146 21.9802 4.66943 21.9117 4.55026C21.8432 4.43108 21.7509 4.3273 21.6404 4.24541C21.53 4.16352 21.4039 4.10527 21.27 4.0743C21.1806 4.05975 21.0894 4.05975 21 4.0743ZM18.25 11.0743H8.25L6.43 6.0743H19.67L18.25 11.0743Z" fill="#777777"/>
                                              <path d="M10.5 21.0743C11.3284 21.0743 12 20.4027 12 19.5743C12 18.7459 11.3284 18.0743 10.5 18.0743C9.67157 18.0743 9 18.7459 9 19.5743C9 20.4027 9.67157 21.0743 10.5 21.0743Z" fill="#777777"/>
                                              <path d="M16.5 21.0743C17.3284 21.0743 18 20.4027 18 19.5743C18 18.7459 17.3284 18.0743 16.5 18.0743C15.6716 18.0743 15 18.7459 15 19.5743C15 20.4027 15.6716 21.0743 16.5 21.0743Z" fill="#777777"/>
                                              </svg>
                                              {{ App\CPU\translate('Cart') }}
                                          </a>
                                      </div>
                                  </div>
                              </li>
                            @endif
                          {{-- NN --}}
                      @endif

                  </ul>
              </div>
          </div>

      </div>
  </div>
</header>
{{-- NEW HEADER --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@push('script')
    <script>
        function myFunction() {
            $('#anouncement').slideUp(300)
        }
    </script>

<script>
  function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "flex") {
      x.style.display = "none";
    } else {
      x.style.display = "flex";
      x.style.justifyContent = "center";
      x.style.textAlign = "center";
    }
  }
      // Toggle main menu open/close
const $compactHeader = $('.bloom-mobile-header');

function openCompactMenu() {
$compactHeader.addClass('nav-visible');
}

function closeCompactMenu() {
$compactHeader.removeClass('nav-visible');
}

$('#openNavButton').click(openCompactMenu);
$('#closeNavButton').click(closeCompactMenu);

// Toggle sub-menu open/close
$('.deals-drop-mobile').click(function (e) {
e.stopPropagation(); // Prevent click from closing main menu
$(this).toggleClass('active'); // Toggle active class to open/close sub-menu
});
  </script>
@endpush
