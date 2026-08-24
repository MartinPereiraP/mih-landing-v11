<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio en Mantenimiento</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="relative min-h-screen bg-neutral-950 flex flex-col items-center justify-center font-sans text-neutral-100 selection:bg-orange-500 selection:text-white px-6">
        
        <!-- Subtle Background -->
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-neutral-900 via-neutral-950 to-neutral-950"></div>

        <!-- Main Content -->
        <main 
            id="main-content"
            class="relative z-10 w-full max-w-2xl mx-auto flex flex-col items-center justify-center text-center transition-all duration-1000 ease-out opacity-0 translate-y-8"
        >
            <!-- Icon -->
            <div class="mb-8 p-4 bg-white/5 rounded-2xl border border-white/10 shadow-xl backdrop-blur-sm">
                <svg class="w-8 h-8 text-orange-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-8.5 8.5c-.83.83-2.17.83-3 0 0 0 0 0 0 0a2.12 2.12 0 0 1 0-3L12 9"/><path d="M17.64 15 22 10.64"/><path d="m20.91 11.7-1.25-1.25c-.6-.6-.93-1.4-.93-2.25v-.86L16 4.6V3.86a2.92 2.92 0 0 0-.86-2.25L13.89 1.4a.52.52 0 0 0-.74 0L9.5 5.06a.52.52 0 0 0 0 .74l1.25 1.25c.6.6.93 1.4.93 2.25v.86L14 12.91c.21.21.5.33.8.33h.85c.85 0 1.65.33 2.25.93l1.25 1.25a.52.52 0 0 0 .74 0Z"/></svg>
            </div>

            <!-- Typography -->
            <h1 class="text-4xl md:text-5xl font-semibold tracking-tight mb-6 text-white">
                Sitio en Mantenimiento
            </h1>
            
            <p class="text-lg text-neutral-400 max-w-md mx-auto mb-12 font-light leading-relaxed">
                Estamos realizando mejoras en nuestra plataforma para brindarte un mejor servicio. Estaremos de vuelta muy pronto.
            </p>

            <div class="h-px w-16 bg-neutral-800 mb-12"></div>

            <!-- Contact -->
            <div class="flex flex-col items-center text-sm text-neutral-500 gap-2">
                <p>¿Necesitas ayuda urgente?</p>
                <a href="mailto:contacto@mih.cl" class="flex items-center gap-2 hover:text-orange-400 transition-colors">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    contacto@mih.cl
                </a>
            </div>
        </main>
        
        <div class="absolute bottom-8 w-full text-center text-xs text-neutral-600">
            &copy; {{ date('Y') }} MIH
        </div>
    </div>
    <script>
        setTimeout(() => {
            const el = document.getElementById('main-content');
            if(el) {
                el.classList.remove('opacity-0', 'translate-y-8');
                el.classList.add('opacity-100', 'translate-y-0');
            }
        }, 100);
    </script>
</body>
</html>
