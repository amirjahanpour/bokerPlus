<?php

namespace App\Providers;

use App\Models\Navigation;
use Illuminate\Support\Facades\Cache;
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
    public function boot(): void
    {
        View::composer('*', function($view)
        {
            $menus = Cache::rememberForever('navigations', function () {
                $owners = Navigation::query()
                    ->whereNull('ownerID')
                    ->where('isArchive',0)
                    ->pluck('title','id');

                $menus = [];
                foreach ($owners as $ownerID => $owner) {
                    $subNavigations = Navigation::with('post')
                        ->where('ownerID', $ownerID)
                        ->where('isArchive' , 0)
                        ->get();
                    $menus[$owner] = $subNavigations->map(function ($subNavigation) {
                        return [
                            'title' => $subNavigation->title,
                            'titlePost' => preg_replace(
                                '/[\/_|+ -]+/', '-', $subNavigation->post->title
                            ),
                        ];
                    })->toArray();
                }
                return $menus;
            });
            $view->with('navigations', $menus);
        });
    }
}
