<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public function positions(){
        return $this->belongsToMany('App\PublicationPosition');
    }
    
    public function sizes(){
        return $this->belongsToMany('App\PublicationSize');
    }
    
    public function sections(){
        return $this->belongsToMany('App\PublicationSection');
    }
    
    public function editions(){
        return $this->belongsToMany('App\PublicationEdition');
    }
    
    public function contract_ads(){
        return $this->hasMany('App\ContractAd');
    }
}
