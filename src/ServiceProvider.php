<?php

namespace HealthEngine\BetterModels;

use HealthEngine\BetterModels\Commands\ModelMakeCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
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
    }
}
