<?php

namespace App\Providers;

use App\Billings\BankPaymentGateway;
use App\Billings\CreditPaymentGateway;
use Illuminate\Support\ServiceProvider;
use App\Billings\PaymentGatewayContract;
use App\Http\View\Composers\TodoComposer;
use App\Models\Todo;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentGatewayContract::class, function ($app) {
            if (request()->has('credit')) {
                return new CreditPaymentGateway('USD');
            }
            return new BankPaymentGateway('VND');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // option 1 - Every single view
        // View::share('todos', Todo::orderBy('title', 'asc')->get());

        // option 2 - Only specific views
        // View::composer(['todos.index', 'todos.create'], function ($view) {
        //     $view->with('todos', Todo::orderBy('title', 'asc')->get());
        // });

        // option 3 - Dedicated class
        View::composer(['partials.todos.*'], TodoComposer::class);
    }
}
