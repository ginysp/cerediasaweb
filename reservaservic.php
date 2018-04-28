<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "citas";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("La conexion a la BD ha fallado " . $conn->connect_error);
	} 
	
	$servicio = $_POST['serviciosolicitado'];	
	$nombre = $_POST['nombre'];		
	$fechaservicio = $_POST['fechaservicio'];								
	$apellido = $_POST['apellido'];					
	$telefono = $_POST['telefono'];						
	$email = $_POST['email'];
	
	$sqlserv = "SELECT id FROM Servicios WHERE NombreServicio = '$servicio'";	
	$result = $conn->query($sqlserv);
	while($row = $result->fetch_assoc()) {						
							$idservicio = $row["id"];
						}
			
	$sql = "INSERT INTO reservas (idServicio,Fecha,Nombre,Apellido,Telefono,Email) 
			VALUES ($idservicio,'$fechaservicio','$nombre','$apellido','$telefono','$email')";			
	
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('La reserva ha sido guardada');</script>";
		
		$sender = 'factura.cerediasa@yahoo.com';
		$recipient = $email;
		$subject = "Confirmacion de reserva de servicio";
		$message = "
		Hola $nombre, tu cita está confirmada. 
		
		Aquí están los detalles de tu cita:
		Servicio: $servicio
		Fecha: $fechaservicio
		Lugar: San Francisco de Dos Ríos San Jose, Costa Rica					
		Tel: 22278523
					
		Si tienes alguna duda o quisieras reprogramarla, ponte en contacto.
		¡Nos vemos pronto!
					";
		
		$headers = 'From: ' .' <'.$sender.'>' . "\r\n" . 'Cc:<ginysp@gmail.com>';
		mail($recipient, $subject, $message, $headers);		
		echo "<script>setTimeout(\"location.href = 'reservas.php';\",500);</script>";		
	} else {
		echo "<script>alert('Ocurrio un error al agregar la reserva');</script>";		
		echo "<script>setTimeout(\"location.href = 'reservas.php';\",500);</script>";		
	}
	$conn->close();	
	
	
	
?>