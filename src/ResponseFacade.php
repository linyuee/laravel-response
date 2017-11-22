<?php

namespace Linyuee;

use Illuminate\Support\Facades\Facade;

class ResponseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ApiResponse';
    }
}
