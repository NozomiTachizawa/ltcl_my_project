<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1 ,
            'name' => '電化製品' ,
        ]);
        DB::table('categories')->insert([
            'id' => 2 ,
            'name' => '書籍' ,
        ]);
        DB::table('categories')->insert([
            'id' => 3 ,
            'name' => 'コスメ・スキンケア' ,
        ]);
        DB::table('categories')->insert([
            'id' => 4 ,
            'name' => 'ファッション' ,
        ]);
        DB::table('categories')->insert([
            'id' => 5 ,
            'name' => 'インテリア' ,
        ]);
        DB::table('categories')->insert([
            'id' => 6 ,
            'name' => '日用品' ,
        ]);
        DB::table('categories')->insert([
            'id' => 7 ,
            'name' => '雑貨' ,
        ]);
        DB::table('categories')->insert([
            'id' => 8 ,
            'name' => '食品' ,
        ]);
        DB::table('categories')->insert([
            'id' => 9 ,
            'name' => 'その他' ,
        ]);
    }
}
