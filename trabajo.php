<?php

include 'index.php';
require_once '../job/jobs.php';
require_once '../helpers/utilities.php';
require_once '../service/api.php';
require_once '../job/JobApiService.php';

   $datos = new JobApiService();
   $jobs = $datos->GetList();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

    <link rel="stylesheet" href="../assep/css/bootstrap.min.css">


</head>
<style>


    .container{
        position: relative;
        left: 90px;
    }
    </style>
<body>
<form method="POST" action="addjob.php" enctype="multipart/form-data">
   <div class="container">

   <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white">Trabajos</h3>
       </div>
       <div class="card-body">
        <input type="hidden" name="idpersona" id="idpersona"    > <!--Donde termina lo de agregar?  -->

        
        </div>


        <div class="row">
            <div class="col-md-6">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" class="form-control" autofocus>
        </div>
         <div class="col-md-6" style="margin-top: 29px;margin-left: -13px;">
                <label for="nombre">ESTADO:</label>
                <input  type="checkbox" name="State" class="form-check-input" value="activo">
       </div>
        <div class="row">
         <div class="col-md-6">
            <label for="nombre">PHOTO:</label>
            <input type="file" class="form-control" id="file" name="Photo" aria-label="file example" required>
            <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>  
             <div class="col-md-6">
             <label for="nombre">DESCRIPCION:</label>
            <textarea class="form-control" id="DESCRIPCION" rows="1 " name="description"></textarea>
         </div>

         <div class="row">
            <div class="btn-group-sm">
               
                <button type="submit" class="btn btn-outline-success" ><span class="fa fa-save"></span>Guardar</button>
                
            </div>
        </div>
    </div>

    
</div>
</div>
</form>
       <div class="card-footer">

        <table class="table table-striped">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>PHOTO</th>
                    <th>ESTADO</th>
                    
                    <th>OPCION</th>
                    
                </tr>
            </thead>
                <tbody id="datos">
                <?php foreach($jobs as $job): ?>
                <tr>
                
                <td><?php echo $job->Id ?></td>
                <td><?php echo $job->Name ?></td>
                <td><?php echo $job->Description ?></td>
                <td><?php if($job->Photo == null || $job->Photo == ''):?>
                        <img  src="<?php echo '../assets/img/default.png'; ?>" width="100%" height="2" aria-label="Placeholder: Thumbnail">
                      <?php else: ?>
                        <img  src="<?php echo '../assets/img/jobs/'.$job->Photo; ?>" width="100%" height="225" aria-label="Placeholder: Thumbnail">
                     <?php endif;?>
             </td>
                <?php if($job->State ===1):?>

                <td>Activo<td>
                <?php else: ?>
                <td>Inactivo</td>
                <?php endif; ?>
                
                <a class="btn btn-outline-danger btn-delete" data-id="<?= $job->Id ?>">Eliminar</a></td>
             </tr>
                 <?php endforeach; ?>
                </tbody>
        </table>
       </div>
   </div>
</div>
    



<script src="js/trabajo.js"></script>



</body>

</html>


