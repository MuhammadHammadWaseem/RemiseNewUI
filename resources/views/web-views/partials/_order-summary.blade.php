{{-- NEW --}}
<div class="col-lg-4">
    <div class="cart-form">
        <h3>Cart Details</h3>

        @php($shippingMethod = \App\CPU\Helpers::get_business_settings('shipping_method'))
        @php($sub_total = 0)
        @php($total_tax = 0)
        @php($total_shipping_cost = 0)
        @php($order_wise_shipping_discount = \App\CPU\CartManager::order_wise_shipping_discount())
        @php($total_discount_on_product = 0)
        @php($cart = \App\CPU\CartManager::get_cart())
        @php($cart_group_ids = \App\CPU\CartManager::get_cart_group_ids())
        @php($shipping_cost = \App\CPU\CartManager::get_shipping_cost())
        @if ($cart->count() > 0)
            @foreach ($cart as $key => $cartItem)
                @php($sub_total += $cartItem['price'] * $cartItem['quantity'])
                @php($total_tax += $cartItem['tax_model'] == 'exclude' ? $cartItem['tax'] * $cartItem['quantity'] : 0)
                @php($total_discount_on_product += $cartItem['discount'] * $cartItem['quantity'])
            @endforeach

            @php($total_shipping_cost = $shipping_cost)
        @else
            <span>{{ \App\CPU\translate('empty_cart') }}</span>
        @endif

        <div class="cart-form-detail two-thing-spacing">
            <h5>{{ \App\CPU\translate('sub_total') }}</h5>
            <p class="cart-form-price">{{ \App\CPU\Helpers::currency_converter($sub_total) }}</p>
        </div>

        <div class="cart-form-detail two-thing-spacing">
            <h5>{{ \App\CPU\translate('tax') }}</h5>
            <p class="cart-form-price">{{ \App\CPU\Helpers::currency_converter($total_tax) }}</p>
        </div>

        <div class="cart-form-detail two-thing-spacing">
            <h5>{{ \App\CPU\translate('shipping') }}</h5>
            <p class="cart-form-price" id="shippingValue">
                @if (isset($cost))
                    {{ \App\CPU\Helpers::currency_converter($cost) }}
                @endif
            </p>
        </div>

        <div class="cart-form-detail two-thing-spacing">
            @if (isset($delivery_date))
                <h5>{{ \App\CPU\translate('shipping') . ' ' . \App\CPU\translate('date') }}</h5>
                <p class="cart-form-price">{{ Carbon\Carbon::parse($delivery_date)->format('d M Y') }}</p>
            @endif
        </div>

        <div class="cart-form-detail two-thing-spacing">
            <h5>{{ \App\CPU\translate('discount_on_product') }}</h5>
            <p class="cart-form-price">- {{ \App\CPU\Helpers::currency_converter($total_discount_on_product) }}</p>
        </div>

        {{-- FORM --}}
        @if (session()->has('coupon_discount'))
            @php($coupon_discount = session()->has('coupon_discount') ? session('coupon_discount') : 0)
            <div class="cart-form-detail two-thing-spacing">
                <h5>>{{ \App\CPU\translate('coupon_discount') }}</h5>
                <p class="cart-form-price" id="coupon-discount-amount">-
                    {{ \App\CPU\Helpers::currency_converter($coupon_discount + $order_wise_shipping_discount) }}</p>
            </div>
            @php($coupon_dis = session('coupon_discount'))
        @else
            <div class="coupon-box">
                <form class="needs-validation" style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 12px;" action="javascript:" method="post" novalidate id="coupon-code-ajax">
                    <input type="text" name="code" style="width: 100%;" placeholder="{{ \App\CPU\translate('Coupon code') }}"
                        required>
                    <div class="invalid-feedback">{{ \App\CPU\translate('please_provide_coupon_code') }}</div>
                    <button class="apply-couplon btn t-btn" type="button"
                        onclick="couponCode()">{{ \App\CPU\translate('apply_code') }}</button>
                </form>
            </div>

            @php($coupon_dis = 0)
        @endif
        <hr class="mt-2 mb-2">

        {{-- FORM --}}

        <div class="cart-form-detail total-price two-thing-spacing">
            <h5>{{ \App\CPU\translate('total') }}</h5>
            <p class="cart-form-price" id="totalAmount">
                @if (isset($cost))
                    {{ \App\CPU\Helpers::currency_converter($sub_total + $total_tax + $total_shipping_cost - $coupon_dis - $total_discount_on_product - $order_wise_shipping_discount) }}
                @else
                    {{ \App\CPU\Helpers::currency_converter($sub_total + $total_tax - $coupon_dis - $total_discount_on_product - $order_wise_shipping_discount) }}
                @endif
            </p>
        </div>
        <a href="#" onclick="checkout()" class="btn t-btn checkout-btn">{{ \App\CPU\translate('checkout') }} <svg
                width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.43945 7.78133L12.7325 12.0743L8.43945 16.3673L9.85345 17.7813L15.5605 12.0743L9.85345 6.36733L8.43945 7.78133Z"
                    fill="#FF061E" />
            </svg></a>
    </div>
</div>
{{-- NEW --}}
