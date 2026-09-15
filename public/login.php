<?php
$pageTitle = 'Sign in | Crust & Crumb Bakery';
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
<body class="account-page">
  <header class="site-header account-header"><a class="brand" href="./" aria-label="Crust and Crumb home"><span class="brand-mark">C<span>&</span>C</span><span>Crust <em>&</em> Crumb</span></a><nav class="account-nav" aria-label="Account navigation"><a href="./">Bakehouse</a><a href="contact.php">Contact</a><a class="text-link" href="register.php">Create an account <span>→</span></a></nav></header>
  <main class="account-shell"><div class="account-layout"><section class="account-card"><p class="eyebrow">Welcome back</p><h1>Sign in to your bakehouse.</h1><p class="account-intro">Track orders, save addresses, and reorder the bakes you love.</p><form class="standalone-form" data-auth-page="login"><label for="login-email">Email<input id="login-email" type="email" name="email" required autocomplete="email" placeholder="you@example.com"></label><div class="password-field"><label for="login-password">Password</label><div class="password-input"><input id="login-password" type="password" name="password" required minlength="8" autocomplete="current-password" placeholder="At least 8 characters"><button type="button" class="password-toggle" data-password-toggle aria-label="Show password">Show</button></div></div><div class="form-options"><label class="remember-option"><input type="checkbox" name="remember" data-remember> Remember my email</label><a href="mailto:hello@crustcrumb.test?subject=Password%20help">Need help signing in?</a></div><button class="button button-dark" type="submit">Sign in <span>→</span></button><p class="form-message" data-auth-page-message role="status"></p></form><p class="auth-switch">New here? <a href="register.php">Create an account</a></p></section><aside class="account-benefits"><p class="eyebrow">Your bakehouse account</p><h2>More goodness, less effort.</h2><ul><li><strong>Order history</strong><span>Keep every favourite and past order close.</span></li><li><strong>Faster checkout</strong><span>Save your details for an easier next visit.</span></li><li><strong>Fresh batch alerts</strong><span>Stay close to what is coming out of the oven.</span></li></ul><a class="text-link" href="register.php">Get started <span>→</span></a></aside></div></main>
  <footer class="account-footer"><div class="account-footer-inner"><a class="brand" href="./" aria-label="Crust and Crumb home"><span class="brand-mark">C<span>&</span>C</span><span>Crust <em>&</em> Crumb</span></a><div><span class="footer-label">Visit</span><p>14 Riverside Lane<br>Nairobi, Kenya</p></div><div><span class="footer-label">Say hello</span><p><a href="contact.php">Contact us</a><br><a href="mailto:hello@crustcrumb.test">hello@crustcrumb.test</a></p></div><small>© <?= date('Y') ?> Crust & Crumb Bakery</small></div></footer>
  <script type="module" src="assets/js/auth.js"></script>
</body>
</html>
