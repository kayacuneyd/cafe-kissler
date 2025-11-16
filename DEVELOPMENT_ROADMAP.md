# CAFE KISSLER - DETAYLI DEVELOPMENT ROADMAP

## 🎯 PROJE HEDEFLERİ

**Süre:** 5-7 gün (hızlı ama profesyonel)  
**Stack:** PHP + Tailwind CSS  
**Amaç:** İkna için demo + production-ready altyapı

---

## 📋 ROADMAP GENEL BAKIŞ

```
GÜN 1-2: Planlama & Setup & Tasarım Sistemi
GÜN 3-4: Sayfa Geliştirme (6 sayfa)
GÜN 5: İçerik & Optimizasyon
GÜN 6: Test & Deploy
GÜN 7: İkna Sunumu Hazırlığı
```

---

# 🔥 DETAYLI ROADMAP

## **GÜN 1: PROJE TEMELİ & PLANLAMA** (6-8 saat)

### Sabah (3-4 saat): Teknik Setup

#### 1.1 Proje Yapısı Oluştur

```
cafe-kissler/
├── index.php                 # Ana sayfa
├── pages/
│   ├── ueber-uns.php        # Hakkımızda
│   ├── cafe.php             # Café
│   ├── baeckerei.php        # Bäckerei
│   ├── sondertorten.php     # Özel Pastalar
│   └── kontakt.php          # İletişim
├── includes/
│   ├── header.php           # Global header
│   ├── footer.php           # Global footer
│   ├── nav.php              # Navigation
│   └── meta.php             # SEO meta tags
├── assets/
│   ├── css/
│   │   └── style.css        # Tailwind output
│   ├── js/
│   │   └── main.js          # Vanilla JS
│   └── images/
│       ├── hero/
│       ├── cafe/
│       ├── baeckerei/
│       └── sondertorten/
├── components/              # Reusable PHP components
│   ├── hero.php
│   ├── section-title.php
│   ├── card.php
│   └── cta-button.php
├── data/
│   ├── menu-cafe.php        # Café menü array
│   ├── menu-baeckerei.php   # Bäckerei ürünler
│   └── opening-hours.php    # Çalışma saatleri
├── config.php               # Site ayarları
├── tailwind.config.js
├── package.json
└── README.md
```

#### 1.2 Tailwind CSS Setup

```bash
# Terminal'de
npm init -y
npm install -D tailwindcss
npx tailwindcss init

# tailwind.config.js
module.exports = {
  content: [
    "./**/*.php",
    "./components/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        'kissler-brown': '#8B4513',
        'kissler-cream': '#FFF8DC',
        'kissler-gold': '#DAA520',
      },
      fontFamily: {
        'serif': ['Playfair Display', 'serif'],
        'sans': ['Inter', 'sans-serif'],
      }
    }
  }
}

# package.json'a build script ekle
"scripts": {
  "build": "tailwindcss -i ./assets/css/input.css -o ./assets/css/style.css --minify",
  "watch": "tailwindcss -i ./assets/css/input.css -o ./assets/css/style.css --watch"
}
```

#### 1.3 Config Dosyası Oluştur

```php
// config.php
<?php
define('SITE_NAME', 'Café Kissler');
define('SITE_URL', 'https://cafe-kissler.de'); // Geçici domain
define('SITE_DESCRIPTION', 'Traditionelle Bäckerei und gemütliches Café im Herzen von Friedberg');
define('CONTACT_EMAIL', 'info@cafe-kissler.de');
define('CONTACT_PHONE', '+49 6031 5140');
define('ADDRESS', 'Kaiserstrasse 22-24, 61169 Friedberg');

// SEO Keywords
define('SEO_KEYWORDS', 'Bäckerei Friedberg, Café Friedberg, Brunch Friedberg, Hochzeitstorte Friedberg, Kaiserschmarrn');
?>
```

---

### Öğleden Sonra (3-4 saat): Tasarım Sistemi & Placeholder İçerik

#### 1.4 Renk Paleti & Tipografi Kararları

**Renk Stratejisi:**

```css
/* Geleneksel ama modern yaklaşım */
Primary: #8B4513 (Sıcak kahverengi - ekmek/geleneksellik)
Secondary: #DAA520 (Altın - premium/kalite)
Background: #FFF8DC (Krem - sıcaklık)
Accent: #2C5F2D (Koyu yeşil - TGTG sustainability vurgusu)
Text: #2D2D2D (Neredeyse siyah)
```

**Font Seçimi:**

```html
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link
  href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600&display=swap"
  rel="stylesheet"
/>

Başlıklar: Playfair Display (serif - geleneksel) Body: Inter (sans-serif -
modern, okunabilir)
```

#### 1.5 Placeholder İçerik Hazırlama

**A) Menü Verileri Oluştur:**

```php
// data/menu-cafe.php
<?php
return [
    'fruehstueck' => [
        'title' => 'Frühstück & Brunch',
        'description' => 'Täglich frisch zubereitet von 8:00 bis 12:00 Uhr',
        'items' => [
            [
                'name' => 'Klassisches Frühstück',
                'description' => 'Frische Brötchen, Aufschnitt, Käse, Marmelade, Butter',
                'price' => '8,50'
            ],
            [
                'name' => 'Brunch-Buffet (Sonntags)',
                'description' => 'Vielfältiges Buffet mit warmen und kalten Speisen',
                'price' => '15,90',
                'highlight' => true
            ],
            // ... daha fazla
        ]
    ],
    'mittagstisch' => [
        'title' => 'Mittagstisch',
        'description' => 'Montag bis Freitag von 11:30 bis 14:00 Uhr',
        'items' => [
            [
                'name' => 'Wiener Schnitzel',
                'description' => 'Mit Pommes Frites und Salat',
                'price' => '12,90'
            ],
            [
                'name' => 'Schweinebraten',
                'description' => 'Traditionell mit Kartoffelknödel und Rotkraut',
                'price' => '13,50'
            ]
        ]
    ],
    'spezialitaeten' => [
        'title' => 'Unsere Spezialitäten',
        'items' => [
            [
                'name' => 'Kaiserschmarrn',
                'description' => 'Fluffiger Kaiserschmarrn mit Zwetschgenröster und Puderzucker',
                'price' => '9,50',
                'highlight' => true,
                'icon' => '⭐' // Customer favorite
            ],
            [
                'name' => 'Cappuccino XXL',
                'description' => 'Unser berühmter großer Cappuccino',
                'price' => '4,20'
            ]
        ]
    ]
];
?>
```

