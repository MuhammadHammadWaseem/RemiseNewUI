{{-- NEW --}}
<div class="container-fluid cart-section">

    <div class="row">
        <div class="col-12">
            <h6>Product Cart</h6>
            <h3>Fencings You Have Added To Cart</h3>
        </div>
    </div>

    @php
        $shippingMethod = \App\CPU\Helpers::get_business_settings('shipping_method');
        if (auth('customer')->check()) {
            $type_id = 'customer_id';
            $auth = auth('customer')->id();
        } elseif (auth('seller')->check()) {
            $type_id = 'seller_id';
            $auth = auth('seller')->id();
        }
        $cart = \App\Model\Cart::where('customer_id', $auth)->get()->groupBy('cart_group_id');

        if (count($cart) == 0) {
            $physical_product = false;
        }
    @endphp

    <div class="row">
        <div class="col-lg-8">

            <div class="cart-boxes">
                @foreach ($cart as $group_key => $group)
                    @foreach ($group as $cart_key => $cartItem)
                        @if ($shippingMethod == 'inhouse_shipping')
                            <?php
                            
                            $admin_shipping = \App\Model\ShippingType::where('seller_id', 0)->first();
                            $shipping_type = isset($admin_shipping) == true ? $admin_shipping->shipping_type : 'order_wise';
                            
                            ?>
                        @else
                            <?php
                            if ($cartItem->seller_is == 'admin') {
                                $admin_shipping = \App\Model\ShippingType::where('seller_id', 0)->first();
                                $shipping_type = isset($admin_shipping) == true ? $admin_shipping->shipping_type : 'order_wise';
                            } else {
                                $seller_shipping = \App\Model\ShippingType::where('seller_id', $cartItem->seller_id)->first();
                                $shipping_type = isset($seller_shipping) == true ? $seller_shipping->shipping_type : 'order_wise';
                            }
                            ?>
                        @endif

                        @if ($cart_key == 0)
                            <div class="card-header">
                                @if ($cartItem->seller_is == 'admin')
                                    <b>
                                        <span style="font-size: 20px;">{{ \App\CPU\translate('shop_name') }} : </span>
                                        <a style="color:#FF061E !important; font-size: 20px;"
                                            href="{{ route('shopView', ['id' => 0]) }}">{{ \App\CPU\Helpers::get_business_settings('company_name') }}</a>
                                    </b>
                                @else
                                    <b>
                                        <span>{{ \App\CPU\translate('shop_name') }}:</span>
                                        <a style="color:#FF061E !important;"
                                            href="{{ route('shopView', ['id' => $cartItem->seller_id]) }}">
                                            {{ \App\Model\Shop::where(['seller_id' => $cartItem['seller_id']])->first()->name }}
                                        </a>
                                    </b>
                                @endif
                            </div>
                        @endif
                    @endforeach

                    <?php
                    $physical_product = false;
                    foreach ($group as $row) {
                        if ($row->product_type == 'physical') {
                            $physical_product = true;
                        }
                    }
                    ?>

                    @foreach ($group as $cart_key => $cartItem)
                        <div class="cart-box">
                            <div class="product-image">
                                <a href="{{ route('product', $cartItem['slug']) }}">
                                    <img onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                        src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $cartItem['thumbnail'] }}"
                                        alt="Product">
                                </a>
                            </div>
                            <div class="cart-details">
                                <a href="{{ route('product', $cartItem['slug']) }}"
                                    style="color:black !important; font-size:15px;">
                                    <h5>{{ $cartItem['name'] }}</h5>
                                </a>
                                <p>{{ \App\CPU\Helpers::currency_converter($cartItem['price'] - $cartItem['discount']) }}
                                </p>
                                @if ($cartItem['discount'] > 0)
                                    <strike class="__inline-18">
                                        {{ \App\CPU\Helpers::currency_converter($cartItem['price']) }}
                                    </strike>
                                @endif
                            </div>

                            @php
                                $minimum_order = \App\Model\Product::select('minimum_order_qty')->find(
                                    $cartItem['product_id'],
                                );
                            @endphp


                            <div class="cart-counter-box">
                                <div class="product-count-box">
                                    {{-- <div class="counter">
                                        <button id="increase" class="counter-btn">
                                            <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M31.9318 18.8787H21.9469V8.89386H18.6186V18.8787H8.63379V22.207H18.6186V32.1918H21.9469V22.207H31.9318V18.8787Z"
                                                    fill="white" />
                                            </svg>
                                        </button>
                                        <div id="counter-value" class="counter-display">01</div>
                                        <button id="decrease" class="counter-btn">
                                            <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.52246 18.8787H31.8204V22.207H8.52246V18.8787Z"
                                                    fill="white" />
                                            </svg>
                                        </button>
                                    </div> --}}
                                    <input class="__cart-input" type="number" name="quantity[{{ $cartItem['id'] }}]"
                                        id="cartQuantity{{ $cartItem['id'] }}"
                                        onchange="updateCartQuantity('{{ $minimum_order->minimum_order_qty }}', '{{ $cartItem['id'] }}')"
                                        min="{{ $minimum_order->minimum_order_qty ?? 1 }}"
                                        value="{{ $cartItem['quantity'] }}">
                                </div>
                            </div>
                            <div class="cart-counter-number">
                                <div class="product-count-box">
                                  <p class="cart-counter-number-p">  {{ \App\CPU\Helpers::currency_converter(($cartItem['price'] - $cartItem['discount']) * $cartItem['quantity']) }}</p>
                                </div>
                            </div>

                            <div class="cart-del-box">
                                <svg onclick="removeFromCart({{ $cartItem['id'] }})" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.46457 24.3895C6.46457 25.0361 6.72139 25.6561 7.17855 26.1133C7.63571 26.5704 8.25575 26.8273 8.90228 26.8273H21.0908C21.7373 26.8273 22.3574 26.5704 22.8145 26.1133C23.2717 25.6561 23.5285 25.0361 23.5285 24.3895V9.76328H25.9662V7.32557H21.0908V4.88786C21.0908 4.24134 20.834 3.6213 20.3768 3.16414C19.9197 2.70698 19.2996 2.45015 18.6531 2.45015H11.34C10.6935 2.45015 10.0734 2.70698 9.61626 3.16414C9.1591 3.6213 8.90228 4.24134 8.90228 4.88786V7.32557H4.02686V9.76328H6.46457V24.3895ZM11.34 4.88786H18.6531V7.32557H11.34V4.88786ZM10.1211 9.76328H21.0908V24.3895H8.90228V9.76328H10.1211Z"
                                        fill="#777777" />
                                    <path
                                        d="M11.3398 12.201H13.7776V21.9518H11.3398V12.201ZM16.2153 12.201H18.653V21.9518H16.2153V12.201Z"
                                        fill="#777777" />
                                </svg>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
            @if ($cart->count() == 0)
                <div class="d-flex justify-content-center align-items-center">
                    <h4 class="text-danger text-capitalize"
                        style="font-size:25px; font-weight:600; color:#FF061E !important;">
                        {{ \App\CPU\translate('cart_empty') }}</h4>
                </div>
            @endif

            

            <form method="get" style="margin-top: 20px">
                <div class="form-group">
                    <div class="row">
                        <div class="col-12">
                            {{-- <label for="phoneLabel" style="font-size: 12px;"
                                class="form-label input-label">{{ \App\CPU\translate('order_note') }} <span
                                    class="input-label-secondary">({{ \App\CPU\translate('Optional') }})</span></label> --}}
                            <textarea class="form-control input-style w-100" id="order_note" name="order_note" style="height: 150px !important;" placeholder="{{ \App\CPU\translate('order_note') }}({{ \App\CPU\translate('Optional') }})">{{ session('order_note') }}</textarea>
                        </div>
                    </div>
                </div>
            </form>


            <div class="d-flex btn-full-max-sm align-items-center __gap-6px flex-wrap justify-content-between">
                <a href="{{ route('home') }}" class="btn custom_btn">
                    <i class="fa fa-{{ Session::get('direction') === 'rtl' ? 'forward' : 'backward' }} px-1"></i>
                    {{ \App\CPU\translate('continue_shopping') }}
                </a>
            </div>

        </div>

        <!-- Sidebar-->
        @include('web-views.partials._order-summary')

    </div>
</div>

{{-- NEW --}}

<script>
    cartQuantityInitialize();

    function set_shipping_id(id, cart_group_id) {
        $.get({
            url: '{{ url('/') }}/customer/set-shipping-method',
            dataType: 'json',
            data: {
                id: id,
                cart_group_id: cart_group_id
            },
            beforeSend: function() {
                $('#loading').show();
            },
            success: function(data) {
                location.reload();
            },
            complete: function() {
                $('#loading').hide();
            },
        });
    }
</script>
<script>
    function checkout() {
        let order_note = $('#order_note').val();
        //console.log(order_note);
        $.post({
            url: "{{ route('order_note') }}",
            data: {
                _token: '{{ csrf_token() }}',
                order_note: order_note,

            },
            beforeSend: function() {
                $('#loading').show();
            },
            success: function(data) {
                console.log(data);
                let url = "{{ route('checkout-details') }}";
                location.href = url;

            },
            complete: function() {
                $('#loading').hide();
            },
        });
    }
</script>
