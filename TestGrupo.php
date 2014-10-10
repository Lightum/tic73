<?php

include ('Conexion.php');
include	('header.php');
include ('Grupo.php');


   $grupo = new Grupo();

   $accion=$_REQUEST['accion'];
   $id_grupo=$_REQUEST['grupo'];
   echo $numero=$_POST["numero"];
   
	
	switch($accion){
        case 0:
            break;
        case 1:
			  $count = count($numero);
		      for ($i = 0; $i < $count; $i++) {
			  
			  $numero[$i];
			  echo $id_alumno=$numero[$i];
			  
              $grupo->asignarAlumnoGrupo($id_alumno, $id_grupo);
              }
 
		
		
		
				
            break;
        case 2:
			  $count = count($numero);
		      for ($i = 0; $i < $count; $i++) {
			  
			  $numero[$i];
			  echo $id_alumno=$numero[$i];
			  
              $grupo->deleteGrupo($id_alumno, $id_grupo);
              }	
            break;
    }
	
	$grupo->readGrupoS($id_grupo);
	$grupo->readGrupoG($id_grupo);
	
//<input type='checkbox' name='alumno' value='$id'>$nombre<br>
?>