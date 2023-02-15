<?php

namespace Jyotijain\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Publish module
         */
        $this->publishes([
            __DIR__ . '/../stubs/Blog' => base_path('Modules/Blog'),
        ], 'ladmin-blog-module');
    }
}
