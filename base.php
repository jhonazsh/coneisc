<?php require_once('ti.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="img/logo-favicon.png">
    <title><?php startblock('title'); ?> <?php endblock(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-theme.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/vendor/style.css">

    <link rel="stylesheet" href="css/estilos.css">

    

    <?php startblock('style'); ?> 

    <?php endblock(); ?>
    
</head>
<body>

	<!--CESAR-->
    <div class="navbar navbar-default navbar-fixed-top navbar-default-customize navbar-customize" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.php"><span class="titulo"> <img src="img/logo.png" class="logo" width="30%" height="105%"> <span class="ti">XXII CONEISC 2014</span></span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="ponentes.php"><span class="glyphicon glyphicon-user color"></span> Ponentes</a></li>
                    <li><a href="eventos.php"><span class="glyphicon glyphicon-flash color"></span> Eventos</a></li>
                    <li><a href="cronograma.php"><span class="glyphicon glyphicon-calendar color"></span> Cronograma</a></li>
                    <li><a href="trujillo.php"><span class="glyphicon glyphicon-map-marker color"></span> Trujillo</a></li>
                    <li><a href="contactanos.php"><span class="glyphicon glyphicon-envelope color"></span> Contáctanos</a></li>
                    <li><a href="http://www.devcode.la/coneisc" target="_blank"><img src="https://s3.amazonaws.com/devcodela/img/logo-devcodela.png" height="25px"></a></li>
                    <li class="divider"></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <?php startblock('contenido'); ?> 
      
    <?php endblock(); ?>

	<footer class="footer">
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-9 ">
          <div>
            <div class="btn btn-azul-no">Contáctanos</div> 
          </div>
            
             
          <ul class="contact">
            <li><b>E-mail:</b> informes@coneisc.pe</li>
            <li><b>Dirección:</b> Av. Juan Pablo II 562</li>
            <li><b>Teléfono:</b> Movistar - 948185756, Claro - 944221895</li>
          </ul>
          
        </div>
        <div class="col-md-3">
            <div class="btn btn-azul-no">Síguenos</div> 
            
          <ul class="contact">
            <li><a href="https://www.facebook.com/xxiiconeisc" target="_blank"><span class="icon-facebook icono-redes"></span> /xxiiconeisc</a></li>
            <li><a href="https://twitter.com/coneiscUNT2014" target="_blank"><span class="icon-twitter icono-redes"></span> /coneiscUNT2014</a></li>
            <li><a href="https://www.youtube.com/coneisc2014" target="_blank"><span class="icon-youtube icono-redes"></span> /coneisc2014</a></li>
          </ul>
          
        </div>
      </div>
    </div>
        <br>
	</footer>

    <!-- *** -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <?php startblock('scripts'); ?>
    <?php endblock(); ?>

</body>
</html>