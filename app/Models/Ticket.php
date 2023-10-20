<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 *
 * @property $id
 * @property $user_client_id
 * @property $created_at
 * @property $updated_at
 * @property $estatus
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ticket extends Model
{
    
    static $rules = [
		'user_client_id' => 'required',
		'estatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_client_id','estatus'];



}
