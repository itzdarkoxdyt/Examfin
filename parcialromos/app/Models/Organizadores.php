<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Organizadores
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Participaciones[] $participaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Organizadores extends Model
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
        return $this->hasMany(\App\Models\Participaciones::class, 'id', 'eventos_id');
    }
    
}
