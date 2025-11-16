<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../components/section-title.php';

$page_meta = [
    'title' => 'Bäckerei - ' . SITE_NAME,
    'description' => 'Täglich frische Brote, Brötchen und Backwaren aus eigener Backstube. Jetzt auch mit Too Good To Go gegen Lebensmittelverschwendung.',
    'keywords' => 'Bäckerei Friedberg, frische Brötchen, Brot Friedberg, Too Good To Go Friedberg',
];

include __DIR__ . '/../includes/header.php';
$menu_baeckerei = require_once __DIR__ . '/../data/menu-baeckerei.php';
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
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="font-bold text-kissler-brown mb-3 text-xl">Bäckerei Öffnungszeiten:</h3>
                    <?php
                    $hours = require_once __DIR__ . '/../data/opening-hours.php';
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

<!-- Too Good To Go Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden border border-kissler-brown">
                <div class="md:flex">
                    <div class="md:w-1/3 flex items-center justify-center p-8">
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

<?php include __DIR__ . '/../includes/footer.php'; ?>

