<?php
$conn = new mysqli("localhost", "root", "", "TeleMesure");
$result = $conn->query("SELECT * FROM Systeme");
?>

<form action="ajout.php" method="post">
    <label>Système de mesure situé en :</label>
    <select name="systeme">
        <?php while($row = $result->fetch_assoc()): ?>
            <option value="<?= $row['id'] ?>"><?= $row['nom_piece'] ?></option>
        <?php endwhile; ?>
    </select><br><br>
    Température : <input type="text" name="temperature"> °C<br>
    Hygrométrie : <input type="text" name="hygrometrie"> %<br>
    Luminosité : <input type="text" name="luminosite"> Lux<br>
    <br>
    <input type="submit" value="Envoyer la mesure au serveur">
</form>