```php
// data/menu-baeckerei.php
<?php
return [
    'brote' => [
        'title' => 'Frische Brote',
        'items' => [
            'Bauernbrot',
            'Vollkornbrot',
            'Roggenmischbrot',
            'Dinkel-Walnussbrot'
        ]
    ],
    'broetchen' => [
        'title' => 'Brötchen & Teilchen',
        'items' => [
            'Weizenbrötchen',
            'Körnerbrötchen',
            'Laugenbrezel',
            'Croissants'
        ]
    ]
];
?>
```

```php
// data/opening-hours.php
<?php
return [
    'baeckerei' => [
        'title' => 'Bäckerei',
        'hours' => [
            'Mo-Fr' => '07:00 - 18:00',
            'Sa' => '07:00 - 17:00',
            'So' => '10:00 - 17:00'
        ]
    ],
    'cafe' => [
        'title' => 'Café',
        'hours' => [
            'Mo-Fr' => '08:00 - 18:00',
            'Sa' => '07:00 - 17:00',
            'So' => '10:00 - 17:00'
        ]
    ]
];
?>
```

**B) Placeholder Metinler (Almanca):**

```php
// data/content.php
<?php
return [
    'hero' => [
        'title' => 'Tradition trifft Gemütlichkeit',
        'subtitle' => 'Im Herzen von Friedberg seit [Jahr]',
        'cta_cafe' => 'Unser Café entdecken',
        'cta_baeckerei' => 'Zur Bäckerei'
    ],
    'about' => [
        'title' => 'Über uns',
        'text' => 'Café Kissler ist mehr als nur eine Bäckerei und ein Café – wir sind ein Teil der Friedberger Familie. Mit traditionellen Rezepten und frischen Zutaten backen wir täglich für Sie die besten Brote, Brötchen und Kuchen. In unserem gemütlichen Café genießen Sie hausgemachte Spezialitäten in familiärer Atmosphäre.'
    ],
    // ... daha fazla
];
?>
```

---

## **GÜN 2: CORE COMPONENTS & NAVIGATION** (6-8 saat)

### Sabah (4 saat): Temel Componentler

#### 2.1 Header Component

```php
// includes/header.php
<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body class="font-sans text-gray-800">
    <?php include 'nav.php'; ?>
```

#### 2.2 Navigation (Mobile-First, Sticky)

```php
// includes/nav.php
<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');

$nav_items = [
    'index' => ['label' => 'Startseite', 'url' => '/'],
    'cafe' => ['label' => 'Café', 'url' => '/pages/cafe.php'],
    'baeckerei' => ['label' => 'Bäckerei', 'url' => '/pages/baeckerei.php'],
    'sondertorten' => ['label' => 'Sondertorten', 'url' => '/pages/sondertorten.php'],
    'ueber-uns' => ['label' => 'Über uns', 'url' => '/pages/ueber-uns.php'],
    'kontakt' => ['label' => 'Kontakt', 'url' => '/pages/kontakt.php']
];
?>

<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="/" class="text-2xl font-serif font-bold text-kissler-brown">
                Café Kissler
            </a>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6">
                <?php foreach ($nav_items as $key => $item): ?>
                    <li>
                        <a href="<?= $item['url'] ?>"
                           class="<?= $current_page === $key ? 'text-kissler-brown font-semibold border-b-2 border-kissler-brown' : 'text-gray-700 hover:text-kissler-brown' ?>
                                  transition duration-200 pb-1">
                            <?= $item['label'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Mobile Menu -->
        <ul id="mobile-menu" class="hidden md:hidden pb-4 space-y-2">
            <?php foreach ($nav_items as $key => $item): ?>
                <li>
                    <a href="<?= $item['url'] ?>"
                       class="block py-2 <?= $current_page === $key ? 'text-kissler-brown font-semibold' : 'text-gray-700' ?>">
                        <?= $item['label'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
```

#### 2.3 Reusable Components

```php
// components/section-title.php
<?php
function section_title($title, $subtitle = '') {
    ?>
    <div class="text-center mb-12">
        <h2 class="text-4xl font-serif font-bold text-kissler-brown mb-4">
            <?= $title ?>
        </h2>
        <?php if ($subtitle): ?>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                <?= $subtitle ?>
            </p>
        <?php endif; ?>
    </div>
    <?php
}
?>
```

```php
// components/cta-button.php
<?php
function cta_button($text, $url, $style = 'primary') {
    $classes = $style === 'primary'
        ? 'bg-kissler-brown hover:bg-kissler-brown/90 text-white'
        : 'bg-white hover:bg-gray-50 text-kissler-brown border-2 border-kissler-brown';
    ?>
    <a href="<?= $url ?>"
       class="<?= $classes ?> px-8 py-3 rounded-lg font-semibold transition duration-300 inline-block">
        <?= $text ?>
    </a>
    <?php
}
?>
```

---

### Öğleden Sonra (3-4 saat): Footer & SEO Meta

#### 2.4 Footer Component

