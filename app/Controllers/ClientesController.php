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
        echo "<br>Datos guardados";
        echo "<br><a href='ver_clientes'>Regresar</a>";
    }

    // OBJETO PARA ELIMINAR CLIENTE
    public function eliminarCliente($id=null){
        echo $id;
        $clientes = new ClientesModel();
        $clientes->delete(['cliente_id'=>$id]);
        // nombre de la ruta es lo que se pone aqui
        return redirect()->route('ver_clientes');
    }

    public function buscarCliente($id=null){
        

        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id', $id)->first();
        return view('form_modificar_cliente', $datos);


    }

    public function modificarCliente(){
        $datos=[
            'cliente_id'=>$this->request->getVar('txtId'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'calle_avenida'=>$this->request->getVar('txtCalleAvenida'),
            'no_casa'=>$this->request->getVar('txtNumeroCasa'),
            'zona'=>$this->request->getVar('txtZona'),
        ];

        $clientes = new ClientesModel();
        $clientes->update($datos['cliente_id'], $datos);
        return redirect()->route('ver_clientes');
    }

}
