<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;

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
        // Retrieve the list of languages
        $this->managelanguages = DB::table('languages')->orderBy('id', 'Asc')->get();

        // Share the list of languages with specific views
        view()->composer([
            'layouts.header',
            'candidate.layouts_index.header',
            'employer.layouts_index.header',
            'user.layouts.header',
        ], function ($view) {
            $view->with('managelanguages', $this->managelanguages);
        });

        // Share the current user's ID with all views
        view()->composer('*', function ($view) {
            $view->with('userId', $this->getCurrentUserId());
            $view->with('userFirstName', $this->getUserFirstName());
        });
    }

    /**
     * Get the current user ID from the session.
     *
     * @return mixed
     */
    protected function getCurrentUserId()
    {
        return Session::get('id');
    }

    /**
     * Get the current user's first name from the database.
     *
     * @return string|null
     */
    protected function getUserFirstName()
    {
        $userId = $this->getCurrentUserId();
        if ($userId) {
            $user = DB::table('users')->where('id', $userId)->first();
            return $user ? $user->name : null;
        }
        return null;
    }
}