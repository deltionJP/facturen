<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table = 'products';
    public $timestamps = false;
    protected $dates = ['timestamp'];
    // protected $dateFormat = 'U';
    protected $fillable = ['name, description'];

    public function factuurnummertje(){
           return $this->hasMany('App\Invoice', 'factuurnummer', 'factuurnummer');
    }
}
