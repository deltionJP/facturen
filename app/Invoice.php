<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
     protected $table = 'facturen';
     public $timestamps = false;
     protected $primaryKey = 'factuurnummer';
     protected $fillable = ['factuurnummer, factuurdatum, factuurtijd', 'customer_id'];

     public function hasCustomer(){
            return $this->hasOne('App\Customer', 'customer_id', 'customer_id');
     }
}
