<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../components/section-title.php';

$page_meta = [
    'title' => 'Sondertorten - ' . SITE_NAME,
    'description' => 'Individuelle Hochzeitstorten, Geburtstagstorten und Torten für jeden Anlass. Ihre Traumtorte nach Maß.',
    'keywords' => 'Hochzeitstorte Friedberg, Geburtstagstorte, Torte bestellen Friedberg, individuelle Torte',
];

include __DIR__ . '/../includes/header.php';
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

        <div class="grid md:grid-cols-3 gap-6">
            <?php
            $gallery_images = [
                ['file' => 'wedding-cake-1.jpg', 'title' => 'Elegante Hochzeitstorte'],
                ['file' => 'birthday-cake-1.jpg', 'title' => 'Bunte Geburtstagstorte'],
                ['file' => 'wedding-cake-2.jpg', 'title' => 'Mehrstöckige Hochzeitstorte'],
                ['file' => 'theme-cake-1.jpg', 'title' => 'Thementorte für Kinder'],
                ['file' => 'wedding-cake-3.jpg', 'title' => 'Minimalistische Hochzeitstorte'],
                ['file' => 'corporate-cake.jpg', 'title' => 'Firmentorte'],
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
                    <div class="w-20 h-20 bg-kissler-brown text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-kissler-brown mb-3">Inspiration finden</h3>
                    <p class="text-gray-600">
                        Schauen Sie sich unsere Galerie an oder bringen Sie eigene Ideen mit.
                    </p>
                </div>

                <!-- Schritt 2 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-kissler-brown text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-kissler-brown mb-3">Kontakt aufnehmen</h3>
                    <p class="text-gray-600">
                        Rufen Sie uns an oder nutzen Sie unser Anfrageformular.
                    </p>
                </div>

                <!-- Schritt 3 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-kissler-brown text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
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
<section class="py-20 bg-gray-50">
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

<?php include __DIR__ . '/../includes/footer.php'; ?>

