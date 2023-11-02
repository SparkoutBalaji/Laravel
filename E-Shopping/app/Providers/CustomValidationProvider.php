<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class CustomValidationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Validator::extend('name_regex', function ($attribute, $value, $parameters, $validator) {
            // Define your custom validation logic here
            return preg_match('/^[A-Za-z\s]+$/', $value); // Example: Only alphabetic characters and spaces allowed
        });
    }
}
