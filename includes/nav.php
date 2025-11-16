<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');

$nav_items = [
    'index' => ['label' => 'Startseite', 'url' => '/'],
    'cafe' => ['label' => 'Café', 'url' => '/pages/cafe.php'],
    'baeckerei' => ['label' => 'Bäckerei', 'url' => '/pages/baeckerei.php'],
    'sondertorten' => ['label' => 'Sondertorten', 'url' => '/pages/sondertorten.php'],
    'ueber-uns' => ['label' => 'Über uns', 'url' => '/pages/ueber-uns.php'],
    'kontakt' => ['label' => 'Kontakt', 'url' => '/pages/kontakt.php'],
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
            <button id="mobile-menu-btn" class="md:hidden focus:outline-none" aria-label="Menü öffnen/schließen">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6">
                <?php foreach ($nav_items as $key => $item): ?>
                    <li>
                        <a href="<?= $item['url'] ?>"
                           class="transition duration-200 pb-1 <?= $current_page === $key || ($key === 'index' && $current_page === 'index')
                               ? 'text-kissler-brown font-semibold border-b-2 border-kissler-brown'
                               : 'text-gray-700 hover:text-kissler-brown' ?>">
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


