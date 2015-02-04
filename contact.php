<?php
include 'header.php';
?>
<!-- CONTENIDO -->
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="padding-top: 2%">
					<div class="jumbotron">
						<h2>Contactame</h2>
							<form method="POST" name="fcontacto" id="fcontacto" action="./">
								<div class="row">
									<div class="col-md-6">
										<label>Nombre:</label>
										<input type="text" name="name" id="name" class="form-control">
									</div>
									<div class="col-md-6">
										<label>E-mail:</label>
										<input type="text" name="email" id="email" class="form-control">
									</div>
								</div>
								<label>Asunto:</label>
								<input type="text" name="asunto" id="asunto" class="form-control">
								<label>Mensaje:</label>
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

<?php
include 'footer.php';
?>