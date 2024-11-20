@extends('layouts.front-end.app')

@section('title', $product['name'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @section('content')
        <?php
        $overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews);
        $rating = \App\CPU\ProductManager::get_rating($product->reviews);
        $decimal_point_settings = \App\CPU\Helpers::get_business_settings('decimal_point_settings');
        ?>

        {{-- NEW --}}
        <div class="container-fluid product-detail-section">
            <div class="row">
                <div class="col-lg-6">
                    @if ($product->images != null && json_decode($product->images) > 0)
                        @if (json_decode($product->colors) && $product->color_image)
                            <div class="thumbnail-main-img">
                                <div class="slider-for">
                                    @foreach (json_decode($product->color_image) as $key => $photo)
                                        <img onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                            src="{{ asset("storage/app/public/product/$photo->image_name") }}"
                                            data-zoom="{{ asset("storage/app/public/product/$photo->image_name") }}"
                                            alt="Product image" />
                                    @endforeach
                                </div>

                                <div class="slider-nav">
                                    @foreach (json_decode($product->color_image) as $key => $photo)
                                        <img onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                            src="{{ asset("storage/app/public/product/$photo->image_name") }}"
                                            data-zoom="{{ asset("storage/app/public/product/$photo->image_name") }}"
                                            alt="Product image" />
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="thumbnail-main-img">
                                <div class="slider-for">
                                    @foreach (json_decode($product->images) as $key => $photo)
                                        <img onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                            src="{{ asset("storage/app/public/product/$photo") }}"
                                            data-zoom="{{ asset("storage/app/public/product/$photo") }}"
                                            alt="Product image" />
                                    @endforeach
                                </div>

                                <div class="slider-nav">
                                    @foreach (json_decode($product->images) as $key => $photo)
                                        <img onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                            src="{{ asset("storage/app/public/product/$photo") }}"
                                            data-zoom="{{ asset("storage/app/public/product/$photo") }}"
                                            alt="Product image" />
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endif
                </div>

                <div class="col-lg-6">
                    <h3>{{ $product->name }}</h3>
                    <div class="product-detail-box">
                        <h6>Details</h6>
                        <p>
                            {!! $product['details'] !!}
                        </p>
                    </div>
                    @if (isset($product['hand_orientation']))
                        <div class="product-detail-box">
                            <p>
                                <span class="font-bold">Available Hand Orientation:</span>
                                <span>
                                    {{ $product['hand_orientation'] == 'RH' ? 'Right Hand' : 'Left Hand' }}
                                </span>
                            </p>
                        </div>
                    @endif
                    <div class="product-price-box">
                        <h6>Price</h6>
                        <p>{{ \App\CPU\Helpers::currency_converter($product->unit_price - \App\CPU\Helpers::get_product_discount($product, $product->unit_price)) }}
                        </p>
                        @if ($product->discount > 0)
                            <p class="text-dark" style="font-size: 15px;">
                                Was <span
                                    style="
                        font-family: 'BURBANKBIGCONDENSED-BOLD' !important;
                        color:#1E1E1E99;
                        font-size:14px;
                        text-decoration: line-through;
                        text-decoration-color:#000;
                        ">{{ \App\CPU\Helpers::currency_converter($product->unit_price) }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="seller-of-product">
                        <h6>Seller Of This Product</h6>
                        <p>
                            @if ($product->added_by == 'seller')
                                {{ $product->seller->shop ? $product->seller->shop->name : $product->seller->f_name }}
                            @elseif($product->added_by == 'admin')
                                {{ $web_config['name']->value }}
                            @endif
                        </p>
                    </div>
                    <div class="reviews-product-box">
                        <h6>Reviews</h6>
                        <p>{{ number_format($avgRating, 1) }}<small>/5.0</small></p>
                        @php
                            $floatNumber = true;
                        @endphp

                        <div class="rating-box">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $avgRating)
                                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M36.5785 15.5583C36.4738 15.2498 36.281 14.9787 36.0239 14.7784C35.7668 14.5782 35.4567 14.4577 35.1319 14.4317L25.6302 13.6767L21.5185 4.575C21.3876 4.28186 21.1746 4.03287 20.9053 3.8581C20.636 3.68333 20.3218 3.59023 20.0007 3.59006C19.6797 3.58988 19.3654 3.68263 19.0959 3.85711C18.8264 4.03158 18.6131 4.28033 18.4819 4.57334L14.3702 13.6767L4.86854 14.4317C4.5493 14.457 4.2441 14.5737 3.98946 14.7679C3.73483 14.9621 3.54153 15.2255 3.4327 15.5267C3.32386 15.8279 3.3041 16.1541 3.37578 16.4662C3.44746 16.7783 3.60754 17.0631 3.83687 17.2867L10.8585 24.1317L8.37521 34.885C8.2998 35.2105 8.32397 35.5512 8.44457 35.8627C8.56518 36.1743 8.77665 36.4425 9.05154 36.6324C9.32644 36.8223 9.65207 36.9252 9.98618 36.9278C10.3203 36.9303 10.6474 36.8324 10.9252 36.6467L20.0002 30.5967L29.0752 36.6467C29.3591 36.8352 29.6939 36.9322 30.0346 36.9247C30.3753 36.9173 30.7055 36.8056 30.9809 36.6049C31.2562 36.4041 31.4635 36.1239 31.5748 35.8018C31.6861 35.4797 31.6962 35.1313 31.6035 34.8033L28.5552 24.1367L36.1152 17.3333C36.6102 16.8867 36.7919 16.19 36.5785 15.5583Z"
                                            fill="#AAAAAA" />
                                    </svg>
                                @elseif(strpos($avgRating, '.5') !== false && $floatNumber)
                                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M36.5785 15.5583C36.4738 15.2498 36.281 14.9787 36.0239 14.7784C35.7668 14.5782 35.4567 14.4577 35.1319 14.4317L25.6302 13.6767L21.5185 4.575C21.3876 4.28186 21.1746 4.03287 20.9053 3.8581C20.636 3.68333 20.3218 3.59023 20.0007 3.59006C19.6797 3.58988 19.3654 3.68263 19.0959 3.85711C18.8264 4.03158 18.6131 4.28033 18.4819 4.57334L14.3702 13.6767L4.86854 14.4317C4.5493 14.457 4.2441 14.5737 3.98946 14.7679C3.73483 14.9621 3.54153 15.2255 3.4327 15.5267C3.32386 15.8279 3.3041 16.1541 3.37578 16.4662C3.44746 16.7783 3.60754 17.0631 3.83687 17.2867L10.8585 24.1317L8.37521 34.885C8.2998 35.2105 8.32397 35.5512 8.44457 35.8627C8.56518 36.1743 8.77665 36.4425 9.05154 36.6324C9.32644 36.8223 9.65207 36.9252 9.98618 36.9278C10.3203 36.9303 10.6474 36.8324 10.9252 36.6467L20.0002 30.5967L29.0752 36.6467C29.3591 36.8352 29.6939 36.9322 30.0346 36.9247C30.3753 36.9173 30.7055 36.8056 30.9809 36.6049C31.2562 36.4041 31.4635 36.1239 31.5748 35.8018C31.6861 35.4797 31.6962 35.1313 31.6035 34.8033L28.5552 24.1367L36.1152 17.3333C36.6102 16.8867 36.7919 16.19 36.5785 15.5583Z"
                                            fill="#AAAAAA" />
                                    </svg>
                                    @php $floatNumber = false; @endphp
                                @else
                                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M36.5785 15.5583C36.4738 15.2498 36.281 14.9787 36.0239 14.7784C35.7668 14.5782 35.4567 14.4577 35.1319 14.4317L25.6302 13.6767L21.5185 4.575C21.3876 4.28186 21.1746 4.03287 20.9053 3.8581C20.636 3.68333 20.3218 3.59023 20.0007 3.59006C19.6797 3.58988 19.3654 3.68263 19.0959 3.85711C18.8264 4.03158 18.6131 4.28033 18.4819 4.57334L14.3702 13.6767L4.86854 14.4317C4.5493 14.457 4.2441 14.5737 3.98946 14.7679C3.73483 14.9621 3.54153 15.2255 3.4327 15.5267C3.32386 15.8279 3.3041 16.1541 3.37578 16.4662C3.44746 16.7783 3.60754 17.0631 3.83687 17.2867L10.8585 24.1317L8.37521 34.885C8.2998 35.2105 8.32397 35.5512 8.44457 35.8627C8.56518 36.1743 8.77665 36.4425 9.05154 36.6324C9.32644 36.8223 9.65207 36.9252 9.98618 36.9278C10.3203 36.9303 10.6474 36.8324 10.9252 36.6467L20.0002 30.5967L29.0752 36.6467C29.3591 36.8352 29.6939 36.9322 30.0346 36.9247C30.3753 36.9173 30.7055 36.8056 30.9809 36.6049C31.2562 36.4041 31.4635 36.1239 31.5748 35.8018C31.6861 35.4797 31.6962 35.1313 31.6035 34.8033L28.5552 24.1367L36.1152 17.3333C36.6102 16.8867 36.7919 16.19 36.5785 15.5583Z"
                                            fill="#AAAAAA" />
                                    </svg>
                                @endif
                            @endfor
                        </div>
                        <h5>
                            {{ $reviews->count() }} Rating
                        </h5>
                    </div>


                    <div class="product-function-box">
                        <div class="product-count-box">
                            <div class="counter">
                                <button id="decrease" class="counter-btn minus">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.52246 18.8787H31.8204V22.207H8.52246V18.8787Z" fill="white" />
                                    </svg>
                                </button>
                                <div id="counter-value" class="counter-display num">01</div>
                                <button id="increase" class="counter-btn plus">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M31.9318 18.8787H21.9469V8.89386H18.6186V18.8787H8.63379V22.207H18.6186V32.1918H21.9469V22.207H31.9318V18.8787Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="add-to-cart-box">
                            <a href="javascript:void(0)" onclick="addToCart()"
                                class="btn t-btn">{{ \App\CPU\translate('add_to_cart') }}<svg width="37" height="37"
                                    viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.2021 12.0481L19.6968 18.5428L13.2021 25.0375L15.3413 27.1767L23.9752 18.5428L15.3413 9.90895L13.2021 12.0481Z"
                                        fill="#FF061E" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid product-down-reviews">
            <div class="row">
                <div class="col-lg-6">
                    <div class="reviews-display-section">

                        <h3>Reviews</h3>
                        @forelse ($filterReviews as $review)
                            <div class="reviews-sec-cards">

                                <svg width="50" height="62" viewBox="0 0 50 62" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M45.5657 22.7521L45.5136 22.4021L45.4594 22.4146C45.0892 20.6834 44.2364 19.0924 42.9997 17.8257C41.763 16.559 40.1929 15.6684 38.4711 15.2568C36.7493 14.8453 34.9461 14.9297 33.2703 15.5002C31.5944 16.0708 30.1143 17.1042 29.0013 18.4808C27.8883 19.8575 27.1878 21.5211 26.9809 23.2793C26.774 25.0375 27.0692 26.8183 27.8322 28.4158C28.5952 30.0132 29.795 31.3619 31.2926 32.3059C32.7902 33.2499 34.5245 33.7506 36.2948 33.75C36.7594 33.75 37.2052 33.6792 37.649 33.6146C37.5052 34.0979 37.3573 34.5896 37.1198 35.0313C36.8823 35.6729 36.5115 36.2292 36.1427 36.7896C35.8344 37.3958 35.2907 37.8062 34.8907 38.325C34.4719 38.8292 33.9011 39.1646 33.449 39.5833C33.0052 40.0208 32.424 40.2396 31.9615 40.5479C31.4782 40.825 31.0573 41.1313 30.6073 41.2771L29.4844 41.7396L28.4969 42.15L29.5052 46.1896L30.749 45.8896C31.1469 45.7896 31.6323 45.6729 32.1844 45.5333C32.749 45.4292 33.3511 45.1438 34.0219 44.8833C34.6823 44.5854 35.4511 44.3875 36.1636 43.9104C36.8802 43.4563 37.7073 43.0771 38.4365 42.4688C39.1427 41.8417 39.9948 41.2979 40.624 40.5021C41.3115 39.7563 41.9907 38.9729 42.5177 38.0813C43.1282 37.2313 43.5427 36.2979 43.9802 35.375C44.3761 34.4521 44.6948 33.5083 44.9552 32.5917C45.449 30.7542 45.6698 29.0083 45.7552 27.5146C45.8261 26.0188 45.7844 24.775 45.6969 23.875C45.6676 23.4991 45.6239 23.1246 45.5657 22.7521ZM22.649 22.7521L22.5969 22.4021L22.5427 22.4146C22.1726 20.6834 21.3198 19.0924 20.083 17.8257C18.8463 16.559 17.2762 15.6684 15.5544 15.2568C13.8326 14.8453 12.0294 14.9297 10.3536 15.5002C8.67773 16.0708 7.19767 17.1042 6.08465 18.4808C4.97164 19.8575 4.27115 21.5211 4.06425 23.2793C3.85735 25.0375 4.15249 26.8183 4.91553 28.4158C5.67856 30.0132 6.87829 31.3619 8.37592 32.3059C9.87354 33.2499 11.6078 33.7506 13.3782 33.75C13.8427 33.75 14.2886 33.6792 14.7323 33.6146C14.5886 34.0979 14.4407 34.5896 14.2032 35.0313C13.9657 35.6729 13.5948 36.2292 13.2261 36.7896C12.9177 37.3958 12.374 37.8062 11.974 38.325C11.5552 38.8292 10.9844 39.1646 10.5323 39.5833C10.0886 40.0208 9.50733 40.2396 9.04483 40.5479C8.56149 40.825 8.14066 41.1313 7.69066 41.2771L6.56774 41.7396C5.94066 41.9958 5.58233 42.1458 5.58233 42.1458L6.59066 46.1854L7.83441 45.8854C8.23233 45.7854 8.71774 45.6688 9.26983 45.5292C9.83441 45.425 10.4365 45.1396 11.1073 44.8792C11.7677 44.5813 12.5365 44.3833 13.249 43.9063C13.9657 43.4521 14.7927 43.0729 15.5219 42.4646C16.2282 41.8375 17.0802 41.2938 17.7094 40.4979C18.3969 39.7521 19.0761 38.9688 19.6032 38.0771C20.2136 37.2271 20.6282 36.2938 21.0657 35.3708C21.4615 34.4479 21.7802 33.5042 22.0407 32.5875C22.5344 30.75 22.7552 29.0042 22.8407 27.5104C22.9115 26.0146 22.8698 24.7708 22.7823 23.8708C22.7512 23.4964 22.7067 23.1233 22.649 22.7521Z"
                                        fill="#FF061E" />
                                </svg>
                                <div class="two-thing-spacing">
                                    <h4>{{ $review->customer->f_name . ' ' . $review->customer->l_name }}</h4>
                                    <div class="stars-box">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $review->rating)
                                                <svg width="30" height="31" viewBox="0 0 30 31" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M27.4338 11.6633C27.3552 11.4319 27.2106 11.2286 27.0178 11.0784C26.825 10.9283 26.5924 10.8378 26.3488 10.8183L19.2225 10.2521L16.1388 3.42584C16.0406 3.20598 15.8808 3.01925 15.6788 2.88817C15.4768 2.75709 15.2412 2.68727 15.0004 2.68713C14.7596 2.687 14.524 2.75656 14.3218 2.88742C14.1197 3.01828 13.9597 3.20484 13.8613 3.42459L10.7775 10.2521L3.65128 10.8183C3.41185 10.8373 3.18296 10.9249 2.99198 11.0705C2.801 11.2162 2.65602 11.4137 2.5744 11.6396C2.49277 11.8655 2.47796 12.1101 2.53171 12.3442C2.58547 12.5783 2.70553 12.792 2.87753 12.9596L8.14378 18.0933L6.28128 26.1583C6.22473 26.4025 6.24285 26.658 6.33331 26.8916C6.42376 27.1253 6.58236 27.3265 6.78854 27.4689C6.99471 27.6113 7.23893 27.6885 7.48951 27.6904C7.74009 27.6923 7.98546 27.6189 8.19378 27.4796L15 22.9421L21.8063 27.4796C22.0192 27.621 22.2703 27.6937 22.5258 27.6881C22.7813 27.6825 23.029 27.5988 23.2355 27.4482C23.442 27.2977 23.5975 27.0875 23.681 26.8459C23.7645 26.6044 23.772 26.3431 23.7025 26.0971L21.4163 18.0971L27.0863 12.9946C27.4575 12.6596 27.5938 12.1371 27.4338 11.6633Z"
                                                        fill="#C5BE00" />
                                                </svg>
                                            @else
                                                <svg width="30" height="31" viewBox="0 0 30 31" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M27.4338 11.6633C27.3552 11.4319 27.2106 11.2286 27.0178 11.0784C26.825 10.9283 26.5924 10.8378 26.3488 10.8183L19.2225 10.2521L16.1388 3.42584C16.0406 3.20598 15.8808 3.01925 15.6788 2.88817C15.4768 2.75709 15.2412 2.68727 15.0004 2.68713C14.7596 2.687 14.524 2.75656 14.3218 2.88742C14.1197 3.01828 13.9597 3.20484 13.8613 3.42459L10.7775 10.2521L3.65128 10.8183C3.41185 10.8373 3.18296 10.9249 2.99198 11.0705C2.801 11.2162 2.65602 11.4137 2.5744 11.6396C2.49277 11.8655 2.47796 12.1101 2.53171 12.3442C2.58547 12.5783 2.70553 12.792 2.87753 12.9596L8.14378 18.0933L6.28128 26.1583C6.22473 26.4025 6.24285 26.658 6.33331 26.8916C6.42376 27.1253 6.58236 27.3265 6.78854 27.4689C6.99471 27.6113 7.23893 27.6885 7.48951 27.6904C7.74009 27.6923 7.98546 27.6189 8.19378 27.4796L15 22.9421L21.8063 27.4796C22.0192 27.621 22.2703 27.6937 22.5258 27.6881C22.7813 27.6825 23.029 27.5988 23.2355 27.4482C23.442 27.2977 23.5975 27.0875 23.681 26.8459C23.7645 26.6044 23.772 26.3431 23.7025 26.0971L21.4163 18.0971L27.0863 12.9946C27.4575 12.6596 27.5938 12.1371 27.4338 11.6633Z"
                                                        fill="#C5BE00" />
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                <p>{{ $review->created_at->format('d M Y') }}</p>
                            </div>
                        @empty
                            <div class="row">
                                <div class="col-md-12">
                                    No reviews
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>

        {{-- FORM --}}
        <form id="add-to-cart-form" class="mb-2">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            @php
                $qty = 0;
                if (!empty($product->variation)) {
                    foreach (json_decode($product->variation) as $key => $variation) {
                        $qty += $variation->qty;
                    }
                }
            @endphp
            <input type="text" name="quantity" id="qtyProduct" style="display:none;"
                class="form-control input-number text-center cart-qty-field __inline-29" placeholder="1"
                value="{{ $product->minimum_order_qty ?? 1 }}" product-type="{{ $product->product_type }}"
                min="{{ $product->minimum_order_qty ?? 1 }}" max="100">
            </div>
        </form>
        <script>
            const plus = document.querySelector(".plus"),
                minus = document.querySelector(".minus"),
                num = document.querySelector(".num");
            let a = 1;
            plus.addEventListener("click", () => {
                a++;
                //a = (a < 10) ? "0" + a : a;
                num.innerText = a;
                document.getElementById('qtyProduct').setAttribute("value", a);
                // checkQTY();
            });

            minus.addEventListener("click", () => {
                if (a > 1) {
                    a--;
                    //a = (a < 10) ? "0" + a : a;
                    num.innerText = a;
                    document.getElementById('qtyProduct').value = a;
                }
            });
        </script>
        {{-- FORM --}}
        {{-- NEW --}}

    @endsection
