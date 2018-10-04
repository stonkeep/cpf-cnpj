<?php

namespace Stonkeep\CpfCnpj;

use Illuminate\Support\Facades\Validator;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('cpf-cnpj', __DIR__.'/../dist/js/field.js');
            Nova::style('cpf-cnpj', __DIR__.'/../dist/css/field.css');
        });

        Validator::extend('cpfCnpj', function ($attribute, $value, $parameters, $validator) {
            if (!$value) {
                return true;
            }
            if (strlen($value) == 11) {
                return ValidaCpfCnpj::check_cpf($value);
            } elseif (strlen($value) == 14) {
                return ValidaCpfCnpj::check_cnpj($value);
            } else {
                return false;
            }
        }, 'CPF ou CNPJ Inválido');
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
