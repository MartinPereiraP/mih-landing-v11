<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { ref, onMounted, onUnmounted } from 'vue';

const isDark = ref(false);
const activeModal = ref<'none' | 'privacy' | 'terms'>('none');
const showCookieBanner = ref(false);
const openFaq = ref<number | null>(null);

const toggleFaq = (index: number) => {
    openFaq.value = openFaq.value === index ? null : index;
};

const faqs = [
    {
        q: '¿Qué servicios realiza Agencia de Embarques MIH SpA en Chile?',
        a: 'Agencia de Embarques MIH SpA está especializada en la tramitación documental aduanera para operaciones de comercio exterior (confección y tramitación de DUS para exportación y DIN para importación), visaciones, conformación de sets documentales de embarque, asistencia presencial en aforos aduaneros en zonas primarias y digitalización de carpetas de despacho a través de la plataforma MIHSystem.'
    },
    {
        q: '¿MIH SpA actúa como Freight Forwarder o comercializa fletes internacionales?',
        a: 'No. MIH SpA no es un freight forwarder ni comercializa fletes de barcos o aviones. Nos concentramos rigurosamente en la gestión documental aduanera y en la asistencia operativa en recintos aduaneros y zonas primarias, colaborando directamente con Agencias de Aduana, importadores y exportadores.'
    },
    {
        q: '¿En qué zonas primarias (marítimas, terrestres y aéreas) opera MIH a nivel nacional?',
        a: 'Operamos en los principales nodos aduaneros de Chile: terminales marítimos de Valparaíso (Matriz & ZEAL), San Antonio, Coquimbo, Talcahuano, San Vicente, Lirquén y Coronel; recintos aduaneros terrestres como Los Andes (PTLA), Arica (Chacalluta), Pino Hachado y Cardenal Samoré; y el recinto aéreo del Aeropuerto Internacional Arturo Merino Benítez (SCL).'
    },
    {
        q: '¿En qué consiste el apoyo de MIH durante los aforos aduaneros en zona primaria?',
        a: 'Nuestro equipo de auxiliares en terreno acompaña y asiste las revisiones físicas y documentales dictaminadas por el Servicio Nacional de Aduanas, coordinando con los terminales portuarios y organismos fiscalizadores (SAG, Sernapesca, ISP) para la verificación de sellos e integridad del despacho.'
    },
    {
        q: '¿Cómo acceden las agencias y empresas a sus carpetas de despacho digitalizadas?',
        a: 'A través de nuestra plataforma corporativa MIHSystem (https://mihsystem.cl), clientes y agencias de aduana aliadas pueden consultar, descargar y auditar en tiempo real sus carpetas de despacho y estados aduaneros las 24 horas del día, bajo el marco de la Ley 21.719 de Protección de Datos Personales.'
    }
];

const acceptCookies = () => {
    localStorage.setItem('cookies_accepted', 'true');
    showCookieBanner.value = false;
};

const toggleDark = () => {
    isDark.value = !isDark.value;
    document.documentElement.classList.toggle('dark', isDark.value);
    localStorage.setItem('theme', isDark.value ? 'dark' : 'light');
};

const showScrollTop = ref(false);

const handleScroll = () => {
    showScrollTop.value = window.scrollY > 300;
};