</body>

</html>

@push('script')
    <script src="{{ asset('public/assets/front-end') }}/js/new_custom.js"></script>
    <script src="{{ asset('public/assets/front-end') }}/js/new_lib.js"></script>
    <script type="text/javascript">
        $('#filter').change(function() {
            $('#filter-form').submit();
        });

        function checkQTY() {
            $val = document.getElementById('qtyProduct').value;
            productType = $($val).attr('product-type');
            minValue = parseInt($($val).attr('min'));
            maxValue = parseInt($($val).attr('max'));
            valueCurrent = parseInt($($val).val());

            var name = $($val).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Cart',
                    text: 'Sorry  the minimum order quantity does not match'
                });
                $($val).val($($val).data('oldValue'));
                document.getElementById('qtyProduct').value = $val - 1;
                document.querySelector(".num").innerText = $val - 1;
            }
            if (productType === 'digital' || valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Cart',
                    text: 'Sorry  stock limit exceeded.'
                });
                $($val).val($($val).data('oldValue'));
                document.getElementById('qtyProduct').value = $val - 1;
                document.querySelector(".num").innerText = $val - 1;
            }


        }


        cartQuantityInitialize();
        getVariantPrice();
        $('#add-to-cart-form input').on('change', function() {
            getVariantPrice();
        });

        function showInstaImage(link) {
            $("#attachment-view").attr("src", link);
            $('#show-modal-view').modal('toggle')
        }

        function focus_preview_image_by_color(key) {
            $('a[href="#image' + key + '"]')[0].click();
        }
    </script>
    <script>
        $(document).ready(function() {
            load_review();

            // On thumbnail click
            $('.cz-thumblist-item').on('click', function(e) {
                e.preventDefault(); // Prevent default link behavior

                // Get the clicked image source from data-src
                var newImageSrc = $(this).data('src');

                // Update the main image in the main container
                $('#main-image-container img').attr('src', newImageSrc);

                // Optionally update the zoom data
                $('#main-image-container img').attr('data-zoom', newImageSrc);

                // Remove active class from all thumbnails
                $('.cz-thumblist-item').removeClass('active');

                // Add active class to the clicked thumbnail
                $(this).addClass('active');
            });

        });
        let load_review_count = 1;

        function load_review() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "post",
                url: '{{ route('review-list-product') }}',
                data: {
                    product_id: {{ $product->id }},
                    offset: load_review_count
                },
                success: function(data) {
                    $('#product-review-list').append(data.productReview)
                    if (data.not_empty == 0 && load_review_count > 2) {
                        toastr.info('{{ \App\CPU\translate('no more review remain to load') }}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        console.log('iff');
                    }
                }
            });
            load_review_count++
        }
    </script>

    <script>
        function scrollToSection() {
            var section = document.getElementById("reviewsID");
            section.scrollIntoView({
                behavior: "smooth"
            });
        }
    </script>

    {{-- Messaging with shop seller --}}
    <script>
        $('#contact-seller').on('click', function(e) {
            // $('#seller_details').css('height', '200px');
            $('#seller_details').animate({
                'height': '276px'
            });
            $('#msg-option').css('display', 'block');
        });
        $('#sendBtn').on('click', function(e) {
            e.preventDefault();
            let msgValue = $('#msg-option').find('textarea').val();
            let data = {
                message: msgValue,
                shop_id: $('#msg-option').find('textarea').attr('shop-id'),
                seller_id: $('.msg-option').find('.seller_id').attr('seller-id'),
            }
            if (msgValue != '') {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "post",
                    url: '{{ route('messages_store') }}',
                    data: data,
                    success: function(respons) {
                        console.log('send successfully');
                    }
                });
                $('#chatInputBox').val('');
                $('#msg-option').css('display', 'none');
                $('#contact-seller').find('.contact').attr('disabled', '');
                $('#seller_details').animate({
                    'height': '125px'
                });
                $('#go_to_chatbox').css('display', 'block');
            } else {
                console.log('say something');
            }
        });
        $('#cancelBtn').on('click', function(e) {
            e.preventDefault();
            $('#seller_details').animate({
                'height': '114px'
            });
            $('#msg-option').css('display', 'none');
        });
    </script>

    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=5f55f75bde227f0012147049&product=sticky-share-buttons"
        async="async"></script>
@endpush
<script>
    window.onload = function() {
        var span = document.createElement('span');

        span.className = 'fa';
        span.style.display = 'none';
        document.body.insertBefore(span, document.body.firstChild);

        //alert(window.getComputedStyle(span, null).getPropertyValue('font-family'));

        document.body.removeChild(span);
    };
</script>
