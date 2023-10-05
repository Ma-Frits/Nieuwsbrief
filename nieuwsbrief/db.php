<?php
$hostname = "jouw_hostnaam_of_ip";
$username = "jouw_gebruikersnaam";
$password = "jouw_wachtwoord";
$database = "jouw_databasenaam";

// Probeer verbinding te maken met de database
$conn = new mysqli($hostname, $username, $password, $database);

// Controleer of de verbinding is gelukt
if ($conn->connect_error) {
    die("Verbindingsfout: " . $conn->connect_error);
}
echo "Verbinding met de database is tot stand gebracht!";
?>
