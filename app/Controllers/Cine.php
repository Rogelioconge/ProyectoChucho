<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Cine extends Controller
{
    public function cartelera()
    {
        // Lógica para cargar la vista de la cartelera de cine
        return view('cartelera');
    }

    public function agregarPelicula()
    {
        return view('agregarPelicula');
    }
    
    public function insertarVenta()
    {
        // Obtener los datos del formulario
        $peliculaId = $this->request->getPost('peliculaId');
        $boletos = $this->request->getPost('entradas');
        $activo = $this->request->getPost('activo');
    
        // Llamar al procedimiento almacenado para insertar la venta
        $modeloVenta = new \App\Models\ventaModel();
        $modeloVenta->query("CALL InsertarVenta($peliculaId, $boletos, $activo)");
    
        // Redireccionar de vuelta a la cartelera con un mensaje de confirmación
        return redirect()->to(base_url('/'))->with('success', 'Compra realizada con éxito.');
    }
    

    public function insertarPelicula()
    {
        // Obtener los datos del formulario
        $nombre = $this->request->getPost('nombre');
        $imagen = $this->request->getPost('imagen');
        $costo = $this->request->getPost('costo');
        
        // Llamar al procedimiento almacenado para insertar la imagen
        $modeloImagen = new \App\Models\ImagenModel();
        $modeloImagen->query("CALL InsertarImagen('$nombre', '$imagen')");
        
        // Obtener el ID de la imagen insertada
        $imagenId = $modeloImagen->insertID();
    
        // Llamar al procedimiento almacenado para insertar la película
        $modeloPelicula = new \App\Models\PeliculaModel();
        $modeloPelicula->query("CALL InsertarPelicula('$nombre', $imagenId, $costo, 1)");
    
        // Redireccionar a la página de la cartelera con un mensaje de éxito
        return redirect()->to(base_url('/'))->with('success', 'Película agregada con éxito.');
    }
    



}
