# Agencia de Embarques MIH SpA - Plataforma Web

Sitio web corporativo y plataforma de presencia digital para **Agencia de Embarques MIH SpA**, empresa chilena con más de 20 años de trayectoria especializada en tramitación documental aduanera (DIN/DUS), asistencia en zona primaria y soporte operativo para empresas y agencias de aduana.

---

## 🛠️ Stack Tecnológico

- **Backend**: [Laravel 11](https://laravel.com) (PHP 8.2+)
- **Frontend**: [Vue 3](https://vuejs.org) + [Inertia.js](https://inertiajs.com) (Single Page Application sin recargas)
- **Compilador / Bundler**: [Vite 6](https://vitejs.dev)
- **Estilos**: [Tailwind CSS](https://tailwindcss.com) (Vanilla / Dark mode)
- **Testing**: [Pest / PHPUnit](https://pestphp.com)

---

## 🧭 Estructura de Rutas y Páginas

- **`/`**: Pantalla pública temporal de mantenimiento activo (`resources/js/pages/Maintenance.vue`).
- **`/preview`**: Vista previa privada de la Landing Page corporativa oficial (`resources/js/pages/Landing.vue`).
- **`/robots.txt`**: Generado dinámicamente con directivas de indexación y enlace al sitemap.
- **`/sitemap.xml`**: Generado dinámicamente con cabeceras `application/xml` y caché optimizada.

---

## 🚀 Comandos de Desarrollo

```bash
# Instalar dependencias PHP
composer install

# Instalar dependencias JavaScript
npm install

# Iniciar servidor de desarrollo frontend (Vite)
npm run dev

# Compilar assets para producción
npm run build

# Ejecutar suite de pruebas automatizadas
php artisan test
```

---

## 🔄 Despliegue Continuo (CI/CD)

El repositorio cuenta con integración continua mediante **GitHub Actions** (`.github/workflows/deploy.yml`):
- Se activa automáticamente ante cada `push` a la rama `main`.
- Compila los assets de producción con Vite.
- Sincroniza de forma diferencial los archivos del proyecto hacia el hosting cPanel mediante **FTPS seguro**.

---

## 📄 Licencia y Derechos

© 2016 - Presente **Agencia de Embarques MIH SpA**. Todos los derechos reservados.
