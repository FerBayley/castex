<!doctype html>
<html lang="es-Ar">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=KoHo:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/main2.css" />
    <script src="https://kit.fontawesome.com/600d9c40f5.js"></script>

    <title>Chorizos Castex</title>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145698713-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-145698713-1');
    </script>



  </head>
  <body>

    <?php include("includes/preheader.php"); ?>

    <?php include("includes/header.php"); ?>

    <section class="contenedorContacto">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="tituloDestacadoPagina">CONTACTO</h2>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="col">
                <hr>
                <br>
            </div>
        </div>
    </div>    

    <section class="formulario">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NOMBRE Y APELLIDO">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TELEFONO">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EMAIL">
                        </div>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>Que producto quiere comprar?</option>
                            <option value="1">Chorizos</option>
                            <option value="2">Salchichas parrilleras</option>
                            <option value="3">Hamburguesas</option>
                        </select>
                        
                        <br>
                        <br>

                        <button type="submit" class="btn btn-primary">CONTACTAR PARA COMPRAR</button>
                        <br>
                    </form>
                </div>

                <div class="col-sm-12 col-md-6 columnaImagenPedidos">
                    <img src="assets/images/info-nutricional.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php include("includes/infonutricional.php"); ?>

    <?php include("includes/pautaburger.php"); ?>

    <br><br><br><br>

    <?php include("includes/titulorecetas.php"); ?>

    <?php include("includes/recetadestacada.php"); ?>

    <?php include("includes/extractohistoria.php"); ?>

    <?php include("includes/cerdito.php"); ?>

    <?php include("includes/prefooter.php"); ?>

    <?php include("includes/footer.php"); ?>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>