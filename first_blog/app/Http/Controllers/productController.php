<?php

namespace App\Http\Controllers;

use App\add_brand;
use App\add_cart;
use App\add_category;
use App\add_product;
use Illuminate\Http\Request;
use Cart;
use Image;
use Session;

class productController extends Controller
{

    public function add_product(){
        $category=add_category::all();
        $brand=add_brand::all();
        return view('product.add_products',['categories' =>$category,'brands' =>$brand]);
    }

    public function new_product(Request $request)
    {

        $addProducts = new add_product();

        $productImage = $request->file('product_image');
        if ($productImage) {
            $imageName = $productImage->getClientOriginalName();
            $directory = 'product_images/';
           $imageUrl = $directory.$imageName;
            $productImage->move($directory, $imageName);

        }


        $addProducts->category_name = $request->category_name;
        $addProducts->brand_name = $request->brand_name;
        $addProducts->product_name = $request->product_name;
        $addProducts->product_price = $request->product_price;
        $addProducts->product_quantity = $request->product_quantity;
        $addProducts->product_description = $request->product_description;
        $addProducts->long_description = $request->long_description;
        $addProducts->product_image = $imageUrl;
        // $addProducts->product_image =$imageUrl;
        $addProducts->save();

        return redirect('/products/added')->with('message', 'Save Products Info Successfully');
    }

    public function manage_product()
    {
        $products = add_product::all();
        return view('product.manage_product', ['products' => $products]);
    }

    public function productDelete($id){
        $row=add_product::find($id);
        if($row){
            $row->delete();
            return redirect('/products/manage');
        }
    }
    public function productEdit($id){
        $row=add_product::find($id);
        $cat=add_category::all();
        $bra=add_brand::all();
        return view('product.product_edit',['product'=>$row,'category' =>$cat,'brand'=>$bra]);
    }
    public function UpdateProduct(Request $request){
        $row=add_product::find($request->id);
        if($row) {
            $Image = $request->file('product_image');
            $name = $Image->getClientOriginalName();
            $directory = 'product_images/';
            $url = $directory . $name;
            $Image->move($directory, $name);
        }
            $row->product_name = $request->product_name;
            $row->product_price = $request->product_price;
            $row->product_quantity = $request->product_quantity;
            $row->product_description = $request->product_description;
            $row->long_description = $request->long_description;
            $row->product_image = $url;
            $row->save();
            return redirect('/product/manage');

    }
    public function product_detail($id){
        $products=add_product::find($id);
        $categorys= add_category::all();
        Session::put('product_name',$products->product_name);
        Session::put('product_price',$products->product_price);
        Session::put('product_quantity',$products->product_quantity);
        return view('product.product_details',['cardProduct' =>$products,'categorys' =>$categorys]);
    }
    public function electronic(){
        return view('product.electronics');
    }

}
