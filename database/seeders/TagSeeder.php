<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([[
            'name' => 'Trending',
        ],[
            'name' => 'Lifestyle',
        ],[
            'name' => 'Content',
        ],[
            'name' => 'Audio',
        ],[
            'name' => 'Inspiration',
        ]]
    );
        // Tag::factory()
        // ->count(5)
        // ->create();
    }
}
