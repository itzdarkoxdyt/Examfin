<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Participacione
 *
 * @property $id
 * @property $eventos_id
 * @property $organizadores_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Organizadore $organizadore
 * @property Evento $evento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Participacione extends Model
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
    public function organizadore()
    {
        return $this->belongsTo(\App\Models\Organizadore::class, 'eventos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evento()
    {
        return $this->belongsTo(\App\Models\Evento::class, 'organizadores_id', 'id');
    }
    
}
