<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\GameGenre;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $the_loai_1 = GameGenre::skip(0)->take(4)->get();
        $the_loai_2 = GameGenre::skip(4)->take(4)->get();
        $the_loai_3 = GameGenre::skip(8)->take(4)->get();

        View::share('the_loai_1', $the_loai_1);
        View::share('the_loai_2', $the_loai_2);
        View::share('the_loai_3', $the_loai_3);
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
