<?php
namespace Ollywarren\LaravelGoCardless;

use Illuminate\Support\ServiceProvider;
use Ollywarren\LaravelGoCardless\Services\GoCardlessService;

class GoCardlessServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/Config/gocardless.php' => config_path('gocardless.php'),]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('GoCardless', GoCardlessService::class);
    }
}
