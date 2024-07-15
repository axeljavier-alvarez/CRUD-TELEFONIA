<?php

namespace App\Models;

use CodeIgniter\Model;

// cambiar el nombre al del archivo
class LineasTelefonicasModel extends Model
{
    protected $table         = 'lineas_telefonicas';
    protected $allowedFields = [
        'no_telefono', 'fecha_pago', 'meses_atraso', 'plan_id', 'cliente_id',
    ];
    
}
