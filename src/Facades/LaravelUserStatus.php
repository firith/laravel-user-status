<?php

namespace Firith\LaravelUserStatus\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Firith\LaravelUserStatus\LaravelUserStatus
 */
class LaravelUserStatus extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-user-status';
    }
}
