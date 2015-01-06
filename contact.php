<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SITE Edrei UC</title>
	<link href='http://fonts.googleapis.com/css?family=Bitter|Cabin|Play|Hammersmith+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/sticky.css">
	<script src="js/jquery.js"></script>
	<script src="js/custom.js" type="text/javascript"></script>
	<link rel="shortcut icon" href="img/uc.ico" />
	<script>
		function initialize() {
		  var mapOptions = {
		    zoom: 8,
		    center: new google.maps.LatLng(-34.397, 150.644)
		  };

		  var map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);
		}

		function loadScript() {
		  var script = document.createElement('script');
		  script.type = 'text/javascript';
		  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
		      'callback=initialize';
		  document.body.appendChild(script);
		}

		window.onload = loadScript;

    </script>

</head>
<body id="backgr">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 naveg">
					<div class="container">
						<div class="col-md-6 name" style="text-align:center;"><h1>Samuel UC</h1><h4>Programador Web/ Integrador</h4></div>
						<div class="col-md-6" style="padding-top:3.6%;">
							<ul class="nav nav-pills nav-justified">
						  		<li><a href="index.php">INICIO</a></li>
						  		<li><a href="#">PORTAFOLIO</a></li>
						  		<li><a href="contact.php">CONTACTO</a></li>
						  	</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!---END HIDER-->
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="padding-top: 2%">
					<div class="jumbotron">
						<h2>Contactame</h2>
							<form method="POST" name="fcontacto" id="fcontacto" action="./">
								<div class="row">
									<div class="col-md-6">
										<label for="">Nombre:</label>
										<input type="text" name="name" id="name" class="form-control">
									</div>
									<div class="col-md-6">
										<label for="">E-mail:</label>
										<input type="text" name="email" id="email" class="form-control">
									</div>
								</div>
								<label for="">Asunto:</label>
								<input type="text" name="asunto" id="asunto" class="form-control">
								<label for="">Mensaje:</label>
								<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
								<input type="submit" class="btn btn-info" value="Enviar">
								<div id="respuesta" style="display: none;"></div>
							</form>
					</div>
				</div>
				<div class="col-md-6" style="padding-top: 6%">
					<div id="map-canvas"></div>
				</div>
			</div>
		</div>

		<!--FOOTER-->
		<div id="footer">
	      	<div class="container">
		      	<div class="row">
			        <div class="col-md-12 red">
						<ul>
							<li><a href="https://www.facebook.com/Edreiziitho"><img src="img/redes/facebook.png" alt=""></a></li>
							<li><a href="https://twitter.com/Uc_Samuel"><img src="img/redes/twitter.png" alt=""></a></li>
							<li><a href="https://plus.google.com/u/1/114768744197542536884/posts"><img src="img/redes/google.png" alt=""></a></li>
						</ul>
					</div>
					<div class="col-md-12 red">
						<ul>
							<li><p>&copy; Samuel Edrei Uc Angulo</p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>