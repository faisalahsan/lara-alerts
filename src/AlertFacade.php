<?php namespace FaisalAhsan\LaraAlerts;

use Illuminate\Support\Facades\Facade;

class AlertFacade extends Facade{

	public static function getFacadeAccessor(){
		return 'register-laraalerts';
	}

}