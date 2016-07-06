<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function client(){
        return $this->belongsTo('App\Client');
    }
    
    public function contract_type(){
        return $this->belongsTo('App\ContractType');
    }
    
    public function contract_ads(){
        return $this->hasMany('App\ContractAd');
    }
}
