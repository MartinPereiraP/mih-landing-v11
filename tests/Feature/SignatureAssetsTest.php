<?php

namespace Tests\Feature;

use Tests\TestCase;

class SignatureAssetsTest extends TestCase
{
    public function test_logo_mih_png_is_publicly_accessible_with_cors(): void
    {
        $response = $this->get('/resources/images/logo-mih.png');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'image/png');
        $response->assertHeader('Access-Control-Allow-Origin', '*');
        $response->assertHeader('Access-Control-Allow-Methods', 'GET, OPTIONS');
    }

    public function test_banner_jpg_is_publicly_accessible_with_cors(): void
    {
        $response = $this->get('/resources/images/banner.jpg');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'image/jpeg');
        $response->assertHeader('Access-Control-Allow-Origin', '*');
        $response->assertHeader('Access-Control-Allow-Methods', 'GET, OPTIONS');
    }

    public function test_logo_mih_svg_is_publicly_accessible_with_cors(): void
    {
        $response = $this->get('/resources/images/logo-mih.svg');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'image/svg+xml');
        $response->assertHeader('Access-Control-Allow-Origin', '*');
    }

    public function test_non_existent_asset_returns_404(): void
    {
        $response = $this->get('/resources/images/non-existent.png');

        $response->assertStatus(404);
    }
}
