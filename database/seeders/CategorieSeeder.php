<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('categories')->insert([[
            'name' => 'Celebration',
            'slug' => Str::random(10)
        ],[
            'name' => 'Fashion',
            'slug' => Str::random(10)
        ],[
            'name' => 'Lifestyle',
            'slug' => Str::random(10)
        ],[
            'name' => 'Politic',
            'slug' => Str::random(10)
        ],[
            'name' => 'Culture',
            'slug' => Str::random(10)
        ]]
    );

        // Categories::factory()
        // ->count(5)
        // ->create();

    }
}
