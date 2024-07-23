<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
   
    <h1>Modificar Linea</h1>
    <div class="row">
    <div class="col-4">
    <form action="<?=base_url('modificar_linea')?>" method="post">
        <div class="mb-3">
            <label for="txtTelefono" class="form-label">Télefono:</label>
            <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" autocomplete="off" placeholder="Ingrese su Télefono"
        
            value="<?=$datos['no_telefono'];?>"
            readonly>
        </div>
        <div class="mb-3">
            <label for="txtFecha" class="form-label">Fecha de Pago:</label>
            <input type="number" id="txtFecha" name="txtFecha" class="form-control" autocomplete="off"
            placeholder="Ingrese la fecha de pago" value="<?=$datos['fecha_pago'];?>">
        </div>
        <div class="mb-3">
            <label for="txtMesesAtraso" class="form-label">Meses de atraso</label>
            <input type="number" id="txtMesesAtraso" name="txtMesesAtraso" class="form-control" autocomplete="off"
            placeholder="Ingrese los meses de atraso" value="<?=$datos['meses_atraso'];?>">
        </div>
        <div class="mb-3">
            <label for="txtPlanId" class="form-label">Plan ID</label>
            <input type="text" id="txtPlanId" name="txtPlanId" class="form-control" autocomplete="off"
            placeholder="Ingrese el ID del plan" value="<?=$datos['plan_id'];?>"> 
        </div>
        <div class="mb-3">
            <label for="txtClienteId" class="form-label">Ingrese el ID del cliente</label>
            <input type="text" id="txtClienteId" name="txtClienteId" class="form-control" autocomplete="off"
            placeholder="Ingrese el ID del cliente" value="<?=$datos['cliente_id'];?>">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-success form-control" name="btnGuardarCambios" value="Guardar Cambios">
        </div>
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>