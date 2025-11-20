<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        //
        Gate::define('correctUser', function (User $user, Job $curentJob) {
            return $user->id === $curentJob->user_id;
        });
        Gate::define('correctJob', function (User $user, Job $job) {

        });
    }
}
