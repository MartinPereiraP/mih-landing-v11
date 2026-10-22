<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Auto-crear directorios críticos de almacenamiento y caché si no existen en el servidor
$requiredDirs = [
    __DIR__.'/../storage/framework/views',
    __DIR__.'/../storage/framework/cache/data',
    __DIR__.'/../storage/framework/sessions',
    __DIR__.'/../storage/logs',
    __DIR__.'/../bootstrap/cache',
];
foreach ($requiredDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0775, true);
    }
}

// Depurar cachés obsoletos de configuración o paquetes dev previos en el servidor
foreach (['config.php', 'routes-v7.php', 'routes.php'] as $cacheFile) {
    $path = __DIR__.'/../bootstrap/cache/'.$cacheFile;
    if (file_exists($path)) {
        @unlink($path);
    }
}
foreach (['services.php', 'packages.php'] as $manifestFile) {
    $path = __DIR__.'/../bootstrap/cache/'.$manifestFile;
    if (file_exists($path)) {
        $content = (string) @file_get_contents($path);
        if (str_contains($content, 'Laravel\\Pail') || str_contains($content, 'Laravel\\Sail') || str_contains($content, 'laravel/pail')) {
            @unlink($path);
        }
    }
}

// Endpoint de diagnóstico seguro para validar arranque en cPanel
if (isset($_GET['diag']) && $_GET['diag'] === 'mih2026') {
    header('Content-Type: text/plain; charset=utf-8');
    echo "=== DIAGNOSTICO DEL SISTEMA ===\n";
    echo "PHP Version: ".PHP_VERSION."\n";
    echo ".env existe: ".(file_exists(__DIR__.'/../.env') ? 'SI' : 'NO')."\n";
    echo "vendor/autoload existe: ".(file_exists(__DIR__.'/../vendor/autoload.php') ? 'SI' : 'NO')."\n";
    echo "storage/framework/views existe: ".(is_dir(__DIR__.'/../storage/framework/views') ? 'SI' : 'NO')."\n";
    echo "storage/framework/views escribible: ".(is_writable(__DIR__.'/../storage/framework/views') ? 'SI' : 'NO')."\n";
    echo "storage/logs existe: ".(is_dir(__DIR__.'/../storage/logs') ? 'SI' : 'NO')."\n";
    echo "storage/logs escribible: ".(is_writable(__DIR__.'/../storage/logs') ? 'SI' : 'NO')."\n";
    echo "bootstrap/cache escribible: ".(is_writable(__DIR__.'/../bootstrap/cache') ? 'SI' : 'NO')."\n";
    echo "bootstrap/cache/packages.php existe: ".(file_exists(__DIR__.'/../bootstrap/cache/packages.php') ? 'SI' : 'NO')."\n";
    echo "bootstrap/cache/services.php existe: ".(file_exists(__DIR__.'/../bootstrap/cache/services.php') ? 'SI' : 'NO')."\n";
    if (file_exists(__DIR__.'/../.env')) {
        $envContent = file_get_contents(__DIR__.'/../.env');
        echo "APP_KEY definida: ".(preg_match('/^APP_KEY=.+/m', $envContent) ? 'SI' : 'NO')."\n";
    }
    if (file_exists($log = __DIR__.'/../storage/logs/laravel.log')) {
        echo "\n=== ULTIMAS LINEAS DE LARAVEL.LOG ===\n";
        $logLines = file($log);
        echo implode("", array_slice($logLines, -50));
    }
    echo "\n=== INTENTO DE BOOTSTRAP DE LARAVEL ===\n";
    try {
        putenv('APP_DEBUG=true');
        $_ENV['APP_DEBUG'] = 'true';
        $_SERVER['APP_DEBUG'] = 'true';
        require __DIR__.'/../vendor/autoload.php';
        $app = require_once __DIR__.'/../bootstrap/app.php';
        $app->handleRequest(Request::capture());
        echo "\n¡Bootstrap completado con exito!\n";
    } catch (\Throwable $e) {
        echo "ERROR DETECTADO:\n";
        echo "Clase: ".get_class($e)."\n";
        echo "Mensaje: ".$e->getMessage()."\n";
        echo "Archivo: ".$e->getFile().":".$e->getLine()."\n";
        echo "Traza:\n".$e->getTraceAsString()."\n";
    }
    exit;
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());

