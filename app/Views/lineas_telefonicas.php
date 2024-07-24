<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/paginaColor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>
<style>
    a {
        text-decoration: none;
    }
</style>

<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Telefonía
      <i class="bi bi-telephone-outbound-fill"></i>
      </label>
      
      <ul>
        <li><a href="http://localhost/fs2024/ci4_telefonia/public">Inicio</a></li>
        <li><a href="ver_planes">Planes</a></li>
        <li><a href="ver_lineas">Lineas telefonicas</a></li>
        <li><a href="ver_clientes">Ver Clientes</a></li>
      </ul>
    </nav>
    <br>
    <br>
    <div class="container">
        <center>
            <h1>LINEAS TELEFONICAS</h1>

            <a href="nueva_linea" class="btn nuevoCliente">
                Agregar nueva línea
                <i class="bi bi-phone-vibrate"></i>
            </a>

        </center>
        <!--     <a href="<?php echo base_url('ver_planes'); ?>">Planes</a>
-->
        <br>
        <table class="table table-border">
            <thead class="table-primary">
                <tr>
                    
                    <td id="tituloNew">No. Telefono</td>
                    <td id="tituloNew">Fecha Pago</td>
                    <td id="tituloNew">Meses atraso</td>
                    <td id="tituloNew">Plan ID</td>
                    <td id="tituloNew">Cliente ID</td>
                    <td id="tituloNew"><center>Acciones</center></td>

                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($datos as $linea) :
                ?>
                    <tr>
                        <td>
                            <?php
                            echo $linea['no_telefono'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $linea['fecha_pago'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $linea['meses_atraso'];
                            ?>
                        </td>

                        <td>
                            <?php
                            echo $linea['plan_id'];
                            ?>

                        </td>
                        <td>
                            <?php
                            echo $linea['cliente_id'];
                            ?>
                        </td>
                        <td>
                            <center>
                            <a href="buscar_linea/<?php echo $linea['no_telefono']; ?>" class="btn btn-outline-primary">
                            <img src="https://cdn-icons-png.freepik.com/256/5625/5625789.png?semt=ais_hybrid" id="botonUpdate">


                            </a>
                            <a href="eliminar_linea/<?php echo $linea['no_telefono']; ?>" class="btn btn-outline-danger">
                            <img src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" id="botonDelete">
                            </a>
                            </center>
                            
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