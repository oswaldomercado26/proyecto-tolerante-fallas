<?php

    include 'conexion.php';


    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];


$sql = "INSERT INTO libro (isbn, titulo, autor,descripcion,stock,preio) VALUES ('$isbn', '$titulo', '$autor', '$descripcion','$stock', ' $precio')";
if (mysqli_query($conn, $sql)) {
      echo "<script language=\"javascript\">
window.location.href=\"index.html\";
</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
