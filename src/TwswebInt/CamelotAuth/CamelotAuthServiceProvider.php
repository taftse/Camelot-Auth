<?php namespace TwswebInt\CamelotAuth;

use TwswebInt\CamelotAuth\SessionDrivers\IlluminateSessionDriver;
use TwswebInt\CamelotAuth\CookieDrivers\IlluminateCookieDriver;
use Illuminate\Support\ServiceProvider;
use Config;

class CamelotAuthServiceProvider extends ServiceProvider {

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
		$this->package('twsweb-int/camelot-auth');
	}

	/**
	 * Register the {{full_package}} service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//$this->package('twsweb-int/camelot-auth');
		$this->app['config']->package('twsweb-int/camelot-auth', __DIR__.'/../../config');
		$app = $this->app;
		$this->app['camelot'] = $this->app->share(function($app)
		{
			//var_dump($app['config']['camelot-auth::camelot']);
			return new Camelot(
				new IlluminateSessionDriver($app['session']),
				new IlluminateCookieDriver($app['cookie']),
				$app['config']['camelot-auth::camelot'],
				$app['request']->path()
				);
		});
		
		//var_dump(Config::get('camelot-auth::camelot.default_driver'));
		//var_dump($this->app['config']->get('camelot-auth::camelot.default_driver'));
		
//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('camelot');
	}

}