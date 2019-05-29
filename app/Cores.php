<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cores extends Model
{
    protected $table = 'cores';
    protected $primaryKey = 'corID';

    public function cars(){
        return $this->hasMany('App\Cars','corID');
    }
    
}
