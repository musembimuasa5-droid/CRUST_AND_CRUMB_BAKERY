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
  <header class="site-header account-header"><a class="brand" href="./" aria-label="Crust and Crumb home"><span class="brand-mark">C<span>&</span>C</span><span>Crust <em>&</em> Crumb</span></a><a class="text-link" href="register.php">Create an account <span>→</span></a></header>
  <main class="account-shell"><section class="account-card"><p class="eyebrow">Welcome back</p><h1>Sign in to your bakehouse.</h1><p class="account-intro">Track orders, save addresses, and reorder the bakes you love.</p><form class="standalone-form" data-auth-page="login"><label for="login-email">Email<input id="login-email" type="email" name="email" required autocomplete="email" placeholder="you@example.com"></label><label for="login-password">Password<input id="login-password" type="password" name="password" required minlength="8" autocomplete="current-password" placeholder="At least 8 characters"></label><button class="button button-dark" type="submit">Sign in <span>→</span></button><p class="form-message" data-auth-page-message role="status"></p></form><p class="auth-switch">New here? <a href="register.php">Create an account</a></p></section></main>
  <script type="module" src="assets/js/auth.js"></script>
</body>
</html>
