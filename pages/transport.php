<?php
$pageTitle = "Transport Guide | Smart Tourist Navigator";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">

    <!-- Transport CSS -->
    <link rel="stylesheet" href="/Cebu/assets/css/transport.css?v=3">

    <!-- HERO AND WAVE STYLES -->
    <style>
        /* HERO SECTION */
        .transport-hero {
            position: relative;
            min-height: 450px;
            height: 450px;
            overflow: hidden;

            display: flex;
            align-items: center;

            padding: 60px 7% 90px;

            background-image:
                linear-gradient(
                    90deg,
                    rgba(5, 35, 49, 0.94) 0%,
                    rgba(5, 35, 49, 0.76) 42%,
                    rgba(5, 35, 49, 0.20) 100%
                ),
                url('/Cebu/assets/images/transport/transport-hero.jpg');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            color: white;
        }

        .transport-hero .hero-overlay {
            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    0deg,
                    rgba(5, 35, 49, 0.30),
                    transparent 45%
                );

            pointer-events: none;
        }

        .transport-hero .hero-content {
            position: relative;
            z-index: 3;

            width: min(650px, 100%);
        }

        .transport-hero .eyebrow {
            display: inline-block;

            margin-bottom: 13px;

            color: #f4c95d;

            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .transport-hero h1 {
            margin: 0 0 18px;

            color: white;

            font-family: 'DM Sans', Arial, sans-serif;
            font-size: clamp(42px, 6vw, 68px);
            font-weight: 800;

            line-height: 1.05;
            letter-spacing: -2px;
        }

        .transport-hero h1 em {
            color: #f4c95d;

            font-family: 'Playfair Display', Georgia, serif;
            font-weight: 600;
        }

        .transport-hero .hero-content p {
            max-width: 460px;

            margin-bottom: 25px;

            color: #e1edf2;

            font-size: 13px;
            line-height: 1.9;
        }

        .hero-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 13px 20px;

            border-radius: 6px;

            background: #0077B6;

            color: white;

            font-size: 12px;
            font-weight: 700;

            transition: 0.25s ease;
        }

        .hero-button:hover {
            background: #0788c9;
            transform: translateY(-3px);
        }

        .hero-caption {
            position: absolute;
            z-index: 4;

            left: 7%;
            right: 7%;
            bottom: 45px;

            display: flex;
            justify-content: space-between;

            color: #e3edf1;

            font-size: 9px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* ANIMATED WAVE */
        .hero-wave {
            position: absolute;
            z-index: 5;

            left: 0;
            bottom: -1px;

            width: 100%;
            height: 75px;

            overflow: hidden;
            pointer-events: none;
        }

        .wave-svg {
            position: absolute;

            left: 0;
            bottom: 0;

            width: 200%;
            height: 100%;
        }

        .wave-back {
            animation: waveMoveBack 13s linear infinite;
        }

        .wave-front {
            animation: waveMoveFront 9s linear infinite;
        }

        .wave-back path {
            fill: #dff2f7;
            opacity: 0.75;
        }

        .wave-front path {
            fill: var(--paper);
        }

        @keyframes waveMoveBack {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes waveMoveFront {
            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0);
            }
        }

        /* INTRO AND CONTENT SPACING */
        .quick-jump-section {
            padding-top: 35px;
        }

        .visual-guide-section {
            padding-top: 5px;
        }

        /* ========================================
           EXPANDABLE INFORMATION
        ======================================== */

        .transport-more {
            margin-top: 18px;
            border: 1px solid #e1eaf0;
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
        }

        .transport-more summary {
            padding: 14px 16px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;

            cursor: pointer;

            color: #0077B6;
            font-size: 13px;
            font-weight: 700;

            list-style: none;

            transition: background 0.2s ease;
        }

        .transport-more summary::-webkit-details-marker {
            display: none;
        }

        .transport-more summary::after {
            content: "+";
            font-size: 22px;
            font-weight: 500;
        }

        .transport-more[open] summary::after {
            content: "−";
        }

        .transport-more summary:hover {
            background: #f1f8fc;
        }

        .transport-more-content {
            padding: 5px 16px 18px;

            color: #526675;
            font-size: 13px;
            line-height: 1.8;
        }

        .transport-more-content h4 {
            margin: 14px 0 7px;
            color: #12384b;
            font-size: 15px;
        }

        .transport-more-content ul,
        .transport-more-content ol {
            padding-left: 20px;
            margin: 8px 0;
        }

        .transport-more-content li {
            margin-bottom: 6px;
        }

        .transport-more-image {
            width: 100%;
            height: 190px;

            display: block;

            object-fit: cover;

            border-radius: 8px;
            margin: 12px 0;
        }

        .transport-more-note {
            padding: 12px;
            margin-top: 12px;

            background: #edf7fb;

            border-left: 3px solid #0077B6;
            border-radius: 5px;
        }

        /* RESPONSIVE HERO */
        @media (max-width: 800px) {
            .transport-hero {
                min-height: 430px;
                height: 430px;

                padding: 50px 6% 90px;

                background-position: center;
            }

            .transport-hero h1 {
                font-size: clamp(39px, 8vw, 55px);
            }

            .hero-caption {
                left: 6%;
                right: 6%;
                bottom: 40px;

                font-size: 8px;
            }
        }

        @media (max-width: 560px) {
            .transport-hero {
                min-height: 440px;
                height: 440px;

                padding: 45px 6% 95px;

                background-position: 60% center;
            }

            .transport-hero h1 {
                font-size: 42px;
                letter-spacing: -1.5px;
            }

            .transport-hero .hero-content p {
                font-size: 12px;
            }

            .hero-caption {
                bottom: 35px;
                gap: 15px;
            }

            .hero-wave {
                height: 55px;
            }

            .transport-more-image {
                height: 170px;
            }

            .transport-more summary {
                padding: 13px;
            }

            .transport-more-content {
                padding: 5px 13px 15px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .wave-svg {
                animation: none !important;
            }
        }
    </style>

</head>

<body>

<!-- ========================================
     HEADER / NAVIGATION
======================================== -->

<header class="site-header" id="home">

    <a class="brand" href="/Cebu/index.php">
        <span class="brand-mark">✦</span>

        <span>
            Smart Tourist <strong>Navigator</strong>
        </span>
    </a>

    <button
        class="menu-toggle"
        id="menuToggle"
        aria-label="Toggle navigation"
        aria-expanded="false">
        ☰
    </button>

    <nav class="nav-links" id="navLinks">

        <a href="/Cebu/index.php">Home</a>

        <a href="/Cebu/pages/destination.php">Destinations</a>

        <a href="/Cebu/index.php#map-section">Map & Routes</a>

        <a href="/Cebu/pages/food.php">Local Food</a>

        <a href="/Cebu/pages/transport.php" class="active">Transport</a>

        <a href="/Cebu/index.php#plan">Plan Trip</a>

    </nav>

    <a href="/Cebu/index.php#explore" class="header-cta">
        Start Exploring ↗
    </a>

</header>


<main>

<!-- ========================================
     TRANSPORT HERO SECTION
======================================== -->

<section class="hero transport-hero">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <span class="eyebrow hero-eyebrow">
            GETTING AROUND CEBU
        </span>

        <h1>
            Transportation<br>
            <em>Made Easier.</em>
        </h1>

        <p>
            Discover how to get around Cebu. From traditional
            jeepneys and modern buses to taxis, ride-hailing
            services, and island transfers.
        </p>

    </div>

    <div class="hero-caption">

        <span>03 / TRANSPORT & NAVIGATION</span>

        <span>Cebu, Philippines</span>

    </div>

    <!-- ANIMATED WAVE -->

    <div class="hero-wave" aria-hidden="true">

        <svg class="wave-svg wave-back"
             viewBox="0 0 2880 120"
             preserveAspectRatio="none">

            <path d="M0 50 C240 0 480 100 720 50 S1200 0 1440 50 S1920 100 2160 50 S2640 0 2880 50 V120 H0 Z">
            </path>

        </svg>

        <svg class="wave-svg wave-front"
             viewBox="0 0 2880 120"
             preserveAspectRatio="none">

            <path d="M0 65 C240 110 480 20 720 65 S1200 110 1440 65 S1920 20 2160 65 S2640 110 2880 65 V120 H0 Z">
            </path>

        </svg>

    </div>

</section>


<!-- ========================================
     QUICK NAVIGATION
======================================== -->

<section class="quick-jump-section">

    <div class="quick-jump">

        <a href="#jeepneys" class="jump-chip">🚌 Jeepneys</a>

        <a href="#ride-hailing" class="jump-chip">🚕 Taxis & Apps</a>

        <a href="#buses" class="jump-chip">🚍 Buses</a>

        <a href="#provincial" class="jump-chip">🚐 Provincial Travel</a>

        <a href="#initiatives" class="jump-chip">🌱 New Initiatives</a>

        <a href="#travel-tips" class="jump-chip">💡 Travel Tips</a>

    </div>

</section>


<!-- ========================================
     TRANSPORTATION GUIDE
======================================== -->

<section class="visual-guide-section">

    <div class="guide-wrapper">


        <!-- ========================================
             1. JEEPNEY SYSTEM
        ======================================== -->

        <article class="transport-module" id="jeepneys">

            <div class="module-header">

                <div class="module-icon">🚌</div>

                <div class="module-heading">

                    <span class="module-tag">LOCAL TRANSPORT</span>

                    <h2>The Jeepney System</h2>

                </div>

            </div>

            <div class="module-description">

                <p>
                    Jeepneys are one of the most recognizable forms
                    of public transportation in the Philippines.
                    They are a common and affordable way to travel
                    around Cebu City.
                </p>

            </div>

            <div class="module-grid">

                <div class="info-card">

                    <h3>How to Ride</h3>

                    <div class="step-list">

                        <div class="step-item">
                            <span class="step-number">01</span>
                            <div>
                                <strong>Find your route</strong>
                                <p>Check the route sign displayed on the front or side of the jeepney.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <span class="step-number">02</span>
                            <div>
                                <strong>Get on board</strong>
                                <p>Wait for the jeepney to stop safely before entering.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <span class="step-number">03</span>
                            <div>
                                <strong>Pay your fare</strong>
                                <p>Pass your payment to the driver or conductor. Say "Bayad palihug."</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <span class="step-number">04</span>
                            <div>
                                <strong>Get off</strong>
                                <p>Tell the driver when you are approaching your destination.</p>
                            </div>
                        </div>

                    </div>

                    <details class="transport-more">

                        <summary>More Jeepney Riding Information</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/jeepney.jpg"
                                alt="Traditional jeepney in Cebu"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Additional Riding Tips</h4>

                            <ul>
                                <li>Prepare smaller bills and coins when possible.</li>
                                <li>Ask the driver if you are unsure about the destination.</li>
                                <li>Keep your belongings secure while commuting.</li>
                                <li>Wait until the vehicle has stopped before getting off.</li>
                            </ul>

                            <div class="transport-more-note">
                                <strong>Remember:</strong>
                                Confirm the route and current fare before boarding.
                            </div>

                        </div>

                    </details>

                </div>


                <div class="info-card highlight-card">

                    <h3>Common Route Examples</h3>

                    <p class="card-description">
                        Examples of routes commonly referenced in Cebu City:
                    </p>

                    <div class="code-examples">

                        <div class="code-pill">
                            <strong>04L</strong>
                            <span>Lahug ↔ Ayala</span>
                        </div>

                        <div class="code-pill">
                            <strong>17B</strong>
                            <span>IT Park ↔ Carbon</span>
                        </div>

                        <div class="code-pill">
                            <strong>13C</strong>
                            <span>Talamban ↔ Colon</span>
                        </div>

                    </div>

                    <div class="module-tip">
                        <strong>Travel reminder:</strong>
                        <p>
                            Route codes and destinations may change.
                            Confirm the route with the driver before boarding.
                        </p>
                    </div>

                    <details class="transport-more">

                        <summary>More About Jeepney Routes</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/modern-jeepney.jpg"
                                alt="Modern public jeepney"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>How to Identify Your Route</h4>

                            <ul>
                                <li>Check the route number or code displayed on the vehicle.</li>
                                <li>Look for the destination signs.</li>
                                <li>Ask the driver if the jeepney passes your destination.</li>
                                <li>Use a map to understand your starting point and destination.</li>
                            </ul>

                            <div class="transport-more-note">
                                <strong>Important:</strong>
                                The route examples above are for general reference.
                                Verify current routes locally before travelling.
                            </div>

                        </div>

                    </details>

                </div>


                <div class="info-card">

                    <h3>Useful Cebuano Phrases</h3>

                    <div class="phrase-box">

                        <div class="phrase-item">
                            <span>Bayad palihug</span>
                            <strong>Here's my payment, please.</strong>
                        </div>

                        <div class="phrase-item">
                            <span>Para po!</span>
                            <strong>Please stop.</strong>
                        </div>

                        <div class="phrase-item">
                            <span>Lugar lang</span>
                            <strong>Stop here, please.</strong>
                        </div>

                        <div class="phrase-item">
                            <span>Pila ang plete?</span>
                            <strong>How much is the fare?</strong>
                        </div>

                    </div>

                    <details class="transport-more">

                        <summary>Learn More Useful Cebuano Words</summary>

                        <div class="transport-more-content">

                            <h4>Helpful Expressions</h4>

                            <ul>
                                <li><strong>Asa ni padulong?</strong> – Where is this going?</li>
                                <li><strong>Moagi ni sa...?</strong> – Does this pass by...?</li>
                                <li><strong>Asa ko munaog?</strong> – Where should I get off?</li>
                                <li><strong>Salamat.</strong> – Thank you.</li>
                            </ul>

                            <div class="transport-more-note">
                                Learning a few local phrases can make communicating
                                with drivers and other passengers easier.
                            </div>

                        </div>

                    </details>

                </div>

            </div>

            <p class="micro-note">
                Note: Jeepney fares depend on the current government
                fare schedule and applicable discounts. Confirm the
                fare before travelling.
            </p>

        </article>


        <!-- ========================================
             2. RIDE-HAILING AND TAXIS
        ======================================== -->

        <article class="transport-module" id="ride-hailing">

            <div class="module-header">

                <div class="module-icon">🚕</div>

                <div class="module-heading">
                    <span class="module-tag">PRIVATE TRANSPORT</span>
                    <h2>Ride-Hailing & Taxis</h2>
                </div>

            </div>

            <div class="module-description">
                <p>
                    For a more convenient and direct journey,
                    Cebu offers traditional taxis and app-based
                    transportation services.
                </p>
            </div>

            <div class="module-grid">

                <div class="info-card">

                    <h3>Available Apps</h3>

                    <div class="app-list">

                        <div class="app-item">
                            <div class="app-icon">G</div>
                            <div>
                                <strong>Grab</strong>
                                <p>Book a car or taxi through the mobile application.</p>
                            </div>
                        </div>

                        <div class="app-item">
                            <div class="app-icon">i</div>
                            <div>
                                <strong>InDrive</strong>
                                <p>Offers a fare-bidding transportation option.</p>
                            </div>
                        </div>

                        <div class="app-item">
                            <div class="app-icon">A</div>
                            <div>
                                <strong>Angkas</strong>
                                <p>Motorcycle taxi service for eligible routes.</p>
                            </div>
                        </div>

                        <div class="app-item">
                            <div class="app-icon">M</div>
                            <div>
                                <strong>Move It</strong>
                                <p>Motorcycle ride-hailing service.</p>
                            </div>
                        </div>

                    </div>

                    <details class="transport-more">

                        <summary>How to Book a Ride</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/grab.jpg"
                                alt="Ride-hailing vehicle"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Booking Steps</h4>

                            <ol>
                                <li>Open your preferred ride-hailing application.</li>
                                <li>Enter your pickup location.</li>
                                <li>Enter your destination.</li>
                                <li>Review the estimated fare and ride details.</li>
                                <li>Confirm your booking.</li>
                                <li>Verify the driver and vehicle before getting in.</li>
                            </ol>

                            <div class="transport-more-note">
                                <strong>Safety reminder:</strong>
                                Always verify the vehicle details shown in the application.
                            </div>

                        </div>

                    </details>

                </div>


                <div class="info-card highlight-card">

                    <h3>Traditional Taxis</h3>

                    <p>
                        Metered taxis are available around Cebu City,
                        shopping centers, hotels, and transport terminals.
                    </p>

                    <div class="fare-highlight">
                        <span class="fare-label">Taxi fare</span>
                        <div class="fare-amount">Metered</div>
                        <span class="fare-description">
                            The final fare depends on distance, time,
                            and the applicable official tariff.
                        </span>
                    </div>

                    <div class="module-tip">
                        <strong>Helpful tip</strong>
                        <p>
                            Check that the taxi meter is running.
                            For app-based rides, review the estimated
                            fare before confirming your booking.
                        </p>
                    </div>

                    <details class="transport-more">

                        <summary>More Taxi Travel Tips</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/taxi.jpg"
                                alt="Taxi in Cebu"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Before Your Taxi Ride</h4>

                            <ul>
                                <li>Use an authorized taxi service.</li>
                                <li>Check that the meter is working.</li>
                                <li>Confirm your destination with the driver.</li>
                                <li>Keep your personal belongings with you.</li>
                                <li>Ask for a receipt when necessary.</li>
                            </ul>

                        </div>

                    </details>

                </div>


                <div class="info-card">

                    <h3>Airport to Cebu City</h3>

                    <p>
                        Visitors arriving at Mactan-Cebu International
                        Airport can choose from several transportation
                        options.
                    </p>

                    <ul class="simple-list">
                        <li>Airport taxis</li>
                        <li>App-based ride services</li>
                        <li>Airport buses</li>
                        <li>Pre-arranged hotel transfers</li>
                    </ul>

                    <div class="alert-box">
                        <strong>Remember:</strong>
                        <p>
                            Travel time and cost depend on traffic,
                            destination, vehicle type, and time of day.
                        </p>
                    </div>

                    <details class="transport-more">

                        <summary>Explore Airport Transportation</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/airport-transport.jpg"
                                alt="Airport transportation in Cebu"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Transportation Options</h4>

                            <ul>
                                <li><strong>Airport taxi:</strong> A direct option for travelling to hotels and destinations.</li>
                                <li><strong>Ride-hailing:</strong> Request a vehicle through a supported mobile application.</li>
                                <li><strong>Airport bus:</strong> Check available routes and operating schedules.</li>
                                <li><strong>Hotel transfer:</strong> Some hotels offer pre-arranged airport pickups.</li>
                            </ul>

                            <div class="transport-more-note">
                                Check the airport's current transportation
                                arrangements before your arrival.
                            </div>

                        </div>

                    </details>

                </div>

            </div>

        </article>


        <!-- ========================================
             3. CITY AND AIRPORT BUSES
        ======================================== -->

        <article class="transport-module" id="buses">

            <div class="module-header">

                <div class="module-icon">🚍</div>

                <div class="module-heading">
                    <span class="module-tag">PUBLIC BUS TRANSPORT</span>
                    <h2>City & Airport Buses</h2>
                </div>

            </div>

            <div class="module-description">
                <p>
                    Bus services provide another option for travelling
                    between Cebu City, Mactan, the airport, and other
                    selected destinations.
                </p>
            </div>

            <div class="module-grid">

                <div class="info-card highlight-card">

                    <h3>MyBus</h3>

                    <p>
                        MyBus provides bus transportation connecting
                        selected locations in Metro Cebu, including
                        airport-related routes.
                    </p>

                    <ul class="simple-list">
                        <li>Airport transportation</li>
                        <li>Selected shopping centers</li>
                        <li>Designated bus stops</li>
                    </ul>

                    <div class="module-tip">
                        <strong>Before travelling</strong>
                        <p>
                            Check the current operating schedule,
                            route, and fare with the bus operator.
                        </p>
                    </div>

                    <details class="transport-more">

                        <summary>More About MyBus</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/mybus.jpg"
                                alt="MyBus in Cebu"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Helpful Passenger Information</h4>

                            <ul>
                                <li>Check the available route before boarding.</li>
                                <li>Confirm the nearest designated bus stop.</li>
                                <li>Check current operating hours.</li>
                                <li>Prepare your payment method.</li>
                                <li>Allow extra time during busy periods.</li>
                            </ul>

                        </div>

                    </details>

                </div>


                <div class="info-card">

                    <h3>City Bus Services</h3>

                    <p>
                        Several bus services operate on selected
                        routes within Metro Cebu.
                    </p>

                    <div class="step-list">

                        <div class="step-item">
                            <span class="step-number">01</span>
                            <div>
                                <strong>Locate the bus stop</strong>
                                <p>Use designated loading and unloading areas.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <span class="step-number">02</span>
                            <div>
                                <strong>Check the destination</strong>
                                <p>Confirm that the bus goes to your intended location.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <span class="step-number">03</span>
                            <div>
                                <strong>Prepare your payment</strong>
                                <p>Follow the payment instructions of the bus operator.</p>
                            </div>
                        </div>

                    </div>

                    <details class="transport-more">

                        <summary>More About City Bus Travel</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/bus-terminal.jpg"
                                alt="Bus terminal in Cebu"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Passenger Guidelines</h4>

                            <ul>
                                <li>Wait at the correct loading area.</li>
                                <li>Check the destination displayed on the bus.</li>
                                <li>Allow passengers to exit before boarding.</li>
                                <li>Follow the operator's payment instructions.</li>
                                <li>Keep the aisle clear of personal belongings.</li>
                            </ul>

                        </div>

                    </details>

                </div>


                <div class="info-card">

                    <h3>Bus Travel Tips</h3>

                    <ul class="simple-list">
                        <li>Arrive early at the bus stop.</li>
                        <li>Check the destination before boarding.</li>
                        <li>Keep your belongings secure.</li>
                        <li>Ask about the latest bus schedule.</li>
                        <li>Allow extra time during rush hours.</li>
                    </ul>

                    <details class="transport-more">

                        <summary>View the Bus Travel Checklist</summary>

                        <div class="transport-more-content">

                            <h4>Before Boarding</h4>

                            <ul>
                                <li>Know your destination and bus route.</li>
                                <li>Check the latest schedule.</li>
                                <li>Prepare your fare or accepted payment method.</li>
                                <li>Keep your phone and valuables secure.</li>
                                <li>Ask transport personnel if you need directions.</li>
                            </ul>

                        </div>

                    </details>

                </div>

            </div>

        </article>


        <!-- ========================================
             4. PROVINCIAL TRAVEL
        ======================================== -->

        <article class="transport-module" id="provincial">

            <div class="module-header">

                <div class="module-icon">🚐</div>

                <div class="module-heading">
                    <span class="module-tag">INTERCITY & PROVINCIAL TRAVEL</span>
                    <h2>Exploring Cebu Province</h2>
                </div>

            </div>

            <div class="module-description">
                <p>
                    Travelling outside Cebu City usually involves
                    buses, vans, and ferry connections. Your departure
                    terminal depends on your destination.
                </p>
            </div>

            <div class="module-grid">

                <div class="info-card highlight-card">

                    <h3>North Cebu Routes</h3>

                    <p>
                        Travellers heading to northern Cebu destinations
                        can use the North Bus Terminal as a starting point.
                    </p>

                    <div class="route-fare-table">

                        <div class="route-row">
                            <div>
                                <strong>Bantayan Island</strong>
                                <span>Bus to Hagnaya, then ferry</span>
                            </div>
                            <span class="route-icon">⛴️</span>
                        </div>

                        <div class="route-row">
                            <div>
                                <strong>Malapascua Island</strong>
                                <span>Bus or van to Maya, then boat</span>
                            </div>
                            <span class="route-icon">⛴️</span>
                        </div>

                    </div>

                    <div class="module-tip">
                        <strong>Travel reminder</strong>
                        <p>
                            Ferry schedules and fares may vary.
                            Check the latest departure times before
                            travelling to the port.
                        </p>
                    </div>

                    <details class="transport-more">

                        <summary>Explore North Cebu Travel</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/provincial-bus.jpg"
                                alt="Provincial bus in Cebu"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Bantayan Island Travel</h4>

                            <ol>
                                <li>Travel from Cebu City towards Hagnaya Port.</li>
                                <li>Check the ferry schedule and ticket requirements.</li>
                                <li>Board the ferry to Bantayan Island.</li>
                                <li>Arrange local transportation after arriving.</li>
                            </ol>

                            <h4>Malapascua Island Travel</h4>

                            <ol>
                                <li>Travel towards Maya Port.</li>
                                <li>Confirm the boat departure schedule.</li>
                                <li>Take the boat to Malapascua Island.</li>
                                <li>Arrange local transportation at your destination.</li>
                            </ol>

                            <div class="transport-more-note">
                                Ferry schedules, routes, and operating
                                conditions can change. Confirm details before travelling.
                            </div>

                        </div>

                    </details>

                </div>


                <div class="info-card">

                    <h3>South Cebu Routes</h3>

                    <p>
                        The South Bus Terminal is a common departure
                        point for travellers visiting southern Cebu.
                    </p>

                    <div class="route-fare-table">

                        <div class="route-row">
                            <div>
                                <strong>Carcar</strong>
                                <span>Heritage town and local food</span>
                            </div>
                        </div>

                        <div class="route-row">
                            <div>
                                <strong>Simala</strong>
                                <span>Shrine and pilgrimage destination</span>
                            </div>
                        </div>

                        <div class="route-row">
                            <div>
                                <strong>Moalboal</strong>
                                <span>Beaches and marine activities</span>
                            </div>
                        </div>

                        <div class="route-row">
                            <div>
                                <strong>Oslob</strong>
                                <span>Coastal attractions and tours</span>
                            </div>
                        </div>

                    </div>

                    <details class="transport-more">

                        <summary>Explore South Cebu Travel</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/south-cebu-bus.jpg"
                                alt="Bus travelling in South Cebu"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Popular Destinations</h4>

                            <ul>
                                <li><strong>Carcar:</strong> Visit heritage locations and discover local food.</li>
                                <li><strong>Simala:</strong> Visit the well-known religious shrine.</li>
                                <li><strong>Moalboal:</strong> Explore beaches and marine attractions.</li>
                                <li><strong>Oslob:</strong> Discover coastal attractions and local tours.</li>
                            </ul>

                            <h4>Travel Preparation</h4>

                            <ul>
                                <li>Check the correct bus terminal.</li>
                                <li>Confirm the bus destination.</li>
                                <li>Plan your return trip.</li>
                                <li>Allow additional time for road traffic.</li>
                            </ul>

                        </div>

                    </details>

                </div>


                <div class="info-card">

                    <h3>Before Your Trip</h3>

                    <ul class="simple-list">
                        <li>Know your departure terminal.</li>
                        <li>Check the bus destination and schedule.</li>
                        <li>Bring enough cash for transportation.</li>
                        <li>Check ferry schedules when travelling to islands.</li>
                        <li>Allow additional time for transfers.</li>
                    </ul>

                    <details class="transport-more">

                        <summary>View the Provincial Travel Checklist</summary>

                        <div class="transport-more-content">

                            <h4>Before Leaving Cebu City</h4>

                            <ul>
                                <li>Save your destination address.</li>
                                <li>Check the weather forecast.</li>
                                <li>Confirm bus and ferry schedules.</li>
                                <li>Bring identification and necessary travel documents.</li>
                                <li>Prepare enough money for transportation and meals.</li>
                                <li>Keep emergency contact information accessible.</li>
                            </ul>

                        </div>

                    </details>

                </div>

            </div>

        </article>


        <!-- ========================================
             5. NEW TRANSPORT INITIATIVES
        ======================================== -->

        <article class="transport-module new-module" id="initiatives">

            <div class="module-header">

                <div class="module-icon">🌱</div>

                <div class="module-heading">
                    <span class="module-tag">FUTURE OF MOBILITY</span>
                    <h2>New Transport Initiatives</h2>
                </div>

            </div>

            <div class="module-description">
                <p>
                    Cebu continues to explore transportation improvements
                    aimed at making commuting more convenient, organized,
                    and sustainable.
                </p>
            </div>

            <div class="module-grid">

                <div class="info-card">

                    <h3>Cebu Bus Rapid Transit</h3>

                    <p>
                        The Cebu Bus Rapid Transit (BRT) project aims
                        to improve public transportation through
                        dedicated bus infrastructure and organized
                        routes.
                    </p>

                    <div class="module-tip">
                        <strong>Project information</strong>
                        <p>
                            Construction, operating sections, and
                            service availability may change. Check
                            official project announcements for updates.
                        </p>
                    </div>

                    <details class="transport-more">

                        <summary>Learn More About Cebu BRT</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/cebu-brt.jpg"
                                alt="Cebu Bus Rapid Transit"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>What is Bus Rapid Transit?</h4>

                            <p>
                                Bus Rapid Transit is a public transportation
                                system designed to improve bus operations
                                through organized routes and supporting infrastructure.
                            </p>

                            <h4>Project Objectives</h4>

                            <ul>
                                <li>Improve public transportation efficiency.</li>
                                <li>Support better connectivity between locations.</li>
                                <li>Provide more organized bus services.</li>
                                <li>Help improve the commuting experience.</li>
                            </ul>

                            <div class="transport-more-note">
                                Project implementation and service availability
                                may change. Refer to official announcements
                                for current information.
                            </div>

                        </div>

                    </details>

                </div>


                <div class="info-card">

                    <h3>Public Transport Modernization</h3>

                    <p>
                        Public transportation modernization initiatives
                        aim to improve vehicle standards, passenger
                        comfort, and service organization.
                    </p>

                    <ul class="simple-list">
                        <li>Modern public utility vehicles</li>
                        <li>Improved passenger accessibility</li>
                        <li>More organized public transport services</li>
                    </ul>

                    <details class="transport-more">

                        <summary>Explore Transport Modernization</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/modern-jeepney.jpg"
                                alt="Modern public utility vehicle"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Modernization Goals</h4>

                            <ul>
                                <li>Improve vehicle safety and standards.</li>
                                <li>Provide better passenger comfort.</li>
                                <li>Support more organized transport operations.</li>
                                <li>Improve accessibility for passengers.</li>
                                <li>Encourage more efficient public transportation.</li>
                            </ul>

                        </div>

                    </details>

                </div>


                <div class="info-card">

                    <h3>Sustainable Mobility</h3>

                    <p>
                        Sustainable transportation encourages more
                        efficient ways of moving around the city.
                    </p>

                    <ul class="simple-list">
                        <li>Public transportation</li>
                        <li>Walking for short distances</li>
                        <li>Better transport connections</li>
                        <li>Responsible travel choices</li>
                    </ul>

                    <details class="transport-more">

                        <summary>Discover Sustainable Travel</summary>

                        <div class="transport-more-content">

                            <img
                                src="/Cebu/assets/images/transport/sustainable-mobility.jpg"
                                alt="Sustainable urban transportation"
                                class="transport-more-image"
                                loading="lazy"
                            >

                            <h4>Ways to Travel More Sustainably</h4>

                            <ul>
                                <li>Use public transportation when practical.</li>
                                <li>Walk short distances when safe.</li>
                                <li>Choose shared transportation when appropriate.</li>
                                <li>Follow pedestrian and road safety rules.</li>
                                <li>Support responsible travel practices.</li>
                            </ul>

                        </div>

                    </details>

                </div>

            </div>

        </article>


        <!-- ========================================
             6. TRAVEL TIPS
        ======================================== -->

        <article class="transport-module survival-module" id="travel-tips">

            <div class="module-header">

                <div class="module-icon">💡</div>

                <div class="module-heading">
                    <span class="module-tag">TRAVEL SMART</span>
                    <h2>Essential Transportation Tips</h2>
                </div>

            </div>

            <div class="module-description">
                <p>
                    Make your Cebu journey safer and easier with
                    these practical transportation reminders.
                </p>
            </div>

            <div class="checklist-grid">

                <div class="checklist-item">
                    <span>✓</span>
                    <div>
                        <strong>Plan your route</strong>
                        <p>Know your destination and preferred transportation option.</p>
                    </div>
                </div>

                <div class="checklist-item">
                    <span>✓</span>
                    <div>
                        <strong>Prepare small bills</strong>
                        <p>Carry smaller denominations for public transportation payments.</p>
                    </div>
                </div>

                <div class="checklist-item">
                    <span>✓</span>
                    <div>
                        <strong>Watch your belongings</strong>
                        <p>Keep your phone, wallet, and bags secure while commuting.</p>
                    </div>
                </div>

                <div class="checklist-item">
                    <span>✓</span>
                    <div>
                        <strong>Expect traffic</strong>
                        <p>Allow extra travel time, especially during peak hours.</p>
                    </div>
                </div>

                <div class="checklist-item">
                    <span>✓</span>
                    <div>
                        <strong>Check schedules</strong>
                        <p>Confirm bus and ferry schedules before leaving.</p>
                    </div>
                </div>

                <div class="checklist-item">
                    <span>✓</span>
                    <div>
                        <strong>Stay informed</strong>
                        <p>Follow official transport announcements for updated routes and fares.</p>
                    </div>
                </div>

            </div>

            <details class="transport-more">

                <summary>Open the Complete Travel Safety Checklist</summary>

                <div class="transport-more-content">

                    <img
                        src="/Cebu/assets/images/transport/travel-tips.jpg"
                        alt="Travel preparation"
                        class="transport-more-image"
                        loading="lazy"
                    >

                    <h4>Before Travelling</h4>

                    <ul>
                        <li>Plan your route before leaving.</li>
                        <li>Check current transportation schedules.</li>
                        <li>Prepare enough cash or an accepted payment method.</li>
                        <li>Keep your phone charged.</li>
                        <li>Save important addresses and locations.</li>
                    </ul>

                    <h4>While Travelling</h4>

                    <ul>
                        <li>Keep your belongings secure.</li>
                        <li>Use designated loading and unloading areas.</li>
                        <li>Follow traffic and passenger safety rules.</li>
                        <li>Verify ride-hailing vehicle information.</li>
                        <li>Allow additional time for traffic and transfers.</li>
                    </ul>

                </div>

            </details>

            <div class="alert-box">

                <strong>Important Travel Notice</strong>

                <p>
                    Transportation routes, schedules, fares, and
                    operating conditions can change. Information
                    in this guide is intended as a general reference.
                    Always confirm details with the relevant
                    transportation operator before travelling.
                </p>

            </div>

        </article>


        <!-- ========================================
             BACK TO HOMEPAGE
        ======================================== -->

        <div class="back-btn-wrap">

            <a href="/Cebu/index.php" class="back-btn">
                ← Back to Homepage
            </a>

        </div>

    </div>

</section>

</main>


<!-- ========================================
     FOOTER
======================================== -->

<footer class="site-footer">

    <div class="footer-main">

        <div class="footer-brand">

            <a class="brand" href="/Cebu/index.php">

                <span class="brand-mark">✦</span>

                <span>
                    Smart Tourist <strong>Navigator</strong>
                </span>

            </a>

            <p>
                Discover Cebu with confidence. Your local guide
                to destinations, culture, transportation, and
                unforgettable experiences.
            </p>

        </div>


        <div>

            <h4>Explore</h4>

            <a href="/Cebu/index.php">Home</a>

            <a href="/Cebu/pages/destination.php">Destinations</a>

            <a href="/Cebu/index.php#map-section">Map & Routes</a>

            <a href="/Cebu/pages/food.php">Local Food</a>

        </div>


        <div>

            <h4>Travel Guide</h4>

            <a href="/Cebu/pages/transport.php">Transportation</a>

            <a href="/Cebu/index.php#plan">Plan Your Trip</a>

            <a href="/Cebu/index.php#about">About Us</a>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © <span id="currentYear"></span>
            Smart Tourist Navigator Cebu. All rights reserved.
        </p>

        <p>
            Made for exploring Cebu, Philippines.
        </p>

    </div>

</footer>


<!-- TOAST NOTIFICATION -->
<div class="toast" id="toast" role="status" aria-live="polite"></div>


<!-- JAVASCRIPT -->
<script src="/Cebu/assets/js/script.js"></script>

<script>
    const currentYear = document.getElementById('currentYear');

    if (currentYear) {
        currentYear.textContent = new Date().getFullYear();
    }
</script>

</body>
</html>