<h3>Usuario</h3>
<form action="index.php" id="contact-form" method="post" enctype="multipart/form-data" onsubmit="return validPassword();">
	<label><span class="text-form">Usuario:</span><input type="text" name="user" value="<?php echo htmlspecialchars($datauser[0][1]);?>" required/></label>
	<label><span class="text-form">Nombre:</span><input type="text" name="name" value="<?php echo htmlspecialchars($datauser[0][5]);?>" required/></label>
	<label><span class="text-form">Correo electrónico:</span><input type="email" name="email" value="<?php echo htmlspecialchars($datauser[0][3]);?>" required/></label>
	<label><span class="text-form">Teléfono:</span><input type="tel" name="telefono" pattern="[0-9]{4}-[0-9]{4}" title="0000-0000" value="<?php echo htmlspecialchars($datauser[0][9]);?>" required/></label>
	<label><span class="text-form">F. de nacimiento:</span><input type="date" name="fechanacimiento" value="<?php echo htmlspecialchars($datauser[0][6]);?>" required/></label>
	<label><span class="text-form">Profesión:</span><input type="text" name="profesion" value="<?php echo htmlspecialchars($datauser[0][7]);?>" readonly/></label>
	<label><span class="text-form">Perfil:</span><input type="text" name="rol" value="<?php echo htmlspecialchars($datauser[0][4]);?>" readonly/></label>
	<label><span class="text-form">Contraseña:</span><input type="password" id="password" name="password" value=""/></label>
	<label><span class="text-form">Confirmación Contraseña:</span><input type="password" id="confirmpassword" name="confirmpassword" value=""/></label>
	<div class="buttons">
		<input type="submit" value="Guardar"/>
		<input type="hidden" name="actionform" value="modifUser"/>
	</div>
</form>