<?php
require_once __DIR__ . '/../src/UserDAO.php';

$action = $_GET['action'] ?? '';

$userDAO = new UserDAO();

switch ($action) {
  case 'register':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
    if ($userDAO->register($username, $email, $password)) {
        header("Location: log.php?message=" . urlencode("Inscription réussie. Connecte-toi !"));
    } else {
        header("Location: register.php?message=" . urlencode("Utilisateur déjà existant."));
    }
    exit();
    }
    break;

  case 'login':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

    if ($userDAO->login($email, $password)) {
        header("Location: index.php?message=" . urlencode("Connexion réussie."));
    } else {
        header("Location: log.php?message=" . urlencode("Échec de connexion."));
    }
    exit();
    }
    break;

  case 'logout':
    session_start();
    session_destroy();
    echo "<script>
      alert('Déconnexion réussie.');
      window.location.href = 'index.php';
    </script>";
    exit();

  default:
    echo "Action inconnue.";
}
?>
