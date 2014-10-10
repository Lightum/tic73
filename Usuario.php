<?php

class Usuario {

        private $id;
        private $nombre;
        private $ApellidoPaterno;
        private $ApellidoMaterno;
        private $Telefono;
        private $Calle;
        private $NumeroExterior;
        private $NumeroInterior;
        private $Colonia;
        private $Municipio;
        private $Estado;
        private $CP;
        private $Correo;
        private $Usuario;
        private $Contrasena;
        private $nivel;
        private $Estatus;

        public function createUsuario($nombre,$apellidop,$apellidom,$nivel){
            $insert01 = " INSERT INTO usuario (nombre,ApellidoPaterno,ApellidoMaterno,nivel,Estatus)
		                     VALUES('$nombre','$apellidop','$apellidom',$nivel,1)";
            $execute01 = mysql_query($insert01) or die("Error  $insert01");
        }

        public function readUsuarioG(){
            $sql01 = "SELECT * FROM usuario WHERE estatus = 1 ORDER BY ApellidoPaterno ASC";
            $result01 = mysql_query($sql01)or die("Error $sql01");
            echo "<div class=table-responsive>";
             echo "<table class=\"table table-striped\">";
                echo "<tr><td colspan=5 align=center><strong>Lista de Usuarios</strong></td></tr>";
                echo "<tr><th>id</th><th>nombre</th><th>Apellido P</th><th>Apellido M</th><th>nivel</th><tr>";
            while($field = mysql_fetch_array($result01)){
                $this->id = $field['id'];
                $this->nombre = utf8_decode($field['nombre']);
                $this->ApellidoPaterno = utf8_decode($field['ApellidoPaterno']);
                $this->ApellidoMaterno = utf8_decode($field['ApellidoMaterno']);
                $this->nivel = $field['nivel'];
                switch($this->nivel){
                    case 1:
                            $nivel = "Administrador";
                        break;
                    case 2:
                            $nivel = "Maestro";
                        break;
                    case 3:
                            $nivel = "Alumno";
                        break;
                }
                echo "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->nivel</td></tr>";
            }
            echo "</table>";
            echo "</div>";
        }

        public function readUsuarioS($id){
            $sql01 = "SELECT * FROM usuario WHERE estatus = 1 AND id = $id ORDER BY ApellidoPaterno ASC";
            $result01 = mysql_query($sql01)or die("Error $sql01");
            echo "<div class=table-responsive>";
            echo "<table class=\"table table-striped\">";
            echo "<tr><td colspan=5 align=center><strong>Lista de Usuarios</strong></td></tr>";
            echo "<tr><th>id</th><th>nombre</th><th>Apellido P</th><th>Apellido M</th><th>nivel</th><tr>";
            while($field = mysql_fetch_array($result01)){
                $this->id = $field['id'];
                $this->nombre = $field['nombre'];
                $this->ApellidoPaterno = utf8_decode($field['ApellidoPaterno']);
                $this->ApellidoMaterno = utf8_decode($field['ApellidoMaterno']);
                $this->nivel = $field['nivel'];
                switch($this->nivel){
                    case 1:
                        $nivel = "Administrador";
                        break;
                    case 2:
                        $nivel = "Maestro";
                        break;
                    case 3:
                        $nivel = "Alumno";
                        break;
                }

                echo "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$nivel</td></tr>";

            }
                echo "</table>";
            echo "</div>";
        }

        public function updateUsuario($id,$nombre,$apellidop,$apellidom,$nivel){
            $delete01 = " UPDATE usuario SET nombre='$nombre', ApellidoPaterno='$apellidop',
            ApellidoMaterno = '$apellidom', nivel='$nivel' WHERE id = $id";
            $execute01 = mysql_query($delete01) or die("Error  $delete01");
        }

        public function deleteUsuario($id){
            $delete01 = " DELETE FROM usuario WHERE id = $id";
            $execute01 = mysql_query($delete01) or die("Error  $delete01");
        }
}





