<?php

namespace App\Http\Controllers;

use App\Category;
use App\Classes\Tree;
use App\OldCategory;
use App\OldCategoryOne;
use App\OldCategoryThree;
use App\OldCategoryTwo;

class CategoryController extends Controller
{
    public function index()
    {
//        $ids = Category::pluck('category_id')->all();
//        $categories = Category::get()->keyBy('category_id')->sortBy('parent_id')->toarray();
//        $array = [];
//        foreach ($categories as $key => $category) {
//            if (in_array($category['parent_id'], $ids) || !$category['parent_id']) {
//                $array[$key] = $category;
//            }
//        }
//        dd($array);
//        $categories = OldCategoryNew::select('id', 'parent_id', 'name')->get()->sortBy('name')->keyBy('id')->toarray();
//        $categories = Category::get()->keyBy('category_id')->sortBy('parent_id')->toarray();
////        dd($categories);
//        $tree = Tree::getTree($categories);
//        dd($tree);
//        $array = [];
//        foreach ($categories as $key => $category) {
//            if (!in_array($category['parent_id'], $ids) && $category['parent_id']) {
//                $array[$key] = $category;
//            }
//        }
//        dd($array);
//
//        // Get categories
//        $ids = OldCategoryThree::pluck('id')->all();
//        $categories = OldCategoryThree::get()->keyBy('id')->toarray();
//        $array = [];
//        foreach ($categories as $key => $category) {
//            if (in_array($category['parent_id'], $ids) || !$category['parent_id']) {
//                $array[$key] = $category;
//            }
//        }
//        dd($array);
        $categories = OldCategoryThree::get()->sortBy('name')->keyBy('id')->toarray();
//        dd($categories);
//        $categories = Category::get()->keyBy('category_id')->sortBy('parent_id')->toarray();
        $tree = Tree::getTree($categories);
        dd($tree);
    }
}
