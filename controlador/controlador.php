<?php

	// Incluir modelo
	require_once('modelo/modelo.php');
	
	$footer = '../Index2/vista/footer.php';//Footer de las páginas
	$header = '../Index2/vista/header.php';//Header de las páginas incluye menú

	//Elige la página a mostrar
	switch (@$_REQUEST['namePage'])
	{
		case 'Index2':
			$content = '../Index2/vista/principal.php';
			include('../Index2/vista/plantilla.php');
			break;
		case 'services':
			$content = '../Index2/vista/services.php';
			include('../Index2/vista/plantilla.php');
			break;
		case 'login':
			$content = '../Index2/vista/login.php';
			include('../Index2/vista/plantilla.php');
			break;
		case 'logout':
			logout();
			header("Location: Index2.php");
			break;
		case 'prefer':
			$content = '../Index2/vista/prefer.php';
			include('../Index2/vista/plantilla.php');
			break;
		case 'contacts':
			$content = '../Index2/vista/contacts.php';
			include('../Index2/vista/plantilla.php');
			break;
		case 'configuracion':
			switch (@$_REQUEST['act'])
			{
				case 'u1'://Modificar usuario
					$content2 = '../Index2/vista/user.php';
					$content = '../Index2/vista/configuracion.php';
					include('../Index2/vista/plantilla.php');
					break;
				case 's1'://Agregar servicio
					$content2 = '../Index2/vista/servicio.php';
					$content = '../Index2/vista/configuracion.php';
					include('../Index2/vista/plantilla.php');
					break;
				case 's2'://Eliminar sevicio
					$content2 = '../Index2/vista/servicio.php';
					$content = '../Index2/vista/configuracion.php';
					include('../Index2/vista/plantilla.php');
					break;
				case 's3'://Modificar servicio
					$content2 = '../Index2/vista/servicio.php';
					$content = '../Index2/vista/configuracion.php';
					include('../Index2/vista/plantilla.php');
					break;
				case 'o1'://Agregar oferta
					$content2 = '../Index2/vista/offer.php';
					$content = '../Index2/vista/configuracion.php';
					include('../Index2/vista/plantilla.php');
					break;
				case 'o2'://Modificar oferta
					$content2 = '../Index2/vista/offer.php';
					$content = '../Index2/vista/configuracion.php';
					include('../Index2/vista/plantilla.php');
					break;
				case 'o2'://Eliminar oferta
					$content2 = '../Index2/vista/offer.php';
					$content = '../Index2/vista/configuracion.php';
					include('../Index2/vista/plantilla.php');
					break;
				default:
					$datauser = getUser();
					$content2 = '../Index2/vista/user.php';
					$content = '../Index2/vista/configuracion.php';
					include('../Index2/vista/plantilla.php');
					break;
			}
			$content2 = '../Index2/vista/user.php';
			$content = '../Index2/vista/configuracion.php';
			include('../Index2/vista/plantilla.php');
			break;
		case 'busq':
			//buscar($_REQUEST['search']);
			$content = '../Index2/vista/busq.php';
			include('../Index2/vista/plantilla.php');
			break;
		case 'subcategorias':
			switch (@$_REQUEST['s'])
			{
				case '1':
					$categoria = 'Profesionales/Especializados';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../Index2/vista/subcategorias.php';
					include('../Index2/vista/plantilla.php');
					break;
				case '2':
					$categoria = 'Hogar';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../Index2/vista/subcategorias.php';
					include('../Index2/vista/plantilla.php');
					break;
				case '3':
					$categoria = 'Educación';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../Index2/vista/subcategorias.php';
					include('../Index2/vista/plantilla.php');
					break;
				case '4':
					$categoria = 'Belleza';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../Index2/vista/subcategorias.php';
					include('../Index2/vista/plantilla.php');
					break;
				case '5':
					$categoria = 'Creativos';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../Index2/vista/subcategorias.php';
					include('../Index2/vista/plantilla.php');
					break;
				case '6':
					$categoria = 'Otros';
					$subcategorias = getSubcategorias(@$_REQUEST['s']);
					$dataservices = getServices(@$_REQUEST['ser']);
					$content = '../Index2/vista/subcategorias.php';
					include('../Index2/vista/plantilla.php');
					break;
				default:
					$content = '../Index2/vista/principal.php';
					include('../Index2/vista/plantilla.php');
			}
			break;
		default:
		if(isset($_POST['actionform'])){
			if($_POST["actionform"]=="login"){
				$addresses = login();
				$content = '../Index2/vista/principal.php';
				include('../Index2/vista/plantilla.php');
			}else if($_POST["actionform"]=="register"){
				register();
				$content = '../Index2/vista/principal.php';
				include('../Index2/vista/plantilla.php');
			}else{
				$content = '../Index2/vista/principal.php';
				include('../Index2/vista/plantilla.php');
			}
		}else{
			$content = '../Index2/vista/principal.php';
			include('../Index2/vista/plantilla.php');
		}
	}
	
	//Acciones
	if(isset($_POST['actionform'])){
		if($_POST["actionform"]=="login"){
			$addresses = login();
			//$content = '../Index2/vista/principal.php';
			//include('../Index2/vista/plantilla.php');
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
	
		$content = '../Index2/vista/configuracion.php';
		$content2 = '../Index2/vista/servicio.php';
		include('../Index2/vista/plantilla.php');
	}
	
?>