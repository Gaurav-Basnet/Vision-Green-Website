<?php

namespace App\Providers;

use App\Models\Cdetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use View;

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
public function boot()
{
    
    $company = Cdetail::first(); 
    View::share('companyDetails', $company);

    // Share authenticated user with all views
    View::composer('*', function ($view) {
        $view->with('authUser', Auth::user());
    });
}
}
