<?php

namespace App\Models;

use CodeIgniter\Model;

class ventaModel extends Model
{
    protected $table = 'tbl_ope_Venta';
    protected $primaryKey = 'Venta_Id';
    protected $allowedFields = ['Venta_PeliculaId', 'Venta_Boletos', 'Venta_Activo'];
}