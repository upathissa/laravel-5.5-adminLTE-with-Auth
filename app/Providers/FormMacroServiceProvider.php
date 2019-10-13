<?php

namespace App\Providers;
use Form;
use Illuminate\Support\ServiceProvider;

class FormMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::macro('phoneNumber', function()
        {
            return '<input type="text" class="form-control" data-inputmask=\'"mask": "(999) 999-9999"\' data-mask>';
        });

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
