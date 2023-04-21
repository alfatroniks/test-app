<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryTranslateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_translates')->insert([
            'category_id' => 1,
            'name' => Str::random(10),
            'lang_code' => 'en'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 2,
            'name' => Str::random(10),
            'lang_code' => 'en'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 3,
            'name' => Str::random(10),
            'lang_code' => 'en'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 4,
            'name' => Str::random(10),
            'lang_code' => 'en'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 5,
            'name' => Str::random(10),
            'lang_code' => 'en'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 6,
            'name' => Str::random(10),
            'lang_code' => 'en'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 1,
            'name' => Str::random(10),
            'lang_code' => 'ru'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 2,
            'name' => Str::random(10),
            'lang_code' => 'ru'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 3,
            'name' => Str::random(10),
            'lang_code' => 'ru'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 4,
            'name' => Str::random(10),
            'lang_code' => 'ru'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 5,
            'name' => Str::random(10),
            'lang_code' => 'ru'
        ]);
        DB::table('category_translates')->insert([
            'category_id' => 6,
            'name' => Str::random(10),
            'lang_code' => 'ru'
        ]);
    }
}
