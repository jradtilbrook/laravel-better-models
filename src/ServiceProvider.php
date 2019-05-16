<?php

namespace HealthEngine\BetterModels;

use HealthEngine\BetterModels\Commands\ModelMakeCommand;
use HealthEngine\BetterModels\Database\MigrationCreator;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider implements DeferrableProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->extend('command.model.make', function () {
            return $this->app->make(ModelMakeCommand::class);
        });

        $this->app->extend('migration.creator', function () {
            return $this->app->make(MigrationCreator::class);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'command.model.make', 'migration.creator',
        ];
    }
}
