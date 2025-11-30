<?php
include 'db.php';

$sql = "SELECT nombre, comentario, fecha FROM reseñas ORDER BY fecha DESC";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='resena'>";
    echo "<h4>" . htmlspecialchars($row['nombre']) . "</h4>";
    echo "<p>" . htmlspecialchars($row['comentario']) . "</p>";
    echo "<span class='fecha'>" . $row['fecha'] . "</span>";
    echo "</div><hr>";
}
?>
