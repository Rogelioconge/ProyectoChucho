<?php

namespace App\Models;

use CodeIgniter\Model;

class ImagenModel extends Model
{
    protected $table = 'tbl_ima_Imagen'; // Nombre de la tabla de imágenes
    protected $primaryKey = 'Imagen_Id'; // Nombre de la clave primaria

    protected $allowedFields = ['Imagen_Nombre', 'Imagen_Imagen']; // Campos permitidos para insertar
}
