<?php
include 'header.php';
?>

<!-- contenido -->
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="padding-top: 6%">
					<div class="center-block"><img src="img/2.jpg" alt="yo" class="img-circle img-responsive"></div>
				</div>
				<div class="col-md-6" style="padding-top: 6%">
					<div class="jumbotron">
					  <h1>Hola,</h1>
					  <p>Algo Sobre mi:</p>
						<div class="row" style="padding-bottom:3%;">
							<div class="col-xs-6 col-sm-4"><a href="#"><div class="circle-text"><div>GRAFICOS</div></div></a></div>
							<div class="col-xs-6 col-sm-4"><a href=""><div class="circle-text"><div>HOBBIES</div></div></a></div>
							<div class="clearfix visible-xs-block"></div>
							<div class="col-xs-6 col-sm-4"><a href=""><div class="circle-text"><div>TEST</div></div></a></div>
					 	</div>
					  
						<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  Leer más
						</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h3 class="modal-title" id="myModalLabel">Biografía (25/12/1991)</h3>
						      </div>
						      <div class="modal-body">
						        <div class="biograf">
						        	<h4>CEDULA PROFESIONAL</h4>
						        	<p></p>
						        	<hr>
						        	<h4>FORMACION ACADEMICA</h4>
						        	<div class="center-block">
						        		<h5><strong>Intitut Universitaire Technologique de Troyes, Troyes, 10000, Francia</strong></h5>
						        		<p>Métiers de l'internet et du multimedia</p>
						        		<h5><strong>Universidad Tecnológica Metropolitana, Santa Rosa, 97000, Merida, Yucatán</strong></h5>
						        		<p>Multimedia y comercio electrónico</p>
						        		<h5><strong>Colegio de Bachilleres del Estado de Yucatán Plantel Umán, 97390, Umán, Yucatán</strong></h5>
						        		<p>Físico matemático</p>
						        	</div>
						        	<hr>
						        	<h4>CONOCIMIENTOS INFORMATICOS</h4>
						        	<p>*Paqueteria Office *Photoshop *Illustrator *Premiere *After Effects *3D MAX *SublimeText</p>
						        	<p>*PHP *JavaScript *C# *Jquery *Bootstrap *AJAX *Css3 *HTML5</p>
						        	<p>*Laravel *Symfony2 *Prestashop *Joomla</p> 
						        	<hr>
						        	<h4>IDIOMAS</h4>
						        	<ol>
						        		<li>Frances Nivel B1.3</li>
						        		<li>Ingles Basico</li>
						        	</ol>
						        </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>
						<!-- modal -->
					</div>
				</div>
			</div>
		</div>
<?php
include 'footer.php';
?>