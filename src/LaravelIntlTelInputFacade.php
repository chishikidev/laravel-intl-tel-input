<?php

namespace ChishikiDev\LaravelIntlTelInput;

use Illuminate\Support\Facades\Facade;

class LaravelIntlTelInputFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-intl-tel-input';
    }
}
