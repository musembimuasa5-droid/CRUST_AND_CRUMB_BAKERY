<?php
$pageTitle = 'Crust & Crumb Bakery | Freshly baked, thoughtfully made';
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Small-batch breads, pastries, cakes, and celebration bakes from Crust & Crumb Bakery.">
  <meta property="og:title" content="Crust & Crumb Bakery">
  <meta property="og:description" content="Freshly baked, thoughtfully made.">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/site.css">
</head>
<body>
  <div class="announcement">Fresh batches land daily. Pre-order by 10am for same-day counter pickup.</div>
  <header class="site-header" data-header>
    <a class="brand" href="./" aria-label="Crust and Crumb home"><span class="brand-mark">C<span>&</span>C</span><span>Crust <em>&</em> Crumb</span></a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" data-menu-toggle><span></span><span></span></button>
    <nav id="main-nav" class="main-nav" aria-label="Main navigation">
      <a href="#shop">Shop</a><a href="#fresh">Fresh today</a><a href="#celebrate">Celebrations</a><a href="#story">Our story</a><a href="contact.php">Contact</a>
      <div class="nav-actions"><a class="text-link get-started-link" href="register.php">Get started</a><button class="icon-button" type="button" data-account aria-label="Open account">Account</button><button class="cart-button" type="button" data-cart aria-label="Open cart">Cart <span data-cart-count>0</span></button></div>
    </nav>
  </header>

  <main>
    <section class="hero page-width">
      <div class="hero-copy reveal"><p class="eyebrow">Nairobi's neighbourhood bakehouse</p><h1>Good days start<br><i>with good bread.</i></h1><p class="hero-lede">Hand-shaped sourdough, golden pastries, and cakes made for the moments worth gathering around.</p><div class="hero-actions"><a class="button button-dark" href="#shop">Shop the bakehouse <span>↗</span></a><a class="text-link" href="register.php">Get started <span>→</span></a></div><div class="trust-row"><span><strong>4.9/5</strong> from 300+ neighbours</span><span class="trust-stars">★★★★★</span></div></div>
      <div class="hero-art reveal reveal-delay"><div class="hero-image"><img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=1200&q=85" alt="Fresh sourdough loaves on a bakery counter"></div><div class="hero-note"><span class="fresh-dot"></span><span><strong>Out of the oven</strong><br>Every morning, 7am</span></div></div>
    </section>

    <section id="fresh" class="fresh-section page-width"><div class="section-heading"><div><p class="eyebrow">Baked this morning</p><h2>Fresh today</h2></div><a href="#shop" class="text-link">See all bakes <span>→</span></a></div><div class="fresh-grid" data-fresh-grid><div class="loading-state">Loading today's fresh batches...</div></div></section>

    <section id="shop" class="shop-section page-width"><div class="section-heading shop-heading"><div><p class="eyebrow">The bakehouse menu</p><h2>Find your favourite</h2></div><div class="shop-tools"><label class="search-box"><span aria-hidden="true">⌕</span><input type="search" placeholder="Search the menu" data-search aria-label="Search products"></label><select data-category aria-label="Filter by category"><option value="">All categories</option><option value="bread">Bread</option><option value="pastries">Pastries</option><option value="cakes">Cakes</option><option value="cookies">Cookies</option></select></div></div><div class="catalogue-layout"><aside class="filter-panel"><p class="filter-title">Made for you</p><label><input type="checkbox" value="vegan" data-diet> Vegan</label><label><input type="checkbox" value="vegetarian" data-diet> Vegetarian</label><label><input type="checkbox" value="gluten-free" data-diet> Gluten-free</label><p class="allergen-note">Allergen-aware recipes, always clearly labelled.</p></aside><div class="product-grid" data-product-grid><div class="loading-state">Loading the menu...</div></div></div></section>

    <section id="celebrate" class="celebrate-section page-width"><div class="celebrate-image"><img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=1200&q=85" alt="Decorated celebration cake with fresh berries" loading="lazy"></div><div class="celebrate-copy"><p class="eyebrow">Made around your moment</p><h2>Big day? Let us make it delicious.</h2><p>From a six-inch birthday cake to a full dessert table, our bakers will help you make something personal, beautiful, and properly tasty.</p><a class="button button-coral" href="mailto:hello@crustcrumb.test?subject=Celebration%20quote">Start a custom quote <span>↗</span></a></div></section>

    <section class="proof-section"><div class="page-width proof-inner"><div><p class="eyebrow">The word on the street</p><h2>Made with care.<br>Loved by many.</h2></div><div class="testimonial"><div class="quote-mark">“</div><blockquote>The croissants are honestly the best thing I have eaten in Nairobi. You can taste the butter, the time, and the care.</blockquote><p class="reviewer">Maya K. <span>·</span> Kilimani</p><div class="testimonial-dots"><span class="active"></span><span></span><span></span></div></div></div></section>

    <section id="story" class="story-section page-width"><div><p class="eyebrow">Our little corner</p><h2>A slower kind<br>of delicious.</h2><p>We believe good baking needs patience. Our doughs ferment overnight, our pastries are laminated by hand, and every morning starts with the same promise: make it worth coming back for.</p><a href="mailto:hello@crustcrumb.test" class="text-link">Say hello <span>→</span></a></div><div class="story-stats"><div><strong>2018</strong><span>First loaf baked</span></div><div><strong>24h</strong><span>Our sourdough process</span></div><div><strong>7am</strong><span>Fresh batches daily</span></div></div></section>
  </main>
  <footer class="site-footer"><div class="page-width footer-grid"><div><a class="brand footer-brand" href="./"><span class="brand-mark">C<span>&</span>C</span><span>Crust <em>&</em> Crumb</span></a><p>Small-batch baking for everyday rituals<br>and very special occasions.</p></div><div><p class="footer-label">Visit</p><p>14 Riverside Lane<br>Nairobi, Kenya</p></div><div><p class="footer-label">Say hello</p><p><a href="contact.php">Contact us</a><br><a href="mailto:hello@crustcrumb.test">hello@crustcrumb.test</a><br><a href="tel:+254700000000">+254 700 000 000</a></p></div><div><p class="footer-label">Get started</p><p><a href="register.php">Create an account</a><br><a href="login.php">Sign in</a></p></div></div><div class="page-width footer-bottom"><span>© <?= date('Y') ?> Crust & Crumb Bakery</span><span>Freshly baked in Nairobi</span></div></footer>

  <aside class="cart-drawer" data-cart-drawer aria-hidden="true"><div class="drawer-head"><h2>Your order</h2><button type="button" class="close-button" data-close-cart aria-label="Close cart">×</button></div><div class="cart-items" data-cart-items><p class="empty-state">Your basket is waiting for something warm.</p></div><div class="cart-footer"><div><span>Subtotal</span><strong data-cart-total>KSh 0</strong></div><button class="button button-dark" type="button" data-checkout>Continue to checkout <span>→</span></button></div></aside><div class="drawer-backdrop" data-close-cart></div>
  <dialog class="account-modal" data-account-modal><button type="button" class="close-button" data-close-account aria-label="Close account">×</button><p class="eyebrow">Welcome back</p><h2>Keep your favourites close.</h2><p>Sign in to track orders, save addresses, and reorder the bakes you love.</p><form data-auth-form><label>Email<input type="email" name="email" required placeholder="you@example.com"></label><label>Password<input type="password" name="password" required minlength="8" placeholder="At least 8 characters"></label><button class="button button-dark" type="submit">Sign in <span>→</span></button><p class="form-message" data-auth-message></p><p class="auth-switch">New here? <a href="register.php">Create an account</a></p></form></dialog>
  <div class="toast" data-toast role="status"></div>
  <script type="module" src="assets/js/app.js"></script>
</body>
</html>
