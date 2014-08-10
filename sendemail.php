<?php

    $nombre = @trim(stripslashes($_POST['Nombre'])); 
    $apellido = @trim(stripslashes($_POST['Apellido']));
    $telefono = @trim(stripslashes($_POST['Telefono'])); 
    $email = @trim(stripslashes($_POST['Email'])); 
    $mensaje = @trim(stripslashes($_POST['Mensaje'])); 

    $email_from = $email;
    $email_to = 'r.i.o.p@live.cl';
    $subject = 'Contacto';
    
    $body = 'Nombre: ' . $nombre . "\n\n" . 'Apellido: ' . $apellido . "\n\n" .'Telefono: ' . $telefono . "\n\n" . 'Email: ' . $email . "\n\n" .  'Mensaje: ' . $mensaje;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

//    echo json_encode($status);
//    die;

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contacto | Metal Plaza</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>-->
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <!--<![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Nosotros.html">Nosotros</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#.html">Instalacion</a></li>
                            <li><a href="Garantia.html">Garantia</a></li>
                        </ul>
                    </li>
                    <li><a href="Portfolio.html">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catalogo <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="Juegos.html">Juegos Infantiles</a></li>
                            <li><a href="Deportes.html">Deportes y Ejercicios</a></li>
                            <li><a href="Moviliario.html">Moviliario Urbano</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="Contacto.html">Contacto</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section id="contact-page" class="container">
        <div class="status alert alert-success">Mensaje enviado con exito</div>   
                <div class="form-group">
                    <button type="submit" onclick=" location.href='Contacto.html' " class="btn btn-primary btn-lg">Volver</button>
                </div>
    </section> 
    <div style="height:320px; width: 1024px"></div>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <!--&copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.-->
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="Nosotros.html">Nosotros</a></li>
                        <li><a href="Contacto.html">Contacto</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>