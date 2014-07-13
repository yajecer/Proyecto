<?php

	// Incluir modelo
	require_once('modelo/modelo.php');
	
	$footer = '../index/vista/footer.php';//Footer de las páginas
	$header = '../index/vista/header.php';//Header de las páginas incluye menú

	//Elige la página a mostrar
	switch (@$_REQUEST['namePage'])
	{
		case 'index':
			$content = '../index/vista/principal.php';
			include('../index/vista/plantilla.php');
			break;
		case 'services':
			$content = '../index/vista/services.php';
			include('../index/vista/plantilla.php');
			break;
		case 'login':
			$content = '../index/vista/login.php';
			include('../index/vista/plantilla.php');
			break;
		case 'logout':
			logout();
			header("Location: index.php");
			break;
		case 'prefer':
			$content = '../index/vista/prefer.php';
			include('../index/vista/plantilla.php');
			break;
		case 'contacts':
			$content = '../index/vista/contacts.php';
			include('../index/vista/plantilla.php');
			break;
		case 'configuracion':
			switch (@$_REQUEST['act'])
			{
				case 'u1'://Modificar usuario
					$content2 = '../index/vista/user.php';
					$content = '../index/vista/configuracion.php';
					include('../index/vista/plantilla.php');
					break;
				case 's1'://Agregar servicio
					$content2 = '../index/vista/servicio.php';
					$content = '../index/vista/configuracion.php';
					include('../index/vista/plantilla.php');
					break;
				case 's2'://Eliminar sevicio
					$content2 = '../index/vista/servicio.php';
					$content = '../index/vista/configuracion.php';
					include('../index/vista/plantilla.php');
					break;
				case 's3'://Modificar servicio
					$content2 = '../index/vista/servicio.php';
					$content = '../index/vista/configuracion.php';
					include('../index/vista/plantilla.php');
					break;
				case 'o1'://Agregar oferta
					$content2 = '../index/vista/offer.php';
					$content = '../index/vista/configuracion.php';
					include('../index/vista/plantilla.php');
					break;
				case 'o2'://Modificar oferta
					$content2 = '../index/vista/offer.php';
					$content = '../index/vista/configuracion.php';
					include('../index/vista/plantilla.php');
					break;
				case 'o2'://Eliminar oferta
					$content2 = '../index/vista/offer.php';
					$content = '../index/vista/configuracion.php';
					include('../index/vista/plantilla.php');
					break;
				default:
					$datauser = getUser();
					$content2 = '../index/vista/user.php';
					$content = '../index/vista/configuracion.php';
					include('../index/vista/plantilla.php');
					break;
			}
			$content2 = '../index/vista/user.php';
			$content = '../index/vista/configuracion.php';
			include('../index/vista/plantilla.php');
			break;
		case 'busq':
			//buscar($_REQUEST['search']);
			$content = '../index/vista/busq.php';
			include('../index/vista/plantilla.php');
			break;
		case 'subcategorias':
			switch (@$_REQUEST['s'])
			{
				case '1':
					$categoria = 'Profesionales/Especializados';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../index/vista/subcategorias.php';
					include('../index/vista/plantilla.php');
					break;
				case '2':
					$categoria = 'Hogar';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../index/vista/subcategorias.php';
					include('../index/vista/plantilla.php');
					break;
				case '3':
					$categoria = 'Educación';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../index/vista/subcategorias.php';
					include('../index/vista/plantilla.php');
					break;
				case '4':
					$categoria = 'Belleza';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../index/vista/subcategorias.php';
					include('../index/vista/plantilla.php');
					break;
				case '5':
					$categoria = 'Creativos';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../index/vista/subcategorias.php';
					include('../index/vista/plantilla.php');
					break;
				case '6':
					$categoria = 'Otros';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../index/vista/subcategorias.php';
					include('../index/vista/plantilla.php');
					break;
				default:
					$content = '../index/vista/principal.php';
					include('../index/vista/plantilla.php');
			}
			break;
		default:
		if(isset($_POST['actionform'])){
			if($_POST["actionform"]=="login"){
				$addresses = login();
				$content = '../index/vista/principal.php';
				include('../index/vista/plantilla.php');
			}else if($_POST["actionform"]=="register"){
				register();
				$content = '../index/vista/principal.php';
				include('../index/vista/plantilla.php');
			}else{
				$content = '../index/vista/principal.php';
				include('../index/vista/plantilla.php');
			}
		}else{
			$content = '../index/vista/principal.php';
			include('../index/vista/plantilla.php');
		}
	}
	
	//Acciones
	if(isset($_POST['actionform'])){
		if($_POST["actionform"]=="login"){
			$addresses = login();
			//$content = '../index/vista/principal.php';
			//include('../index/vista/plantilla.php');
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
	
		$content = '../index/vista/configuracion.php';
		$content2 = '../index/vista/servicio.php';
		include('../index/vista/plantilla.php');
	}
	
?>