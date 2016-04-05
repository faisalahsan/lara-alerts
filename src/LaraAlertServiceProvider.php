<?php namespace FaisalAhsan\LaraAlerts;

use Illuminate\Support\ServiceProvider;
use FaisalAhsan\LaraAlerts\Toast;

class LaraAlertServiceProvider extends ServiceProvider{
	
	public function boot(){
		$this->publishFiles();
		$this->loadViewsFrom(__DIR__.'/Views', 'LaraAlertViews');
	}   

	public function register(){
		$this->app->bind('register-toast' , function(){
			return new Toast;
		});
	}

	/**
	* Publish the style and scripts for the toast.
	*/
	protected function publishFiles(){
		$this->publishes([
				__DIR__.'/Libraries/toast.css' => public_path('css/toast.css'),
				__DIR__.'/Libraries/toast.js' => public_path('js/toast.js'),
				// __DIR__.'/Views/toats.blade.php' => base_path('resources/views/vendor/toats/toats.blade.php'),
				], 'LaraAlertResources');
	}
}