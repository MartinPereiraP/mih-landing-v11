<!DOCTYPE html>
<html lang="es-CL">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Primaria SEO -->
        <title inertia>MIH | Agencia de Embarques, Comercio Exterior y Logística en Chile</title>
        <meta name="description" content="Agencia de Embarques y Comercio Exterior en Chile. Gestión aduanera DIN/DUS, transporte marítimo FCL/LCL, aéreo y terrestre en Valparaíso, San Antonio y SCL.">
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
        <meta property="og:title" content="MIH | Agencia de Embarques, Comercio Exterior y Logística en Chile">
        <meta property="og:description" content="Agencia de Embarques y Comercio Exterior en Chile. Gestión aduanera DIN/DUS, transporte marítimo FCL/LCL, aéreo y terrestre en Valparaíso, San Antonio y SCL.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="Agencia de Embarques MIH">
        <meta property="og:image" content="{{ asset('resources/images/logo-mih.png') }}">
        <meta property="og:image:secure_url" content="{{ asset('resources/images/logo-mih.png') }}">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="512">
        <meta property="og:image:height" content="512">
        <meta property="og:image:alt" content="Agencia de Embarques MIH SpA - Logotipo y Comercio Exterior">

        <!-- Twitter Cards -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="MIH | Agencia de Embarques, Comercio Exterior y Logística en Chile">
        <meta name="twitter:description" content="Agencia de Embarques y Comercio Exterior en Chile. Gestión aduanera DIN/DUS, transporte marítimo FCL/LCL, aéreo y terrestre en Valparaíso, San Antonio y SCL.">
        <meta name="twitter:image" content="{{ asset('resources/images/logo-mih.png') }}">
        <meta name="twitter:image:alt" content="Agencia de Embarques MIH SpA">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">

        <!-- Preload de Imagen Hero (LCP Optimization) -->
        <link rel="preload" as="image" href="/img/hero-bg.jpg" fetchpriority="high">

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
              "description": "Agencia de Embarques y Freight Forwarder en Chile. Especialistas en comercio exterior, tramitación aduanera (DIN/DUS) y transporte marítimo, aéreo y terrestre.",
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
                {
                  "@type": "Country",
                  "name": "Chile"
                },
                {
                  "@type": "AdministrativeArea",
                  "name": "Puerto de Valparaíso"
                },
                {
                  "@type": "AdministrativeArea",
                  "name": "Puerto de San Antonio"
                },
                {
                  "@type": "Airport",
                  "name": "Aeropuerto Internacional Arturo Merino Benítez (SCL)"
                }
              ],
              "knowsAbout": [
                "Comercio Exterior",
                "Agencia de Embarques",
                "Freight Forwarding",
                "Agenciamiento Aduanero",
                "Transporte Marítimo FCL y LCL",
                "Transporte Aéreo de Carga",
                "Normativa Aduanera Chilena",
                "Tramitación DIN y DUS"
              ],
              "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Servicios de Comercio Exterior y Logística Internacional",
                "itemListElement": [
                  {
                    "@type": "OfferCatalog",
                    "name": "Embarques Marítimos FCL y LCL",
                    "itemListElement": [
                      {
                        "@type": "Service",
                        "@id": "https://mih.cl/#servicio-maritimo",
                        "name": "Embarques y Transporte Marítimo (FCL / LCL)",
                        "description": "Agenciamiento y coordinación integral de carga marítima en contenedores completos (FCL) y carga consolidada (LCL) en puertos de Valparaíso, San Antonio y terminales de Chile.",
                        "provider": { "@id": "https://mih.cl/#organization" }
                      }
                    ]
                  },
                  {
                    "@type": "OfferCatalog",
                    "name": "Transporte Aéreo de Carga",
                    "itemListElement": [
                      {
                        "@type": "Service",
                        "@id": "https://mih.cl/#servicio-aereo",
                        "name": "Carga Aérea Internacional",
                        "description": "Gestión logística de envíos aéreos de alta prioridad y carga crítica a través del Aeropuerto Internacional Arturo Merino Benítez (SCL).",
                        "provider": { "@id": "https://mih.cl/#organization" }
                      }
                    ]
                  },
                  {
                    "@type": "OfferCatalog",
                    "name": "Logística Terrestre Nacional e Internacional",
                    "itemListElement": [
                      {
                        "@type": "Service",
                        "@id": "https://mih.cl/#servicio-terrestre",
                        "name": "Logística y Transporte Terrestre",
                        "description": "Transporte terrestre de carga y coordinación intermodal entre puertos, extraportuarios, pasos fronterizos (Los Andes, Pino Hachado) y centros de distribución.",
                        "provider": { "@id": "https://mih.cl/#organization" }
                      }
                    ]
                  },
                  {
                    "@type": "OfferCatalog",
                    "name": "Asesoría y Gestión Aduanera",
                    "itemListElement": [
                      {
                        "@type": "Service",
                        "@id": "https://mih.cl/#servicio-aduanero",
                        "name": "Asesoría y Gestión Aduanera (DIN / DUS)",
                        "description": "Tramitación documental de Declaraciones de Ingreso (DIN), Declaraciones Únicas de Salida (DUS), visaciones, inspecciones SAG/Sernapesca y supervisión física en zona primaria.",
                        "provider": { "@id": "https://mih.cl/#organization" }
                      }
                    ]
                  }
                ]
              }
            },
            {
              "@type": "WebSite",
              "@id": "https://mih.cl/#website",
              "url": "https://mih.cl",
              "name": "Agencia de Embarques MIH SpA",
              "description": "Agencia de Embarques, Comercio Exterior y Gestión Aduanera en Chile",
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
                  "name": "¿Qué servicios ofrece Agencia de Embarques MIH en Chile?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Agencia de Embarques MIH SpA ofrece coordinación integral de transporte internacional marítimo (FCL/LCL), aéreo y terrestre, agenciamiento aduanero (tramitación DIN y DUS), visaciones, inspección física en zona primaria y supervisión documental en los principales puertos y terminales del país."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿En qué puertos y terminales aduaneros opera MIH?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Operamos en los principales nodos logísticos de Chile: puertos de Valparaíso (incluyendo ZEAL), San Antonio, Talcahuano, San Vicente, Lirquén y Coronel; Aeropuerto Internacional Arturo Merino Benítez (SCL); y pasos fronterizos terrestres como Los Andes y Pino Hachado."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿Cómo gestiona MIH la tramitación aduanera de importación y exportación (DIN / DUS)?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Supervisamos la preparación y revisión de carpetas de despacho, visaciones y tramitación de Declaraciones de Ingreso (DIN) y Declaraciones Únicas de Salida (DUS), coordinando aforos en zona primaria e inspecciones SAG/Sernapesca para evitar sobreestadías y sobrecostos."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿Qué ventajas diferenciales ofrece MIH frente a otros operadores logísticos?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Más de 20 años de experiencia técnica en terreno, acceso 24/7 a carpetas digitales a través de la plataforma MIHSystem y estricto cumplimiento de la Ley 21.719 de Protección de Datos Personales en Chile."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿Qué modalidades de transporte internacional de carga gestionan?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Gestionamos transporte marítimo FCL (Full Container Load) y LCL (Less than Container Load), transporte aéreo de carga crítica por SCL y transporte terrestre nacional e internacional intermodal."
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
