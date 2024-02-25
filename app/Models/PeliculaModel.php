<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculaModel extends Model
{
    protected $table = 'tbl_cat_Pelicula'; // Nombre de la tabla de películas
    protected $primaryKey = 'Pelicula_Id'; // Nombre de la clave primaria
    protected $allowedFields = ['Pelicula_Pelicula', 'Pelicula_ImagenId', 'Pelicula_Costo', 'Pelicula_Activo']; // Campos permitidos para insertar

    public function insertarPelicula($peliculaPelicula, $imagenId, $costo, $activo)
    {
        // Llamar al procedimiento almacenado para insertar la película
        $query = "CALL InsertarPelicula('$peliculaPelicula', $imagenId, $costo, $activo)";
        $this->db->query($query);
    }
}
