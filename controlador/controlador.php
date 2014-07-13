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
		case 'prefer':
			$content = 'vista/prefer.php';
			include('vista/plantilla.php');
			break;
		case 'contacts':
			$content = 'vista/contacts.php';
			include('vista/plantilla.php');
			break;
		case 'configuracion':
			$myServicios=getMyServices();
			switch (@$_REQUEST['act'])
			{
				case 'u1'://Modificar usuario
					$content2 = 'vista/user.php';
					$content = 'vista/configuracion.php';
					include('vista/plantilla.php');
					break;
				case 's1'://Agregar servicio
					
					$content2 = 'vista/servicio.php';
					$content = 'vista/configuracion.php';
					include('vista/plantilla.php');
					break;
				case 's2'://Eliminar sevicio
					$content2 = 'vista/servicio.php';
					$content = 'vista/configuracion.php';
					include('vista/plantilla.php');
					break;
				case 's3'://Modificar servicio
					$content2 = 'vista/servicio.php';
					$content = 'vista/configuracion.php';
					include('vista/plantilla.php');
					break;
				case 'o1'://Agregar oferta
					$content2 = 'vista/offer.php';
					$content = 'vista/configuracion.php';
					include('vista/plantilla.php');
					break;
				case 'o2'://Modificar oferta
					$content2 = 'vista/offer.php';
					$content = 'vista/configuracion.php';
					include('vista/plantilla.php');
					break;
				case 'o2'://Eliminar oferta
					$content2 = 'vista/offer.php';
					$content = 'vista/configuracion.php';
					include('vista/plantilla.php');
					break;
				default:
					$datauser = getUser();
					$content2 = 'vista/user.php';
					$content = 'vista/configuracion.php';
					include('vista/plantilla.php');
					break;
			}
			
			$content2 = 'vista/user.php';
			$content = 'vista/configuracion.php';
			include('vista/plantilla.php');
			break;
		case 'busq':
			//buscar($_REQUEST['search']);
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
				register();
				$content = 'vista/principal.php';
				include('vista/plantilla.php');
			}else{
				$content = 'vista/principal.php';
				include('vista/plantilla.php');
			}
		}else{
			$content = 'vista/principal.php';
			include('/vista/plantilla.php');
		}
	}
	
	//Acciones
	if(isset($_POST['actionform'])){
		if($_POST["actionform"]=="login"){
			$addresses = login();
			//$content = 'vista/principal.php';
			//include('vista/plantilla.php');
		}else if($_POST["actionform"]=="register"){
			register();
		}//else if($_POST["actionform"]=="edit"){
		//	edit();
		//}else if($_POST["actionform"]=="login"){
		//	login();
		//}
	}
		// Obtener la lista de direcciones
	/*	$addresses = getAddresses();
	}*/
	
	function agregarServicio(){
	
		$content = 'vista/configuracion.php';
		$content2 = 'vista/servicio.php';
		include('vista/plantilla.php');
	}
	
?>