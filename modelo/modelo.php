<?php
 
	function login()
	{
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
		$addresses = array();
		while ($fila = mysql_fetch_array($resultado))
		{
			$addresses[] = $fila;
		}

		// Cerrar la conexión
		disconnect($conexion);

		// Guardamos una variable 
		$_SESSION['nombre'] = $addresses[0][1]; 
		
		return $addresses;
	}
	
	function logout(){
		session_destroy();
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
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		
		$sql = "INSERT INTO puser (user) VALUES ('".$_POST['user']."')";
		mysql_query($sql,$conexion);
		
		// Cerrar la conexión
		disconnect($conexion);
		
		echo "<script> 
				alert('Datos guardados');
			</script>"; 
		
		
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
	
	function getServices($ser)
	{
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		$sql = "SELECT * FROM pservicio WHERE id_subcategoria = '".$ser."'";
		
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
		// Conectar con la base de datos y seleccionarla
		$conexion = connect();
		$sql = "SELECT * FROM psubcategoria WHERE id_categoria = '".$s."'";
		
		// Ejecutar la consulta SQL
		$resultado = mysql_query($sql, $conexion);
		if (!$resultado) {
			echo mysql_error();
			exit;
		}
		// Crear el array de elementos para la capa de la vista
		$dataubcategorias = array();
		while ($fila = mysql_fetch_array($resultado))
		{
			$dataubcategorias[] = $fila;
		}

		// Cerrar la conexión
		disconnect($conexion); 
		
		return $dataubcategorias;
	}

	function connect()
	{
	  // Conectar con la base de datos y seleccionarla
	  $conexion = mysql_connect('localhost', 'root', '');
	  mysql_select_db('contact', $conexion);
	  return $conexion;
	 
	}

	function disconnect($conexion)
	{
	  // Cerrar la conexión
	  mysql_close($conexion);
	}
?>