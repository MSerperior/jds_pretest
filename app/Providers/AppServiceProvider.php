<?php

namespace App\Providers;

use App\Models\News;
use App\Observers\NewsObserver;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

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
        Passport::tokensCan([
            'news:index' => 'News Index',
            'news:store' => 'News Store',
            'news:show' => 'News Show',
            'news:update' => 'News Update',
            'news:destroy' => 'News Destroy',

            'comments:index' => 'Comments Index',
            'comments:store' => 'Comments Store',
            'comments:show' => 'Comments Show',
            'comments:update' => 'Comments Update',
            'comments:destroy' => 'Comments Destroy',
        ]);

        News::observe(NewsObserver::class);
    }
}
