<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::all();

        return view('admin.attribute.index', ['attributes' => $attributes]);
    }

    public function create()
    {
        return view('admin.attribute.create');
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
        ],[
            'name.required' => 'Name is must.',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $attribute = new Attribute();
        $attribute->name = $request->name;
        $attribute->description = $request->description;
        $attribute->save();

        return redirect()->back()->with('success', 'Attribute Added Successfully');

    }

    public function edit($id)
    {
        $attribute = Attribute::find($id);
        return view('admin.attribute.edit',  ['attribute' => $attribute]);
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
        ],[
            'name.required' => 'Name is must.',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $attribute = Attribute::find($id);
        $attribute->name = $request->name;
        $attribute->description = $request->description;
        $attribute->update();

        return redirect()->back()->with('success', 'Attribute updated Successfully');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $category = Attribute::find($id);
        $category->delete();

        return response()->json([
            'status'=>200,
            'message'=>'Category Deleted Successfully.'
        ]);

    }
}
