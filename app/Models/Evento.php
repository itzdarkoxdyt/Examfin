<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Participacione[] $participaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'ubicacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participaciones()
    {
        return $this->hasMany(\App\Models\Participacione::class, 'id', 'organizadores_id');
    }
    
}
