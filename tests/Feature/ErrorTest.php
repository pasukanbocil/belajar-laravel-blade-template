<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    public function testError()
    {
        $errors = [
            "name" => "Name Is Required",
            "password" => "Password Is Required"
        ];
        $this->withViewErrors($errors)
            ->view("error", [])
            ->assertSeeText("Name Is Required")
            ->assertSeeText("Password Is Required");
    }
}
