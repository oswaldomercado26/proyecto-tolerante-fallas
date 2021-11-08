<?php
    session_start();
    require 'conexion.php';
//-------------------------------------------------------------------
if(isset($_POST['isbn']) && isset($_POST['titulo']) && isset($_POST['autor']) && 
         isset($_POST['descripcion']) && isset($_POST['stock']) && isset($_POST['precio']) ){
          
          //$sql = "INSERT INTO libros (isbn, titulo, autor, descripcion, stock, preio)
            //      VALUE(:isb, :ti, :au, :de, :st, :pr)";
          $sql = "INSERT INTO libro (isbn, titulo, autor, descripcion, stock, preio)
                  VALUE(:isb, :ti, :au, :de, :st, :pr)";

          $smt = $pdo -> prepare($sql);
          $smt -> execute(array(
              ':isb' => $_POST['isbn'],
              ':ti'  => $_POST['titulo'],
              ':au'  => $_POST['autor'],
              ':de'  => $_POST['descripcion'],
              ':st'  => $_POST['stock'],
              ':pr'  => $_POST['precio']
          ));

          $_SESSION["success"] = '¡Libro Añadido!';
          header('Location: index.php');
          return;

}
?>
