<?php

namespace BrokerChooser\InertiaReactComponentsInBlade;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InertiaReactComponentsInBladeServiceProvider extends PackageServiceProvider
{
    public const PACKAGE_NAME = 'inertia-react-components-in-blade';
    public const NAMESPACE = self::PACKAGE_NAME;

    public function configurePackage(Package $package): void
    {
        $this->publishes([
            __DIR__.'/../resources/js/GetComponent.ts' => resource_path('js/GetComponent.ts'),
        ], 'component-map');

        $this->publishes([
            __DIR__.'/View/Components/ExampleComponent.php' => app_path('View/Components/ExampleComponent.php'),
            __DIR__.'/../resources/js/components/ExampleComponent.tsx' => resource_path('js/components/ExampleComponent.tsx'),
        ], 'example');

        $package
            ->name(self::PACKAGE_NAME)
            ->hasViews(self::NAMESPACE);
    }
}
