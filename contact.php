<?php
$nombre = $_POST['Name'];
$email = $_POST['Email'];
$asunto = $_POST['Tema'];
$mensaje = $_POST['Mensaje'];

$para = "info@corpoambato.org.ec";
$asunto = "Nuevo mensaje de $nombre";
    
    $mensaje = "
    Nombre del remitente: ".$nombre." 
    Correo Electrónico: ".$email."
    Asunto: ".$asunto."
    Mensaje: ".$mensaje."
    ";

$mail_status = mail($para,$asunto,utf8_decode($mensaje));

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Gracias por su mensaje. Nos contactaremos con usted pronto.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Error en el envío del mensaje. Porfavor, escribanos a ');
		window.location = 'contact.html';
	</script>
<?php
}
?>