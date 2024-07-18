<?php

namespace App\Controllers;
use App\Models\LineasTelefonicasModel;

class LineasTelefonicasController extends BaseController
{
    public function index(): string
    {
        $linea = new LineasTelefonicasModel();
        $datos['datos']=$linea->findAll();

        return view('lineas_telefonicas', $datos);
    }


    public function nuevaLinea()
    {
        
        return view('lineas_telefonicas_nuevas');

    }
    

    public function agregarLinea()
    {
        $lineas = new LineasTelefonicasModel();
        $datos=[

            'no_telefono'=>$this->request->getVar('txtTelefono'),
            'fecha_pago'=>$this->request->getVar('txtFechaPago'),
            'meses_atraso'=>$this->request->getVar('txtMesesDeAtraso'),
            'plan_id'=>$this->request->getVar('txtPlanId'),
            'cliente_id'=>$this->request->getVar('txtClienteId')

        ];
        
        $lineas->insert($datos);
        echo "<br>Datos guardados correctamente";
        echo "<a href='ver_lineas'>Regresar</a>";




    }


    


}