```php
// includes/footer.php
<?php
$hours = require_once __DIR__ . '/../data/opening-hours.php';
?>

<footer class="bg-gray-900 text-gray-300 mt-20">
    <div class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Hakkında -->
            <div>
                <h3 class="text-xl font-serif font-bold text-white mb-4">Café Kissler</h3>
                <p class="text-sm">
                    Traditionelle Bäckerei und gemütliches Café im Herzen von Friedberg.
                </p>
            </div>

            <!-- Öffnungszeiten -->
            <div>
                <h4 class="text-white font-semibold mb-4">Öffnungszeiten</h4>
                <div class="space-y-2 text-sm">
                    <p class="font-medium text-kissler-gold">Bäckerei:</p>
                    <?php foreach ($hours['baeckerei']['hours'] as $day => $time): ?>
                        <p><?= $day ?>: <?= $time ?></p>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Kontakt -->
            <div>
                <h4 class="text-white font-semibold mb-4">Kontakt</h4>
                <div class="space-y-2 text-sm">
                    <p><?= ADDRESS ?></p>
                    <p>Tel: <a href="tel:<?= CONTACT_PHONE ?>" class="hover:text-kissler-gold"><?= CONTACT_PHONE ?></a></p>
                    <p>Email: <a href="mailto:<?= CONTACT_EMAIL ?>" class="hover:text-kissler-gold"><?= CONTACT_EMAIL ?></a></p>
                </div>
            </div>

            <!-- Partner -->
            <div>
                <h4 class="text-white font-semibold mb-4">Partner</h4>
                <div class="space-y-3">
                    <div class="bg-white p-3 rounded inline-block">
                        <img src="/assets/images/friedberg-hats-logo.png" alt="Friedberg hat's" class="h-8">
                    </div>
                    <div class="bg-green-600 p-3 rounded inline-block">
                        <img src="/assets/images/tgtg-logo.png" alt="Too Good To Go" class="h-8">
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-sm">
            <p>&copy; <?= date('Y') ?> Café Kissler. Alle Rechte vorbehalten.</p>
        </div>
    </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
```

#### 2.5 SEO Meta Component

```php
// includes/meta.php
<?php
// Her sayfa için özel meta bilgileri
$meta_defaults = [
    'title' => SITE_NAME,
    'description' => SITE_DESCRIPTION,
    'keywords' => SEO_KEYWORDS,
    'og_image' => SITE_URL . '/assets/images/og-image.jpg'
];

// Sayfaya özel meta varsa override et
$meta = isset($page_meta) ? array_merge($meta_defaults, $page_meta) : $meta_defaults;
?>

<title><?= $meta['title'] ?></title>
<meta name="description" content="<?= $meta['description'] ?>">
<meta name="keywords" content="<?= $meta['keywords'] ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?= $meta['title'] ?>">
<meta property="og:description" content="<?= $meta['description'] ?>">
<meta property="og:image" content="<?= $meta['og_image'] ?>">
<meta property="og:url" content="<?= SITE_URL . $_SERVER['REQUEST_URI'] ?>">
<meta property="og:type" content="website">

<!-- Favicon -->
<link rel="icon" type="image/png" href="/assets/images/favicon.png">
```

---

## **GÜN 3: ANA SAYFA & CAFÉ SAYFASI** (7-8 saat)

### Sabah (4 saat): Ana Sayfa

#### 3.1 index.php - Hero Section

```php
<?php
require_once 'config.php';
$page_meta = [
    'title' => SITE_NAME . ' - Traditionelle Bäckerei und Café in Friedberg',
    'description' => 'Genießen Sie frische Backwaren, gemütliches Ambiente und traditionelle deutsche Küche im Café Kissler in Friedberg.',
    'keywords' => 'Café Friedberg, Bäckerei Friedberg, Brunch Friedberg, Frühstück Friedberg'
];
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center bg-cover bg-center"
         style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('/assets/images/hero/cafe-exterior.jpg');">
    <div class="text-center text-white px-4">
        <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6 animate-fade-in">
            Tradition trifft Gemütlichkeit
        </h1>
        <p class="text-xl md:text-2xl mb-8 font-light">
            Im Herzen von Friedberg – Ihre Bäckerei und Ihr Café seit Generationen
        </p>

        <!-- Dual CTA -->
        <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
            <?php
            cta_button('Zum Café', '/pages/cafe.php', 'primary');
            cta_button('Zur Bäckerei', '/pages/baeckerei.php', 'secondary');
            ?>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Warum Cafe Kissler Section -->
<section class="py-20 bg-kissler-cream">
    <div class="container mx-auto px-4">
        <?php section_title('Warum Café Kissler?', 'Drei Gründe, uns zu besuchen'); ?>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition duration-300">
                <div class="text-6xl mb-4">🥖</div>
                <h3 class="text-2xl font-serif font-bold text-kissler-brown mb-4">Frisch gebacken</h3>
                <p class="text-gray-600">
                    Täglich frische Brote und Brötchen aus eigener Backstube mit traditionellen Rezepten.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition duration-300">
                <div class="text-6xl mb-4">☕</div>
                <h3 class="text-2xl font-serif font-bold text-kissler-brown mb-4">Gemütliches Ambiente</h3>
                <p class="text-gray-600">
                    Familiäre Atmosphäre, schneller Service und eine Auswahl an köstlichen Spezialitäten.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition duration-300">
                <div class="text-6xl mb-4">🎂</div>
                <h3 class="text-2xl font-serif font-bold text-kissler-brown mb-4">Individuelle Torten</h3>
                <p class="text-gray-600">
                    Hochzeitstorten, Geburtstagstorten – wir kreieren Ihre Traumtorte nach Ihren Wünschen.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Spezialitäten Vorschau -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <?php section_title('Unsere Spezialitäten', 'Was unsere Gäste lieben'); ?>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="/assets/images/cafe/kaiserschmarrn.jpg"
                     alt="Kaiserschmarrn"
                     class="rounded-lg shadow-2xl">
            </div>
            <div>
                <div class="flex items-center mb-4">
                    <span class="text-4xl mr-3">⭐</span>
                    <h3 class="text-3xl font-serif font-bold text-kissler-brown">Kaiserschmarrn</h3>
                </div>
                <p class="text-gray-600 text-lg mb-6">
                    Unser berühmter Kaiserschmarrn – fluffig, goldbraun und serviert mit hausgemachtem Zwetschgenröster.
                    Ein Klassiker, den unsere Gäste immer wieder loben!
                </p>
                <?php cta_button('Zur Café-Karte', '/pages/cafe.php', 'primary'); ?>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
```

---

### Öğleden Sonra (3-4 saat): Café Sayfası

#### 3.2 pages/cafe.php

