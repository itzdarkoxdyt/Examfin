<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Eventos
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $created_at
 * @property $updated_at
 *
 * @property Participaciones[] $participaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Eventos extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'fecha_inicio', 'fecha_fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participaciones()
    {
        return $this->hasMany(\App\Models\Participaciones::class, 'id', 'organizadores_id');
    }
    
}
