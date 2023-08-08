<?php

namespace App\Providers;

use App\Models\Categories;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema ;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('categories') ) {
            
            view()->share(['categories' => Categories::has('posts')->get(),'tags' => Tag::all(),'carbon' => new Carbon]);
            Paginator::defaultView('layouts.pagination');
        }
    }
}
