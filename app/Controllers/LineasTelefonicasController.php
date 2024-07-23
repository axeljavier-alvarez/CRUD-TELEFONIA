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
        echo "<br><a href='ver_lineas'>Regresar</a>";
    }

    public function eliminarLinea($id=null){
        echo $id;
        $lineas = new LineasTelefonicasModel();
        $lineas->delete(['no_telefono'=>$id]);
        return redirect()->route('ver_lineas');
    }


    public function buscarLinea($id=null){
       // echo $id;
       $lineas = new LineasTelefonicasModel();
       $datos['datos']=$lineas->where('no_telefono', $id)->first();
       return view('form_modificar_linea', $datos);

    }


    public function modificarLinea(){
        $datos=[
            'no_telefono'=>$this->request->getVar('txtTelefono'),
            'fecha_pago'=>$this->request->getVar('txtFecha'),
            'meses_atraso'=>$this->request->getVar('txtMesesAtraso'),
            'plan_id'=>$this->request->getVar('txtPlanId'),
            'cliente_id'=>$this->request->getVar('txtClienteId'),

        ];

        $lineas = new LineasTelefonicasModel();
        $lineas->update($datos['no_telefono'], $datos);
        return redirect()->route('ver_lineas');
    }


   



}
