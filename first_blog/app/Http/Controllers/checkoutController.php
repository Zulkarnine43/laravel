<?php

namespace App\Http\Controllers;

use App\add_product;
use App\checkout_register;
use App\shopping_form;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Session;
use Mail;
use DB;
use Auth;
use Redirect;
use Barryvdh\DomPDF\Facade as PDF;

class checkoutController extends Controller
{
    public function shipping($id){
         $ship=add_product::find($id);
        return view('shipping.shipping',['shipping' =>$ship]);
    }
    public function shippingForm($id){
        return view('shipping.shipping_form',['id' =>$id]);
    }
    public function fromSubmit(Request $request){
        $form=new shopping_form();
        $form->fullname = $request->fullname;
        $form->email = $request->email;
        $form->phone_number = $request->phone_number;
        $form->address = $request->address;
        $form->save();
        Session::put('Cfullname',$form->fullname);
        Session::put('customerEmail',$form->email);
        Session::put('Cphone_number',$form->phone_number);
        Session::put('Caddress',$form->address);

        return redirect('/payment/type');

    }
    public function payment(){
        return view('payment.payment_type');
    }
    public function paymenttype(Request $request){
       Session::put('type',$request->payment_type);
        return redirect('/Order/Info');

    }
    public function OrderInfo(){


        return view('payment.order_info');
    }
    public function downloadInfo(){
        $pdf = PDF::loadView('payment.download_invoice');
        return $pdf->stream('invoice.pdf');
    }
}
