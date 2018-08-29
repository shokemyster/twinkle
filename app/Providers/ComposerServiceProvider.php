<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['home.*', 'blog.*'], function($view){
            $view->with('pages', \App\Page::get()->toTree());
        });
        View::composer(['home.*', 'blog.*'], function($view){
            $view->with('categories', \App\Category::get());
        });
        View::composer(['home.*', 'blog.*'], function($view){
            $view->with('prefectures', \App\Prefecture::get());
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
