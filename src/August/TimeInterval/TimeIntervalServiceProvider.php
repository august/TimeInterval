<?php namespace August\TimeInterval;

use Illuminate\Support\ServiceProvider;

class TimeIntervalServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('august/time-interval');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['timeinterval'] = $this->app->share(function($app) {
            return new TimeInterval;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('timeinterval');
	}

}
