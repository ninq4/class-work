<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('welcome', compact('categories'));
    }

    public function products($id)
    {
        $products = Product::where('category_id', $id)->where('is_active', 1)->get();
        return view('product', compact( 'products'));
    }
    public function product($id)
    {
        $product = Product::where('id', $id) -> where('is_active', 1) -> first();
        return view('single-product', compact('product'));
    }
}
