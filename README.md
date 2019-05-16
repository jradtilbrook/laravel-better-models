# Laravel Better Models

This is a custom package designed for Laravel. It overrides some generators to modify the namespace and base models
used.

The `make:model` command is overridden to change directory and namespace the generated model will be written to. It also
changes the base Model class to one that includes [Laravel Chronos](https://github.com/HealthEngineAU/laravel-chronos)
and [Laravel UUID](https://github.com/HealthEngineAU/laravel-uuid) by default, thus providing a better structure to the
app and better defaults for time and primary keys.

It also overrides the `make:migration` command to change the default primary key column to a UUID type.

## Usage

There is nothing special to do to use this package, it will override the generators so you can work as normal but have a
better structured app.

## License

Laravel Better Models is licensed under the MIT license.
