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
            'description' => $this->faker->paragraph,
        ];

        $this->post('/snippets', $attributes)->assertRedirect('/snippets');

        $this->assertDatabaseHas('snippets', $attributes);

        $this->get('/snippets')->assertSEE($attributes['title']);
    }

        public function test_a_user_can_view_a_snippet() {
            $this->withoutExceptionHandling();
            
            $snippet = factory('App\Snippet')->create();

            $this->get('/snippets/' . $project.id)
                ->assertSee($snippet->title)
                ->assertSee($snippet->description);
        }
}
