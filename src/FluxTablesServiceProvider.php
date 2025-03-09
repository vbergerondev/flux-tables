<?php

namespace vbergerondev\FluxTables;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use vbergerondev\FluxTables\Commands\FluxTablesCommand;

class FluxTablesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('flux-tables')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_flux_tables_table')
            ->hasCommand(FluxTablesCommand::class);
    }
}
