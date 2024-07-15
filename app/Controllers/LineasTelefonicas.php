<?php

namespace App\Controllers;
use App\Models\LineasTelefonicasModel;

class LineasTelefonicas extends BaseController
{
    public function index(): string
    {
        $linea = new LineasTelefonicasModel();
        $datos['datos']=$linea->findAll();

        return view('lineas_telefonicas', $datos);
    }
}
