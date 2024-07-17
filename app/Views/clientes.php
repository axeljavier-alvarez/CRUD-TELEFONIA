<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <center>
    <h1>CLIENTES</h1>
    </center>
<!--     <a href="<?php echo base_url('ver_planes');?>">Planes</a>
-->
<table class="table table-border table-striped">
    <thead class="table-primary">
        <tr>
            <th>Cliente ID</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Correo electrónico</th>
            <th>Calle avenida</th>
            <th>Número de casa</th>
            <th>Zona</th>
        </tr>
    </thead>

    <tbody>
    <?php 
        foreach($datos as $cliente): 
    ?>
        <tr>
            <td> 
                <?php 
                echo $cliente['cliente_id'];
                ?>
            </td>
            <td>
               <?php 
                echo $cliente['apellido'];
                ?>
            </td>
            <td>
                <?php 
                echo $cliente['nombre'];
                ?> 
            </td>

           <td>
                <?php 
                echo $cliente['correo_electronico'];
                ?> 
            </td>
            <td>
                <?php 
                echo $cliente['calle_avenida'];
                ?> 
            </td>
            <td>
                <?php 
                echo $cliente['no_casa'];
                ?> 
            </td>
            <td>
                <?php 
                echo $cliente['zona'];
                ?> 
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