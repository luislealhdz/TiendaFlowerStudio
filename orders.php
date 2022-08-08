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
<!--$cnx = mysqli_connect("localhost:33068","hungrystudent","12345","db_peliculas");-->
<body>
    <!--Barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg">
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
    <!--Tabla de productos-->
    <section class="container pt-3">
        <h2>Pedidos pendientes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">CP</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Nombre del destinatario</th>
                    <th scope="col">Teléfono del destinatario</th>
                    <th scope="col">Nombre del comprador</th>
                    <th scope="col">Teléfono del comprador</th>
                    <th scope="col">Entregado</th>
                </tr>
            </thead>
            <?php
                //Servidor, Usuario, Contraseña BD
                $connection = mysqli_connect("Nada","que","ver","aquí");
                $query = "SELECT * FROM product_order";
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
                        <?php echo $show['6']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['7']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['8']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['9']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['4']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['5']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['2']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <?php echo $show['3']?>
                    </th>
                    <th scope = "row" class = "pt-3 text-center">
                        <button type="button" class="btn btn-success">
                            <a href="product-delivered.php? id=<?php echo $show['0']?>">
                                <span class="material-icons-outlined text-light">
                                    done
                                </span>
                            </a>
                        </button>
                    </th>
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