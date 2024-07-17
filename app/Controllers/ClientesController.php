<?php

namespace App\Controllers;
use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $cliente = new ClientesModel();
        $datos['datos']=$cliente->findAll();

        return view('clientes', $datos);
    }
}
