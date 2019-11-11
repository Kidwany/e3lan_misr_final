<?php

namespace App\Providers;

use App\Http\ViewComposers\LayoutsComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class LayoutsServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'website.welcome',
                'website.about',
                'website.contact',
                'website.blog',
                'website.blogDetails',
                'website.service',
                'website.serviceDetails',
                'website.client',
                'website.offers',
                'website.album',
                'website.albumDetails',
                'website.video',
                'website.gallery',
                'website.team',
                'website.portfolio',
                'website.project',
            ],
            LayoutsComposer::class
        );
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
