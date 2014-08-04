<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $nombre = @trim(stripslashes($_POST['Nombre'])); 
    $apellido = @trim(stripslashes($_POST['Apellido']));
    $telefono = @trim(stripslashes($_POST['Telefono']));
    $email = @trim(stripslashes($_POST['Email'])); 
    $mesaje = @trim(stripslashes($_POST['Mensaje'])); 

    $subject = 'Contacto Pagina';
    $email_from = $email;
    $email_to = 'r.i.o.p@live.com';

    $body = 'Nombre: ' . $nombre . "\n\n" .  'Apellido: ' . $apellido . "\n\n" .'Telefono: ' . $telefono . "\n\n" .'Email: ' . $email . "\n\n" . 'Mensaje: ' . $mensaje;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;