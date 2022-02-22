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
    <title>Editar producto</title>
</head>
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
                            <a class="nav-link active" aria-current="page" href="admin.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="orders.php">Pedidos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
        $id = $_GET['id'];
        $product_name = $_GET['product_name'];
        $images = $_GET['images'];
        $prize = $_GET['prize'];
    ?>
    <section class="container">
        <div class="container pt-3">
            
            <h2 class="pb-3">Editar productos</h2>
            
            Edite los campos:<br>

            <form class="row row-cols-lg-auto g-3 align-items-center" method="POST" action="sp-edit-product.php">

                <div class="col-12">
                    <div class="input-group">
                        <input class="form-control" type='text' name='id' style="visibility:hidden" value="<?=$id?>">
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="input-group">
                        <input class="form-control" type='text' name='product_name' value="<?=$product_name?>">
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="input-group">
                        <input class="form-control" type='text' name='images' value="<?=$images?>">
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="input-group">
                        <input class="form-control" type='text' name='prize' value="<?=$prize?>">
                    </div>
                </div>
                
                <div class="col-12">
                    <button class="btn btn-primary" type='submit'>Actualizar</button> 
                    <button class="btn btn-outline-primary">
                        <a href="admin.php">
                            Cancelar
                        </a>
                    </button>
                </div> 
            
            </form>
        </div>
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