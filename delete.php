<?php
require_once '../job/jobs.php';
require_once '../layout/layout.php';
require_once '../helpers/utilities.php';
require_once '../service/api.php';
require_once '../job/JobApiService.php';

    $layout = new Layout(true);
   $service = new JobApiService();
  

   if(isset($_GET["id"]))
   {
       $service->Delete($_GET["id"]);
   }

   header("Location: trabajo.php");
   exit();
?>

