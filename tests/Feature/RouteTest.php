<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function test_home_responds_ok(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('pages.home');
    }

    public function test_destination_moon_responds_ok(): void
    {
        $response = $this->get('/destination/moon');

        $response->assertStatus(200);
        $response->assertViewIs('pages.destination');
    }

    public function test_destination_mars_responds_ok(): void
    {
        $response = $this->get('/destination/mars');

        $response->assertStatus(200);
        $response->assertViewIs('pages.destination');
    }

    public function test_destination_europe_responds_ok(): void
    {
        $response = $this->get('/destination/europe');

        $response->assertStatus(200);
        $response->assertViewIs('pages.destination');
    }

    public function test_destination_titan_responds_ok(): void
    {
        $response = $this->get('/destination/titan');

        $response->assertStatus(200);
        $response->assertViewIs('pages.destination');
    }

    public function test_crew_commander_responds_ok(): void
    {
        $response = $this->get('/crew/commander');

        $response->assertStatus(200);
        $response->assertViewIs('pages.crew');
    }

    public function test_crew_mission_specialist_responds_ok(): void
    {
        $response = $this->get('/crew/mission_specialist');

        $response->assertStatus(200);
        $response->assertViewIs('pages.crew');
    }

    public function test_crew_pilot_responds_ok(): void
    {
        $response = $this->get('/crew/pilot');

        $response->assertStatus(200);
        $response->assertViewIs('pages.crew');
    }

    public function test_crew_engineer_responds_ok(): void
    {
        $response = $this->get('/crew/engineer');

        $response->assertStatus(200);
        $response->assertViewIs('pages.crew');
    }

    public function test_tech_launcher_responds_ok(): void
    {
        $response = $this->get('/tech/Launcher');

        $response->assertStatus(200);
        $response->assertViewIs('pages.tech');
    }

    public function test_tech_spaceport_responds_ok(): void
    {
        $response = $this->get('/tech/spaceport');

        $response->assertStatus(200);
        $response->assertViewIs('pages.tech');
    }

    public function test_tech_space_capsule_responds_ok(): void
    {
        $response = $this->get('/tech/spce_capsule');

        $response->assertStatus(200);
        $response->assertViewIs('pages.tech');
    }

    public function language_switch_redirects_correctly()
    {
        $response = $this->get('/language/en');

        $response->assertRedirect();
    }
}
