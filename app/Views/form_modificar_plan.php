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
   
    <h1>Modificar Plan</h1>
    <div class="row">
    <div class="col-4">
    <form action="<?=base_url('modificar_plan')?>" method="post">
        <div class="mb-3">
            <label for="txtPlanId" class="form-label">ID:</label>
            <input type="number" id="txtPlanId" name="txtPlanId" class="form-control" autocomplete="off" placeholder="Ingrese el código del ID"
        
            value="<?=$datos['plan_id'];?>"
            readonly>
        </div>
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" class="form-control" autocomplete="off"
            placeholder="Ingrese el nombre del plan" value="<?=$datos['nombre'];?>">
        </div>
        <div class="mb-3">
            <label for="txtPagoMensual" class="form-label">Pago mensual</label>
            <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control" autocomplete="off"
            placeholder="Ingrese el pago mensual" value="<?=$datos['pago_mensual'];?>">
        </div>
        <div class="mb-3">
            <label for="txtCantidadMinutos" class="form-label">Cantidad de minutos</label>
            <input type="text" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control" autocomplete="off"
            placeholder="Ingrese la cantidad de minutos" value="<?=$datos['cantidad_minutos'];?>"> 
        </div>
        <div class="mb-3">
            <label for="txtCantidadMensajes" class="form-label">Cantidad de mensajes</label>
            <input type="text" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control" autocomplete="off"
            placeholder="Ingrese la cantidad de mensajes" value="<?=$datos['cantidad_mensajes'];?>">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-success form-control" name="btnGuardarCambios" value="Guardar Cambios">
        </div>
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>