<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/background.css">

</head>
<body>
    
<div class="container">
    <center>
    <h1 class="titulo">PLANES</h1>
<!--    <a href="<?php echo base_url('nuevo_plan')?>" class="btn btn-primary">Nuevo Plan</a>
 -->
    <a href="nuevo_plan" class="btn btn-success">Nuevo plan</a>
    <a href="http://localhost/fs2024/ci4_telefonia/public/" class="btn btn-primary">Ir al inicio</a>
    </center>
<table class="table table-border table-striped">
    <thead class="table-primary">
        <tr>
            <th>Plan del ID</th>
            <th>Nombre</th>
            <th>Pago mensual</th>
            <th>Cantidad minutos</th>
            <th>Cantidad de mensajes</th>
            <th>Actualizar y eliminar</th>

        </tr>
    </thead>
    
    <tbody>
    <?php 
        foreach($datos as $plan): 
    ?>
        <tr>
            <td> 
                <?php 
                echo $plan['plan_id'];
                ?>
            </td>
            <td>
               <?php 
                echo $plan['nombre'];
                ?>
            </td>
            <td>
                <?php 
                echo $plan['pago_mensual'];
                ?> 
            </td>

           <td>
                <?php 
                echo $plan['cantidad_minutos'];
                ?> 
            </td>
            <td>
                <?php 
                echo $plan['cantidad_mensajes'];
                ?> 
            </td>

            <td>
                Actualizar / Eliminar
            </td>
        </tr>
        <?php 
        endforeach;
    ?>
    </tbody>
   
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>