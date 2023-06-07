<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('svimage')->orderByDesc('created_at')->get();
        $bottom_product = Product::with('svmany')->orderByDesc('created_at')->first();
        $categorys = Category::all();
        return view('home', compact('products', 'bottom_product', 'categorys'));
    }

    public function aboutus()
    {
        return view('aboutus');
    }
    public function contactus()
    {
        return view('contactus');
    }

    public function crud() {
        return view('admin.crud');
    }
}
