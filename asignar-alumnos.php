<?php
include ('Conexion.php');
include('header.php');

    echo "<div class=table-responsive>";
    echo "<table class=\"table table-striped\">";
    echo "<tr><td colspan=2 align=center><strong>Asignar Alumnos</strong></td></tr>";
?>
<form action='TestGrupo.php' method=Post>
<?php	


echo "<tr><td>Grupos: </td><td>";


$sql01 = "SELECT * FROM grupo ORDER BY nombre ASC";
$result01 = mysql_query($sql01)or die("Error $sql01");
$cuantos=mysql_num_rows($result01);

echo"<select name='grupo' id='grupo' class='combos'>";

for($y=0;$y<$cuantos;$y++)
{
$id_grupo=mysql_result($result01,$y,'id_grupo');
$nombre=mysql_result($result01,$y,'nombre');
echo "<option value='$id_grupo'>$id_grupo  - $nombre</option>";
}
echo"</select>";		

    echo "</td></tr>";
    echo "<tr><td colspan=2 align=center><input type=submit value=Agregar></td></tr>";

    echo "</form>";
    echo "</table>";
    echo "</div>";

?>