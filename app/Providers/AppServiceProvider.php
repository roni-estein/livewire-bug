<?php

namespace App\Providers;

use App\Helpers\DirectiveHelper;
use Illuminate\Support\Facades\Blade;
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
        Blade::directive('checked', function ($expression) {
            $items = DirectiveHelper::parseMultipleArgs($expression);
            
            throw_unless($items->count() === 2, new \Exception('Select Blade directive requires 2 parameters :' . $items->count()));
            return "<?={$items->get(0)} == {$items->get(1)} ? 'checked' : '' ?>";
        });
        
        Blade::directive('selected', function ($expression) {
            $items = DirectiveHelper::parseMultipleArgs($expression);
            
            throw_unless($items->count() === 2, new \Exception('Select Blade directive requires 2 parameters :' . $items->count()));
            return "<?={$items->get(0)} == {$items->get(1)} ? 'selected' : '' ?>";
            
        });
    }
}
