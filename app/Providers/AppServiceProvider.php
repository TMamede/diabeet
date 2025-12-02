<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Badword;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    Validator::extend('no_badwords', function ($attribute, $value, $parameters, $validator) {
        return ! Badword::contains($value);
    }, 'Esse campo contém palavras inadequadas.');
    }

}
