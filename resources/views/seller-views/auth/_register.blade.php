@extends('layouts.front-end.app')



@section('title', \App\CPU\translate('Register'))

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">



    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"

        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"

        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"

        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"

        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"

        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="/stript.js"></script>



    <style>

            @font-face {

    font-family: 'BURBANKBIGCONDENSED-BOLD';

    src: url({{ asset('public/assets/front-end/fonts/BURBANKBIGCONDENSED-BOLD.ttf')}});

  

}

@font-face {

    font-family: 'BURBANKBIGCONDENSED-BLACK';

    src: url({{ asset('public/assets/front-end/fonts/BURBANKBIGCONDENSED-BLACK.ttf')}});

  

}



        .lblClr{

            color: #1E1E1EB2 !important;

        }

        .browseImg{

            color: #000 !important;

            font-size: 12px;

            border: none !important;

            text-align: initial;

        }

        .browseImg::after{

            content: "Browse" !important;

    background: #000 !important;

    color: #fff !important;

    width: 150px;

    text-align: center;

        }

        .lblClr .phoneTxt{

            font-size:10px !important;

            color:#1E1E1EB2 !important;

        }

        @media screen and (max-width: 480px){

            .lblClr .phoneTxt{

            font-size: 7px !important;

        }

        }

    </style>

</head>



<body>





