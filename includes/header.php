
<?php

$baseUrl = '/Cebu';
$pageTitle = $pageTitle ?? 'Smart Tourist Navigator | Discover Cebu';
$pageDescription = $pageDescription ?? 'Discover Cebu attractions, local food, transport tips and travel routes.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
          content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/style.css">
    <script src="<?= $baseUrl ?>/assets/js/script.js" defer></script>
</head>

<body>

<header class="site-header" id="home">

    <a class="brand" href="<?= $baseUrl ?>/index.php#home">
        <span class="brand-mark">✦</span>
        <span>Smart Tourist <strong>Navigator</strong></span>
    </a>

    <button class="menu-toggle"
            id="menuToggle"
            aria-label="Toggle navigation"
            aria-expanded="false">
        ☰
    </button>

    <nav class="nav-links" id="navLinks">
        <a href="<?= $baseUrl ?>/index.php#home">Home</a>
        <a href="<?= $baseUrl ?>/index.php#explore">Destinations</a>
        <a href="<?= $baseUrl ?>/index.php#map-section">Map & Routes</a>
        <a href="<?= $baseUrl ?>/index.php#food">Local Food</a>
        <a href="<?= $baseUrl ?>/index.php#transport">Transport</a>
        <a href="<?= $baseUrl ?>/index.php#plan">Plan Trip</a>
    </nav>

    <a href="<?= $baseUrl ?>/index.php#explore" class="header-cta">
        Start Exploring ↗
    </a>

</header>
