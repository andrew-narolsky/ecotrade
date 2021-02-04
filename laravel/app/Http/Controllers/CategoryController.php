<?php

namespace App\Http\Controllers;

use App\OldCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $ids = OldCategory::pluck('id')->all();
        $categories = OldCategory::get()->keyBy('id')->toarray();
        $array = [];
        foreach ($categories as $key => $category) {
            if (!in_array($category['parent_id'], $ids) && $category['parent_id']) {
                $array[$key] = $category;
            }
        }
        dd($array);
    }
}
