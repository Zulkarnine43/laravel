<?php

namespace App\Http\Controllers;

use App\add_category;
use App\add_product;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function index(){
        $product= add_product::all();
       $categorys= add_category::all();
        return view('admin.index',['products' =>$product,'categorys' =>$categorys]);
    }
    public function addManage(){
        return view('admin.admin');
    }
    public function allpage($id){
       // $categorys= add_category::all();
      //  return view('product.allproduct',['categorys' =>$categorys]);
        $products=add_product::where('category_name',$id)->get();
    return view('product.allproduct',['products'=>$products]);
    }
}
