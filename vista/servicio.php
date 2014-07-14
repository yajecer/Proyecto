<h3>Servicio</h3>
<form action="index.php" id="contact-formr" method="post" enctype="multipart/form-data">
		<label><span class="text-form">Nombre:</span><input type="text" name="name" value="<?php if(isset($dataservicio[0][1])){echo htmlspecialchars($dataservicio[0][1]);}?>" required/></label>
		<label><span class="text-form">Categoría:</span>
			<?php if(isset($dataservicio[0][7])){ 
			$categoriaarray = array("","Profesionales/Especializados","Hogar","Educación","Belleza","Creativos","Otros");
			?>
			<input type="text" name="categoria" value="<?php echo htmlspecialchars($categoriaarray[$dataservicio[0][7]]);?>" readonly/></label>
			<?php }else{ ?>
			<select name="categoria">
			  <option value="0" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==0){echo 'selected';}?>>Profesionales/Especializados</option>
			  <option value="1" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==1){echo 'selected';}?>>Hogar</option>
			  <option value="2" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==2){echo 'selected';}?>>Educación</option>
			  <option value="3" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==3){echo 'selected';}?>>Belleza</option>
			  <option value="4" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==4){echo 'selected';}?>>Creativos</option>
			  <option value="5" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==5){echo 'selected';}?>>Otros</option>
			</select>
			 <?php } ?>
		</label>
		<label><span class="text-form">Subcategoría:</span>
			<?php if(isset($dataservicio[0][8])){ 
				$indice=$dataservicio[0][8];
				$indice=$indice-1;
			?>
			<input type="text" name="subcategoria" value="<?php echo htmlspecialchars($subcategorias[$indice][1]);?>" readonly/></label>
			<?php }else{ ?>
			<select name="subcategoria">
			  <option value="0">Seleccionar Subcategoría</option>
			  <?php foreach ($subcategorias as $subcategoria): ?>
				<option value="<?php echo $subcategoria[0]; ?>" <?php if(isset($dataservicio[0][8]) && $subcategoria[0]==$dataservicio[0][8]){echo 'selected';}?>><?php echo $subcategoria[1]; ?></option>
			  <?php endforeach; ?>
			</select>
			 <?php } ?>
		</label>
		<?php if(isset($dataservicio[0][5])){ ?>
		<label><span class="text-form">Fecha de Inicio:</span><input type="text" name="fechaInicio" value="<?php if(isset($dataservicio[0][5])){echo htmlspecialchars($dataservicio[0][5]);}?>" readonly required/></label>
		<?php }else{ ?>
		<label><span class="text-form">Fecha de Inicio:</span><input type="date" name="fechaInicio" value="<?php if(isset($dataservicio[0][5])){echo htmlspecialchars($dataservicio[0][5]);}?>" required/></label>
		<?php } ?>
		<label><span class="text-form">Fecha de Final:</span><input type="date" name="fechaFin" value="<?php if(isset($dataservicio[0][6])){echo htmlspecialchars($dataservicio[0][6]);}?>" required/></label>
		<label><span class="text-form">Costo:</span><input type="text" name="costo" value="<?php if(isset($dataservicio[0][3])){echo htmlspecialchars($dataservicio[0][3]);}?>" required/></label>
		<label><span class="text-form">Descripción:</span><input type="text" name="descripcion" value="<?php if(isset($dataservicio[0][2])){echo htmlspecialchars($dataservicio[0][2]);}?>" required/></label>
		<div class="buttons">
			<input type="Submit" value="Guardar"/>
			<?php if(isset($dataservicio)){ ?>
			<input type="hidden" name="actionform" value="actualServ"/>
			<?php }else{ ?>
			<input type="hidden" name="actionform" value="addServ"/>
			<?php } ?>
			<input type="hidden" name="id" value="<?php if(isset($dataservicio[0][0])){echo $dataservicio[0][0];}?>"/>
		</div>
</form>