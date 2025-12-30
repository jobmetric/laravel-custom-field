[contributors-shield]: https://img.shields.io/github/contributors/jobmetric/laravel-custom-field.svg?style=for-the-badge
[contributors-url]: https://github.com/jobmetric/laravel-custom-field/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/jobmetric/laravel-custom-field.svg?style=for-the-badge&label=Fork
[forks-url]: https://github.com/jobmetric/laravel-custom-field/network/members
[stars-shield]: https://img.shields.io/github/stars/jobmetric/laravel-custom-field.svg?style=for-the-badge
[stars-url]: https://github.com/jobmetric/laravel-custom-field/stargazers
[license-shield]: https://img.shields.io/github/license/jobmetric/laravel-custom-field.svg?style=for-the-badge
[license-url]: https://github.com/jobmetric/laravel-custom-field/blob/master/LICENCE.md
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-blue.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/majidmohammadian

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

# Laravel Custom Field

**Build Forms. Beautifully and Consistently.**

Laravel Custom Field simplifies form field creation and rendering in Laravel applications. Stop writing HTML manually and start building forms programmatically with confidence. It provides a fluent builder API to define, render, and serialize form fields with consistent HTML output—perfect for building dynamic forms, admin panels, and API-driven form builders. This is where powerful form building meets developer-friendly simplicity—giving you complete control over form fields without the complexity.

## Why Laravel Custom Field?

### Fluent Builder API

Laravel Custom Field provides a clean, chainable API for building form fields. Set attributes, properties, options, and data attributes in a single fluent chain—no more scattered HTML or inconsistent form rendering.

### Consistent HTML Output

All fields render with consistent HTML structure, making it easy to style and maintain forms across your application. The package handles all the boilerplate, so you focus on your business logic.

### Extensible Architecture

Create custom field types by extending the base classes. The package uses a registry system that makes it easy to add new field types and customize existing ones.

### Asset Management

Fields can include their own JavaScript and CSS assets. The package automatically collects and provides asset paths, making it easy to include field-specific functionality.

## What is Custom Field Management?

Custom field management is the process of programmatically creating, configuring, and rendering form fields. Traditional approaches often involve:

- Writing HTML manually (error-prone, inconsistent)
- Using form builders (limited flexibility)
- Creating custom components (time-consuming)

Laravel Custom Field solves these challenges by providing:

- **Fluent API**: Chain methods to build fields
- **Type Safety**: Strongly-typed field classes
- **Consistent Output**: Standardized HTML structure
- **Extensibility**: Easy to create custom field types
- **Asset Management**: Automatic script/style collection
- **Template System**: Customizable blade templates

Consider a dynamic form builder where administrators can create forms with different field types. With Laravel Custom Field, you can build fields programmatically, render them consistently, and serialize them for storage or API responses. The power of custom field management lies not only in flexible field creation but also in making it easy to extend, customize, and maintain throughout your application.

## What Awaits You?

By adopting Laravel Custom Field, you will:

- **Build dynamic forms** - Create forms programmatically from database configurations
- **Simplify form rendering** - Consistent HTML output across all fields
- **Improve maintainability** - Fluent API reduces code complexity
- **Enable extensibility** - Create custom field types easily
- **Manage assets automatically** - Scripts and styles collected automatically
- **Maintain clean code** - Simple, intuitive API that follows Laravel conventions

## Quick Start

Install Laravel Custom Field via Composer:

```bash
composer require jobmetric/laravel-custom-field
```

## Documentation

Ready to transform your Laravel applications? Our comprehensive documentation is your gateway to mastering Laravel Custom Field:

**[📚 Read Full Documentation →](https://jobmetric.github.io/packages/laravel-custom-field/)**

The documentation includes:

- **Getting Started** - Quick introduction and installation guide
- **CustomFieldBuilder** - Fluent API for building fields
- **Field Types** - All supported HTML input types
- **Attributes & Properties** - Configure field attributes and properties
- **Options Builder** - Build select, radio, and checkbox options
- **Data Attributes** - Add data attributes for JavaScript integration
- **Registry & Factory** - Extend and customize field types
- **Commands** - Generate custom fields and IDE helpers
- **Real-World Examples** - See how it works in practice

## Contributing

Thank you for participating in `laravel-custom-field`. A contribution guide can be found [here](CONTRIBUTING.md).

## License

The `laravel-custom-field` is open-sourced software licensed under the MIT license. See [License File](LICENCE.md) for more information.
