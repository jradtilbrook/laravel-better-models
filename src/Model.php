<?php

namespace HealthEngine\BetterModels;

use HealthEngine\LaravelChronos\ChronosTimestamps;
use HealthEngine\LaravelUuid\UuidPrimaryKey;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    use ChronosTimestamps, UuidPrimaryKey;
}
