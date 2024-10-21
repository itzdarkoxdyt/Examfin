<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Participacione
 *
 * @property $id
 * @property $eventos_id
 * @property $organizador_id
 * @property $created_at
 * @property $updated_at
 *
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
    protected $fillable = ['eventos_id', 'organizador_id'];


}
