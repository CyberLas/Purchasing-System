<?php 

include("BDA.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fecha = date("d/m/y");
	    $querydba = "INSERT INTO datos(nombre, email, fecha) VALUES ('$name','$email','$fecha')";
	    $resultado = mysqli_query($conex,$querydba);
	    if ($resultado) {
	    	?> 
	    	<h3 class="TODO OKEY">¡Correcto!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="MALO">¡Error No Encontrado!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="MALO">¡Complete todos los Campos!</h3>
           <?php
    }
}

?>