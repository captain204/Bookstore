<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        $faker = \Faker\Factory::create();
        foreach(range(1,50) as $index)
        {
            Book::create([
                'title' =>$faker->sentence(1),
                'author'=> $faker->name,
                'file'=> $faker->sentence(1),
                'isbn'=> $faker->name,
                'image' =>$faker->sentence(1),
                'price' =>$faker->name
            ]);
        }

        
    }
}
