<?php

namespace BrokerChooser\InertiaReactComponentsInBlade\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BrokerChooser\InertiaReactComponentsInBlade\InertiaReactComponentsInBlade
 */
class InertiaReactComponentsInBlade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BrokerChooser\InertiaReactComponentsInBlade\InertiaReactComponentsInBlade::class;
    }
}
