<?php
    class Grupo {
        private $id;
        private $nombre;
        private $avatar;
        private $orden;
        private $estatus;
        public function createGrupo(){
        }
        public function readGrupoG($id_grupo){	
	
        $sql04 = "SELECT * FROM usuario WHERE id NOT IN(SELECT id_alumno FROM alumno_grupo WHERE id_grupo=$id_grupo)";        
		$result04 = mysql_query($sql04)or die("No se ejecuta consulta $sql04");
        $cuantos = mysql_num_rows($result04);
		
		echo"<form action='TestGrupo.php' METHOD='POST'>";
		
		echo "<div class=table-responsive>";        
		echo "<table class=\"table table-striped\">";
		
		echo "<tr><td colspan=5 align=center><strong>Alumnos SIN Grupo</strong></td></tr>"; 
		echo "<tr><th>id</th><th>nombre</th><th>Apellido P</th><th>Apellido M</th><tr>";
		
		for($y=0;$y<$cuantos;$y++){						
		
		
		
		$id=mysql_result($result04,$y,'id'); 
		$nombre=mysql_result($result04,$y,'nombre');
		$ApellidoPaterno=mysql_result($result04,$y,'ApellidoPaterno'); 
		$ApellidoMaterno=mysql_result($result04,$y,'ApellidoMaterno');
		
		echo"<tr><td><input type='checkbox' name='numero[$y]' value='$id'>$id</td><td>$nombre</td><td>$ApellidoPaterno</td><td>$ApellidoMaterno</td>";	
        }	
		
		
		echo"<input type='hidden' name='accion' value='1'>";
		echo"<input type='hidden' name='grupo' value='$id_grupo'>";
		echo'<tr><td><input type="submit" value="Agregar"></td></tr>';
		
		echo "</form>";
		echo "</table>";
		}

		
		
			
        public function readGrupoS($id_grupo){
	
		
        $sql04 = "SELECT * FROM usuario WHERE id IN(SELECT id_alumno FROM alumno_grupo WHERE id_grupo=$id_grupo)";        
		$result04 = mysql_query($sql04)or die("No se ejecuta consulta $sql04");
        $cuantos = mysql_num_rows($result04);
		
		echo"<form action='TestGrupo.php' METHOD='POST'>";
		
		echo "<div class=table-responsive>";        
		echo "<table class=\"table table-striped\">";
		
		echo "<tr><td colspan=5 align=center><strong>Alumnos en el Grupo</strong></td></tr>"; 
		echo "<tr><th>id</th><th>nombre</th><th>Apellido P</th><th>Apellido M</th><tr>";
		
		for($y=0;$y<$cuantos;$y++){						
		
		
		
		$id=mysql_result($result04,$y,'id'); 
		$nombre=mysql_result($result04,$y,'nombre');
		$ApellidoPaterno=mysql_result($result04,$y,'ApellidoPaterno'); 
		$ApellidoMaterno=mysql_result($result04,$y,'ApellidoMaterno');
		
		echo "<tr><td><input type='checkbox' name='numero[]' value='$id'>$id</td><td>$nombre</td><td>$ApellidoPaterno</td><td>$ApellidoMaterno</td></tr>";	
        }
		
		
		echo"<input type='hidden' name='accion' value='2'>";
		echo"<input type='hidden' name='grupo' value='$id_grupo'>";
		echo'<tr><td><input type="submit" value="Eliminar"></td></tr>';
		echo "</form>";
		echo "</table>";
		}
		
		
        public function deleteGrupo($id_alumno, $id_grupo){
		
		$sql04 = "DELETE FROM alumno_grupo WHERE id_alumno=$id_alumno AND id_grupo=$id_grupo";        
		$result04 = mysql_query($sql04)or die("No se ejecuta consulta $sql04");
      
        }
        public function updateGrupo(){
		
        }
        public function asignarAlumnoGrupo($id_alumno, $id_grupo){				

        $sql01 = "INSERT INTO alumno_grupo (id_alumno, id_grupo) VALUES ($id_alumno, $id_grupo)";
	    $result01 = mysql_query($sql01)or die("Error $sql01");
	
        }
    }