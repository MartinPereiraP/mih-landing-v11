# Registro de Cambios (Changelog)

## [Sin liberar]
### Añadido
- Inicialización de proyecto base en Laravel 11 (soporte PHP 8.2).
- Configuración de Vue 3 + Inertia.js y assets compilados con Vite.
- Pantalla de mantenimiento moderna en Vue (`Welcome.vue`).
- Respaldo de la Landing Page completa original en `Welcome.original.vue`.
- Enrutador de contingencia (`Route::fallback()`) para redirigir tráfico no encontrado a la raíz.

### Arreglado
- Configuración de `index.php` en la raíz y reglas estrictas de `.htaccess` para prevenir redirecciones 301 invasivas de Apache (Hostinger) hacia `/public/`.

