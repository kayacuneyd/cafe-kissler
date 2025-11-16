<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../components/section-title.php';

$page_meta = [
    'title' => 'Über uns - ' . SITE_NAME,
    'description' => 'Erfahren Sie mehr über die Geschichte und Philosophie von Café Kissler – Tradition und Qualität seit Generationen.',
    'keywords' => 'Café Kissler Geschichte, Friedberg Bäckerei, traditionelle Bäckerei',
];

include __DIR__ . '/../includes/header.php';
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
                    <img src="/assets/images/hero/outside.webp"
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
        <div class="max-w-3xl mx-auto bg-gray-50 p-8 rounded-lg shadow-lg text-center">
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

<?php include __DIR__ . '/../includes/footer.php'; ?>

