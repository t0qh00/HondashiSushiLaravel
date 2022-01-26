<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use File;

class PagesController extends Controller
{
    public function index()
    {
        return view('admin.pages.san_ramon');
    }
    public function indexP()
    {
        return view('admin.pages.palmares');
    }
    public function indexM()
    {
        return view('admin.pages.menu');
    }
    public function indexMP()
    {
        return view('admin.pages.menu_ofertas');
    }
    public function indexG()
    {
        $categories = Category::orderBy('id')->paginate(10);
        return view('admin.pages.galeria')->with(compact('categories'));
    }
}
