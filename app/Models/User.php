<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'usuario';

    protected $primaryKey = 'id_usuario';

    public $timestamps = false;

    protected $fillable = [
        'user',
        'password',
        'id_rol',
        'documento',
        'telefono_usuario',
    ];

    protected $hidden = [
        'password',
        'user'
    ];

}
