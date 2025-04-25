<?php
$conn = new mysqli("localhost", "root", "", "TeleMesure");

$systeme = $_POST['systeme'];
$temp = $_POST['temperature'];
$hygro = $_POST['hygrometrie'];
$lux = $_POST['luminosite'];

$stmt = $conn->prepare("INSERT INTO Mesure (id_systeme, temperature, hygrometrie, luminosite) VALUES (?, ?, ?, ?)");
$stmt->bind_param("idii", $systeme, $temp, $hygro, $lux);
$stmt->execute();
?>

<p>Les données ont été envoyées au serveur.</p>
<a href="simulateur.php">retour à l'envoi de mesure</a>
