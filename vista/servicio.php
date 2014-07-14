<h3>Servicio</h3>
<form action="index.php" id="contact-formr" method="post" enctype="multipart/form-data">
		<label><span class="text-form">Nombre:</span><input type="text" name="user" value="<?php if(isset($dataservicio[0][1])){echo htmlspecialchars($dataservicio[0][1]);}?>" required/></label>
		<label><span class="text-form">Categoría:</span><input type="text" name="user" value="<?php if(isset($dataservicio[0][7])){echo htmlspecialchars($dataservicio[0][7]);}?>" required/></label>
		<label><span class="text-form">Subcategoría:</span><input type="text" name="user" value="<?php if(isset($dataservicio[0][8])){echo htmlspecialchars($dataservicio[0][8]);}?>" required/></label>
		<label><span class="text-form">Categoría:</span>
			<select>
			  <option value="1" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==1){echo 'selected';}?>>Profesionales/Especializados</option>
			  <option value="2" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==2){echo 'selected';}?>>Hogar</option>
			  <option value="3" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==3){echo 'selected';}?>>Educación</option>
			  <option value="4" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==4){echo 'selected';}?>>Belleza</option>
			  <option value="5" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==5){echo 'selected';}?>>Creativos</option>
			  <option value="6" <?php if(isset($dataservicio[0][7]) && $dataservicio[0][7]==6){echo 'selected';}?>>Otros</option>
			</select>
		</label>
		<label><span class="text-form">Subcategoría:</span>
			<select>
			  <option value="0">Seleccionar Subcategoría</option>
			  <?php foreach ($subcategorias as $subcategoria): ?>
				<option value="<?php echo $subcategoria[0]; ?>" <?php if(isset($dataservicio[0][7]) && $subcategoria[0]==$dataservicio[0][7]){echo 'selected';}?>><?php echo $subcategoria[1]; ?></option>
			  <?php endforeach; ?>
			</select>
		</label>
		<label><span class="text-form">Fecha de Inicio:</span><input type="text" name="user" value="<?php if(isset($dataservicio[0][5])){echo htmlspecialchars($dataservicio[0][5]);}?>" readonly required/></label>
		<label><span class="text-form">Fecha de Final:</span><input type="date" name="user" value="<?php if(isset($dataservicio[0][6])){echo htmlspecialchars($dataservicio[0][6]);}?>" required/></label>
		<label><span class="text-form">Costo:</span><input type="text" name="user" value="<?php if(isset($dataservicio[0][3])){echo htmlspecialchars($dataservicio[0][3]);}?>" required/></label>
		<label><span class="text-form">Descripción:</span><input type="text" name="user" value="<?php if(isset($dataservicio[0][2])){echo htmlspecialchars($dataservicio[0][2]);}?>" required/></label>
		<div class="buttons">
			<input type="Submit" value="Guardar"/>
			<input type="hidden" name="actionform" value="modifService"/>
		</div>
</form>