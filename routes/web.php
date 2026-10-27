<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Modo Mantenimiento (comentado para fácil reactivación si se requiere):
// Route::get('/', function () {
//     return Inertia::render('Maintenance');
// });

// Ruta pública principal: Landing Page oficial
Route::get('/', function () {
    return Inertia::render('Landing');
});

// Ruta preview mantenida para acceso directo y retrocompatibilidad
Route::get('/preview', function () {
    return Inertia::render('Landing');
});


Route::get('/robots.txt', function () {
    $robots = implode("\n", [
        'User-agent: *',
        'Allow: /',
        'Disallow: /build/',
        'Disallow: /_inertia/',
        '',
        'Sitemap: https://mih.cl/sitemap.xml',
        '',
    ]);

    return response($robots, 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
        'Cache-Control' => 'public, max-age=86400',
    ]);
});

Route::get('/sitemap.xml', function () {
    $lastmod = date('Y-m-d');
    $sitemap = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>https://mih.cl/</loc>
        <lastmod>{$lastmod}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
</urlset>
XML;

    return response($sitemap, 200, [
        'Content-Type' => 'application/xml; charset=UTF-8',
        'Cache-Control' => 'public, max-age=86400',
    ]);
});

// Exponer públicamente imágenes requeridas por firmas de correo (Outlook, webmail, etc.)
Route::get('/resources/images/{filename}', function (string $filename) {
    $filename = basename($filename);
    $path = public_path('resources/images/'.$filename);

    if (!file_exists($path)) {
        abort(404);
    }

    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $mimeType = match ($extension) {
        'png' => 'image/png',
        'jpg', 'jpeg' => 'image/jpeg',
        'svg' => 'image/svg+xml',
        'gif' => 'image/gif',
        'webp' => 'image/webp',
        'ico' => 'image/x-icon',
        default => mime_content_type($path) ?: 'application/octet-stream',
    };

    return response()->file($path, [
        'Content-Type' => $mimeType,
        'Cache-Control' => 'public, max-age=2592000',
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => 'GET, OPTIONS',
    ]);
})->where('filename', '[a-zA-Z0-9_\-\.]+');

// Redirigir cualquier ruta inexistente al home (/)
Route::fallback(function () {
    return redirect('/');
});
