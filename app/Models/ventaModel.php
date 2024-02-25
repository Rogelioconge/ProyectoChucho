<?php

namespace App\Models;

use CodeIgniter\Model;

class ventaModel extends Model
{
    protected $table = 'tbl_ope_Venta'; // Nombre de la tabla
    protected $primaryKey = 'Venta_Id'; // Nombre de la clave primaria
    protected $allowedFields = ['Venta_PeliculaId', 'Venta_Boletos', 'Venta_Activo']; // Campos permitidos para insertar
}