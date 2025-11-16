<?php

function cta_button(string $text, string $url, string $style = 'primary'): void
{
    $classes = $style === 'primary'
        ? 'bg-kissler-brown hover:bg-kissler-brown/90 text-white'
        : 'bg-white hover:bg-gray-50 text-kissler-brown border-2 border-kissler-brown';
    ?>
    <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>"
       class="<?= $classes ?> px-8 py-3 rounded-lg font-semibold transition duration-300 inline-block">
        <?= htmlspecialchars($text, ENT_QUOTES, 'UTF-8') ?>
    </a>
    <?php
}


