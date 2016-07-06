<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractAd extends Model
{
    public function contract(){
        return $this->belongsTo('App\Contract');
    }
    
    public function ad_design_type(){
        return $this->belongsTo('App\AdDesignType');
    }
    
    public function section(){
        return $this->belongsTo('App\PublicationSection');
    }
    
    public function size(){
        return $this->belongsTo('App\PublicationSize');
    }
    
    public function position(){
        return $this->belongsTo('App\PublicationPosition');
    }
    
    public function publication(){
        return $this->belongsTo('App\Publication');
    }
    
    public function editions(){
        return $this->hasMany('App\ContractAdEdition');
    }
}
