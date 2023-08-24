<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvTest extends TestCase
{
    public function testsEnv()
    {
        $this->view('env', [])
            ->assertSeeText("This Is Test Environment");
    }
}
