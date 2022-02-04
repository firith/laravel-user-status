<?php

namespace Firith\LaravelUserStatus;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
//            ->hasConfigFile()
//            ->hasViews()

            ->hasMigration('add_enabled_field_to_users_table')
            ->hasTranslations();
//            ->hasCommand(LaravelUserStatusCommand::class);
    }
}
