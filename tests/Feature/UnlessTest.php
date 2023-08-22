<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessTest extends TestCase
{
    public function testUnless()
    {
        $this->view('unless', ['isAdmin' => true])
            ->assertDontSeeText('You Are Not Admin.');

        $this->view('unless', ['isAdmin' => false])
            ->assertSeeText('You Are Not Admin.');
    }
}
