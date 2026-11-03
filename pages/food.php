<?php
$pageTitle = "Cebu Local Food & Delicacies | Smart Tourist Navigator";
$pageDescription = "The ultimate guide to Cebu's local food, from Lechon and Sutukil to street food and pasalubong.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <title><?php echo $pageTitle; ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <!-- MAIN STYLESHEET -->
    <link rel="stylesheet" href="/Cebu/assets/css/style.css">

    <!-- FOOD SPECIFIC STYLESHEET -->
    <link rel="stylesheet" href="/Cebu/assets/css/food.css?v=<?= time(); ?>">
</head>
<body>

    <!-- HEADER NAVIGATION -->
    <header class="site-header" id="home">
        <a class="brand" href="/Cebu/index.php">
            <span class="brand-mark">✦</span>
            <span>Smart Tourist <strong>Navigator</strong></span>
        </a>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
        <nav class="nav-links" id="navLinks">
            <a href="/Cebu/index.php">Home</a>
            <a href="/Cebu/index.php#explore">Destinations</a>
            <a href="/Cebu/index.php#map-section">Map & Routes</a>
            <a href="/Cebu/index.php#food">Local Food</a>
            <a href="/Cebu/index.php#transport">Transport</a>
            <a href="/Cebu/index.php#plan">Plan Trip</a>
        </nav>
        <a href="/Cebu/index.php#explore" class="header-cta">Start Exploring ↗</a>
    </header>

    <main class="destination-detail-page">

        <!-- HERO SECTION -->
        <section class="hero detail-hero" style="background-image: url('/Cebu/assets/images/letchon.webp');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <span class="hero-eyebrow">A TASTE OF CEBU</span>
                <h1>Local Food &<br><em>Delicacies.</em></h1>
                <p>
                    Cebu is the culinary capital of the Visayas. From the world-famous 
                    Lechon to exotic street food, explore the flavors that define the island.
                </p>
            </div>
            <div class="hero-caption">
                <span>Cebu, Philippines</span>
                <span>Discover Cebu's Culinary Heritage</span>
            </div>
            <div class="hero-wave" aria-hidden="true">
                <svg class="wave-svg wave-back" viewBox="0 0 1440 120" preserveAspectRatio="none"><path d="M0,45 C180,105 360,0 540,48 S900,108 1080,48 S1260,0 1440,45 L1440,120 L0,120 Z"></path></svg>
                <svg class="wave-svg wave-front" viewBox="0 0 1440 120" preserveAspectRatio="none"><path d="M0,78 C180,10 360,115 540,75 S900,10 1080,75 S1260,115 1440,78 L1440,120 L0,120 Z"></path></svg>
            </div>
        </section>

        <!-- QUICK STATISTICS -->
        <section class="quick-stats-bar">
            <div class="stat-item">
                <span class="stat-label">MUST-TRY</span>
                <span class="stat-value">Cebu Lechon</span>
                <span class="stat-desc">Crispy, lemongrass-stuffed</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">PASALUBONG</span>
                <span class="stat-value">Dried Mangoes</span>
                <span class="stat-desc">Sweet & chewy carabao mangoes</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">STREET FOOD</span>
                <span class="stat-value">Ngohiong</span>
                <span class="stat-desc">Crispy five-spice spring rolls</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">FOOD SCENE</span>
                <span class="stat-value">Sugbo Mercado</span>
                <span class="stat-desc">IT Park night market</span>
            </div>
        </section>

        <!-- MAIN CONTENT AND SIDEBAR -->
        <div class="destination-layout">

            <article class="main-content">
                <section class="food-grid-container">
                    <h2 class="section-title">The Ultimate Cebu Food Guide</h2>
                    <p class="section-subtitle">Explore the essential flavors of Cebu. From famous roasts to street-side surprises, click on any dish to read our detailed guide.</p>
                    
                    <div class="food-grid">
                        <!-- 1. Lechon -->
                        <a href="/Cebu/pages/destinations/cebu-lechon.php" class="food-card">
                            <img src="/Cebu/assets/images/letchon.webp" alt="Cebu Lechon" loading="lazy">
                            <div class="food-card-overlay">
                                <h3>Cebu Lechon</h3>
                                <p>The undisputed king of Cebuano cuisine.</p>
                            </div>
                        </a>

                        <!-- 2. Dried Mangoes -->
                        <a href="/Cebu/pages/destinations/dried-mangoes.php" class="food-card">
                            <img src="/Cebu/assets/images/mango.webp" alt="Dried Mangoes" loading="lazy">
                            <div class="food-card-overlay">
                                <h3>Dried Mangoes</h3>
                                <p>Cebu's most famous sweet pasalubong.</p>
                            </div>
                        </a>

                        <!-- 3. Sutukil (Using a placeholder image if you don't have one, or remove it) -->
                        <a href="#" class="food-card">
                            <img src="/Cebu/assets/images/sutukil.jpg" alt="Sutukil" loading="lazy" onerror="this.src='/Cebu/assets/images/letchon.webp'">
                            <div class="food-card-overlay">
                                <h3>Sutukil</h3>
                                <p>Sugba, Tula, Kilaw. Fresh seafood feast.</p>
                            </div>
                        </a>

                        <!-- 4. Puso -->
                        <a href="/Cebu/pages/destinations/puso.php" class="food-card">
                            <img src="/Cebu/assets/images/puso.jpg" alt="Puso" loading="lazy">
                            <div class="food-card-overlay">
                                <h3>Puso (Hanging Rice)</h3>
                                <p>Rice steamed in woven coconut leaves.</p>
                            </div>
                        </a>

                        <!-- 5. Ngohiong -->
                        <a href="/Cebu/pages/destinations/ngohiong.php" class="food-card">
                            <img src="/Cebu/assets/images/ngohiong.jpg" alt="Ngohiong" loading="lazy">
                            <div class="food-card-overlay">
                                <h3>Ngohiong</h3>
                                <p>Crispy five-spice spring rolls.</p>
                            </div>
                        </a>

                        <!-- 6. Bibingka & Sikwate -->
                        <a href="/Cebu/pages/destinations/bibingka-sikwate.php" class="food-card">
                            <img src="/Cebu/assets/images/bibingka.jpg" alt="Bibingka and Sikwate" loading="lazy">
                            <div class="food-card-overlay">
                                <h3>Bibingka & Sikwate</h3>
                                <p>Classic Cebuano breakfast combo.</p>
                            </div>
                        </a>

                        <!-- 7. Chorizo de Cebu -->
                        <a href="#" class="food-card">
                            <img src="/Cebu/assets/images/chorizo.jpg" alt="Chorizo de Cebu" loading="lazy" onerror="this.src='/Cebu/assets/images/letchon.webp'">
                            <div class="food-card-overlay">
                                <h3>Chorizo de Cebu</h3>
                                <p>Sweet and savory red pork sausages.</p>
                            </div>
                        </a>

                        <!-- 8. Tuslob Buwa -->
                        <a href="#" class="food-card">
                            <img src="/Cebu/assets/images/tuslob.jpg" alt="Tuslob Buwa" loading="lazy" onerror="this.src='/Cebu/assets/images/letchon.webp'">
                            <div class="food-card-overlay">
                                <h3>Tuslob Buwa</h3>
                                <p>Bubbling pork brain and liver sauce dip.</p>
                            </div>
                        </a>

                        <!-- 9. Otap & Rosquillos -->
                        <a href="#" class="food-card">
                            <img src="/Cebu/assets/images/otap.jpg" alt="Otap and Rosquillos" loading="lazy" onerror="this.src='/Cebu/assets/images/mango.webp'">
                            <div class="food-card-overlay">
                                <h3>Otap & Rosquillos</h3>
                                <p>Flaky pastries and butter cookies.</p>
                            </div>
                        </a>
                    </div>
                </section>
            </article>

            <!-- SIDEBAR -->
            <aside class="sidebar">
                <div class="sidebar-card quote-card">
                    <span class="sidebar-pill">CULINARY GUIDE</span>
                    <h3>Cebu Food Guide</h3>
                    <p>
                        From street food to fine dining, discover the best flavors Cebu has to offer.
                    </p>
                    <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Best+Lechon+Cebu" target="_blank" rel="noopener noreferrer">
                        Find Lechon Spots ↗
                    </a>
                    <a class="button button-outline" href="#food-tips">
                        Read Food Tips
                    </a>
                    <p class="small-note">
                        Always check local hygiene and food safety practices.
                    </p>
                </div>

                <div class="sidebar-card related-guides">
                    <h4>RELATED GUIDES</h4>
                    <div class="sidebar-routes">
                        <a class="sidebar-link" href="/Cebu/index.php#explore">Explore Destinations →</a>
                        <a class="sidebar-link" href="/Cebu/index.php#transport">Transport Tips →</a>
                        <a class="sidebar-link" href="/Cebu/index.php#plan">Plan Your Trip →</a>
                    </div>
                </div>
            </aside>

        </div>

        <!-- WHERE TO EAT -->
        <section class="full-width-section">
            <div class="padded-content">
                <h2 class="section-title">Where to Eat in Cebu</h2>
                <p class="section-subtitle">Finding the best food in Cebu is part of the adventure. Here is a quick guide on where to go for the most authentic experiences.</p>
                
                <div class="elegant-grid">
                    <div class="elegant-item">
                        <h3>For Lechon</h3>
                        <p>Head to <strong>Zubuchon</strong>, <strong>Rico's Lechon</strong>, or <strong>CNT Lechon</strong>. For a more local, no-frills experience, try the stalls at <strong>Carbon Market</strong>.</p>
                    </div>
                    <div class="elegant-item">
                        <h3>For Sutukil</h3>
                        <p>Go to <strong>Mactan (Lapu-Lapu City)</strong> near the Mactan Shrine. You pick your fresh seafood and they cook it exactly how you want it.</p>
                    </div>
                    <div class="elegant-item">
                        <h3>For Street Food</h3>
                        <p><strong>Larsian</strong> in Fuente is the classic spot for grilled skewers. <strong>Carbon Market</strong> is great for a chaotic, authentic local experience.</p>
                    </div>
                    <div class="elegant-item">
                        <h3>For Night Market</h3>
                        <p><strong>Sugbo Mercado</strong> (IT Park) is the best spot for a wide variety of local and international food stalls in a clean, organized setting.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- EASY FOOD TIPS -->
        <section class="full-width-section alt-bg" id="food-tips">
            <div class="padded-content">
                <h2 class="section-title">Easy Food Tips for Travelers</h2>
                
                <div class="clean-list-grid">
                    <div class="clean-list-item">
                        <span class="list-number">01</span>
                        <div>
                            <h4>Bring cash.</h4>
                            <p>Most local eateries (carenderias) and street food stalls do not accept credit cards. Keep small bills handy.</p>
                        </div>
                    </div>
                    <div class="clean-list-item">
                        <span class="list-number">02</span>
                        <div>
                            <h4>Eat where it's busy.</h4>
                            <p>A stall with a long line of locals is usually a sign of fresh, safe, and delicious food.</p>
                        </div>
                    </div>
                    <div class="clean-list-item">
                        <span class="list-number">03</span>
                        <div>
                            <h4>The Lechon Sauce.</h4>
                            <p>Lechon is often served with a special vinegar-based sauce. Don't be afraid to ask for extra.</p>
                        </div>
                    </div>
                    <div class="clean-list-item">
                        <span class="list-number">04</span>
                        <div>
                            <h4>Food tours.</h4>
                            <p>If you're unsure where to start, consider joining a food tour to learn more about the history and culture behind each dish.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOD ITINERARY -->
        <section class="full-width-section">
            <div class="padded-content">
                <h2 class="section-title">A Perfect Food Day in Cebu</h2>
                
                <div class="clean-list-grid">
                    <div class="clean-list-item">
                        <span class="list-number">AM</span>
                        <div>
                            <p>Start with <strong>Bibingka & Sikwate</strong> or a local breakfast of <strong>Danggit</strong> with eggs and vinegar.</p>
                        </div>
                    </div>
                    <div class="clean-list-item">
                        <span class="list-number">Noon</span>
                        <div>
                            <p>Head to a Lechon house for a hearty meal of <strong>Cebu Lechon</strong> with <strong>Puso</strong> rice.</p>
                        </div>
                    </div>
                    <div class="clean-list-item">
                        <span class="list-number">PM</span>
                        <div>
                            <p>Grab some <strong>Ngohiong</strong> or <strong>Otap</strong> while exploring the city.</p>
                        </div>
                    </div>
                    <div class="clean-list-item">
                        <span class="list-number">Eve</span>
                        <div>
                            <p>Experience a <strong>Sutukil</strong> feast in Mactan or visit <strong>Sugbo Mercado</strong> for a variety of options.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EXPLORE MORE BUTTONS -->
        <div class="browse-destinations-wrap">
            <a class="button button-dark" href="/Cebu/index.php#explore">
                ← Back to Destinations
            </a>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="site-footer" id="about">
        <div class="footer-main">
            <div class="footer-brand">
                <a class="brand" href="/Cebu/index.php">
                    <span class="brand-mark">✦</span>
                    <span>Smart Tourist <strong>Navigator</strong></span>
                </a>
                <p>Your local guide to attractions, food, and travel information across Cebu.</p>
            </div>
            <div>
                <h4>Explore</h4>
                <a href="/Cebu/index.php#explore">Destinations</a>
                <a href="/Cebu/index.php#map-section">Map & Routes</a>
                <a href="/Cebu/index.php#food">Local Food</a>
            </div>
            <div>
                <h4>Plan</h4>
                <a href="/Cebu/index.php#transport">Transport Tips</a>
                <a href="/Cebu/index.php#plan">Plan Your Trip</a>
                <a href="/Cebu/index.php#about">About the Project</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© <span id="currentYear"></span> Smart Tourist Navigator — Cebu</span>
            <span>Made for curious travelers.</span>
        </div>
    </footer>

    <!-- NOTIFICATION MESSAGE -->
    <div id="toast" class="toast" role="status" aria-live="polite"></div>

    <!-- Script for Mobile Menu & Year -->
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', function() {
                navLinks.classList.toggle('open');
            });
        }
    </script>
</body>
</html>