<div class="">
    <div class="inner122">
        <div class="">
            @php($overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews))

            <div class="product-card">
                <a href="{{ route('product', $product->slug) }}">
                    <img src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product['thumbnail'] }}"
                        onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                        class="product-img">
                    <h4 class="product-title">{{ $product['name'] }}</h4>
                    <p class="product-content">{{ strip_tags($product['details']) }}</p>
                    <p class="product-price">
                        {{ \App\CPU\Helpers::currency_converter($product->unit_price - \App\CPU\Helpers::get_product_discount($product, $product->unit_price)) }}
                    </p>
                </a>
                <a href="{{ route('product', $product->slug) }}" class="btn t-btn">Add To Cart<svg width="27"
                        height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.7022 19.7024L14.2928 21.2931L21.8377 13.7482L14.2928 6.20337L12.7022 7.79401L17.5315 12.6233H6.74799V14.8731H17.5315L12.7022 19.7024Z"
                            fill="#FF061E" />
                    </svg>
                </a>
            </div>

        </div>
    </div>
</div>



<style>
    .flash_deal_product {
        height: 310px;
        ;
    }

    .__img-125px {
        width: 208px;
    }

    @media screen and (max-width:825px) {

        .__img-125px {
            width: 225px;
        }

    }
</style>
