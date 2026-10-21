# Registro de Cambios (Changelog)

## [Sin liberar]
### Añadido
- Inicialización de proyecto base en Laravel 11 (soporte PHP 8.2).
- Configuración de Vue 3 + Inertia.js y assets compilados con Vite.
- Pantalla de mantenimiento moderna en Vue (`Welcome.vue`).
- Respaldo de la Landing Page completa original en `Welcome.original.vue`.
- Enrutador de contingencia (`Route::fallback()`) para redirigir tráfico no encontrado a la raíz.
- Imágenes del logo corporativo y estructura base bajo `public/resources/images/`.
- Workflow de GitHub Actions para despliegue automatizado hacia cPanel vía FTPS (`.github/workflows/deploy.yml`).
- Rutas dinámicas y optimización de caché para `/robots.txt` y `/sitemap.xml` en `routes/web.php`.
- Integración de metadatos SEO avanzados (OpenGraph, Twitter Cards, Schema.org) en plantillas Blade.
- Suite de pruebas automatizadas para verificación de SEO en `tests/Feature/SeoRoutesTest.php`.
- Actualizaciones en interfaz de usuario y compilación de assets para producción con Vite.

### Arreglado
- Configuración de `index.php` en la raíz y reglas estrictas de `.htaccess` para prevenir redirecciones 301 invasivas de Apache (Hostinger) hacia `/public/`.
- Corrección de redirección en `.htaccess` raíz para evitar Error 404 de Laravel al acceder a la ruta `/resources/images/`.
- Configuración de políticas de CORS globales (`Access-Control-Allow-Origin "*"`) en la carpeta pública para consumo remoto de imágenes.

