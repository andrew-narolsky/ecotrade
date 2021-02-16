<?php

//use App\OldCategory;
//use App\OldCategoryOne;
//use App\OldCategoryTwo;
use App\OldCategoryThree;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = OldCategoryThree::get();

//        // Get categories
//        $ids = OldCategoryTwo::pluck('id')->all();
//        $categories = OldCategoryTwo::get()->keyBy('id')->toarray();
//        $array = [];
//        foreach ($categories as $key => $category) {
//            if (in_array($category['parent_id'], $ids) || !$category['parent_id']) {
//                $array[$key] = $category;
//            }
//        }
//
//        // Save at et1_category
//        foreach ($array as $category) {
//            DB::table('_product_categories_3')->insert([
//                'id' => $category['id'],
//                'parent_id' => $category['parent_id'],
//                'key' => $category['key'],
//                'name' => $category['name'],
//                'description_html' => strip_tags($category['description_html']),
//                'seotext_html' => $category['seotext_html'],
//                'title' => $category['title'],
//                'keywords' => $category['keywords'],
//                'description' => $category['description'],
//                'file' => $category['file'],
//                'position' => $category['position'],
//                'disabled' => $category['disabled'],
//                'currency'  => $category['currency']
//            ]);
//        }


        foreach ($categories as $category) {
            // Save at et1_category
            DB::table('et1_category')->insert([
                'category_id' => $category->id,
                'image' => 'catalog/categories/' . $category->file ?? '',
                'parent_id' => $category->parent_id,
                'top' => 1,
                'column' => 0,
                'sort_order' => 0,
                'status' => !$category->disabled,
                'date_added' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
            ]);

            // Save at et1_category_description
            DB::table('et1_category_description')->insert([
                'category_id' => $category->id,
                'language_id' => 1,
                'name' => $category->name ?? 'noname',
                'description' => $category->seotext_html ?? NULL,
                'meta_title' => $category->title ?? NULL,
                'meta_h1' => strip_tags($category->description_html) ?? NULL,
                'meta_description' => $category->description ?? NULL,
                'meta_keyword' => $category->keywords ?? NULL,
            ]);

            // Save at et1_url_alias
            DB::table('et1_url_alias')->insert([
                'query' => 'category_id=' . $category->id,
                'keyword' => $category->key,
            ]);

            // Save at et1_category_to_layout
            DB::table('et1_category_to_layout')->insert([
                'category_id' => $category->id,
                'store_id' => 0,
                'layout_id' => 0
            ]);

            // Save at et1_category_to_store
            DB::table('et1_category_to_store')->insert([
                'category_id' => $category->id,
                'store_id' => 0
            ]);

            // Save at et1_category_path
            DB::table('et1_category_path')->insert([
                'category_id' => $category->id,
                'path_id' => $category->id,
                'level' => 0
            ]);
        }
    }
}
