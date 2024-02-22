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


    public function calcularPrecio()
    {
        $nombrePelicula = $this->request->getGet('nombre'); // Obtener el nombre de la película seleccionada
    
        // Determinar el precio de la entrada según la película seleccionada
        switch ($nombrePelicula) {
            case 'Sin Aire':
                $precio_unitario = 13; // Precio de una entrada para Sin Aire
                break;
            case 'Asesinos':
                $precio_unitario = 12; // Precio de una entrada para Asesinos
                break;
            case 'Saltburn':
                $precio_unitario = 10; // Precio de una entrada para Saltburn
                break;
            case 'Adentro':
                $precio_unitario = 11; // Precio de una entrada para Adentro
                break;
            case 'Oppenhaimer':
                $precio_unitario = 9; // Precio de una entrada para Oppenhaimer
                break;
            case 'Dejar atras':
                $precio_unitario = 11; // Precio de una entrada para Dejar atras
                break;
            case 'Saw':
                $precio_unitario = 10; // Precio de una entrada para Saw
                break;
            case 'La sociedad de la nieve':
                $precio_unitario = 12; // Precio de una entrada para La sociedad de la nieve
                break;
            // Agregar casos para otras películas si es necesario...
            default:
                $precio_unitario = 10; // Precio de una entrada por defecto
                break;
        }
    
        $nombre = $this->request->getPost('nombre');
        $entradas = $this->request->getPost('entradas');
        $pago = $this->request->getPost('pago');
        
        if (!$nombre || !$entradas || !$pago) {
            return redirect()->to(base_url('Cine/resumen'))->with('error', 'Por favor, complete todos los campos.');
        }
    
        $total = $precio_unitario * $entradas;
        $cambio = $pago - $total;
    
        // Pasamos los datos necesarios directamente a la vista del formulario
        return view('resumen', ['nombre' => $nombre, 'total' => $total, 'cambio' => $cambio, 'pago' => $pago]);
    }
    


}
