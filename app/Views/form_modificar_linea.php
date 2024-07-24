<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/editar.css">

</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

    body {
        background-color: #6ADDFF;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(4,664,320)'%3E%3Cstop offset='0' stop-color='%236ADDFF'/%3E%3Cstop offset='1' stop-color='%2337A4FF'/%3E%3C/linearGradient%3E%3Cpattern patternUnits='userSpaceOnUse' id='b' width='300' height='250' x='0' y='0' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='0.03'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect x='0' y='0' fill='url(%23b)' width='100%25' height='100%25'/%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
        font-family: 'Open Sans', sans-serif;
    }

    .login {
        width: 400px;
        margin: 16px auto;
        font-size: 16px;
    }

    /* Reset top and bottom margins from certain elements */
    .login-header,
    .login p {
        margin-top: 0;
        margin-bottom: 0;
    }

    /* The triangle form is achieved by a CSS hack */
    .login-triangle {
        width: 0;
        margin-right: auto;
        margin-left: auto;
        border: 12px solid transparent;
        border-bottom-color: #28d;
    }

    .login-header {
        background: #28d;
        padding: 20px;
        font-size: 1.4em;
        font-weight: normal;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
    }

    .login-container {
        background: #ebebeb;
        padding: 12px;
    }

    /* Every row inside .login-container is defined with p tags */
    .login p {
        padding: 12px;
    }

    .login input {
        box-sizing: border-box;
        display: block;
        width: 100%;
        border-width: 1px;
        border-style: solid;
        padding: 16px;
        outline: 0;
        font-family: inherit;
        font-size: 0.95em;
    }

    .login input[type="email"],
    .login input[type="password"] {
        background: #fff;
        border-color: #bbb;
        color: #555;
    }

    /* Text fields' focus effect */
    .login input[type="email"]:focus,
    .login input[type="password"]:focus {
        border-color: #888;
    }

    .login input[type="submit"] {
        background: #28d;
        border-color: transparent;
        color: #fff;
        cursor: pointer;
    }

    .login input[type="submit"]:hover {
        background: #17c;
    }

    /* Buttons' focus effect */
    .login input[type="submit"]:focus {
        border-color: #05a;
    }
</style>

<body>
    <!-- <h1>Modificar Linea</h1>
    <div class="row">
    <div class="col-4">
    <form action="<?= base_url('modificar_linea') ?>" method="post">
        <div class="mb-3">
            <label for="txtTelefono" class="form-label">Télefono:</label>
            <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" autocomplete="off" placeholder="Ingrese su Télefono"
            value="<?= $datos['no_telefono']; ?>"
            readonly>
        </div>
        <div class="mb-3">
            <label for="txtFecha" class="form-label">Fecha de Pago:</label>
            <input type="number" id="txtFecha" name="txtFecha" class="form-control" autocomplete="off"
            placeholder="Ingrese la fecha de pago" value="<?= $datos['fecha_pago']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtMesesAtraso" class="form-label">Meses de atraso</label>
            <input type="number" id="txtMesesAtraso" name="txtMesesAtraso" class="form-control" autocomplete="off"
            placeholder="Ingrese los meses de atraso" value="<?= $datos['meses_atraso']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtPlanId" class="form-label">Plan ID</label>
            <input type="text" id="txtPlanId" name="txtPlanId" class="form-control" autocomplete="off"
            placeholder="Ingrese el ID del plan" value="<?= $datos['plan_id']; ?>"> 
        </div>
        <div class="mb-3">
            <label for="txtClienteId" class="form-label">Ingrese el ID del cliente</label>
            <input type="text" id="txtClienteId" name="txtClienteId" class="form-control" autocomplete="off"
            placeholder="Ingrese el ID del cliente" value="<?= $datos['cliente_id']; ?>">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-success form-control" name="btnGuardarCambios" value="Guardar Cambios">
        </div>  
    </form>
    -->

    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Modificar Línea Télefonica</h2>

        <form class="login-container" action="<?= base_url('modificar_linea') ?>" method="post">

            <p>
                <label for="txtTelefono" class="form-label">Télefono:</label>
                <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" autocomplete="off" placeholder="Ingrese su Télefono" value="<?= $datos['no_telefono']; ?>" readonly>
            </p>

            <p>
            <label for="txtFecha" class="form-label">Fecha de Pago:</label>
                <input type="number" id="txtFecha" name="txtFecha" class="form-control" autocomplete="off" placeholder="Ingrese la fecha de pago" value="<?= $datos['fecha_pago']; ?>">
            </p>

            <p>
            <label for="txtMesesAtraso" class="form-label">Meses de atraso</label>
                <input type="number" id="txtMesesAtraso" name="txtMesesAtraso" class="form-control" autocomplete="off" placeholder="Ingrese los meses de atraso" value="<?= $datos['meses_atraso']; ?>">

            </p>

            <p>
            <label for="txtPlanId" class="form-label">Plan ID</label>
                <input type="text" id="txtPlanId" name="txtPlanId" class="form-control" autocomplete="off" placeholder="Ingrese el ID del plan" value="<?= $datos['plan_id']; ?>">
            </p>

            <p>
            <label for="txtClienteId" class="form-label">ID del Cliente</label>
                <input type="text" id="txtClienteId" name="txtClienteId" class="form-control" autocomplete="off" placeholder="Ingrese el ID del cliente" value="<?= $datos['cliente_id']; ?>">
            </p>



            <p>
                <input type="submit" class="btn btn-success form-control" name="btnGuardarCambios" value="Guardar Cambios">
            </p>

            <p>
                <center>
                    ¿Desea volver? <a href="http://localhost/fs2024/ci4_telefonia/public/ver_lineas">Presione aca</a>
                </center>
            </p>



        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>