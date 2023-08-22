<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')
            ->assertSeeText('Dicky');
    }

    public function testWorld()
    {
        $this->get('/world')
            ->assertSeeText('Dicky');
    }

    public function testHelloView()
    {
        $this->view('hello', ['name' => 'Dicky'])
            ->assertSeeText('Dicky');
    }

    public function testWorldView()
    {
        $this->view('hello.world', ['name' => 'Dicky'])
            ->assertSeeText('Dicky');
    }
}
