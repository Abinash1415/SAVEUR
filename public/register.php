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
        <title>Inscription - Saveur</title>
        <link rel="stylesheet" href="style/styles.css">
    </head>
    <body>
        <header class="header">
            <nav class="navbar">
            <a href="index.php" class="nav-brand">SAVEUR</a>
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
            <h1>Inscription</h1>
            <div class="divider"></div>

            <!-- Formulaire Inscription -->
            <form action="auth.php?action=register" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="reg_email">Email</label>
                    <input type="email" id="reg_email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="reg_password">Mot de passe</label>
                    <input type="password" id="reg_password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">S'inscrire</button>
                <p class="switch-link"><a href="log.php">Connexion</a></p>
            </form>
            </div>
        </main>

    </body>
</html>
