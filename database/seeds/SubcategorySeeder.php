<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([[
            'name' => 'Telefony',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'Komputery',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'Telewizory',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'Ubrania',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'Obuwie',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'Dodatki',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'Książki',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'Muzyka',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'Gry',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]]);
    }
}