```php
<?php
require_once '../config.php';
$page_meta = [
    'title' => 'Café - ' . SITE_NAME,
    'description' => 'Genießen Sie Brunch, Mittagstisch und hausgemachte Spezialitäten wie Kaiserschmarrn in gemütlicher Atmosphäre.',
    'keywords' => 'Café Friedberg, Brunch Friedberg, Kaiserschmarrn, Mittagstisch Friedberg'
];
include '../includes/header.php';
$menu_cafe = require_once '../data/menu-cafe.php';
?>

<!-- Page Hero -->
<section class="relative h-96 flex items-center justify-center bg-cover bg-center"
         style="background-image: linear-gradient(rgba(139,69,19,0.6), rgba(139,69,19,0.6)), url('/assets/images/cafe/interior.jpg');">
    <div class="text-center text-white px-4">
        <h1 class="text-5xl md:text-6xl font-serif font-bold mb-4">Unser Café</h1>
        <p class="text-xl">Gemütlichkeit und Genuss in familiärer Atmosphäre</p>
    </div>
</section>

<!-- Ambiente Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <h2 class="text-4xl font-serif font-bold text-kissler-brown mb-6">
                    Wohlfühlen bei Café Kissler
                </h2>
                <p class="text-gray-600 text-lg mb-4">
                    Unser Café bietet Ihnen den perfekten Ort für eine entspannte Pause, ein gemütliches Frühstück
                    oder ein leckeres Mittagessen. Die familiäre Atmosphäre und der schnelle, freundliche Service
                    machen jeden Besuch zu einem besonderen Erlebnis.
                </p>
                <p class="text-gray-600 text-lg mb-6">
                    Ob alleine, mit Freunden oder der Familie – bei uns sind Sie herzlich willkommen!
                </p>

                <!-- Öffnungszeiten Box -->
                <div class="bg-kissler-cream p-6 rounded-lg">
                    <h3 class="font-bold text-kissler-brown mb-3 text-xl">Café Öffnungszeiten:</h3>
                    <?php
                    $hours = require_once '../data/opening-hours.php';
                    foreach ($hours['cafe']['hours'] as $day => $time):
                    ?>
                        <div class="flex justify-between py-1 border-b border-gray-300 last:border-0">
                            <span class="font-medium"><?= $day ?></span>
                            <span><?= $time ?> Uhr</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="order-1 md:order-2">
                <img src="/assets/images/cafe/seating-area.jpg"
                     alt="Café Innenbereich"
                     class="rounded-lg shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- Menü Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php section_title('Unsere Speisekarte', 'Von Frühstück bis Abend – alles frisch zubereitet'); ?>

        <!-- Frühstück & Brunch -->
        <div class="mb-16">
            <h3 class="text-3xl font-serif font-bold text-kissler-brown mb-8 text-center">
                <?= $menu_cafe['fruehstueck']['title'] ?>
            </h3>
            <p class="text-center text-gray-600 mb-8"><?= $menu_cafe['fruehstueck']['description'] ?></p>

            <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <?php foreach ($menu_cafe['fruehstueck']['items'] as $item): ?>
                    <div class="bg-white p-6 rounded-lg shadow <?= $item['highlight'] ?? false ? 'ring-2 ring-kissler-gold' : '' ?>">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-lg text-kissler-brown"><?= $item['name'] ?></h4>
                            <span class="text-kissler-gold font-bold"><?= $item['price'] ?> €</span>
                        </div>
                        <p class="text-gray-600 text-sm"><?= $item['description'] ?></p>
                        <?php if ($item['highlight'] ?? false): ?>
                            <span class="inline-block mt-2 text-xs bg-kissler-gold text-white px-2 py-1 rounded">Beliebt</span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Mittagstisch -->
        <div class="mb-16">
            <h3 class="text-3xl font-serif font-bold text-kissler-brown mb-8 text-center">
                <?= $menu_cafe['mittagstisch']['title'] ?>
            </h3>
            <p class="text-center text-gray-600 mb-8"><?= $menu_cafe['mittagstisch']['description'] ?></p>

            <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <?php foreach ($menu_cafe['mittagstisch']['items'] as $item): ?>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-lg text-kissler-brown"><?= $item['name'] ?></h4>
                            <span class="text-kissler-gold font-bold"><?= $item['price'] ?> €</span>
                        </div>
                        <p class="text-gray-600 text-sm"><?= $item['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Spezialitäten -->
        <div class="bg-kissler-brown text-white p-12 rounded-lg">
            <h3 class="text-3xl font-serif font-bold mb-8 text-center">
                ⭐ <?= $menu_cafe['spezialitaeten']['title'] ?> ⭐
            </h3>
            <div class="grid md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                <?php foreach ($menu_cafe['spezialitaeten']['items'] as $item): ?>
                    <div class="bg-white/10 backdrop-blur p-6 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-lg"><?= $item['name'] ?></h4>
                            <span class="text-kissler-gold font-bold"><?= $item['price'] ?> €</span>
                        </div>
                        <p class="text-white/90 text-sm"><?= $item['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-kissler-cream">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-serif font-bold text-kissler-brown mb-4">
            Reservieren Sie Ihren Tisch
        </h2>
        <p class="text-gray-600 mb-8">
            Besonders für unseren beliebten Sonntags-Brunch empfehlen wir eine Reservierung.
        </p>
        <?php cta_button('Jetzt anrufen: ' . CONTACT_PHONE, 'tel:' . CONTACT_PHONE, 'primary'); ?>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
```

---

## **GÜN 4: BÄCKEREI & SONDERTORTEN SAYFALARI** (7-8 saat)

### Sabah (3-4 saat): Bäckerei Sayfası

#### 4.1 pages/baeckerei.php

