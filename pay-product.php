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
    <title>Document</title>
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
    <!--Estos datos no se guardan en la base de datos ya que es un proyecto escolar-->
    <section class="container pt-3">
        <h3>Añade una tarjeta como método de pago</h3>
        <form class="row g-3">
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Titular de la tarjeta</label>
                <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-2">
                <label for="inputPassword4" class="form-label">Número de tarjeta</label>
                <input type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-2">
                <label for="inputEmail4" class="form-label">Fecha de caducidad</label>
                <input type="text" class="form-control" placeholder="MM" id="inputEmail4">
            </div>
            
            <div class="col-md-2">
                <label for="inputPassword4" style="visibility:hidden" class="form-label">Nothing here</label>
                <input type="text" class="form-control" placeholder="YY"  id="inputPassword4">
            </div>
            <div class="col-md-2">
                <label for="inputPassword4" class="form-label">Código de seguridad</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <button class="btn" onClick="goBackToIndex()">Pagar</button>
            </div>
        </form>
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
    <script src="payment_confirmation.js"></script>
</body>
</html>