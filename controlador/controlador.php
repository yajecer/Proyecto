<?php

	// Incluir modelo
	require_once('modelo/modelo.php');
	
	$footer = 'vista/footer.php';//Footer de las páginas
	$header = 'vista/header.php';//Header de las páginas incluye menú
	
	//Elige la página a mostrar
	switch (@$_REQUEST['namePage'])
	{
		case 'index':
			$content = 'vista/principal.php';
			include('vista/plantilla.php');
			break;
		case 'services':
			$content = 'vista/services.php';
			include('vista/plantilla.php');
			break;
		case 'login':
			$content = 'vista/login.php';
			include('vista/plantilla.php');
			break;
		case 'logout':
			logout();
			header("Location: index.php");
			break;
		case 'contacts':
			$content = 'vista/contacts.php';
			include('vista/plantilla.php');
			break;
		case 'configuracion':
			if(isset($_SESSION['id'])){
				$myServicios=getMyServices();
				switch (@$_REQUEST['act'])
				{
					case 'u1'://Modificar usuario
						$datauser = getUser();
						$content2 = 'vista/user.php';
						$content = 'vista/configuracion.php';
						include('vista/plantilla.php');
						break;
					case 'sc'://Agregar servicio
						$content2 = 'vista/servicio.php';
						$content = 'vista/configuracion.php';
						include('vista/plantilla.php');
						break;
					case 'se'://Eliminar sevicio
						$eliminar = eraseService(@$_REQUEST['id']);
						if($eliminar){
							$content2 = 'vista/vacio.php';
							$content = 'vista/configuracion.php';
							include('vista/plantilla.php');
							echo '<script>
							alert("Servicio eliminado!");
							document.location = "index.php?namePage=configuracion";
							</script>';
						}else{
							$content2 = 'vista/vacio.php';
							$content = 'vista/configuracion.php';
							include('vista/plantilla.php');
							echo '<script>
							alert("Servicio NO eliminado!");
							document.location = "index.php?namePage=configuracion";
							</script>';
						}
						break;
					case 'sm'://Modificar servicio
						$dataservicio = getPservicio(@$_REQUEST['id']);
						$content2 = 'vista/servicio.php';
						$content = 'vista/configuracion.php';
						include('vista/plantilla.php');						
						break;
					default:
						$datauser = getUser();
						$content2 = 'vista/vacio.php';
						$content = 'vista/configuracion.php';
						include('vista/plantilla.php');
						break;
				}
			}else{
				$content = 'vista/login.php';
				include('vista/plantilla.php');
				echo '<script>
							alert("Debe ingresar para acceder a la configuración");
							document.location = "index.php?namePage=login";
					</script>';
			}
			break;
		case 'busq':
			$resultados = buscarServices(@$_REQUEST['search']);
			$content = 'vista/busq.php';
			include('vista/plantilla.php');
			break;
		case 'subcategorias':
			switch (@$_REQUEST['s'])
			{
				case '1':
					$categoria = 'Profesionales/Especializados';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['s'],@$_REQUEST['ser']);
					$content = 'vista/subcategorias.php';
					include('vista/plantilla.php');
					break;
				case '2':
					$categoria = 'Hogar';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = 'vista/subcategorias.php';
					include('vista/plantilla.php');
					break;
				case '3':
					$categoria = 'Educación';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = 'vista/subcategorias.php';
					include('vista/plantilla.php');
					break;
				case '4':
					$categoria = 'Belleza';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = 'vista/subcategorias.php';
					include('vista/plantilla.php');
					break;
				case '5':
					$categoria = 'Creativos';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = 'vista/subcategorias.php';
					include('vista/plantilla.php');
					break;
				case '6':
					$categoria = 'Otros';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = 'vista/subcategorias.php';
					include('vista/plantilla.php');
					break;
				default:
					$content = 'vista/principal.php';
					include('vista/plantilla.php');
			}
			break;
		default:
		if(isset($_POST['actionform'])){
			if($_POST["actionform"]=="login"){
				$login = login();
				if($login){
					$content = 'vista/principal.php';
					include('vista/plantilla.php');
				}else{
					echo '<script>alert("Usuario o Contraseña Inválida");
					document.location = "index.php?namePage=login";
					</script>';
					//header("Location:index.php?namePage=login");
				}
				
			}else if($_POST["actionform"]=="register"){
				$register = register();
				if($register){
					$content = 'vista/principal.php';
					include('vista/plantilla.php');
				}else{
					echo '<script>alert("No se pudieron guardar los datos");
					document.location = "index.php?namePage=login";
					</script>';
					//header("Location:index.php?namePage=login");
				}
				
			}else{
				$content = 'vista/principal.php';
				include('vista/plantilla.php');
			}
			if($_POST["actionform"]=="busq"){
				$resultados = buscarServices();
				$content = 'vista/busq.php';
				include('vista/plantilla.php');
			}
		}else{
			$content = 'vista/principal.php';
			include('/vista/plantilla.php');
		}
	}
	
	function agregarServicio(){
	
		$content = 'vista/configuracion.php';
		$content2 = 'vista/servicio.php';
		include('vista/plantilla.php');
	}
	
?>