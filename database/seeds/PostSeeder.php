<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([[
            'user_id' => 1,
            'subcategory_id' => 1,
            'title' => 'Huawei Mate 8',
            'description' => 'Sprzedam telefon Huawei w idealnym stanie. Służył tylko do wbijania gwoździ. Spełniał swoje zadanie.',
            'price' => 999.99,
            'is_negotiable' => true,
            'is_business' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'user_id' => 1,
            'subcategory_id' => 7,
            'title' => 'Poradnik Laravel',
            'description' => 'Sprzedam poradnik Laravela. Jak nowy, używany 1 raz do wykonania projektu.',
            'price' => 10,
            'is_negotiable' => false,
            'is_business' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'user_id' => 3,
            'subcategory_id' => 9,
            'title' => 'Dostęp do gry Valorant',
            'description' => 'Sprzedam konta z dostępem do bety gry Valorant. Farmione legalnie, bez szans na bana.',
            'price' => 300,
            'is_negotiable' => false,
            'is_business' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]]);
    }
}
