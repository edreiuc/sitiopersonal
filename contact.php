<?php
include 'header.php';
?>
<!-- CONTENIDO de contacto -->
<div class="col-md-12 topdiv">
		<div class="container wit">
			<div class="row padbuttom">
				<div class="col-md-12">
					<div class="page-header">
					  <h1 class="fonth1">Biografia <small>Algo sobre mi</small></h1>
					</div>
				</div>
				<div class="col-md-6" style="padding-top: 2%">
					<div class="jumbotron">
						<h2>Contactame</h2>
							<form method="POST" name="fcontacto" id="fcontacto" action="clases/send.php">

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
				<div class="col-md-6" style="padding-top: 2%; padding-bottom: 8%;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.7732308785967!2d-89.60936299999996!3d20.96162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56717271431775%3A0x2314bdf88f705c67!2sRC+Sistema+S.C.P!5e0!3m2!1sen!2smx!4v1419018143990" class="mapsize bord" ></iframe>
				</div>
			</div>
		</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>