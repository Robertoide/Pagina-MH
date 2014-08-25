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
<!--    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>-->
    <!--<![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
    <?php include("Header.php"); ?>

    <section id="contact-page" class="container">
        <div class="status alert alert-success">Mensaje enviado con exito</div>   
                <div class="form-group">
                    <button type="submit" onclick=" location.href='Contacto.php' " class="btn btn-primary btn-lg">Volver</button>
                </div>
    </section> 
    <div style="height:320px; width: 1024px"></div>

    <?php include("Footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--<script src="js/main.js"></script>-->
</body>
</html>