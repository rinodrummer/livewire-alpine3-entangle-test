<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'jetstream-custom');

        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('dialog-modal');
            $this->registerComponent('modal');
        });
    }

    protected function registerComponent(string $component) {
        Blade::component(
            'jetstream-custom::components.' . $component,
            'jet-custom-' . $component
        );
    }
}
