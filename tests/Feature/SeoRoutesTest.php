<?php

namespace Tests\Feature;

use Tests\TestCase;

class SeoRoutesTest extends TestCase
{
    public function test_landing_page_renders_complete_seo_meta_tags_and_schema(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Layout y Metas
        $response->assertSee('lang="es-CL"', false);
        $response->assertSee('MIH | Agencia de Embarques, Comercio Exterior y Logística en Chile', false);
        $response->assertSee('Agencia de Embarques y Comercio Exterior en Chile. Gestión aduanera DIN/DUS', false);
        $response->assertSee('rel="canonical"', false);
        $response->assertSee('name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"', false);

        // Geo-tags
        $response->assertSee('name="geo.region" content="CL-VS"', false);
        $response->assertSee('name="geo.placename" content="Valparaíso, Chile"', false);

        // Open Graph
        $response->assertSee('property="og:locale" content="es_CL"', false);
        $response->assertSee('property="og:type" content="website"', false);
        $response->assertSee('property="og:site_name" content="Agencia de Embarques MIH"', false);

        // Twitter
        $response->assertSee('name="twitter:card" content="summary_large_image"', false);

        // Schema.org JSON-LD @graph
        $response->assertSee('"@context": "https://schema.org"', false);
        $response->assertSee('"@type": ["Organization", "LocalBusiness"]', false);
        $response->assertSee('"name": "Agencia de Embarques MIH SpA"', false);
        $response->assertSee('"@type": "WebSite"', false);
        $response->assertSee('"@type": "FAQPage"', false);
        $response->assertSee('"hasOfferCatalog"', false);
        $response->assertSee('knowsAbout', false);
    }

    public function test_robots_txt_returns_plain_text_and_sitemap(): void
    {
        $response = $this->get('/robots.txt');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
        $response->assertSee('User-agent: *');
        $response->assertSee('Allow: /');
        $response->assertSee('Sitemap: https://mih.cl/sitemap.xml');
    }

    public function test_sitemap_xml_returns_valid_xml_structure(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $this->assertStringContainsString('application/xml', $response->headers->get('Content-Type'));
        $response->assertSee('<?xml version="1.0" encoding="UTF-8"?>', false);
        $response->assertSee('<loc>https://mih.cl/</loc>', false);
        $response->assertSee('<changefreq>weekly</changefreq>', false);
        $response->assertSee('<priority>1.0</priority>', false);
    }
}
