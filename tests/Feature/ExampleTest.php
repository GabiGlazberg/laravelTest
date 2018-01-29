<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $first = factory(Post::class)->create();

        $secund = factory(Post::class)->create([
           'create_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        $posts = Post::archives();

        $this->assertCount(2, $posts);
    }
}
