<header>
	<div class="indent">
		<div class="row-top">
			<div class="wrapper">
				<h1>Contact</a></h1>
				<span class="user">
				<?php	
					// Comprobamos si existe la variable
					if ( isset ( $_SESSION['nombre'] ) ) {
					 // Si existe
					 echo $_SESSION['nombre'];
				?>
				<a href="index.php?namePage=logout">Desconetar</a>
				<?php
					} else {
					 // Si no existe
					 echo 'Visitante';
				?> 
				<a href="index.php?namePage=login">Login/Registro</a>
				<?php
					}
				?> 
				</span>
			</div>
		</div>
		<nav>
			<ul class="menu">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="index.php?namePage=services">Servicios</a></li>
				<li><a href="index.php?namePage=busq">Búsquedas</a></li>
				<li><a href="index.php?namePage=configuracion">Configuración</a></li>
				<li><a href="index.php?namePage=login">Login/Registro</a></li>
				<li><a href="index.php?namePage=contacts">Contáctenos</a></li>
				<li class="last">
				<a>
					<form action="index.php" id="search-form" method="get" enctype="multipart/form-data">
						<input class="inbusq" type="search" name="search">
						<button class="busq" type="submit"></button>
						<input type="hidden" name="namePage" value="busq">
					</form>
				</a>
				</li>
			</ul>
		</nav>
	</div>
</header>