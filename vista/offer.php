<h3>Oferta</h3>
<form action="index.php" id="contact-formr" method="post" enctype="multipart/form-data">

		<label><span class="text-form">Nombre:</span><input type="text" name="user"/></label>
		<label><span class="text-form">Apellido:</span><input type="text" name="user"/></label>
		<label><span class="text-form">Correo electrónico:</span><input type="text" name="user"/></label>
		<label><span class="text-form">Fecha de nacimiento:</span><input type="text" name="user"/></label>
		<label><span class="text-form">Género:</span><input type="text" name="user"/></label>
		<div class="buttons">
			<a onClick="document.getElementById('contact-formr').submit()">Aceptar</a>
			<input type="hidden" name="actionform" value="register"/>
		</div>
</form>