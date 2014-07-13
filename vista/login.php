<div id="page4">
	<section id="content">
		<div class="indent-left">
			<div class="wrapper">
				<div class="col-1">
					<h3>Login</h3>
					<form action="index.php" id="contact-form" method="post" enctype="multipart/form-data">
							<label><span class="text-form">Usuario:</span><input type="text" name="user" required /></label>
							<label><span class="text-form">Contraseña:</span><input type="password" name="password" required ></label>
							<div class="buttons">
								<!--a onClick="document.getElementById('contact-form').submit()">Aceptar</a-->
								<input type="hidden" name="actionform" value="login"/>
								<input type="submit">
							</div>
					</form>
				</div>
				<div class="col-2">
					<h3>Registro</h3>
					<form action="index.php" id="contact-form" method="post" enctype="multipart/form-data">
							<label><span class="text-form">Usuario:</span><input type="text" name="user" required /></label>
							<label><span class="text-form">Nombre:</span><input type="text" name="user" required /></label>
							<label><span class="text-form">Correo electrónico:</span><input type="email" name="user" required /></label>
							<label><span class="text-form">F. de nacimiento:</span><input type="date" name="user" required /></label>
							<label><span class="text-form">Profesión:</span><input type="text" name="user" required /></label>
							<label><span class="text-form">Perfil:</span>
								<select>
								  <option value="Cliente" required>Cliente</option>
								  <option value="Proveedor" required>Proveedor</option>
								</select>
							</label>
							<label><span class="text-form">Contraseña:</span><input type="password" required/></label>
							<label><span class="text-form">Confirmación Contraseña:</span><input type="password" required/></label>
							<div class="buttons">
								<!--a onClick="document.getElementById('contact-formr').submit()">Aceptar</a-->
								<input type="hidden" name="actionform" value="register"/>
								<input type="submit">
							</div>
					</form>
				</div>
			</div>
			<div class="block"></div>
		</div>
	</section>
</div>