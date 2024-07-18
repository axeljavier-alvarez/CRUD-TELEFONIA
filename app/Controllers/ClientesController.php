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

    public function nuevoCliente(): string
    {

        return view('clientes_nuevos');
        
    }

   /*  public function agregarCliente(): string
    {

        $id = $this->request->getVar('txtId');
        //return view('planes_nuevos');
        
        echo "Id = " .$id;
        return "<br>";

    } */


    public function agregarCliente()
    {

        /* $id = $this->request->getVar('txtId');        
        echo "<br>Id: = " .$id;

        $apellido=$this->request->getVar('txtApellido');
        echo "<br>Apellido: = " .$apellido;

        $nombre = $this->request->getVar('txtNombre');        
        echo "<br>El pago = " .$nombre;

        $correo = $this->request->getVar('txtCorreoElectronico');        
        echo "<br>Minutos = " .$correo;

        $calle = $this->request->getVar('txtCalle');        
        echo "<br>Mensajes = " .$calle;

        $numeroCasa = $this->request->getVar('txtNumeroCasa');        
        echo "<br>Mensajes = " .$numeroCasa;

        $zona = $this->request->getVar('txtZona');        
        echo "<br>Zona = " .$zona;

        // crear objeto
        $clientes = new ClientesModel();
        $datos=[
            'cliente_id'=>$id, 
            'apellido'=>$apellido,
            'nombre'=>$nombre, 
            'correo_electronico'=>$correo, 
            'calle_avenida'=>$calle, 
            'no_casa'=>$numeroCasa,
            'zona'=>$zona

        ];

        $clientes->insert($datos);

        echo "Datos guardados";

        echo "<a href='ver_clientes'>Regresar</a>";*/

        $clientes = new ClientesModel();

        // simplificado
        $datos=[
            'cliente_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtApellido'),
            'apellido'=>$this->request->getVar('txtNombre'),  
            'correo_electronico'=>$this->request->getVar('txtCorreoElectronico'),     
            'calle_avenida'=>$this->request->getVar('txtCalle'), 
            'no_casa'=>$this->request->getVar('txtNumeroCasa'),
            'zona'=>$this->request->getVar('txtZona')
        ];

        // print_r($datos);
        $clientes->insert($datos);

        echo "Datos guardados";

        echo "<a href='ver_clientes'>Regresar</a>";

    }
}
