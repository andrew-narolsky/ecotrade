<?php

namespace App\Http\Controllers;

use App\OldCategory;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
//        $ids = OldCategory::pluck('id')->all();
//        $products = Product::all();
//        $product = Product::where('id', 1183)->first();
//        $categories = OldCategory::get()->keyBy('id')->toarray();
//        $array = [];
//        foreach ($categories as $key => $category) {
//            if (!in_array($category['parent_id'], $ids) && $category['parent_id']) {
//                $array[$key] = $category;
//            }
//        }
//        dd($product);
        $products = Product::all();
        $array = [];
        foreach ($products as $key => $product) {
            if (!$product->categories()->count()) {
                $array[$key] = $product;
            }
        }
        dd($array);
//        dd($products);
//        dd($product->categories()->count());
    }
}
