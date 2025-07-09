<?php
// Ρυθμίσεις σύνδεσης
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'tl'; // Όνομα βάσης δεδομένων (απλό & αποτελεσματικό)

// Δημιουργία σύνδεσης
$conn = new mysqli($host, $user, $password, $database);

// Έλεγχος σύνδεσης
if ($conn->connect_error) {
    die("Σφάλμα σύνδεσης: " . $conn->connect_error);
}

// Ορισμός χαρακτήρων σε UTF-8 για ελληνικά
$conn->set_charset("utf8mb4");
?>
