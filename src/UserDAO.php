<?php
require_once 'Database.php';

class UserDAO {
  private $conn;

  public function __construct() {
    $database = new Database();
    $this->conn = $database->getConnection();
  }

  // Enregistrement d'un nouvel utilisateur
  public function register($username, $email, $password) {
    // Vérifie si l'utilisateur existe déjà
    $query = "SELECT id FROM users WHERE email = :email OR username = :username";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      return false; // User déjà existant
    }

    // Hash le mdp
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Insert
    $insertQuery = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $insertStmt = $this->conn->prepare($insertQuery);
    $insertStmt->bindParam(':username', $username);
    $insertStmt->bindParam(':email', $email);
    $insertStmt->bindParam(':password', $hashedPassword);

    return $insertStmt->execute();
  }

  // Connexion utilisateur
  public function login($email, $password) {
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      if (password_verify($password, $user['password'])) {
        // Lancer la session
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        return true;
      }
    }

    return false;
  }
}
?>
