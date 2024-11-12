<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\User;
use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(5)->create();

        Book::factory(10)->create();

        User::factory(5)->create();

        Borrowing::factory(20)->create();

        Contact::factory(5)->create();
    }
}
