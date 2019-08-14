<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    ___SOFT_DELETES_BLOCK___
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCategoria', 'nomeCategoria', 'DescricaoCategoria'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /**
     * Get the Produtos for the Categoria.
     */
    public function produtos()
    {
        return $this->belongsToMany(\App\Produto::class);
    }

}