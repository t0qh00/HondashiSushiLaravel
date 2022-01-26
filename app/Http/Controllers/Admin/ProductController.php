<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;

class ProductController extends Controller
{
    public  function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products'));
    }
    public  function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.products.create')->with(compact('categories'));
    }
    public  function store(Request $request)
    {
        //dd($request->all());
        $messages =[
            'name.required' => 'Es necesario ingresar un nombre para el producto.',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'description.required' => 'Es necesario ingresar una descripcion para el producto.',
            'description.max' => 'La descripción sobrepasa los 200 caracteres.',
            'price.required' => 'Es necesario ingresar un precio para el producto.',
            'price.numeric' => 'Los datos deben ser números.',
            'price.min' => 'No se admiten valores negativos.'
        ];
        $rules =[
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0',
        ];
        $this->validate($request, $rules, $messages);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->category_id = $request->category_id;
        $product->save();//insert en la tabla de productos
        
        return redirect('/admin/products');
    }
    public  function edit($id)
    {
        $categories = Category::orderBy('name')->get();
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product', 'categories'));
    }
    public  function update(Request $request, $id)
    {
        $messages =[
            'name.required' => 'Es necesario ingresar un nombre para el producto.',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'description.required' => 'Es necesario ingresar una descripcion para el producto.',
            'description.max' => 'La descripción sobrepasa los 200 caracteres.',
            'price.required' => 'Es necesario ingresar un precio para el producto.',
            'price.numeric' => 'Los datos deben ser números.',
            'price.min' => 'No se admiten valores negativos.'
        ];
        $rules =[
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0',
        ];
        $this->validate($request, $rules, $messages);
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->category_id = $request->category_id;
        $product->save();//update en la tabla de productos
        
        return redirect('/admin/products');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->images()->delete();
        $product->delete();//delete en la tabla de productos
        
        return back();
    }
}
