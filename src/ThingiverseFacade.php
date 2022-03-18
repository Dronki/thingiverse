<?php

namespace Dronki\Thingiverse;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dronki\Thingiverse\Skeleton\SkeletonClass
 */
class ThingiverseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'thingiverse';
    }
}
