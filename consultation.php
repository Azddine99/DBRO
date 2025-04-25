<?php
$conn = new mysqli("localhost", "root", "", "TeleMesure");

$query = "SELECT Mesure.date_heure, Systeme.nom_piece, Mesure.temperature, Mesure.hygrometrie, Mesure.luminosite 
          FROM Mesure 
          JOIN Systeme ON Mesure.id_systeme = Systeme.id 
          ORDER BY Mesure.date_heure DESC";

$result = $conn->query($query);

echo "<h2 style='color:red'>Récapitulatif des mesures</h2>";
echo "<table border='1'>
        <tr><th>date</th><th>pièce</th><th>température</th><th>hygrométrie</th><th>luminosité</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['date_heure']}</td>
            <td>{$row['nom_piece']}</td>
            <td>{$row['temperature']}</td>
            <td>{$row['hygrometrie']}</td>
            <td>{$row['luminosite']}</td>
          </tr>";
}
echo "</table>";
