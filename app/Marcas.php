<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $table = 'marcas';
    protected $primaryKey = 'marcaID';

    public function cars(){
        return $this->hasMany('App\Cars','marcaID');
    }
}
