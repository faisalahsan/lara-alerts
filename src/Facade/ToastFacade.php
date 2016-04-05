<?php namespace FaisalAhsan\LaraAlerts\Facade;

use Illuminate\Support\Facades\Facade;

class ToastFacade extends Facade{

    public static function getFacadeAccessor(){
        return 'register-toast';
    }

}