<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();
        $password = Hash::make('captain');
        User::create([
            'name' => 'captain',
            'email' => 'captain@yahoomail.com',
            'password' => $password,
            'api_token' => '1234'
        ]);
    }
}
