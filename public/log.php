<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    $username = htmlspecialchars($_SESSION['username']);
    echo "<script>
      alert('Vous êtes déjà connecté en tant que $username');
      window.location.href = 'index.php';
    </script>";
    exit();
  }
  if (isset($_GET['message'])) {
    $msg = htmlspecialchars($_GET['message']);
    echo "<script>alert('$msg');</script>";
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Connexion - Saveur</title>
  <link rel="stylesheet" href="style/styles.css">
</head>
<body>
  <header class="header">
    <nav class="navbar">
      <a href="index.php#home" class="nav-brand">SAVEUR</a>
      <ul class="nav-menu">
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><span class="nav-link"><?php echo htmlspecialchars($_SESSION['username']); ?></span></li>
          <li><a href="auth.php?action=logout" class="nav-link">Déconnexion</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <main class="hero-background reservation">
    <div class="container">
      <h1>Connexion</h1>
      <div class="divider"></div>

      <!-- Formulaire Connexion -->
      <form action="auth.php?action=login" method="POST" class="contact-form">
        <div class="form-group">
          <label for="login_email">Email</label>
          <input type="email" id="login_email" name="email" required>
        </div>
        <div class="form-group">
          <label for="login_password">Mot de passe</label>
          <input type="password" id="login_password" name="password" required>
        </div>
        <button type="submit" class="submit-btn">Se connecter</button>
        <p class="switch-link"><a href="register.php">Créer un compte</a></p>
      </form>
    </div>
  </main>
</body>
</html>
