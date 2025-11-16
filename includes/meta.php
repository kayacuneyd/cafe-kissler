<?php
// Her sayfa için özel meta bilgileri
$meta_defaults = [
    'title' => SITE_NAME,
    'description' => SITE_DESCRIPTION,
    'keywords' => SEO_KEYWORDS,
    'og_image' => SITE_URL . '/assets/images/og-image.jpg',
];

// Sayfaya özel meta varsa override et
$meta = isset($page_meta) ? array_merge($meta_defaults, $page_meta) : $meta_defaults;
?>

<title><?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8') ?>">
<meta name="keywords" content="<?= htmlspecialchars($meta['keywords'], ENT_QUOTES, 'UTF-8') ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:description" content="<?= htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:image" content="<?= htmlspecialchars($meta['og_image'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:url" content="<?= htmlspecialchars(SITE_URL . $_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:type" content="website">

<!-- Favicon -->
<link rel="icon" type="image/png" href="/assets/images/favicon.png">


