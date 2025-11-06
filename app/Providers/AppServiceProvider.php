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

            'users:index' => 'Users Index',
            'users:store' => 'Users Store',
            'users:show' => 'Users Show',
            'users:update' => 'Users Update',
            'users:destroy' => 'Users Destroy',

            'categories:index' => 'Categories Index',
            'categories:store' => 'Categories Store',
            'categories:show' => 'Categories Show',
            'categories:update' => 'Categories Update',
            'categories:destroy' => 'Categories Destroy',

            'roles:index' => 'Roles Index',
            'roles:store' => 'Roles Store',
            'roles:show' => 'Roles Show',
            'roles:update' => 'Roles Update',
            'roles:destroy' => 'Roles Destroy',
        ]);

        News::observe(NewsObserver::class);
    }
}
