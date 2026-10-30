
<?php
$baseUrl = '/Cebu';
?>

<footer class="site-footer" id="about">

    <div class="footer-main">

        <div class="footer-brand">
            <a class="brand" href="<?= $baseUrl ?>/index.php#home">
                <span class="brand-mark">✦</span>
                <span>Smart Tourist <strong>Navigator</strong></span>
            </a>

            <p>
                Your local guide to attractions, food,
                and travel information across Cebu.
            </p>
        </div>

        <div>
            <h4>Explore</h4>
            <a href="<?= $baseUrl ?>/index.php#explore">Destinations</a>
            <a href="<?= $baseUrl ?>/index.php#map-section">Map & Routes</a>
            <a href="<?= $baseUrl ?>/index.php#food">Local Food</a>
        </div>

        <div>
            <h4>Plan</h4>
            <a href="<?= $baseUrl ?>/index.php#transport">Transport Tips</a>
            <a href="<?= $baseUrl ?>/index.php#plan">Plan Your Trip</a>
            <a href="<?= $baseUrl ?>/index.php#about">About the Project</a>
        </div>

    </div>

    <div class="footer-bottom">
        <span>
            © <span id="currentYear"></span>
            Smart Tourist Navigator — Cebu
        </span>

        <span>Made for curious travelers.</span>
    </div>

</footer>

<div id="toast" class="toast" role="status" aria-live="polite"></div>

</body>
</html>
