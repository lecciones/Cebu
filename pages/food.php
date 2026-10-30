<?php
$pageTitle = "Cebu Local Food & Delicacies | Smart Tourist Navigator";
$pageDescription = "The ultimate guide to Cebu's local food, from Lechon and Sutukil to street food and pasalubong.";

include __DIR__ . '/../includes/header.php';
?>

<link rel="stylesheet" href="../assets/css/food.css">

<main class="destination-detail-page">

    <!-- HERO SECTION -->
    <section class="hero detail-hero" style="background-image: url('../assets/images/letchon.webp');">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="hero-eyebrow">A TASTE OF CEBU</span>
            <h1>Local Food &<br><em>Delicacies.</em></h1>
            <p>
                Cebu is the culinary capital of the Visayas. From the world-famous 
                Lechon to sweet Dried Mangoes, explore the flavors that define the island.
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
        </div>
        <div class="stat-item">
            <span class="stat-label">PASALUBONG</span>
            <span class="stat-value">Dried Mangoes</span>
        </div>
        <div class="stat-item">
            <span class="stat-label">STREET FOOD</span>
            <span class="stat-value">Ngohiong</span>
        </div>
        <div class="stat-item">
            <span class="stat-label">FOOD SCENE</span>
            <span class="stat-value">Sugbo Mercado</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">
            <section class="food-grid-container">
                <h2 class="section-title">Must-Try Food & Delicacies</h2>
                <p class="section-subtitle">Explore the essential flavors of Cebu. Click on any dish to read our detailed guide.</p>
                
                <div class="food-grid">
                    <!-- 1. Lechon -->
                    <a href="destinations/cebu-lechon.php" class="food-card-item">
                        <div class="card-image-wrapper">
                            <img src="../assets/images/letchon.webp" alt="Cebu Lechon" class="food-card-image">
                        </div>
                        <div class="food-card-content">
                            <h3>Cebu Lechon</h3>
                            <p>The undisputed king of Cebuano cuisine. Crispy skin, lemongrass-stuffed, and incredibly flavorful.</p>
                        </div>
                    </a>

                    <!-- 2. Dried Mangoes -->
                    <a href="destinations/dried-mangoes.php" class="food-card-item">
                        <div class="card-image-wrapper">
                            <img src="../assets/images/mango.webp" alt="Dried Mangoes" class="food-card-image">
                        </div>
                        <div class="food-card-content">
                            <h3>Dried Mangoes</h3>
                            <p>Cebu's most famous pasalubong. Sweet, chewy, and made from the best carabao mangoes.</p>
                        </div>
                    </a>

                    <!-- 3. Sutukil -->
                    <div class="food-card-item text-only">
                        <div class="food-card-content">
                            <h3>Sutukil</h3>
                            <p>A unique dining concept: <em>Sugba</em> (grilled), <em>Tula</em> (soup), and <em>Kilaw</em> (raw marinated seafood). Best experienced in Mactan.</p>
                        </div>
                    </div>

                    <!-- 4. Puso -->
                    <a href="destinations/puso.php" class="food-card-item">
                        <div class="card-image-wrapper">
                            <img src="../assets/images/puso.jpg" alt="Puso" class="food-card-image">
                        </div>
                        <div class="food-card-content">
                            <h3>Puso (Hanging Rice)</h3>
                            <p>Rice steamed inside woven coconut leaves. The perfect partner to Lechon and street BBQ.</p>
                        </div>
                    </a>

                    <!-- 5. Ngohiong -->
                    <a href="destinations/ngohiong.php" class="food-card-item">
                        <div class="card-image-wrapper">
                            <img src="../assets/images/ngohiong.jpg" alt="Ngohiong" class="food-card-image">
                        </div>
                        <div class="food-card-content">
                            <h3>Ngohiong</h3>
                            <p>Crispy five-spice spring rolls. A popular and affordable Cebuano street food snack.</p>
                        </div>
                    </a>

                    <!-- 6. Bibingka & Sikwate -->
                    <a href="destinations/bibingka-sikwate.php" class="food-card-item">
                        <div class="card-image-wrapper">
                            <img src="../assets/images/bibingka.jpg" alt="Bibingka and Sikwate" class="food-card-image">
                        </div>
                        <div class="food-card-content">
                            <h3>Bibingka & Sikwate</h3>
                            <p>Warm rice cake paired with thick, local hot chocolate. The classic Cebuano breakfast.</p>
                        </div>
                    </a>

                    <!-- 7. Otap & Rosquillos -->
                    <div class="food-card-item text-only">
                        <div class="food-card-content">
                            <h3>Otap & Rosquillos</h3>
                            <p>Flaky, sugar-dusted pastries and ring-shaped butter cookies. Perfect to bring home.</p>
                        </div>
                    </div>

                    <!-- 8. Danggit -->
                    <div class="food-card-item text-only">
                        <div class="food-card-content">
                            <h3>Danggit</h3>
                            <p>Sun-dried salted rabbitfish. A savory breakfast staple often paired with eggs and vinegar.</p>
                        </div>
                    </div>

                    <!-- 9. Tuslob Buwa -->
                    <div class="food-card-item text-only">
                        <div class="food-card-content">
                            <h3>Tuslob Buwa</h3>
                            <p>A unique street food experience where you dip rice or puso into a bubbling pot of pork brain and liver sauce.</p>
                        </div>
                    </div>

                    <!-- 10. Humba -->
                    <div class="food-card-item text-only">
                        <div class="food-card-content">
                            <h3>Humba</h3>
                            <p>A sweet and savory braised pork dish cooked with soy sauce, vinegar, and fermented black beans. A Cebuano comfort food.</p>
                        </div>
                    </div>
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
                    <a class="sidebar-link" href="../index.php#explore">Explore Destinations →</a>
                    <a class="sidebar-link" href="../index.php#transport">Transport Tips →</a>
                    <a class="sidebar-link" href="../index.php#plan">Plan Your Trip →</a>
                </div>
            </div>
        </aside>

    </div>

    <!-- WHERE TO EAT -->
    <section class="full-width-section">
        <div class="section-inner">
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
        <div class="section-inner">
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
        <div class="section-inner">
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
    <div class="browse-destinations-wrap" style="text-align: center; padding: 60px 5%; background: var(--paper);">
        <a class="button button-dark" href="../index.php#explore" style="display: inline-flex; width: auto; padding: 16px 36px; border-radius: 8px;">
            ← Back to Destinations
        </a>
    </div>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>