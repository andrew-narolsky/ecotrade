<?php

use App\OldCategory;
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
        $categories = OldCategory::get();

        foreach ($categories as $category) {
            DB::table('et1_category')->insert([
                'category_id' => $category->id,
                'image' => 'catalog/categories' . $category->file ?? '',
                'parent_id' => $category->parent_id,
                'top' => 0,
                'column' => 0,
                'sort_order' => 0,
                'status' => 1,
                'date_added' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
            ]);
        }

        foreach ($categories as $category) {
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
        }
    }
}
