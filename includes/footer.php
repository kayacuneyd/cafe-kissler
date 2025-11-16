<?php
// opening-hours verisini her seferinde array olarak almak için require kullan
$hours = require __DIR__ . '/../data/opening-hours.php';

// Güvenlik: beklenen yapı yoksa boş array'e düş
if (!is_array($hours) || !isset($hours['baeckerei']['hours']) || !is_array($hours['baeckerei']['hours'])) {
    $hours['baeckerei']['hours'] = [];
}
?>

<footer class="bg-gray-900 text-gray-300">
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
                    <p>Tel:
                        <a href="tel:<?= CONTACT_PHONE ?>" class="hover:text-kissler-gold">
                            <?= CONTACT_PHONE ?>
                        </a>
                    </p>
                    <p>Email:
                        <a href="mailto:<?= CONTACT_EMAIL ?>" class="hover:text-kissler-gold">
                            <?= CONTACT_EMAIL ?>
                        </a>
                    </p>
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

    <script src="/assets/js/main.js"></script>
</footer>

</body>
</html>


