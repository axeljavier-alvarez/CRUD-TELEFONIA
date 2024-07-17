<?php

namespace App\Controllers;
use App\Models\PlanesModel;

class PlanesController extends BaseController
{

    public function index(): string
    {
        $plan = new PlanesModel();
        $datos['datos']=$plan->findAll();

        return view('planes', $datos);
        
    }

    public function nuevoPlan(): string
    {

        return view('planes_nuevos');
        
    }

    /* practicar de esta manera para recibir datos

     public function agregarPlan(): string
    {

        $id = $this->request->getVar('txtId');
        //return view('planes_nuevos');
        
        echo "Id = " .$id;
        return "<br>";

    }
    */

    public function agregarPlan()
    {

        $id = $this->request->getVar('txtId');        
        echo "<br>Id = " .$id;

        $nombre=$this->request->getVar('txtNombre');
        echo "<br>Nombre = " .$nombre;

        $pago = $this->request->getVar('txtPagoMensual');        
        echo "<br>El pago = " .$pago;

        $minutos = $this->request->getVar('txtCantidadMinutos');        
        echo "<br>Minutos = " .$minutos;

        $mensajes = $this->request->getVar('txtCantidadMensajes');        
        echo "<br>Mensajes = " .$mensajes;

        // crear objeto
        $planes = new PlanesModel();
        $datos=[
            'plan_id'=>$id, 
            'nombre'=>$nombre, 
            'pago_mensual'=>$pago, 
            'cantidad_minutos'=>$minutos, 
            'cantidad_mensajes'=>$mensajes
        ];

        $planes->insert($datos);

        echo "Datos guardados";

        echo "<a href='ver_planes'>Regresar</a>";

    }
}