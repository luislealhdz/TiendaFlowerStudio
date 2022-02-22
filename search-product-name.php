<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
    rel="stylesheet">
    <!--Estilos propios-->
    <link rel="stylesheet" href="admin.css">
    <title>Flower Studio</title>
</head>
<body>
    <!--Barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #e2999f;">
            <div class="container">
            <a href = "index.php"class="navbar-brand" id="title">Flower Studio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" id="navigation" href="admin.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" id="navigation" href="orders.php">Pedidos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--Buscar-->
    <section class="container">
        <div class="container pt-3">
        <h3 class="pe-2">Buscar productos</h3>
            <div class="input-group mb-3">
                <form action="search-product-name.php" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </section>
    <!--Agregar productos-->
    <section class="container">
        <div class="container pt-3">
            <h3 class="pb-3">Agregar productos</h3>
            Captura todos los campos:<br>
            <form class="row row-cols-lg-auto g-3 align-items-center" method="POST" action="sp-insert-product.php">
                <div class="col-12">
                    <div class="input-group">
                        <input class="form-control" placeholder="Nombre del producto" type='text' name='product_name'>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <input class="form-control" placeholder="URL imágen" type='text' name='images'>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <input class="form-control" placeholder="Precio" type='text' name='prize'>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type='submit'>Grabar</button> 
                </div> 
            </form>
        </div>
    </section>
    <!--Tabla de productos-->
    <section class="container pt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">URL Imagen</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <?php
                //Buscar
                $search = $_POST['search'];
                //Servidor, Usuario, Contraseña BD
                $connection = mysqli_connect("localhost:33068","hungrystudent","12345","flowers");
                $query = "SELECT * FROM product WHERE product_name LIKE '$search' '%'";
                $result = mysqli_query($connection, $query);
                while($show = mysqli_fetch_row($result)){
            ?>
            <tbody>
                <tr>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['0']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['1']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['2']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['3']?>
                    </th>
                    <th scope = "row" class = "text-center">
                        <button type="button" class="btn btn-success">
                            <a href="edit-product.php?
                            id=<?php echo $show['0']?> &
                            product_name= <?php echo $show['1']?> &
                            images= <?php echo $show['2']?> &
                            prize= <?php echo $show['3']?>
                            ">
                                <span class="material-icons-outlined text-light">
                                    edit
                                </span>
                            </a>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <a href="sp-delete-product.php? id=<?php echo $show['0']?>">
                                <span class="material-icons-outlined text-light">
                                    delete
                                </span>
                            </a>
                        </button>
                    </td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
    </section>
    
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>
</html>