<?php
namespace App\Models;
use CodeIgniter\Model;

Class Usuarios_model extends Model

{
    protected $table = 'usuarios'; //nombre de la tabla en MySQ
    protected $primaryKey = 'usuario_id'; //identificador de la tabla
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass','perfil_id','baja','created_at']; //todos los campos de la tabla
}