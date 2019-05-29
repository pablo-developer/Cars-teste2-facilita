<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cars extends Model{
    protected $table = 'cars';
    protected $primaryKey = 'carID';

    public function cor(){
        return $this->belongsTo('App\Cars','carID');
    }
    public function marca(){
        return $this->belongsTo('App\Marcas','marcaID');
    }
}
