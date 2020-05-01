<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = ['setor'];

    public function categorias()
    {
        return $this->hasMany('App\Categoria');
    }

    public function scopeByName($query,$name) {
        return $query->where('setor',$name)->first();
    }
}
