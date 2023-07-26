<?php

namespace Database\Seeders;

use App\Models\Blogpost;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blogpost::factory(50)->create();
    }
}
