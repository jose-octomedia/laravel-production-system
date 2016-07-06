<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationEdition extends Model
{
    public function publications(){
        return $this->belongsToMany('App\Publication')
    }
    
    public function contract_ad_editions(){
        return $this->hasMany('App\ContractAdEdition');
    }
}
