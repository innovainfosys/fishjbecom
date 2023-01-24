<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required',
        ]);

        $category = new Category();
        $category->name        = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->back()->with('success','Category added successfully');
    }

    public function index(){

        $categories = Category::all();
        return view('admin.category.index',['categories'=>$categories]);
    }

    public function edit($id)
    {
        $catergory = Category::find($id);
        return view('admin.category.edit',['category'=>$catergory]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'        => 'required'
        ]);

        $category = Category::find($id);

        $category->name        = $request->name;
        $category->description = $request->description;
        $category->update();
        return redirect()->back()->with('success','Category Updated successfully');
    }

    public function delete(Request $request)
    {

        $id = $request->id;
        $category = Category::find($id);
        $category->delete();

        return response()->json([
            'status'=>200,
            'message'=>'Category Deleted Successfully.'
        ]);

    }

}
