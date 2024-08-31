<?php

namespace Tests\Feature;

use App\AuthUser;
use App\ConfigEnv;
use App\Env;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContainerAttributesTest extends TestCase
{
    use RefreshDatabase;

    public function test_config_env(): void
    {
        $test = app(ConfigEnv::class);

        $this->assertSame('testing', $test->env);
    }

    public function test_current_user(): void
    {
        $this->seed();

        $this->actingAs(User::first());

        $test = app(AuthUser::class);

        $this->assertSame('Test User', $test->user->name);
    }

    public function test_current_env(): void
    {
        $test = app(Env::class);

        $this->assertSame('testing', $test->env);
    }
}
