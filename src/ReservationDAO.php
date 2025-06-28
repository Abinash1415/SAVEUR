<?php
require_once 'Database.php';

class ReservationDAO {
  private $conn;

  public function __construct() {
    $database = new Database();
    $this->conn = $database->getConnection();
  }

  // Ajout réservation dans la BDD
  public function addReservation($data) {
    $query = "INSERT INTO reservations (name, email, phone, guests, message) VALUES (:name, :email, :phone, :guests, :message)";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':phone', $data['phone']);
    $stmt->bindParam(':guests', $data['guests']);
    $stmt->bindParam(':message', $data['message']);

    return $stmt->execute();
  }
}
?>
