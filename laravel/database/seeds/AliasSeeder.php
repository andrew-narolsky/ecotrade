<?php

use App\AliasOne;
use Illuminate\Database\Seeder;

class AliasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get aliases
        $aliases = AliasOne::all();

        // Save at et1_category
        foreach ($aliases as $alias) {
            DB::table('et1_url_alias')->insert([
                'query' => $alias->query,
                'keyword' => $alias->keyword
            ]);
        }
    }
}
