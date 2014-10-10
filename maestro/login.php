<?php
include ('header.php');
?>
    <h1>Bienvenidos</h1>
	
<section class="formulario">
<form action='valido.php' method='POST'>
<label for='usuarios' class='login'>Usuario:</label>
<input type='text' name='usu' class="cajas usuario" autocomplete="off" required="required"><br />
<label for='password' class='login'>Contraseña:</label>              
<input type='password' name='psw' class="cajas pass" autocomplete="off" required="required" >
<br>
<br>
<input type='submit' value='Accesar' id='enviar'>

</form>
</section>
	
	
	
<?php
include ('footer.php');
?>