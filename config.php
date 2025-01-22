<?php
$host = "localhost";  // Database host (bv. localhost)
$dbname = "avengers_infinity_war";  // Naam van de database
$username = "root";  // Databasegebruikersnaam (verander indien nodig)
$password = "";  // Wachtwoord (laat leeg als je XAMPP/WAMP gebruikt)

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Databaseverbinding mislukt: " . $e->getMessage());
}
?>
