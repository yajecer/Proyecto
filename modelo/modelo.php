<?php
 
	function login()
	{
		if($_POST['password'] && $_POST['user']){
			// Conectar con la base de datos y seleccionarla
			$conexion = connect();
			$sql = "SELECT * FROM puser WHERE user = '".$_POST['user']."'";
			
			// Ejecutar la consulta SQL
			$resultado = mysql_query($sql, $conexion);
			if (!$resultado) {
				echo mysql_error();
				exit;
			}
			// Crear el array de elementos para la capa de la vista
			$datauser = array();
			while ($fila = mysql_fetch_array($resultado))
			{
				$datauser[] = $fila;
			}

			// Cerrar la conexión
			disconnect($conexion);
			
			$login = false;
			if($datauser[0][1]==$_POST['user'] && $datauser[0][2]==$_POST['password']){
				// Guardamos una variable
				$_SESSION['id'] = $datauser[0][0]; 
				$_SESSION['nombre'] = $datauser[0][1]; 
				$login = true;
			}
			return $login;
		}
	}
	
	function logout(){
		session_destroy();
	}
	
	function registro()
	{
		if($_POST['user']){
			// Conectar con la base de datos y seleccionarla
			$conexion = connect();
			$sql = "SELECT * FROM puser WHERE user = '".$_POST['user']."'";
			
			// Ejecutar la consulta SQL
			$resultado = mysql_query($sql, $conexion);
			if (!$resultado) {
				echo mysql_error();
				exit;
			}
			// Crear el array de elementos para la capa de la vista
			$datauser = array();
			while ($fila = mysql_fetch_array($resultado))
			{
				$datauser[] = $fila;
			}

			// Cerrar la conexión
			disconnect($conexion);
			
			$login = false;
			if($datauser[0][1]==$_POST['user'] && $datauser[0][2]==$_POST['password']){
				// Guardamos una variable
				$_SESSION['id'] = $datauser[0][0]; 
				$_SESSION['nombre'] = $datauser[0][1]; 
				$login = true;
			}
			return $login;
		}
	}
	
	function getAddresses()
	{
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();

		// Ejecutar la consulta SQL
		$resultado = mysql_query('SELECT * FROM addresses', $conexion);
		if (!$resultado) {
			echo mysql_error();
			exit;
		}
		// Crear el array de elementos para la capa de la vista
		$addresses = array();
		while ($fila = mysql_fetch_array($resultado))
		{
		$addresses[] = $fila;
		}
echo "login";
		// Cerrar la conexión
		disconnect($conexion);
		echo $addresses[0][0];
		return $addresses;
	}
	
	function register(){
	
		$result = true;
		
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		
		$sql = "INSERT INTO puser (user) VALUES ('".$_POST['user']."')";
		$resultado = mysql_query($sql,$conexion);
		if (!$resultado) {
			$result = false;
		}
		
		// Cerrar la conexión
		disconnect($conexion);
		
		return result;		
	}
	function edit(){
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		
		$sql = "UPDATE addresses SET name='".$_POST['name']."',lastName='".$_POST['lastName']."',phoneHouse='".$_POST['phoneHouse']."',addressHouse='".$_POST['addressHouse']."',phoneWork='".$_POST['phoneWork']."',addressWork='".$_POST['addressWork']."',email='".$_POST['email']."' WHERE id=".$_POST['id']."" ;
		mysql_query($sql,$conexion);
	
		// Cerrar la conexión
		disconnect($conexion);
		
		echo "<script>alert('Datos actualizados');</script>"; 
	}
	function erase(){
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		
		$sql = "DELETE FROM addresses WHERE id = ".$_POST['id']."";
		mysql_query($sql,$conexion);
	
		// Cerrar la conexión
		disconnect($conexion);
		
		echo "<script> 
				alert('Datos borrados');
				setTimeout('location.href='index.php', 4);
			</script>"; 
	}
	
	function eraseService($id){
		$resultado = true;
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		
		$sql = "DELETE FROM pservicio WHERE id = ".$id."";
		$resultado = mysql_query($sql,$conexion);
		if (!$resultado) {
			$resultado = false;
		}
		// Cerrar la conexión
		disconnect($conexion);
		
		return $resultado;
	}
	
	function getUser()
	{
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		$sql = "SELECT * FROM puser WHERE user = '".$_SESSION['nombre']."'";
		
		// Ejecutar la consulta SQL
		$resultado = mysql_query($sql, $conexion);
		if (!$resultado) {
			echo mysql_error();
			exit;
		}
		// Crear el array de elementos para la capa de la vista
		$userdata = array();
		while ($fila = mysql_fetch_array($resultado))
		{
			$userdata[] = $fila;
		}

		// Cerrar la conexión
		disconnect($conexion); 
		
		return $userdata;
	}
	
	function getServices($cat,$subcat)
	{
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		$sql = "SELECT s.id,s.name,s.descripcion,s.costo,s.direccion,
		s.fechaInicio,s.fechaFin,s.id_categoria,s.id_subcategoria,s.id_user,u.nombre,u.email 
		FROM pservicio s
		JOIN puser u 
		on u.id = s.id_user
		WHERE s.id_categoria='".$cat."' AND s.id_subcategoria = '".$subcat."'";
		
		// Ejecutar la consulta SQL
		$resultado = mysql_query($sql, $conexion);
		if (!$resultado) {
			echo mysql_error();
			exit;
		}
		// Crear el array de elementos para la capa de la vista
		$dataservices = array();
		while ($fila = mysql_fetch_array($resultado))
		{
			$dataservices[] = $fila;
		}

		// Cerrar la conexión
		disconnect($conexion); 
		
		return $dataservices;
	}
	
	function buscarServices($search)
	{
	
		// Crear el array de elementos para la capa de la vista
		$dataservices = array();
		if($search != null && $search != ""){
			// Conectar con la base de datos y seleccionarla
			$conexion = connect();
			$sql = "SELECT s.id,s.name,s.descripcion,s.costo,s.direccion,
			s.fechaInicio,s.fechaFin,s.id_categoria,s.id_subcategoria,s.id_user,u.nombre,u.email 
			FROM pservicio s
			JOIN puser u 
			on u.id = s.id_user
			WHERE s.name like '%".$search."%'";
			
			// Ejecutar la consulta SQL
			$resultado = mysql_query($sql, $conexion);
			if (!$resultado) {
				echo mysql_error();
				exit;
			}
			
			while ($fila = mysql_fetch_array($resultado))
			{
				$dataservices[] = $fila;
			}

			// Cerrar la conexión
			disconnect($conexion); 
		}
		return $dataservices;
	}
	
	function getMyServices()
	{
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		$sql = "SELECT * FROM pservicio WHERE id_user='".$_SESSION['id']."'";
		
		// Ejecutar la consulta SQL
		$resultado = mysql_query($sql, $conexion);
		if (!$resultado) {
			echo mysql_error();
			exit;
		}
		// Crear el array de elementos para la capa de la vista
		$dataservices = array();
		while ($fila = mysql_fetch_array($resultado))
		{
			$dataservices[] = $fila;
		}

		// Cerrar la conexión
		disconnect($conexion); 
		
		return $dataservices;
	}
	
	function getSubcategorias($s)
	{
		// Crear el array de elementos para la capa de la vista
		$datasubcategorias = array();
		if($s != null || $s != ""){
			// Conectar con la base de datos y seleccionarla
			$conexion = connect();
			$sql = "SELECT * FROM psubcategoria WHERE id_categoria = '".$s."'";
			
			// Ejecutar la consulta SQL
			$resultado = mysql_query($sql, $conexion);
			if (!$resultado) {
				echo mysql_error();
				exit;
			}
			
			while ($fila = mysql_fetch_array($resultado))
			{
				$datasubcategorias[] = $fila;
			}

			// Cerrar la conexión
			disconnect($conexion); 
		}
		return $datasubcategorias;
	}

	function connect()
	{
	  // Conectar con la base de datos y seleccionarla
	  $conexion = mysql_connect('localhost', 'root', '');
		mysql_query("SET character_set_results=utf8", $conexion);
		mb_language('uni'); 
		mb_internal_encoding('UTF-8');
		mysql_query("set names 'utf8'",$conexion);
		mysql_select_db('contact', $conexion);
	  return $conexion;
	 
	}

	function disconnect($conexion)
	{
	  // Cerrar la conexión
	  mysql_close($conexion);
	}
?>