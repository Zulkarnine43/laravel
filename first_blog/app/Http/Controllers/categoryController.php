<?php

namespace App\Http\Controllers;

use App\add_category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    //
    public function add_category()
    {
        return view('category.add_category');
    }

    public function new_category(Request $request)
    {
        $addCategories = new add_category();
        $addCategories->category_name = $request->category_name;
        $addCategories->category_description = $request->category_description;
        $addCategories->long_description = $request->long_description;
        $addCategories->save();

        return redirect('/category/add')->with('message', 'Save Categories Info Successfully');
    }

    public function manage_category()
    {
        $categories = add_category::all();
        return view('category.manage_category', ['categories' => $categories]);

    }
    public function deleteCategory($id){
        $row=add_category::find($id);
        // return $row;
        if($row){
            $row->delete();
        }
        return redirect('/category/manage')->with('message','Delete Successfully');

    }


}
