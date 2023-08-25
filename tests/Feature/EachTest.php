<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", [
            "users" => [
                [
                    "name" => "Dicky",
                    "hobbies" => ["Coding", "Gaming"]
                ],
                [
                    "name" => "Satria",
                    "hobbies" => ["Coding", "Gaming"]
                ]
            ]
        ])
            ->assertSeeInOrder([
                ".red",
                "Dicky",
                "Coding",
                "Gaming",
                "Satria",
                "Coding",
                "Gaming"
            ]);
    }
}
