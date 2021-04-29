<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.add-category');
    }

    public function saveCategory(Request $request){
        $this->validate($request, ['category_name' => 'required']);
        $checkcat = Category::where('category_name', $request->input('category_name'))->first();

        $category = new Category();
        if(!$checkcat){
            $category->category_name = $request->input('category_name');
            $category->save();
            return redirect('/addcategory')->with('success', 'The '.$category->category_name.' has been saved successfully ');
        }else{
            return redirect('/addcategory')->with('fail', 'The '.$request->input('category_name').' category already exists ');
        }
    }

    public function categories(){
        $categories = Category::get();
        return view('admin.categories')->with('categories', $categories);
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.edit-category')->with('category', $category);
    }

    public function updateCategory(Request $request){
        $category = Category::find($request->input('id'));
        $category->category_name = $request->input('category_name');
        $category->update();
        return redirect('/categories')->with('success', 'The '.$category->category_name.' has been updated successfully ');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('success', 'The '.$category->category_name.' category deleted successfully ');
    }

}
