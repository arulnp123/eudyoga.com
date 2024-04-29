<?php

namespace App\Providers;
use Illuminate\Support\Facades\DB;
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

	
	 public $managelanguages;
     public function boot()
    {
          $this->managelanguages = DB::table( 'languages' )->orderBy( 'id', 'Asc' )->get();

       view()->composer('layouts.header', function ($view)  {
		    $view->with(['managelanguages' => $this->managelanguages]);  
        });
        view()->composer('candidate.layouts_index.header', function ($view) {
		    $view->with(['managelanguages' => $this->managelanguages]);  
        });
        view()->composer('employer.layouts_index.header', function ($view) {
		    $view->with(['managelanguages' => $this->managelanguages]);  
        });
        view()->composer('user.layouts.header', function ($view)  {
		    $view->with(['managelanguages' => $this->managelanguages]);  
        });
    }
	

}
