<?php

namespace App;

use Illuminate\Container\Attributes\Config;

class ConfigEnv
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        #[Config('app.env', 'production')] public string $env
    )
    {
        //
    }
}