```php
<?php
require_once '../config.php';
$page_meta = [
    'title' => 'Bäckerei - ' . SITE_NAME,
    'description' => 'Täglich frische Brote, Brötchen und Backwaren aus eigener Backstube. Jetzt auch mit Too Good To Go gegen Lebensmittelverschwendung.',
    'keywords' => 'Bäckerei Friedberg, frische Brötchen, Brot Friedberg, Too Good To Go Friedberg'
];
include '../includes/header.php';
$menu_baeckerei = require_once '../data/menu-baeckerei.php';
?>

<!-- Page Hero -->
<section class="relative h-96 flex items-center justify-center bg-cover bg-center"
         style="background-image: linear-gradient(rgba(139,69,19,0.6), rgba(139,69,19,0.6)), url('/assets/images/baeckerei/bread-display.jpg');">
    <div class="text-center text-white px-4">
        <h1 class="text-5xl md:text-6xl font-serif font-bold mb-4">Unsere Bäckerei</h1>
        <p class="text-xl">Tradition seit Generationen – täglich frisch für Sie gebacken</p>
    </div>
</section>

<!-- Handwerk Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="/assets/images/baeckerei/baking-process.jpg"
                     alt="Backprozess"
                     class="rounded-lg shadow-xl">
            </div>
            <div>
                <h2 class="text-4xl font-serif font-bold text-kissler-brown mb-6">
                    Handwerk mit Herz
                </h2>
                <p class="text-gray-600 text-lg mb-4">
                    Seit Generationen backen wir mit Leidenschaft und nach traditionellen Rezepten.
                    Unsere Brote und Brötchen werden täglich frisch in unserer eigenen Backstube hergestellt –
                    mit ausgewählten Zutaten und viel Liebe zum Detail.
                </p>
                <p class="text-gray-600 text-lg mb-6">
                    Ob knuspriges Bauernbrot, Vollkornbrötchen oder Laugenbrezel –
                    bei uns finden Sie eine große Auswahl an frischen Backwaren.
                </p>

                <!-- Öffnungszeiten -->
                <div class="bg-kissler-cream p-6 rounded-lg">
                    <h3 class="font-bold text-kissler-brown mb-3 text-xl">Bäckerei Öffnungszeiten:</h3>
                    <?php
                    $hours = require_once '../data/opening-hours.php';
                    foreach ($hours['baeckerei']['hours'] as $day => $time):
                    ?>
                        <div class="flex justify-between py-1 border-b border-gray-300 last:border-0">
                            <span class="font-medium"><?= $day ?></span>
                            <span><?= $time ?> Uhr</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Produktpalette -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php section_title('Unsere Produktpalette', 'Täglich frisch gebacken'); ?>

        <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
            <!-- Brote -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="text-center mb-6">
                    <div class="text-6xl mb-4">🍞</div>
                    <h3 class="text-2xl font-serif font-bold text-kissler-brown">
                        <?= $menu_baeckerei['brote']['title'] ?>
                    </h3>
                </div>
                <ul class="space-y-3">
                    <?php foreach ($menu_baeckerei['brote']['items'] as $item): ?>
                        <li class="flex items-center">
                            <span class="text-kissler-gold mr-2">✓</span>
                            <span class="text-gray-700"><?= $item ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Brötchen -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="text-center mb-6">
                    <div class="text-6xl mb-4">🥖</div>
                    <h3 class="text-2xl font-serif font-bold text-kissler-brown">
                        <?= $menu_baeckerei['broetchen']['title'] ?>
                    </h3>
                </div>
                <ul class="space-y-3">
                    <?php foreach ($menu_baeckerei['broetchen']['items'] as $item): ?>
                        <li class="flex items-center">
                            <span class="text-kissler-gold mr-2">✓</span>
                            <span class="text-gray-700"><?= $item ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Too Good To Go Section (CRITICAL!) -->
<section class="py-16 bg-green-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/3 bg-green-600 flex items-center justify-center p-8">
                        <img src="/assets/images/tgtg-logo-white.png" alt="Too Good To Go" class="w-32">
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h2 class="text-3xl font-serif font-bold text-kissler-brown mb-4">
                            Nachhaltigkeit bei Café Kissler
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Wir sind stolzer Partner von <strong>Too Good To Go</strong> und setzen uns aktiv gegen
                            Lebensmittelverschwendung ein. Retten Sie köstliche Backwaren zum vergünstigten Preis
                            und leisten Sie gleichzeitig einen Beitrag zum Umweltschutz!
                        </p>
                        <p class="text-gray-600 mb-6">
                            Laden Sie die Too Good To Go App herunter und sichern Sie sich unsere Überraschungstüten
                            mit frischen Broten und Backwaren.
                        </p>
                        <div class="flex gap-4">
                            <a href="#" class="inline-block">
                                <img src="/assets/images/app-store.png" alt="App Store" class="h-12">
                            </a>
                            <a href="#" class="inline-block">
                                <img src="/assets/images/google-play.png" alt="Google Play" class="h-12">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
```

---

### Öğleden Sonra (3-4 saat): Sondertorten Sayfası

#### 4.2 pages/sondertorten.php

