# datetime-factory

[![PHP requirements](https://img.shields.io/packagist/php-v/chebur/datetime-factory.svg)](https://packagist.org/packages/chebur/datetime-factory "PHP requirements")
[![Latest version](https://img.shields.io/packagist/v/chebur/datetime-factory.svg)](https://packagist.org/packages/chebur/datetime-factory "Last version")
[![Total downloads](https://img.shields.io/packagist/dt/chebur/datetime-factory.svg)](https://packagist.org/packages/chebur/datetime-factory "Total downloads")
[![License](https://img.shields.io/packagist/l/chebur/datetime-factory.svg)](https://packagist.org/packages/chebur/datetime-factory "License")

## Installation
Require it with composer:
```bash
composer require chebur/datetime-factory
```

## Configuration
### Symfony
```yaml
services:
    # Alias
    Chebur\DateTimeFactory\DateTimeFactoryInterface: '@chebur.datetime_factory'

    # Service implementing DateTimeFactoryInterface, you can change it with your own implementation
    chebur.datetime_factory:
        class: Chebur\DateTimeFactory\DateTimeFactory
```
