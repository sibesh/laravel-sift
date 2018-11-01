<?php

namespace Sibesh\LaravelSift;

use SiftClient;
use Illuminate\Support\ServiceProvider;

class SiftServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->mergeConfigFrom(__DIR__.'/config/sift-science.php', 'sift-science');

        $this->publishes([
            __DIR__.'/config/sift-science.php' => config_path('sift-science.php'),
        ]);

        $this->app->singleton(SiftScience::class, function ($app) {
            return new SiftScience(
                new SiftClient($app['config']['sift-science'])
            );
        });
	}
}
