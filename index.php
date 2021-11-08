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
        <table class="table table-striped mt-4" id="Book-list">
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</body>
</html>

