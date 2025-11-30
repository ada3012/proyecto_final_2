<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $comentario = mysqli_real_escape_string($conn, $_POST['comentario']);

    $sql = "INSERT INTO reseñas (nombre, comentario) VALUES ('$nombre', '$comentario')";

    if (mysqli_query($conn, $sql)) {
        header("Location: reseñas.html?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
