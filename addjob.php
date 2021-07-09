<?php
include 'index.php';
require_once '../job/jobs.php';
require_once '../helpers/utilities.php';
require_once '../service/api.php';
require_once '../job/JobApiService.php';

   $datos = new JobApiService();
   $jobs = $datos->GetList();

   if(isset($_POST["nombre"]) && isset($_POST["description"]))
   {
        $trabajo = new Job();
        $state = ($_POST['State']== "activo") ? true : false;

        $trabajo->initializeData(0,$_POST["nombre"],$_POST["description"],1,$state); 
        $datos->Add($trabajo);

        header("Location: trabajo.php");
        exit();
   }
?>