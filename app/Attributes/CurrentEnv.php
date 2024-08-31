<?php

namespace App\Attributes;

use Attribute;
use Illuminate\Container\Container;
use Illuminate\Contracts\Container\ContextualAttribute;

#[Attribute(Attribute::TARGET_PARAMETER)]
class CurrentEnv implements ContextualAttribute
{
    /**
     * Create a new class instance.
     */
    public function __construct(public mixed $default = null)
    {
        //
    }

    /**
     * Resolve the configuration value.
     *
     * @param  self  $attribute
     * @param  \Illuminate\Contracts\Container\Container  $container
     * @return mixed
     */
    public static function resolve(self $attribute, Container $container)
    {
        return $container->make('config')->get('app.env', $attribute->default);
    }
}
