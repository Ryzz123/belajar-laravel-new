<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BladeTemplateTest extends TestCase
{
    public function testTemplateBladeHome() {
        app()->get('/home')
        ->assertSeeText('Halaman Home');
    }
}
