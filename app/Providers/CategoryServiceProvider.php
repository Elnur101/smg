<?php

namespace App\Providers;

use App\Models\Category;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register service.
     */
    public function register(): void
    {
        View::composer('*', function ($view) {
            $categories = Category::whereNull('parent_id')
                ->with('children')
                ->get();
            $view->with('categories', $categories);
        });
    }
    /**
     * Bootstrap service.
     */
    public function boot(): void
    {
        //
    }
}
