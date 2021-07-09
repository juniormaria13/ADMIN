<?php
include 'index.php';
require_once '../job/jobs.php';
require_once '../helpers/utilities.php';
require_once '../service/api.php';
require_once '../job/JobApiService.php';

   $datos = new JobApiService();
   $user = $datos->GetList();

   if(isset($_POST["nombre"]) && isset($_POST["usuario"])&& isset($_POST["Password"])&& isset($_POST["Correo"]))
   {
        $user = new User();
        

        $usuario->initializeData(0,$_POST["nombre"],$_POST["usuario"],$_POST["Password"],$_POST["Correo"]); 
        $datos->Add($usuario);

        header("Location: usuario.php");
        exit();
   }
?>