<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_home_page_redirects_to_tasks(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/tasks');
    }
}