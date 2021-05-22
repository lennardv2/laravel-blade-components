# Laravel blade components

Senna UI is a set of nice looking opensource blade components. They can be wired up via Livewire or used without it. Checkout the docs at https://getsenna.com/senna-ui/v1. It's called senna/ui on packagist. Livewire users: all of the components are wire-modelable via wire:model.

## Installation

Install the package with composer and publish the assets with the senna-ui:install command:

```
composer require senna/ui
```
```
php artisan senna-ui:install
```

Add the head component to your layouts page head-tag. This will include the styles and the theme. Also add the footer component before your layouts closing body tag. This will include the js dependencies when needed by a component.

```
<head>
    ..
@include("senna.ui::theme")
@include("senna.ui::styles")
@include("senna.ui::extra-styles")
</head>

<body>
    ..
@include('senna.ui::scripts')
@include('senna.ui::extra-scripts')
</body>
```

## Documentation

You can preview the components and see the full documenation on: https://getsenna.com/senna-ui/v1
