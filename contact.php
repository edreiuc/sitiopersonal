<?php
include 'header.php';
?>
<!-- CONTENIDO de contacto -->
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
				<div class="col-md-6" style="padding-top: 2%">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.839400813739!2d-89.708234!3d20.91878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f560d4f16d8e475%3A0x82c65d74f808a977!2s17-D+394%2C+Acim%2C+97390+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1423605403091" width="100%" height="500" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
		</div>

<?php
include 'footer.php';
?>