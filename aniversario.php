<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SITE Edrei UC</title>
	<link href='http://fonts.googleapis.com/css?family=Bitter|Cabin|Play|Hammersmith+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/sticky.css">
	<link rel="shortcut icon" href="img/uc.ico" /> 
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
		<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
		
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
				<div class="col-md-6" style="padding-top: 6%">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="img/h1.jpg" alt="heidy1">
					      <div class="carousel-caption">
					        <h3>Hola amor</h3>
    						<p>Como estas?</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="img/h2.jpg" alt="heidy2">
					      <div class="carousel-caption">
					        <h3>Cuento las horas</h3>
    						<p>cuando te vas</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="img/h3.jpg" alt="heidy3">
					      <div class="carousel-caption">
					        <h3>Dame mil años</h3>
    						<p>para amarte mas y mas</p>
					      </div>
					    </div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>
				</div>
				<div class="col-md-6 titulos" style="padding-top: 4%">
					
					<center><strong><h2>FELIZ ANIVERSARIO</h2></strong>
					<h5>MI AMOR</h5></center>
					<div class="parrafo" style="text-align: center"><p>Un día muy especial llegó a mi vida una princesa de las más hermosas que jamás había visto, desde entonces ella forma parte de mi mundo y me dije a mi mismo que nunca olvidaría el día en el cual la conocí; pruebame si tu princesa mia no lo haz olvidado para pasar a tu siguiente sorpresa: </p> 
							
							<p>Ingresa la fecha: <input name="fecha" type="text" id="datepicker"></p>
						

						<button id="verdad" class="btn btn-info">ACEPTAR</button>
					</div>
				
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
<script>
			$.datepicker.regional['es'] = {
			 closeText: 'Cerrar',
			 prevText: '<Ant',
			 nextText: 'Sig>',
			 currentText: 'Hoy',
			 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
			 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
			 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
			 weekHeader: 'Sm',
			 dateFormat: 'dd/mm/yy',
			 firstDay: 1,
			 isRTL: false,
			 showMonthAfterYear: false,
			 yearSuffix: ''
			 };
			 $.datepicker.setDefaults($.datepicker.regional['es']);

			$(function(){
			$( "#datepicker" ).datepicker();
			});

			jQuery(function () {
			    jQuery("#verdad").click(function () {
					if ($('#datepicker').val()=='13/03/2012') {
					window.location.replace("video.php");
					}
					else {
					alert('Oops te haz equivocado');
					}
			    });
			});
		</script>
</html>