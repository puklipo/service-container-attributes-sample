<?php

namespace Tests\Feature;

use App\ConfigEnv;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContainerAttributesTest extends TestCase
{
    public function test_config_env(): void
    {
        $test = app(ConfigEnv::class);

        $this->assertSame('testing', $test->env);
    }
}
