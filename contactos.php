<?php	
	
	$nombre = $_POST['nombre'];		
	$asunto = $_POST['subject'];								
	$mensaje = $_POST['mensaje'];									
	$email = $_POST['email'];	
		
	$sender = 'factura.cerediasa@yahoo.com';
	$recipient = $email;
	$subject = "Correo web: $asunto";
	$message = "
		CEREDIASA, el usuario $nombre se contact&oacute por medio de la web.
		El mensaje es: $mensaje
		El correo de contacto del usuario es: $email
					";
		
	$headers = 'From: ' .' <'.$sender.'>' . "\r\n" . 'Cc:<ginysp@gmail.com>';
	if(mail($recipient, $subject, $message, $headers)){	
		echo "<script>alert('Su mensaje ha sido enviado');</script>";		
		echo "<script>setTimeout(\"location.href = 'contacto.html';\",500);</script>";		
	} else {
		echo "<script>alert('Ocurrio un error al enviar el mensaje');</script>";		
		echo "<script>setTimeout(\"location.href = 'contacto.html';\",500);</script>";		
	}
?>