<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineas Teléfonicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<!--
<body>
<div class="container">
<h1>Lineas Teléfonicas</h1>5


<div class="row">
    <div class="col-4">
    <form action="agregar_linea" method="post" class="msform">
        <div class="mb-3">
            <label for="txtTelefono" class="form-label">No Télefono:</label>
            <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" autocomplete="off" placeholder="Ingrese el teléfono">
        </div>
        <div class="mb-3">
            <label for="txtFechaPago" class="form-label">Fecha de pago:</label>
            <input type="number" id="txtFechaPago" name="txtFechaPago" class="form-control" autocomplete="off" placeholder="Ingrese la fecha de pago">
        </div>
        <div class="mb-3">
            <label for="txtMesesDeAtraso" class="form-label">Meses de atraso:</label>
            <input type="number" id="txtMesesDeAtraso" name="txtMesesDeAtraso" class="form-control" autocomplete="off" placeholder="Ingrese los meses de atraso">
        </div>
        <div class="mb-3">
            <label for="txtPlanId" class="form-label">Plan Id:</label>
            <input type="number" id="txtPlanId" name="txtPlanId" class="form-control" autocomplete="off" placeholder="Ingrese el id del plan"> 
        </div>
        <div class="mb-3">
            <label for="txtClienteId" class="form-label">Cliente Id:</label>
            <input type="number" id="txtClienteId" name="txtClienteId" class="form-control" autocomplete="off" placeholder="Ingrese el id del cliente">
        </div>
        <div class="mb-3">
            <input type="submit" class="btnGuardarCliente" name="btnGuardarCliente" class="form-control" value="Guardar Cliente">
        </div>
    </form>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
-->
<body>
    
<div class="login">
  <div class="login-triangle"></div>
  <h2 class="login-header">Nueva Linea Telefonica</h2>
  <form class="login-container" action="agregar_linea" method="post"> 
  <p>
  <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" autocomplete="off" placeholder="Ingrese el teléfono">
  </p>
  <p>
  <input type="number" id="txtFechaPago" name="txtFechaPago" class="form-control" autocomplete="off" placeholder="Ingrese la fecha de pago">
  </p>
    <p>
    <input type="number" id="txtMesesDeAtraso" name="txtMesesDeAtraso" class="form-control" autocomplete="off" placeholder="Ingrese los meses de atraso">
    </p>
    <p>
    <input type="number" id="txtPlanId" name="txtPlanId" class="form-control" autocomplete="off" placeholder="Ingrese el id del plan"> 
    </p>
    <p>
    <input type="number" id="txtClienteId" name="txtClienteId" class="form-control" autocomplete="off" placeholder="Ingrese el id del cliente">
    </p>
    <p>
    <input type="submit" class="btnGuardarCliente" name="btnGuardarCliente" class="form-control" value="Guardar Linea telefonica">
    </p>
  </form>
</div>
</body>
</html>