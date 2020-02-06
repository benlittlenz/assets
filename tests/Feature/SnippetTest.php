<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    use WithFaker, RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_can_create_snippet()
    {

        $this->withoutExceptionHandling();

        $attributes = [
            'title' => $this->faker->sentence,
            'title' => $this->faker->paragraph,
        ];

        $this->post('/snippets', $attributes);

        $this->assertDatabaseHas('snippets', $attributes);
    }
}
