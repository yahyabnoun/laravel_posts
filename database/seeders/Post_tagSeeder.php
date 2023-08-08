<?php

namespace Database\Seeders;

use App\Models\Post_tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Post_tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post_tag::factory()
        ->count(25)
        ->create();
    }
}
