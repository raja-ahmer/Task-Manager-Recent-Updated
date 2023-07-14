<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function category()
    {
        return view('category');
    }

    public function add_category()
    {
        return view('add-category');
    }

    public function store_category(Request $request)
    {
        $request->validate([
            'categoryName' => 'required',
            'status' => 'required'
        ]);

        // echo "<pre>";
        // print_r($request->all());

        $category = new Category();
        $category->name = $request['categoryName'];
        $category->status = $request['status'];
        $category->save();

        return redirect('category');
    }

    public function show_category()
    {
        $category = Category::all();
        // echo '<pre>';
        // print_r($category->toArray());
        // die;
        $data = compact('category');
        return view('/category')->with($data);
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        if(!is_null($id)) {
            $category->delete();
        }
        else {
            echo '<div class="alert alert-danger">Category not found</div>';
        }
        return redirect('/category');
    }

    public function edit_category($id)
    {
        $category = Category::find($id);
        if(is_null($category))
        {
            return view('category');
        }
        else
        {
            $url = url('/category/update-category') . '/' . $id;
            $data = compact('url', 'category');
            return view('edit-category')->with($data);
        }

    }

    public function update_category($id, Request $request)
    {
        $category = Category::find($id);

        $category->name = $request->get('categoryName');
        $category->status = $request->get('status');
        $category->save();

        // dd($request, $id, $category);
        return redirect('category');
    }

}
