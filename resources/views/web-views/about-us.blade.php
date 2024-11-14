<style>  @font-face {
    font-family: 'BURBANKBIGCONDENSED-BOLD';
    src: url({{ asset('public/assets/front-end/fonts/BURBANKBIGCONDENSED-BOLD.ttf')}});
  
}
@font-face {
    font-family: 'BURBANKBIGCONDENSED-BLACK';
    src: url({{ asset('public/assets/front-end/fonts/BURBANKBIGCONDENSED-BLACK.ttf')}});
  
}</style>

@extends('layouts.front-end.app')

@section('title',\App\CPU\translate('About Us'))

@push('css_or_js')

    <meta property="og:image" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="og:title" content="About {{$web_config['name']->value}} "/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <meta property="twitter:card" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="twitter:title" content="about {{$web_config['name']->value}}"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value,0,100) !!}">
@endpush

@section('content')

      <div class="row ">
          <div class="col-md-12">
                <h2 class="text-center mt-3 headerTitle" style="font-family: 'BURBANKBIGCONDENSED-BOLD'; font-size:36px;
    display: flex;
    height: 100%;
     align-items: center;
    justify-content: space-around">{{\App\CPU\translate('About Us')}}</h2>         
          </div>

</div>
<br>
    <div class="container for-container rtl __inlini-51">
      
           <div class="row align-items-center">
               <div class="col-md-12 text-center">
                   <h2 style="font-family: 'BURBANKBIGCONDENSED-BOLD'; ">Bringing Life to Used Fencing Equipment for Growing Champions</h2>
                   <p>
                       At Remise Fencing Gear, we understand the journey of young fencers as they evolve into future champions. Our passion lies in providing a cost-effective solution for parents and fencers alike. We recognize that much like children's clothing, fencing equipment often experiences the same fate – the rapid pace at which they outgrow their gear. This is where we step in, bridging the gap for aspiring fencers who want to purchase new and used fencing equipment that is affordable.                   </p>
               <br><br>
               </div>

               <div class="col-md-6">
                   <h2 style="font-family: 'BURBANKBIGCONDENSED-BOLD'; ">Our Mission: Elevating Fencing Journeys, One Thrust at a Time</h2>
                   <p>
                      Our mission at Remise Fencing Gear is simple yet impactful: to empower fencers by ensuring they have access to top-notch, gently-used and new fencing equipment that doesn't break the bank. We firmly believe that the journey of a fencing champion starts with the right tools, and we're committed to making these tools accessible to all families, regardless of their budget.  </p>
               </div>
               
               
               <div class="col-md-6">
                   <img style="border-radius:25px; height:80%; width:100%; object-fit:cover;" src="/storage/app/public/banner/2023-04-17-643dd28846186.png" alt="image">
                  
               </div>
               <!--<div class="col-md-12">-->
               <!--    <br>-->
               <!--    <h2 style="font-family: 'BURBANKBIGCONDENSED-BOLD'; " class="text-center">Why Choose Us?</h2>-->
               <!--</div>-->
               <!--<div class="col-md-12">-->
               <!--<h2 style="font-family: 'BURBANKBIGCONDENSED-BOLD'; ">1.	Quality Assurance</h2>-->
               <!--<p>-->
               <!--    Our experienced team meticulously inspects and selects the finest preloved fencing equipment. Each piece is chosen with care, ensuring it meets the highest standards of quality and safety.-->
               <!--</p>-->
                   
               <!--     <h2 style="font-family: 'BURBANKBIGCONDENSED-BOLD'; ">2.	Affordability</h2>-->
               <!--<p>-->
               <!--    We understand the financial commitments that come with nurturing a young fencer's dreams. Our competitively priced preloved gear allows you to invest wisely in your child's passion without compromising on quality.-->
               <!--</p>-->
               
               
               <!--     <h2 style="font-family: 'BURBANKBIGCONDENSED-BOLD'; ">3.	Sustainability</h2>-->
               <!--<p>-->
               <!--    By choosing preloved fencing equipment, you're making an eco-friendly choice that contributes to reducing waste and conserving resources. Join us in our commitment to a more sustainable future.  </p>-->
               
               
               
               <!--     <h2 style="font-family: 'BURBANKBIGCONDENSED-BOLD'; ">4.	Growing with Confidence</h2>-->
               <!--<p>-->
               <!--    Watching your child outgrow clothing and equipment is inevitable. With [Website Name], you can ensure that your young fencer always trains and competes with confidence in gear that fits perfectly.-->
               <!--</p>-->
               
               
               
               <!--     <h2 style="font-family: 'BURBANKBIGCONDENSED-BOLD'; ">5.	Community and Support</h2>-->
               <!--<p>-->
               <!--    We're more than just a marketplace. We're a community of fencing enthusiasts who understand the unique challenges of growing fencers. Count on us for advice, insights, and a supportive network.-->
               <!--</p>-->
               
               
               
               <!--</div>-->
               
                <div class="col-md-6">
                    <br><br>
                    
                   <img style="border-radius:25px;  width:100%; object-fit:cover;" src="/storage/app/public/banner/2023-04-17-643dd30a276b6.png" alt="image">
                  
               </div>
               <div class="col-md-6">
                   
                   <h2 style="font-family: 'BURBANKBIGCONDENSED-BOLD'; ">Join Us in the Fencing Journey!</h2>
                   <p>
                      Whether your young or experienced fencer striving to reach the next level, Remise Fencing Gear is here to provide a seamless experience for acquiring top-quality, preloved and new fencing equipment. We invite you to explore our collection, browse through a variety of options, and make a choice that sets your fencer on the path to success.
                   </p>
               </div>
               <div class="col-md-12">

<br><br>
                   <p class="text-center" style="font-size:16px;">
                  "Thank you for being a part of our family."
                   </p>
               </div>
           </div>
      

      
</div>
     
    <br>
    <br>
    
    
    
 
    
    
@endsection

<style>
.innnn{
    height:100%;
}
     .fjsdgjf{
        background: url("/storage/app/public/banner/2023-04-17-643dd28846186.png") !important;
        background-size:cover !important;
        background-repeat:no-repeat;
        width:100%;
        height:50%;
        border-radius:20px;
    }
    .fjsdgjf::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50%;
    background-color: rgba(0, 0, 0, 0.5); 
}
</style>
