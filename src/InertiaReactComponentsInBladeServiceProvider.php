<?php

namespace BrokerChooser\InertiaReactComponentsInBlade;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BrokerChooser\InertiaReactComponentsInBlade\Commands\InertiaReactComponentsInBladeCommand;

class InertiaReactComponentsInBladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('inertia-react-components-in-blade')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_inertia-react-components-in-blade_table')
            ->hasCommand(InertiaReactComponentsInBladeCommand::class);
    }
}
