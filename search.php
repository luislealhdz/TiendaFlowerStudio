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
    <link rel="stylesheet" href="style.css">
    <title>Flower Studio</title>
</head>
<body>
    <!--Barra de navegación-->
    <header>
        <nav class="navbar">
            <div class="container">
            <a href = "index.php"class="navbar-brand" id="title">Flower Studio</a>
                <form action="search.php" class="d-flex" method="POST">
                    <input class="form-control me-2" placeholder="Buscar producto" aria-label="Search" name="search">
                    <button class="btn" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>
    <!--Carousel de imágenes en el banner-->
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/977913/pexels-photo-977913.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Flower Studio</h1>
                    <p>Amor en cada flor</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1458282/pexels-photo-1458282.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Diseño floral personalizado</h1>
                    <p>Queremos que tu diseño sea especial</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1154557/pexels-photo-1154557.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Tenemos envíos a domicilio</h1>
                    <p>Nos encargamos que todo salga como lo planeaste</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container pt-2">
            <h3 class="text-center">Nuestras flores</h3>
        </div>
    </section>
    <!--Contenido de tarjetas-->
    <div class="container">
        <div class="row">
            <?php
                $search = $_POST['search'];
                //Servidor, Usuario, Contraseña BD
                $connection = mysqli_connect("localhost:33068","hungrystudent","12345","flowers");
                $query = "SELECT * FROM product WHERE product_name LIKE '$search' '%'";
                $result = mysqli_query($connection, $query);
                while($show = mysqli_fetch_row($result)){
            ?>
            <div class="col-3 pt-3 px-2">
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $show['2']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $show['1']?></h5>
                        <p class="card-text">$<?php echo $show['3']?></p>
                        <a class="btn" href="buy.php?
                            product_name= <?php echo $show['1']?> &
                            images= <?php echo $show['2']?> &
                            prize= <?php echo $show['3']?>">Comprar</a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <footer style="background-color: #e2999f; height: 2em;">
        <div class="container">
            Flower Studio ®
        </div>
    </footer>
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