const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        isDark.value = true;
        document.documentElement.classList.add('dark');
    } else if (savedTheme === 'light') {
        isDark.value = false;
        document.documentElement.classList.remove('dark');
    } else {
        isDark.value = document.documentElement.classList.contains('dark');
    }
    
    if (!localStorage.getItem('cookies_accepted')) {
        setTimeout(() => { showCookieBanner.value = true; }, 1500);
    }
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <Head>
        <title>MIH | Agencia de Embarques y Tramitación Documental Aduanera en Chile</title>
        <meta name="description" content="Agencia de Embarques en Chile especializada en tramitación documental aduanera DIN y DUS, visaciones, asistencia en aforos en zonas primarias (marítimas, terrestres y aéreas) y plataforma digital MIHSystem." />
        <link rel="canonical" href="https://mih.cl" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Geo-Tagging Local SEO Valparaíso / Chile -->
        <meta name="geo.region" content="CL-VS" />
        <meta name="geo.placename" content="Valparaíso, Chile" />
        <meta name="geo.position" content="-33.0458;-71.6238" />
        <meta name="ICBM" content="-33.0458, -71.6238" />
        
        <!-- Open Graph / Redes Sociales -->
        <meta property="og:locale" content="es_CL" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://mih.cl" />
        <meta property="og:title" content="MIH | Agencia de Embarques y Tramitación Documental Aduanera en Chile" />
        <meta property="og:description" content="Agencia de Embarques en Chile especializada en tramitación documental aduanera DIN y DUS, visaciones, asistencia en aforos en zonas primarias (marítimas, terrestres y aéreas) y plataforma digital MIHSystem." />
        <meta property="og:site_name" content="Agencia de Embarques MIH" />
        <meta property="og:image" content="https://mih.cl/resources/images/logo-mih.png" />
        <meta property="og:image:secure_url" content="https://mih.cl/resources/images/logo-mih.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="512" />
        <meta property="og:image:height" content="512" />
        <meta property="og:image:alt" content="Agencia de Embarques MIH SpA - Tramitación Aduanera y Comercio Exterior" />

        <!-- Twitter Cards -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="MIH | Agencia de Embarques y Tramitación Documental Aduanera en Chile" />
        <meta name="twitter:description" content="Agencia de Embarques en Chile especializada en tramitación documental aduanera DIN y DUS, visaciones, asistencia en aforos en zonas primarias y plataforma digital MIHSystem." />
        <meta name="twitter:image" content="https://mih.cl/resources/images/logo-mih.png" />
        <meta name="twitter:image:alt" content="Agencia de Embarques MIH SpA" />

        <!-- Datos Estructurados JSON-LD (Schema.org) -->
        <component is="script" type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": ["Organization", "LocalBusiness"],
              "@id": "https://mih.cl/#organization",
              "name": "Agencia de Embarques MIH SpA",
              "alternateName": "MIH Comercio Exterior",
              "legalName": "Agencia de Embarques MIH SpA",
              "url": "https://mih.cl",
              "logo": {
                "@type": "ImageObject",
                "@id": "https://mih.cl/#logo",
                "url": "https://mih.cl/resources/images/logo-mih.png",
                "caption": "Agencia de Embarques MIH SpA"
              },
              "image": "https://mih.cl/resources/images/logo-mih.png",
              "description": "Agencia de Embarques en Chile especializada en tramitación documental aduanera (DIN/DUS), visaciones, asistencia en aforos en zonas primarias y digitalización de carpetas de despacho.",
              "telephone": "+56323423242",
              "email": "contacto@mih.cl",
              "address": {
                "@type": "PostalAddress",
                "streetAddress": "Almirante Señoret 70, Oficina 51",
                "addressLocality": "Valparaíso",
                "addressRegion": "Región de Valparaíso",
                "postalCode": "2340000",
                "addressCountry": "CL"
              },
              "geo": {
                "@type": "GeoCoordinates",
                "latitude": -33.0458,
                "longitude": -71.6238
              },
              "areaServed": [
                { "@type": "Country", "name": "Chile" },
                { "@type": "AdministrativeArea", "name": "Puerto de Valparaíso (ZEAL)" },
                { "@type": "AdministrativeArea", "name": "Puerto de San Antonio" },
                { "@type": "AdministrativeArea", "name": "Puerto Terrestre Los Andes" },
                { "@type": "AdministrativeArea", "name": "Puertos del Biobío (Talcahuano, San Vicente, Coronel, Lirquén)" },
                { "@type": "Airport", "name": "Aeropuerto Internacional Arturo Merino Benítez (SCL)" }
              ],
              "knowsAbout": [
                "Comercio Exterior",
                "Agencia de Embarques",
                "Tramitación Documental Aduanera",
                "Declaración de Ingreso (DIN)",
                "Declaración Única de Salida (DUS)",
                "Aforos e Inspecciones en Zona Primaria",
                "Normativa Aduanera Chilena",
                "Plataforma Digital MIHSystem"
              ],
              "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Servicios de Gestión Documental Aduanera y Soporte Operativo",
                "itemListElement": [
                  {
                    "@type": "Service",
                    "@id": "https://mih.cl/#servicio-exportacion",
                    "name": "Tramitación Documental de Exportación (DUS)",
                    "description": "Confección, revisión y tramitación de la Declaración Única de Salida (DUS), visaciones, legalizaciones y conformación del set documental de embarque ante el Servicio Nacional de Aduanas.",
                    "provider": { "@id": "https://mih.cl/#organization" }
                  },
                  {
                    "@type": "Service",
                    "@id": "https://mih.cl/#servicio-importacion",
                    "name": "Tramitación Documental de Importación (DIN)",
                    "description": "Revisión técnica de carpetas base para la Declaración de Ingreso (DIN), cotejo documental previo (facturas, conocimientos de embarque, certificados) y coordinación de desaduanamiento.",
                    "provider": { "@id": "https://mih.cl/#organization" }
                  },
                  {
                    "@type": "Service",
                    "@id": "https://mih.cl/#servicio-aforos",
                    "name": "Asistencia y Acompañamiento en Zona Primaria (Aforos)",
                    "description": "Auxiliares acreditados en terreno para asistencia en aforos aduaneros (físicos y documentales), verificación de sellos y coordinación de inspecciones SAG, Sernapesca e ISP en puertos, pasos terrestres y aeropuerto SCL.",
                    "provider": { "@id": "https://mih.cl/#organization" }
                  },
                  {
                    "@type": "Service",
                    "@id": "https://mih.cl/#servicio-mihsystem",
                    "name": "Ecosistema Digital y Trazabilidad (MIHSystem)",
                    "description": "Repositorio seguro en la nube para consulta, descarga y auditoría 24/7 de carpetas de despacho aduanero digitalizadas, conforme a la Ley 21.719.",
                    "provider": { "@id": "https://mih.cl/#organization" }
                  }
                ]
              }
            },
            {
              "@type": "WebSite",
              "@id": "https://mih.cl/#website",
              "url": "https://mih.cl",
              "name": "Agencia de Embarques MIH SpA",
              "description": "Agencia de Embarques y Tramitación Documental Aduanera en Chile",
              "publisher": {
                "@id": "https://mih.cl/#organization"
              },
              "inLanguage": "es-CL"
            },
            {
              "@type": "FAQPage",
              "@id": "https://mih.cl/#faq",
              "mainEntity": [
                {
                  "@type": "Question",
                  "name": "¿Qué servicios realiza Agencia de Embarques MIH SpA en Chile?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Agencia de Embarques MIH SpA está especializada en la tramitación documental aduanera para operaciones de comercio exterior (confección y tramitación de DUS para exportación y DIN para importación), visaciones, conformación de sets documentales de embarque, asistencia presencial en aforos aduaneros en zonas primarias y digitalización de carpetas de despacho a través de la plataforma MIHSystem."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿MIH SpA actúa como Freight Forwarder o comercializa fletes internacionales?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. MIH SpA no es un freight forwarder ni comercializa fletes de barcos o aviones. Nos concentramos rigurosamente en la gestión documental aduanera y en la asistencia operativa en recintos aduaneros y zonas primarias, colaborando directamente con Agencias de Aduana, importadores y exportadores."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿En qué zonas primarias (marítimas, terrestres y aéreas) opera MIH a nivel nacional?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Operamos en los principales nodos aduaneros de Chile: terminales marítimos de Valparaíso (Matriz & ZEAL), San Antonio, Coquimbo, Talcahuano, San Vicente, Lirquén y Coronel; recintos aduaneros terrestres como Los Andes (PTLA), Arica (Chacalluta), Pino Hachado y Cardenal Samoré; y el recinto aéreo del Aeropuerto Internacional Arturo Merino Benítez (SCL)."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿En qué consiste el apoyo de MIH durante los aforos aduaneros en zona primaria?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nuestro equipo de auxiliares en terreno acompaña y asiste las revisiones físicas y documentales dictaminadas por el Servicio Nacional de Aduanas, coordinando con los terminales portuarios y organismos fiscalizadores (SAG, Sernapesca, ISP) para la verificación de sellos e integridad del despacho."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿Cómo acceden las agencias y empresas a sus carpetas de despacho digitalizadas?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A través de nuestra plataforma corporativa MIHSystem (https://mihsystem.cl), clientes y agencias de aduana aliadas pueden consultar, descargar y auditar en tiempo real sus carpetas de despacho y estados aduaneros las 24 horas del día, bajo el marco de la Ley 21.719 de Protección de Datos Personales."
                  }
                }
              ]
            }
          ]
        }
        </component>
    </Head>

    <div class="min-h-screen bg-[#fafafa] text-slate-900 dark:bg-[#050505] dark:text-slate-100 font-sans antialiased selection:bg-[#f59d02] selection:text-white transition-colors duration-500 relative overflow-hidden">
        
        <!-- Apple-style Ambient Glow -->
        <div class="pointer-events-none absolute inset-0 overflow-hidden flex justify-center z-0">
            <div class="w-[800px] h-[400px] bg-white dark:bg-[#f59d02] opacity-100 dark:opacity-[0.03] blur-[100px] rounded-full absolute -top-32 transition-all duration-700"></div>
            <div class="w-[600px] h-[600px] bg-slate-100 dark:bg-[#f59d02] opacity-50 dark:opacity-[0.02] blur-[120px] rounded-full absolute -left-64 top-1/3 transition-all duration-700"></div>
        </div>

        <header class="sticky top-0 z-50 border-b border-slate-200/60 dark:border-white/[0.04] bg-white/60 dark:bg-[#0a0a0a]/60 backdrop-blur-2xl transition-all duration-500">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 sm:px-8">
                <a href="/" class="flex items-center gap-3" aria-label="Inicio - Agencia de Embarques MIH">
                    <img 
                        src="/img/logo-black.svg" 
                        alt="Agencia de Embarques MIH - Tramitación Documental Aduanera en Chile" 
                        class="h-11 w-auto object-contain block dark:hidden"
                        fetchpriority="high"
                        loading="eager"
                        width="160"
                        height="44"
                    >
                    <img 
                        src="/img/logo-white.svg" 
                        alt="Agencia de Embarques MIH - Tramitación Documental Aduanera en Chile" 
                        class="h-11 w-auto object-contain hidden dark:block"
                        fetchpriority="high"
                        loading="eager"
                        width="160"
                        height="44"
                    >
                </a>

                <nav class="hidden md:flex items-center gap-8" aria-label="Navegación principal">
                    <a href="#operaciones" class="text-[13px] tracking-wide font-medium text-slate-500 dark:text-slate-400 transition-colors hover:text-slate-900 dark:hover:text-white" aria-label="Ir a sección de Operaciones en Zona Primaria">Zonas Primarias</a>
                    <a href="#servicios" class="text-[13px] tracking-wide font-medium text-slate-500 dark:text-slate-400 transition-colors hover:text-slate-900 dark:hover:text-white" aria-label="Ir a sección de Servicios Documentales">Servicios Documentales</a>
                    <a href="#faq" class="text-[13px] tracking-wide font-medium text-slate-500 dark:text-slate-400 transition-colors hover:text-slate-900 dark:hover:text-white" aria-label="Ir a Preguntas Frecuentes">Preguntas Frecuentes</a>
                    <a href="#contacto" class="text-[13px] tracking-wide font-medium text-slate-500 dark:text-slate-400 transition-colors hover:text-slate-900 dark:hover:text-white" aria-label="Ir a sección de Contacto Operativo">Contacto</a>

                    <button 
                        @click="toggleDark" 
                        class="rounded-full p-2 border border-slate-200 dark:border-white/10 text-slate-400 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-white/5 transition-all cursor-pointer flex items-center justify-center" 
                        title="Cambiar modo visual" 
                        type="button"
                        aria-label="Cambiar tema visual claro u oscuro"
                    >
                        <svg v-if="!isDark" aria-hidden="true" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                        <svg v-else aria-hidden="true" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m2.828 0l.707-.707m12.022-12.022l.707-.707M12 7a5 5 0 100 10 5 5 0 000-10z" />
                        </svg>
                    </button>

                    <a 
                        href="https://mihsystem.cl" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center rounded-full bg-slate-900 dark:bg-white px-5 py-2 text-[13px] font-semibold text-white dark:text-slate-900 shadow-[0_4px_14px_0_rgba(0,0,0,0.1)] dark:shadow-[0_4px_14px_0_rgba(255,255,255,0.05)] transition-all hover:scale-[1.02] hover:shadow-[0_6px_20px_rgba(0,0,0,0.15)] dark:hover:shadow-[0_6px_20px_rgba(255,255,255,0.1)]"
                        aria-label="Acceder a la Plataforma de Clientes MIHSystem (se abre en nueva pestaña)"
                    >
                        Plataforma Clientes
                    </a>
                </nav>
            </div>
        </header>

        <main class="relative z-10">
        <!-- Hero Section -->
        <section class="relative pt-16 pb-24 lg:pt-28 lg:pb-36 overflow-hidden transition-all duration-500">
            <div class="mx-auto max-w-7xl px-6 sm:px-8 grid grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8 items-center relative z-10">
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 rounded-full border border-dashed border-[#f59d02]/40 bg-[#f59d02]/5 backdrop-blur-md px-3 py-1 text-[11px] font-mono font-semibold tracking-wide text-[#f59d02] shadow-sm">
                        <span class="flex h-2.5 w-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        Soporte Operativo Activo · Red Nacional de Zonas Primarias
                    </div>
                    <p class="text-xs font-bold uppercase tracking-widest text-[#f59d02] mb-3">Equipo profesional con más de 20 años de trayectoria en tramitación aduanera y gestión de comercio exterior.</p>
                    
                    <!-- Exactamente un H1 enfocado en Comercio Exterior y Agencia de Embarques en Chile -->
                    <h1 class="text-5xl font-semibold tracking-tighter sm:text-6xl xl:text-[76px] leading-[1.05] text-slate-900 dark:text-white">
                        Precisión documental en Comercio Exterior.<br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#f59d02] to-amber-400">Agencia de Embarques en Chile.</span>
                    </h1>

                    <p class="text-lg sm:text-xl text-slate-500 dark:text-slate-400 max-w-xl mx-auto lg:mx-0 font-normal leading-relaxed tracking-tight">
                        Confeccionamos, visamos y tramitamos carpetas aduaneras de exportación (DUS) e importación (DIN), brindando asistencia presencial en aforos en zonas primarias y respaldo digital 24/7 en MIHSystem.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                        <a 
                            href="#contacto" 
                            class="rounded-full bg-[#f59d02] px-8 py-3.5 text-center text-[15px] font-medium text-white shadow-[0_8px_20px_rgba(245,157,2,0.3)] transition-all hover:scale-[1.02] hover:bg-[#e08f02]"
                            aria-label="Contactar a la mesa de operaciones de MIH"
                        >
                            Contactar Operaciones
                        </a>
                        <a 
                            href="#servicios" 
                            class="rounded-full bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 px-8 py-3.5 text-center text-[15px] font-medium text-slate-900 dark:text-white shadow-sm transition-all hover:scale-[1.02] hover:bg-slate-50 dark:hover:bg-white/10"
                            aria-label="Descubrir los servicios documentales aduaneros de MIH"
                        >
                            Servicios Documentales
                        </a>
                    </div>
                    
                    <div class="flex items-center gap-2 mt-6 justify-center lg:justify-start">
                        <svg class="h-4 w-4 text-emerald-500 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span class="text-[11px] font-medium text-slate-500 dark:text-slate-400">Operando bajo estricto cumplimiento de la nueva <strong class="text-slate-700 dark:text-slate-200 font-semibold">Ley 21.719 de Protección de Datos</strong></span>
                    </div>
                </div>

                <div class="lg:col-span-5 w-full max-w-md mx-auto lg:max-w-none">
                    <div class="relative rounded-3xl border border-slate-200/50 dark:border-white/10 bg-white/60 dark:bg-white/5 backdrop-blur-3xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-[0_8px_30px_rgb(0,0,0,0.2)] transition-colors duration-500">
                        <div class="flex items-center justify-between border-b border-slate-200 dark:border-white/10 pb-4 mb-4">
                            <div class="flex items-center gap-2">
                                <div class="h-3 w-3 rounded-full bg-[#f59d02]"></div>
                                <div class="h-3 w-3 rounded-full bg-slate-400"></div>
                                <div class="h-3 w-3 rounded-full bg-slate-500"></div>
                            </div>
                            <span class="text-xs font-bold font-mono text-slate-600 dark:text-slate-300">MIH_OPERATIONS_DESK</span>
                        </div>

                        <div class="space-y-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-[#f59d02]">Monitoreo de Servicios</p>

                            <div class="rounded-2xl border border-slate-200/80 dark:border-white/5 bg-white/80 dark:bg-black/20 p-4 flex items-center justify-between shadow-sm">
                                <div>
                                    <p class="text-xs font-bold font-mono">Tramitación Documental</p>
                                    <p class="text-[11px] font-medium text-slate-600 dark:text-slate-300 mt-0.5">Confección de Carpetas / Visaciones DUS & DIN</p>
                                </div>
                                <span class="rounded bg-[#f59d02]/10 px-2 py-1 text-[10px] font-bold text-[#f59d02] border border-[#f59d02]/30">Línea Operativa</span>
                            </div>

                            <div class="rounded-2xl border border-slate-200/80 dark:border-white/5 bg-white/80 dark:bg-black/20 p-4 flex items-center justify-between shadow-sm">
                                <div>
                                    <p class="text-xs font-bold font-mono">Asistencia en Zona Primaria</p>
                                    <p class="text-[11px] font-medium text-slate-600 dark:text-slate-300 mt-0.5">Acompañamiento en Aforos y Sellos</p>
                                </div>
                                <span class="rounded bg-[#f59d02]/10 px-2 py-1 text-[10px] font-bold text-[#f59d02] border border-[#f59d02]/30">En Terreno</span>
                            </div>

                            <div class="pt-2">
                                <a 
                                    href="https://mihsystem.cl" 
                                    target="_blank" 
                                    rel="noopener noreferrer"
                                    class="flex w-full items-center justify-center gap-2 rounded-xl border border-dashed border-[#f59d02]/30 dark:border-[#f59d02]/20 bg-[#f59d02]/5 dark:bg-[#f59d02]/5 py-3.5 text-[12px] font-mono font-bold text-[#f59d02] hover:text-[#f59d02] hover:bg-[#f59d02]/10 hover:border-[#f59d02]/60 transition-all shadow-sm"
                                    aria-label="Ingresar al sistema corporativo MIHSystem (se abre en nueva pestaña)"
                                >
                                    <svg class="h-4 w-4 text-[#f59d02]" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                    Ingresar al Sistema Corporativo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Operaciones y Cobertura Nacional en Zonas Primarias -->
        <section id="operaciones" class="py-28 lg:py-40 transition-colors duration-500 relative">
            <div class="mx-auto max-w-7xl px-6 sm:px-8">
                <div class="grid grid-cols-1 gap-14 lg:grid-cols-2 items-center">
                    <div class="relative">
                        <div class="absolute -inset-2 rounded-xl bg-gradient-to-r from-[#f59d02] to-amber-600 opacity-10 blur-xl"></div>
                        <div class="relative grid grid-cols-2 gap-4 h-full">
                            
                            <div class="col-span-1 row-span-2 relative overflow-hidden rounded-3xl border border-slate-200/50 dark:border-white/10 shadow-md group h-[400px]">
                                <img 
                                    src="/img/operaciones.jpg" 
                                    alt="Operaciones en Zona Primaria Marítima en puertos de Valparaíso ZEAL, San Antonio y Biobío" 
                                    class="w-full h-full object-cover opacity-90 transition-all duration-700 group-hover:scale-105 group-hover:opacity-100"
                                    loading="lazy"
                                    decoding="async"
                                    width="600"
                                    height="400"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent pointer-events-none"></div>
                                <div class="absolute bottom-4 left-5 right-5">
                                    <span class="text-[10px] font-bold uppercase tracking-widest text-[#f59d02]">Zona Primaria Marítima</span>
                                    <h3 class="text-white font-semibold text-lg leading-snug">Valparaíso (ZEAL), San Antonio, Coquimbo & Biobío</h3>
                                </div>
                            </div>

                            <div class="col-span-1 relative overflow-hidden rounded-3xl border border-slate-200/50 dark:border-white/10 shadow-md group h-[192px]">
                                <img 
                                    src="/img/terrestrial.jpg" 
                                    alt="Asistencia aduanera en pasos fronterizos terrestres: Los Andes PTLA, Chacalluta, Pino Hachado y Samoré" 
                                    class="w-full h-full object-cover opacity-90 transition-all duration-700 group-hover:scale-105 group-hover:opacity-100"
                                    loading="lazy"
                                    decoding="async"
                                    width="600"
                                    height="192"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent pointer-events-none"></div>
                                <div class="absolute bottom-4 left-5 right-5">
                                    <span class="text-[10px] font-bold uppercase tracking-widest text-[#f59d02]">Zona Primaria Terrestre</span>
                                    <h3 class="text-white font-semibold text-base leading-snug">Los Andes (PTLA) & Fronteras</h3>
                                </div>
                            </div>

                            <div class="col-span-1 relative overflow-hidden rounded-3xl border border-slate-200/50 dark:border-white/10 shadow-md group h-[192px]">
                                <img 
                                    src="/img/aerial.jpg" 
                                    alt="Tramitación aduanera de carga aérea en Aeropuerto Internacional Arturo Merino Benítez SCL" 
                                    class="w-full h-full object-cover opacity-90 transition-all duration-700 group-hover:scale-105 group-hover:opacity-100"
                                    loading="lazy"
                                    decoding="async"
                                    width="600"
                                    height="192"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent pointer-events-none"></div>
                                <div class="absolute bottom-4 left-5 right-5">
                                    <span class="text-[10px] font-bold uppercase tracking-widest text-[#f59d02]">Zona Primaria Aérea</span>
                                    <h3 class="text-white font-semibold text-base leading-snug">Aeropuerto SCL (Santiago)</h3>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="space-y-6">
                        <span class="text-xs font-bold uppercase tracking-widest text-[#f59d02]">Presencia en Terreno</span>
                        <h2 class="text-4xl font-semibold tracking-tighter sm:text-5xl leading-[1.1]">
                            Conexión integral.<br/>
                            <span class="text-slate-400">Documento y recinto aduanero.</span>
                        </h2>
                        <p class="text-slate-600 dark:text-slate-300 font-medium text-sm sm:text-base leading-relaxed tracking-wide">
                            Acompañamos los despachos de importación y exportación directamente en las zonas primarias y recintos aduaneros autorizados de Chile. Nuestro personal asiste presencialmente los aforos dictaminados por el Servicio Nacional de Aduanas, coordinando inspecciones sanitarias y fitosanitarias con SAG, Sernapesca e ISP.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-2">
                            <div class="border-l-4 border-[#f59d02] pl-4">
                                <h3 class="text-sm font-bold uppercase tracking-wider">Respaldo Digital Centralizado</h3>
                                <p class="text-xs font-semibold text-slate-600 dark:text-slate-300 mt-1">Carpetas de despacho escaneadas y disponibles en línea en MIHSystem.</p>
                            </div>
                            <div class="border-l-4 border-[#f59d02] pl-4">
                                <h3 class="text-sm font-bold uppercase tracking-wider">Rigurosidad en Terreno</h3>
                                <p class="text-xs font-semibold text-slate-600 dark:text-slate-300 mt-1">Supervisión física de sellos e inspecciones en zona primaria sin demoras.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banner Tecnológico B2B (MIHSystem) -->
        <section class="relative h-[50vh] bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('/img/hero-bg.jpg');" aria-label="Plataforma Digital Corporativa MIHSystem">
            <div class="absolute inset-0 bg-slate-100/40 dark:bg-slate-950/70"></div>
            <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                <div class="relative overflow-hidden max-w-2xl border border-white/20 bg-white/60 dark:bg-black/40 backdrop-blur-3xl p-10 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.12)]">
                <div class="absolute inset-0 opacity-[0.04] pointer-events-none" style="background-image: radial-gradient(var(--tw-gradient-stops)); --tw-gradient-from: #ffffff 1.5px; --tw-gradient-to: transparent 1.5px; background-size: 16px 16px;"></div>
                <div class="relative z-10">
                    <p class="text-xs font-bold uppercase tracking-widest text-[#f59d02] mb-2">Plataforma Corporativa MIHSystem</p>
                    <h3 class="text-2xl sm:text-3xl font-semibold tracking-tight text-slate-900 dark:text-white mb-4">Trazabilidad y consulta de carpetas aduaneras 24/7.</h3>
                    <p class="text-sm sm:text-base text-slate-700 dark:text-slate-200 font-medium leading-relaxed">
                        Repositorio digital seguro para empresas y agencias de aduana aliadas. Acceso instantáneo al estatus documental bajo estricto cumplimiento de la Ley 21.719 de Protección de Datos Personales.
                    </p>
                </div>
                </div>
            </div>
        </section>

        <!-- Sección de Servicios Documentales Principales -->
        <section id="servicios" class="py-36 lg:py-48 transition-colors duration-500">
            <div class="mx-auto max-w-7xl px-6 sm:px-8">
                <div class="text-center space-y-4 max-w-2xl mx-auto">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#f59d02]">Estructura de Servicios</span>
                    <h2 class="text-4xl font-semibold tracking-tighter sm:text-5xl">Nuestras líneas de acción documental.</h2>
                    <p class="text-sm font-medium text-slate-600 dark:text-slate-300">
                        Soluciones técnicas diseñadas con riguroso apego a la Ordenanza de Aduanas y la legislación de comercio exterior de Chile.
                    </p>
                </div>

                <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-3">
                    <!-- Exportación -->
                    <div class="relative overflow-hidden bg-white/60 dark:bg-white/5 backdrop-blur-2xl border border-slate-200/50 dark:border-white/10 rounded-3xl p-8 transition-all duration-500 hover:scale-[1.02] hover:shadow-[0_20px_40px_rgb(0,0,0,0.06)] dark:hover:shadow-[0_20px_40px_rgb(0,0,0,0.2)]">
                        <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05] pointer-events-none" style="background-image: radial-gradient(var(--tw-gradient-stops)); --tw-gradient-from: #64748b 1px; --tw-gradient-to: transparent 1px; background-size: 24px 24px;"></div>
                        <div class="relative z-10">
                            <div class="h-12 w-12 rounded-2xl bg-[#f59d02]/10 flex items-center justify-center text-[#f59d02] shadow-sm border border-[#f59d02]/20 transition-colors">
                                <svg class="h-6 w-6" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold tracking-tight mt-6">Tramitación de Exportación (DUS)</h3>
                            <p class="text-xs font-medium text-slate-600 dark:text-slate-300 mt-2 leading-relaxed">
                                Confección, revisión y tramitación de la Declaración Única de Salida (DUS). Visaciones, legalizaciones y entrega del set documental para cumplimiento aduanero previo al embarque.
                            </p>
                        </div>
                    </div>

                    <!-- Importación -->
                    <div class="relative overflow-hidden bg-white/60 dark:bg-white/5 backdrop-blur-2xl border border-slate-200/50 dark:border-white/10 rounded-3xl p-8 transition-all duration-500 hover:scale-[1.02] hover:shadow-[0_20px_40px_rgb(0,0,0,0.06)] dark:hover:shadow-[0_20px_40px_rgb(0,0,0,0.2)]">
                        <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05] pointer-events-none" style="background-image: radial-gradient(var(--tw-gradient-stops)); --tw-gradient-from: #64748b 1px; --tw-gradient-to: transparent 1px; background-size: 24px 24px;"></div>
                        <div class="relative z-10">
                            <div class="h-12 w-12 rounded-2xl bg-[#f59d02]/10 flex items-center justify-center text-[#f59d02] shadow-sm border border-[#f59d02]/20 transition-colors">
                                <svg class="h-6 w-6" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold tracking-tight mt-6">Tramitación de Importación (DIN)</h3>
                            <p class="text-xs font-medium text-slate-600 dark:text-slate-300 mt-2 leading-relaxed">
                                Revisión y preparación de carpetas base para Declaraciones de Ingreso (DIN). Cotejo documental previo de facturas, conocimientos de embarque y certificados para un desaduanamiento ágil.
                            </p>
                        </div>
                    </div>

                    <!-- Asistencia en Zona Primaria -->
                    <div class="relative overflow-hidden bg-white/60 dark:bg-white/5 backdrop-blur-2xl border border-slate-200/50 dark:border-white/10 rounded-3xl p-8 transition-all duration-500 hover:scale-[1.02] hover:shadow-[0_20px_40px_rgb(0,0,0,0.06)] dark:hover:shadow-[0_20px_40px_rgb(0,0,0,0.2)]">
                        <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05] pointer-events-none" style="background-image: radial-gradient(var(--tw-gradient-stops)); --tw-gradient-from: #64748b 1px; --tw-gradient-to: transparent 1px; background-size: 24px 24px;"></div>
                        <div class="relative z-10">
                            <div class="h-12 w-12 rounded-2xl bg-[#f59d02]/10 flex items-center justify-center text-[#f59d02] shadow-sm border border-[#f59d02]/20 transition-colors">
                                <svg class="h-6 w-6" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold tracking-tight mt-6">Asistencia en Zona Primaria</h3>
                            <p class="text-xs font-medium text-slate-600 dark:text-slate-300 mt-2 leading-relaxed">
                                Acompañamiento en terreno durante aforos aduaneros (físicos y documentales). Verificación de sellos y coordinación de inspecciones sectoriales con SAG, Sernapesca e ISP.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Preguntas Frecuentes (FAQ) -->
        <section id="faq" class="py-24 lg:py-32 transition-colors duration-500 relative border-t border-slate-200/60 dark:border-white/5">
            <div class="mx-auto max-w-5xl px-6 sm:px-8">
                <div class="text-center space-y-4 max-w-2xl mx-auto mb-16">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#f59d02]">Resolución de Dudas B2B</span>
                    <h2 class="text-3xl font-semibold tracking-tighter sm:text-4xl text-slate-900 dark:text-white">Preguntas Frecuentes sobre Gestión Aduanera</h2>
                    <p class="text-sm font-medium text-slate-600 dark:text-slate-300">
                        Información técnica sobre tramitación de carpetas, cobertura en zonas primarias y nuestra plataforma digital.
                    </p>
                </div>

                <div class="space-y-4">
                    <div 
                        v-for="(faq, index) in faqs" 
                        :key="index"
                        class="rounded-2xl border border-slate-200/70 dark:border-white/10 bg-white/70 dark:bg-white/5 backdrop-blur-xl overflow-hidden transition-all duration-300"
                    >
                        <button
                            type="button"
                            @click="toggleFaq(index)"
                            :aria-expanded="openFaq === index"
                            :aria-controls="`faq-answer-${index}`"
                            class="w-full text-left p-6 flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50/50 dark:hover:bg-white/[0.02] transition-colors"
                        >
                            <h3 class="text-base sm:text-lg font-semibold text-slate-900 dark:text-white pr-4">
                                {{ faq.q }}
                            </h3>
                            <div class="h-8 w-8 rounded-full bg-slate-100 dark:bg-white/10 flex items-center justify-center shrink-0 text-slate-600 dark:text-slate-300 transition-transform duration-300" :class="{ 'rotate-180': openFaq === index }">
                                <svg class="h-4 w-4" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div 
                            v-show="openFaq === index" 
                            :id="`faq-answer-${index}`"
                            class="px-6 pb-6 text-sm text-slate-600 dark:text-slate-300 leading-relaxed border-t border-slate-100 dark:border-white/5 pt-4"
                        >
                            {{ faq.a }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacto Corporativo y Canales de Operación Directa -->
        <section id="contacto" class="py-36 lg:py-48 transition-colors duration-500 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-100/50 dark:to-white/[0.02] pointer-events-none"></div>
            <div class="mx-auto max-w-7xl px-6 sm:px-8">
                
                <div class="max-w-3xl mb-16">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#f59d02]">Canales Oficiales</span>
                    <h2 class="text-4xl font-semibold tracking-tighter sm:text-5xl text-slate-900 dark:text-white mt-1">Mesa de Operaciones Central.</h2>
                    <p class="text-sm sm:text-base font-medium text-slate-600 dark:text-slate-300 leading-relaxed mt-3">
                        Nuestras oficinas centrales están ubicadas en el centro histórico y aduanero de Valparaíso. De acuerdo con nuestra política de estricto resguardo documental y en cumplimiento de la Ley 21.719, las aperturas de carpetas y coordinaciones de despacho se gestionan exclusivamente mediante comunicación corporativa directa o credenciales en la plataforma MIHSystem.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    
                    <!-- Tarjeta Teléfono -->
                    <a 
                        href="tel:+56323423242"
                        class="group rounded-3xl border border-slate-200/70 dark:border-white/10 bg-white/70 dark:bg-white/5 backdrop-blur-2xl p-8 shadow-sm transition-all hover:scale-[1.02] hover:shadow-md"
                        aria-label="Llamar a Mesa Central de Operaciones al 032-3423242"
                    >
                        <div class="h-12 w-12 rounded-2xl bg-[#f59d02]/10 flex items-center justify-center text-[#f59d02] mb-6 group-hover:bg-[#f59d02] group-hover:text-slate-950 transition-colors">
                            <svg class="h-6 w-6" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <span class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Atención Telefónica</span>
                        <span class="block text-lg font-bold text-slate-900 dark:text-white mt-1 font-mono">032-3423242</span>
                        <p class="text-xs text-slate-600 dark:text-slate-300 mt-2 leading-relaxed">
                            Mesa de Operaciones Central para consultas inmediatas sobre despachos en curso.
                        </p>
                    </a>

                    <!-- Tarjeta Correo -->
                    <a 
                        href="mailto:contacto@mih.cl"
                        class="group rounded-3xl border border-slate-200/70 dark:border-white/10 bg-white/70 dark:bg-white/5 backdrop-blur-2xl p-8 shadow-sm transition-all hover:scale-[1.02] hover:shadow-md"
                        aria-label="Enviar correo corporativo a contacto@mih.cl"
                    >
                        <div class="h-12 w-12 rounded-2xl bg-[#f59d02]/10 flex items-center justify-center text-[#f59d02] mb-6 group-hover:bg-[#f59d02] group-hover:text-slate-950 transition-colors">
                            <svg class="h-6 w-6" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Correo Corporativo</span>
                        <span class="block text-lg font-bold text-slate-900 dark:text-white mt-1 font-mono">contacto@mih.cl</span>
                        <p class="text-xs text-slate-600 dark:text-slate-300 mt-2 leading-relaxed">
                            Recepción de instructivos de embarque, carpetas DUS/DIN y requerimientos operativos.
                        </p>
                    </a>

                    <!-- Tarjeta Sede Matriz -->
                    <div class="rounded-3xl border border-slate-200/70 dark:border-white/10 bg-white/70 dark:bg-white/5 backdrop-blur-2xl p-8 shadow-sm">
                        <div class="h-12 w-12 rounded-2xl bg-[#f59d02]/10 flex items-center justify-center text-[#f59d02] mb-6">
                            <svg class="h-6 w-6" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                        </div>
                        <span class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Oficina Central</span>
                        <span class="block text-base font-bold text-slate-900 dark:text-white mt-1">Valparaíso, Chile</span>
                        <p class="text-xs text-slate-600 dark:text-slate-300 mt-2 leading-relaxed">
                            Almirante Señoret 70, Oficina 51.<br/>
                            <span class="text-slate-500 dark:text-slate-400">Horario: Lun a Vie 08:30 a 18:30 hrs.</span>
                        </p>
                    </div>

                </div>

                <!-- Cobertura Nacional de Zonas Primarias -->
                <div class="rounded-3xl border border-slate-200/70 dark:border-white/10 bg-white/70 dark:bg-white/5 backdrop-blur-2xl p-8 sm:p-10 shadow-sm">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-6 border-b border-slate-200/60 dark:border-white/10">
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-widest text-[#f59d02]">Red Operativa Nacional</span>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-1">Presencia en Zonas Primarias (Marítimas, Terrestres y Aéreas)</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 mt-1">
                                Coordinación presencial de aforos, visaciones y tramitaciones en los principales recintos aduaneros de Chile.
                            </p>
                        </div>
                        <a 
                            href="https://mihsystem.cl" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#f59d02] px-6 py-3 text-xs font-bold text-slate-950 shadow-[0_4px_14px_rgba(245,157,2,0.3)] transition-all hover:scale-[1.02] hover:bg-[#e08f02] shrink-0"
                            aria-label="Acceder a la Plataforma de Clientes MIHSystem"
                        >
                            Acceso Clientes MIHSystem
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">Arica (Chacalluta)</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-[#f59d02]/10 border border-[#f59d02]/30 text-[11px] font-semibold text-[#f59d02] uppercase tracking-wider">Valparaíso (Matriz & ZEAL)</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">Coquimbo</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">San Antonio</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">Los Andes (PTLA)</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">Pino Hachado</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-sky-500/10 border border-sky-500/30 text-[11px] font-semibold text-sky-600 dark:text-sky-400 uppercase tracking-wider">Aeropuerto SCL (Santiago)</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">Cardenal Samoré</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">Talcahuano</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">San Vicente</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">Lirquén</span>
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-[11px] font-semibold text-slate-700 dark:text-slate-300 uppercase tracking-wider">Coronel</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        </main>

        <footer class="bg-transparent py-12 text-[13px] border-t border-slate-200/60 dark:border-white/10 transition-colors duration-500 relative z-10">
            <div class="mx-auto max-w-7xl px-6 sm:px-8 flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-3">
                    <span class="font-bold tracking-tight">MIH</span>
                    <span class="text-slate-600 dark:text-slate-300 font-medium">| &copy; 2016 - {{ new Date().getFullYear() }} Agencia de Embarques MIH SpA. Todos los derechos reservados.</span>
                </div>
                
                <!-- Enlaces Legales (Ley 21.719) -->
                <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-right">
                    <div class="flex items-center gap-4 text-slate-500 dark:text-slate-400 font-medium">
                        <button type="button" @click="activeModal = 'terms'" aria-label="Abrir modal con Términos de Servicio" class="hover:text-[#f59d02] transition-colors cursor-pointer">Términos de Servicio</button>
                        <span aria-hidden="true">&bull;</span>
                        <button type="button" @click="activeModal = 'privacy'" aria-label="Abrir modal con Política de Privacidad conforme a Ley 21.719" class="hover:text-[#f59d02] transition-colors cursor-pointer">Política de Privacidad (Ley 21.719)</button>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Cookie Banner (Ley 21.719 / RGPD) -->
        <transition 
            enter-active-class="transition duration-500 ease-out transform"
            enter-from-class="translate-y-full opacity-0"
            enter-to-class="translate-y-0 opacity-100"
            leave-active-class="transition duration-300 ease-in transform"
            leave-from-class="translate-y-0 opacity-100"
            leave-to-class="translate-y-full opacity-0">
            
            <aside v-if="showCookieBanner" aria-label="Consentimiento de cookies" class="fixed bottom-0 left-0 right-0 z-[90] p-4 sm:p-6 sm:bottom-4 sm:left-4 sm:right-auto sm:max-w-sm w-full">
                <div class="bg-slate-900 dark:bg-slate-800 rounded-2xl shadow-2xl border border-slate-700 p-5 relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-24 h-24 bg-[#f59d02]/10 rounded-full blur-2xl"></div>
                    
                    <div class="flex items-start gap-4">
                        <div class="text-[#f59d02] shrink-0 mt-0.5">
                            <svg class="h-5 w-5" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-[13px] mb-1">Control de Privacidad</h3>
                            <p class="text-slate-400 text-[11px] leading-relaxed">
                                Utilizamos cookies técnicas para asegurar el funcionamiento del sitio y analíticas para mejorar su experiencia, acorde a la Ley 21.719. Al continuar, usted acepta nuestras políticas.
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-end gap-3 border-t border-slate-700/50 pt-4">
                        <button type="button" @click="showCookieBanner = false" aria-label="Aceptar solo cookies esenciales" class="text-[11px] font-bold text-slate-400 hover:text-white transition-colors px-2 py-2">
                            Solo Esenciales
                        </button>
                        <button type="button" @click="acceptCookies" aria-label="Aceptar todas las cookies" class="rounded-lg bg-[#f59d02] px-4 py-2 text-[11px] font-bold text-slate-950 shadow-md transition-all hover:bg-[#d98502]">
                            Aceptar Cookies
                        </button>
                    </div>
                </div>
            </aside>
        </transition>

        <!-- Modal Legal -->
        <transition name="modal">
            <div v-if="activeModal !== 'none'" class="fixed inset-0 z-[100] flex items-start justify-center pt-24 pb-4 px-4 sm:px-6" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <!-- Fondo Oscuro -->
            <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm transition-opacity" @click="activeModal = 'none'"></div>

            <!-- Contenedor del Modal -->
            <div class="modal-content relative w-full max-w-2xl overflow-hidden rounded-2xl bg-white dark:bg-slate-900 shadow-2xl border border-slate-200 dark:border-slate-800 flex flex-col max-h-[85vh]">
                
                <!-- Cabecera -->
                <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 px-6 py-4 bg-slate-50 dark:bg-slate-900/50">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white flex items-center gap-2" id="modal-title">
                        <svg v-if="activeModal === 'privacy'" class="w-5 h-5 text-[#f59d02]" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <svg v-else class="w-5 h-5 text-[#f59d02]" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        {{ activeModal === 'privacy' ? 'Política de Privacidad' : 'Términos de Servicio' }}
                    </h3>
                    <button type="button" @click="activeModal = 'none'" aria-label="Cerrar ventana emergente" class="rounded-lg p-1.5 text-slate-400 hover:bg-slate-200 hover:text-slate-600 dark:hover:bg-slate-800 dark:hover:text-slate-300 transition-colors">
                        <svg class="h-5 w-5" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Contenido con scroll dinámico -->
                <div class="overflow-y-auto p-6 text-sm text-slate-600 dark:text-slate-300 space-y-4">
                    <template v-if="activeModal === 'privacy'">
                        <p><strong>1. Responsable del Tratamiento:</strong> Agencia de Embarques MIH SpA, con domicilio en Almirante Señoret 70, Oficina 51, Valparaíso.</p>
                        <p><strong>2. Canales Directos y Sin Recolección Web:</strong> Este sitio web institucional no dispone de formularios de captura de datos ni almacena registros en bases de datos web. Las comunicaciones y requerimientos se canalizan de manera directa por correo electrónico, teléfono o mediante el acceso autenticado a la plataforma corporativa MIHSystem.</p>
                        <p><strong>3. Base Legal:</strong> El tratamiento de datos que se derive de relaciones comerciales u operativas se rige por la Ley N° 19.628 sobre Protección de la Vida Privada (actualizada por la Ley 21.719).</p>
                        <p><strong>4. Derechos ARCO:</strong> Usted puede ejercer sus derechos de Acceso, Rectificación, Cancelación u Oposición enviando un correo a <a href="mailto:contacto@mih.cl" class="text-[#f59d02] font-semibold hover:underline" aria-label="Enviar correo para ejercicio de derechos ARCO">contacto@mih.cl</a>.</p>
                        <p><strong>5. Conservación:</strong> Los datos se almacenan en servidores seguros bajo altos estándares de la industria, durante el tiempo necesario para la prestación del servicio de gestión documental y operativo.</p>
                    </template>
                    <template v-else>
                        <p><strong>1. Alcance de los Servicios:</strong> Agencia de Embarques MIH SpA se especializa en la gestión documental y asistencia operativa en zona primaria para la tramitación de despachos de exportación (DUS) e importación (DIN) ante el Servicio Nacional de Aduanas.</p>
                        <p><strong>2. Responsabilidad Operativa:</strong> MIH SpA asume la gestión diligente de las carpetas aduaneras y el acompañamiento en aforos, pero no se responsabiliza por retrasos, aforos extraordinarios o resoluciones dictaminadas de forma unilateral y privativa por Aduana, SAG, Sernapesca u otras autoridades competentes.</p>
                        <p><strong>3. Confidencialidad Corporativa:</strong> Toda información comercial y documental relativa a sus despachos será tratada con estricta reserva y confidencialidad.</p>
                        <p><strong>4. Ajustes Tarifarios:</strong> Cualquier cotización u honorario por servicios documentales está sujeto a las condiciones declaradas en los instructivos y sets documentales proporcionados.</p>
                        <p><strong>5. Jurisdicción:</strong> Cualquier controversia derivada de la prestación de los servicios será sometida a la jurisdicción de los Tribunales Ordinarios de Valparaíso, Chile.</p>
                    </template>
                </div>

                <!-- Pie del modal -->
                <div class="border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900/50 px-6 py-4 flex justify-end">
                    <button type="button" @click="activeModal = 'none'" aria-label="Cerrar modal" class="rounded-lg bg-[#f59d02] px-6 py-2 text-sm font-bold text-slate-950 shadow-md transition-all hover:bg-[#d98502]">
                        Entendido
                    </button>
                </div>
            </div>
        </div>
        </transition>

    </div>
</template>

<style>
html { scroll-behavior: smooth; }

/* Animaciones del Modal Legal */
.modal-enter-active,
.modal-leave-active {
    transition: opacity 0.4s ease;
}
.modal-enter-active .modal-content {
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}
.modal-leave-active .modal-content {
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}
.modal-enter-from,
.modal-leave-to {
    opacity: 0;
}
.modal-enter-from .modal-content {
    opacity: 0;
    transform: translateY(-20px) scale(0.97);
}
.modal-leave-to .modal-content {
    opacity: 0;
    transform: translateY(-10px) scale(0.99);
}

/* Scroll to top button */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s ease, transform 0.3s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
  transform: translateY(10px);
}
</style>
