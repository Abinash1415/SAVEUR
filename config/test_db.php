<?php
require_once 'Database.php';
$db = new Database();
$conn = $db->getConnection();

if ($conn) {
  echo "Connexion OK";
} else {
  echo "Connexion FAIL";
}
