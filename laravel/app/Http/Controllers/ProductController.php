<?php

namespace App\Http\Controllers;

use App\OldCategory;
use App\OldCategoryThree;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $ids = OldCategoryThree::pluck('id')->toarray();
        $products = Product::get();
//        $products = Product::where('id', '<', 3246)->get();
//        $products = Product::where('id', '>', 3245)->where('id', '<', 4541)->get();
//        $products = Product::where('id', '>', 4540)->where('id', '<', 5798)->get();
//        $products = Product::where('id', '>', 5797)->where('id', '<', 7149)->get();
//        $products = Product::where('id', '>', 7148)->where('id', '<', 8444)->get();
//        $products = Product::where('id', '>', 8443)->where('id', '<', 9706)->get();
//        $products = Product::where('id', '>', 9705)->get();
        $array = [];
        foreach ($products as $key => $product) {
            if (!$product->categories()->count() || !in_array($product->categories[0]->id, $ids)) {
                $array[$key] = $product;
            }
        }
        dd($array);
//        $ids = OldCategoryThree::pluck('id')->toarray();
//        $products = Product::get();
//        $array = [];
//        foreach ($products as $key => $product) {
//            if (!$product->categories()->count() || !in_array($product->categories[0]->id, $ids)) {
//                $array[$key] = $product;
//            }
//        }
//        dd($array);
//        $ids = OldCategoryThree::pluck('id')->toarray();
////        $products = Product::where('id', 11055)->get();
//        $products = Product::take(1000)->get();
//        $array = [];
//        foreach ($products as $key => $product) {
//            if ($product->params) {
//                $option = json_decode($product->params, true);
//                if ($option[0]['name'] && count($option[0]['values'])) {
//                    $array[$product->id] = $option;
//                }
//            }
////            if ($product->categories()->count() && in_array($product->categories[0]->id, $ids)) {
////                switch ($product->categories[0]->currency) {
////                    case 'руб/шт':
////                        $currency = 0;
////                        break;
////                    case 'руб/упк':
////                        $currency = 4;
////                        break;
////                    case 'руб/упак':
////                        $currency = 4;
////                        break;
////                    case 'руб/уп':
////                        $currency = 4;
////                        break;
////                    case 'руб/рул':
////                        $currency = 5;
////                        break;
////                    case '€/м2':
////                        $currency = 1;
////                        break;
////                    case 'руб/метр':
////                        $currency = 1;
////                        break;
////                    case 'руб/м2.опт':
////                        $currency = 2;
////                        break;
////                    case 'руб/м2':
////                        $currency = 2;
////                        break;
////                    case 'руб/лист':
////                        $currency = 6;
////                        break;
////                    default:
////                        $currency = 0;
////                }
////                dump($currency);
//////                $array[$key] = $product;
////            }
//        }
//        dd($array);
    }
}
