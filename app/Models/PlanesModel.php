<?php

namespace App\Models;

use CodeIgniter\Model;

// cambiar el nombre al del archivo
class PlanesModel extends Model
{
    protected $table         = 'planes';
    protected $primaryKey = 'plan_id';

    protected $allowedFields = [
        'plan_id', 'nombre', 'pago_mensual', 'cantidad_minutos', 'cantidad_mensajes',
    ];
    
}
