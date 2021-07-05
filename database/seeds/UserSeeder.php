<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'email' => 'jankowalski@gmail.com',
            'password' => Hash::make('jankowalski'),
            'name' => 'Jan',
            'surname' => 'Kowalski',
            'phone_number' => '852147963',
            'city' => 'Legnica',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'email' => 'piotrnowak@interia.pl',
            'password' => Hash::make('piotrnowak'),
            'name' => 'Piotr',
            'surname' => 'Nowak',
            'phone_number' => '765318745',
            'city' => 'Wrocław',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'email' => 'jerzy55@onet.pl',
            'password' => Hash::make('jurek123'),
            'name' => 'Jerzy',
            'surname' => 'Baranowski',
            'phone_number' => '654874685',
            'city' => 'Legnica',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]]);
    }
}
