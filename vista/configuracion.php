<div id="page4">
	<section id="content">
		<div class="wrapper">
			<article class="col-2">
				<h3 class="p1">Configuración</h3>
				<ul class="list-2">
					<li><a href="index.php?namePage=configuracion&act=u1">Usuario</a></li>
					<li>
						<a>Servicios</a>
						<ul>
							<li><a href="href="index.php?namePage=configuracion&act=s1">Crear</a></li>
							<?php foreach ($myServicios as $myServicio): ?>
								<li><?php echo $myServicio[1]; ?><a href="<?php echo 'href="index.php?namePage=configuracion&act=s2&id'.$myServicio[0]; ?>">[Eliminar]</a><a href="<?php echo 'href="index.php?namePage=configuracion&act=s3&id'.$myServicio[0]; ?>">[modificar]</a></li>
							<?php endforeach; ?>
						</ul>
					</li>
				</ul>
			</article>
			<div class="col-2">
				<?php	include($content2); ?>
			</div>
		</div>
		<div class="block"></div>
	</section>
</div>