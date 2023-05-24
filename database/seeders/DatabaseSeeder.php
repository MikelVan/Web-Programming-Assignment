<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\BookCategory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 4; $i++) { 
            Category::create([
                'name' => 'Category '.$i
            ]);
        }

        Publisher::factory(5)->create();

        Book::factory(10)->create();
        
        $books = Book::all();
        foreach ($books as $book) {
            $categories = Category::inRandomOrder()->limit(rand(1, 4))->get();
            $book->categories()->attach($categories);
        }
    }
}