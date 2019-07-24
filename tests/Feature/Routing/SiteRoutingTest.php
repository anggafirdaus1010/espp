<?php

namespace Tests\Feature\Routing;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SiteRoutingTest extends TestCase
{
    public function testRootUrl()
    {
        $response = $this->get(route('site.root'));
        $response->assertStatus(200);
    }
}