```php
<?php
require_once '../config.php';
$page_meta = [
    'title' => 'Sondertorten - ' . SITE_NAME,
    'description' => 'Individuelle Hochzeitstorten, Geburtstagstorten und Torten für jeden Anlass. Ihre Traumtorte nach Maß.',
    'keywords' => 'Hochzeitstorte Friedberg, Geburtstagstorte, Torte bestellen Friedberg, individuelle Torte'
];
include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="relative h-96 flex items-center justify-center bg-cover bg-center"
         style="background-image: linear-gradient(rgba(218,165,32,0.7), rgba(218,165,32,0.7)), url('/assets/images/sondertorten/wedding-cake-hero.jpg');">
    <div class="text-center text-white px-4">
        <h1 class="text-5xl md:text-6xl font-serif font-bold mb-4">Sondertorten</h1>
        <p class="text-xl">Ihre Traumtorte – individuell gestaltet für Ihren besonderen Anlass</p>
    </div>
</section>

<!-- Intro Section -->
<section class="py-16">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <h2 class="text-4xl font-serif font-bold text-kissler-brown mb-6">
            Tortenträume werden wahr
        </h2>
        <p class="text-gray-600 text-lg mb-4">
            Ob Hochzeit, Geburtstag, Taufe oder Firmenfeier – wir kreieren für Sie die perfekte Torte,
            die nicht nur fantastisch schmeckt, sondern auch ein echter Hingucker ist.
        </p>
        <p class="text-gray-600 text-lg">
            Jede Torte ist ein Unikat, hergestellt mit hochwertigen Zutaten und viel Liebe zum Detail.
        </p>
    </div>
</section>

<!-- Galerie Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php section_title('Unsere Kreationen', 'Lassen Sie sich inspirieren'); ?>

        <!-- Masonry Grid -->
        <div class="grid md:grid-cols-3 gap-6">
            <?php
            $gallery_images = [
                ['file' => 'wedding-cake-1.jpg', 'title' => 'Elegante Hochzeitstorte'],
                ['file' => 'birthday-cake-1.jpg', 'title' => 'Bunte Geburtstagstorte'],
                ['file' => 'wedding-cake-2.jpg', 'title' => 'Mehrstöckige Hochzeitstorte'],
                ['file' => 'theme-cake-1.jpg', 'title' => 'Thementorte für Kinder'],
                ['file' => 'wedding-cake-3.jpg', 'title' => 'Minimalistische Hochzeitstorte'],
                ['file' => 'corporate-cake.jpg', 'title' => 'Firmentorte']
            ];

            foreach ($gallery_images as $img):
            ?>
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <img src="/assets/images/sondertorten/<?= $img['file'] ?>"
                         alt="<?= $img['title'] ?>"
                         class="w-full h-80 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
                        <p class="text-white font-semibold p-4"><?= $img['title'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Bestellprozess -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <?php section_title('So bestellen Sie Ihre Traumtorte', ''); ?>

        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Schritt 1 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-kissler-gold text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-kissler-brown mb-3">Inspiration finden</h3>
                    <p class="text-gray-600">
                        Schauen Sie sich unsere Galerie an oder bringen Sie eigene Ideen mit.
                    </p>
                </div>

                <!-- Schritt 2 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-kissler-gold text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-kissler-brown mb-3">Kontakt aufnehmen</h3>
                    <p class="text-gray-600">
                        Rufen Sie uns an oder nutzen Sie unser Anfrageformular.
                    </p>
                </div>

                <!-- Schritt 3 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-kissler-gold text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-kissler-brown mb-3">Genießen</h3>
                    <p class="text-gray-600">
                        Wir kreieren Ihre individuelle Torte – pünktlich zu Ihrem Anlass.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Anfrageformular -->
<section class="py-20 bg-kissler-cream">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-xl p-8">
            <h2 class="text-3xl font-serif font-bold text-kissler-brown mb-6 text-center">
                Torte anfragen
            </h2>

            <form action="/process-order.php" method="POST" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Name *</label>
                        <input type="text" name="name" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Telefon *</label>
                        <input type="tel" name="phone" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent">
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">E-Mail *</label>
                    <input type="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent">
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Anlass *</label>
                        <select name="occasion" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent">
                            <option value="">Bitte wählen</option>
                            <option value="hochzeit">Hochzeit</option>
                            <option value="geburtstag">Geburtstag</option>
                            <option value="taufe">Taufe</option>
                            <option value="firmenevent">Firmenevent</option>
                            <option value="sonstiges">Sonstiges</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Gewünschtes Datum *</label>
                        <input type="date" name="date" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent">
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Anzahl Personen</label>
                    <input type="number" name="guests" min="1"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Ihre Wünsche & Ideen</label>
                    <textarea name="message" rows="5"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent"
                              placeholder="Beschreiben Sie Ihre Vorstellungen: Größe, Geschmack, Farben, Design..."></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                            class="bg-kissler-brown hover:bg-kissler-brown/90 text-white px-12 py-4 rounded-lg font-semibold text-lg transition duration-300">
                        Anfrage absenden
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
```

---

## **GÜN 5: HAKKIMIZDA & KONTAKT + İÇERİK OPTİMİZASYONU** (6-7 saat)

### Sabah (3 saat): Hakkımızda & Kontakt Sayfaları

#### 5.1 pages/ueber-uns.php

```php
<?php
require_once '../config.php';
$page_meta = [
    'title' => 'Über uns - ' . SITE_NAME,
    'description' => 'Erfahren Sie mehr über die Geschichte und Philosophie von Café Kissler – Tradition und Qualität seit Generationen.',
    'keywords' => 'Café Kissler Geschichte, Friedberg Bäckerei, traditionelle Bäckerei'
];
include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="relative h-96 flex items-center justify-center bg-cover bg-center"
         style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/assets/images/about/team.jpg');">
    <div class="text-center text-white px-4">
        <h1 class="text-5xl md:text-6xl font-serif font-bold mb-4">Über uns</h1>
        <p class="text-xl">Tradition, Handwerk und Herz – das ist Café Kissler</p>
    </div>
</section>

<!-- Geschichte Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-serif font-bold text-kissler-brown mb-6">
                    Unsere Geschichte
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Café Kissler ist ein fester Bestandteil von Friedberg und steht für Qualität, Tradition und
                    Gemütlichkeit. Was als kleine Bäckerei begann, hat sich über die Jahre zu einem beliebten
                    Treffpunkt für die ganze Familie entwickelt.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-12">
                <div>
                    <img src="/assets/images/about/tradition.jpg"
                         alt="Traditionelles Handwerk"
                         class="rounded-lg shadow-xl">
                </div>
                <div>
                    <h3 class="text-2xl font-serif font-bold text-kissler-brown mb-4">
                        Handwerk mit Leidenschaft
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Unsere Backwaren werden noch nach traditionellen Rezepten hergestellt.
                        Wir verwenden ausgewählte Zutaten und nehmen uns die Zeit, die gutes Brot und
                        feine Backwaren brauchen.
                    </p>
                    <p class="text-gray-600">
                        Diese Hingabe zum Handwerk spürt man in jedem Bissen – und das schätzen unsere
                        Kunden seit Generationen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Werte Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php section_title('Unsere Werte', 'Wofür wir stehen'); ?>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-6xl mb-4">🏆</div>
                <h3 class="text-xl font-bold text-kissler-brown mb-3">Qualität</h3>
                <p class="text-gray-600">
                    Nur die besten Zutaten und traditionelle Rezepte für höchste Qualität.
                </p>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-6xl mb-4">❤️</div>
                <h3 class="text-xl font-bold text-kissler-brown mb-3">Herzlichkeit</h3>
                <p class="text-gray-600">
                    Familiäre Atmosphäre und persönlicher Service für alle Gäste.
                </p>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-6xl mb-4">🌱</div>
                <h3 class="text-xl font-bold text-kissler-brown mb-3">Nachhaltigkeit</h3>
                <p class="text-gray-600">
                    Partner von Too Good To Go – gemeinsam gegen Lebensmittelverschwendung.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Premium Mitglied Badge -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-kissler-cream p-8 rounded-lg shadow-lg text-center">
            <h3 class="text-2xl font-serif font-bold text-kissler-brown mb-4">
                Teil der Friedberger Gemeinschaft
            </h3>
            <p class="text-gray-600 mb-6">
                Als <strong>Premium-Mitglied von "Friedberg hat's"</strong> sind wir stolz darauf,
                Teil des lokalen Netzwerks zu sein und unsere Stadt aktiv mitzugestalten.
            </p>
            <img src="/assets/images/friedberg-hats-badge.png"
                 alt="Friedberg hat's Premium Mitglied"
                 class="h-24 mx-auto">
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
```

