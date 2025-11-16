<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../components/section-title.php';
require_once __DIR__ . '/../components/cta-button.php';

$page_meta = [
    'title' => 'Café - ' . SITE_NAME,
    'description' => 'Genießen Sie Brunch, Mittagstisch und hausgemachte Spezialitäten wie Kaiserschmarrn in gemütlicher Atmosphäre.',
    'keywords' => 'Café Friedberg, Brunch Friedberg, Kaiserschmarrn, Mittagstisch Friedberg',
];

include __DIR__ . '/../includes/header.php';
$menu_cafe = require_once __DIR__ . '/../data/menu-cafe.php';
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
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="font-bold text-kissler-brown mb-3 text-xl">Café Öffnungszeiten:</h3>
                    <?php
                    $hours = require_once __DIR__ . '/../data/opening-hours.php';
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
<section class="py-16 bg-gray-50">
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

<?php include __DIR__ . '/../includes/footer.php'; ?>

