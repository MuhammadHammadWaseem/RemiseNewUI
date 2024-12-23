<?php



namespace App\Http\Controllers\Seller\Auth;



use App\CPU\ImageManager;

use App\Http\Controllers\Controller;

use App\Model\Seller;

use App\Model\Shop;
use App\Model\ShippingAddress;

use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\CPU\Helpers;

use Illuminate\Support\Facades\Session;

use function App\CPU\translate;



class RegisterController extends Controller

{

    public function create()

    {

        $business_mode=Helpers::get_business_settings('business_mode');

        $seller_registration=Helpers::get_business_settings('seller_registration');

        if((isset($business_mode) && $business_mode=='single') || (isset($seller_registration) && $seller_registration==0))

        {

            Toastr::warning(translate('access_denied!!'));

            return redirect('/');

        }

        return view('seller-views.auth.register');

    }



    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'nullable|mimes: jpg,jpeg,png,gif',
            'logo' => 'nullable|mimes: jpg,jpeg,png,gif',
            'banner' => 'nullable|mimes: jpg,jpeg,png,gif',
            'email' => 'required|unique:sellers',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            // 'street' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
            // 'shop_country' => 'required',
            // 'shop_state' => 'required',
            // 'shop_city' => 'required',
            // 'shop_street' => 'required',
            // 'shop_postal_code' => 'required',
            'f_name' => 'required',
            'l_name' => 'required',
            // 'shop_name' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($request['from_submit'] != 'admin') {
            //recaptcha validation
            $recaptcha = Helpers::get_business_settings('recaptcha');
            if (isset($recaptcha) && $recaptcha['status'] == 1) {
                try {
                    $request->validate([
                        'g-recaptcha-response' => [
                            function ($attribute, $value, $fail) {
                                $secret_key = Helpers::get_business_settings('recaptcha')['secret_key'];
                                $response = $value;
                                $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $response;
                                $response = \file_get_contents($url);
                                $response = json_decode($response);
                                if (!$response->success) {
                                    $fail(\App\CPU\translate('ReCAPTCHA Failed'));
                                }
                            },
                        ],
                    ]);
                } catch (\Exception $exception) {
                }
            } else {
                if (strtolower($request->default_captcha_value) != strtolower(Session('default_captcha_code'))) {
                    Session::forget('default_captcha_code');
                    return back()->withErrors(\App\CPU\translate('Captcha Failed'));
                }
            }
        }

        DB::transaction(function ($r) use ($request) {
            $seller = new Seller();
            $seller->f_name = $request->f_name;
            $seller->l_name = $request->l_name;
            $seller->phone = $request->phone;
            $seller->email = $request->email;
            $seller->image = ImageManager::upload('seller/', 'png', $request->file('image'));
            $seller->password = bcrypt($request->password);
            $seller->status =  "approved";
            $seller->save();

            $shop = new Shop();
            $shop->seller_id = $seller->id;
            $shop->name = $request->f_name . $request->l_name;
            $shop->country = $request->country;
            $shop->state = $request->state;
            $shop->city = $request->city;
            // $shop->street = $request->shop_street;
            $shop->postal_code = $request->postal_code;
            $shop->temporary_close = 0;
            $shop->contact = $request->phone;
            $shop->image = ImageManager::upload('shop/', 'png', $request->file('logo'));
            $shop->banner = ImageManager::upload('shop/banner/', 'png', $request->file('banner'));
            $shop->save();

            DB::table('seller_wallets')->insert([
                'seller_id' => $seller['id'],
                'withdrawn' => 0,
                'commission_given' => 0,
                'total_earning' => 0,
                'pending_withdraw' => 0,
                'delivery_charge_earned' => 0,
                'collected_cash' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            ShippingAddress::create([
                'customer_id' => $seller->id,
                'contact_person_name' => $seller->f_name . $seller->l_name,
                'address_type' => 'home',
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'zip' => $request->postal_code,
                'phone' => $request->phone,
                'address' => $request->address,
                'is_billing' => 0
            ]);
        });
        
         Toastr::success('Signup successfully!');
        return redirect('/seller/auth/login');

        if ($request->status == 'approved') {
            Toastr::success('Shop apply successfully!');
            return back();
        } else {
            Toastr::success('Shop apply successfully!');
            return redirect()->route('seller.auth.login');
        }


    }

}

