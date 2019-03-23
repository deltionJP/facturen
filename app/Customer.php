<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $table = 'customers';
     public $timestamps = false;
     protected $primaryKey = 'customer_id';
     protected $fillable = ['achternaam', 'tussenvoegsel','voorletter', 'adres', 'postcode', 'plaats', 'email','telefoonnummer'];


}
