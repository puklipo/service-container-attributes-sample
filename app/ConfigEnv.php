<?php

namespace App;

use Illuminate\Container\Attributes\Config;

class ConfigEnv
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        #[Config(key: 'app.env', default: 'production')] public string $env
    )
    {
        //
    }
}
