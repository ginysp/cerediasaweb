<!doctype html>
<html>
	<head>
		<title>CEREDIASA S.A</title>
		<link rel="icon" href="favicon.png" type="image/png">	
		
		<script src="js/jquery.min.js"></script>
		<script src="js/moment-with-locales.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="js/wow.js"></script>	

		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/bootstrap-datetimepicker.css" rel="stylesheet"/>		
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css">	
		<link href="css/animate.css" rel="stylesheet" type="text/css">		
		
		
			
	</head>
	<?php
					$servername = "127.0.0.1";
					$username = "root";
					$password = "";
					$dbname = "citas";

					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
						die("La conexion a la BD ha fallado " . $conn->connect_error);
					} 

					$sql = "SELECT COUNT(Fecha),Fecha FROM reservas GROUP BY Fecha HAVING COUNT(Fecha) >=3";
					$result = $conn->query($sql);
					$fechas = "";
					
					if ($result->num_rows > 0) {
						
						while($row = $result->fetch_assoc()) {						
							$fechas = $fechas. "moment('". $row["Fecha"]. "','YYYY-MM-DD'),";
						}
					} 
					
					echo '<input class="text" type="hidden" id="fechasOcupadas" name="fechasOcupadas" value="'. $fechas .'">';
					
					
					$conn->close();
			?>
	<body>
		<header class="header" id="header">		
			<div class="container">
				<h1>Centro de Reparaci&oacuten y Diagn&oacutestico Automotriz Salazar</h1>
				<h1 class="animated fadeInDown delay-07s">CEREDIASA S.A</h1>					
			</div>
		</header>
		
		<nav class="menu">		
			<div class="container">
				<ul class="menuletras">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="servicios.html">Servicios</a></li>
					<li><a href="marcas.html">Marcas</a></li>
					<li><img src="img/cerediasa96.png" alt="Logo CEREDIASA"></li>
					<li><a href="galeria.html">Galeria</a></li>
					<li><a href="contacto.html">Contacto</a></li>
					<li><a href="reservas.php">Reserva Online</a></li>
				</ul>		
			</div>
		</nav>
		
		<section class="bloque">		
			<div class="container">
				<h2>Reserve nuestros servicios</h2>		 
	 
				<div class="row">						
				
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/diagnostico.png" alt="Diagnostico" style="height: 200px; width: 200px;">
							<div class="caption">
								<h3>Diagnostico vehicular</h3>
								<p><input  type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/cambioaceite.jpg" alt="Diagnostico" style="height: 200px; width: 200px;">
							<div class="caption">
								<h3>Cambio de aceite</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/afinamiento.jpg" alt="Diagnostico" style="height: 200px; width: 345px;">
							<div class="caption">
								<h3>Afinamiento</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/frenos.jpg" alt="Diagnostico" style="height: 200px; width: 345px;">
							<div class="caption">
								<h3>Frenos</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/mant.jpg" alt="Diagnostico" style="height: 200px; width: 345px;">
							<div class="caption">
								<h3>Mantenimiento preventivo</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/compracarro.jpg" alt="Diagnostico" style="height: 200px; width: 200px;">
							<div class="caption">
								<h3>Revision por compra de vehiculo</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/suspension.jpg" alt="Diagnostico" style="height: 200px; width: 200px;">
							<div class="caption">
								<h3>Suspension</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/direccion.jpg" alt="Diagnostico" style="height: 200px; width: 200px;">
							<div class="caption">
								<h3>Direccion</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/clutch.jpg" alt="Diagnostico" style="height: 200px; width: 200px;">
							<div class="caption">
								<h3>Clutch</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/otros.png" alt="Diagnostico" style="height: 200px; width: 200px;">
							<div class="caption">
								<h3>Otros</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/reservas/riteve.png" alt="Riteve">
							<div class="caption">
								<h3>Revision para RTV</h3>
								<p><input type="button" class="serviciobtn btn btn-default" role="button" data-toggle="modal" data-target="#ModalServicios" value="Solicitar servicio"/></p>
							</div>
						</div>
					</div>			
					
				</div>	 
			</div>
		</section>	
		
		
		<div class="modal fade" id="ModalServicios" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Solicitar cita</h4>
					</div>
					<div class="modal-body">						
						<form method="post" role="form" action="reservaservic.php">
							<p>Servicio solicitado
							<input id="serviciosolicitado" name="serviciosolicitado" type="text" class="form-control" readonly="true"/></p>
							
							<p>Seleccione la fecha
							<div class="input-group date" id="datetimepickerCita">
								<input id="fechaservicio" name="fechaservicio" type="text" class="form-control" />
								<span class="input-group-addon">
									<span class="fa fa-calendar"></span>
								</span>
							</div></p>						
						
							<p>Nombre
							<input id="nombre" name="nombre" type="text" class="form-control" maxlength="75"/></p>					
						
							<p>Apellido
							<input id="apellido" name="apellido" type="text" class="form-control" maxlength="75"/></p>						
						
							<p>Telefono
							<input id="telefono" name="telefono" type="text" class="form-control" maxlength="25"/></p>					
						
							<p>Email
							<input id="email" name="email" type="text" class="form-control" maxlength="150"/></p>
						
							<input class="btn btn-default" type="submit" value="Enviar Solicitud"/>
				
						</form>
					</div>
					
				</div>
			</div>
		</div>
		
		<footer class="footer">
			<div class="container">			
				<span>&copy; 2018 CEREDIASA S.A - Todos los derechos reservados</span>		
		</footer>
		<script>
			new WOW().init();		

			function cambiarCalendario() 
			{				
				$('#datetimepickerCita').datetimepicker
					(
						{
							locale: 'es',
							daysOfWeekDisabled: [0],
							enabledHours: [8,9,10,11,12,13,14,15,16],							
							format:'YYYY-MM-DD',
							disabledDates: [document.getElementById("fechasOcupadas").value]
						}
					);
            };
			
			$('.serviciobtn').on('click', function(){			
				var h3 =  $(this).closest(".thumbnail").find("h3").text();
				$("#serviciosolicitado").val(h3);
				cambiarCalendario();
			});	
		</script>
	</body>
</html>
