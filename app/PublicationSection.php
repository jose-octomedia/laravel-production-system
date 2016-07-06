<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationSection extends Model
{
    public function contract_ads(){
        return $this->hasMany('App\ContractAd');
    }
    
    public function publications(){
        return $this->belongsToMany('App\Publication')
    }
}
