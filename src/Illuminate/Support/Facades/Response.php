<?php

namespace Illuminate\Support\Facades;

use Illuminate\Contracts\Routing\ResponseFactory as ResponseFactoryContract;

class Response extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ResponseFactoryContract::class;
    }
}
