<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    ___SOFT_DELETES_BLOCK___
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idProduto', 'nomeProduto'
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
     * Get the Categorias for the Produto.
     */
    public function categorias()
    {
        return $this->belongsToMany(\App\Categoria::class);
    }

}