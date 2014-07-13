<div id="page3">
	<section id="content">
		<div class="wrapper">
			<article class="col-2">
				<h2>Buscar</h2>
				<form action="index.php" id="search-form" method="get" enctype="multipart/form-data">
					<input class="inbusq" type="search" name="search">
					<input type="submit" value="Aceptar">
					<input type="hidden" name="namePage" value="busq">
				</form>
			</article>
			<div class="col-y">
				<ul class="servicio">
				<?php foreach ($resultados as $resultado): ?>
						<li><b><?php echo $resultado[1];?></b></li>
						<li><b>Descripción:</b> <?php echo $resultado[2];?></li>
						<li>Costo: <?php echo htmlspecialchars($resultado[3]);?></li>
						<li>Lugar: <?php echo $resultado[4];?></li>
						<li>Fecha Inicio: <?php echo htmlspecialchars($resultado[5]).' Fecha Final: '. htmlspecialchars($resultado[6]);?></li>
						<li class="li_servicio">Contacto: <?php echo $resultado[10]." E-mail: ".$resultado[11];?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="block"></div>
	</section>
</div>