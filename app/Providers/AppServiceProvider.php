<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            
        Builder::macro('search', function ($field, $string) {
            return $string ? $this->where($field, 'like', '%' . $string . '%') : $this;
        });
        Builder::macro('searchexactly', function ($field, $string) {
            return $string ? $this->where($field, '=', $string) : $this;
        });
        Builder::macro('searchOr', function ($field, $string) {
            return $string ? $this->orWhere($field, 'like', '%' . $string . '%') : $this;
        });
        Builder::macro('searchexactlyOr', function ($field, $string) {
            return $string ? $this->orWhere($field, '=', $string) : $this;
        });
        Builder::macro('search7days', function ($field, $string) {
            return $string ? $this->whereDate($field, '>=', Carbon::today()->toDateString())->whereDate($field, '<=', Carbon::today()->addDays(7)->toDateString()) : $this;
        });
        Builder::macro('search15days', function ($field, $string) {
            return $string ? $this->whereDate($field, '>=', Carbon::today()->toDateString())->whereDate($field, '<=', Carbon::today()->addDays(15)->toDateString()) : $this;
        });
        Builder::macro('search30days', function ($field, $string) {
            return $string ? $this->whereDate($field, '>=', Carbon::today()->toDateString())->whereDate($field, '<=', Carbon::today()->addDays(30)->toDateString()) : $this;
        });
        Builder::macro('search3months', function ($field, $string) {
            return $string ? $this->whereDate($field, '>=', Carbon::today()->toDateString())->whereDate($field, '<=', Carbon::today()->addMonths(3)->toDateString()) : $this;
        });
        Builder::macro('search6months', function ($field, $string) {
            return $string ? $this->whereDate($field, '>=', Carbon::today()->toDateString())->whereDate($field, '<=', Carbon::today()->addMonths(6)->toDateString()) : $this;
        });
        Builder::macro('search12months', function ($field, $string) {
            return $string ? $this->whereDate($field, '>=', Carbon::today()->toDateString())->whereDate($field, '<=', Carbon::today()->addMonths(12)->toDateString()) : $this;
        });
        Schema::defaultStringLength(191);
    }
}
