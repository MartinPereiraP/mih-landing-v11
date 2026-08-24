<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { Hammer, Mail } from '@lucide/vue';
import { onMounted, ref } from 'vue';

const isLoaded = ref(false);

onMounted(() => {
    setTimeout(() => {
        isLoaded.value = true;
    }, 100);
});
</script>

<template>
    <Head title="Sitio en Mantenimiento" />

    <div class="relative min-h-screen bg-neutral-950 flex flex-col items-center justify-center font-sans text-neutral-100 selection:bg-orange-500 selection:text-white px-6">
        
        <!-- Subtle Background -->
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-neutral-900 via-neutral-950 to-neutral-950"></div>

        <!-- Main Content -->
        <main 
            class="relative z-10 w-full max-w-2xl mx-auto flex flex-col items-center justify-center text-center transition-all duration-1000 ease-out"
            :class="[isLoaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']"
        >
            
            <!-- Icon -->
            <div class="mb-8 p-4 bg-white/5 rounded-2xl border border-white/10 shadow-xl backdrop-blur-sm">
                <Hammer class="w-8 h-8 text-orange-400" />
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
                    <Mail class="w-4 h-4" />
                    contacto@mih.cl
                </a>
            </div>
        </main>
        
        <div class="absolute bottom-8 w-full text-center text-xs text-neutral-600">
            &copy; {{ new Date().getFullYear() }} MIH
        </div>
    </div>
</template>
