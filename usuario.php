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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<form method="POST" action="addusuario.php" enctype="multipart/form-data">
   <div class="container">

   <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white">Usuarios</h3>
       </div>
       <div class="card-body">
        <input type="hidden" name="idpersona" id="idpersona">

        <div class="row">
            <div class="btn-group-sm">
               
                <button class="btn btn-outline-success" values="validad" onclick="validad()"><span class="fa fa-save"></span>Guardar</button>


                <button class="btn btn-outline-warning"><span class="fa fa-pencil-alt"></span>Modificar</button>
                
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" class="form-control" autofocus>
        </div>
         <div class="col-md-6">
            <label for="nombre">Usuario:</label>
             <input type="text" name="usuario" id="usuario" class="form-control" autofocus>
         </div>
       </div>
        <div class="row">
         <div class="col-md-6">
            <label for="nombre">Password:</label>
             <input type="text" name="Password" id="password" class="form-control" autofocus>
</div>  
             <div class="col-md-6">
                <label for="nombre">Correo:</label>
                <input type="text" name="Correo" id="Correo" class="form-control" autofocus>
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
                    <th>USUARIO</th>
                    <th>PASSWORD</th>
                    <th>CORREO</th>
                    <th>FUNCION</th>
                </tr>
            </thead>
                <tbody id="datos">
                <tr>
                <td><?php   ?></td>
                <td><?php   ?></td>
                <td><?php   ?></td>
                <td><?php   ?></td>
                <td><?php  ?></td>
                <td><button class="btn btn-outline-danger"><span class="fa fa-remove"></span>Eliminar</button></td>
             </tr>
                </tbody>
        </table>
       </div>
   </div>
</div>
    


<script src="js/usuario.js"></script>

</body>
</html>

