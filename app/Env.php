<?php

namespace App;

use App\Attributes\CurrentEnv;

class Env
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        #[CurrentEnv] public string $env
    )
    {
        //
    }
}
