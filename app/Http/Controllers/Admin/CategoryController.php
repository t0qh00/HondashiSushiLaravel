<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use File;

class CategoryController extends Controller
{
    public  function index()
    {
        $categories = Category::orderBy('id')->paginate(10);
        return view('admin.categories.index')->with(compact('categories'));
    }
    public  function create()
    {
        return view('admin.categories.create');
    }
    public  function store(Request $request)
    {
        $this->validate($request, Category::$rules, Category::$messages);
        $category = Category::create($request->only('name','description'));//mass assignment
        if($request->hasFile('image'))
        {
            $file = $request->file('photo');
            $path = public_path().'/images/categories';
            $fileName = uniqid().'-'.$file->getClientOriginalName();
            $moved = $file->move($path,$fileName);
        if($moved){
            $category->image = $fileName;
            $category->save();
            }
        }

        return redirect('/admin/categories');
    }

    public  function edit(Category $category)
    {
        return view('admin.categories.edit')->with(compact('category'));
    }
    public  function update(Request $request,Category $category)
    {

        $this->validate($request, Category::$rules, Category::$messages);

        $category->update($request->only('name','description'));//mass assignment

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $path = public_path().'/images/categories';
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $moved = $file->move($path,$fileName);

        if($moved){
            $previousPath = $path . '/' . $category->image;

            $category->image = $fileName;
            $saved =$category->save();
            if($saved)
                File::delete($previousPath);
            }
        }

        return redirect('/admin/categories');
    }
    public function destroy(Category $category)
    {
        $category->delete();//delete en la tabla de productos

        return back();
    }
}