#### 5.2 pages/kontakt.php

```php
<?php
require_once '../config.php';
$page_meta = [
    'title' => 'Kontakt - ' . SITE_NAME,
    'description' => 'Besuchen Sie uns in der Kaiserstrasse 22-24 in Friedberg oder rufen Sie uns an. Wir freuen uns auf Sie!',
    'keywords' => 'Café Kissler Kontakt, Adresse Friedberg, Telefon'
];
include '../includes/header.php';
$hours = require_once '../data/opening-hours.php';
?>

<!-- Page Hero -->
<section class="relative h-64 flex items-center justify-center bg-kissler-brown">
    <div class="text-center text-white px-4">
        <h1 class="text-5xl font-serif font-bold mb-4">Kontakt</h1>
        <p class="text-xl">Wir freuen uns auf Ihren Besuch!</p>
    </div>
</section>

<!-- Kontakt Info Grid -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- Adresse -->
            <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                <div class="text-5xl text-kissler-brown mb-4">📍</div>
                <h3 class="font-bold text-xl text-kissler-brown mb-3">Adresse</h3>
                <p class="text-gray-600">
                    <?= ADDRESS ?>
                </p>
            </div>

            <!-- Telefon -->
            <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                <div class="text-5xl text-kissler-brown mb-4">📞</div>
                <h3 class="font-bold text-xl text-kissler-brown mb-3">Telefon</h3>
                <a href="tel:<?= CONTACT_PHONE ?>"
                   class="text-gray-600 hover:text-kissler-gold text-lg font-medium">
                    <?= CONTACT_PHONE ?>
                </a>
            </div>

            <!-- Email -->
            <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                <div class="text-5xl text-kissler-brown mb-4">✉️</div>
                <h3 class="font-bold text-xl text-kissler-brown mb-3">E-Mail</h3>
                <a href="mailto:<?= CONTACT_EMAIL ?>"
                   class="text-gray-600 hover:text-kissler-gold">
                    <?= CONTACT_EMAIL ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Öffnungszeiten -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-serif font-bold text-kissler-brown mb-8 text-center">
                Öffnungszeiten
            </h2>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Bäckerei -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-kissler-brown mb-6 text-center flex items-center justify-center">
                        <span class="text-3xl mr-2">🥖</span> Bäckerei
                    </h3>
                    <?php foreach ($hours['baeckerei']['hours'] as $day => $time): ?>
                        <div class="flex justify-between py-3 border-b border-gray-200 last:border-0">
                            <span class="font-medium text-gray-700"><?= $day ?></span>
                            <span class="text-kissler-brown font-semibold"><?= $time ?> Uhr</span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Café -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-kissler-brown mb-6 text-center flex items-center justify-center">
                        <span class="text-3xl mr-2">☕</span> Café
                    </h3>
                    <?php foreach ($hours['cafe']['hours'] as $day => $time): ?>
                        <div class="flex justify-between py-3 border-b border-gray-200 last:border-0">
                            <span class="font-medium text-gray-700"><?= $day ?></span>
                            <span class="text-kissler-brown font-semibold"><?= $time ?> Uhr</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="mt-8 bg-kissler-cream p-6 rounded-lg text-center">
                <p class="text-gray-700">
                    <strong>Wichtig:</strong> Bitte beachten Sie, dass die Bäckerei bereits um 07:00 Uhr öffnet,
                    während das Café um 08:00 Uhr seine Türen öffnet (außer samstags und sonntags).
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps -->
<section class="py-0">
    <div class="w-full h-96">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2555.123!2d8.754321!3d50.334567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sKaiserstrasse+22-24%2C+61169+Friedberg!5e0!3m2!1sde!2sde!4v1234567890"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</section>

<!-- Kontaktformular -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-3xl font-serif font-bold text-kissler-brown mb-6 text-center">
                Schreiben Sie uns
            </h2>

            <form action="/process-contact.php" method="POST" class="bg-white p-8 rounded-lg shadow-lg space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Name *</label>
                        <input type="text" name="name" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">E-Mail *</label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent">
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Betreff</label>
                    <input type="text" name="subject"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Nachricht *</label>
                    <textarea name="message" rows="5" required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kissler-gold focus:border-transparent"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                            class="bg-kissler-brown hover:bg-kissler-brown/90 text-white px-10 py-3 rounded-lg font-semibold transition duration-300">
                        Nachricht senden
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
```

---

### Öğleden Sonra (3-4 saat): JavaScript & SEO Optimizasyonu

#### 5.3 JavaScript İşlevselliği

```javascript
// assets/js/main.js

// Mobile Menu Toggle
document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener("click", function () {
      mobileMenu.classList.toggle("hidden");
    });
  }

  // Smooth Scroll
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // Lazy Loading Images
  if ("IntersectionObserver" in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.remove("lazy");
          imageObserver.unobserve(img);
        }
      });
    });

    document.querySelectorAll("img.lazy").forEach((img) => {
      imageObserver.observe(img);
    });
  }

  // Form Validation Enhancement
  const forms = document.querySelectorAll("form");
  forms.forEach((form) => {
    form.addEventListener("submit", function (e) {
      const requiredFields = form.querySelectorAll("[required]");
      let isValid = true;

      requiredFields.forEach((field) => {
        if (!field.value.trim()) {
          isValid = false;
          field.classList.add("border-red-500");
        } else {
          field.classList.remove("border-red-500");
        }
      });

      if (!isValid) {
        e.preventDefault();
        alert("Bitte füllen Sie alle Pflichtfelder aus.");
      }
    });
  });
});
```

