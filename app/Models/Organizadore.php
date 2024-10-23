<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Organizadore
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Participacione[] $participaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Organizadore extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participaciones()
    {
        return $this->hasMany(\App\Models\Participacione::class, 'id', 'eventos_id');
    }
    
}
