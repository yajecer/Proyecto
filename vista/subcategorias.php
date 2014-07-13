<div id="page3">
	<section id="content">
		<div class="wrapper">
			<article class="col-2">
				<h3 class="p1"><?php echo $categoria;?></h3>
				<h4>Subcategorías</h4>
				<ul class="list-2">
					<?php foreach ($subcategorias as $subcategoria): ?>
						<li><a href="<?php echo 'index.php?namePage=subcategorias&s='.$subcategoria[3].'&ser='.$subcategoria[0]; ?>"><?php echo $subcategoria[1]; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</article>
			<div class="col-y">
				<ul class="servicio">
				<?php foreach ($dataservices as $dataservice): ?>
						<li><b><?php echo $dataservice[1];?></b></li>
						<li><b>Descripción:</b> <?php echo $dataservice[2];?></li>
						<li>Costo: <?php echo htmlspecialchars($dataservice[3]);?></li>
						<li>Lugar: <?php echo $dataservice[4];?></li>
						<li>Fecha Inicio: <?php echo htmlspecialchars($dataservice[5]).' Fecha Final: '. htmlspecialchars($dataservice[6]);?></li>
						<li class="li_servicio">Contacto: <?php echo $dataservice[4]." E-mail: ".$dataservice[4];?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="block"></div>
	</section>
</div>