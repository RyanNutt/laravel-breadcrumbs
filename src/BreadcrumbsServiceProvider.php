<?php

namespace Aelora\Breadcrumbs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Aelora\Breadcrumbs\Commands\BreadcrumbsCommand;

class BreadcrumbsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-breadcrumbs')
            ->hasConfigFile()
            ->hasViews();
    }
}
