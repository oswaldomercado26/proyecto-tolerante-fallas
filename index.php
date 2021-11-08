<?php
    session_start();
    require "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <title>My Book Store</title>
</head>
<body style="background-image: linear-gradient(90deg, #72f28e, #59b3b9)">
    <div class="container mt-4">
        <h1 class="display-4 text-center"><i class="fas fa-book"></i>My<span class="text-primary">Book</span>Stock</h1><br>
        <!--Form-->
        <?php
        if(isset($_SESSION["success"])){
            echo '<p style="color:black">'.$_SESSION["success"].'</p>';
            unset($_SESSION['success']);
        }
        ?>
        <form action="añadir.php" method="post" >
            <div class="form-group">
                <label>ISBN</label>
                <input type="text" name="isbn" id="isbn" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Titulo</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Autor</label>
                <input type="text" name="autor" id="autor" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control"  required >
            </div>
            
            <div class="form-group">
                <label>Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" required>
            </div>
            <div>
                <input type="submit" value="Add Book" class="btn btn-primary btn-block" required>
            </div>
        </form>
        <!--List-->
        <?php
        //$smtm = $pdo->query("SELECT COUNT(*) FROM Libros");
        $smtm = $pdo->query("SELECT COUNT(*) FROM Libro");
        $count = $smtm->fetchColumn();
        if($count > 0){ 
            echo('<table class="table table-striped mt-4" id="Book-list">');   
                echo('<thead>');
                    echo('<tr>');
                        echo('<th>ISBN</th>');   
                        echo('<th>Titulo</th>');        
                        echo('<th>Autor</th>');        
                        echo('<th>Descripcion</th>');
                        echo('<th>Stock</th>');
                        echo('<th>Precio</th>');       
                        echo('<th>Edit</th>');        
                        echo('<th>Delete</th>');  
                    echo('</tr>');
                echo(' </thead>');
                echo('<tbody>');   
            //$smtm = $pdo->query("SELECT * FROM libros");
            $smtm = $pdo->query("SELECT * FROM libro");
            while($row= $smtm->fetch(PDO::FETCH_ASSOC)){
                echo "<tr><td>";
                echo(htmlentities($row['isbn']));
                echo "</td><td>";
                echo(htmlentities($row['titulo']));
                echo "</td><td>";
                echo(htmlentities($row['autor']));
                echo "</td><td>";
                echo(htmlentities($row['descripcion']));
                echo "</td><td>";
                echo(htmlentities($row['stock']));
                echo "</td><td>";
                echo(htmlentities($row['preio']));
                echo "</td><td>";
                echo('<a href="#">Edit</a>');
                echo "</td><td>";
                echo('<a href="#">Delete</a>');
                echo("</td></tr>\n");
            }

                
                echo('</tbody>');    
            echo('</table>');    
        
            
        }
        ?>
    </div>
</body>
</html>

