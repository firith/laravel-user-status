<?php

namespace Firith\LaravelUserStatus;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Firith\LaravelUserStatus\Commands\LaravelUserStatusCommand;

class LaravelUserStatusServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-user-status')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-user-status_table')
            ->hasCommand(LaravelUserStatusCommand::class);
    }
}
