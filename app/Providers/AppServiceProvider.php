<?php

namespace App\Providers;

use App\Models\ModuleItem;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $navigation = ModuleItem::getRecursive();

        view()->share(array(

            'navigation' => $navigation
        ));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
