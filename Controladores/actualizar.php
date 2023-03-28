<?php

$DesRechazo =  trim ($_POST['observacion']);


include "conexion.php";

if(@$_POST['Btnautorizar'])
{

   foreach($_POST['IdsUsuarios'] as $IdUsuario)
    {
               
        $actualizar ="UPDATE prospecto Set estatus='Autorizado', comentario =' ' WHERE id_usuario = ".$IdUsuario;
        
        if ($conexion -> query($actualizar) == true)
        
        {
          
          header('location: ../registros.php');
        
        }else{
            
            echo "No se guarado la informacion";
        }
        
    }

    
}else{

    foreach($_POST['IdsUsuarios'] as $IdUsuario)
    {
               
        $actualizar ="UPDATE prospecto Set estatus='Rechazado',comentario ='$DesRechazo'  WHERE id_usuario = '$IdUsuario'";
        
        if ($conexion -> query($actualizar) == true)
        
        {
          
          header('location: ../registros.php');
        
        }else{
            
            echo "No se guarado la informacion";
        }
        
       

    }


}
$conexion -> close();


?>
