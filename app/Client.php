<?php

namespace talento;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','direccion','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
     public function scopeSearch($query, $name)
    {

        return $query->where('name', 'LIKE', "%$name%");
    }
}
