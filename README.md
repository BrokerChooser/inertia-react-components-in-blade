# Render React components in blade (with SSR)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/brokerchooser/inertia-react-components-in-blade.svg?style=flat-square)](https://packagist.org/packages/brokerchooser/inertia-react-components-in-blade)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/brokerchooser/inertia-react-components-in-blade/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/brokerchooser/inertia-react-components-in-blade/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/brokerchooser/inertia-react-components-in-blade/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/brokerchooser/inertia-react-components-in-blade/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/brokerchooser/inertia-react-components-in-blade.svg?style=flat-square)](https://packagist.org/packages/brokerchooser/inertia-react-components-in-blade)

With this package, you can render your React component from within your blade templates/components.

You can even use server side rendering (SSR) if you want to.

## Installation

You can install the package via composer:

```bash
composer require brokerchooser/inertia-react-components-in-blade
```

You can then publish the component map template:

```bash
php artisan vendor:publish --tag=component-map
```

You can also publish the ExampleComponent:

```bash
php artisan vendor:publish --tag=example
```

## Usage

To use the package within your project, you first need to set up Inertia with Server Side Rendering (SSR).

Then you can update your files to use the package, like this:
[https://github.com/BrokerChooser/inertia-react-components-in-blade-example](https://github.com/BrokerChooser/inertia-react-components-in-blade-example)

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Janos Horvath](https://github.com/hjanos-bc)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
