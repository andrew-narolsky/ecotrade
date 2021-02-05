<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::get();
        $array = [];
        foreach ($products as $key => $product) {
            if (!$product->categories()->count()) {
                $array[$key] = $product;
            }
        }

        // Save at et1_product_description
        foreach ($array as $product) {
            DB::table('et1_product_description')->insert([
                'product_id' => $product['id'],
                'language_id' => 1,
                'name' => $product['name'] ?? 'noname',
                'tag' => 0,
                'description' => $product['seotext_html'] ?? NULL,
                'meta_title' => $product['title'] ?? NULL,
                'meta_h1' => $product['name'] ?? NULL,
                'meta_description' => $product['description'] ?? NULL,
                'meta_keyword' => $product['keywords'] ?? NULL,
            ]);
        }
    }
}
