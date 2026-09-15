<?php
$pageTitle = 'Create an account | Crust & Crumb Bakery';
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
  <header class="site-header account-header"><a class="brand" href="./" aria-label="Crust and Crumb home"><span class="brand-mark">C<span>&</span>C</span><span>Crust <em>&</em> Crumb</span></a><a class="text-link" href="login.php">Already a member? <span>→</span></a></header>
  <main class="account-shell"><section class="account-card"><p class="eyebrow">Get started</p><h1>Create your account.</h1><p class="account-intro">Keep your favourite bakes close and make every order a little easier.</p><form class="standalone-form" data-auth-page="register"><label for="register-name">Full name<input id="register-name" type="text" name="name" required minlength="2" autocomplete="name" placeholder="Your name"></label><label for="register-email">Email<input id="register-email" type="email" name="email" required autocomplete="email" placeholder="you@example.com"></label><label for="register-password">Password<input id="register-password" type="password" name="password" required minlength="8" autocomplete="new-password" placeholder="At least 8 characters"></label><button class="button button-coral" type="submit">Create account <span>→</span></button><p class="form-message" data-auth-page-message role="status"></p></form><p class="auth-switch">Already have an account? <a href="login.php">Sign in</a></p></section></main>
  <script type="module" src="assets/js/auth.js"></script>
</body>
</html>
