<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function latesproduct()
    {
        $products = Product::with('svimage')->orderByDesc('created_at')->get();
        $bottom_product = Product::with('svmany')->orderByDesc('created_at')->first();
        $categorys = Category::all();
        return view('home', compact('products', 'bottom_product', 'categorys'));
    }
}
