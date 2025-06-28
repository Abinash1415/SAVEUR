<?php
require_once 'ReservationDAO.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $dao = new ReservationDAO();

  $data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'guests' => $_POST['guests'],
    'message' => $_POST['message']
  ];

  if ($dao->addReservation($data)) {
    echo "<script>
      alert('Réservation enregistrée avec succès.');
      window.location.href = 'index.php#reservation';
    </script>";
  } else {
    echo "<script>
      alert('Erreur lors de l\\'enregistrement.');
      window.location.href = 'index.php#reservation';
    </script>";
  }
} else {
  echo "Accès interdit.";
}
?>
