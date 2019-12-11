<?php

namespace App\Providers;

use App\Services\TrashProductServices;
use App\Services\TrashProductSessionServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        TrashProductServices::class => TrashProductSessionServices::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
