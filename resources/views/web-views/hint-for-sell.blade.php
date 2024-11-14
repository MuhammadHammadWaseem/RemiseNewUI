<style>
    @font-face {
        font-family: 'BURBANKBIGCONDENSED-BOLD';
        src: url({{ asset('public/assets/front-end/fonts/BURBANKBIGCONDENSED-BOLD.ttf') }});

    }

    @font-face {
        font-family: 'BURBANKBIGCONDENSED-BLACK';
        src: url({{ asset('public/assets/front-end/fonts/BURBANKBIGCONDENSED-BLACK.ttf') }});

        .__card .card-body p img {
            border-radius: 10px !important;
        }
    }
</style>

@extends('layouts.front-end.app')

@section('title', \App\CPU\translate('hint of selling'))

@push('css_or_js')
    <meta property="og:image" content="{{ asset('storage/app/public/company') }}/{{ $web_config['web_logo']->value }}" />
    <meta property="og:title" content="Terms & conditions of {{ $web_config['name']->value }} " />
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:description" content="{!! substr($web_config['about']->value, 0, 100) !!}">

    <meta property="twitter:card" content="{{ asset('storage/app/public/company') }}/{{ $web_config['web_logo']->value }}" />
    <meta property="twitter:title" content="Terms & conditions of {{ $web_config['name']->value }}" />
    <meta property="twitter:url" content="{{ env('APP_URL') }}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value, 0, 100) !!}">
@endpush

@section('content')
    <div class="container py-5 rtl" style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }}; ">
        <h2 class="text-center mb-3 headerTitle" style="font-family: 'BURBANKBIGCONDENSED-BOLD'; font-size:36.23px;">
            {{ \App\CPU\translate(' Seller Hints and Tips') }}</h2>
            <br>
            <p class="text-center">Welcome to the Remise Fencing Gear Seller Hints page! Here, we provide you with valuable insights to enhance your experience when selling your used fencing gear on our platform. Follow these tips to ensure a successful and satisfying selling journey.</p>
      
      <br>
        <div class="card __card" ">
            <div class="card-body">

                <ul>

                    <li>

                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">Clean and Inspect</h2>
                        <p style="font-family: 'Poppins';">Before listing your fencing gear, thoroughly clean and inspect each item. Presenting clean and well-maintained gear increases its appeal to potential buyers.</p>

                    </li>

                    <li>

                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">Accurate Descriptions</h2>
                        <p style="font-family: 'Poppins';">Provide detailed and accurate descriptions of your items. Include information about brand, size, condition, and any specific features. Honest and transparent descriptions build trust with buyers.</p>

                    </li>
                    <li>

                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">High-Quality Photos</h2>
                        <p style="font-family: 'Poppins';">Take clear and high-quality photos of your gear from different angles. Good visuals help buyers understand the condition and appearance of the items they are interested in.</p>

                    </li>

                    <li>
                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">
                            Set Competitive Prices
                        </h2>
                        <p style="font-family: 'Poppins';"> Research similar items on our platform and other marketplaces to set competitive prices. Reasonably priced items are more likely to attract potential buyers.</p>
                    </li>

                    <li>
                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">
                            Bundle Deals
                        </h2>
                        <p style="font-family: 'Poppins';">Consider offering bundle deals for related items, such as a set of foils or a complete fencing kit. Buyers may find these offers attractive and cost-effective.
                        </p>

                    </li>
                    <li>
                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">
                            Provide History
                        </h2>
                        <p style="font-family: 'Poppins';"> If applicable, share the history of your gear. For example, mention if it has been used in specific tournaments or events. This personal touch can make your items more appealing.</p>
                    </li>
                    <li>
                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">
                         Shipping Details
                        </h2 style="font-family: 'Poppins';">
                        <p>Clearly outline your shipping policies, including costs, methods, and estimated delivery times. Providing this information upfront helps buyers make informed decisions.</p>
                    </li>
                    
                    
                    <li>
                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">
                         Prompt Responses
                        </h2 style="font-family: 'Poppins';">
                        <p> Respond promptly to inquiries and messages from potential buyers. Quick and helpful communication enhances the buying experience and encourages trust. </p>
                    </li>
                    
                    
                    
                    
                    
                    <li>
                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">
                         Package Securely
                        </h2 style="font-family: 'Poppins';">
                        <p> When shipping your sold items, ensure they are securely packaged to prevent damage during transit. Use appropriate padding and materials for protection.</p>
                    </li>
                    
                    
                    
                    
                    
                    
                    <li>
                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">
                         Review Our Policies
                        </h2 style="font-family: 'Poppins';">
                        <p>Familiarize yourself with Remise Fencing Gear's Seller Terms and Conditions. Adhering to our policies ensures a smooth and compliant selling process. </p>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                    <li>
                        <h2 style="font-family: 'BURBANKBIGCONDENSED-BLACK'; font-size:25px;">
                         Stay Positive
                        </h2 style="font-family: 'Poppins';">
                        <p>Selling your used fencing gear is an opportunity to contribute to the fencing community and help fellow enthusiasts. Embrace the process and enjoy connecting with buyers. </p>
                    </li>
                    
                    
                    
                    
                    
                </ul>




            </div>
        </div>


<div class="container">
    
            <br>

<p class="text-center">Remember, your expertise and attention to detail make a significant impact on buyers' experiences. By following these hints, you're well on your way to successful selling on Remise Fencing Gear.</p>


<br>
<p class="text-center">Thank you for choosing Remise Fencing Gear as your platform for selling used fencing gear. If you have any questions or need further assistance, please don't hesitate to contact our support team at  <b ><a style="color:red; text-decoration: none !important;" href="mailto:remise@searchmarketingservices.co">remise@searchmarketingservices.co</a></b></p>
    
</div>        

    </div>
@endsection
