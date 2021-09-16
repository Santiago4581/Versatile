<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['qname']) >= 1 && strlen($_POST['qemail']) >= 1 && strlen($_POST['qmsg_subject']) >= 1 && strlen($_POST['qmessage']) >= 1) {
	    $name = trim($_POST['qname']);
	    $email = trim($_POST['qemail']);
		$name = trim($_POST['qmsg_subject']);
	    $email = trim($_POST['qmessage']);

	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, asunto, mensaje, fecha_reg) VALUES ('$name','$email','$qmsg_subject','$qmessage','$fechareg',)";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Gracias!, hemos recibido tu mensaje</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor completa los campos!</h3>
           <?php
    }
}

?>