<?php 

		$nombre="";
		if (isset($_POST['txtNombre'])) {
			$nombre= trim($_POST['txtNombre']);
		}
		$email="";
		if (isset($_POST['txtEmail'])) {
			$email=trim($_POST['txtEmail']);
		}
		$asunto="";
		if (isset($_POST['txtAsunto'])) {
			$asunto=trim($_POST['txtAsunto']);
		}
		$mensaje="";
		if (isset($_POST['txtMensaje'])) {
			$mensaje=trim($_POST['txtMensaje']);
		}

		if($nombre!="" && $email!="" && $asunto!="" && $mensaje!=""){
			$contenido='Nombre: '.$nombre.'\n';
			$contenido.='Email: '.$email.'\n';
			$contenido.='Mensaje: '.$mensaje.'\n';

			$cabeceras = 'To: Web <sistemas@coneisc.pe>' . '\r\n';
			$cabeceras .= 'From: Web <sistemas@coneisc.pe>' . '\r\n';
			$cabeceras .= 'Cc: presidencia@coneisc.pe' . '\r\n';
			$cabeceras .= 'Bcc: vicepresidencia@coneisc.pe' . '\r\n';
			if(mail('informes@coneisc.pe', $asunto, $contenido, $cabeceras)){
				header("location: contactanos.php?msg="."<p style='color: blue;'>Su mensaje se ha enviado satisfactoriamente!<p>");
			}else{
				header("location: contactanos.php?msg="."<p style='color: red;'>Error: no se pudo enviar mensaje...<p>");
			}
		}else{
			header("location: contactanos.php?msg="."<p style='color: red;'>* Debe completar todos los campos<p>");
		}

?>