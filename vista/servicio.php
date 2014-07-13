<h3>Servicio</h3>
<form action="index.php" id="contact-formr" method="post" enctype="multipart/form-data">
		<label><span class="text-form">Nombre:</span><input type="text" name="user"/></label>
		<label><span class="text-form">Categoría:</span><input type="text" name="user"/></label>
		<label><span class="text-form">Subcategoría:</span><input type="text" name="user"/></label>
		<label><span class="text-form">Fecha de Inicio:</span><input type="text" name="user"/></label>
		<label><span class="text-form">Fecha de Final:</span><input type="text" name="user"/></label>
		<label><span class="text-form">Costo:</span><input type="text" name="user"/></label>
		<div class="wrapper">
			<div class="text-form">Descripción:</div>
				<div class="extra-wrap">
					<textarea></textarea>
				</div>
			</div>
		<div class="buttons">
			<a onClick="document.getElementById('contact-formr').submit()">Aceptar</a>
			<input type="hidden" name="actionform" value="register"/>
		</div>
</form>