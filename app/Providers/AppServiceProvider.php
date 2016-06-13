<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator as PaginatorContract;
use Illuminate\Pagination\BootstrapFourPresenter;
use Illuminate\Pagination\SimpleBootstrapFourPresenter;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Enable support for foreign keys on SQLite
        if (DB::connection() instanceof \Illuminate\Database\SQLiteConnection) {
            DB::statement(DB::raw('PRAGMA foreign_keys=1'));
        }

        // Change the ->simplePaginate() presenter
        LengthAwarePaginator::presenter(function (Paginator $paginator) {
            return new SimpleBootstrapFourPresenter($paginator);
        });

        // Change the ->paginate() presenter
        Paginator::presenter(function (PaginatorContract $paginator) {
            return new BootstrapFourPresenter($paginator);
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
