# Registro de Cambios (Changelog)

## [Sin liberar]
### Añadido
- Módulo estructurado de cobertura nacional en zonas primarias aduaneras (marítimas, terrestres y aéreas) de Chile.
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
- Auto-creación dinámica de directorios críticos de `storage` y `bootstrap/cache` en `public/index.php`.
- Endpoint de telemetría y diagnóstico seguro (`?diag=mih2026`) en `public/index.php` para validar el entorno en cPanel.
- Componente explícito `Maintenance.vue` para la pantalla pública de mantenimiento en `/`.
- Componente `Landing.vue` y ruta privada `/preview` para revisar y pulir la landing page oficial.
- Prueba automatizada para la ruta `/preview` en `tests/Feature/SeoRoutesTest.php`.

- Incorporación de `banner.jpg` (1200x300 px) en `public/resources/images/` para firmas corporativas en Outlook.
- Definición de endpoint público en `routes/web.php` para servir recursos gráficos bajo `/resources/images/{filename}` con cabeceras CORS (`Access-Control-Allow-Origin: *`) y control de caché prolongada.
- Suite de pruebas de integración en `tests/Feature/SignatureAssetsTest.php` validando disponibilidad de `logo-mih.png`, `banner.jpg`, `logo-mih.svg` y código 404 en archivos inexistentes.

### Modificado
- Activación pública de la Landing Page oficial en la ruta raíz (`/`), retirando la pantalla de mantenimiento para visualización directa en producción.
- Sincronización de metadatos SEO y Schema.org en `resources/views/app.blade.php` y suite de pruebas `tests/Feature/SeoRoutesTest.php`.
- Refactorización integral de `resources/js/pages/Landing.vue` adaptada a la identidad y servicios reales de Agencia de Embarques MIH SpA.
- Actualización de metadatos Schema.org (`LocalBusiness`, `Service`, `OfferCatalog`, `FAQPage`) reflejando tramitación de DUS/DIN, asistencia en aforos y soporte digital en MIHSystem.
- Compilación de assets para producción con Vite (`public/build/`).

### Eliminado
- Supresión total del formulario web de contacto en `Landing.vue` para cumplimiento riguroso de la Ley 21.719 (sin captura ni almacenamiento de datos web), canalizando los requerimientos exclusivamente por medios directos (teléfono, email corporativo y plataforma MIHSystem).
- Erradicación total del concepto y menciones a "Freight Forwarder" e intermediación de fletes internacionales, así como promesas ajenas de sobrecostos o control de demurrages.
- Archivo muerto `resources/views/welcome.blade.php` (remanente tradicional de Laravel no utilizado en la arquitectura Inertia.js).
- Componentes redundantes `Welcome.vue` y `Welcome.original.vue` en favor de la nomenclatura explícita (`Maintenance.vue` y `Landing.vue`).
- Desindexación de la carpeta de IA `.agents/` del seguimiento de Git e inclusión en `.gitignore` para mantener el repositorio limpio y neutral.

### Arreglado
- Configuración de `index.php` en la raíz y reglas estrictas de `.htaccess` para prevenir redirecciones 301 invasivas de Apache (Hostinger) hacia `/public/`.
- Corrección de redirección en `.htaccess` raíz para evitar Error 404 de Laravel al acceder a la ruta `/resources/images/`.
- Configuración de políticas de CORS globales (`Access-Control-Allow-Origin "*"`) en la carpeta pública para consumo remoto de imágenes.
- Corrección en workflow de despliegue (`.github/workflows/deploy.yml`) para preservar archivos descubiertos `packages.php` y `services.php` en `bootstrap/cache/`.
- Reordenamiento de directivas en `.htaccess` para procesar el rewrite de assets antes de la regla de bloqueo de carpetas internas.
- Exclusión explícita de `/resources/images/` en la regla de bloqueo de carpetas internas de `.htaccess` para garantizar entrega de firmas de correo.
- Eliminación de la redirección 302 hacia el home provocada por el enrutador fallback de Laravel al consumir imágenes de firmas de Outlook.


