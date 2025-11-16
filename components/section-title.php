<?php

function section_title(string $title, string $subtitle = ''): void
{
    ?>
    <div class="text-center mb-12">
        <h2 class="text-4xl font-serif font-bold text-kissler-brown mb-4">
            <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>
        </h2>
        <?php if ($subtitle): ?>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                <?= htmlspecialchars($subtitle, ENT_QUOTES, 'UTF-8') ?>
            </p>
        <?php endif; ?>
    </div>
    <?php
}


