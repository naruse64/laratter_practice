<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// hasManyのN+1問題検知のため
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
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
        // hasManyのN+1問題検知のため、遅延評価を無効化する
        Model::preventLazyLoading(!$this->app->isProduction());
    }
}
