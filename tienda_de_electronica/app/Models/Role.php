<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'rol'; // Nombre de la tabla

    protected $primaryKey = 'id_rol'; // Clave primaria

    protected $fillable = [
        'rol', // Campo del rol (ej. 'user' o 'admin')
    ];

    /**
     * Relación con el modelo User.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'id_rol');
    }
}
