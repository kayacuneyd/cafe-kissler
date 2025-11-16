<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/cta-button.php';
require_once __DIR__ . '/components/section-title.php';

$page_meta = [
    'title' => SITE_NAME . ' - Traditionelle Bäckerei und Café in Friedberg',
    'description' => 'Genießen Sie frische Backwaren, gemütliches Ambiente und traditionelle deutsche Küche im Café Kissler in Friedberg.',
    'keywords' => 'Café Friedberg, Bäckerei Friedberg, Brunch Friedberg, Frühstück Friedberg',
];

include __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center bg-cover bg-center"
         style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('/assets/images/hero/outside.webp');">
    <div class="text-center text-white px-4">
        <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6">
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
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Warum Cafe Kissler Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php section_title('Warum Café Kissler?', 'Drei Gründe, uns zu besuchen'); ?>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                <div class="relative h-56 overflow-hidden">
                    <img src="/assets/images/baeckerei/bread-display.jpg"
                         alt="Frische Backwaren in der Auslage"
                         class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <span class="absolute top-4 left-4 bg-white/80 text-kissler-brown text-xs font-semibold uppercase tracking-widest px-3 py-1 rounded-full">
                        Backstube
                    </span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-serif font-bold text-kissler-brown mb-4 text-center">Frisch gebacken</h3>
                    <p class="text-gray-600 text-center">
                        Täglich ofenwarme Brote und Brötchen aus eigener Backstube – mit Ruhezeit und echter Handarbeit.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                <div class="relative h-56 overflow-hidden">
                    <img src="/assets/images/cafe/seating-area.jpg"
                         alt="Gemütlicher Innenbereich des Cafés"
                         class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <span class="absolute top-4 left-4 bg-white/80 text-kissler-brown text-xs font-semibold uppercase tracking-widest px-3 py-1 rounded-full">
                        Café
                    </span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-serif font-bold text-kissler-brown mb-4 text-center">Gemütliches Ambiente</h3>
                    <p class="text-gray-600 text-center">
                        Ein liebevoll gestalteter Gastraum, schneller Service und hausgemachte Klassiker lassen Sie abschalten.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                <div class="relative h-56 overflow-hidden">
                    <img src="/assets/images/sondertorten/wedding-cake-2.jpg"
                         alt="Mehrstöckige Hochzeitstorte"
                         class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <span class="absolute top-4 left-4 bg-white/80 text-kissler-brown text-xs font-semibold uppercase tracking-widest px-3 py-1 rounded-full">
                        Patisserie
                    </span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-serif font-bold text-kissler-brown mb-4 text-center">Individuelle Torten</h3>
                    <p class="text-gray-600 text-center">
                        Hochzeit, Jubiläum oder Firmenfeier – wir gestalten Torten, die optisch und geschmacklich überzeugen.
                    </p>
                </div>
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

<?php include __DIR__ . '/includes/footer.php'; ?>
