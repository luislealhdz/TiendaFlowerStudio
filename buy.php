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
    <title>Producto</title>
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
    <?php
        $product_name = $_GET['product_name'];
        $images = $_GET['images'];
        $prize = $_GET['prize'];
    ?>
    <div class="container pt-3">
        <div class="row align-items-start">
            <div class="col">
                <img class="img-thumbnai" src=<?=$images?> alt="">
            </div>
            <div class="col">
                <h1><?=$product_name?></h1>
                <h5><?=$prize?></h5> 
                <h5 class="pt-4">Rellene los campos para confirmar la compra</h5>

                <form class="row g-3" method="POST" action="sp-insert-product-order.php">
                    
                    <!--Producto que se quiere comprar-->
                    <input type="text" class="form-control"  style="visibility:hidden" value="<?=$product_name?>" name="ordered_product">
                    
                    <!--Datos del comprador-->
                    <div class="col-md-6">
                        <label class="form-label">Nombre completo del comprador</label>
                        <input type="text" class="form-control"  name='name_buyer'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name='phone_buyer'>
                    </div>
                    <!--Datos del destinatario-->
                    <div class="col-md-6">
                        <label class="form-label">Nombre completo del destinatario</label>
                        <input type="text" class="form-control" name='recipient_name'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name='recipient_phone'>
                    </div>
                    <!--Dirección y CP-->
                    <div class="col-md-6">
                        <label class="form-label">Dirrección</label>
                        <input type="text" class="form-control" name='address'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">CP</label>
                        <input type="text" class="form-control" name='postal_code'>
                    </div>
                    <!--Fecha y hora-->
                    <div class="col-md-6">
                        <label class="form-label">Fecha</label>
                        <input type="text" class="form-control" name='date'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Hora</label>
                        <input type="text" class="form-control" name='hour'>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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