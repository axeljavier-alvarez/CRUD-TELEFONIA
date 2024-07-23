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
            <h1>LINEAS TELEFONICAS</h1>

            <a href="nueva_linea" class="btn btn-success">
                Nueva Linea
                <i class="bi bi-journal-plus"></i>
            </a>

            <a href="http://localhost/fs2024/ci4_telefonia/public/" class="btn btn-primary">Ir al inicio</a>

        </center>
        <!--     <a href="<?php echo base_url('ver_planes'); ?>">Planes</a>
-->
        <table class="table table-border table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No. Telefono</th>
                    <th>Fecha Pago</th>
                    <th>Meses atraso</th>
                    <th>Plan ID</th>
                    <th>Cliente ID</th>
                    <th>ACCIONES</th>

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
                            <a href="buscar_linea/<?php echo $linea['no_telefono']; ?>" class="btn btn-primary">
                                Actualizar
                                <i class="bi bi-dice-3-fill"></i>

                            </a>
                            <a href="eliminar_linea/<?php echo $linea['no_telefono']; ?>" class="btn btn-danger">
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