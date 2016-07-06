<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdDesignType extends Model
{
    public function contract_ads(){
        return $this->hasMany('App\ContractAd');
    }
}
