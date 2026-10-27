<!DOCTYPE html>
<html lang="es-CL">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Primaria SEO -->
        <title inertia>MIH | Agencia de Embarques y Tramitación Documental Aduanera en Chile</title>
        <meta name="description" content="Agencia de Embarques en Chile especializada en tramitación documental aduanera DIN y DUS, visaciones, asistencia en aforos en zonas primarias (marítimas, terrestres y aéreas) y plataforma digital MIHSystem.">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

        <!-- Geo-Tagging Local SEO Chile -->
        <meta name="geo.region" content="CL-VS">
        <meta name="geo.placename" content="Valparaíso, Chile">
        <meta name="geo.position" content="-33.0458;-71.6238">
        <meta name="ICBM" content="-33.0458, -71.6238">

        <!-- Open Graph / Redes Sociales -->
        <meta property="og:locale" content="es_CL">
        <meta property="og:type" content="website">
        <meta property="og:title" content="MIH | Agencia de Embarques y Tramitación Documental Aduanera en Chile">
        <meta property="og:description" content="Agencia de Embarques en Chile especializada en tramitación documental aduanera DIN y DUS, visaciones, asistencia en aforos en zonas primarias (marítimas, terrestres y aéreas) y plataforma digital MIHSystem.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="Agencia de Embarques MIH">
        <meta property="og:image" content="{{ asset('resources/images/logo-mih.png') }}">
        <meta property="og:image:secure_url" content="{{ asset('resources/images/logo-mih.png') }}">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="512">
        <meta property="og:image:height" content="512">
        <meta property="og:image:alt" content="Agencia de Embarques MIH SpA - Tramitación Aduanera y Comercio Exterior">

        <!-- Twitter Cards -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="MIH | Agencia de Embarques y Tramitación Documental Aduanera en Chile">
        <meta name="twitter:description" content="Agencia de Embarques en Chile especializada en tramitación documental aduanera DIN y DUS, visaciones, asistencia en aforos en zonas primarias y plataforma digital MIHSystem.">
        <meta name="twitter:image" content="{{ asset('resources/images/logo-mih.png') }}">
        <meta name="twitter:image:alt" content="Agencia de Embarques MIH SpA">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">

        <!-- Preload de Imagen Hero (LCP Optimization) -->
        <link rel="preload" as="image" type="image/webp" href="/img/hero-bg.webp" fetchpriority="high">

        <!-- Tema: preferencia guardada o la del sistema, aplicada antes de pintar -->
        <script>
            (function () {
                try {
                    var theme = localStorage.getItem('theme');
                    if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                        document.documentElement.classList.add('dark');
                    }
                } catch (e) {}
            })();
        </script>

        <!-- Datos Estructurados Schema.org JSON-LD (@graph) -->
        <script type="application/ld+json">
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
        </script>

        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
