<?php

namespace App\Models;

use CodeIgniter\Model;

class ImagenModel extends Model
{
    protected $table = 'tbl_ima_Imagen';
    protected $primaryKey = 'Imagen_Id'; 

    protected $allowedFields = ['Imagen_Nombre', 'Imagen_Imagen'];
}
