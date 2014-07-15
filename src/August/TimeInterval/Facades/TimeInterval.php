<?php namespace August\TimeInterval\Facades;

use Illuminate\Support\Facades\Facade;

class TimeInterval extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'timeinterval'; }

}
