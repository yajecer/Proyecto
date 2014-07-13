<h3>Usuario</h3>
<form action="index.php" id="contact-formr" method="post" enctype="multipart/form-data">
		<label><span class="text-form">Usuario:</span><input type="text" name="user" value="<?php echo htmlspecialchars($datauser[0][5]);?>"/></label>
		<label><span class="text-form">Nombre:</span><input type="text" name="user" value="<?php echo htmlspecialchars($datauser[0][4]);?>"/></label>
		<label><span class="text-form">Correo electrónico:</span><input type="text" name="user" value="<?php echo htmlspecialchars($datauser[0][3]);?>"/></label>
		<label><span class="text-form">F. de nacimiento:</span><input type="text" name="user" value="<?php echo htmlspecialchars($datauser[0][6]);?>"/></label>
		<label><span class="text-form">Género:</span><input type="text" name="user" value="<?php echo htmlspecialchars($datauser[0][7]);?>"/></label>
		<label><span class="text-form">Profesión:</span><input type="text" name="user" value="<?php echo htmlspecialchars($datauser[0][7]);?>"/></label>
		<label><span class="text-form">Perfil:</span><input type="text" value="<?php echo htmlspecialchars($datauser[0][4]);?>"/></label>
		<label><span class="text-form">Contraseña:</span><input type="text" value=""/></label>
		<label><span class="text-form">Confirmación Contraseña:</span><input type="text" value=""/></label>
		<div class="buttons">
			<a onClick="document.getElementById('contact-formr').submit()">Aceptar</a>
			<input type="hidden" name="actionform" value="register"/>
		</div>
</form>