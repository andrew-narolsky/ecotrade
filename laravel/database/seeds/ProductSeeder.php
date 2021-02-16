<?php

use App\OldCategoryThree;
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
//            if ($product->categories()->count() && in_array($product->categories[0]->id, $ids)) {
                $array[$key] = $product;
            }
        }

        foreach ($array as $product) {

//            switch ($product->categories[0]->currency) {
//                case 'руб/шт':
//                    $currency = '0';
//                    break;
//                case 'руб/упк':
//                    $currency = '4';
//                    break;
//                case 'руб/упак':
//                    $currency = '4';
//                    break;
//                case 'руб/уп':
//                    $currency = '4';
//                    break;
//                case 'руб/рул':
//                    $currency = '5';
//                    break;
//                case '€/м2':
//                    $currency = '1';
//                    break;
//                case 'руб/метр':
//                    $currency = '1';
//                    break;
//                case 'руб/м2.опт':
//                    $currency = '2';
//                    break;
//                case 'руб/м2':
//                    $currency = '2';
//                    break;
//                case 'руб/лист':
//                    $currency = '6';
//                    break;
//                case '':
//                    $currency = '0';
//                    break;
//                default:
//                    $currency = '0';
//            }

//            if ($product->price_old && $product->price && $product->price_old != ' ') {
//                $action_price = $product->price;
//                $price = $product->price_old;
//            } else if ($product->price && !$product->price_old && $product->price_old != ' ') {
//                $action_price = 0.00;
//                $price = $product->price;
//            } else {
//                $action_price = 0.00;
//                $price = 0.00;
//            }

//            $currency = '0';
//
//            // Save at et1_product
//            DB::table('et1_product')->insert([
//                'product_id' => $product->id,
//                'model' => 1,
//                'sku' => 0,
//                'upc' => 0.00,
//                'ean' => 0,
//                'jan' => 0.00,
//                'isbn' => $currency,
//                'mpn' => $currency,
//                'location' => 1,
//                'quantity' => 1000,
//                'stock_status_id' => 7,
//                'image' => 'catalog/products/' . $product->picture ?? '',
//                'manufacturer_id' => 0,
//                'shipping' => 1,
//                'price' => $price,
//                'points' => 0,
//                'tax_class_id' => 0,
//                'date_available' => date("Y-m-d"),
//                'weight' => 0,
//                'weight_class_id' => 0,
//                'length' => 0,
//                'width' => 0,
//                'height' => 0,
//                'length_class_id' => 0,
//                'subtract' => 1,
//                'minimum' => 1,
//                'sort_order' => 1,
//                'status' => !$product->disabled,
//                'viewed' => 0,
//                'date_added' => date("Y-m-d H:i:s"),
//                'date_modified' => date("Y-m-d H:i:s"),
//                'density' => 0,
//                'volume' => 0
//            ]);
//
//            // Save at et1_product_description
//            DB::table('et1_product_description')->insert([
//                'product_id' => $product->id,
//                'language_id' => 1,
//                'name' => $product->name ?? 'noname',
//                'tag' => 0,
//                'description' => $product->seotext_html ?? NULL,
//                'meta_title' => $product->title ?? NULL,
//                'meta_h1' => $product->name ?? NULL,
//                'meta_description' => $product->description ?? NULL,
//                'meta_keyword' => $product->keywords ?? NULL,
//            ]);
//
//            // Save at et1_product_special
//            if ($action_price) {
//                DB::table('et1_product_special')->insert([
//                    'product_id' => $product->id,
//                    'customer_group_id' => 1,
//                    'priority' => 0,
//                    'price' => $action_price,
//                    'date_start' => date("Y-m-d", strtotime("now")),
//                    'date_end' => date("Y-m-d", strtotime("+1 year"))
//                ]);
//            }
//
//            // Save at et1_product_image
//            if ($product->album) {
//                $gallery = explode('|', $product->album);
//                foreach($gallery as $image) {
//                    DB::table('et1_product_image')->insert([
//                        'product_id' => $product->id,
//                        'image' => 'catalog/products/' . $image,
//                        'sort_order' => 0,
//                    ]);
//                }
//            }

//            if ($price && $product->categories[0]->currency != '€/м2') {
//                $category_id = $product->categories[0]->id;
//
//                // Save at et1_product_to_category
//                DB::table('et1_product_to_category')->insert([
//                    'product_id' => $product->id,
//                    'category_id' => $category_id,
//                    'main_category' => 1,
//                ]);
//            } else if ($price && $product->categories[0]->currency == '€/м2') {
//                $category_id_2 = 2485;
//                $category_id = $product->categories[0]->id;
//
//                // Save at et1_product_to_category
//                DB::table('et1_product_to_category')->insert([
//                    'product_id' => $product->id,
//                    'category_id' => $category_id,
//                    'main_category' => 1,
//                ]);
//
//                // Save at et1_product_to_category
//                DB::table('et1_product_to_category')->insert([
//                    'product_id' => $product->id,
//                    'category_id' => $category_id_2,
//                    'main_category' => 0,
//                ]);
//            } else if (!$price) {
//                $category_id_2 = 2486;
//                $category_id = $product->categories[0]->id;
//
//                // Save at et1_product_to_category
//                DB::table('et1_product_to_category')->insert([
//                    'product_id' => $product->id,
//                    'category_id' => $category_id,
//                    'main_category' => 1,
//                ]);
//
//                // Save at et1_product_to_category
//                DB::table('et1_product_to_category')->insert([
//                    'product_id' => $product->id,
//                    'category_id' => $category_id_2,
//                    'main_category' => 0,
//                ]);
//            }
//            else {
//                $category_id = 2487;
//            }

            $category_id = 2487;

            // Save at et1_product_to_category
            DB::table('et1_product_to_category')->insert([
                'product_id' => $product->id,
                'category_id' => $category_id,
                'main_category' => 1,
            ]);

//            if (isset($category_id_2) && $category_id_2) {
//                // Save at et1_product_to_category
//                DB::table('et1_product_to_category')->insert([
//                    'product_id' => $product->id,
//                    'category_id' => $category_id_2,
//                    'main_category' => 0,
//                ]);
//            }

//            // Save at et1_url_alias
//            DB::table('et1_url_alias')->insert([
//                'query' => 'product_id=' . $product->id,
//                'keyword' => $product->key,
//            ]);
//
//            // Save at et1_product_to_layout
//            DB::table('et1_product_to_layout')->insert([
//                'product_id' => $product->id,
//                'store_id' => 0,
//                'layout_id' => 0
//            ]);
//
//            // Save at et1_product_to_store
//            DB::table('et1_product_to_store')->insert([
//                'product_id' => $product->id,
//                'store_id' => 0
//            ]);
//
//            // Save at et1_product_related
//            if ($product->also) {
//                $related = explode('|', $product->also);
//                foreach($related as $item) {
//                    DB::table('et1_product_related')->insert([
//                        'product_id' => $product->id,
//                        'related_id' => $item,
//                    ]);
//                }
//            }

            // Save product option
//            if ($product->params) {
//                $options = json_decode($product->params, true);
//                if ($options[0]['name'] && count($options[0]['values'])) {
//
////                    // Save at et1_option
////                    $option_id = DB::table('et1_option')->insertGetId([
////                        'type' => 'select',
////                        'sort_order' => 0
////                    ]);
////
////                    // Save at et1_option_description
////                    DB::table('et1_option_description')->insert([
////                        'option_id' => $option_id,
////                        'language_id' => 1,
////                        'name' => $options[0]['name']
////                    ]);
////
////                    // Save at et1_product_option
////                    $product_option_id = DB::table('et1_product_option')->insertGetId([
////                        'product_id' => $product->id,
////                        'option_id' => $option_id,
////                        'value' => '',
////                        'required' => 1
////                    ]);
//
////                    foreach ($options[0]['values'] as $item) {
////
////                        // Save at et1_option_value
////                        $option_value_id = DB::table('et1_option_value')->insertGetId([
////                            'option_id' => $option_id,
////                            'image' => '',
////                            'sort_order' => 0
////                        ]);
////
////                        // Save at et1_option_value_description
////                        DB::table('et1_option_value_description')->insert([
////                            'option_value_id' => $option_value_id,
////                            'language_id' => 1,
////                            'option_id' => $option_id,
////                            'name' => $item['value']
////                        ]);
////
////                        if ($item['price']) {
////                            $price = $item['price'];
////                        } else {
////                            $price = 0.00;
////                        }
////
////                        // Save at et1_product_option_value
////                        DB::table('et1_product_option_value')->insert([
////                            'product_option_id' => $product_option_id,
////                            'product_id' => $product->id,
////                            'option_value_id' => $option_value_id,
////                            'quantity' => 1000,
////                            'option_id' => $option_id,
////                            'subtract' => 1,
////                            'base_price' => 0.00,
////                            'price' => $price,
////                            'price_prefix' => '',
////                            'points' => 0,
////                            'points_prefix' => '',
////                            'weight' => 0.00,
////                            'weight_prefix' => ''
////                        ]);
//                    }
//                }
//            }
        }
    }
}
