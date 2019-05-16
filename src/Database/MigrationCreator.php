<?php

namespace HealthEngine\BetterModels\Database;

use Illuminate\Database\Migrations\MigrationCreator as BaseMigrationCreator;

class MigrationCreator extends BaseMigrationCreator
{
    /**
     * Get the migration stub file.
     *
     * @param  string  $table
     * @param  bool    $create
     * @return string
     */
    protected function getStub($table, $create)
    {
        if (is_null($table) || !$create) {
            return parent::getStub($table, $create);
        }

        $stub = __DIR__ . '/../../stubs/create.stub';

        return $this->files->get($stub);
    }
}
