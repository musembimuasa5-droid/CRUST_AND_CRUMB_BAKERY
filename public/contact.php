<?php
$pageTitle = 'Contact | Crust & Crumb Bakery';
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/site.css">
</head>
<body class="contact-page">
  <header class="site-header account-header"><a class="brand" href="./" aria-label="Crust and Crumb home"><span class="brand-mark">C<span>&</span>C</span><span>Crust <em>&</em> Crumb</span></a><a class="text-link" href="./">Back to bakehouse <span>→</span></a></header>
  <main class="contact-shell"><section class="contact-intro"><p class="eyebrow">Say hello</p><h1>We would love to hear from you.</h1><p>Questions about an order, a celebration cake, or today's counter? Send us a note and our team will get back to you.</p></section><section class="contact-layout"><div class="contact-details"><div><p class="footer-label">Visit</p><p>14 Riverside Lane<br>Nairobi, Kenya</p></div><div><p class="footer-label">Call or email</p><p><a href="tel:+254700000000">+254 700 000 000</a><br><a href="mailto:hello@crustcrumb.test">hello@crustcrumb.test</a></p></div><div><p class="footer-label">Opening hours</p><p>Mon - Sat: 7am - 5pm<br>Sunday: 8am - 2pm</p></div></div><div class="contact-card"><p class="eyebrow">Start a conversation</p><h2>Tell us what you need.</h2><form class="standalone-form contact-form" action="mailto:hello@crustcrumb.test" method="post" enctype="text/plain"><label for="contact-name">Name<input id="contact-name" type="text" name="name" required placeholder="Your name"></label><label for="contact-email">Email<input id="contact-email" type="email" name="email" required placeholder="you@example.com"></label><label for="contact-message">Message<textarea id="contact-message" name="message" rows="5" required placeholder="How can we help?"></textarea></label><button class="button button-dark" type="submit">Send message <span>↗</span></button></form></div></section></main>
</body>
</html>
