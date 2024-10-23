<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Participaciones
 *
 * @property $id
 * @property $eventos_id
 * @property $organizadores_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Organizadores $organizadores
 * @property Eventos $eventos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Participaciones extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['eventos_id', 'organizadores_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organizadores()
    {
        return $this->belongsTo(\App\Models\Organizadores::class, 'eventos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventos()
    {
        return $this->belongsTo(\App\Models\Eventos::class, 'organizadores_id', 'id');
    }
    
}
