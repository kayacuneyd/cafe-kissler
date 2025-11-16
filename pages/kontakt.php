<?php
require_once __DIR__ . '/../config.php';

$page_meta = [
    'title' => 'Kontakt - ' . SITE_NAME,
    'description' => 'Besuchen Sie uns in der Kaiserstrasse 22-24 in Friedberg oder rufen Sie uns an. Wir freuen uns auf Sie!',
    'keywords' => 'Café Kissler Kontakt, Adresse Friedberg, Telefon',
];

include __DIR__ . '/../includes/header.php';
$hours = require_once __DIR__ . '/../data/opening-hours.php';
?>

<!-- Page Hero -->
<section class="relative h-72 flex items-center justify-center bg-cover bg-center"
         style="background-image: linear-gradient(rgba(15,11,9,0.65), rgba(15,11,9,0.65)), url('/assets/images/hero/cafe-exterior.jpg');">
    <div class="text-center text-white px-4">
        <h1 class="text-5xl font-serif font-bold mb-4">Kontakt</h1>
        <p class="text-xl">Wir freuen uns auf Ihren Besuch!</p>
    </div>
</section>

<!-- Kontakt Info Grid -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-stretch">
            <div class="grid sm:grid-cols-2 lg:grid-cols-1 gap-8">
                <!-- Adresse -->
                <div class="text-center p-8 bg-white rounded-xl shadow-lg border border-kissler-cream">
                    <div class="text-sm uppercase tracking-[0.3em] text-kissler-gold mb-3">Standort</div>
                    <h3 class="font-bold text-2xl font-serif text-kissler-brown mb-4">Adresse</h3>
                    <p class="text-gray-600 leading-relaxed">
                        <?= ADDRESS ?>
                    </p>
                </div>

                <!-- Telefon -->
                <div class="text-center p-8 bg-white rounded-xl shadow-lg border border-kissler-cream">
                    <div class="text-sm uppercase tracking-[0.3em] text-kissler-gold mb-3">Direktkontakt</div>
                    <h3 class="font-bold text-2xl font-serif text-kissler-brown mb-4">Telefon</h3>
                    <a href="tel:<?= CONTACT_PHONE ?>"
                       class="text-gray-600 hover:text-kissler-gold text-xl font-semibold">
                        <?= CONTACT_PHONE ?>
                    </a>
                </div>

                <!-- Email -->
                <div class="text-center p-8 bg-white rounded-xl shadow-lg border border-kissler-cream">
                    <div class="text-sm uppercase tracking-[0.3em] text-kissler-gold mb-3">Schriftlich</div>
                    <h3 class="font-bold text-2xl font-serif text-kissler-brown mb-4">E-Mail</h3>
                    <a href="mailto:<?= CONTACT_EMAIL ?>"
                       class="text-gray-600 hover:text-kissler-gold text-lg">
                        <?= CONTACT_EMAIL ?>
                    </a>
                </div>
            </div>

            <!-- Ambience photo -->
            <div class="relative rounded-2xl overflow-hidden shadow-2xl min-h-[360px]">
                <img src="/assets/images/about/team.jpg"
                     alt="Team von Café Kissler begrüßt Gäste"
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <p class="text-sm uppercase tracking-[0.3em] mb-2 text-white/80">Persönlich vor Ort</p>
                    <h3 class="text-3xl font-serif font-bold mb-2">Wir nehmen uns Zeit</h3>
                    <p class="text-white/90">
                        Unser Team beantwortet Ihre Fragen gern direkt im Laden – sprechen Sie uns einfach an.
                    </p>
                </div>
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

            <div class="mt-8 bg-gray-50 p-6 rounded-lg text-center">
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

<?php include __DIR__ . '/../includes/footer.php'; ?>
