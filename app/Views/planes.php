<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <div class="container">
        <center>
            <h1 class="titulo">PLANES</h1>
            <!--    <a href="<?php echo base_url('nuevo_plan') ?>" class="btn btn-primary">Nuevo Plan</a>
 -->
            <a href="nuevo_plan" class="btn btn-success">
                Nuevo plan
                <i class="bi bi-journal-plus"></i>
            </a>
            <a href="http://localhost/fs2024/ci4_telefonia/public/" class="btn btn-primary">Ir al inicio</a>
        </center>
        <br>
        <br>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <td id="estilo1">Plan del ID</td>
                    <td id="estilo1">Nombre</td>
                    <td id="estilo1">Pago mensual</td>
                    <td id="estilo1">Cantidad minutos</td>
                    <td id="estilo1">Cantidad de mensajes</td>
                    <td id="estilo1">Actualizar y eliminar</td>

                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($datos as $plan) :
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
                            <a href="<?= base_url('buscar_plan/') . $plan['plan_id']; ?>" class="btn btn-outline-primary">
                                Actualizar
                                <i class="bi bi-pencil-square"></i>

                            </a>
                            <a href="<?= base_url('eliminar_plan/') . $plan['plan_id']; ?>" class="btn btn-outline-danger">
                                Eliminar
                                <i class="bi bi-trash"></i>
                            </a>
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