@section('content')



    <!---- New Section starts here-->





    <div class="container my-3 pb-5 innerArea_new register">

        <br><br><br>

        <div class="col-12 logo text-center">

            <img src="{{asset("storage/app/public/company")."/".$web_config['web_logo']->value}}"

            onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"

            alt="{{$web_config['name']->value}}" class=" logoImg1" width="10%">

            <div class="col-12 text_area1">

                <h1 class="top-text" style="font-family: 'BURBANKBIGCONDENSED-BOLD';">Welcome To Remise</h1>

                <span class="span_text"> <small> Register to create your Seller Account 

                    <!--<a href="{{route('customer.auth.sign-up')}}" style="    font-size: 15px;-->

                    <!--color: #000;-->

                    <!--text-decoration: none;-->

                    <!--font-weight:500;">SignUp As a Customer</a>-->
                    
                    </small></span>
                    
                    <br>



            </div>





        </div>

        <br>



        <div class="Ship-Ser-form">

            <div class="card-header" style="background-color: transparent !important;">

                <h5 class="card-title m-0">

                    <svg width="22" height="22" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g><path id="_x38_" d="m94.581 96.596c0-1.106.907-1.984 2.013-1.984s1.984.878 1.984 1.984v29.392c0 1.105-.879 2.013-1.984 2.013h-85.178c-1.105 0-1.984-.907-1.984-2.013v-50.537c0-1.106.878-1.984 1.984-1.984s2.013.878 2.013 1.984v48.552h81.152z" fill="#000000" data-original="#000000" class=""></path><path id="_x37_" d="m29.104 120.8c0 1.105-.907 2.013-2.013 2.013s-1.983-.907-1.983-2.013v-25.537c0-3.798 1.53-7.256 4.053-9.75 2.495-2.494 5.953-4.054 9.751-4.054s7.256 1.56 9.75 4.054c2.495 2.494 4.054 5.952 4.054 9.75v25.537c0 1.105-.907 2.013-2.012 2.013-1.106 0-1.985-.907-1.985-2.013v-25.537c0-2.692-1.105-5.131-2.891-6.915-1.786-1.786-4.224-2.892-6.917-2.892s-5.159 1.105-6.944 2.892c-1.758 1.784-2.863 4.223-2.863 6.915z" fill="#000000" data-original="#000000" class=""></path><path id="_x36_" d="m65.584 104.843h18.367v-13.974h-18.367zm20.38 3.997h-22.364c-1.105 0-2.013-.879-2.013-1.984v-17.999c0-1.105.907-1.984 2.013-1.984h22.364c1.105 0 2.013.879 2.013 1.984v17.998c0 1.106-.908 1.985-2.013 1.985z" fill="#000000" data-original="#000000" class=""></path><path id="_x35_" clip-rule="evenodd" d="m42.256 110.058c1.077 0 1.984-.906 1.984-1.983 0-1.105-.907-2.013-1.984-2.013-1.105 0-2.013.907-2.013 2.013 0 1.076.907 1.983 2.013 1.983z" fill-rule="evenodd" fill="#000000" data-original="#000000" class=""></path><path id="_x34_" d="m44.58 61.959v-.114l1.333-24.744h-7.683l-4.535 24.971c.028 1.587.624 3.005 1.616 4.054.963 1.021 2.324 1.644 3.826 1.644 1.475 0 2.834-.623 3.798-1.644 1.021-1.077 1.616-2.551 1.616-4.167zm5.301-24.857-1.304 24.857c0 1.616.624 3.09 1.616 4.167.964 1.021 2.324 1.644 3.826 1.644 1.474 0 2.834-.623 3.798-1.644 1.021-1.077 1.616-2.551 1.616-4.167h.028l-.681-12.471c-.057-1.105.794-2.041 1.9-2.098 1.105-.057 2.041.794 2.097 1.899l.652 12.556v.114h.028c0 1.616.624 3.09 1.616 4.167.963 1.021 2.324 1.644 3.826 1.644 1.104 0 1.983.907 1.983 2.012s-.879 2.013-1.983 2.013c-2.636 0-5.018-1.134-6.718-2.919-.255-.283-.51-.566-.737-.879-.226.313-.481.596-.736.879-1.701 1.785-4.083 2.919-6.69 2.919-2.636 0-5.017-1.134-6.718-2.919-.255-.283-.51-.566-.737-.879-.227.313-.481.596-.736.879-1.701 1.785-4.082 2.919-6.69 2.919-2.636 0-5.017-1.134-6.718-2.919-.255-.283-.51-.566-.737-.879-.227.313-.482.596-.737.879-1.701 1.785-4.082 2.919-6.689 2.919-2.636 0-5.018-1.134-6.718-2.919-.255-.283-.51-.566-.737-.879-.227.313-.482.596-.737.879-1.7 1.785-4.081 2.919-6.689 2.919-2.239 0-4.28-.822-5.896-2.154-1.616-1.331-2.807-3.23-3.289-5.413-.169-.708-.226-1.389-.169-2.069.056-.68.227-1.36.51-2.041l8.277-20.181c.85-2.098 2.239-3.798 3.94-4.988 1.729-1.191 3.77-1.843 5.981-1.843h36.565c1.105 0 2.012.907 2.012 2.013 0 1.077-.907 1.984-2.012 1.984h-5.413zm-15.675 0h-8.107l-7.284 25.084c.057 1.531.652 2.92 1.616 3.94s2.324 1.644 3.827 1.644c1.474 0 2.834-.623 3.798-1.644 1.021-1.077 1.616-2.551 1.616-4.167h.028c0-.114 0-.255.028-.369zm-12.245 0h-3.231c-1.389 0-2.665.396-3.713 1.134-1.077.765-1.956 1.842-2.522 3.231l-8.278 20.152c-.113.283-.198.567-.227.851 0 .283 0 .567.085.878.283 1.304.992 2.438 1.956 3.231.935.766 2.069 1.19 3.345 1.19 1.474 0 2.834-.623 3.798-1.644 1.021-1.077 1.616-2.551 1.616-4.167h.028c0-.199.028-.369.057-.567z" fill="#000000" data-original="#000000" class=""></path><path id="_x33_" d="m60.624 115.585c-1.105 0-2.013-.878-2.013-1.983s.908-2.013 2.013-2.013h28.316c1.104 0 1.983.907 1.983 2.013s-.879 1.983-1.983 1.983z" fill="#000000" data-original="#000000" class=""></path><path id="_x32_" d="m124.003 46.767-25.736 43.536c-.567.963-1.786 1.275-2.722.708-.312-.17-.566-.425-.736-.736l-25.71-43.508c-.028-.057-.057-.113-.085-.142-1.247-2.268-2.211-4.733-2.891-7.284-.652-2.551-.992-5.187-.992-7.908 0-8.673 3.515-16.524 9.184-22.221 5.697-5.698 13.548-9.212 22.25-9.212 8.673 0 16.525 3.514 22.223 9.211s9.212 13.549 9.212 22.222c0 2.721-.368 5.357-1.021 7.908-.681 2.607-1.673 5.073-2.948 7.369zm-27.438-34.41c5.271 0 10.034 2.126 13.492 5.583 3.458 3.458 5.584 8.22 5.584 13.492s-2.126 10.034-5.584 13.492-8.221 5.612-13.492 5.612c-5.273 0-10.063-2.154-13.521-5.612-3.43-3.458-5.583-8.22-5.583-13.492s2.153-10.034 5.583-13.492c3.459-3.457 8.248-5.583 13.521-5.583zm10.658 8.418c-2.721-2.749-6.491-4.422-10.657-4.422-4.167 0-7.937 1.673-10.687 4.422-2.721 2.721-4.422 6.491-4.422 10.657 0 4.167 1.701 7.937 4.422 10.686 2.75 2.721 6.52 4.393 10.687 4.393 4.166 0 7.937-1.672 10.657-4.393 2.722-2.749 4.423-6.519 4.423-10.686 0-4.166-1.702-7.935-4.423-10.657zm-10.658 64.596 24.008-40.645c1.105-1.984 1.956-4.138 2.551-6.406.567-2.183.879-4.479.879-6.888 0-7.567-3.09-14.427-8.049-19.387-4.962-4.96-11.821-8.049-19.389-8.049-7.597 0-14.456 3.089-19.416 8.049-4.962 4.96-8.022 11.82-8.022 19.387 0 2.409.283 4.705.85 6.888.596 2.239 1.446 4.365 2.523 6.349l.028.057z" fill="#000000" data-original="#000000" class=""></path><path id="_x31_" d="m96.565 22.278c2.495 0 4.79 1.049 6.462 2.693 1.645 1.644 2.665 3.939 2.665 6.462s-1.021 4.818-2.665 6.462c-1.672 1.672-3.938 2.693-6.462 2.693-2.522 0-4.819-1.021-6.492-2.693-.028-.028-.057-.085-.113-.113-1.586-1.644-2.55-3.883-2.55-6.349 0-2.522 1.021-4.818 2.663-6.462.057-.028.085-.085.142-.114 1.644-1.587 3.885-2.579 6.35-2.579zm3.628 5.498c-.935-.907-2.21-1.474-3.628-1.474-1.389 0-2.636.539-3.571 1.417-.028.028-.057.057-.085.085-.937.936-1.504 2.211-1.504 3.628 0 1.389.539 2.636 1.419 3.572.028.028.057.057.085.085.936.907 2.211 1.502 3.656 1.502 1.418 0 2.693-.595 3.628-1.502.936-.936 1.502-2.211 1.502-3.657 0-1.417-.566-2.692-1.502-3.628z" fill="#000000" data-original="#000000" class=""></path></g></g></svg>

                    {{\App\CPU\translate('Seller')}} {{\App\CPU\translate('Info')}}

                </h5>

            </div>

            {{-- <h3 class="mb-3 text-center"> {{\App\CPU\translate('Shop')}} {{\App\CPU\translate('Application')}}</h3> --}}

                            <form class="__shop-apply" action="{{route('shop.apply')}}" id="form-id" method="post" enctype="multipart/form-data">

                            @csrf

                            {{-- {{\App\CPU\translate('Seller')}} {{\App\CPU\translate('Info')}} --}}

                            <div class="form-group ship-form">

                                <label class="lblClr" for="reg-fn">{{\App\CPU\translate('first_name')}}</label>

                                <input type="text" class="form-control ship-control form-control-user" id="exampleFirstName" name="f_name" value="{{old('f_name')}}" required>

                            </div>



                            <div class="form-group ship-form">

                                <label class="lblClr" for="reg-ln">{{\App\CPU\translate('last_name')}}</label>

                                <input type="text" class="form-control ship-control form-control-user" id="exampleLastName" name="l_name" value="{{old('l_name')}}"  required>

                            </div>



                            <div class="form-group ship-form">

                                <label class="lblClr" for="reg-email">{{\App\CPU\translate('email_address')}}</label>

                                <input type="email" class="form-control ship-control form-control-user" id="exampleInputEmail" name="email" value="{{old('email')}}" required>

                            </div>



                            <div class="form-group ship-form">

                                <label class="lblClr" for="reg-phone">{{\App\CPU\translate('phone_number')}}

                                    <small class="text-primary phoneTxt" >( * {{\App\CPU\translate('country_code_is_must')}} {{\App\CPU\translate('please_enter_valid_phone_number')}} )</small></label>

                                    <input type="number" class="form-control ship-control form-control-user" id="exampleInputPhone" name="phone" value="{{old('phone')}}"  required>

                                <div class="invalid-feedback">{{\App\CPU\translate('Please enter your phone number')}}!</div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    
                                    <div class="form-group ship-form">
                                        <label class="lblClr" for="reg-ln">{{\App\CPU\translate('Address')}}</label>
                                        <input name="address" class="form-control ship-control" value="{{ old('address') }}" id="address"rows="1">
                                    </div>
                                    
                                    
                                    <!--<div class="form-group ship-form">-->
                                    <!--    <label class="lblClr" for="reg-ln">{{\App\CPU\translate('Street')}}</label>-->
                                    <!--    <input name="street" class="form-control ship-control" value="{{ old('street') }}" id="street"rows="1">-->
                                    <!--</div>-->
                                </div>
                                
                            </div>
        
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group ship-form">
                                        <label class="lblClr" for="reg-ln">{{\App\CPU\translate('City')}}</label>
                                        <input name="city" class="form-control ship-control" value="{{ old('city') }}" id="city"rows="1" >
                                    </div>
                                </div>
                        
                                <div class="col-6">
                                    <div class="form-group ship-form">
                                        <label class="lblClr" for="reg-ln">{{\App\CPU\translate('State')}}</label>
                                        <input name="state" class="form-control ship-control" value="{{ old('state') }}" id="state"rows="1" >
                                    </div>
                                </div>
                            </div>
        
                            <div class="row">
                        
                                <div class="col-6">
                                    <div class="form-group ship-form">
                                        <label class="lblClr" for="reg-ln">{{\App\CPU\translate('Country')}}</label>
                                        <!--<input name="country" class="form-control ship-control" value="{{ old('country') }}" id="country" rows="1" max="3" >-->
                                        <!--{{old('country')}}-->
                                        
                                    <select name="country" class="form-control ship-control" value="{{ old('country') }}" id="country"r>
    <option>select country</option>
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="USA">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="form-group ship-form">
                                        <label class="lblClr" for="reg-ln">{{\App\CPU\translate('Postal_code')}}</label>
                                        <input name="postal_code" class="form-control ship-control" value="{{ old('postal_code') }}" id="postal_code"rows="1">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="form-group ship-form">-->
                            <!--    <label class="lblClr" for="reg-ln">{{\App\CPU\translate('Address')}}</label>-->
                            <!--    <input name="address" class="form-control ship-control" value="{{ old('address') }}" id="address"rows="1">-->
                            <!--</div>-->


                            <div class="form-group ship-form passINPUT" >

                                <label class="lblClr" for="si-password">{{\App\CPU\translate('password')}}</label>

                                        <div class="password-toggle">

                                            <input type="password" class="form-control ship-control form-control-user" minlength="6" id="exampleInputPassword" name="password" required>

                                            <label class="password-toggle-btn btnPass"style=" background: transparent !important;">

                                                <input class="custom-control-input" type="checkbox">



                                                {{-- <i class="fa-solid fa-eye fa-flip-horizontal fa-sm" style="color: #00000099;

                                                font-size: 16px;"></i> --}}



                                                <svg onclick="toggleBtnPass()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#00000099" class="bi bi-eye-fill" viewBox="0 0 16 16">

                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>

                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>

                                                  </svg>

                                                <span

                                                    class="sr-only">{{\App\CPU\translate('Show')}} {{\App\CPU\translate('password')}} </span>

                                            </label>

                                        </div>

                            </div>



                            <div class="form-group ship-form passINPUT">

                                <label class="lblClr" for="si-password">{{\App\CPU\translate('confirm_password')}}</label>

                                        <div class="password-toggle">

                                            <input type="password" class="form-control ship-control form-control-user" minlength="6" id="exampleRepeatPassword"  required>



                                            <label class="password-toggle-btn btnPass" style="background: transparent !important;">

                                                <input class="custom-control-input" type="checkbox"

                                                       style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">

                                                       <svg onclick="toggleBtnPass1()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#00000099" class="bi bi-eye-fill" viewBox="0 0 16 16">

                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>

                                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>

                                                      </svg>



                                                       <span

                                                    class="sr-only">{{\App\CPU\translate('Show')}} {{\App\CPU\translate('password')}} </span>

                                            </label>

                                            <div class="pass invalid-feedback">{{\App\CPU\translate('Repeat')}}  {{\App\CPU\translate('password')}} {{\App\CPU\translate('not match')}} .</div>



                                          </div>

                                          <br><br>

                                        </div>



                                        {{-- Image --}}

                                        <div class="col-sm-12 text-center">

                                            <center>

                                                <img class="__img-125px object-cover" id="viewer"

                                                    src="{{asset('public\assets\back-end\img\400x400\img2.jpg')}}" alt="banner image"/>

                                            </center>

                                            <div class="custom-file mt-3 ">

                                                <input type="file" name="image" id="customFileUpload" class="custom-file-input "

                                                    accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">

                                                <label class="custom-file-label  browseImg" for="customFileUpload">{{\App\CPU\translate('Upload')}} {{\App\CPU\translate('image')}}</label>

                                            </div>

                                            <br><br>

                                        </div>



<!--                                        <div class="card-header" style="background-color: transparent !important;">-->

<!--                                            <h5 class="card-title m-0">-->

<!--                                                <svg width="22" height="22" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g><path id="_x38_" d="m94.581 96.596c0-1.106.907-1.984 2.013-1.984s1.984.878 1.984 1.984v29.392c0 1.105-.879 2.013-1.984 2.013h-85.178c-1.105 0-1.984-.907-1.984-2.013v-50.537c0-1.106.878-1.984 1.984-1.984s2.013.878 2.013 1.984v48.552h81.152z" fill="#000000" data-original="#000000" class=""></path><path id="_x37_" d="m29.104 120.8c0 1.105-.907 2.013-2.013 2.013s-1.983-.907-1.983-2.013v-25.537c0-3.798 1.53-7.256 4.053-9.75 2.495-2.494 5.953-4.054 9.751-4.054s7.256 1.56 9.75 4.054c2.495 2.494 4.054 5.952 4.054 9.75v25.537c0 1.105-.907 2.013-2.012 2.013-1.106 0-1.985-.907-1.985-2.013v-25.537c0-2.692-1.105-5.131-2.891-6.915-1.786-1.786-4.224-2.892-6.917-2.892s-5.159 1.105-6.944 2.892c-1.758 1.784-2.863 4.223-2.863 6.915z" fill="#000000" data-original="#000000" class=""></path><path id="_x36_" d="m65.584 104.843h18.367v-13.974h-18.367zm20.38 3.997h-22.364c-1.105 0-2.013-.879-2.013-1.984v-17.999c0-1.105.907-1.984 2.013-1.984h22.364c1.105 0 2.013.879 2.013 1.984v17.998c0 1.106-.908 1.985-2.013 1.985z" fill="#000000" data-original="#000000" class=""></path><path id="_x35_" clip-rule="evenodd" d="m42.256 110.058c1.077 0 1.984-.906 1.984-1.983 0-1.105-.907-2.013-1.984-2.013-1.105 0-2.013.907-2.013 2.013 0 1.076.907 1.983 2.013 1.983z" fill-rule="evenodd" fill="#000000" data-original="#000000" class=""></path><path id="_x34_" d="m44.58 61.959v-.114l1.333-24.744h-7.683l-4.535 24.971c.028 1.587.624 3.005 1.616 4.054.963 1.021 2.324 1.644 3.826 1.644 1.475 0 2.834-.623 3.798-1.644 1.021-1.077 1.616-2.551 1.616-4.167zm5.301-24.857-1.304 24.857c0 1.616.624 3.09 1.616 4.167.964 1.021 2.324 1.644 3.826 1.644 1.474 0 2.834-.623 3.798-1.644 1.021-1.077 1.616-2.551 1.616-4.167h.028l-.681-12.471c-.057-1.105.794-2.041 1.9-2.098 1.105-.057 2.041.794 2.097 1.899l.652 12.556v.114h.028c0 1.616.624 3.09 1.616 4.167.963 1.021 2.324 1.644 3.826 1.644 1.104 0 1.983.907 1.983 2.012s-.879 2.013-1.983 2.013c-2.636 0-5.018-1.134-6.718-2.919-.255-.283-.51-.566-.737-.879-.226.313-.481.596-.736.879-1.701 1.785-4.083 2.919-6.69 2.919-2.636 0-5.017-1.134-6.718-2.919-.255-.283-.51-.566-.737-.879-.227.313-.481.596-.736.879-1.701 1.785-4.082 2.919-6.69 2.919-2.636 0-5.017-1.134-6.718-2.919-.255-.283-.51-.566-.737-.879-.227.313-.482.596-.737.879-1.701 1.785-4.082 2.919-6.689 2.919-2.636 0-5.018-1.134-6.718-2.919-.255-.283-.51-.566-.737-.879-.227.313-.482.596-.737.879-1.7 1.785-4.081 2.919-6.689 2.919-2.239 0-4.28-.822-5.896-2.154-1.616-1.331-2.807-3.23-3.289-5.413-.169-.708-.226-1.389-.169-2.069.056-.68.227-1.36.51-2.041l8.277-20.181c.85-2.098 2.239-3.798 3.94-4.988 1.729-1.191 3.77-1.843 5.981-1.843h36.565c1.105 0 2.012.907 2.012 2.013 0 1.077-.907 1.984-2.012 1.984h-5.413zm-15.675 0h-8.107l-7.284 25.084c.057 1.531.652 2.92 1.616 3.94s2.324 1.644 3.827 1.644c1.474 0 2.834-.623 3.798-1.644 1.021-1.077 1.616-2.551 1.616-4.167h.028c0-.114 0-.255.028-.369zm-12.245 0h-3.231c-1.389 0-2.665.396-3.713 1.134-1.077.765-1.956 1.842-2.522 3.231l-8.278 20.152c-.113.283-.198.567-.227.851 0 .283 0 .567.085.878.283 1.304.992 2.438 1.956 3.231.935.766 2.069 1.19 3.345 1.19 1.474 0 2.834-.623 3.798-1.644 1.021-1.077 1.616-2.551 1.616-4.167h.028c0-.199.028-.369.057-.567z" fill="#000000" data-original="#000000" class=""></path><path id="_x33_" d="m60.624 115.585c-1.105 0-2.013-.878-2.013-1.983s.908-2.013 2.013-2.013h28.316c1.104 0 1.983.907 1.983 2.013s-.879 1.983-1.983 1.983z" fill="#000000" data-original="#000000" class=""></path><path id="_x32_" d="m124.003 46.767-25.736 43.536c-.567.963-1.786 1.275-2.722.708-.312-.17-.566-.425-.736-.736l-25.71-43.508c-.028-.057-.057-.113-.085-.142-1.247-2.268-2.211-4.733-2.891-7.284-.652-2.551-.992-5.187-.992-7.908 0-8.673 3.515-16.524 9.184-22.221 5.697-5.698 13.548-9.212 22.25-9.212 8.673 0 16.525 3.514 22.223 9.211s9.212 13.549 9.212 22.222c0 2.721-.368 5.357-1.021 7.908-.681 2.607-1.673 5.073-2.948 7.369zm-27.438-34.41c5.271 0 10.034 2.126 13.492 5.583 3.458 3.458 5.584 8.22 5.584 13.492s-2.126 10.034-5.584 13.492-8.221 5.612-13.492 5.612c-5.273 0-10.063-2.154-13.521-5.612-3.43-3.458-5.583-8.22-5.583-13.492s2.153-10.034 5.583-13.492c3.459-3.457 8.248-5.583 13.521-5.583zm10.658 8.418c-2.721-2.749-6.491-4.422-10.657-4.422-4.167 0-7.937 1.673-10.687 4.422-2.721 2.721-4.422 6.491-4.422 10.657 0 4.167 1.701 7.937 4.422 10.686 2.75 2.721 6.52 4.393 10.687 4.393 4.166 0 7.937-1.672 10.657-4.393 2.722-2.749 4.423-6.519 4.423-10.686 0-4.166-1.702-7.935-4.423-10.657zm-10.658 64.596 24.008-40.645c1.105-1.984 1.956-4.138 2.551-6.406.567-2.183.879-4.479.879-6.888 0-7.567-3.09-14.427-8.049-19.387-4.962-4.96-11.821-8.049-19.389-8.049-7.597 0-14.456 3.089-19.416 8.049-4.962 4.96-8.022 11.82-8.022 19.387 0 2.409.283 4.705.85 6.888.596 2.239 1.446 4.365 2.523 6.349l.028.057z" fill="#000000" data-original="#000000" class=""></path><path id="_x31_" d="m96.565 22.278c2.495 0 4.79 1.049 6.462 2.693 1.645 1.644 2.665 3.939 2.665 6.462s-1.021 4.818-2.665 6.462c-1.672 1.672-3.938 2.693-6.462 2.693-2.522 0-4.819-1.021-6.492-2.693-.028-.028-.057-.085-.113-.113-1.586-1.644-2.55-3.883-2.55-6.349 0-2.522 1.021-4.818 2.663-6.462.057-.028.085-.085.142-.114 1.644-1.587 3.885-2.579 6.35-2.579zm3.628 5.498c-.935-.907-2.21-1.474-3.628-1.474-1.389 0-2.636.539-3.571 1.417-.028.028-.057.057-.085.085-.937.936-1.504 2.211-1.504 3.628 0 1.389.539 2.636 1.419 3.572.028.028.057.057.085.085.936.907 2.211 1.502 3.656 1.502 1.418 0 2.693-.595 3.628-1.502.936-.936 1.502-2.211 1.502-3.657 0-1.417-.566-2.692-1.502-3.628z" fill="#000000" data-original="#000000" class=""></path></g></g></svg>-->

<!--                                                {{\App\CPU\translate('Shop')}} {{\App\CPU\translate('Info')}}-->

<!--                                            </h5>-->

<!--                                        </div>-->



<!--                                        <div class="form-group ship-form">-->

<!--                                            <label class="lblClr" for="reg-fn">{{\App\CPU\translate('Shop_name')}}</label>-->

<!--                                            <input type="text" class="form-control ship-control form-control-user" id="shop_name" name="shop_name"  value="{{old('shop_name')}}"required>-->

<!--                                        </div>-->



<!--                                        <div class="row">-->
                                            
                                            
<!--                                            <div class="col-12">-->

<!--                                                <div class="form-group ship-form">-->

<!--                                                    <label class="lblClr" for="reg-ln">{{\App\CPU\translate('Address')}}</label>-->

<!--                                                    <input name="shop_street" class="form-control ship-control" id="shop_street"rows="1" >-->

<!--                                                    {{old('shop_street')}}-->

<!--                                                </div>-->

<!--                                            </div>-->

<!--                                        </div>-->


<!--                                        <div class="row">-->
<!--                                            <div class="col-6">-->

<!--                                                <div class="form-group ship-form">-->

<!--                                                    <label class="lblClr" for="reg-ln">{{\App\CPU\translate('State')}}</label>-->

<!--                                                    <input name="shop_state" class="form-control ship-control" id="shop_state"rows="1" >-->

<!--                                                    {{old('shop_state')}}-->

<!--                                                </div>-->

<!--                                            </div>-->

<!--                                            <div class="col-6">-->

<!--                                                <div class="form-group ship-form">-->

<!--                                                    <label class="lblClr" for="reg-ln">{{\App\CPU\translate('City')}}</label>-->

<!--                                                    <input name="shop_city" class="form-control ship-control" id="shop_city"rows="1" >-->

<!--                                                    {{old('shop_city')}}-->

<!--                                                </div>-->

<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        <div class="row">-->

<!--                                            <div class="col-6">-->

<!--                                                <div class="form-group ship-form">-->

<!--                                                    <label class="lblClr" for="reg-ln">{{\App\CPU\translate('Country')}}</label>-->
<!--                                                    <select name="shop_country" class="form-control ship-control" id="shop_country"r>-->
<!--    <option>select country</option>-->
<!--    <option value="AF">Afghanistan</option>-->
<!--    <option value="AX">Aland Islands</option>-->
<!--    <option value="AL">Albania</option>-->
<!--    <option value="DZ">Algeria</option>-->
<!--    <option value="AS">American Samoa</option>-->
<!--    <option value="AD">Andorra</option>-->
<!--    <option value="AO">Angola</option>-->
<!--    <option value="AI">Anguilla</option>-->
<!--    <option value="AQ">Antarctica</option>-->
<!--    <option value="AG">Antigua and Barbuda</option>-->
<!--    <option value="AR">Argentina</option>-->
<!--    <option value="AM">Armenia</option>-->
<!--    <option value="AW">Aruba</option>-->
<!--    <option value="AU">Australia</option>-->
<!--    <option value="AT">Austria</option>-->
<!--    <option value="AZ">Azerbaijan</option>-->
<!--    <option value="BS">Bahamas</option>-->
<!--    <option value="BH">Bahrain</option>-->
<!--    <option value="BD">Bangladesh</option>-->
<!--    <option value="BB">Barbados</option>-->
<!--    <option value="BY">Belarus</option>-->
<!--    <option value="BE">Belgium</option>-->
<!--    <option value="BZ">Belize</option>-->
<!--    <option value="BJ">Benin</option>-->
<!--    <option value="BM">Bermuda</option>-->
<!--    <option value="BT">Bhutan</option>-->
<!--    <option value="BO">Bolivia</option>-->
<!--    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>-->
<!--    <option value="BA">Bosnia and Herzegovina</option>-->
<!--    <option value="BW">Botswana</option>-->
<!--    <option value="BV">Bouvet Island</option>-->
<!--    <option value="BR">Brazil</option>-->
<!--    <option value="IO">British Indian Ocean Territory</option>-->
<!--    <option value="BN">Brunei Darussalam</option>-->
<!--    <option value="BG">Bulgaria</option>-->
<!--    <option value="BF">Burkina Faso</option>-->
<!--    <option value="BI">Burundi</option>-->
<!--    <option value="KH">Cambodia</option>-->
<!--    <option value="CM">Cameroon</option>-->
<!--    <option value="CA">Canada</option>-->
<!--    <option value="CV">Cape Verde</option>-->
<!--    <option value="KY">Cayman Islands</option>-->
<!--    <option value="CF">Central African Republic</option>-->
<!--    <option value="TD">Chad</option>-->
<!--    <option value="CL">Chile</option>-->
<!--    <option value="CN">China</option>-->
<!--    <option value="CX">Christmas Island</option>-->
<!--    <option value="CC">Cocos (Keeling) Islands</option>-->
<!--    <option value="CO">Colombia</option>-->
<!--    <option value="KM">Comoros</option>-->
<!--    <option value="CG">Congo</option>-->
<!--    <option value="CD">Congo, Democratic Republic of the Congo</option>-->
<!--    <option value="CK">Cook Islands</option>-->
<!--    <option value="CR">Costa Rica</option>-->
<!--    <option value="CI">Cote D'Ivoire</option>-->
<!--    <option value="HR">Croatia</option>-->
<!--    <option value="CU">Cuba</option>-->
<!--    <option value="CW">Curacao</option>-->
<!--    <option value="CY">Cyprus</option>-->
<!--    <option value="CZ">Czech Republic</option>-->
<!--    <option value="DK">Denmark</option>-->
<!--    <option value="DJ">Djibouti</option>-->
<!--    <option value="DM">Dominica</option>-->
<!--    <option value="DO">Dominican Republic</option>-->
<!--    <option value="EC">Ecuador</option>-->
<!--    <option value="EG">Egypt</option>-->
<!--    <option value="SV">El Salvador</option>-->
<!--    <option value="GQ">Equatorial Guinea</option>-->
<!--    <option value="ER">Eritrea</option>-->
<!--    <option value="EE">Estonia</option>-->
<!--    <option value="ET">Ethiopia</option>-->
<!--    <option value="FK">Falkland Islands (Malvinas)</option>-->
<!--    <option value="FO">Faroe Islands</option>-->
<!--    <option value="FJ">Fiji</option>-->
<!--    <option value="FI">Finland</option>-->
<!--    <option value="FR">France</option>-->
<!--    <option value="GF">French Guiana</option>-->
<!--    <option value="PF">French Polynesia</option>-->
<!--    <option value="TF">French Southern Territories</option>-->
<!--    <option value="GA">Gabon</option>-->
<!--    <option value="GM">Gambia</option>-->
<!--    <option value="GE">Georgia</option>-->
<!--    <option value="DE">Germany</option>-->
<!--    <option value="GH">Ghana</option>-->
<!--    <option value="GI">Gibraltar</option>-->
<!--    <option value="GR">Greece</option>-->
<!--    <option value="GL">Greenland</option>-->
<!--    <option value="GD">Grenada</option>-->
<!--    <option value="GP">Guadeloupe</option>-->
<!--    <option value="GU">Guam</option>-->
<!--    <option value="GT">Guatemala</option>-->
<!--    <option value="GG">Guernsey</option>-->
<!--    <option value="GN">Guinea</option>-->
<!--    <option value="GW">Guinea-Bissau</option>-->
<!--    <option value="GY">Guyana</option>-->
<!--    <option value="HT">Haiti</option>-->
<!--    <option value="HM">Heard Island and Mcdonald Islands</option>-->
<!--    <option value="VA">Holy See (Vatican City State)</option>-->
<!--    <option value="HN">Honduras</option>-->
<!--    <option value="HK">Hong Kong</option>-->
<!--    <option value="HU">Hungary</option>-->
<!--    <option value="IS">Iceland</option>-->
<!--    <option value="IN">India</option>-->
<!--    <option value="ID">Indonesia</option>-->
<!--    <option value="IR">Iran, Islamic Republic of</option>-->
<!--    <option value="IQ">Iraq</option>-->
<!--    <option value="IE">Ireland</option>-->
<!--    <option value="IM">Isle of Man</option>-->
<!--    <option value="IL">Israel</option>-->
<!--    <option value="IT">Italy</option>-->
<!--    <option value="JM">Jamaica</option>-->
<!--    <option value="JP">Japan</option>-->
<!--    <option value="JE">Jersey</option>-->
<!--    <option value="JO">Jordan</option>-->
<!--    <option value="KZ">Kazakhstan</option>-->
<!--    <option value="KE">Kenya</option>-->
<!--    <option value="KI">Kiribati</option>-->
<!--    <option value="KP">Korea, Democratic People's Republic of</option>-->
<!--    <option value="KR">Korea, Republic of</option>-->
<!--    <option value="XK">Kosovo</option>-->
<!--    <option value="KW">Kuwait</option>-->
<!--    <option value="KG">Kyrgyzstan</option>-->
<!--    <option value="LA">Lao People's Democratic Republic</option>-->
<!--    <option value="LV">Latvia</option>-->
<!--    <option value="LB">Lebanon</option>-->
<!--    <option value="LS">Lesotho</option>-->
<!--    <option value="LR">Liberia</option>-->
<!--    <option value="LY">Libyan Arab Jamahiriya</option>-->
<!--    <option value="LI">Liechtenstein</option>-->
<!--    <option value="LT">Lithuania</option>-->
<!--    <option value="LU">Luxembourg</option>-->
<!--    <option value="MO">Macao</option>-->
<!--    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>-->
<!--    <option value="MG">Madagascar</option>-->
<!--    <option value="MW">Malawi</option>-->
<!--    <option value="MY">Malaysia</option>-->
<!--    <option value="MV">Maldives</option>-->
<!--    <option value="ML">Mali</option>-->
<!--    <option value="MT">Malta</option>-->
<!--    <option value="MH">Marshall Islands</option>-->
<!--    <option value="MQ">Martinique</option>-->
<!--    <option value="MR">Mauritania</option>-->
<!--    <option value="MU">Mauritius</option>-->
<!--    <option value="YT">Mayotte</option>-->
<!--    <option value="MX">Mexico</option>-->
<!--    <option value="FM">Micronesia, Federated States of</option>-->
<!--    <option value="MD">Moldova, Republic of</option>-->
<!--    <option value="MC">Monaco</option>-->
<!--    <option value="MN">Mongolia</option>-->
<!--    <option value="ME">Montenegro</option>-->
<!--    <option value="MS">Montserrat</option>-->
<!--    <option value="MA">Morocco</option>-->
<!--    <option value="MZ">Mozambique</option>-->
<!--    <option value="MM">Myanmar</option>-->
<!--    <option value="NA">Namibia</option>-->
<!--    <option value="NR">Nauru</option>-->
<!--    <option value="NP">Nepal</option>-->
<!--    <option value="NL">Netherlands</option>-->
<!--    <option value="AN">Netherlands Antilles</option>-->
<!--    <option value="NC">New Caledonia</option>-->
<!--    <option value="NZ">New Zealand</option>-->
<!--    <option value="NI">Nicaragua</option>-->
<!--    <option value="NE">Niger</option>-->
<!--    <option value="NG">Nigeria</option>-->
<!--    <option value="NU">Niue</option>-->
<!--    <option value="NF">Norfolk Island</option>-->
<!--    <option value="MP">Northern Mariana Islands</option>-->
<!--    <option value="NO">Norway</option>-->
<!--    <option value="OM">Oman</option>-->
<!--    <option value="PK">Pakistan</option>-->
<!--    <option value="PW">Palau</option>-->
<!--    <option value="PS">Palestinian Territory, Occupied</option>-->
<!--    <option value="PA">Panama</option>-->
<!--    <option value="PG">Papua New Guinea</option>-->
<!--    <option value="PY">Paraguay</option>-->
<!--    <option value="PE">Peru</option>-->
<!--    <option value="PH">Philippines</option>-->
<!--    <option value="PN">Pitcairn</option>-->
<!--    <option value="PL">Poland</option>-->
<!--    <option value="PT">Portugal</option>-->
<!--    <option value="PR">Puerto Rico</option>-->
<!--    <option value="QA">Qatar</option>-->
<!--    <option value="RE">Reunion</option>-->
<!--    <option value="RO">Romania</option>-->
<!--    <option value="RU">Russian Federation</option>-->
<!--    <option value="RW">Rwanda</option>-->
<!--    <option value="BL">Saint Barthelemy</option>-->
<!--    <option value="SH">Saint Helena</option>-->
<!--    <option value="KN">Saint Kitts and Nevis</option>-->
<!--    <option value="LC">Saint Lucia</option>-->
<!--    <option value="MF">Saint Martin</option>-->
<!--    <option value="PM">Saint Pierre and Miquelon</option>-->
<!--    <option value="VC">Saint Vincent and the Grenadines</option>-->
<!--    <option value="WS">Samoa</option>-->
<!--    <option value="SM">San Marino</option>-->
<!--    <option value="ST">Sao Tome and Principe</option>-->
<!--    <option value="SA">Saudi Arabia</option>-->
<!--    <option value="SN">Senegal</option>-->
<!--    <option value="RS">Serbia</option>-->
<!--    <option value="CS">Serbia and Montenegro</option>-->
<!--    <option value="SC">Seychelles</option>-->
<!--    <option value="SL">Sierra Leone</option>-->
<!--    <option value="SG">Singapore</option>-->
<!--    <option value="SX">Sint Maarten</option>-->
<!--    <option value="SK">Slovakia</option>-->
<!--    <option value="SI">Slovenia</option>-->
<!--    <option value="SB">Solomon Islands</option>-->
<!--    <option value="SO">Somalia</option>-->
<!--    <option value="ZA">South Africa</option>-->
<!--    <option value="GS">South Georgia and the South Sandwich Islands</option>-->
<!--    <option value="SS">South Sudan</option>-->
<!--    <option value="ES">Spain</option>-->
<!--    <option value="LK">Sri Lanka</option>-->
<!--    <option value="SD">Sudan</option>-->
<!--    <option value="SR">Suriname</option>-->
<!--    <option value="SJ">Svalbard and Jan Mayen</option>-->
<!--    <option value="SZ">Swaziland</option>-->
<!--    <option value="SE">Sweden</option>-->
<!--    <option value="CH">Switzerland</option>-->
<!--    <option value="SY">Syrian Arab Republic</option>-->
<!--    <option value="TW">Taiwan, Province of China</option>-->
<!--    <option value="TJ">Tajikistan</option>-->
<!--    <option value="TZ">Tanzania, United Republic of</option>-->
<!--    <option value="TH">Thailand</option>-->
<!--    <option value="TL">Timor-Leste</option>-->
<!--    <option value="TG">Togo</option>-->
<!--    <option value="TK">Tokelau</option>-->
<!--    <option value="TO">Tonga</option>-->
<!--    <option value="TT">Trinidad and Tobago</option>-->
<!--    <option value="TN">Tunisia</option>-->
<!--    <option value="TR">Turkey</option>-->
<!--    <option value="TM">Turkmenistan</option>-->
<!--    <option value="TC">Turks and Caicos Islands</option>-->
<!--    <option value="TV">Tuvalu</option>-->
<!--    <option value="UG">Uganda</option>-->
<!--    <option value="UA">Ukraine</option>-->
<!--    <option value="AE">United Arab Emirates</option>-->
<!--    <option value="GB">United Kingdom</option>-->
<!--    <option value="USA">United States</option>-->
<!--    <option value="UM">United States Minor Outlying Islands</option>-->
<!--    <option value="UY">Uruguay</option>-->
<!--    <option value="UZ">Uzbekistan</option>-->
<!--    <option value="VU">Vanuatu</option>-->
<!--    <option value="VE">Venezuela</option>-->
<!--    <option value="VN">Viet Nam</option>-->
<!--    <option value="VG">Virgin Islands, British</option>-->
<!--    <option value="VI">Virgin Islands, U.s.</option>-->
<!--    <option value="WF">Wallis and Futuna</option>-->
<!--    <option value="EH">Western Sahara</option>-->
<!--    <option value="YE">Yemen</option>-->
<!--    <option value="ZM">Zambia</option>-->
<!--    <option value="ZW">Zimbabwe</option>-->
<!--</select>-->
<!--                                                </div>-->

<!--                                            </div>-->

<!--                                            <div class="col-6">-->

<!--                                                <div class="form-group ship-form">-->

<!--                                                    <label class="lblClr" for="reg-ln">{{\App\CPU\translate('Postal_code')}}</label>-->

<!--                                                    <input name="shop_postal_code" class="form-control ship-control" id="shop_postal_code"rows="1" >-->

<!--                                                    {{old('shop_postal_code')}}-->

<!--                                                </div>-->

<!--                                            </div>-->

<!--                                        </div>-->



<!--                                        <div class="col-sm-6" text-center>-->

<!--                                            <br><br>-->

<!--                                            <div class="pb-3">-->

<!--                                                <center>-->

<!--                                                    <img class="__img-125px object-cover" id="viewerLogo"-->

<!--                                                        src="{{asset('public\assets\back-end\img\400x400\img2.jpg')}}" alt="banner image"/>-->

<!--                                                </center>-->

<!--                                            </div>-->



<!--                                            <div class="form-group mb-0">-->

<!--                                                <div class="custom-file">-->

<!--                                                    <input type="file" name="logo" id="LogoUpload" class="custom-file-input"-->

<!--                                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">-->

<!--                                                    <label class="custom-file-label browseImg" for="LogoUpload">{{\App\CPU\translate('Upload')}} {{\App\CPU\translate('logo')}}</label>-->

<!--                                                </div>-->

<!--                                            </div>-->

<!--                                        </div>-->

<!--                                        <div class="col-sm-6 text-center">-->

<!--                                            <br><br>-->

<!--                                            <div class="pb-3">-->

<!--                                                <center>-->

<!--                                                    <img class="__img-125px object-cover" id="viewerBanner"-->

<!--                                                            src="{{asset('public\assets\back-end\img\400x400\img2.jpg')}}" alt="banner image"/>-->

<!--                                                </center>-->

<!--                                            </div>-->



<!--                                            <div class="form-group">-->

<!--                                                <div class="custom-file">-->

<!--                                                    <input type="file" name="banner" id="BannerUpload" class="custom-file-input overflow-hidden __p-2p" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">-->

<!--                                                    <label class="custom-file-label browseImg" for="BannerUpload">{{\App\CPU\translate('Upload')}} {{\App\CPU\translate('Banner')}}</label>-->

<!--                                                </div>-->

<!--                                            </div>-->

<!--                                        </div>-->



                    <div class="col-sm-12">

                                            {{-- recaptcha --}}

                    @php($recaptcha = \App\CPU\Helpers::get_business_settings('recaptcha'))

                    @if(isset($recaptcha) && $recaptcha['status'] == 1)

                        <div id="recaptcha_element" class="w-100" data-type="image"></div>

                        <br/>

                    @else

                    <div class="col-12">

                        <div class="row py-2 d-flex align-items-end">

                            <div class="col-6 pr-0">

                                <input type="text" class="form-control __h-40" name="default_captcha_value" value=""

                                       placeholder="{{\App\CPU\translate('Enter captcha value')}}" class="border-0" autocomplete="off">

                            </div>

                            <div class="col-6 input-icons mb-2 w-100 rounded bg-white mt-5">

                                <a onclick="javascript:re_captcha();"  class="d-flex align-items-center align-items-center">

                                    <img src="{{ URL('/seller/auth/code/captcha/1') }}" class="rounded __h-40" id="default_recaptcha_id">

                                    <i class="tio-refresh position-relative cursor-pointer p-2"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                    @endif

                        <div class="form-group mb-0 d-flex flex-wrap justify-content-between">

                            <label class="form-group mb-1 d-flex align-items-center">

                                <strong>

                                    <input type="checkbox" class="mr-1" name="remember" id="inputCheckd">

                                </strong>

                                <span class="d-block w-0 flex-grow pl-1">

                                    <span style="font-size: 14px;">{{\App\CPU\translate('i_agree_to_your_terms')}}</span>

                                    <a class="font-size-sm" style="font-size: 14px !important;" target="_blank" href="{{route('terms')}}">

                                        {{\App\CPU\translate('terms_and_condition')}}

                                    </a>

                                </span>

                            </label>

                        </div>

                        <div class="form-group mb-0 d-flex flex-wrap justify-content-between">

                            <label class="form-group mb-1 d-flex align-items-center">

                                <strong>

                                    <input type="checkbox" class="mr-1" name="remember" id="inputCheckd2">

                                </strong>

                                <span class="d-block w-0 flex-grow pl-1">

                                    <span style="font-size: 14px;">I Have read the hint for selling carefully</span>

                                    <a class="font-size-sm" style="font-size: 14px !important;" target="_blank" href="{{ route('hint-for-sell') }}">

                                        Hint For Selling

                                    </a>

                                </span>

                            </label>

                        </div>



                        <input type="hidden" name="from_submit" value="seller">

                        <button type="submit" class="btn ship-sub-btn btn-user btn-block" id="apply" disabled>{{\App\CPU\translate('Apply')}} {{\App\CPU\translate('Shop')}} </button>

                        <br>

                    </div>



                        </form>

            <p class="text-center pt-5 already-acc">Already have an Account ? <a class="" style="    color: #000;

                font-size: 14px;

                text-decoration: none;" href="{{route('customer.auth.login')}}">

                 {{\App\CPU\translate('Log_In')}}

            </a></p>







        </div>



    </div>



<!-- Footer -->



    <body>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"

            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"

            crossorigin="anonymous"></script>

    </body>



    @endsection

</html>



<style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');







        .register .btnPass{

            position: absolute;

            top: -33px !important;

            width: 30px;

            background: transparent;

            left: 520px !important;

        }

    .innerArea {

        background: #000;

        height: 40px;

        display: flex !important;

        color: #fff;



    }



    .Mid {

        margin: 8px 10px;



    }



    .cont1 {

        color: #fff;

        /* margin: 10px 10px; */

        width: 50%;



    }



    .cont1 .lblTel {

        margin: 8px 10px;

    }



    .cont1 .lblTel i {

        margin: 0 7px;

    }



    .cont1 .discRight {

        float: right;

        margin: 8px 10px;

        /* border:  1px solid #fff; */





    }



    .cont2 {

        width: 50%;

        color: #fff;



    }



    .cont2 .shopNow {

        margin: 8px 10px;



    }



    .cont2 a {

        color: #fff;

    }



    .cont2 .rightSell {

        float: right;

    }



    .cont2 .sellOn {

        /* float: right; */

        margin: 8px 10px;



    }



    .cont2 .location {

        float: right;

        margin: 8px 10px;



    }



    .cont2 .location i {

        margin: 0 7px;



    }



    .innerArea2 {

        height: 100px;

        display: flex;

        border-bottom: 1px solid #7777;

    }



    .logo {

        width: 30%;

    }







    .logo .logoImg {

        width: 130px;

        margin: 20px 50px;



    }



    .form__upper {

        position: relative;

        width: 100%;

        height: 3rem;

        top: 52px;

        left: 0px;



    }



    .form__upper .logoImg1 {

        width: 130px;

        margin: 0px 77px;

        left: 361px;

        top: 50px;

        /* margin-left: 700px; */

    }





    .text_area {



        width: 292px;

        height: 100px;

        left: 278px;

        top: 137px;

        font-family: 'Burbank Big Condensed';

        font-style: normal;

        font-weight: 600;

        font-size: 33px;

        line-height: 0px;

        text-align: center;

        letter-spacing: 0.02em;

        color: #1E1E1E;

    }



    .text_area1 {

        padding-top: 20px !important;

        font-family: 'Burbank Big Condensed';

        font-style: normal;

        font-weight: 600;

        font-size: 33px;

        color: #1E1E1E;

    }



    .welcomeBack {

        font-size: 45px;

    }



    .span_text {

        font-size: 15px;

        font-weight: 300;

        color: #777;

        text-align: center;

    }



    .text_1 {

        margin-left: 500px;

        height: 120px;

    }



    .text_2 {

        margin-left: 500px;

        height: 120px;

    }



    .text_3 {

        /* margin-left: 500px; */

        height: 120px;

    }



    .frame-1 {

        height: 55px;

        width: 525px;

        margin-left: 6px;

        border: 1px solid #777777;

        border-radius: 15px;



    }



    .frame-2 {

        margin-left: 180px;

    }



    .frame-3 {

        height: 80px;

        width: 245px;

        margin-left: 10px;

        border: 1px solid black;

        border-radius: 15px;



    }



    .input1 {

        height: 78px;

        width: 242px;

        border-radius: 15px;

        border: none;

    }



    .input {

        height: 50px;

        width: 523px;

        border-radius: 15px;

        border: none;

        outline: none;

        background: none;

    }



    .input4 {

        height: 45px;

        width: 20px;

        border-radius: 15px;

        border: none;

        margin: -2px 33px 9px;

    }



    input[type=checkbox],

    input[type=radio] {

        margin: -2px 33px 9px;

        margin-top: 1px\9;

        line-height: normal;

    }



    .button {

        height: 55px;

        width: 100%;

        border-radius: 15px;

        border: none;

        background-color: black;

        color: white;

    }



    .searchBar {

        width: 80%;

        display: flex;

        flex-direction: row-reverse;

    }



    .innerArea2 form.example {

        width: 103%;

        height: 50px;

        background: #fff;

        border: 1px solid #1e1e1e7a;

        margin: 25px 0;



        border-radius: 5px;

        display: flex;

        flex-direction: row;

        font-family: 'poppins';



    }



    .row {

        width: 100%;

        margin: 0;

    }



    .col-12 {

        padding: 0;

        padding-right: 3px;

    }



    .innerArea2 form.example input {

        padding: 10px;

        font-size: 17px;





        border: none;

        border-radius: 20px;



        width: 100%;

        background: #ffff;

        font-family: 'poppins';

    }



    .innerArea2 form.example button {



        width: 100%;

        height: 48px;

        margin: 0 10px;

        margin-left: 30px;

        margin-top: 0 !important;

        padding: 10px 13px;

        background: #EC0000;

        color: white;

        font-size: 17px;

        border: 1px solid #EC0000;

        border-radius: 5px;

        margin-top: 2px;

        cursor: pointer;

        font-family: 'poppins';

    }



    @media screen and (max-width: 575px) {

        .getStartedBTN {

            margin-top: 10px;



        }

    }



    .innerArea2 .categoryy {

        background: #fff !important;

        color: #1e1e1e7a !important;

        border: none !important;

        border-radius: 0 !important;

        /* border-left: 2px solid #b8b3b3 !important; */

        border-left: 2px solid #1e1e1e7a !important;

    }



    .rightCart {

        display: flex;

        float: right;

        /* width: 30%; */



    }



    .rightCart .account {

        display: flex;

        width: 120px;

        justify-content: center;

        align-items: center;

        cursor: pointer;

        color: #000;

        /* padding: 0px; */

        font-size: 18px;

    }



    .icon11 {

        margin-right: 10px;

        margin-bottom: 5px;

    }



    .innerArea3 {

        display: flex;

        /* width: 70%; */

        float: right;

    }



    .innerArea3 .nav {



        margin: 17px 5px;

    }



    .innerArea3 .nav-item {

        font-size: 18px;



    }



    .innerArea3 .nav-item .nav-link {

        color: #000;

    }



    .innerArea3 .nav-item .nav-link:hover {

        color: #EC0000;

        background: none;

    }



    .innerArea3 .nav-item .nav-link:active {

        color: #EC0000;

        background: none;



    }



    .innerr {

        /* display: flex; */

        display: grid;

        justify-items: center;

        float: left;

        padding: 20px 50px;

    }



    .innerr2 {

        background: #EC0000;

        padding: 20px 20px;

        width: 300px;

    }



    .innerr .cate {

        font-size: 22px;

        color: #fff;

    }



    .innerr .hamburger-icon {

        margin-right: 20px;

    }



    .sideCategories {

        margin: 30px 0;

        /* border-bottom: 1px solid #1e1e1e7a; */

        color: #000;

        text-decoration: none;

    }



    .sideCategories:hover {

        text-decoration: none;

        cursor: pointer;

        color: #EC0000;

    }



    .innArea {

        display: -webkit-box;

        margin-top: 100px;



    }



    .innerArea4 {

        display: inline-flex;



    }



    .innerArea4 .img1 {

        background-image:

            linear-gradient(to left, rgba(245, 246, 252, 0.52), rgba(0, 0, 0, 0.5)),

            url('pg11.jpg');

        width: 562px;

        height: 438px;

        /* object-fit: cover; */

        background-size: cover;

        background-repeat: no-repeat;

        background-position: top center;



        border-radius: 15px;

        /* background: linear-gradient(90.38deg, rgba(0, 0, 0, 0.6) 2.19%, rgba(0, 0, 0, 0) 82.56%); */

        /* z-index: 2; */



    }



    .innerArea4 .img1 .innerBody {

        margin: 275px 10px;

        width: 80%;

    }



    .innerArea4 .img1 .innerBody .heading h1 {

        font-size: 35px;

        color: #FFF;

        font-weight: 600;

    }



    .innerArea4 .img1 .innerBody .innerText p {

        font-size: 14px;

        color: #fff;



    }



    .innerArea4 .img1 .innerBody .btnBody .btnShop {

        background-color: #EC0000;

        color: #fff;

        width: 116px;

        height: 33.02px;

        border: none;

    }



    .innerArea {

        display: inline-flex;

    }



    .innerArea4 .img2 {

        background-image:

            linear-gradient(to left, rgba(245, 246, 252, 0.48), rgba(0, 0, 0, 0.5)),

            url('img1.png');

        width: 363px;

        height: 213px;

        background-size: cover;

        background-repeat: no-repeat;

        background-position: top center;

        margin: 0 10px;

        border-radius: 15px;

    }



    .innerArea4 .img2 .innerBody2 {

        position: absolute;

        margin: 40px 10px;

        width: 80%;

    }



    .innerArea4 .img2 .innerBody2 .heading2 h1 {

        font-size: 30px;

        color: #FFF;

        width: 20%;

        font-weight: 600;

    }



    .innerArea4 .img2 .innerBody2 .innerText2 p {

        color: #fff;

        font-size: 15px;

    }



    .innerArea4 .img2 .innerBody2 .priceBody2 p {



        font-size: 30px;

        color: #EC0000;

        font-weight: 600;

        margin-top: -10px;

    }



    .innerArea4 .img2 .innerBody2 .priceBody2 p span {

        font-size: 20px;

        color: #fff;

        text-decoration: line-through;

        text-decoration-color: #000;

        text-decoration-thickness: 2px;

        margin: 2px 5px;

    }



    .innerArea4 .img3 {

        background-image:

            linear-gradient(to left, rgba(245, 246, 252, 0.048), rgba(0, 0, 0, 0.5)),

            url('img2.png');

        width: 363px;

        height: 213px;

        background-size: cover;

        background-repeat: no-repeat;

        background-position: top center;

        margin: 10px 10px;

        border-radius: 15px;

    }



    .innerArea4 .img3 .innerBody3 {

        position: absolute;

        margin: 60px 10px;

        width: 80%;

    }



    .innerArea4 .img3 .innerBody3 .heading3 h1 {

        font-size: 30px;

        color: #FFF;

        width: 20%;

        font-weight: 600;

    }



    .innerArea4 .img3 .innerBody3 .innerText3 p {

        color: #fff;

        font-size: 15px;

    }



    .innerArea4 .img3 .innerBody3 .priceBody3 p {



        font-size: 30px;

        color: #EC0000;

        font-weight: 600;

        margin-top: -10px;

    }



    .innerArea4 .img3 .innerBody3 .priceBody3 p span {

        font-size: 20px;

        color: #fff;

        text-decoration: line-through;

        text-decoration-color: #000;

        text-decoration-thickness: 2px;

        margin: 2px 5px;

    }



    .rightSide {

        margin: 0px 5px;

    }



    .innerArea5 {

        display: flex;

        width: 100%;

    }



    .shopHeading {

        font-size: 40px;

        font-weight: 600;

        padding: 0 55px;

    }



    .innerArea5 .viewBtn {



        color: black;

        margin-left: 645px;

        margin-top: 37px;

        text-decoration: underline;

    }



    .innerArea6 {

        display: flex;

        justify-content: center;

        align-items: center;

        width: 100%;

    }



    .innerArea6 .inner1 {

        display: flex;



    }



    .innerArea6 .inner1 .card1 {

        background: linear-gradient(to bottom, rgba(245, 246, 252, 0.048), rgba(0, 0, 0, 0.5)), url('image1.jpg');

        width: 200px;

        height: 240px;

        background-position: center;

        background-size: cover;

        border-radius: 15px;

        margin: 5px;



    }



    .innerArea6 .inner1 .cardText1 {

        color: #fff;

        position: absolute;

        margin-top: 195px;

        text-align: center;

        margin-left: 65px;

    }



    .innerArea6 .inner1 .card2 {

        background: linear-gradient(to bottom, rgba(245, 246, 252, 0.048), rgba(0, 0, 0, 0.5)), url('image2.jpg');

        width: 200px;

        height: 240px;

        background-position: center;

        background-size: cover;

        border-radius: 15px;

        margin: 5px;



    }



    .innerArea6 .inner1 .card2 .cardText1 {

        color: #fff;

        position: absolute;

        margin-top: 195px;

        text-align: center;

        margin-left: 45px;

    }





    .innerArea6 .inner1 .card3 {

        background: linear-gradient(to bottom, rgba(245, 246, 252, 0.048), rgba(0, 0, 0, 0.5)), url('image3.jpg');

        width: 200px;

        height: 240px;

        background-position: center;

        background-size: cover;

        border-radius: 15px;

        margin: 5px;



    }



    .innerArea6 .inner1 .card4 {

        background: linear-gradient(to bottom, rgba(245, 246, 252, 0.048), rgba(0, 0, 0, 0.5)), url('image4.jpg');

        width: 200px;

        height: 240px;

        background-position: center;

        background-size: cover;

        border-radius: 15px;

        margin: 5px;



    }



    .innerArea6 .inner1 .card5 {

        background: linear-gradient(to bottom, rgba(245, 246, 252, 0.048), rgba(0, 0, 0, 0.5)), url('image5.jpg');

        width: 200px;

        height: 240px;

        background-position: top center;

        background-size: cover;

        border-radius: 15px;

        margin: 5px;



    }



    .innerArea6 .inner1 .card6 {

        background: linear-gradient(to bottom, rgba(245, 246, 252, 0.048), rgba(0, 0, 0, 0.5)), url('image2.jpg');

        width: 200px;

        height: 240px;

        background-position: center;

        background-size: cover;

        border-radius: 15px;

        margin: 5px;



    }



    .innerArea6 .inner1 .inner2 {

        overflow: hidden;

        border-radius: 15px;



    }



    .innerArea6 .inner1 .card1 {

        /* overflow: hidden; */

        transform-origin: 65% 75%;

        transition: transform 1s, filter .3s ease-out;



    }



    .innerArea6 .inner1 .card1:hover {

        transform: scale(1.1);



    }





    .innerArea6 .inner1 .inner2 .card2 {

        /* overflow: hidden; */

        transform-origin: 65% 75%;

        transition: transform 1s, filter .3s ease-out;



    }



    .innerArea6 .inner1 .inner2 .card2:hover {

        transform: scale(1.1);



    }



    .innerArea6 .inner1 .inner2 .card3 {

        /* overflow: hidden; */

        transform-origin: 65% 75%;

        transition: transform 1s, filter .3s ease-out;



    }



    .innerArea6 .inner1 .inner2 .card3:hover {

        transform: scale(1.1);



    }



    .innerArea6 .inner1 .inner2 .card4 {

        /* overflow: hidden; */

        transform-origin: 65% 75%;

        transition: transform 1s, filter .3s ease-out;



    }



    .innerArea6 .inner1 .inner2 .card4:hover {

        transform: scale(1.1);



    }



    .innerArea6 .inner1 .inner2 .card5 {

        /* overflow: hidden; */

        transform-origin: 65% 75%;

        transition: transform 1s, filter .3s ease-out;



    }



    .innerArea6 .inner1 .inner2 .card5:hover {

        transform: scale(1.1);



    }



    .innerArea6 .inner1 .inner2 .card6 {

        /* overflow: hidden; */

        transform-origin: 65% 75%;

        transition: transform 1s, filter .3s ease-out;



    }



    .innerArea6 .inner1 .inner2 .card6:hover {

        transform: scale(1.1);



    }



    .innerArea5 .offerEndIn {



        color: black;

        margin-left: 625px;

        margin-top: 37px;

        /* text-decoration: underline; */

    }



    .innerArea7 {

        display: flex;

        justify-content: center;

    }



    .innerArea7 .img22 {

        background: linear-gradient(to left, rgb(42 42 42 / 52%), rgba(0, 0, 0, 1.5)), url('banner22.jpg');

        width: 1250px;

        height: 375px;

        background-position: center;

        background-size: cover;

        border-radius: 15px;



    }



    .innerArea7 .img22 .innText {

        position: absolute;

        margin-top: 180px !important;

        margin-left: 50px;

    }



    .innerArea7 .img22 .innText .redText {

        color: #EC0000;

        font-size: 18px;

        line-height: 0;

    }



    .innerArea7 .img22 .innText .whiteHeading {

        color: #fff;

        font-size: 45px;

        font-weight: 600;

        line-height: 1;



    }



    .innerArea7 .img22 .innText .whiteText {

        color: #fff;

        font-size: 20px !important;

        font-weight: 300 !important;

    }



    .innerArea7 .img22 .innText .shop {

        /* position: absolute; */

        color: #fff;

        background: #EC0000;

        border: none;

        padding: 10px 40px;

        border: none;

        border-radius: 5px;



        /* transition: 0.5s; */

    }



    .innerArea7 .img22 .innText .shop:hover {

        opacity: 0.7;

        /* padding-bottom: 15px; */



    }



    .innerArea8 .inn2 {

        display: flex;

        justify-content: center;

        align-items: center;



    }



    .innerArea8 .inn2 .leftImg img {

        width: 430px;

        height: 856px;

        object-fit: cover;

        border-radius: 15px;



    }



    .innerArea8 .inn2 .rightArea {

        margin-top: 0px;

    }



    .innerArea8 .inn2 .rightArea .topImg {

        background: linear-gradient(to bottom, rgb(42 42 42 / 52%), rgba(0, 0, 0, 0.5)), url('img3.jpg');

        width: 430px;

        height: 414px;

        background-position: center;

        background-size: cover;

        border-radius: 15px;

        margin-bottom: 20px;

    }



    .innerArea8 .inn2 .rightArea .bottomImg {

        background: linear-gradient(to bottom, rgb(42 42 42 / 52%), rgba(0, 0, 0, 0.5)), url('img4.jpg');

        width: 430px;

        height: 414px;

        background-position: center;

        background-size: cover;

        border-radius: 15px;

        margin-top: 20px;

    }



    .innerArea8 .inn2 .middleArea {

        margin-bottom: 150px;

    }



    .innerArea8 .inn2 .middleArea .dealOfTheDay {



        background: #EC0000;

        color: #fff;

        padding: 10px 20px;

        border-radius: 8px

    }



    .innerArea8 .inn2 .middleArea .middleHeading {

        font-size: 35px !important;

        font-weight: 600 !important;

    }



    .innerArea8 .inn2 .middleArea .price1 {

        color: #777;

        font-size: 20px;

        line-height: 0;

        text-decoration: line-through;

        text-decoration-color: #EC0000;



    }



    .innerArea8 .inn2 .middleArea .price2 {

        font-size: 50px;

        font-weight: 600;

        color: #EC0000;

        line-height: 0;



    }



    .innerArea8 .inn2 .middleArea .middleText {

        margin-top: 55px;

        font-size: 18px;

    }



    .innerArea8 .inn2 .rightArea .imageText {

        color: #fff;

        position: absolute;

        margin-top: 315px;

        margin-left: 20px;

        font-size: 38px;

        font-weight: 700;

    }



    .innerArea9 {

        display: flex;

        justify-content: center;

    }



    .innerArea9 .loadMore {

        background: #fff;

        color: #000;

        border: 1px solid #EC0000;

        border-radius: 5px;

        font-size: 18px;

        font-weight: 600;

        padding: 12px 100px;

    }



    .innerArea9 .loadMore:hover {

        background: #EC0000;

        color: #FFF;

    }



    /* footer CSS */









    .footLogo {

        width: 180px;

    }



    .footText2 {

        color: #fff;

        font-size: 13px;

        font-weight: 300;

        text-align: justify;

    }



    .footRight {

        display: flex;

        justify-content: center;



    }



    .footMenu {

        margin-top: 32px !important;

    }



    .company {

        justify-content: center;

        align-items: center;

        /* margin: 24px 0px 24px 24px;

        margin-right: 0px; */

    }





    .comp3 {

        margin-left: 20px;

    }



    .comp2 {

        margin-left: 30px;

    }







    @media screen and (max-width:480px) {

        .comp3 {

            margin-left: 0px;

        }



        .comp2 {

            margin-left: 0px;

        }



        .comp1 {

            margin-left: 10px;

        }





        .searchMarketing {

            text-align: center;

        }



        .socialIcons {

            display: flex;

            justify-content: center;

            margin: 10px;

        }



        .textFoot {

            font-size: 12px;

        }

        .register .btnPass{

            left: 300px !important;

        }

    }



    @media screen and (max-width: 825px) {

        .searchMarketing {

            text-align: center;

        }



        .socialIcons {

            display: flex;

            justify-content: center;

            margin: 10px;

        }



        .textFoot {

            font-size: 8px;

        }



    }



    .menuList {

        line-height: 2;

        font-size: 14px;

        list-style: none;

        color: #FFF;

        /* justify-content: center; */

    }



    .menuList .menuItem:hover {

        cursor: pointer;

        color: #FF061E;

    }



    .searchMarketing {

        color: #fff;

        font-size: 16px;

    }



    .iconSocial {

        color: #FFF;

        float: right;

        margin: 0 0 0 35px !important;

        font-size: 20px;

    }





    .mainDiv {

        display: grid;

        place-items: center;

        justify-items: center;

        align-items: start;

    }



    .form {

        position: relative;

        width: 100%;

        height: 3rem;

    }



    .form2 {

        position: relative;

        width: 40%;

        height: 3rem;

    }



    .form__input {

        position: absolute;

        top: 0;

        left: 0;

        width: 100%;

        height: 100%;

        border: 1px solid #777777;

        border-radius: 15px;

        font-family: 'Poppins';

        outline: none;

        padding: 30px 20px;

        background: none;

    }



    .form__input2 {

        position: absolute;

        top: 0;

        left: 0;

        width: 243%;

        height: 100%;

        border: 1px solid #777777;

        border-radius: 15px;

        font-family: 'Poppins';

        outline: none;

        padding: 30px 20px;

        background: none;

        color: #000;



    }



    ::placeholder {

        color: #000;

    }



    .form__bt {

        position: relative;

        width: 40%;

        height: 3rem;

        top: 52px;



    }



    .form__Reg {

        position: relative;

        width: 40%;

        height: 3rem;

        top: 52px;

        left: 160px;

    }



    .form__label {

        position: absolute;

        top: -20px;

        left: 30px;

        background: #fff;

        color: #1E1E1EB2;

        padding: 10px;



    }



    .form__label2 {

        position: absolute;

        top: -20px;

        left: 30px;

        background: #fff;

        color: #1E1E1EB2;

        padding: 10px;



    }





    /* order summary page css */



    .breadcrumb {

        padding: 25px 50px !important;

        background-color: #fff !important;

        border-bottom: 1px solid #777777 !important;

    }



    .breadcrumb-item {

        color: #000 !important;

    }



    .breadcrumb .breadcrumb-item a {

        /* color: #BC0012; */

        color: #FF061E;





    }



    .breadcrumb .breadcrumb-item a:hover {

        color: #BC0012;

        text-decoration: none;

    }



    .breadItem a {

        color: #FF061E !important;



    }



    .breadcrumb-item+.breadcrumb-item::before {

        content: var(--bs-breadcrumb-divider, ">") !important;

    }



    .oderSumm {

        color: #000;

        font-weight: 600;

    }



    .divIn {

        position: relative;

        width: 93%;

        left: 50px;

        margin: 20px 0;

    }



    .divInner {

        border: 1px solid #777777;

        padding: 20px;

        border-radius: 20px;

    }



    .summary {

        display: flex;

        justify-content: left;

        align-items: left;

    }



    .summary .image1 {

        width: 90px;

        height: 90px;

        object-fit: cover;

        border-radius: 15px;

        margin: 0 20px;

    }



    .summDetails {

        position: absolute;

        top: 38px;

        left: 150px;

        line-height: 1;

    }



    .orderNum {

        color: #1E1E1E99;



    }



    .delOrder a {

        color: #EC0000;

    }



    .delOrder a:hover {

        color: #EC0000;

        text-decoration: none;



    }



    .oneInn {

        display: flex;

        width: 100%;





    }



    .subTotal {

        color: #1E1E1EB2;

        font-size: 16px;



    }



    .oneInn .subPrice {

        position: absolute;

        left: 88%;



    }



    .quantity {

        position: absolute;

        left: 85%;

        top: 40%;



    }



    /* .quantityIncrease{

        width: 200px;

    } */

    .minusQuantity {

        margin: 0 10px;

        font-weight: 700;

        cursor: pointer;

        font-size: 17px

    }



    .numQuantity {

        margin: 0 20px;

        font-weight: 700;

        /* cursor: pointer; */

        font-size: 15px

    }



    .plusQuantity {

        margin: 0 10px;

        font-weight: 700;

        cursor: pointer;

        font-size: 20px

    }



    @media screen and (max-width: 500px) {



        .oneInn .subPrice {



            left: 70%;

        }



        .divIn {

            left: 15px;

        }



        .quantity {

            top: 50%;

            left: 70%;

        }



        .minusQuantity {

            margin: 1px;

        }



        .numQuantity {

            margin: 1px;

        }



        .plusQuantity {

            margin: 1px;

        }



    }



    @media screen and (max-width: 915px) {

        .oneInn .subPrice {



            left: 70%;

        }



        .divIn {

            left: 15px;

        }



        .quantity {

            top: 50%;

            left: 70%;

        }



        .minusQuantity {

            margin: 1px;

        }



        .numQuantity {

            margin: 1px;

        }



        .plusQuantity {

            margin: 1px;

        }





    }



    .btnCheckout {

        display: flex;

        align-items: center;

        justify-content: center;



    }



    .checkoutButton {

        background: #000;

        color: #fff;

        /* padding: 10px 150px; */

        width: 1319px;

        height: 69px;

        border-radius: 15px;

        font-size: 16px;

        font-weight: 700;

        border: 1px solid #000;

    }



    .checkoutButton:hover {

        background: #EC0000;

        color: #fff;

        border: 1px solid #EC0000;

    }





    /* Shipping Page CSS */

    .shippingText {

        font-size: 15px;

        font-family: 'Poppins';

        line-height: 1;

    }



    .radioShip {

        /* position: absolute;

        top: 35%; */

        width: 25px !important;

        margin: 0px 20px !important;

        accent-color: red !important;



    }



    .shippingService {

        margin: 0 20px;

    }



    .shippingTime {

        position: absolute;

        top: 63%;

        left: 8.5%;

        font-weight: 500;

        color: #1E1E1E99;

    }



    .shipPrice {

        position: absolute;

        top: 45%;

        left: 50%

    }









    /* Profile Page CSS */

    .divInner2 {

        display: flex;



    }



    .editProfile {

        position: absolute;

        top: 68%;

        left: 82%;

        width: 145.19px;

        height: 38.29px;

        background: #000;

        color: #fff;

        float: right;

        border: 1px solid #000;

        border-radius: 8px;



    }



    /* .addAddress{

        position: absolute;

        top: 68%;

        left: 85%;

        width: 145.19px;

        height: 38.29px;

        background: #000;

        color: #fff;

        float: right;

        border: 1px solid #000;

        border-radius: 8px;



    }

    .addAddress:hover{

        background: #FF061E;

        border: 1px solid #FF061E;

    } */

    .editProfile:hover {

        background: #FF061E;

        border: 1px solid #FF061E;



    }



    .myAccountBar {

        border: 1px solid #8a8181a1;

        padding: 10px 30px;

        border-radius: 25px;

        height: 420px;

        display: grid;

        justify-items: stretch;

        margin-top: 10px;

    }



    .myAccountBar1 {

        border: 1px solid #8a8181a1;

        padding: 35px 30px;

        border-radius: 25px;

        height: 420px;

        display: grid;

        justify-items: stretch;

        margin-top: 10px;



    }



    .side-item a {

        text-decoration: none;

        color: #1E1E1ECC;

        line-height: 2;

        font-weight: 500;

    }



    .side-item a:hover {

        text-decoration: none;

        color: #FF061E;

    }



    .side-item a:focus {

        text-decoration: none;

        color: #FF061E;



    }



    .active {

        color: #FF061E;

        text-decoration: none;





    }



    .myAccHeading {

        color: #1E1E1E;

        font-size: 20px;

        font-weight: 600

    }





    /* Address Page CSS */



    .leftAddress {

        width: 100%;

        background: #1E1E1E0D;

        padding: 20px 15px 20px 30px;

        border-radius: 15px;



    }



    .custName {

        font-weight: 600;

        line-height: 1;

    }



    .home {

        background: #1E1E1ECC;

        color: #FFFFFF;

        padding: 5px 20px;

        border-radius: 5px;

        font-size: 11.53px;



    }



    .shipAdd {

        background: #1E1E1E40;

        padding: 5px 20px;

        font-size: 11.53px;

        border-radius: 5px;

        margin-left: 5px;

    }



    .custAddress {

        font-size: 13.09px;

        font-weight: 600;

    }



    .editBtn {

        color: #FF061E;

    }





    .editBtn:hover {

        color: #FF061E;

        text-decoration: none;

    }



    Labels {

        display: flex;

        justify-content: space-between;

        align-items: center;



    }



    .newRow {

        flex-wrap: nowrap !important;

    }



    .newCol {

        padding-right: 0 !important;

    }



    /* Payment Options Page CSS */



    .paymentheading {

        font-size: 33.26px;

        font-weight: 600;

        color: #1E1E1E;



    }



    .helloUser {

        font-size: 16px;

        font-weight: 600;

    }



    .d-flex {

        justify-content: space-between !important;

        align-items: center !important;

    }



    .newAddressBTN {

        width: 145px;

        height: 34px;

        background: #000;

        color: #fff;

        border: 1px solid #000;

        border-radius: 8px;

    }



    .newAddressBTN:hover {

        background: #FF061E;

        border: 1px solid #FF061E;

    }



    .custCardNum {

        font-weight: 600;

        line-height: 1;

        font-family: 'Poppins';



    }



    .cardsDetail {

        width: 25%;

    }



    .cardImg {

        width: 55px;

        height: 15.93px;

        object-fit: contain;

    }



    .editBtn1 {

        color: #000;

    }



    .editBtn1:hover {

        color: #000;

        text-decoration: none;

    }



    .delBtn1 {

        color: #FF061E;

    }



    .delBtn1:hover {

        color: #FF061E;

        text-decoration: none;

    }





    @media screen and (max-width: 450px) {

        .custCardNum {

            font-size: 14px;

        }



        .payBar {

            padding: 35px 5px;

            /* justify-content: space-around !important; */



        }





        .cardBox {

            padding: 15px 5px;

        }



    }





    @media screen and (max-width: 825px) {

        .logFooter {

            display: grid;

            justify-items: center;

        }



        .comp1 {

            display: grid;

            justify-items: center;

        }



        .comp2,

        .comp3,

        .comp4 {

            display: grid;

        }



        .resp-hide {

            display: none;

        }





    }







    /* -----------  New CSS  ---------- */







    .container-fluid {

        padding: 0px 60px !important;

    }



    .h2-heading {

        font-family: Burbank Big Condensed !important;

        font-size: 33.23px;

        color: #1E1E1E !important;

        font-weight: 600 !important;

        line-height: 33px !important;

        letter-spacing: 0em !important;

        text-align: left !important;

        margin-top: 0px !important;

    }



    .h3-heading {

        color: #1E1E1E !important;

        font-family: Burbank Big Condensed !important;

        font-size: 26px;

        font-weight: 600 !important;

        line-height: 26px !important;

        letter-spacing: 0em !important;

        text-align: left !important;

        margin: 0px 0px 15px 0px !important;

    }



    .h4-heading {

        color: #1E1E1E;

        font-family: Poppins;

        font-size: 15px;

        font-weight: 500;

        line-height: 22px;

        letter-spacing: 0em;

        text-align: left;



    }





    .breadcrumbs .breadcrumb {

        background-color: transparent;

        padding: 25px 0px;

    }



    .breadcrumb-item+.breadcrumb-item::before {

        content: ">" !important;

    }



    .breadcrumbs .breadcrumb-item {

        color: #BC0012;

        font-family: Poppins;

        font-size: 12px;

        font-weight: 500;

        line-height: 18px;

        letter-spacing: 0em;

        text-align: left;



    }



    .breadcrumbs .breadcrumb-item a {

        color: #FF061E !important;

    }



    .breadcrumbs .breadcrumb-item a:active {

        color: #1E1E1E !important;

        text-decoration: none !important;

    }



    .breadcrumbs .breadcrumb-item a:hover {

        color: #BC0012 !important;

        text-decoration: none !important;

    }





    .divider {

        border-top: 1px solid #1e1e1e80;

        padding: 0px 0px 15px 0px;

    }



    .ft-img {

        background-color: #cccccc !important;

        background: linear-gradient(90deg, #5c5c5c, transparent);

        width: 100%;

        border-radius: 20px;

    }



    .border-left-cart {

        border-left: solid 1px #1E1E1E80;

        padding-bottom: 25px;

    }



    .rating {

        float: left;

        background: #FFB800;

        padding: 5px 13px;

        border-radius: 50px;

        font-size: 11px;

    }



    .fa-star:before {

        content: "\f005";

        position: relative;

        right: 3px;

    }



    .sold {

        border-left: solid 1px #1E1E1E80;

    }



    .sold p {

        font-family: poppins;

        font-size: 11.5px;

        font-weight: 600;

        color: #1E1E1E80;

    }



    .description .desc-list {

        display: flex;

        align-items: center;

        padding-bottom: 8px;

    }



    .description .product-about i {

        color: #ff001e;

        float: left;

        font-size: 20px;

        line-height: 15px;

        letter-spacing: 0em;

        text-align: left;

    }



    .size button {

        border: solid 1px transparent;

        float: left;

        background-color: #1E1E1E0D;

        border-radius: 5px;

    }



    .size button:hover {

        background-color: #1E1E1E0D;

        border: solid 1px #BC0012;

        border-radius: 5px;

    }



    .size button:focus {

        outline: none;

        border: solid 1px #BC0012 !important;

        border-radius: 5px !important;

    }



    .cart select {

        width: 100%;

        padding: 10px 0px;

        font-size: 10.88px;

        border-radius: 10px;

    }



    .cart .form-select {

        border: none;

        padding: 0px !important;

    }



    .form-select::before {

        font-family: "Font Awesome 6 Free";

        font-weight: 900;

        content: "\f007";

    }



    .cart .form-select:focus {

        outline: none !important;

    }



    .cart-btn {

        width: 100%;

        background: #FF061E !important;

        border: solid 1px #FF061E !important;

        border-radius: 10px !important;

        padding: 15px 0px !important;

        color: white !important;

        font-family: Poppins !important;

        font-size: 16px !important;

        font-weight: 600 !important;

        line-height: 24px !important;

        letter-spacing: 0em !important;

        text-align: center !important;



    }



    .cart-btn:hover {

        background-color: #c10416 !important;

    }



    .cart-btn:focus {

        outline: none !important;

    }



    .buy-btn {

        background-color: transparent !important;

        width: 100%;

        border: solid 1px #FF061E !important;

        border-radius: 10px !important;

        padding: 15px 0px !important;

        margin-top: 10px !important;

        color: #ff061e !important;

        font-family: Poppins !important;

        font-size: 16px !important;

        font-weight: 600 !important;

        line-height: 24px !important;

        letter-spacing: 0em !important;

        text-align: center !important;



    }



    .buy-btn:hover {

        color: white !important;

        border: solid 1px #BC0012;

        background-color: #000 !important;

    }



    .buy-btn:focus {

        outline: none !important;

    }



    .product-inner .sold-by {

        font-family: Poppins;

        font-size: 10px;

        font-weight: 600;

        line-height: 15px;

        letter-spacing: 0em;

        padding-top: 20px;

        margin: 0px;

    }



    .product-inner .desrptn {

        clear: both;

        font-family: Poppins;

        font-size: 11px;

        font-weight: 500;

        line-height: 18px;

        letter-spacing: 0em;



    }



    .price p {

        color: Red;

        font-family: Burbank Big Condensed;

        font-size: 42px;

        font-weight: 600;

        line-height: 42px;

        letter-spacing: 0.02em;

        text-align: left;



    }







    .price .discount {

        color: #1E1E1E;

        font-family: Poppins;

        font-size: 11px;

        font-weight: 600;

        line-height: 17px;

        letter-spacing: 0em;

        text-align: left;



    }



    .thum {

        text-align: center;

    }



    .product-about .about-item-desc p {

        font-family: Poppins;

        font-size: 11px;

        font-weight: 500;

        line-height: 15px;

        letter-spacing: 0em;

        text-align: left;



    }



    .prod-det .thum img {

        width: 20%;

        border-radius: 15px;

    }



    .prod-det .thum img:hover {

        border: solid 1px #BC0012;

        border-radius: 15px;

        opacity: 0.8;

    }



    .product-inner .title {

        float: left !important;

    }



    .prod-det .thum img:active {

        border: solid 1px #BC0012;

        border-radius: 15px;

    }



    .reviews .progress-bar {

        background-color: #FFC700;

    }



    .reviews .glyphicon-star:before {

        color: #FFC700;

    }



    .reviews .btn-sm {

        padding: 0px 0px !important;

        background: transparent;

        border: none;

    }



    .reviews .rating-block .glyphicon-star:before {

        font-size: 24px !important;



    }





    /* Plus-Minus Field */

    /* Google fonts import link */

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');



    * {

        margin: 0;

        padding: 0;

        box-sizing: border-box;

        font-family: 'Poppins', sans-serif;

    }



    .Plus-Minus {

        display: flex;

        align-items: center;

        justify-content: center;

        background: #FFF;

        border-radius: 12px;

        border: solid 1px #1e1e1e;

    }



    .Plus-Minus span {

        width: 20%;

        text-align: center;

        font-size: 42px;

        font-weight: 600;

        cursor: pointer;

        user-select: none;

    }



    .minus {

        color: white;

        border-top-left-radius: 12px !important;

        border-bottom-left-radius: 12px !important;

        background: #1e1e1e;

    }



    .plus {

        color: white;

        border-top-right-radius: 12px !important;

        border-bottom-right-radius: 12px !important;

        background: #FF061E;

    }



    .plus:hover {

        background-color: #c10416 !important;

    }



    .Plus-Minus span.num {

        width: 80%;

        font-size: 24px;

        border-right: 2px solid rgba(0, 0, 0, 0.2);

        border-left: 2px solid rgba(0, 0, 0, 0.2);

        pointer-events: none;

    }



    .price-shipping {

        padding-top: 20px;

    }



    .reviews h5 {

        padding-top: 5px;

        clear: both;

        font-family: Poppins !important;

        color: #1E1E1E99;

        font-size: 14px !important;

        font-weight: 600 !important;

        line-height: 21px !important;

        letter-spacing: 0em !important;

    }



    .review-block-rate button {

        background: transparent;

        border: none;

        padding: 0px 0px !important;

    }



    .review-block .review-block-name a {

        color: #1E1E1E;

        font-family: Poppins;

        font-size: 18px;

        font-weight: 600;

        line-height: 28px;

        letter-spacing: 0em;



    }



    .review-block .col-sm-10 img {

        float: left;

        padding-right: 10px;

    }



    .rev-img img {

        padding: 8px 5px 8px 0px;

        width: 10% !important;

    }



    .rev-like {

        color: #000;

    }



    .reviews hr {

        color: #f10d0d99;

    }



    .location-select {

        border: solid 1px #8e8e8e;

        position: relative;

        padding: 15px 10px 15px 32px;

        border-radius: 12px;

        margin-bottom: 12px;

    }



    .location-select .fa-location-dot {

        color: #000;

        position: absolute;

        top: 17px;

        left: 12px;

        font-size: 18px;

    }



    .sort-by select {

        padding: 8px 90px 8px 15px;

        margin: 0px 5px;

        border-radius: 8px;

        border: solid 1px #8e8e8e;

    }



    .sortBy {

        display: flex;

        padding-right: 5px;

        align-items: flex-end;

    }



    .sortBy select:focus {

        outline: none !important;

    }



    .sortBy p {

        padding-right: 15px;

        padding-top: 7px;

    }



    .rightSort {

        padding-left: 0px !important;

        display: flex;

        justify-content: flex-end;

    }



    .viewBy {

        display: flex;

        align-items: center;

    }



    .viewBy p {

        padding-right: 12px;

        margin-bottom: 0px;

    }



    .my-filters {

        margin-right: 0px !important;

        margin-left: 0px !important;

    }







    .orders .row {

        margin-left: 0px !important;

        margin-right: 0px !important;

    }



    .filters {

        margin-bottom: 25px;

    }



    .form-check {

        padding-left: 0px !important;

        margin-bottom: 5px !important;

    }



    .prod-filter-check .input-check {

        position: absolute;

        margin-top: 6.5px !important;

        margin-left: 0px !important;

    }



    .prod-filter-check .filter-check-lable {

        color: #757474;

        font-family: Poppins;

        font-size: 11px;

        font-weight: 400;

        line-height: 17px;

        letter-spacing: 0em;

        text-align: left;

        position: relative;

        left: 20px;

    }



    .left-col {

        border-right: solid 1px #1e1e1e80;

    }



    .filter-text {

        color: #757474;

        font-family: Poppins;

        font-size: 11px;

        font-weight: 400;

        line-height: 17px;

        letter-spacing: 0em;

        text-align: left;



    }





    .filter-check {

        accent-color: #FF061E;

    }



    .filter-price-div {

        padding: 0px !important;

        margin: 0px 0px 10px 0px !important;

    }



    .filter-price-div .filter-price {

        text-align: center;

        border-color: #1e1e1e80 !important;

    }



    .filter-price-div .filter-price:focus {

        box-shadow: none;

        border-color: #1e1e1e80 !important;

        outline: transparent !important;

    }



    .pop-btn {

        display: none !important;

    }



    .desktop p {

        color: #757474;

        font-family: Poppins !important;

        font-size: 11px !important;

        font-weight: 400 !important;

        line-height: 17px !important;

        letter-spacing: 0em !important;

        text-align: left !important;





    }



    .mob-cat-btn {

        display: none !important;

    }





    /* Shipping css START */



    .top .main-heading {

        color: #1E1E1E !important;

        font-family: Burbank Big Condensed !important;

        font-size: 33px !important;

        font-weight: 600 !important;

        line-height: 33px !important;

        letter-spacing: 0em !important;

        text-align: left !important;

    }



    .top p {

        color: rgba(30, 30, 30, 0.6);

        font-family: Poppins !important;

        font-size: 12px !important;

        font-weight: 500 !important;

        line-height: 18px !important;

        letter-spacing: 0em !important;

        text-align: left !important;



    }



    .Ship-row {

        border: solid 1px grey;

        padding: 25px 29px;

        background: transparent;

        margin: 15px 0px;

        border-radius: 15px;

        display: flex;

        flex-direction: row;

        justify-content: space-between;

        align-content: flex-end;

        align-items: center;

    }



    .Ship-row:hover {

        border-color: #FF061E;

        background-color: #9302100D !important;

    }



    .Ship-row:active {

        border-color: #FF061E;

        background-color: #9302100D !important;

    }



    .Ship-row .compny input {

        position: relative;

        float: left;

        top: 17px;

    }



    .Ship-row .compny-title {

        color: #1E1E1E;

        font-family: Poppins;

        font-size: 20px;

        font-weight: 600;

        line-height: 30px;

        letter-spacing: 0em;

        text-align: left;

        padding-left: 35px;

    }



    .Ship-row .compny-desc {

        margin-top: -10px;

        margin-bottom: 0px !important;

        font-family: Poppins;

        font-size: 12px;

        font-weight: 500;

        line-height: 18px;

        letter-spacing: 0em;

        text-align: left;

        padding-left: 36px;

    }



    .Ship-row:hover .compny-title {

        color: #BC0012;

    }



    .Ship-row:active .compny-title {

        color: #BC0012;

    }



    .Ship-row:hover .shipping-rate {

        color: #BC0012 !important;

    }



    .Ship-row:active .shipping-rate {

        color: #BC0012 !important;

    }



    .Ship-row .shipping-rate {

        color: #1E1E1E;

        font-family: Poppins;

        font-size: 16px;

        font-weight: 600;

        line-height: 24px;

        letter-spacing: 0em;

        text-align: left;



    }



    .ship-sub-btn {

        margin-top: 10px !important;

        border-radius: 12px !important;

        font-family: Poppins !important;

        font-size: 16px !important;

        font-weight: 700 !important;

        line-height: 14px !important;

        letter-spacing: 0em !important;

        text-align: center !important;

        background: #1E1E1E !important;

        width: 100% !important;

        color: #FFFFFF !important;

        padding: 20px 0px !important;

    }



    .ship-sub-btn:hover {

        background-color: #FF061E !important;

    }



    .ship-sub-btn:active {

        background-color: #FF061E !important;

    }



    .rad {

        accent-color: #FF061E;

    }



    /* Shipping css END */



    /* payment with css START */



    .Ship-col {

        width: 48%;

        margin: 0px 7px;

        float: left;

        border: solid 1px #c1bfbf;

        padding: 45px 35px;

        background: transparent;

        border-radius: 15px;

    }



    .Ship-col:hover {

        border-color: #FF061E;

        background-color: #f8f5f5 !important;

    }



    .Ship-col .compny-title {

        padding-right: 12px;

        float: left;

        color: #1E1E1E;

        font-family: Poppins;

        font-size: 26px;

        font-weight: 600;

        line-height: 30px;

        letter-spacing: 0em;

        text-align: left;

    }



    .Ship-col .compny-desc {

        clear: both;

        margin-top: -10px;

        margin-bottom: 0px !important;

        font-family: Poppins;

        color: #757474;

        font-size: 14px;

        font-weight: 500;

        line-height: 21px;

        letter-spacing: 0em;

        text-align: left;



    }



    .Ship-col .rad {

        accent-color: #FF061E;

        border: 0px;

        width: 25px;

        height: 2em;

    }





    .Ship-Ser-form {

        clear: both;

    }



    .Ship-Ser-form .ship-form label {

        color: #5f5f5f;

        font-family: Poppins;

        font-size: 14px;

        font-weight: 600;

        line-height: 14px;

        letter-spacing: 0em;

        text-align: left;

        position: relative;

        top: 18px;

        left: 38px;

        background: white;

        padding: 3px 7px;

    }



    .Ship-Ser-form .select-col-33 label {

        color: #5f5f5f;

        font-family: Poppins;

        font-size: 14px;

        font-weight: 600;

        line-height: 14px;

        letter-spacing: 0em;

        text-align: left;

        position: relative;

        top: 18px;

        left: 38px;

        background: white;

        padding: 3px 7px;

    }





    .product-review-bot {

        padding: 0px !important;

    }







    .Ship-Ser-form .ship-form {

        float: left;

        width: 48%;

        margin: 0px 8px;

    }



    .Ship-Ser-form .select-col-33 {

        float: left;

        width: 32%;

        margin-left: 10px;

    }



    .Ship-Ser-form .form-group .ship-control {

        border-color: #c1bfbf;

        color: #000 !important;

        height: 70px !important;

        border-radius: 15px !important;

        font-family: Poppins;

        font-size: 14px;

        font-weight: 500;

        line-height: 14px;

        letter-spacing: 0em;

        text-align: left;

        padding-left: 28px;

    }



    .Ship-Ser-form .ship-sub-btn {

        margin-top: 60px !important;

    }



    .ship-control:focus {

        box-shadow: none !important;

        border-color: #ced4da !important;

    }



    .register .Ship-Ser-form{

        width: 50%;

    }





    ::placeholder {

        color: #c1bfbf !important;

    }



    /* payment with css END */



    /* Order CSS START */



    .top-filter {

        display: flex !important;

        margin-top: 40px !important;

        justify-content: space-between !important;

        align-items: center !important;

    }



    .top-filter .filter-btn a {

        font-family: Poppins;

        font-size: 12px;

        font-weight: 500;

        line-height: 18px;

        letter-spacing: 0em;

        text-align: left;

        padding: 5px 42px;

        background-color: #c1bfbf;

        color: black;

        border-radius: 8px;

        margin: 0px 3px;

    }



    .top-filter .filter-btn a:hover {

        background-color: #1E1E1E;

        color: white;

    }



    .top-filter .filter-btn a:focus {

        box-shadow: none;

    }



    .top-filter .filter-btn a:active {

        background-color: #1E1E1E;

        color: white;

    }



    .top-filter .user h4 {

        float: left;

        margin: 0px;

    }



    .top-filter .user img {

        padding-left: 7px;

    }



    .top-filter .sort {

        display: flex;

        justify-content: flex-end;

    }



    .top-filter .sort p {

        padding-top: 5px;

        float: left;

        margin-bottom: 0px;

        padding-right: 10px;



    }



    .top-filter .sort .order-sort {

        border-color: #8e8e8e;

        font-family: Poppins;

        font-size: 10px;

        font-weight: 400;

        line-height: 16px;

        letter-spacing: 0em;

        text-align: left;

        width: 72%;

    }



    .top-filter .sort .order-sort:focus {

        border-color: #8e8e8e;

        box-shadow: none;

    }



    .account {

        width: 18%;

        height: max-content;

        margin-right: 8px;

        border: solid 1px #c2bfbf;

        border-radius: 18px;

        padding: 25px 30px;

    }



    .inner-content {

        margin-top: 20px;

    }



    .orders .account li {

        padding: 5px 0px;

        color: #4a4949;

        font-family: Poppins;

        font-size: 12px;

        font-weight: 500;

        line-height: 18px;

        letter-spacing: 0em;

        text-align: left;

        position: relative;

        left: 28px;

    }



    .orders .account li a {

        color: #4a4949;

    }



    .orders .account li a:hover {

        text-decoration: none;

        color: #FF061E !important;

    }



    .orders .account li a:active {

        color: #FF061E;

    }



    .order-list {

        width: 80%;

        margin-left: 8px;

        border: solid 1px #c2bfbf;

        border-radius: 18px;

        padding: 25px 30px;

    }



    .orders .order-h4 {

        font-family: Poppins !important;

        font-size: 16px !important;

        font-weight: 600 !important;

        line-height: 24px !important;

        letter-spacing: 0em !important;

        text-align: left !important;



    }



    .order-row {

        padding: 2px 17px !important;

        margin: 0px 20px 15px 20px !important;

        border-radius: 12px !important;

        background: #eceaea !important;

    }



    .order-row .card-body h5 {

        margin-bottom: 0px;

        color: #1E1E1E;

        font-family: Poppins;

        font-size: 20px;

        font-weight: 600;

        line-height: 30px;

        letter-spacing: 0em;

        text-align: left;



    }



    .order-row .card-body p {

        font-size: 12px !important;

        font-weight: 500 !important;

        color: #706f6f;

    }



    .qty {

        display: flex;

        align-items: center;

        justify-content: space-around;

    }



    .qty p {

        color: #1E1E1E;

        font-family: Poppins !important;

        font-size: 16px !important;

        font-weight: 600 !important;

        line-height: 24px !important;

        letter-spacing: 0em !important;

        text-align: left !important;

        margin-bottom: 0px !important;

    }



    .card-img-top {

        width: 20% !important;

    }



    .order-card {

        background: none !important;

        border: none !important;

        display: flex;

        flex-direction: row !important;

        align-items: center !important;

    }



    .status {

        display: flex !important;

        justify-content: center;

        align-items: center !important;

        flex-wrap: wrap !important;

    }



    .status a {

        font-family: Poppins;

        font-size: 10px;

        font-weight: 500;

        line-height: 15px;

        letter-spacing: 0em;

        text-align: left;

        background: #FF9B06;

        padding: 8px 20px;

        border-radius: 8px;

        color: white;

    }



    .status a:hover {

        color: white;

    }



    .order-num {

        display: flex;

        justify-content: flex-end;

        flex-wrap: wrap;

        align-items: center;

        align-content: center;

    }



    .order-num .number {

        color: #1E1E1E !important;

        font-family: Poppins !important;

        font-size: 12px !important;

        font-weight: 600 !important;

        line-height: 18px !important;

        letter-spacing: 0em !important;

        text-align: left !important;



    }



    .order-num .date {

        font-family: Poppins !important;

        font-size: 12px !important;

        font-weight: 500 !important;

        line-height: 18px !important;

        letter-spacing: 0em !important;

        text-align: left !important;



    }



    .order-num p {

        margin-bottom: 0px !important;

    }



    .orders .user {

        padding: 0px !important;

    }



    .acc-col {

        padding-left: 0px !important;

    }



    .opt-col {

        padding-right: 0px !important;

    }



    .register .top-text {

        font-family: Burbank Big Condensed;

        font-size: 60px;

        font-weight: 600;

        line-height: 60px;

        letter-spacing: 0.02em;

        text-align: center;



    }





    .register .Ship-Ser-form {

        width: 50%;

        margin: 0 auto;

    }



    .register .Ship-Ser-form .ship-form {

        width: 100%;

    }



    .register .Ship-col .rad {

        float: left;

        width: 12px;

    }



    .radio-div {

        display: flex;

        clear: both;

    }



    .register .Ship-col {

        padding: 16px 18px;

    }



    .register .ship-form label {

        z-index: 9;

    }



    .register .Ship-col label {

        margin-bottom: 0px !important;

    }



    .register .Ship-col .compny-title {

        font-size: 12px;

        margin-top: 3px;

        margin-left: 10px;

        margin-bottom: 0px;

    }



    .register .radio-title {

        clear: both;

        padding-top: 20px;

        padding-left: 10px;

        font-family: Poppins;

        font-size: 10px;

        font-weight: 600;

        line-height: 12px;

        letter-spacing: 0em;

        text-align: left;



    }



    .already-acc{

        font-family: Poppins;

    font-size: 12px;

    font-weight: 700;

    line-height: 18px;

    letter-spacing: 0em;

    text-align: left;



    }



    .register .Ship-col:hover .compny-title {

        color: #BC0012;

    }



    .register .input-group-addon{

        background: transparent;

        border: none;

    }



    .register .input-group-addon a{

        position: relative;

        left: -50px;

        top: 22px;

        z-index: 9;

    }



    .register .left{

        margin-left: 5px;

        margin-right: 5px;

    }



    .register .right{

        margin-left: 5px;

        margin-right: 0px;

    }



    .register .pass-icon{

        display: block;

    }



    .register .Ship-col{

        width: 50%;

    }



    .register .pass-icon i{

        color: #636262;

    }





    /* Display Mob-Xsmall */



    @media only screen and (max-width: 375px) {



        .rightSort {

            display: block !important;

        }



        .sortBy {

            width: 50%;

            float: left;

        }



        .viewBy {

            padding-left: 44px;

            width: 50%;

            float: left;

            display: block;

        }



        .viewBy p {

            padding-bottom: 15px;

        }



        .sort-by select {

            padding: 5px 0px 5px 0px !important;

        }



        .filter-btn {

            padding-right: 0px !important;

        }



        .filter-btn a {

            margin-bottom: 8px !important;

        }



        .order-row {

            display: block !important;

        }



        .order-card {

            display: block !important;

        }



        .order-list .order-row {

            padding: 12px 0px 12px 0px !important;

        }



        .order-card img {

            float: left;

        }



        .qty {

            float: left;

            flex: 0 0 50% !important;

            max-width: 50% !important;

            justify-content: flex-start;

        }



        .status {

            flex: 0 0 50% !important;

            max-width: 50% !important;

            justify-content: flex-end;

        }



        .order-num {

            padding-top: 12px;

            flex: 0 0 100% !important;

        }



        .order-card {

            padding-bottom: 10px;

            width: 100% !important;

        }



        .order-card-body {

            padding: 0px !important;

            position: relative;

            top: -5px;

            left: 15px;

        }







    }





    /* Display Mob */



    @media only screen and (max-width: 480px) {



        .container-fluid {

            padding: 0px 25px !important;

        }



        .border-left-cart {

            border: none !important;

        }



        .image .thum img {

            margin: 6px 5px !important;

        }



        .h2-heading {

            font-size: 26px !important;

        }



        .h3-heading {

            font-size: 24px !important;

        }



        .pop-btn {

            display: block !important;

        }



        .desktop {

            display: none !important;

        }



        .modal-btn {

            padding: 0px !important;

            position: relative !important;

            top: -9px !important;

            left: 15px;

            background: transparent !important;

            color: #ff061e !important;

            border: none !important;

        }



        .fa-bars:before {

            font-size: 18px !important;

        }



        .mob-cat-btn {

            font-size: 14px !important;

            display: block !important;

            position: relative;

            top: -14px !important;

            left: 25px;

        }



        .filter-col {

            margin-top: -20px !important;

        }



        .Ship-row {

            padding: 10px 10px !important;

        }



        .Ship-row .compny-title {

            font-size: 16px !important;

            line-height: 20px !important;

        }



        .Ship-row .shipping-rate p {

            font-size: 12px;

            line-height: 13px;

        }



        .Ship-row .shipping-logo img {

            width: 85% !important;

            float: right !important;

        }



        .Ship-row .compny-title {

            padding-left: 25px !important;

            padding-bottom: 5px;

        }



        .Ship-row .compny-desc {

            padding-left: 26px !important;

            padding-right: 12px !important;

        }



        .Ship-col {

            width: 100% !important;

            margin: 10px 0px !important;

        }



        .Ship-Ser-form .ship-form {

            width: 100% !important;

            margin: 0px !important;

            position: relative;

        }



        .Ship-Ser-form .select-col-33 {

            width: 100% !important;

            margin: 0px !important;

        }



        .register .Ship-Ser-form{

            width: 100% !important;

        }



        .breadcrumbs .breadcrumb-item {

            font-size: 10px !important;

        }



        .sort-by {

            display: block;

            text-align: left;

        }



        .rightSort {

            display: flex;

            justify-content: space-between;

            padding-left: 18px;

        }



        .product-review-bot {

            padding-left: 0px !important;

            padding-right: 0px !important;

            width: 100% !important;

        }



        .viewBy p {

            font-size: 14px !important;

        }







        .sort-by {

            padding-left: 0px !important;

            padding-right: 0px !important;

            width: 100% !important;

        }



        .sort-by select {

            margin: 0px;

            padding: 5px 18px 5px 8px !important;

        }



        .review-block .row .col-sm-10 {

            width: 50%;

        }



        .review-block .row .col-sm-2 {

            width: 50%;

        }



        .review-block .row .col-sm-6 {

            padding-top: 10px !important;

        }



        .filters {

            width: 50% !important;

            float: left !important;

        }



        .account {

            display: none !important;

            width: 100% !important;

        }



        .account-mob {

            display: block !important;

        }



        .top-filter .user {

            padding: 0px;

            width: 100% !important;

        }



        .top-filter .filter-btn {

            text-align: left !important;

            margin-top: 15px;

            max-width: 100% !important;

            flex: none;

            padding-left: 0px;

        }



        .top-filter .filter-btn a {

            padding: 5px 18px !important;

        }



        .orders .inner-content {

            margin-top: 0px !important;

        }



        .order-list {

            width: 100% !important;

            margin: 0px !important;

            padding: 12px 10px !important;

        }



        .order-list .order-row {

            margin: 0px 0px;

            padding: 0px 0px 12px 0px;

            flex-wrap: wrap;

            justify-content: space-between;

        }



        .order-list .order-row .name {

            max-width: 100% !important;

        }



        .order-list .order-row .order-num {

            max-width: 100% !important;

            display: block !important;

        }



        .top-filter .sort {

            display: block !important;

            flex: none;

            max-width: 100% !important;

            margin-top: 15px;

            padding-left: 0px;

        }



        .pop-btn {

            margin-top: 15px;

        }



        .pop-btn .popup-btn {

            position: inherit !important;

            text-align: left;

        }



        .mob-cat-btn {

            padding-top: 0px !important;

            margin-bottom: 0px !important;

            display: block !important;

            position: relative;

            top: -33px !important;

            left: 25px !important;

        }



        .sortBy {

            display: block !important;

        }



        .sortBy label {

            font-size: 14px !important;

        }



        .opt-col {

            padding-left: 0px !important;

        }



        .top-text{

            font-size: 36px !important;

        }



        .register .radio-div{

            display: block;

        }

    }



    /* Display tab */



    @media only screen and (max-width: 1024px) {

        .border-left-cart {

            border: none !important;

        }



        .container-fluid {

            padding: 0px 25px !important;

        }



        .h3-heading {

            padding-top: 10px !important;

        }



        .Ship-col {

            width: 47%;

            margin: 0px 10px;

            padding: 22px 15px;

        }



        .Ship-Ser-form .ship-form {

            width: 47%;

        }



        .Ship-Ser-form .select-col-33 {

            width: 31%;

            float: left;

            margin-left: 11px;

        }



        .filter-col {

            padding: 0px;

        }



        .prod-det .desktop {

            display: none;

        }



        .prod-det .product-review-bot {

            padding: 0px;

        }



        .modal-body .filters {

            width: 50%;

            float: left;

        }



        .prod-det .mob-cat-btn {

            font-size: 20px;

            display: block !important;

            position: relative;

            top: -11px;

            left: 23px;

        }



        .popup-btn {

            display: block !important;

        }



        .prod-det .popup-btn {

            position: relative;

            left: 15px;

            font-size: 28px;

            padding: 0px !important;

            background: transparent !important;

            color: #ff061e !important;

            border: none !important;

        }



        .top-filter .sort {

            padding-top: 15px;

            justify-content: center;

        }



        .top-filter .filter-btn {

            padding-top: 15px;

            text-align: center;

        }



        .top-filter .user {

            padding: 0px;

            margin-top: 15px;

        }





        .top-filter .filter-btn a {

            padding: 5px 31px;

        }





        .account {

            display: none;

            width: 100%;

        }



        .pop-btn .popup-btn {

            text-align: left;

        }



        .pop-btn {

            margin-top: 15px;

        }



        .pop-btn {

            display: block !important;

        }



        .popup-btn {

            font-size: 28px !important;

            padding: 0px !important;

            background: transparent !important;

            color: #ff061e !important;

            border: none !important;

        }



        .account-mob {

            display: block !important;

        }



        .mob-cat-btn {

            font-size: 20px;

            display: block !important;

            position: relative;

            top: -38px;

            left: 34px;

        }



        .orders .inner-content {

            margin-top: 0px !important;

        }



        .orders .order-list {

            width: 100% !important;

            margin-left: 0px !important;

        }



        .filter-col {

            flex: none !important;

            max-width: 100% !important;

        }



        .sortBy {

            display: block;

        }



        .sort-by select {

            padding: 8px 45px 8px 5px;

        }



        .register .Ship-Ser-form{

            width: 80%;

        }



    }

</style>

@push('script')

@if ($errors->any())

    <script>

        @foreach($errors->all() as $error)

        toastr.error('{{$error}}', Error, {

            CloseButton: true,

            ProgressBar: true

        });

        @endforeach

    </script>

@endif



{{-- recaptcha scripts start --}}

@if(isset($recaptcha) && $recaptcha['status'] == 1)

    <script type="text/javascript">

        var onloadCallback = function () {

            grecaptcha.render('recaptcha_element', {

                'sitekey': '{{ \App\CPU\Helpers::get_business_settings('recaptcha')['site_key'] }}'

            });

        };

    </script>

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

    <script>



        $("#form-id").on('submit',function(e) {

            console.log('okay')

            var response = grecaptcha.getResponse();



            if (response.length === 0) {

                e.preventDefault();

                toastr.error("{{\App\CPU\translate('Please check the recaptcha')}}");

            }

        });

    </script>

@else

    <script type="text/javascript">

        function re_captcha() {

            $url = "{{ URL('/seller/auth/code/captcha') }}";

            $url = $url + "/" + Math.random();

            document.getElementById('default_recaptcha_id').src = $url;

            console.log('url: '+ $url);

        }

    </script>

@endif

{{-- recaptcha scripts end --}}



<script>



    function toggleBtnPass(){

        var passEye = document.getElementById("exampleInputPassword");



        if(passEye.type === "password"){

            passEye.type = "text";

        }

        else{

            passEye.type = "password";

        }

    }





    



    function toggleBtnPass1(){

        var passEye = document.getElementById("exampleRepeatPassword");



        if(passEye.type === "password"){

            passEye.type = "text";

        }

        else{

            passEye.type = "password";

        }

    }

    const inputCheckd = document.querySelector("#inputCheckd");

    const inputCheckd2 = document.querySelector("#inputCheckd2");

    const apply = document.querySelector("#apply");



    inputCheckd.addEventListener('change', toggleSubmitButton);

    inputCheckd2.addEventListener('change', toggleSubmitButton);



    function toggleSubmitButton(){

        if(inputCheckd.checked && inputCheckd2.checked){

            apply.disabled = false;

        }

        else{

            apply.disabled = true;



        }

    }



    // $('#inputCheckd').change(function () {

    //         // console.log('jell');

    //         if ($(this).is(':checked')) {

    //             $('#apply').removeAttr('disabled');

    //         } else {

    //             $('#apply').attr('disabled', 'disabled');

    //         }



    //     });



    $('#exampleInputPassword ,#exampleRepeatPassword').on('keyup',function () {

        var pass = $("#exampleInputPassword").val();

        var passRepeat = $("#exampleRepeatPassword").val();

        if (pass==passRepeat){

            $('.pass').hide();

        }

        else{

            $('.pass').show();

        }

    });

    $('#apply').on('click',function () {



        var image = $("#image-set").val();

        if (image=="")

        {

            $('.image').show();

            return false;

        }

        var pass = $("#exampleInputPassword").val();

        var passRepeat = $("#exampleRepeatPassword").val();

        if (pass!=passRepeat){

            $('.pass').show();

            return false;

        }





    });

    function Validate(file) {

        var x;

        var le = file.length;

        var poin = file.lastIndexOf(".");

        var accu1 = file.substring(poin, le);

        var accu = accu1.toLowerCase();

        if ((accu != '.png') && (accu != '.jpg') && (accu != '.jpeg')) {

            x = 1;

            return x;

        } else {

            x = 0;

            return x;

        }

    }



    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();



            reader.onload = function (e) {

                $('#viewer').attr('src', e.target.result);

            }



            reader.readAsDataURL(input.files[0]);

        }

    }



    $("#customFileUpload").change(function () {

        readURL(this);

    });



    function readlogoURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();



            reader.onload = function (e) {

                $('#viewerLogo').attr('src', e.target.result);

            }



            reader.readAsDataURL(input.files[0]);

        }

    }



    function readBannerURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();



            reader.onload = function (e) {

                $('#viewerBanner').attr('src', e.target.result);

            }



            reader.readAsDataURL(input.files[0]);

        }

    }



    $("#LogoUpload").change(function () {

        readlogoURL(this);

    });

    $("#BannerUpload").change(function () {

        readBannerURL(this);

    });

</script>

@endpush

