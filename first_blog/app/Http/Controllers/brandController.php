<?php

namespace App\Http\Controllers;

use App\add_brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
    //
    public function add_brand(){
        return view('my_blog.add_brand');
    }
    public function new_brand(Request $request){
       $addBrands = new add_brand();
       $addBrands->brand_name =$request->brand_name;
        $addBrands->brand_description =$request->brand_description;
        $addBrands->long_description =$request->long_description;
        $addBrands->save();

        return redirect('/brand/add')->with('message','Save Brands Info Successfully');
    }
    public function manage_brand(){
        $brands=add_brand::all();
        return view('my_blog.manage_brand',['brands' =>$brands]);
    }
    public function deleteBrand($id){
        $row=add_brand::find($id);
       // return $row;
        if($row){
            $row->delete();
        }
        return redirect('/brand/manage')->with('message','delete Successfully');



    }



}
