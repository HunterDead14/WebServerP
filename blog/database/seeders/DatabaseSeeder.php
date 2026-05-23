<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        echo "Starting factory...\n";
        \App\Models\BlogPost::factory(100)->create();
        echo "Done!\n";
    }
}