#### 5.4 SEO Enhancements

```php
// sitemap.xml oluştur (sitemap.php)
<?php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= SITE_URL ?>/</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?= SITE_URL ?>/pages/cafe.php</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= SITE_URL ?>/pages/baeckerei.php</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= SITE_URL ?>/pages/sondertorten.php</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= SITE_URL ?>/pages/ueber-uns.php</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc><?= SITE_URL ?>/pages/kontakt.php</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.7</priority>
    </url>
</urlset>
```

```php
// robots.txt oluştur
<?php
header('Content-Type: text/plain');
?>
User-agent: *
Allow: /
Disallow: /includes/
Disallow: /components/
Disallow: /data/

Sitemap: <?= SITE_URL ?>/sitemap.xml
```

---

## **GÜN 6: TEST, OPTİMİZASYON & DEPLOY** (6-8 saat)

### Sabah (3-4 saat): Testing & Debugging

#### 6.1 Test Checklist

```
□ RESPONSIVE TEST
  □ Mobile (375px, 414px)
  □ Tablet (768px, 1024px)
  □ Desktop (1280px, 1920px)

□ BROWSER TEST
  □ Chrome
  □ Firefox
  □ Safari
  □ Edge

□ FUNCTIONALITY TEST
  □ Navigation çalışıyor mu?
  □ Mobile menu açılıyor mu?
  □ Formlar submit oluyor mu?
  □ Links doğru sayfalara gidiyor mu?
  □ Telefon linkler mobilde çalışıyor mu?
  □ Email linkler çalışıyor mu?

□ CONTENT TEST
  □ Tüm placeholder metinler dolduruldu mu?
  □ Görseller yükleniyor mu?
  □ Çalışma saatleri doğru mu?
  □ Telefon/adres bilgileri doğru mu?

□ PERFORMANCE TEST
  □ Page load time <3 saniye mi?
  □ Images optimize edildi mi?
  □ CSS minified mi?

□ SEO TEST
  □ Her sayfada meta tags var mı?
  □ H1 tags doğru mu?
  □ Alt texts ekli mi?
  □ Sitemap.xml erişilebilir mi?
```

### Öğleden Sonra (3-4 saat): Optimization & Deployment

#### 6.2 Image Optimization

```bash
# Terminal'de (ImageMagick kullanarak)
# Tüm JPG'leri optimize et
find assets/images -name "*.jpg" -exec mogrify -quality 85 -resize 1920x1920\> {} \;

# WebP formatına çevir (modern browsers için)
find assets/images -name "*.jpg" -exec cwebp -q 85 {} -o {}.webp \;
```

#### 6.3 CSS Build & Minify

```bash
# Production build
npm run build

# Output: assets/css/style.css (minified)
```

#### 6.4 Deployment Options

**Seçenek A: Shared Hosting (ör: 1&1, Strato)**

```bash
# FTP ile upload
# FileZilla kullanarak tüm dosyaları yükle
# .htaccess dosyası ekle:
```

```apache
# .htaccess
RewriteEngine On

# HTTPS redirect
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Clean URLs
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?page=$1 [L,QSA]

# Gzip compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
</IfModule>

# Browser caching
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>
```

**Seçenek B: Free Hosting (Demo için - InfinityFree)**

```
1. infinityfree.net'e kaydol
2. Subdomain al: cafe-kissler.epizy.com
3. cPanel'den File Manager ile upload
4. PHP version 7.4+ seç
```

---

## **GÜN 7: SUNUM HAZIRLIĞI** (4-5 saat)

### 7.1 Demo Materyalleri Hazırla

#### A) Karşılaştırma Dokümanı (PDF)

```
İÇERİK:
1. MEVCUT DURUM:
   - Trip.com çalışma saati kaosu (screenshot)
   - Google Maps'te sınırlı bilgi
   - Rakip Mirwald'ın sitesi

2. YENİ DURUM:
   - Cafe Kissler web sitesi (screenshots)
   - Mobil görünüm
   - Bäckerei/Café ayrımı

3. FAYDA ANALİZİ:
   - Veri kontrolü
   - SEO potansiyeli
   - Yeni gelir kanalları (Sondertorten)
```

#### B) Mobil Demo

```
1. QR kod oluştur → canlı siteye yönlendir
2. Kafe sahibine göster:
   "Müşterileriniz bu QR kodu okutup
   hemen menünüzü görebilir"
```

#### C) Pitch Skripti (Almanca)

```
AÇILIŞ (30 saniye):
"Guten Tag! Ich habe in den letzten Tagen etwas für Ihr Café
entwickelt. Darf ich Ihnen das kurz zeigen?"

SORUN (1 dakika):
"Wissen Sie, dass potenzielle Kunden unterschiedliche
Öffnungszeiten über Sie online finden? Auf Trip.com steht
einmal 9 Uhr, einmal 10 Uhr – aber Sie öffnen tatsächlich
um 7 Uhr (Bäckerei) bzw. 8 Uhr (Café)."

DEMO (2 dakika):
[Telefonda siteyi göster]
"Hier ist Ihre neue Website. Sehen Sie:
- Klare Trennung: Bäckerei und Café
- Korrekte Öffnungszeiten
- Ihre Spezialität Kaiserschmarrn prominent
- Sondertorten-Seite für Hochzeitstorten"

TGTG KÖPRÜ (1 dakika):
"Sie nutzen bereits Too Good To Go – das zeigt, dass Sie
moderne Tools nutzen, wenn sie praktischen Nutzen bringen.
Diese Website ist dasselbe: Sie löst das Problem der
falschen Informationen und bringt Ihnen neue Kunden."

KAPANIŞ (30 saniye):
"Die Website ist fertig. Ich kann sie heute noch online
stellen. Was halten Sie davon?"
```

---
