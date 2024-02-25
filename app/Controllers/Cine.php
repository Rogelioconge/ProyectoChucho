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

        $peliculaId = $this->request->getPost('peliculaId');
        $boletos = $this->request->getPost('entradas');
        $activo = $this->request->getPost('activo');
    
        $modeloVenta = new \App\Models\ventaModel();
        $modeloVenta->query("CALL InsertarVenta($peliculaId, $boletos, $activo)");
        return redirect()->to(base_url('/'))->with('success', 'Compra realizada con éxito.');
    }
    

    public function insertarPelicula()
    {
        $nombre = $this->request->getPost('nombre');
        $imagen = $this->request->getPost('imagen');
        $costo = $this->request->getPost('costo');
        
        $modeloImagen = new \App\Models\ImagenModel();
        $modeloImagen->query("CALL InsertarImagen('$nombre', '$imagen')");
        
        $imagenId = $modeloImagen->insertID();
    
        $modeloPelicula = new \App\Models\PeliculaModel();
        $modeloPelicula->query("CALL InsertarPelicula('$nombre', $imagenId, $costo, 1)");
    
        return redirect()->to(base_url('/'))->with('success', 'Película agregada con éxito.');
    }
    



}
