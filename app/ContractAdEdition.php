<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractAdEdition extends Model
{
    public function contract(){
        return $this->belongsTo('App\ContractAd');
    }
    
    public function edition(){
        return $this->belongsTo('App\PublicationEdition');
    }
}
