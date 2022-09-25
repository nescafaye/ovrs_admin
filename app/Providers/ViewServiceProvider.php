<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Admin;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    // public function register()
    // {
    //     //
    // }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Use following code if you want to use callback
        // Based view composer instead of class based view composer
        View::composer('layouts.profile', function ($profile) {

            // following code will create $posts variable which we can use
            // in our post.list view you can also create more variables if needed
            $profile->with('profile', Admin::where('admin_id', auth()->id())->get());
        });

    }
}
