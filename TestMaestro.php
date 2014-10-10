<?php

    include('Maestro.php');
    include ('Conexion.php');
    include('header.php');

    $maestro = new Maestro();
	
	$id_usu=$_SESSION['user'];

    $maestro->showMaterias($id_usu);

    include ('footer.php');
?>