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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <?php include("Header.php"); ?>

    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>Formulario de Contacto</h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" name="Nombre" class="form-control" required="required" placeholder="Nombre" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" name="Apellido" class="form-control" required="required" placeholder="Apellido" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" name="Telefono" class="form-control" required="required" placeholder="Telefono" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" name="Email" class="form-control" required="required" placeholder="Email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <textarea name="Mensaje" id="Mensaje" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div><!--/.col-sm-8-->
        </div>
    </section><!--/#contact-page-->
    
    <div style="height:15px; width: 1024px"></div>
    
    <?php include("Footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--<script src="js/main.js"></script>-->
</body>
</html>