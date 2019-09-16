<?php

namespace App\Http\Controllers;

use App\add_product;
use App\register_save;
use Illuminate\Http\Request;
use Session;
use Check;
use Mail;

class customerController extends Controller
{
    //
    public function registered()
    {
        return view('customer.register_info');
    }

    public function registerSave(Request $request)
    {
        $regis = new register_save();
        $regis->username = $request->username;
        $regis->email = $request->email;
        $regis->password = $request->password;
        $regis->confirm_password = $request->confirm_password;
        $regis->save();
        Session::put('username',$regis->username);
        $data =$regis->toArray();

            Mail::send('customer.verification_register',$data,function ($message) use  ($data) {
           $message->to($data['email']);
           $message->subject('verification_register');
            });

        return redirect('/customer/logins')->with('message', 'register Successfully......login now');

    }

    public function logins()
    {

        return view('customer.login_info');
    }

    public function loginCheck(Request $request)
    {
        $customer = register_save::where('password', $request->password)->first();
      //  if (password_verify($request->password, $customer->password)) {
           // Session::put('id', $customer->id);
           // Session::put('username', $customer->username);
          //  return redirect('/');
      //  }
        if($customer){
            return redirect('/');
        }
        else {
            return redirect('/customer/logins')->with('message', 'required valid password');
        }
    }
   /* public function GetProduct($name){
        $product=add_product::find($name);

        return view('product.product_info',['products'=>$product]);
    }*/

}
