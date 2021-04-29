<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.add-product');
    }

    public function saveProduct(Request $request){
        $this->validate($request, ['product_name' => 'required',
                                'product_price' => 'required',
                                'product_image' => '|nullable|max:1999']);
    }

    public function products(){
        return view('admin.products');
    }




}
