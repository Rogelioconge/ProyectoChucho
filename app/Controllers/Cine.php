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

    public function resumen()
    {
        // Lógica para cargar la vista del formulario de compra de entradas
        return view('resumen');
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
        return redirect()->to(base_url('Cine/cartelera'))->with('success', 'Compra realizada con éxito.');
    }
    





}
