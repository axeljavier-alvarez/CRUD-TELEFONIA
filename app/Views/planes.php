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
            <h1>PLANES</h1>
            <!--    <a href="<?php echo base_url('nuevo_plan') ?>" class="btn btn-primary">Nuevo Plan</a>
 -->
            <a href="nuevo_plan" class="btn nuevoCliente">
                Ingresar nuevo plan
                <img src="https://cdn-icons-png.flaticon.com/512/2839/2839021.png" id="planTelefonico">
            </a>

        </center>
        <br>
        <br>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <td id="tituloNew">Plan del ID</td>
                    <td id="tituloNew">Nombre</td>
                    <td id="tituloNew">Pago mensual</td>
                    <td id="tituloNew">Cantidad minutos</td>
                    <td id="tituloNew">Cantidad de mensajes</td>
                    <td id="tituloNew">
                        <center>
                        Actualizar y eliminar
                        </center>
                    </td>

                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($datos as $plan) :
                ?>
                    <tr>
                        <td>
                            <strong>
                            <?php
                            echo $plan['plan_id'];
                            ?>
                            </strong>
                            
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
                            <center>
                            <a href="<?= base_url('buscar_plan/') . $plan['plan_id']; ?>" class="btn btn-outline-primary">
                                
                                <img src="https://cdn-icons-png.freepik.com/256/5625/5625789.png?semt=ais_hybrid" id="botonUpdate">
    
    
                                </a>
                                <a href="<?= base_url('eliminar_plan/') . $plan['plan_id']; ?>" class="btn btn-outline-danger">
                                   
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