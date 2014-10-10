<script src="jquery.min.js"></script>

<?php

    include('Materia.php');
    include ('Conexion.php');
    include('header.php');

    $materia = new Materia();

    if(isset($_REQUEST['maestro'])){
        $id = $_REQUEST['maestro'];
    }else{
        $id = 0;
    }
    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
    }else{
        $accion = 0;
    }
    if(isset($_REQUEST['materia'])){
        $id_materia = $_REQUEST['materia'];
    }else{
        $id_materia = 0;
    }

    switch($accion){
        case 0:
                $materia->seleccionaMaestro($id);
            break;
        case 1:
                $materia->createMaestroMateria($id,$id_materia);
                $materia->seleccionaMaestro($id);
            break;
        case 2:
                $materia->deleteMaestroMateria($id,$id_materia);
                $materia->seleccionaMaestro($id);
            break;
    }
?>
<?php include('footer.php'); ?>