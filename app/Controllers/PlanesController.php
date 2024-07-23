<?php

namespace App\Controllers;
use App\Models\PlanesModel;

class PlanesController extends BaseController
{

    // NUEVO INDEX
    public function index(): string
    {
        $plan = new PlanesModel();
        $datos['datos']=$plan->findAll();

        return view('planes', $datos);
        
    }

    // NUEVO PLAN
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

    // OBJETO PARA AGREGAR PLAN
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

        echo "<br>Datos guardados";

        echo "<br><a href='ver_planes'>Regresar</a>";

    }

    // OBJETO PARA ELIMINAR
    public function eliminarPlan($id=null){
        echo $id;
        $planes = new PlanesModel();
        $planes->delete(['plan_id'=>$id]);
        return redirect()->route('ver_planes');
    }

    // OBJETO PARA BUSCAR PLAN
    public function buscarPlan($id=null){
        // echo $id;
        $planes = new PlanesModel();
        $datos['datos']=$planes->where('plan_id', $id)->first();


        return view('form_modificar_plan', $datos);
        // print_r($datos);
    }

    // OBJETO PARA MODIFICAR
    public function modificarPlan(){
        $datos=[
            'plan_id'=>$this->request->getVar('txtPlanId'), 
            'nombre'=>$this->request->getVar('txtNombre'), 
            'pago_mensual'=>$this->request->getVar('txtPagoMensual'), 
            'cantidad_minutos'=>$this->request->getVar('txtCantidadMinutos'), 
            'cantidad_mensajes'=>$this->request->getVar('txtCantidadMensajes'), 
        ];

        // print_r($datos);
        $planes = new PlanesModel();
        // update planes set nombre = ... , where plan_id = #
        // update(primary key, campos y datos)
        $planes->update($datos['plan_id'], $datos);
        return redirect()->route('ver_planes');
    }


    
}