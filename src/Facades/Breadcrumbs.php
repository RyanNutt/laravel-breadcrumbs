<?php

namespace Aelora\Breadcrumbs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aelora\Breadcrumbs\Breadcrumbs
 */
class Breadcrumbs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-breadcrumbs';
    }
}
